<?php
if(! defined('BASEPATH')) exit('No direct script access');

class Inquiry extends CI_Controller{
	public function __construct(){
		parent::__construct();
		//$this->load->helper('url');
		$this->load->library('session');
	}	

	function index(){
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('Minicartlib');
		$session_id	=	$this->session->userdata('session_id');
		$shop_data	=	$this->minicartlib->get_list($session_id);

		$menu_arr	=	array();
		$menu_arr['shop_data']	=	$shop_data;
		$menu_arr['in_cart']	=	TRUE;

		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	,$menu_arr);

	}

	function update_cart(){

	}

	function remove_cart_item(){

	}

	function check_checkout_captcha(){

	}

	function info(){

	}

	function info_action(){

	}

	function confirm_info(){

	}

	function confirm_info_action(){

		
	}


}
?>