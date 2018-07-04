<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_foto_model extends CI_Model{

	public function insertFoto()
	{
		$data = array (
			'judul'=>$this->input->post('judul'),
			'id_kategori'=>$this->input->post('kategori'), 
			'deskripsi'=>$this->input->post('deskripsi'), 
			'photo'=>$this->upload->data('file_name'), 
			'fk_user' =>$this->input->post('fk_user')
		);
		$this->db->insert('foto', $data);
	}

	public function getFoto($id)
	{
		$this->db->where('id_foto', $id);
		$query=$this->db->get('foto');
		return $query->result();
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

	public function delete($id)
	{
		$this->db->where('id_foto', $id);
		$this->db->delete('foto');
	}

}