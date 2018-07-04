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


	/*public function insertUser(){
		$user='user';
		$data = array('username' => $this->input->post('username'), 'password'=> MD5($this->input->post('password')), 'nama' => $this->input->post('nama'), 'email' => $this->input->post('email'), 'level'=> $admin);
		$this->db->insert('user', $data);
	}

	public function getUser($id){
		$this->db->where('id_user', $id);
		$query=$this->db->get('user');
		return $query->result();
	}

	public function updateById($id){
		$data = array ('username'=>$this->input->post('username'), 'nama'=>$this->input->post('nama'), 'email'=>$this->input->post('email'));
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
	}*/

	public function delete($id){
		$this->db->where('id_user', $id);
		$this->db->delete('user');
	}

}