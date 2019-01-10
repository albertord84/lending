<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**

 * @category CodeIgniter-Model: affiliates_Model

 * 

 * @access public

 * @todo <description>

 * 

 */
class Affiliates_model extends CI_Model {

  function construct() {

    parent::construct();
  }

  function save($status_id, $role, $complete_name, $email, $phone_ddd, $phone_number, $pass, $init_date, $end_date, $status_date, $code) {

    $this->status_id = $status_id;
    $this->role = $role;
    $this->complete_name = $complete_name;
    $this->email = $email;
    $this->phone_ddd = $phone_ddd;
    $this->phone_number = $phone_number;
    $this->pass = $pass;
    $this->init_date = $init_date;
    $this->end_date = $end_date;
    $this->status_date = $status_date;
    $this->code = $code;


    $this->db->insert('affiliates', $this);



    return $this->db->insert_id();
  }

  function remove($id) {

    $this->db->delete('affiliates', array('id' => $id));
  }

  function update($id, $status_id, $role, $complete_name, $email, $phone_ddd, $phone_number, $pass, $init_date, $end_date, $status_date, $code) {

    $this->status_id = $status_id;
    $this->role = $role;
    $this->complete_name = $complete_name;
    $this->email = $email;
    $this->phone_ddd = $phone_ddd;
    $this->phone_number = $phone_number;
    $this->pass = $pass;
    $this->init_date = $init_date;
    $this->end_date = $end_date;
    $this->status_date = $status_date;
    $this->code = $code;


    $this->db->update('affiliates', $this, array('id' => $id));
  }

  function get_by_id($id) {

    $this->db->where('id', $id);

    $query = $this->db->get('affiliates');



    return $query->row();
  }

  function get_all() {

    $this->db->select('*')->from('affiliates');

    //$this->db->order_by('<field>', '<type>'); ==> asc/desc

    $query = $this->db->get();



    return $query->result();
  }

}
?>

