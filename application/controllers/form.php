<?php

class Form extends CI_Controller {

	function index()
	{
		$this->load->helper(array('form','url'));

		$this->load->library('form_validation');
		$this->load->database();

		//set_rules('filed name', 'error name', 'check rules');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|is_unique[users.username]|xss_clean');
		$this->form_validation->set_rules('itempoint', 'Password', 'trim|required|matches[passconf]|md5');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');
		$this->form_validation->set_rules('emails', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('habit','Habit', 'trim|required|min_length[4]|callback_habit_check');

		$this->form_validation->set_message('required', '%s nonononoddd');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('myform');
		}
		else
		{
			$this->load->view('formsuccess');
		}


	}

	public function habit_check($str){
		if($str == 'test'){
			$this->form_validation->set_message('required', 'nononono');
			//$this->form_validation->set_message('habit_check', 'The %s field can not be the word "test"');
			return FALSE;
		}
		else{
			return True;
		}
	}
}
?>
