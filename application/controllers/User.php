<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function index() 
	{		

		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['id_user'] = $session_data['id_user'];
		}
		$this->load->model('user_model');
		$data["foto_list"] = $this->user_model->getTampilFoto();

		$this->load->model('user_model');
		$data["tips_list"] = $this->user_model->getTampilTips();

		$this->load->view('view_user', $data);
			
	}
	
}
