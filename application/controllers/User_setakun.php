<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_setakun extends CI_Controller{

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
		
		$this->load->view('user_setakun', $data);
			
	}

	public function update(){
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['id_user'] = $session_data['id_user'];
		}
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('nama','nama','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');
		
		$this->load->model('user_setakun_model');
		
		$data['user_list']=$this->user_setakun_model->getUser();

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('user_setakun', $data);
		}
		else
		{
			$this->user_setakun_model->updateById();
			$this->load->view('sukses_user_setting');
		}

	}

}