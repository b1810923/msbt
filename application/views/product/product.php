<?php

if(! defined('BASEPATH')) exit('No direct script access');

class Product extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('product_model');
	}

	public function index(){
		$this->load->view('header/main_product');
		$this->load->view('menu/main_menu');
		$this->load->view('product/index');
	}


	/*level1 items*/
	function string(){
		$menu_array['data'] = $this->product_model->get_level1('String Curtain');
		$menu_array['level1']= $this->product_model->get_level1();
		//$menu_array['']
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level1', $menu_array);
	}

	function venetian(){
		$menu_array['data'] = $this->product_model->get_level1('Venetian Blind');
		$menu_array['level1']= $this->product_model->get_level1();
		
		$this->load->view('header/main_venetian');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level1', $menu_array);
	}

	function pimu(){
		$menu_array['level2'] = $this->product_model->get_level3join('wooden');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2pimu', $menu_array);
	}

	function roller(){
		$menu_array['data'] = $this->product_model->get_level1('Roller Blind');
		$menu_array['level1']= $this->product_model->get_level1();
		
		$this->load->view('header/main_rollerblind');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level1', $menu_array);
	}

	function double(){
		$menu_array['data'] = $this->product_model->get_level1('Double Roller Blind');
		$menu_array['level1']= $this->product_model->get_level1();
		
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level1', $menu_array);
	}

	function honeycomb(){
		$menu_array['data'] = $this->product_model->get_level1('Honeycomb Shade');
		$menu_array['level1']= $this->product_model->get_level1();
		
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level1', $menu_array);
	}

	function vertical(){
		$menu_array['data'] = $this->product_model->get_level1('Vertical Blind');
		$menu_array['level1']= $this->product_model->get_level1();
		
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level1', $menu_array);
	}

	function tempshade(){
		$menu_array['data'] = $this->product_model->get_level1('Temp Shade');
		$menu_array['level1']= $this->product_model->get_level1();
		
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level1', $menu_array);
	}

	function cushion(){
		$menu_array['data'] = $this->product_model->get_level1('Cushion');
		$menu_array['level1']= $this->product_model->get_level1();
		
		$this->load->view('header/main_cushion');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level1', $menu_array);
	}

	function curtain(){
		$menu_array['data'] = $this->product_model->get_level1('Curtain');
		$menu_array['level1']= $this->product_model->get_level1();
		
		$this->load->view('header/main_curtain');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level1', $menu_array);
	}

	function accessories(){
		$menu_array['data'] = $this->product_model->get_level1('Accessories');
		$menu_array['level1']= $this->product_model->get_level1();
		
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level1', $menu_array);
	}

	//-- level1 end --

	//-- string level2 start --
	function misua(){
		$menu_array['level2'] = $this->product_model->get_level3join('misua');
		
		//$pro_array['level3'] = $this->product_model->get_level3('1');

		//$this->load->view('news/index', $menu_array);
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function wolan(){
		$menu_array['level2'] = $this->product_model->get_level3join('wolan');
		//$pro_array['level3'] = $this->product_model->get_level3('1');

		//$this->load->view('news/index', $menu_array);
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	//-- string level2 end --
	//-- 
	function bienzen(){

		$menu_array['level2'] = $this->product_model->get_level3join('bienzen');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	/* 特殊 */
	/*
	function pimu(){

		$menu_array['level2'] = $this->product_model->get_level3join('pimu');
		/*/
		//$this->load->view('header/main');
		//$this->load->view('menu/main_menu');
		//$this->load->view('product/level2_pimu', $menu_array);
		//*/
			
	//}*/
	function basewood(){

		$menu_array['level2'] = $this->product_model->get_level3join('wooden');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2pimu', $menu_array);
		//*/
			
	}
	function highglossed(){

		$menu_array['level2'] = $this->product_model->get_level3join('highGlossed');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2pimu', $menu_array);
		//*/
			
	}
	function fauxwood(){

		$menu_array['level2'] = $this->product_model->get_level3join('fauxWood');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2pimu', $menu_array);
		//*/
			
	}
	function westerncedar(){

		$menu_array['level2'] = $this->product_model->get_level3join('westernCedar');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2pimu', $menu_array);
		//*/
			
	}
	function bamboo(){

		$menu_array['level2'] = $this->product_model->get_level3join('bamboo');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2pimu', $menu_array);
		//*/
			
	}
	function bairay(){

		$menu_array['level2'] = $this->product_model->get_level3join('bairay');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function fenla(){

		$menu_array['level2'] = $this->product_model->get_level3join('fenla');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function tiken(){

		$menu_array['level2'] = $this->product_model->get_level3join('tiken');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function taoza(){

		$menu_array['level2'] = $this->product_model->get_level3join('taoza');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function zaiki(){

		$menu_array['level2'] = $this->product_model->get_level3join('zaiki');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function zicy(){

		$menu_array['level2'] = $this->product_model->get_level3join('zicy');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function ritao(){

		$menu_array['level2'] = $this->product_model->get_level3join('ritao');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function aibo(){

		$menu_array['level2'] = $this->product_model->get_level3join('aibo');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function veyem(){

		$menu_array['level2'] = $this->product_model->get_level3join('veyem');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function ladiam(){

		$menu_array['level2'] = $this->product_model->get_level3join('ladiam');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function emmi(){

		$menu_array['level2'] = $this->product_model->get_level3join('emmi');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function sakin(){

		$menu_array['level2'] = $this->product_model->get_level3join('sakin');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	//-- roller level3 end --
	//-- double level3 start --
	function sima(){

		$menu_array['level2'] = $this->product_model->get_level3join('sima');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function simaXL(){

		$menu_array['level2'] = $this->product_model->get_level3join('simaXL');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function seda(){

		$menu_array['level2'] = $this->product_model->get_level3join('seda');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function nonya(){

		$menu_array['level2'] = $this->product_model->get_level3join('nonya');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function yoka(){

		$menu_array['level2'] = $this->product_model->get_level3join('yoka');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	//-- double level3 end --
	//-- honeycomb level3 start --
	function vali(){
		$menu_array['level2'] = $this->product_model->get_level3join('valiSingle');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2vali', $menu_array);
		//*/
	}
	function valiSingle(){

		$menu_array['level2'] = $this->product_model->get_level3join('valiSingle');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2vali', $menu_array);
		//*/
			
	}
	function valiDouble(){

		$menu_array['level2'] = $this->product_model->get_level3join('valiDouble');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2vali', $menu_array);
		//*/
			
	}
	function valiBlackout(){

		$menu_array['level2'] = $this->product_model->get_level3join('valiBlackout');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2vali', $menu_array);
		//*/
			
	}
	function wagi(){

		$menu_array['level2'] = $this->product_model->get_level3join('wagi');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	//-- honeycomb level3 end --
	//-- vertical level3 start--
	function hanas(){
		$menu_array['level2'] = $this->product_model->get_level3join('hanas');
		//*/
		$this->load->view('header/main_hanas');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
	}
	//-- vertical level3 end --
	//-- tempshade level3 start--
	function rakusho(){
		$menu_array['level2'] = $this->product_model->get_level3join('rakusho');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
	}
	//-- tempshade level3 end--
	//-- curshion level3 start--
	function basa(){

		$menu_array['level2'] = $this->product_model->get_level3join('basa');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function yito(){

		$menu_array['level2'] = $this->product_model->get_level3join('yito');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function dari(){
		$menu_array['level2'] = $this->product_model->get_level3join('dari');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
	}
	function naka(){

		$menu_array['level2'] = $this->product_model->get_level3join('naka');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function sardi(){

		$menu_array['level2'] = $this->product_model->get_level3join('sardi');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function patti(){

		$menu_array['level2'] = $this->product_model->get_level3join('patti');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function varin(){

		$menu_array['level2'] = $this->product_model->get_level3join('varin');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	//-- curshion level3 end --
	//-- curtain level3 start --
	function dazo(){

		$menu_array['level2'] = $this->product_model->get_level3join('dazo');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function donzu(){

		$menu_array['level2'] = $this->product_model->get_level3join('donzu');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function haju(){

		$menu_array['level2'] = $this->product_model->get_level3join('haju');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function amra(){

		$menu_array['level2'] = $this->product_model->get_level3join('amra');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	//-- curtain level3 end --
	//-- accessories level3 start --
	function pole(){

		$menu_array['level2'] = $this->product_model->get_level3join('pole');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function bracket(){

		$menu_array['level2'] = $this->product_model->get_level3join('bracket');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function finial(){

		$menu_array['level2'] = $this->product_model->get_level3join('finial');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}	
	function extra(){

		$menu_array['level2'] = $this->product_model->get_level3join('extra');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function tassel(){

		$menu_array['level2'] = $this->product_model->get_level3join('tassel');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}
	function ballchain(){

		$menu_array['level2'] = $this->product_model->get_level3join('ballchain');
		//*/
		$this->load->view('header/main');
		$this->load->view('menu/main_menu');
		$this->load->view('product/product_level2', $menu_array);
		//*/
			
	}

	//-- accessories level3 end --
}
?>
