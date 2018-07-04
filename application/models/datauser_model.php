<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datauser_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}

	public function getTampilUser()
	{
		$query = $this->db->query("SELECT * from user");
		return $query->result_array();
	}

	public function delete($id){
		$this->db->where('id_user', $id);
		$this->db->delete('user');
	}

}