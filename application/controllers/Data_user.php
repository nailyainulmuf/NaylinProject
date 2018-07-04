<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_user extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['id_user'] = $session_data['id_user'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if(! $this->acl->is_public($current_controller)){
				if (! $this->acl->is_allowed($current_controller, $data['level'])){
					redirect('login/logout', 'refresh');
				}
			}
			/*$this->load->view('data_user_admin', $data);*/
		}else{
			redirect('login', 'refresh');
		}
	}
	public function index() 
	{		

		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['id_user'] = $session_data['id_user'];
		}
			$this->load->model('datauser_model');
			$data["user_list"] = $this->datauser_model->getTampilUser();
			$this->load->view('data_user_admin', $data);
			
	}

	/*public function create()
	{
		
		
		$this->load->model('datauser_model');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirm', 'Confirm', 'trim|required|callback_cekpass');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('input_data_user');
		} else {
			$this->datauser_model->insertUser();
			$this->load->view('sukses_input_admin');
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

	public function update($id)
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['id_user'] = $session_data['id_user'];
			
		}
		$this->load->model('datauser_model');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
/*		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirm', 'Confirm', 'trim|required|callback_cekpass');*/
		
		/*$data['data_user']=$this->datauser_model->getUser($id);

		if ($this->form_validation->run() == FALSE){
			$this->load->view('edit_data_user', $data);
		}else{
			$this->foto_model->updateById($id);
			$this->load->view('sukses_edit_user');

		}
	}*/

	public function delete($id)
	{
		$this->load->model('datauser_model');
		$this->datauser_model->delete($id);
		redirect('data_user');
	}
}
