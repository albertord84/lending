<?php

class Payment extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('vindi');
        $this->load->model('class/system_config');
        $GLOBALS['sistem_config'] = $this->system_config->load();
        //require_once($_SERVER['DOCUMENT_ROOT'] . '/lending/src/application/libraries/d4sign-php-master/sdk/vendor/autoload.php');
    }

    // ACESSADOS EXTERNAMENTE POR CURL
    public function vindi_notif_post() {
        try {
            $post_str = urldecode($_POST['post_str']);
            $post = urldecode($post_str);
            $post = json_decode($post);
            // Write the contents back to the file
            $path = __dir__ . '/../../logs/vindi/';
            $file = $path . "vindi_notif_post-" . date("d-m-Y") . ".log";
            $result = file_put_contents($file, "\n\n", FILE_APPEND);
            $result = file_put_contents($file, serialize($post_str), FILE_APPEND);
            if (isset($post->event) && isset($post->event->type)) {
                // Recurrence created succefully
                if ($post->event->type == "charge_created") {
                    $gateway_client_id = $post->event->data->charge->customer->id;
                    // Activate User
                }
                // Bill paid succefully
                if (isset($post->event) && isset($post->event->type) && $post->event->type == "bill_paid") {
                    if (isset($post->event->data) && isset($post->event->data->bill) && $post->event->data->bill->status = "paid") {
                        $result = file_put_contents($file, "bill_paid DETECTED!!:\n", FILE_APPEND);
                        // Activate User
                        //$gateway_client_id = $post->event->data->bill->customer->id;
                        $gateway_payment_key = $post->event->data->bill->subscription->id;
                        //1. activar cliente
                        $this->load->model('class/user_model');
                        $this->load->model('class/user_status');
                        $this->load->model('class/client_model');
                        //$client_id = $this->client_model->get_client_id_by_gateway_client_id($gateway_client_id);
                        $client_id = $this->client_model->get_client_id_by_gateway_payment_key($gateway_payment_key);
                        if ($client_id) {
                            $this->user_model->update_user($client_id, array(
                                'status_id' => user_status::ACTIVE));
                            $result = file_put_contents($file, "$client_id: ACTIVED" . "\n\n", FILE_APPEND);
                            //2. pay_day un mes para el frente
                            $this->client_model->update_client(
                                    $client_id, array('pay_day' => strtotime("+1 month", time())));
                            $result = file_put_contents($file, "$client_id: +1 month from now" . "\n\n\n", FILE_APPEND);
                        } else {
                            $result = file_put_contents($file, "Subscription($gateway_payment_key): NOT FOUND HERE!!!" . "\n\n\n", FILE_APPEND);
                        }
                        //die("Activate client -> Payment done!! -> Dia da cobrança um mês para frente");
                    }
                }
            } else {
                $result = file_put_contents($file, "\nERROR:\n", FILE_APPEND);
                $result = file_put_contents($file, $post, FILE_APPEND);
                $result = file_put_contents($file, "\nERROR END\n", FILE_APPEND);
                echo "FAIL";
                return;
            }
        } catch (\Exception $exc) {
            echo $exc->getTraceAsString();
            $result = file_put_contents($file, "$client_id: " . $exc->getTraceAsString() . "\n\r\n\r", FILE_APPEND);
            return;
        }

        if ($result === FALSE) {
            echo "FAIL";
            return;
        }
        echo "OK";
    }

    public function vindi_addClient() {
        $credit_card_name = urldecode($_POST['credit_card_name']);
        $user_email = urldecode($_POST['user_email']);
        //$result = $this->vindi->addClient("Alberto 777", "777@god.god");
        $result = $this->vindi->addClient($credit_card_name, $user_email);
        echo json_encode($result);
    }

    public function vindi_addClientPayment() {
        $user_id = urldecode($_POST['user_id']);
        $datas = (array) json_decode(urldecode($_POST['datas']));
        //$payment_data['credit_card_flag'] = 'Amex';
        //$payment_data['credit_card_number'] = '3771 697428 53003';
        //$payment_data['credit_card_name'] = 'PEDRO PETTI';
        //$payment_data['credit_card_exp_month'] = '07';
        //$payment_data['credit_card_exp_year'] = '2022';
        //$payment_data['credit_card_cvc'] = '5529';
        //$result = $this->vindi->addClientPayment("8887908", $payment_data);
        $result = $this->vindi->addClientPayment($user_id, $datas);
        echo json_encode($result);
    }

    public function vindi_cancel_recurrency_payment() {
        $client_payment_key = urldecode($_POST['client_payment_key']);
        $result = $this->vindi->cancel_recurrency_payment($client_payment_key);
        echo json_encode($result);
    }

    public function vindi_create_payment() {
        $gateway_client_id = urldecode($_POST['gateway_client_id']);
        $gateway_plane_id = urldecode($_POST['gateway_plane_id']);
        $gateway_prod_id = urldecode($_POST['prod_id']);
        $amount = urldecode($_POST['amount']);
        $result = $this->vindi->create_payment("8887908");
        //$result = $this->vindi->create_payment($gateway_client_id);
        echo json_encode($result);
    }

    public function vindi_create_recurrency_payment() {
        $user_id = urldecode($_POST['user_id']);
        $pay_day = json_decode(urldecode($_POST['pay_day']));
        $plane_type = json_decode(urldecode($_POST['plane_type']));
        $result = $this->vindi->create_recurrency_payment($user_id, $pay_day, $plane_type);
        echo json_encode($result);
    }

}
