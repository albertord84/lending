<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**

 * @category CodeIgniter-Model: hackers_Model

 * 

 * @access public

 * @todo <description>

 * 

 */
class Hackers_model extends CI_Model {

  function construct() {

    parent::construct();
  }

  function save($cpf, $email, $phone, $release) {

    $this->cpf = $cpf;
    $this->email = $email;
    $this->phone = $phone;
    $this->release = $release;


    $this->db->insert('hackers', $this);



    return $this->db->insert_id();
  }

  function remove($id_hack) {

    $this->db->delete('hackers', array('id_hack' => $id_hack));
  }

  function update($id_hack, $cpf, $email, $phone, $release) {

    $this->cpf = $cpf;
    $this->email = $email;
    $this->phone = $phone;
    $this->release = $release;


    $this->db->update('hackers', $this, array('id_hack' => $id_hack));
  }

  function get_by_id($id_hack) {

    $this->db->where('id_hack', $id_hack);

    $query = $this->db->get('hackers');



    return $query->row();
  }

  function get_all() {

    $this->db->select('*')->from('hackers');

    //$this->db->order_by('<field>', '<type>'); ==> asc/desc

    $query = $this->db->get();



    return $query->result();
  }

}
?>

