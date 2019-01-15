<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**

 * @category CodeIgniter-Model: ip_hackers_Model

 * 

 * @access public

 * @todo <description>

 * 

 */
class Ip_hackers_model extends CI_Model {

  function construct() {

    parent::construct();
  }

  function save($ip, $id_hacker, $release) {

    $this->ip = $ip;
    $this->id_hacker = $id_hacker;
    $this->release = $release;


    $this->db->insert('ip_hackers', $this);



    return $this->db->insert_id();
  }

  function remove($id_ip) {

    $this->db->delete('ip_hackers', array('id_ip' => $id_ip));
  }

  function update($id_ip, $ip, $id_hacker, $release) {

    $this->ip = $ip;
    $this->id_hacker = $id_hacker;
    $this->release = $release;


    $this->db->update('ip_hackers', $this, array('id_ip' => $id_ip));
  }

  function get_by_id($id_ip) {

    $this->db->where('id_ip', $id_ip);

    $query = $this->db->get('ip_hackers');



    return $query->row();
  }

  function get_all() {

    $this->db->select('*')->from('ip_hackers');

    //$this->db->order_by('<field>', '<type>'); ==> asc/desc

    $query = $this->db->get();



    return $query->result();
  }

}
?>

