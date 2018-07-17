<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_profil extends CI_Controller {
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
			$data['id_user'] = $session_data['id_user'];
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			
		}
			$this->load->model('datauser_model');
			$data["profilAdmin_list"] = $this->datauser_model->getProfilAdmin();
			$this->load->view('profil_admin', $data);
			
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
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		
		$data['admin_profil']=$this->datauser_model->getProfilAdmin($id);


		if ($this->form_validation->run() == FALSE){
			$this->load->view('edit_profil_admin', $data);
		}else{
			$this->datauser_model->updateById($id);
			$this->load->view('sukses_edit_profil');

		}
	}

	
}
