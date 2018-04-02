<?php
class Admin extends MY_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('articlesmodel', 'articles');
		$this->load->helper('form');

		if( ! $this->session->userdata('user_id')) {
			redirect('login');
		}
	}

	public function dashboard() {		
		
		$articles = $this->articles->articles_list();
		$this->load->view('admin/dashboard', ['article_list'=>$articles]);
	}
	
	public function add_article() {
		$this->load->view('admin/add_article');
	}

	public function store_article( $article_id = '', $flag = 'add') {

		$this->load->library('form_validation');
	
		if( $this->form_validation->run('add_article_rules') ) {

			$data = $this->input->post();
			unset($data['submit']);
			
			if ( 'edit' == $flag ) {
			 	$this->flash_redirect_message($this->articles->update_article($article_id, $data), "Article has been updated successfully","Article has been not been updated successfully");
			 } else {
			 	$this->flash_redirect_message($this->articles->store_article($data), "Article has been added successfully","Article has been not been added successfully");			 	
			} 

		} else {
			( 'edit' == $flag ) ? $this->load->view('admin/edit_article') : $this->load->view('admin/add_article');			
		}

	}

	public function edit_article( $articleId ) {
		$articleData = $this->articles->getArticleById($articleId);
		$this->load->view('admin/edit_article', ['articleData'=>$articleData]);

	}

	public function update_article( ) {
		$this->articles->articles->update_article();
	}	

	public function delete_article() {

		$article_id = $this->input->post('article_id');		
		$this->flash_redirect_message($this->articles->delete_article($article_id), "Article deleted successfully","Seems some issue" );

	}

	private function flash_redirect_message($success, $successMessage, $failedMessage) {

		if( $success ) {
			$this->session->set_flashdata('feedback', $successMessage);
			$this->session->set_flashdata('feedback_class',"alert-success");				
		} else {
			$this->session->set_flashdata('feedback',$failedMessage);
			$this->session->set_flashdata('feedback_class',"alert-danger");						
		}

		redirect('admin/dashboard');

	}
}
?>