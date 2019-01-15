<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**

 * @category CodeIgniter-Model: track_money_Model

 * 

 * @access public

 * @todo <description>

 * 

 */
class Track_money_model extends CI_Model {

  function construct() {

    parent::construct();
  }

  function save($solicited_value, $ip, $track_date) {

    $this->solicited_value = $solicited_value;
    $this->ip = $ip;
    $this->track_date = $track_date;


    $this->db->insert('track_money', $this);



    return $this->db->insert_id();
  }

  function remove($id) {

    $this->db->delete('track_money', array('id' => $id));
  }

  function update($id, $solicited_value, $ip, $track_date) {

    $this->solicited_value = $solicited_value;
    $this->ip = $ip;
    $this->track_date = $track_date;


    $this->db->update('track_money', $this, array('id' => $id));
  }

  function get_by_id($id) {

    $this->db->where('id', $id);

    $query = $this->db->get('track_money');



    return $query->row();
  }

  function get_all() {

    $this->db->select('*')->from('track_money');

    //$this->db->order_by('<field>', '<type>'); ==> asc/desc

    $query = $this->db->get();



    return $query->result();
  }

}
?>

