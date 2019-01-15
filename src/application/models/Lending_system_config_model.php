<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**

 * @category CodeIgniter-Model: lending_system_config_Model

 * 

 * @access public

 * @todo <description>

 * 

 */
class Lending_system_config_model extends CI_Model {

  function construct() {

    parent::construct();
  }

  function save($name, $value, $description) {

    $this->name = $name;
    $this->value = $value;
    $this->description = $description;


    $this->db->insert('lending_system_config', $this);



    return $this->db->insert_id();
  }

  function remove($id) {

    $this->db->delete('lending_system_config', array('id' => $id));
  }

  function update($id, $name, $value, $description) {

    $this->name = $name;
    $this->value = $value;
    $this->description = $description;


    $this->db->update('lending_system_config', $this, array('id' => $id));
  }

  function get_by_id($id) {

    $this->db->where('id', $id);

    $query = $this->db->get('lending_system_config');



    return $query->row();
  }

  function get_all() {

    $this->db->select('*')->from('lending_system_config');

    //$this->db->order_by('<field>', '<type>'); ==> asc/desc

    $query = $this->db->get();



    return $query->result();
  }

}
?>

