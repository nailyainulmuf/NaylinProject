<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_setphoto_model extends CI_Model{

	public function getTampilFoto()
	{
		$session_data = $this->session->userdata('logged_in');
		$id_user=$session_data['id_user'];

		$query = $this->db->query("Select * from user as u inner join foto as f on u.id_user = f.fk_user inner join kategori as k on k.id_kategori= f.id_kategori where f.fk_user=$id_user");
		
		return $query->result_array();
	}

	public function getPhoto($id)
	{
		$this->db->where('id_foto', $id);
		$query=$this->db->get('foto');
		return $query->result();
	}

	public function getEditFoto($id)
	{
		$query = $this->db->query("Select * from foto where id_foto=$id");
		return $query->result_array();
	}

	public function getKategori()
	{
		$query = $this->db->query("Select * from kategori");
		return $query->result_array();

	}

	public function updateById($id)
	{
		
		$data = array (
			'judul'=>$this->input->post('judul'), 
			'deskripsi'=>$this->input->post('deskripsi')
		);
		$this->db->where('id_foto', $id);
		$this->db->update('foto', $data);
	}

	public function delete($id){
		$this->db->where('id_foto', $id);
		$this->db->delete('foto');
	}

}