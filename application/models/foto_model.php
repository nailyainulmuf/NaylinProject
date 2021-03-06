<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}

	public function getTampilFoto()
	{
		$query = $this->db->query("Select * from user as u inner join foto as f on u.id_user = f.fk_user inner join kategori as k on k.id_kategori= f.id_kategori");
		return $query->result_array();
	}

	public function insertFoto(){
		$data = array ('judul'=>$this->input->post('judul'),'id_kategori'=>$this->input->post('kategori'), 'deskripsi'=>$this->input->post('deskripsi'), 'photo'=>$this->upload->data('file_name'), 'fk_user' =>$this->input->post('fk_user'));
		$this->db->insert('foto', $data);
	}

	public function getFoto($id){
		$query = $this->db->query("SELECT * from foto inner join kategori on foto.id_kategori=kategori.id_kategori where id_foto=$id");
		return $query->result();
	}

	public function getKategori()
	{
		$query = $this->db->query("Select * from kategori");
		return $query->result_array();

	}

	public function updateById($id){
		if($this->upload->data('file_name')==""){
		$data = array ('judul'=>$this->input->post('judul'), 'id_kategori'=>$this->input->post('kategori'),'deskripsi'=>$this->input->post('deskripsi'));
		$this->db->where('id_foto', $id);
		$this->db->update('foto', $data);
		}else{
			$data = array ('judul'=>$this->input->post('judul'), 'id_kategori'=>$this->input->post('kategori'), 'deskripsi'=>$this->input->post('deskripsi'), 'photo'=>$this->upload->data('file_name'));
		$this->db->where('id_foto', $id);
		$this->db->update('foto', $data);
		}
		
	}

	public function delete($id){
		$this->db->where('id_foto', $id);
		$this->db->delete('foto');
	}

}