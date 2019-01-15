<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**

 * @category CodeIgniter-Model: watchdog_type_Model

 * 

 * @access public

 * @todo <description>

 * 

 */
class Watchdog_type_model extends CI_Model {

  function construct() {

    parent::construct();
  }

  function save($action, $source) {

    $this->action = $action;
    $this->source = $source;


    $this->db->insert('watchdog_type', $this);



    return $this->db->insert_id();
  }

  function remove($id) {

    $this->db->delete('watchdog_type', array('id' => $id));
  }

  function update($id, $action, $source) {

    $this->action = $action;
    $this->source = $source;


    $this->db->update('watchdog_type', $this, array('id' => $id));
  }

  function get_by_id($id) {

    $this->db->where('id', $id);

    $query = $this->db->get('watchdog_type');



    return $query->row();
  }

  function get_all() {

    $this->db->select('*')->from('watchdog_type');

    //$this->db->order_by('<field>', '<type>'); ==> asc/desc

    $query = $this->db->get();



    return $query->result();
  }

}
?>

