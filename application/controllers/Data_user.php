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


	public function delete($id)
	{
		$this->load->model('datauser_model');
		$this->datauser_model->delete($id);
		redirect('data_user');
	}
}
