<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}

	public function login($username, $password)
	{
		$this->db->select('id_user, username, password, level');
		$this->db->from('tabeluser');
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		$query = $this->db->get();
		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}

	public function insertUser()
	{
		$object = array(
			'username'=>$this->input->post('username'),
			'password'=>MD5($this->input->post('password') )
		); 

		$this->db->insert('tabeluser', $object);
	}
}