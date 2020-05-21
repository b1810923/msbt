<?php if(! defined('BASEPATH')) exit('No direct script access');

class Product extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	//	$this->load->model('product_model');
		$this->load->library('My_PHPMailer');
		$this->load->helper('form');
		
		
	}
	public function index(){
		$this->load->view('header/main');
		$this->load->view('menu/main_menu' );
		//$this->load->view('product/getsamples_validate', $sample_arr);
		$this->load->view('product/modify');
		
	}
}
?>
