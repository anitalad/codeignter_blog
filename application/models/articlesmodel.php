<?php

class Articlesmodel extends CI_Model {

	public function articles_list(){
		$userid = $this->session->userdata('user_id');
		$query = $this->db
				->select()
				->from('article')
				->where('user_id', $userid)
				->get();

		return $query->result();



	}
}
?>