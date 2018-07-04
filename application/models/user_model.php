<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model{

	public function getTampilFoto()
	{
		$query = $this->db->query("Select * from user as u inner join foto as f on u.id_user = f.fk_user inner join kategori as k on k.id_kategori= f.id_kategori");
		return $query->result_array();
	}

	public function getTampilTips()
	{
		$query = $this->db->query("Select * from tabeltips");
		return $query->result_array();
	}

}