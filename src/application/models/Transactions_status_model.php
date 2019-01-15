<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**

 * @category CodeIgniter-Model: transactions_status_Model

 * 

 * @access public

 * @todo <description>

 * 

 */
class Transactions_status_model extends CI_Model {

  function construct() {

    parent::construct();
  }

  function save($false_id, $name_status, $description) {

    $this->false_id = $false_id;
    $this->name_status = $name_status;
    $this->description = $description;


    $this->db->insert('transactions_status', $this);



    return $this->db->insert_id();
  }

  function remove($id) {

    $this->db->delete('transactions_status', array('id' => $id));
  }

  function update($id, $false_id, $name_status, $description) {

    $this->false_id = $false_id;
    $this->name_status = $name_status;
    $this->description = $description;


    $this->db->update('transactions_status', $this, array('id' => $id));
  }

  function get_by_id($id) {

    $this->db->where('id', $id);

    $query = $this->db->get('transactions_status');



    return $query->row();
  }

  function get_all() {

    $this->db->select('*')->from('transactions_status');

    //$this->db->order_by('<field>', '<type>'); ==> asc/desc

    $query = $this->db->get();



    return $query->result();
  }

}
?>

