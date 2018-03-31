<?php

class Login extends MY_Controller {

	public function index() {
		$this->load->helper('form');
		$this->load->view('public/admin_login');
	}

	public function admin_login() {
		echo "here";

	}
}
?>