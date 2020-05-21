<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msbt extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function msbt(){
		//$header_menu = array();
		//顯示樣品索取連結
		//$menu_arr['show_sample'] = TRUE;
		//顯示目前購物車資訊
		//$menu_arr['shop_data']	 = $this->shop_data;
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('msbt/index'	);

	}

	public function index(){
		//$header_menu = array();
		//顯示樣品索取連結
		//$menu_arr['show_sample'] = TRUE;
		//顯示目前購物車資訊
		//$menu_arr['shop_data']	 = $this->shop_data;
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('msbt/about_us'	);

	}
/*	
	function about_us(){
		//$header_menu = array();
		//顯示樣品索取連結
		//$menu_arr['show_sample'] = TRUE;
		//顯示目前購物車資訊
		//$menu_arr['shop_data']	 = $this->shop_data;

		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('msbt/about_us'	);

	}
	function ask(){
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('msbt/consultation');

	}

	function size(){
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('msbt/customize'	);
	}

	function price(){
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('msbt/price'		);
	}

	function style(){
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('msbt/style'		);
	}

	function sample(){
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('msbt/sample_intro');
	}
*/

}
