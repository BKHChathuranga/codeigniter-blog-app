<?php

namespace models;

use CI_Model;

class Model_user extends CI_Model
{
	function insertUserData()
	{
		$data = array(
			'fname' => $this->input->post('fname', TRUE),
			'lname' => $this->input->post('lname', TRUE),
			'email' => $this->input->post('email', TRUE),
			'password' => sha1($this -> $this->input->post('password', TRUE),
			SHA1
		);
		print_r($data);
		die();
	}

}
