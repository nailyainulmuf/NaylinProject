<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_komen_model extends CI_Model{

	public function getFoto($id)
	{
		$this->db->where('id_foto', $id);
		$query=$this->db->get('foto');
		return $query->result();
	}

	public function getTampilFoto($id)
	{
		$query = $this->db->query("Select * from user as u inner join foto as f on u.id_user = f.fk_user inner join kategori as k on k.id_kategori= f.id_kategori where f.id_foto=$id");
		return $query->result_array();
	}

	public function insertKomen(){
		$data = array (
			'komentar'=>$this->input->post('komen'),
			'id_foto'=>$this->input->post('id_foto'), 
			'id_user' =>$this->input->post('id_user')
		);
		$this->db->insert('tabelkomentar', $data);
	}

	public function getKomen($id)
	{
		$query = $this->db->query("Select * from tabelkomentar tk inner join user u on tk.id_user=u.id_user where id_foto=$id");
		return $query->result_array();
	}

	public function delete($id){
		$this->db->where('id_komentar', $id);
		$this->db->delete('tabelkomentar');
	}

}