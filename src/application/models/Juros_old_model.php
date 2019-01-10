<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**

 * @category CodeIgniter-Model: juros_old_Model

 * 

 * @access public

 * @todo <description>

 * 

 */
class Juros_old_model extends CI_Model {

  function construct() {

    parent::construct();
  }

  function save($v500, $v501_1000, $v1001_1500, $v1501_2000, $v2001_2500, $v2501_3000) {

    $this->v500 = $v500;
    $this->v501_1000 = $v501_1000;
    $this->v1001_1500 = $v1001_1500;
    $this->v1501_2000 = $v1501_2000;
    $this->v2001_2500 = $v2001_2500;
    $this->v2501_3000 = $v2501_3000;


    $this->db->insert('juros_old', $this);



    return $this->db->insert_id();
  }

  function remove($parcelas) {

    $this->db->delete('juros_old', array('parcelas' => $parcelas));
  }

  function update($parcelas, $v500, $v501_1000, $v1001_1500, $v1501_2000, $v2001_2500, $v2501_3000) {

    $this->v500 = $v500;
    $this->v501_1000 = $v501_1000;
    $this->v1001_1500 = $v1001_1500;
    $this->v1501_2000 = $v1501_2000;
    $this->v2001_2500 = $v2001_2500;
    $this->v2501_3000 = $v2501_3000;


    $this->db->update('juros_old', $this, array('parcelas' => $parcelas));
  }

  function get_by_id($parcelas) {

    $this->db->where('parcelas', $parcelas);

    $query = $this->db->get('juros_old');



    return $query->row();
  }

  function get_all() {

    $this->db->select('*')->from('juros_old');

//$this->db->order_by('<field>', '<type>'); ==> asc/desc

    $query = $this->db->get();



    return $query->result();
  }

}
?>

