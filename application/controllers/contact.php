<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('msbt/contact'	);

	}
	

}
