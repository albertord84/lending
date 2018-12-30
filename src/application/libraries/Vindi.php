<?php

/**
 * @author Alberto Reyes <albertord84@gmail.com>
 * @name API Integration with Vindi
 * @version 1
 * @date 06/06/2018 4:00AM
 * @depends DUMBU DB
 */

//namespace lending\cls\Payment {

//    require __DIR__ . '/vendor/autoload.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/lending/src/application/third_party/externals/vendor/autoload.php';
//    require_once 'system_config.php';

    class Vindi {

        const store_id = "1077629602";
        const store_key_access = "Bh9yqh34Ar_KjcjTXOUOoJRpExWwL_aoKi_doknv4SI";
//        const store_api_uri = "https://sandbox-app.vindi.com.br/api/v1/"; // Sandbox
        const store_api_uri = "https://app.vindi.com.br/api/v1/"; // Production
        const store_address = "app.vindi.com.br/Dumbu";
        const store_name = "BLK SOCIAL";
        const store_flag_names = "Visa, MasterCard, American Express, Aura, Diners, Discover, Elo, JCB, Visa Electron e Mastercard Débito";
        const prod_lead_id = "231525";
        const prod_1real_id = "231526";

        private $api_arguments;

        function __construct() {
            // Coloca a chave da Vindi (VINDI_API_KEY) na variável de ambiente do PHP.
            // putenv('VINDI_API_KEY=' . $this::store_key_access);
            // Coloca a chave da Vindi (VINDI_API_URI) na variável de ambiente do PHP.
            // putenv('VINDI_API_URI=' . $this::store_api_uri);

            $this->api_arguments = array(
                'VINDI_API_KEY' => $this::store_key_access,
                'VINDI_API_URI' => $this::store_api_uri
            );
        }

        /**
         * Add new client to Vindi
         * @param type $name
         * @param type $email
         * @return Vindi client id or Exception whether fail
         */
        public function addClient($name, $email = null) {
            // Cria um novo cliente:
            try {
                // Instancia o serviço de Customers (Clientes) com o array contendo VINDI_API_KEY e VINDI_API_URI
                $customerService = new \Vindi\Customer($this->api_arguments);
                $customer = $customerService->create([
                    'name' => $name,
                    'email' => $email,
                ]);
            } catch (\Exception $e) {
//                return $e;
                return NULL;
            }

            return $customer->id;
        }

        /**
         * Add payment data to Client
         * @param type $client_id Follows client id
         * @param type $payment_data 
         * @return payment data or \Exception whether error
         */
        public function addClientPayment($client_id, $payment_data) {
            $payment = null;
            $return = new \stdClass();
            $return->success = false;
            try {
                $DB = new \follows\cls\DB();
                $client_data = $DB->get_client_payment_data($client_id);
                $payment_profilesService = new \Vindi\PaymentProfile($this->api_arguments);
                $payment = $payment_profilesService->create([
                    "holder_name" => $payment_data['credit_card_name'],
                    "card_expiration" => $payment_data['credit_card_exp_month'] . "/" . $payment_data['credit_card_exp_year'],
                    "card_number" => $payment_data['credit_card_number'],
                    "card_cvv" => $payment_data['credit_card_cvc'],
                    "payment_method_code" => "credit_card",
                    "customer_id" => $client_data->gateway_client_id
                ]);
            } catch (Exception $e) {
                $return->message = $e->getMessage();
                return $return;
            }
            $return->success = $payment->status == 'active';
            return $return;
        }

        /**
         * Add new Assigment for client 
         * @param type $client_id Follows client id
         * @param time $date
         * @param plane_id In update plane situation
         * @return \Exception recurrency payment or exception
         */
        public function create_recurrency_payment($client_id, $date = NULL, $dumbu_plane_id = NULL) {
            // Cria nova assignatura:
            if(!$date) $date=  time ();                
            $date = date("d/m/Y",$date);
            
            $return = new \stdClass();
            $return->success = false;
            try {
                // Load cient data from DB
                $DB = new \follows\cls\DB();
                $client_data = $DB->get_client_payment_data($client_id);
                $gateway_plane_id = $DB->get_gateway_plane_id($dumbu_plane_id);
                        
                // Instancia o serviço de Subscription (Assinaturas) com o array contendo VINDI_API_KEY e VINDI_API_URI
                $subscriptionService = new \Vindi\Subscription($this->api_arguments);
                $subscription = $subscriptionService->create([
                    "start_at" => $date,
                    "plan_id" => $gateway_plane_id, //$client_data->gateway_plane_id,
                    "customer_id" => $client_data->gateway_client_id,
                    "payment_method_code" => "credit_card"
                ]);
            } catch (\Exception $e) {
                $return->message = $e->getMessage();
                return $return;
            }
            $return->success = $subscription->status == 'active' || $subscription->status == 'future';
            $return->payment_key = isset($subscription) && isset($subscription->id)? $subscription->id : NULL;
            $return->subscription = $subscription;
            return $return;
        }

        /**
         * Reschedule Assigment for client 
         * @param type $client_id Follows client id
         * @param timestamp $date
         * @return \Exception reschedule recurrency payment or exception
         */
        public function reschedule_recurrency_payment($client_id, $date) {
            // Cria nova assignatura:
            $return = new \stdClass();
            $return->success = false;
            try {
                // Load cient data from DB
                $DB = new \follows\cls\DB();
                $client_data = $DB->get_client_payment_data($client_id);
                if (!$client_data) throw new Exception ("Client payment data not found");

                // Instancia o serviço de Subscription (Assinaturas) com o array contendo VINDI_API_KEY e VINDI_API_URI
                $subscriptionService = new \Vindi\Subscription($this->api_arguments);
                $subscription = $subscriptionService->update($client_data->payment_key, [
                    "billing_trigger_day" => $date
                ]);
            } catch (\Exception $e) {
                $return->message = $e->getMessage();
                return $return;
            }
            $return->success = $subscription->status == 'active' || $subscription->status == 'future';
            $return->payment_key = isset($subscription) && isset($subscription->id)? $subscription->id : NULL;
            $return->subscription = $subscription;
            return $return;
        }

        /**
         * Delete recurrency payment status (Cancel subscription)
         * @param type $payment_id
         * @return Subscription or \Exception
         */
        public function cancel_recurrency_payment($payment_id) {
            $return = new \stdClass();
            $return->success = false;
            try {
                // Instancia o serviço de Subscription (Assinaturas) com o array contendo VINDI_API_KEY e VINDI_API_URI
                $subsService = new \Vindi\Subscription($this->api_arguments);
                $subs = $subsService->delete($payment_id);
            } catch (\Exception $e) {
                $return->message = $e->getMessage();
                return $return;
            }
            $return->success = $subs->status == 'canceled' || $subs->status == 'expired';
            return $return;
        }

        /**
         * Check recurrency payment status
         * @param type $payment_id
         * @return Payment or \Exception
         */
        public function query_recurrency_payment($payment_id) {
            try {
                // Instancia o serviço de Subscription (Assinaturas) com o array contendo VINDI_API_KEY e VINDI_API_URI
                $subsService = new \Vindi\Subscription($this->api_arguments);
                $subs = $subsService->get($payment_id);
            } catch (\Exception $e) {
                return $e;
            }

            return $subs;
        }

        /**
         * Create a instantan payment 
         * @param type $client_id Follows client id
         * @param type $prod_id Products id
         * @param type $amount Amount of Products to by payed
         * @return \Exception recurrency payment or exception
         */
        public function create_payment($client_id, $prod_id = this::prod_1real_id, $amount = 0) {
            // Cria pagamento abulso:
            $return = new \stdClass();
            $return->success = false;
            try {
                // Load cient data from DB
                $DB = new \follows\cls\DB();
                $client_data = $DB->get_client_payment_data($client_id);
                //var_dump($client_data);
                // Instancia o serviço de Bill (Fatura) com o array contendo VINDI_API_KEY e VINDI_API_URI
//                $billService = new \Vindi\Bill($this->api_arguments);
                $billService = new \Vindi\Bill($this->api_arguments);
                $bill = $billService->create([
                    "plan_id" => $client_data->gateway_plane_id,
                    "customer_id" => $client_data->gateway_client_id,
                    "payment_method_code" => "credit_card",
                    "bill_items" => [
                        [
                            "product_id" => $prod_id,
                            "amount" => $amount
                        ]
                    ]
                ]);
            } catch (\Exception $e) {
                $return->message = $e->getMessage();
                return $return;
            }
            $return->success = true;
            $return->status  = $bill->status;
            return $return;
        }

        /**
         * Check payment status
         * @param type $payment_id
         * @return Payment or \Exception
         */
        public function query_payment($payment_id) {
            try {
                // Instancia o serviço de Bill (Fatura) com o array contendo VINDI_API_KEY e VINDI_API_URI
                $billService = new \Vindi\Bill($this->api_arguments);
                $bill = $billService->get($payment_id);
            } catch (\Exception $e) {
                return $e;
            }

            return $bill;
        }

        public static function detectCardType($num) {
            $re = array(
                "visa" => "/^4[0-9]{12}(?:[0-9]{3})?$/",
                "mastercard" => "/^5[1-5][0-9]{14}$/",
                "amex" => "/^3[47][0-9]{13}$/",
                "discover" => "/^6(?:011|5[0-9]{2})[0-9]{12}$/",
                "diners" => "/^3[068]\d{12}$/",
                "elo" => "/^((((636368)|(438935)|(504175)|(451416)|(636297))\d{0,10})|((5067)|(4576)|(4011))\d{0,12})$/",
                "hipercard" => "/^(606282\d{10}(\d{3})?)|(3841\d{15})$/"
            );

            if (preg_match($re['visa'], $num)) {
                return 'Visa';
            } else if (preg_match($re['mastercard'], $num)) {
                return 'Mastercard';
            } else if (preg_match($re['amex'], $num)) {
                return 'Amex';
            } else if (preg_match($re['discover'], $num)) {
                return 'Discover';
            } else if (preg_match($re['diners'], $num)) {
                return 'Diners';
            } else if (preg_match($re['elo'], $num)) {
                return 'Elo';
            } else if (preg_match($re['hipercard'], $num)) {
                return 'Hipercard';
            } else {
                return false;
            }
        }

    }

//}   