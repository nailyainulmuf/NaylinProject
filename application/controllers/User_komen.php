<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_komen extends CI_Controller {
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

	public function komen($id)
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['id_user'] = $session_data['id_user'];
		}
		$this->load->model('user_komen_model');
		$data["foto_list"] = $this->user_komen_model->getTampilFoto($id);
		$data["komen_list"] = $this->user_komen_model->getKomen($id);

		$this->load->view('user_view_photo', $data);
	}

	public function insertKomen($id)
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['id_user'] = $session_data['id_user'];
		}
		$this->load->model('user_komen_model');

		$this->form_validation->set_rules('komen', 'komen', 'trim|required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('user_view_photo', $data);
		}
		else
		{
			$this->user_komen_model->insertKomen();
			redirect('user_komen/komen/'.$id);
		}
	}


	public function user($id)
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$data['id_user'] = $session_data['id_user'];
		}
		$this->load->model('user_komen_model');
		$data["foto_list"] = $this->user_komen_model->getTampilFoto($id);
		$data["komen_list"] = $this->user_komen_model->getKomen($id);

		$this->load->view('user_edit_komen', $data);
	}

	public function delete($id,$ft)
	{
		$this->load->model('user_komen_model');
		$this->user_komen_model->delete($id);
		redirect('user_komen/user/'.$ft);
	}

}
