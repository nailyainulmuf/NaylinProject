<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}

	public function getListFoto(){
		$query=$this->db->query("SELECT count(id_foto) from foto");
		return $query->row();
	}

	public function getListUser(){
		$query=$this->db->query("SELECT count(id_user) from user");
		return $query->row();
	}

	/*public function getListTips(){
		$query=$this->db->query("select count(id_tips) from tips");
		return $query->row();
	}*/

}