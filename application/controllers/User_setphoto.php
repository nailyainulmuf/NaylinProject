<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_setphoto extends CI_Controller{

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
		$this->load->model('user_setphoto_model');
		$data["foto_list"] = $this->user_setphoto_model->getTampilFoto();

		$this->load->view('user_setphoto', $data);
			
	}

	public function update($id)
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['id_user'] = $session_data['id_user'];
			
		}
		$this->load->model('user_setphoto_model');
		$data['kategori_list'] = $this->user_setphoto_model->getKategori();
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
		
		$data['user_photo']=$this->user_setphoto_model->getphoto($id);
		$data["photo_edit"] = $this->user_setphoto_model->getEditFoto($id);

		if ($this->form_validation->run() == FALSE){
			$this->load->view('user_setphoto_edit', $data);
		}else{
			$this->user_setphoto_model->updateById($id);
			$this->load->view('sukses_user_setting');

		}
	}

	public function delete($id)
	{
		$this->load->model('user_setphoto_model');
		$this->user_setphoto_model->delete($id);
		redirect('user_setphoto');
	}

}