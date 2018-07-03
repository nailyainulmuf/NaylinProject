<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_tips extends CI_Controller {
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

		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['id_user'] = $session_data['id_user'];
		}
		$this->load->model('model_tips');
		$data["tips_list"] = $this->model_tips->getTampilTips();
		$this->load->view('view_tips_admin', $data);
			
	}

	public function create()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['id_user'] = $session_data['id_user'];
		}
		$this->load->model('model_tips');
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('tips', 'Tips', 'trim|required');
		
		if ($this->form_validation->run() == FALSE)
			{ $this->load->view('input_data_tips', $data); }
		else
		{
			$this->model_tips->insertTips();
			$this->load->view('sukses_input_tips');
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
		$this->load->model('model_tips');
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('tips', 'Tips', 'trim|required');
		
		$data['admin_tips']=$this->model_tips->getTips($id);

		if ($this->form_validation->run() == FALSE){
			$this->load->view('edit_data_tips', $data);
		}else{
			$this->model_tips->updateById($id);
			$this->load->view('sukses_edit_tips');

		}
	}

	public function delete($id)
	{
		$this->load->model('model_tips');
		$this->model_tips->delete($id);
		redirect('admin_tips');
	}

}
