<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**

 * @category CodeIgniter-Model: transactions_status_old_Model

 * 

 * @access public

 * @todo <description>

 * 

 */
class Transactions_status_old_model extends CI_Model {

  function construct() {

    parent::construct();
  }

  function save($name, $description) {

    $this->name = $name;
    $this->description = $description;


    $this->db->insert('transactions_status_old', $this);



    return $this->db->insert_id();
  }

  function remove($id) {

    $this->db->delete('transactions_status_old', array('id' => $id));
  }

  function update($id, $name, $description) {

    $this->name = $name;
    $this->description = $description;


    $this->db->update('transactions_status_old', $this, array('id' => $id));
  }

  function get_by_id($id) {

    $this->db->where('id', $id);

    $query = $this->db->get('transactions_status_old');



    return $query->row();
  }

  function get_all() {

    $this->db->select('*')->from('transactions_status_old');

    //$this->db->order_by('<field>', '<type>'); ==> asc/desc

    $query = $this->db->get();



    return $query->result();
  }

}
?>

