<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**

 * @category CodeIgniter-Model: transactions_Model

 * 

 * @access public

 * @todo <description>

 * 

 */
class Transactions_model extends CI_Model {

  function construct() {

    parent::construct();
  }

  function save($status_id, $cpf, $name, $email, $phone_ddd, $phone_number, $cep, $street_address, $number_address, $complement_number_address, $city_address, $state_address, $http_server_vars, $utm_source, $purchase_counter, $amount_solicited, $number_plots, $invoice_id, $total_effective_cost, $way_to_spend, $folder_in_server, $contract_id, $ucpf, $affiliate_code, $ccb_number, $new_photos_code, $new_account_bank_code, $new_sing_us_code, $doc_d4sign, $key_signer, $pay_date, $utm_campaign, $utm_content, $tax, $braspag_id, $payment_source, $district, $captured, $tac) {

    $this->status_id = $status_id;
    $this->cpf = $cpf;
    $this->name = $name;
    $this->email = $email;
    $this->phone_ddd = $phone_ddd;
    $this->phone_number = $phone_number;
    $this->cep = $cep;
    $this->street_address = $street_address;
    $this->number_address = $number_address;
    $this->complement_number_address = $complement_number_address;
    $this->city_address = $city_address;
    $this->state_address = $state_address;
    $this->http_server_vars = $http_server_vars;
    $this->utm_source = $utm_source;
    $this->purchase_counter = $purchase_counter;
    $this->amount_solicited = $amount_solicited;
    $this->number_plots = $number_plots;
    $this->invoice_id = $invoice_id;
    $this->total_effective_cost = $total_effective_cost;
    $this->way_to_spend = $way_to_spend;
    $this->folder_in_server = $folder_in_server;
    $this->contract_id = $contract_id;
    $this->ucpf = $ucpf;
    $this->affiliate_code = $affiliate_code;
    $this->ccb_number = $ccb_number;
    $this->new_photos_code = $new_photos_code;
    $this->new_account_bank_code = $new_account_bank_code;
    $this->new_sing_us_code = $new_sing_us_code;
    $this->doc_d4sign = $doc_d4sign;
    $this->key_signer = $key_signer;
    $this->pay_date = $pay_date;
    $this->utm_campaign = $utm_campaign;
    $this->utm_content = $utm_content;
    $this->tax = $tax;
    $this->braspag_id = $braspag_id;
    $this->payment_source = $payment_source;
    $this->district = $district;
    $this->captured = $captured;
    $this->tac = $tac;


    $this->db->insert('transactions', $this);



    return $this->db->insert_id();
  }

  function remove($id) {

    $this->db->delete('transactions', array('id' => $id));
  }

  function update($id, $status_id, $cpf, $name, $email, $phone_ddd, $phone_number, $cep, $street_address, $number_address, $complement_number_address, $city_address, $state_address, $http_server_vars, $utm_source, $purchase_counter, $amount_solicited, $number_plots, $invoice_id, $total_effective_cost, $way_to_spend, $folder_in_server, $contract_id, $ucpf, $affiliate_code, $ccb_number, $new_photos_code, $new_account_bank_code, $new_sing_us_code, $doc_d4sign, $key_signer, $pay_date, $utm_campaign, $utm_content, $tax, $braspag_id, $payment_source, $district, $captured, $tac) {

    $this->status_id = $status_id;
    $this->cpf = $cpf;
    $this->name = $name;
    $this->email = $email;
    $this->phone_ddd = $phone_ddd;
    $this->phone_number = $phone_number;
    $this->cep = $cep;
    $this->street_address = $street_address;
    $this->number_address = $number_address;
    $this->complement_number_address = $complement_number_address;
    $this->city_address = $city_address;
    $this->state_address = $state_address;
    $this->http_server_vars = $http_server_vars;
    $this->utm_source = $utm_source;
    $this->purchase_counter = $purchase_counter;
    $this->amount_solicited = $amount_solicited;
    $this->number_plots = $number_plots;
    $this->invoice_id = $invoice_id;
    $this->total_effective_cost = $total_effective_cost;
    $this->way_to_spend = $way_to_spend;
    $this->folder_in_server = $folder_in_server;
    $this->contract_id = $contract_id;
    $this->ucpf = $ucpf;
    $this->affiliate_code = $affiliate_code;
    $this->ccb_number = $ccb_number;
    $this->new_photos_code = $new_photos_code;
    $this->new_account_bank_code = $new_account_bank_code;
    $this->new_sing_us_code = $new_sing_us_code;
    $this->doc_d4sign = $doc_d4sign;
    $this->key_signer = $key_signer;
    $this->pay_date = $pay_date;
    $this->utm_campaign = $utm_campaign;
    $this->utm_content = $utm_content;
    $this->tax = $tax;
    $this->braspag_id = $braspag_id;
    $this->payment_source = $payment_source;
    $this->district = $district;
    $this->captured = $captured;
    $this->tac = $tac;


    $this->db->update('transactions', $this, array('id' => $id));
  }

  function get_by_id($id) {

    $this->db->where('id', $id);

    $query = $this->db->get('transactions');



    return $query->row();
  }

  function get_all() {

    $this->db->select('*')->from('transactions');

    //$this->db->order_by('<field>', '<type>'); ==> asc/desc

    $query = $this->db->get();



    return $query->result();
  }

}
?>

