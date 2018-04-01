<?php
class Admin extends MY_Controller {

	public function dashboard() {

		$this->load->model('articlesmodel','articles');

		$articles = $this->articles->articles_list();

		//echo "<pre>";print_r($articles);exit;

		$this->load->view('admin/dashboard', ['article_list'=>$articles]);
	}
	
}
?>