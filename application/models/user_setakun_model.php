<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_setakun_model extends CI_Model{

	public function getUser()
	{
		$session_data = $this->session->userdata('logged_in');
		$id_user=$session_data['id_user'];
		$this->db->where('id_user', $id_user);
		$query=$this->db->get('user');
		return $query->result();
	}

	public function updateById()
	{
		$session_data = $this->session->userdata('logged_in');
		$id=$session_data['id_user'];

		$data=array('nama'=>$this->input->post('nama'), 
					'email'=>$this->input->post('email'), 
					'username'=>$this->input->post('username')
				);
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
	}

}