<?php

class Articlesmodel extends CI_Model {

	public function articles_list(){
		$userid = $this->session->userdata('user_id');
		$query = $this->db
				->select(['id','title'])
				->from('articles')
				->where('user_id', $userid)
				->get();

		return $query->result();
	}

	public function store_article( $articles ){

		return $this->db->insert('articles', $articles);

	}

	public function getArticleById( $articleId ) {

		$userid = $this->session->userdata('user_id');
		$query = $this->db
				->select(['id','title','body'])
				->from('articles')
				->where('id', $articleId)
				->where('user_id', $userid)	
				->get();

		return $query->row();

	}

	public function update_article($article_id, Array $article) {
		return $this->db->update('articles', $article, ['id'=>$article_id]);
	}

	public function delete_article($article_id) {
		return $this->db->delete('articles',['id'=>$article_id]);
	}
}
?>