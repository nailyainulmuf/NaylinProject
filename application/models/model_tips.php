<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_tips extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}

	public function getTampilTips()
	{
		$query = $this->db->query("SELECT * from user as u inner join tabeltips as t on u.id_user = t.id_user");
		return $query->result_array();
	}

	public function insertTips(){
		$data = array (
			'judultips'=>$this->input->post('judul'),
			'tips'=>$this->input->post('tips'), 
			'id_user'=>$this->input->post('fk_user')
		);
		$this->db->insert('tabeltips', $data);
	}

	public function getTips($id){
		$this->db->where('id_tips', $id);
		$query=$this->db->get('tabeltips');
		return $query->result();
	}

	public function updateById($id){
		$data = array (
			'judultips'=>$this->input->post('judul'), 
			'tips'=>$this->input->post('tips')
		);
		$this->db->where('id_tips', $id);
		$this->db->update('tabeltips', $data);
	}

	public function delete($id){
		$this->db->where('id_tips', $id);
		$this->db->delete('tabeltips');
	}

}