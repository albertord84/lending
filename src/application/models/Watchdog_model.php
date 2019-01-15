<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**

 * @category CodeIgniter-Model: watchdog_Model

 * 

 * @access public

 * @todo <description>

 * 

 */
class Watchdog_model extends CI_Model {

  function construct() {

    parent::construct();
  }

  function save($user_id, $type, $date, $ip, $data) {

    $this->user_id = $user_id;
    $this->type = $type;
    $this->date = $date;
    $this->ip = $ip;
    $this->data = $data;


    $this->db->insert('watchdog', $this);



    return $this->db->insert_id();
  }

  function remove($id) {

    $this->db->delete('watchdog', array('id' => $id));
  }

  function update($id, $user_id, $type, $date, $ip, $data) {

    $this->user_id = $user_id;
    $this->type = $type;
    $this->date = $date;
    $this->ip = $ip;
    $this->data = $data;


    $this->db->update('watchdog', $this, array('id' => $id));
  }

  function get_by_id($id) {

    $this->db->where('id', $id);

    $query = $this->db->get('watchdog');



    return $query->row();
  }

  function get_all() {

    $this->db->select('*')->from('watchdog');

    //$this->db->order_by('<field>', '<type>'); ==> asc/desc

    $query = $this->db->get();



    return $query->result();
  }

}
?>

