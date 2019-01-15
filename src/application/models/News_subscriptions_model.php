<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**

 * @category CodeIgniter-Model: news_subscriptions_Model

 * 

 * @access public

 * @todo <description>

 * 

 */
class News_subscriptions_model extends CI_Model {

  function construct() {

    parent::construct();
  }

  function save($email) {

    $this->email = $email;


    $this->db->insert('news_subscriptions', $this);



    return $this->db->insert_id();
  }

  function remove($id) {

    $this->db->delete('news_subscriptions', array('id' => $id));
  }

  function update($id, $email) {

    $this->email = $email;


    $this->db->update('news_subscriptions', $this, array('id' => $id));
  }

  function get_by_id($id) {

    $this->db->where('id', $id);

    $query = $this->db->get('news_subscriptions');



    return $query->row();
  }

  function get_all() {

    $this->db->select('*')->from('news_subscriptions');

    //$this->db->order_by('<field>', '<type>'); ==> asc/desc

    $query = $this->db->get();



    return $query->result();
  }

}
?>

