<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**

 * @category CodeIgniter-Model: credit_card_Model

 * 

 * @access public

 * @todo <description>

 * 

 */
class Credit_card_model extends CI_Model {

  function construct() {

    parent::construct();
  }

  function save($client_id, $credit_card_name, $credit_card_number, $credit_card_cvv, $credit_card_exp_month, $credit_card_exp_year, $token) {

    $this->client_id = $client_id;
    $this->credit_card_name = $credit_card_name;
    $this->credit_card_number = $credit_card_number;
    $this->credit_card_cvv = $credit_card_cvv;
    $this->credit_card_exp_month = $credit_card_exp_month;
    $this->credit_card_exp_year = $credit_card_exp_year;
    $this->token = $token;


    $this->db->insert('credit_card', $this);



    return $this->db->insert_id();
  }

  function remove($id) {

    $this->db->delete('credit_card', array('id' => $id));
  }

  function update($id, $client_id, $credit_card_name, $credit_card_number, $credit_card_cvv, $credit_card_exp_month, $credit_card_exp_year, $token) {

    $this->client_id = $client_id;
    $this->credit_card_name = $credit_card_name;
    $this->credit_card_number = $credit_card_number;
    $this->credit_card_cvv = $credit_card_cvv;
    $this->credit_card_exp_month = $credit_card_exp_month;
    $this->credit_card_exp_year = $credit_card_exp_year;
    $this->token = $token;


    $this->db->update('credit_card', $this, array('id' => $id));
  }

  function get_by_id($id) {

    $this->db->where('id', $id);

    $query = $this->db->get('credit_card');



    return $query->row();
  }

  function get_all() {

    $this->db->select('*')->from('credit_card');

    //$this->db->order_by('<field>', '<type>'); ==> asc/desc

    $query = $this->db->get();



    return $query->result();
  }

}
?>

