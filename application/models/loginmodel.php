<?php

class Loginmodel extends CI_Model {

	public function login_valid( $username, $password ) {

		$result = $this->db->where(['uname'=>$username, 'pword'=>$password])
				->from('users')
				->get();

		if( $result->num_rows() ) {
			return true;
		} else {
			return false;
		}
	}
}