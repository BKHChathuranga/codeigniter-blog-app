<?php

/**
 * @property $form_validation
 */
class Register extends CI_Controller
{
	public function RegisterUser()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passwordAgain', 'Confirm Password', 'required|matches[password]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register');
		} else {
			$this->load->model('Model_user');
			$this->Model_user->insertUderData();

		}
	}
}
