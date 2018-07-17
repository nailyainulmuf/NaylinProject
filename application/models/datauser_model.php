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

	public function getProfilAdmin()
	{
		$session_data=$this->session->userdata("logged_in");
		$id_user = $session_data['id_user'];
		$query = $this->db->query("SELECT * from user where id_user = $id_user");
		return $query->result_array();
	}

	public function updateById($id){
		$data = array ('username'=>$this->input->post('username'), 'nama'=>$this->input->post('nama'), 'email'=>$this->input->post('email'));
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
	}

	public function delete($id){
		$this->db->where('id_user', $id);
		$this->db->delete('user');
	}

}