<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komen_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}

	public function getTampilKomen()
	{
		$query = $this->db->query("Select * from user as u inner join tabelkomentar as tk on u.id_user = tk.id_user inner join foto as f on f.id_foto= tk.id_foto");
		return $query->result_array();
	}

	
	public function delete($id){
		$this->db->where('id_komentar', $id);
		$this->db->delete('tabelkomentar');
	}

}