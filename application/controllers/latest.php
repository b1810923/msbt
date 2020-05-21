<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Latest extends CI_Controller{
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
		//頁面組成

		//* 這是php curl

	include('simple_html_dom.php');
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
	curl_setopt($ch, CURLOPT_URL, 'http://msbtblog.wordpress.com/');
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_USERAGENT, "Google Bot");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	
	$output = curl_exec($ch);

	curl_close($ch);


	//echo $output;
//*/

// -----------------------------------------------------------------------------
// susan test area
//$html = file_get_html('http://www.msbt.com.tw/demo.php')
//* **** (test 01) ***
$html = str_get_html($output);
/*****
* 網路無法連線時，使用備份檔案
* 需自行將網頁存檔備份
****/
if(empty($html)){
	$html = base_url().'blog_bk/20140415.html';
}

$data = array();
$i =0;
//*/
//* ********* success titel and link (test 02)*******
foreach($html->find('h2') as $article){
	//$post = $html->find('[class=entry-content]')->find('p',0)->find('img',0);
	$data['abctest'][$i]['title']= $article->plaintext;
	$data['abctest'][$i]['posttime'] = $article->next_sibling()->plaintext;

	$data['abctest'][$i]['link'] = $article->find('a',0)->href;
	//echo $article->parent()->find('img')->src.'<hr/>';
	$i++;
}
//*/


//********* picture (test 03)********
$j =0;

foreach($html->find('[class=entry-content]') as $post){
	//$data[$j]['img'] 
	// article
	
	// pic
	$value = $post->find('img',0);
	$width = $value->width;
	$height = $value->height;
	//
	$desc = $post->find('p',0);
	
	if(strpos($desc, "img")){
		$desc = $post->find('p',1);
	}else if(strpos($desc, "IMG")){
		$desc = $post->find('p',1);
	}else{
		$desc = $post->find('p',0);
	}
		
	//echo $desc.'<br/>';
	if(isset($value->height)){
		$value->height= null;
	}


	if(isset($value->width)){
		$value->width = null;
	}
	$value = "<span class='change'>".$value->outertext."</span>";
	if($j<7){
		$data['abctest'][$j]['img'] = $value;
		$data['abctest'][$j]['desc'] = $desc;
	}
	$j++;
}



		$this->load->view('header/main'		);
		$this->load->view('menu/main_menu'	);
		$this->load->view('latest/index_new',$data	);

	}

}
