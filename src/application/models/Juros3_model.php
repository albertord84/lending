<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**

 * @category CodeIgniter-Model: juros3_Model

 * 

 * @access public

 * @todo <description>

 * 

 */
class Juros3_model extends CI_Model {

  function construct() {

    parent::construct();
  }

  function save($v100_500, $v501_1000, $v1001_2000, $v2001_3000, $v3001_4000, $v4001_5000) {

    $this->v100_500 = $v100_500;
    $this->v501_1000 = $v501_1000;
    $this->v1001_2000 = $v1001_2000;
    $this->v2001_3000 = $v2001_3000;
    $this->v3001_4000 = $v3001_4000;
    $this->v4001_5000 = $v4001_5000;


    $this->db->insert('juros3', $this);



    return $this->db->insert_id();
  }

  function remove($parcelas) {

    $this->db->delete('juros3', array('parcelas' => $parcelas));

    }



    function update ($vparcelas, $v100_500, $v501_1000, $v1001_2000, $v2001_3000, $v3001_4000, $v4001_5000){

    $this->v100_500 = $v100_500;
    $this->v501_1000 = $v501_1000;
    $this->v1001_2000 = $v1001_2000;
    $this->v2001_3000 = $v2001_3000;
    $this->v3001_4000 = $v3001_4000;
    $this->v4001_5000 = $v4001_5000;


    $this->db->update('juros3', $this, array('parcelas' => $parcelas));
  }

  function get_by_id($parcelas) {

    $this->db->where('parcelas', $parcelas);

    $query = $this->db->get('juros3');



    return $query->row();
  }

  function get_all() {

    $this->db->select('*')->from('juros3');

    //$this->db->order_by('<field>', '<type>'); ==> asc/desc

    $query = $this->db->get();



    return $query->result();
  }

}
?>

