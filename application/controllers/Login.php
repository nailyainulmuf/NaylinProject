<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	public function index() 
	{
		$this->load->model('user');
		$this->load->view('login_view');
	}

	public function cekDb($password)
	{
		$this->load->model('user');
		$username = $this->input->post('username');
		$result = $this->user->login($username, $password);
		if($result){
			$sess_array = array();
			foreach ($result as $row){
				$sess_array = array(
					'id_user'=>$row->id_user,
					'username'=> $row->username,
					'level' => $row->level
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDb', "Login Gagal Username dan Password tidak valid");
			return false;
		}
	}

	public function cekLogin()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('login_view');
		} else {
			if($this->session->userdata('logged_in')){
				$session_data=$this->session->userdata("logged_in");
				if($session_data['level'] == 'admin'){
					redirect('m_admin', 'refresh');
				}else{
					redirect('user', 'refresh');
				}
				
			}
			
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('web', 'refresh');
	}

}