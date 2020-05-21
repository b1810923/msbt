<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setup extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');

	}
	
	public function index(){
		//$header_menu = array();
		//顯示樣品索取連結
		//$menu_arr['show_sample'] = TRUE;
		//顯示目前購物車資訊
		//$menu_arr['shop_data']	 = $this->shop_data;
		$menu['setup_item'] = "diy";
		$menu['teach_item'] = "diy";
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/setup_diy',$menu );	
		
	}
	public function setup_diy(){
		//$header_menu = array();
		//顯示樣品索取連結
		//$menu_arr['show_sample'] = TRUE;
		//顯示目前購物車資訊
		//$menu_arr['shop_data']	 = $this->shop_data;
		$menu['setup_item'] = "diy";
		$menu['teach_item'] = "diy";
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/setup_diy',$menu );	

	}
	public function setup_teach(){
		//$header_menu = array();
		//顯示樣品索取連結
		//$menu_arr['show_sample'] = TRUE;
		//顯示目前購物車資訊
		//$menu_arr['shop_data']	 = $this->shop_data;
		$menu['setup_item'] = "teach";
		$menu['teach_item'] = "roller";
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/teach_measure',$menu );	

	}

	//teach_venetian, teach_curtain
	public function teach_roller(){
		//$header_menu = array();
		//顯示樣品索取連結
		//$menu_arr['show_sample'] = TRUE;
		//顯示目前購物車資訊
		//$menu_arr['shop_data']	 = $this->shop_data;
		$menu['setup_item'] = "teach";
		$menu['teach_item'] = "roller";
		
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/teach_measure',$menu);	

	}
	public function teach_venetian(){
		//$header_menu = array();
		//顯示樣品索取連結
		//$menu_arr['show_sample'] = TRUE;
		//顯示目前購物車資訊
		//$menu_arr['shop_data']	 = $this->shop_data;
		$menu['setup_item'] = "teach";
		$menu['teach_item'] = "venetian";
		
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/teach_measure',$menu);	

	}
	public function teach_curtain(){
		//$header_menu = array();
		//顯示樣品索取連結
		//$menu_arr['show_sample'] = TRUE;
		//顯示目前購物車資訊
		//$menu_arr['shop_data']	 = $this->shop_data;
		$menu['setup_item'] = "teach";
		$menu['teach_item'] = "curtain";
		
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/teach_measure',$menu);	

	}
	public function setup_explanation(){
		$menu['setup_item'] = "explain";
		$menu['teach_item'] = "roller";
		
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/setup_explanation',$menu);	

	}
	public function explain_misua(){
		$menu['setup_item'] = "explain";
		$menu['teach_item'] = "misua";
		
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/setup_explanation',$menu);	
	}
	public function explain_bienzen(){
		$menu['setup_item'] = "explain";
		$menu['teach_item'] = "bienzen";
		
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/setup_explanation',$menu);	
	}
	public function explain_pimu(){
		$menu['setup_item'] = "explain";
		$menu['teach_item'] = "pimu";
		
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/setup_explanation',$menu);	
	}
	public function explain_bairay(){
		$menu['setup_item'] = "explain";
		$menu['teach_item'] = "bairay";
		
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/setup_explanation',$menu);	
	}
	public function explain_fenla(){
		$menu['setup_item'] = "explain";
		$menu['teach_item'] = "fenla";
		
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/setup_explanation',$menu);	
	}
	public function explain_roller(){
		$menu['setup_item'] = "explain";
		$menu['teach_item'] = "roller";
		
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/setup_explanation',$menu);	
	}
	public function explain_doubleR(){
		$menu['setup_item'] = "explain";
		$menu['teach_item'] = "doubleR";
		
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/setup_explanation',$menu);	
	}
	public function explain_double(){
		$menu['setup_item'] = "explain";
		$menu['teach_item'] = "double";
		
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/setup_explanation',$menu);	
	}
	public function explain_vali(){
		$menu['setup_item'] = "explain";
		$menu['teach_item'] = "vali";
		
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/setup_explanation',$menu);	
	}
	public function explain_wagi(){
		$menu['setup_item'] = "explain";
		$menu['teach_item'] = "wagi";
		
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/setup_explanation',$menu);	
	}
	public function explain_hanas(){
		$menu['setup_item'] = "explain";
		$menu['teach_item'] = "hanas";
		
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/setup_explanation',$menu);	
	}
	public function explain_rakusho(){
		$menu['setup_item'] = "explain";
		$menu['teach_item'] = "rakusho";
		
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/setup_explanation',$menu);	
	}
	public function explain_curtain(){
		$menu['setup_item'] = "explain";
		$menu['teach_item'] = "curtain";
		
		//頁面組成
		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('setup/setup_explanation',$menu);	
	}

}
