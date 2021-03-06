<?php

class Login extends MY_Controller {

	public function index() {
		
		if( $this->session->userdata('user_id') ) {
			redirect('admin/dashboard');
		}

		$this->load->helper('form');
		$this->load->view('public/admin_login');
	}

	public function admin_login() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'User Name', 'required|alpha|max_length[12]|trim');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

		if( $this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('loginmodel');

			$userId = $this->loginmodel->login_valid($username, $password);

			if( $userId ) {
				$this->session->set_userdata( 'user_id', $userId );

				return redirect('admin/dashboard');
			} else {
				$this->session->set_flashdata('login_failed','Invalid user name or password');
				redirect('login');
			}
			

		} else {
			//$this->load->helper('form');
			$this->load->view('public/admin_login');			
		}

	}

	public function admin_logout() {
		$this->session->unset_userdata('user_id');
		redirect('login');
	}
}
?>