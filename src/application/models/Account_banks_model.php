<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**

 * @category CodeIgniter-Model: account_banks_Model

 * 

 * @access public

 * @todo <description>

 * 

 */
class Account_banks_model extends CI_Model {

  function construct() {

    parent::construct();
  }

  function save($client_id, $bank, $agency, $account, $account_type, $dig, $titular_name, $titular_cpf, $propietary_type) {

    $this->client_id = $client_id;
    $this->bank = $bank;
    $this->agency = $agency;
    $this->account = $account;
    $this->account_type = $account_type;
    $this->dig = $dig;
    $this->titular_name = $titular_name;
    $this->titular_cpf = $titular_cpf;
    $this->propietary_type = $propietary_type;


    $this->db->insert('account_banks', $this);



    return $this->db->insert_id();
  }

  function remove($id) {

    $this->db->delete('account_banks', array('id' => $id));
  }

  function update($id, $client_id, $bank, $agency, $account, $account_type, $dig, $titular_name, $titular_cpf, $propietary_type) {

    $this->client_id = $client_id;
    $this->bank = $bank;
    $this->agency = $agency;
    $this->account = $account;
    $this->account_type = $account_type;
    $this->dig = $dig;
    $this->titular_name = $titular_name;
    $this->titular_cpf = $titular_cpf;
    $this->propietary_type = $propietary_type;


    $this->db->update('account_banks', $this, array('id' => $id));
  }

  function get_by_id($id) {

    $this->db->where('id', $id);

    $query = $this->db->get('account_banks');



    return $query->row();
  }

  function get_all() {

    $this->db->select('*')->from('account_banks');

    //$this->db->order_by('<field>', '<type>'); ==> asc/desc

    $query = $this->db->get();



    return $query->result();
  }

}
?>

