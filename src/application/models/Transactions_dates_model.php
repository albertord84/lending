<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**

 * @category CodeIgniter-Model: transactions_dates_Model

 * 

 * @access public

 * @todo <description>

 * 

 */
class Transactions_dates_model extends CI_Model {

  function construct() {

    parent::construct();
  }

  function save($transaction_id, $status_id, $date, $additional_data) {

    $this->transaction_id = $transaction_id;
    $this->status_id = $status_id;
    $this->date = $date;
    $this->additional_data = $additional_data;


    $this->db->insert('transactions_dates', $this);



    return $this->db->insert_id();
  }

  function remove($id) {

    $this->db->delete('transactions_dates', array('id' => $id));
  }

  function update($id, $transaction_id, $status_id, $date, $additional_data) {

    $this->transaction_id = $transaction_id;
    $this->status_id = $status_id;
    $this->date = $date;
    $this->additional_data = $additional_data;


    $this->db->update('transactions_dates', $this, array('id' => $id));
  }

  function get_by_id($id) {

    $this->db->where('id', $id);

    $query = $this->db->get('transactions_dates');



    return $query->row();
  }

  function get_all() {

    $this->db->select('*')->from('transactions_dates');

    //$this->db->order_by('<field>', '<type>'); ==> asc/desc

    $query = $this->db->get();



    return $query->result();
  }

}
?>

