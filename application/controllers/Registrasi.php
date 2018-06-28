<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller{
	public function index($id) 
	{
		$this->load->model('regis_model');
		$data['id_user'] = $id_user;
		$this->load->view('daftar');
	}
	

	public function create()
	{
		$this->load->model('regis_model');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirm', 'Confirm', 'trim|required|callback_cekpass');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('daftar');
		} else {
			$this->regis_model->insertRegis();
			$this->load->view('sukses_input_user');
		}
	}

	public function cekpass($konfirm)
	{
		$pass = $this->input->post('password');

		if($konfirm != $pass){
			$this->form_validation->set_message('cekpass', "Password Tidak Sama");
			return false;
		}
		else{
			return true;
		}
	}
}