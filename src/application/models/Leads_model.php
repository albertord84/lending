<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**

 * @category CodeIgniter-Model: leads_Model

 * 

 * @access public

 * @todo <description>

 * 

 */
class Leads_model extends CI_Model {

  function construct() {

    parent::construct();
  }

  function save($cpf, $name, $email, $phone_ddd, $phone_number) {

    $this->cpf = $cpf;
    $this->name = $name;
    $this->email = $email;
    $this->phone_ddd = $phone_ddd;
    $this->phone_number = $phone_number;


    $this->db->insert('leads', $this);



    return $this->db->insert_id();
  }

  function remove($leads_id) {

    $this->db->delete('leads', array('leads_id' => $leads_id));
  }

  function update($leads_id, $cpf, $name, $email, $phone_ddd, $phone_number) {

    $this->cpf = $cpf;
    $this->name = $name;
    $this->email = $email;
    $this->phone_ddd = $phone_ddd;
    $this->phone_number = $phone_number;


    $this->db->update('leads', $this, array('leads_id' => $leads_id));
  }

  function get_by_id($leads_id) {

    $this->db->where('leads_id', $leads_id);

    $query = $this->db->get('leads');



    return $query->row();
  }

  function get_all() {

    $this->db->select('*')->from('leads');

    //$this->db->order_by('<field>', '<type>'); ==> asc/desc

    $query = $this->db->get();



    return $query->result();
  }

}
?>

