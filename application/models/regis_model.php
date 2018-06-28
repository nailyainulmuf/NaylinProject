<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regis_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}

	public function insertRegis()
	{
		$user='user';
		$data = array('username' => $this->input->post('username'), 'password'=> MD5($this->input->post('password')), 'nama' => $this->input->post('nama'), 'email' => $this->input->post('email'), 'level'=> $user);
		$this->db->insert('user', $data);
	}
}