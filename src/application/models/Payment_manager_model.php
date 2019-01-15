<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



/**

 * @category CodeIgniter-Model: payment_manager_Model

 * 

 * @access public

 * @todo <description>

 * 

 */



class Payment_manager_model extends CI_Model {

	function construct() {

		parent::construct();

	}



	function save ($name) {

		         $this->name = $name;


		$this->db->insert('payment_manager', $this);



		return $this->db->insert_id();

	}



	function remove ($id) {

		$this->db->delete('payment_manager', array('id' => $id));

	}

	

	function update ($id, $name){

		         $this->name = $name;


		$this->db->update('payment_manager', $this, array('id' => $id));

	}



	function get_by_id ($id) {

		$this->db->where('id', $id);

		$query = $this->db->get('payment_manager');



		return $query->row();

	}



	function get_all(){		

		$this->db->select('*')->from('payment_manager');

		//$this->db->order_by('<field>', '<type>'); ==> asc/desc

		$query = $this->db->get();

		

		return $query->result();

	}

}

?>

