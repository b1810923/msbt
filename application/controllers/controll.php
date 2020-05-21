<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Askprice extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('askprice_model');
	}
	public function test(){
		$product['level1'] = $this->askprice_model->getLevel1();
		$this->load->view('price/askprice' , $product);
	}
	public function index()
	{
		$product['level1'] = $this->askprice_model->getLevel1();
		$this->load->view('header/main'	  );
		$this->load->view('menu/main_menu');		
		$this->load->view('price/askview' , $product);
	}

	public function ajaxLevel2(){
		$level1 = $_POST['level1'];
		$level1Name = $_POST['level1Name'];
		$product['level2'] = $this->askprice_model->getLevel2($level1);
		//$data$s = "<select id='levelTwo'><option value='0'>".$level1Name."系列商品</option>";
		

		$data = "<option value='0'>請選擇 ".$level1Name." 商品</option>";

		// 配件區
		if( $level1 == '10' ){
			$data .= "<option value='101_Wenpiz窗簾桿與配件'>Wenpiz窗簾桿與配件</option>";
			$data .= "<option value='102_加購Tassel珠鍊拉繩垂飾'>加購Tassel珠鍊拉繩垂飾</option>";
			$data .= "<option value='43_加購更換金屬珠鍊'>加購更換金屬珠鍊</option>";

		}else{

		foreach($product['level2'] as $items):
			// 4 > PIMU , 18 > SIMAXL , 44~48

			if( $items['id']=='2'){
				$items['level2Eng'] = 'Wolan-Tree';
			}
			if( $items['id']=='4'){
				continue;
			}
			if( $items['id']=='18'){
				$items['level2Eng'] = 'Sima-XL';
			}
			if( ($items['id']=='22')||($items['id']=='23')||($items['id']=='24') ){
				$items['level2Name'] = '無紡蜂巢簾-'.$items['level2Name'];
				$items['level2Eng'] = 'Vali';

			}
			if( ($items['id']=='44')||($items['id']=='45')||($items['id']=='46')||($items['id']=='47')||($items['id']=='48') ){
				$data .= "<option value='".$items['id'].'_Pimu 實木百葉簾-'.$items['level2Name']."'>".'Pimu 實木百葉簾-'.$items['level2Name']."</option>";
				continue;
			}
				$data .= "<option value='".$items['id'].'_'.ucfirst($items['level2Eng']).' '.$items['level2Name']."'>".ucfirst($items['level2Eng']).' '.$items['level2Name']."</option>";
			
		endforeach;
		//$data .= '</select>';
		}

		echo json_encode($data);
		//echo json_encode($product['level2']['level2Name']);
	}
	public function ajaxStandOnly(){
		$proId = $_POST['proID'];
		$data = '';

		if($proId == '102'){
			$data = "<select id='standardonly'><option value='0'>請選擇規格</option>";
			$data .= "<option value='a_循環珠鍊拉繩用'>循環珠鍊拉繩用</option>";
			$data .= "<option value='b_一般拉繩用'>一般拉繩用</option>";
			$data .= '</select>';	
		}
		echo json_encode($data);
	}
	public function ajaxStandTassel(){
		$data ='';
		$data = "<select id='standardtassel'><option value='0'>請選擇規格</option>";
		$data .= "<option value='a_循環珠鍊拉繩用'>循環珠鍊拉繩用</option>";
		$data .= "<option value='b_一般拉繩用'>一般拉繩用</option>";
		$data .= '</select>';
		echo json_encode($data);
	}
	public function ajaxStandTasselColor(){
		$proId = $_POST['tassel'];
		$data = '';
		$product['tassel'] = '';
		if($proId =='a'){
			$data = "<select id='standardtasselsize'><option value='0'>請選擇款式/顏色</option>";
			$data .= "<option value='428_M 透明毬果 Plexiglass Cones'>M 透明毬果 Plexiglass Cones</option>";
			$data .= "<option value='428_XL 透明毬果 Plexiglass Cones'>XL 透明毬果 Plexiglass Cones</option>";
			$data .= "<option value='427_M 透明葉脈 Plexiglass Leaf'>M 透明葉脈 Plexiglass Leaf</option>";
			$data .= "<option value='429_M 透明貝殼 Plexiglass Cockles'>M 透明貝殼 Plexiglass Cockles</option>";
			$data .= "<option value='430_M 透明綠枝 Plexiglass Green'>M 透明綠枝 Plexiglass Green</option>";
			$data .= "<option value='431_M 透明竹草 Plexiglass Grass'>M 透明竹草 Plexiglass Grass</option>";
			$data .= "<option value='435_M 自然木紋 Wood Natural'>M 自然木紋 Wood Natural</option>";
			$data .= "<option value='432_M 簡約石紋 Acrylic Stone'>M 簡約石紋 Acrylic Stone</option>";
			$data .= "<option value='433_M 簡約白 Acrylic White'>M 簡約白 Acrylic White</option>";
			$data .= "<option value='436_M 皮革紅 Leather Red'>M 皮革紅 Leather Red</option>";
			$data .= "<option value='437_M 皮革黑 Leather Black'>M 皮革黑 Leather Black</option>";
			$data .= "<option value='434_M 金屬銀 Metal'>M 金屬銀 Metal</option>";
			$data .= '</select>';
		}else{
			$data = "<select id='standardtasselsize'><option value='0'>請選擇款式/顏色</option>";
			$data .= "<option value='434_S 金屬銀 Metal'>S 金屬銀 Metal</option>";
			$data .= '</select>';
		}
		echo json_encode($data);
	}

	public function ajaxStand(){
		//$debug = true;
		$proId = $_POST['proID']; //level2 id
		$data = '';
		
		if($proId == '101'){
			$data = "<select id='standardsel'><option value='0'>請選擇規格</option>";
			$data .= "<option value='不需托架'>不需托架</option>";
			$data .= "<option value='單軌無靠牆'>單軌無靠牆</option>";
			$data .= "<option value='單軌一端靠牆'>單軌一端靠牆</option>";
			$data .= "<option value='單軌兩端靠牆'>單軌兩端靠牆</option>";
			$data .= "<option value='雙軌無靠牆'>雙軌無靠牆</option>";
			$data .= "<option value='雙軌一端靠牆'>雙軌一端靠牆</option>";
			$data .= "<option value='雙軌兩端靠牆'>雙軌兩端靠牆</option>";
			$data .= '</select>';
		}else if( ($proId == '102') || ($proId == '43') ){
			$data .= '';
			
		}else{
			
			$product['standard'] = $this->askprice_model->getStandard($proId);
		
		//standard
		//*/
			if($product['standard'] != '0'){
			
				$data = "<select id='standardsel'><option value='0'>請選擇規格</option>";
			
				foreach($product['standard'] as $items):
					$data .= "<option value='".$items['proStandard']."'>".$items['proStandard']."</option>";
				endforeach;
				
				$data .= '</select>';
			}else{
				$data = '';
			}

		}

		if( $proId == 101){
			$data .= "<select id='color'><option value='0'>請選擇款式/顏色</option>";
			$data .= "<option value='no_不需飾頭'>不需飾頭</option>";
			$data .= "<option value='422_Bachee飾頭'>Bachee飾頭</option>";
			$data .= "<option value='426_Sangi飾頭'>Sangi飾頭</option>";
			$data .= "<option value='423_Franki飾頭'>Franki飾頭</option>";
			$data .= "<option value='424_Jioba飾頭'>Jioba飾頭</option>";
			$data .= "<option value='425_Ouzop飾頭'>Ouzop飾頭</option>";
			$data .= "</select>";
			
		}else if( $proId == 102 ){
			$data = "";
		}else{
		
			//pro color
			$product['color'] = $this->askprice_model->getColor($proId);
			//*/
			if($product['color']!='noColor'){
				$data .= "<select id='color'><option value='0'>請選擇款式/顏色</option>";
				//pimu顏色名稱修改
				if( ($proId=='44') || ($proId=='45') || ($proId=='46') || ($proId=='47') || ($proId=='48') ){
					foreach($product['color'] as $itemsColor):
						$data .= "<option value='".$itemsColor['id'].'_'.$itemsColor['level3Name']."'>".$itemsColor['level3Name']."</option>";
					endforeach;
				}else{
					foreach($product['color'] as $itemsColor):
						$data .= "<option value='".$itemsColor['id'].'_'.$itemsColor['level3Name'].' '.$itemsColor['level3Eng']."'>".$itemsColor['level3Name'].' '.$itemsColor['level3Eng']."</option>";
					endforeach;
				}
				
				$data .= "</select>";
			}else{
				$data .= '';
			}
		}
		//*/
		//$data = $product['standard'];
		echo json_encode($data);
	}

	public function ajaxNumber(){
		$level1 = $_POST['level1Id'];
		$level2 = $_POST['level2Id'];
		$level3 = $_POST['level3Id'];
		$data = '';
		$level3WH ='';
		
		//*/================
		//	Musia NUMBER
		///=================

		if($level2 =='1'){ //線簾
			$data .= "<span id='proSize'> 寬90cm × 高245cm </span>";
			$data .= "<select id='number'><option value='0'>請選擇商品數量</option>";
				$data .= "<option value='1'>1</option>";
				$data .= "<option value='2'>2</option>";
				$data .= "<option value='3'>3</option>";
				$data .= "<option value='4'>4</option>";
				$data .= "<option value='5'>5</option>";
			$data .= "</select>";
			$data .= "<span id='proMark'> 若有訂製特殊尺寸需求，請於備註中填寫 </span>";
			
			$data .= "<span id='itemother'><br/></br>備註：<input type='input' id='remark_1' value=''>(例：3F主臥落地窗)</span>";
			
			
		}
		else if($level2 == '2'){ //wolan
			$data .= "<span id='proSize'> 一包10入且高度為238cm </span>";
			$data .= "<select id='number'><option value='0'>請選擇商品數量</option>";
				$data .= "<option value='1'>1</option>";
				$data .= "<option value='2'>2</option>";
				$data .= "<option value='3'>3</option>";
				$data .= "<option value='4'>4</option>";
				$data .= "<option value='5'>5</option>";
			$data .= "</select>";		
			$data .= "<span id='itemother'><br/><br/>備註：<input type='input' id='remark_1' value=''>(例：訂製特殊尺寸之寬高)</span>";
			
		}
		//*/
		else if($level1 =='8'){ //抱枕）款式 數量
			// cushion size
			$data .= "<span id='cushion'>";
			$data .= "<input id='45cm' type='radio' name='cushion_size' value='45X45'>";
			$data .= "<label for='45cm'>長45cm × 寬45cm</label>";
			$data .= "<input id='65cm' type='radio' name='cushion_size' value='65X65'>";
			$data .= "<label for='65cm'>長65cm × 寬65cm</label>";
			
			
			// cushion number
			$data .= "<select id='number' class='normal_col'><option value='0'>請選數量</option>";
			$data .= "<option value='1'>1</option>";
			$data .= "<option value='2'>2</option>";
			$data .= "<option value='3'>3</option>";
			$data .= "<option value='4'>4</option>";
			$data .= "<option value='5'>5</option>";
			$data .= "</select>";
			$data .= "</span>";
			$data .= "<span id='proMark'> 含枕心 </span>";
			
			$data .= "<span id='itemother'></br><br/>備註：<input type='input' id='remark_1' value=''>(例：3F主臥落地窗)</span>";
			
			
		}else if($level1 =='9'){//布紗）數量 附加說明
			$level3val = '';
			if( ($level3 =='397') || ($level3 =='474') || ($level3 =='475') || ($level3 =='476') ){
				$level3WH = '寬130cm × 高250cm'; $level3val = '130X250';
			}else if($level3 =='477'){
				$level3WH = '寬135cm × 高250cm'; $level3val = '135X250';
			}else if($level3 =='482'){
				$level3WH = '寬125cm × 高250cm'; $level3val = '125X250';
			}else{
				$level3WH = '寬140cm × 高250cm'; $level3val = '140X250';
			}
			$data .= "<span id='proSize'><input type='hidden' id='curtain_Size' name='curtain_Size' value='".$level3val."' /> ".$level3WH." <input name='curtain_modi' type='checkbox' value='加購修改垂長'>加購修改垂長</span>";
			
			// curtain number
			$data .= "<select id='number'><option value='0'>請選數量</option>";
				$data .= "<option value='1'>1</option>";
				$data .= "<option value='2'>2</option>";
				$data .= "<option value='3'>3</option>";
				$data .= "<option value='4'>4</option>";
				$data .= "<option value='5'>5</option>";
			$data .= "</select>";
			// curtain desc
			$data .= "<span id='itemother'><br/><br/>備註：<input type='input' id='remark_1' value=''>(例：3F主臥落地窗)</span>";
			
		}else if($level1 =='10'){//配件）數量
			
			// accessory number
			$data .= "<select id='number'><option value='0'>請選擇數量</option>";
				$data .= "<option value='1'>1</option>";
				$data .= "<option value='2'>2</option>";
				$data .= "<option value='3'>3</option>";
				$data .= "<option value='4'>4</option>";
				$data .= "<option value='5'>5</option>";
			$data .= "</select>";
			

		}else if($level1 == '7'){
			// rakusho size
			$data .= "<span id='rakusho'>";
			$data .= "<input id='90cm' type='radio' name='rakusho_size' value='90X180'>";
			$data .= "<label for='90cm'>寬90cm × 高180cm</label>";
			$data .= "<input id='120cm' type='radio' name='rakusho_size' value='120X180'>";
			$data .= "<label for='120cm'>寬120cm × 高180cm</label>";
			
			
			// rakusho
			$data .= "<select id='number'><option value='0'>請選擇商品數量</option>";
				$data .= "<option value='1'>1</option>";
				$data .= "<option value='2'>2</option>";
				$data .= "<option value='3'>3</option>";
				$data .= "<option value='4'>4</option>";
				$data .= "<option value='5'>5</option>";
			$data .= "</select>";
			$data .= "<span id='proMark'> 左右最多可各裁切 17cm </span>";
			
			$data .= "<span id='itemother'><br/></br>備註：<input type='input' id='remark_1' value=''>(例：3F主臥落地窗)</span>";
			
		}else{	
			// other number
			$data .= "<select id='number'><option value='0'>請選擇尺寸數量</option>";
				$data .= "<option value='1'>1</option>";
				$data .= "<option value='2'>2</option>";
				$data .= "<option value='3'>3</option>";
				$data .= "<option value='4'>4</option>";
				$data .= "<option value='5'>5</option>";
			$data .= "</select>";
			
			// size
			
		}
		$data .= "<div id='othersize'></div><div id='btn_div'><input id='send_btn' class='button' type='button' value='確認'></div>";
		echo json_encode($data);
	}
	public function ajaxSize(){
		$number = $_POST['sel_number'];
		$level1 = $_POST['level1Id'];
		$level2 = $_POST['level2Id'];

		$data ="<div id='ajaxsize'>";
		$j=1;

		if( $number > 0){
			if( ($level1 != '1')  && ($level1 != '10') && ($level1 != '7') && ($level1 != '8') && ($level1 !='9') ){
				for($i=0;$i<$number;$i++){
						//窗戶尺寸
						$data .= "<br/><br/>".$j.".尺寸：寬<input type='input' id='width_".$j."' name='width_".$j."' value='' class='small_col'>公分 × 高<input type='input' id='height_".$j."' name='height_".$j."' value='' class='small_col'>公分";
						//支數
						$data .= "，支數：<input id='count_".$j."' value='' class='small_col'>。";
						//框內框外 寬高 數量 裝設空間
						
						$data .= "<input id='innerframe_".$j."' type='radio' name='size_".$j."' value='框內'>
								 <label for='innerframe'>框內</label>
								 <input id='outterframe_".$j."' type='radio' name='size_".$j."' value='框外'>
								 <label for='outterframe'>框外</label>";
						
						// other 空間

						$data .= "，備註：<input type='input' id='space_".$j."' value=''>";
						if($j==1){
							$data .='(例：3F主臥落地窗)';
						}

					$j++;
				}
			}else if( $level1 == '10' ){
				//if(){}
				// level2 Id
				if( $level2 == '101'){
					for($i=0;$i<$number;$i++){
						//窗戶寬
						$data .= "<br/><br/>".$j.".尺寸：寬<input type='input' id='width_".$j."' name='width_".$j."' value='' class='small_col'>公分";
						//窗簾環 
						
						$data .= "。<input id='frameno_".$j."' type='radio' name='frame_".$j."' value='不需要窗簾環'>
								 <label for='frameno'>不需要窗簾環</label>
								 <input id='frameclip_".$j."' type='radio' name='frame_".$j."' value='改窗簾夾'>
								 <label for='frameclip'>改窗簾夾</label>
								 <input id='framecrochet_".$j."' type='radio' name='frame_".$j."' value='窗簾環加鉤針'>
								 <label for='framecrochet'>窗簾環加鉤針</label>";
						
						// other 空間

						$data .= "，備註：<input type='input' id='space_".$j."' value=''>";
						if($j==1){
							$data .='(例：3F主臥落地窗)';
						}

						$j++;
					}
				}else if($level2 == '43'){ // 金屬珠鍊
					
					for($i=0;$i<$number;$i++){
						$data .= "<br/><br/>珠鍊長度：";
						$data .= "<select id='width_".$j."'><option value='0'>請選擇珠鍊長度</option>";
						$data .= "<option value='50cm'>50cm</option>";
						$data .= "<option value='75cm'>75cm</option>";
						$data .= "<option value='125cm'>125cm</option>";
						$data .= "<option value='150cm'>150cm</option>";
						$data .= "<option value='175cm'>175cm</option>";
						$data .= "<option value='200cm'>200cm</option>";
						$data .= "</select>";
						$data .= "，珠鍊數量：<input id='count_".$j."' value='' class='small_col'>";
						$data .= "，備註：<input type='input' id='space_".$j."' value=''>";

						$j++;
					}
						
				}else{
					// color  width height spaceI
					$data = "";
				}
				
			}else{ // 現貨
				$data .= "";
			}


		}else{
			$data .= 'error';
		}
		$data .= '</div>';
		echo json_encode($data);
	}
	public function saveData(){
		$colorArray ='';
		//收到data
		$level1Id ="";
		if( !empty($_POST['level1Id'])   ){
			$level1Id = $_POST['level1Id'];
		}

		$level1 = $_POST['level1'];
		$level2 = $_POST['level2']; // ex: 1_xxx
		$level2array = explode('_',$level2);
		$level2Id = $level2array[0];
		$level2 = $level2array[1];
		$standard = "";
		$stand = "";

		
		if($level2Id == '102'){
			if( !empty($_POST['standardonly'])   ){
				$standard = $_POST['standardonly'];
			}
		}else{
			if( !empty($_POST['standard'])   ){
				$standard = $_POST['standard'];
			}
		}
		
		
		if($level1Id == '7'){
			if( !empty($_POST['rakusho']) ){
				$stand = $_POST['rakusho'];
			}
		}
		if($level1Id == '8'){
			if( !empty($_POST['cushion']) ){
				$stand = $_POST['cushion'];
			}
		}
		if($level1Id == '9'){
			if( !empty($_POST['curtain']) ){
				$standard = $_POST['curtain'];
			}else{
				$standard = '';
			}
			if( !empty($_POST['standard'])   ){
				$stand = $_POST['standard'];
			}
		}
		//standard word 
		$standard_note='';
		if( empty($standard) ){
			$standard_note = 'noSta';
		}else{
			$standard_note = $standard;
		}
		if( $_POST['color']!=''){
			$colorArray = explode('_', $_POST['color']);
			$color = $colorArray[1];
		}

		/* for askprice
		*  $level2Id
		*  $colorId 
		*/

		
		$colorId = $colorArray[0];
		$picURL = $this->askprice_model->getEngNamePrice($colorId);
		//haju pic
		if($level2Id == '36'){
			$proJPG = ucfirst($picURL[0]['level2Eng']).'_'.$picURL[0]['level3Eng'].$picURL[0]['indexNum'].'.jpg';
		}else{
			$proJPG = ucfirst($picURL[0]['level2Eng']).'_'.$picURL[0]['level3Eng'].'.jpg';
		
		}
		$proJPG = preg_replace('#\s+#', '', trim($proJPG));

		$number ="";
		if( !empty($_POST['number']) ){
			if( ($level1Id == '1') || ($level1Id == '10') || ($level1Id == '7') || ($level1Id == '8') || ($level1Id == '9')){
				$number = $_POST['number'];
			}else{
				//窗戶尺寸數
				$number = $_POST['number'];
				
			}	
		}
		

		$width ="";
		if( !empty($_POST['width'])){
			$width = $_POST['width'];
		}

		$height="";
		if( !empty($_POST['height'])){
			$height = $_POST['height'];	
		}
		$count="";
		if( !empty($_POST['count'])){
			$count = $_POST['count'];
		}


		//現貨
		if($level2Id == '1'){
			$width[1] = '90';
			$height[1] = '245';
		}
		if($level2Id == '2'){
			$width[1] = '';
			$height[1] = '238';
		}
		if($level1Id == '7'){
			$array = explode('X', $stand);
			$width[1] = $array[0];
			$height[1] = $array[1];
		}
		if($level1Id == '8'){
			$array = explode('X', $stand);
			$width[1] = $array[0];
			$height[1] = $array[1];
		}
		if($level1Id == '9'){
			$array = explode('X', $stand);
			$width[1] = $array[0];
			$height[1] = $array[1];
		}

		$frame = "";
		if( !empty($_POST['frame'])){
				$frame = $_POST['frame'];
		}
		
		

		$space = "";
		if( ($level1Id == '1')  || ($level1Id == '7') || ($level1Id == '8') || ($level1Id == '9')){
			if( !empty($_POST['remark'])){
				$space = $_POST['remark'];
			}
			
		}else{
			if( !empty($_POST['space'])){
				$space = $_POST['space'];	
			}
		}

		

		$arr_length = count($standard);
		$message ="";
		
		//*** ori $message .="<table class='askprice'>";
		//$message .='<th>商品名</th><th>系列</th><th>規格</th><th>顏色</th><th>支數</th><th>No.</th><th>寬</th><th>高</th><th>窗框</th><th>位置</th>';
		$tr_name = $level1Id.rand(1,30000);
		$message .= "<tr id='".$tr_name."'>";
		
		// if no color
			$HREF = '';
			if($colorId =='no'){
				$HREF = $color;
			}else{
				$HREF = "<a href='#''>".$color."</a>";
			}
		$td_row = "<td id='td_proName'><input type='hidden' name='proName[]' value='".$level1."'>".$level1."</td><td id='td_proSer'><input type='hidden' name='proSer[]' value='".$level2."'>".$level2."</td><td id='td_proSta'><input type='hidden' name='proSta[]' value='".$standard_note."'>".$standard."</td>";
		$td_row .= "<td id='td_proCor'><input type='hidden' name='proCor[]' value='".$color."'><div id='tooltip_".$tr_name."'>".$HREF."</div></td>";
		
		$message .= $td_row;
		
		if(($level1Id == '1') ||  ($level1Id == '7') ||  ($level1Id == '8') ||  ($level1Id == '9')){
			if($level2Id != '2'){
				$width[1] = $width[1].' cm';
				$height[1] = $height[1].' cm';
			}else{
				$width[1] = $width[1];
				$height[1] = $height[1].' cm';
			}
			$message .= "<td id='td_proNum'><input type='hidden' name='proNum[]' value='".$number."'>".$number."</td><td id='td_proWid'><input type='hidden' name='proWid[]' value='".$width[1]."'>".$width[1]."</td><td id='td_proHei'><input type='hidden' name='proHei[]' value='".$height[1]."'>".$height[1]."</td><td id='td_proFrame'><input type='hidden' name='proFrame[]' value='noFrame'></td><td id='td_proPos'><input type='hidden' name='proPos[]' value='".$space."'>".$space."</td>";
			$message .= "<td><input type='hidden' id='trId' value='".$tr_name."' />";
			$message .= "<input type='hidden' id='proURL' value='".$proJPG."' />";
			$message .= "<input type='button' value='刪除' onClick='DelRow(".$tr_name.")'/></td></tr>";
			
		}else if ($level1Id == '10'){
			// if no color
			$HREF = '';
			if($colorId =='no'){
				$HREF = $color;
			}else{
				$HREF = "<a href='#''>".$color."</a>";
			}
			

			//$message .= "<td colspan='5'></td>";
			if($level2Id == '101'){ //tassel珠鍊拉繩
				for($i=1;$i<=$number;$i++){
					$widthI = $width[$i].' cm'; 
					$frameI = "";
					$spaceI = "";
					if( !empty($frame[$i]) ){
						$frameI = $frame[$i];
					}
					if( !empty($space[$i]) ){
						$spaceI = $space[$i];
					}
					
					if($i==1){
						$message .="<td id='td_proNum'><input type='hidden' name='proNum[]' value='1'>1</td>";
					}
					else{
						$tr_name = $level1Id.rand(1,30000);
						$message .= "<tr id='".$tr_name."'>";
						$message .= "<td id='td_proName'><input type='hidden' name='proName[]' value='".$level1."'>".$level1."</td><td id='td_proSer'><input type='hidden' name='proSer[]' value='".$level2."'>".$level2."</td><td id='td_proSta'><input type='hidden' name='proSta[]' value='".$standard_note."'>".$standard."</td>";
						$message .= "<td id='td_proCor'><input type='hidden' name='proCor[]' value='".$color."'><div id='tooltip_".$tr_name."'>".$HREF."</div></td>";
						$message .= "<td id='td_proNum'><input type='hidden' name='proNum[]' value='1'>1</td>";
					}
					$message .= "<td id='td_proWid'><input type='hidden' name='proWid[]' value='".$widthI."'>".$widthI."</td><td id='td_proHei'><input type='hidden' name='proHei[]' value='noHei'></td><td id='td_proFrame'><input type='hidden' name='proFrame[]' value='".$frameI."'>".$frameI."</td><td id='td_proPos'><input type='hidden' name='proPos[]' value='".$spaceI."'>".$spaceI."</td>";
					
					$message .= "<td><input type='hidden' id='trId' value='".$tr_name."' />";
					$message .= "<input type='hidden' id='proURL' value='".$proJPG."' />";
					$message .= "<input type='button' value='刪除' onClick='DelRow(".$tr_name.")'/></td></tr>";
					
				}
				
			}else if($level2Id == 43){ //金屬珠鏈
				
				for($i=1; $i<=$number;$i++){
					//$widthI = $width[$i].' cm'; 
					$widthI = "";
					$spaceI = "";
					$countI = "";
					if( !empty($frame[$i]) ){
						$widthI = $frame[$i];
					}
					if( !empty($space[$i]) ){
						$spaceI = $space[$i];
					}
					if( !empty($count[$i]) ){
						$countI = $count[$i];
					}else{
						$countI = '1';
					}
					if($i==1){
						$message .="<td id='td_proNum'><input type='hidden' name='proNum[]' value='".$countI."'>".$countI."</td>";
					}
					else{
						$tr_name = $level1Id.rand(1,30000);
						$message .= "<tr id='".$tr_name."'>";
						$message .= "<td id='td_proName'><input type='hidden' name='proName[]' value='".$level1."'>".$level1."</td><td id='td_proSer'><input type='hidden' name='proSer[]' value='".$level2."'>".$level2."</td><td id='td_proSta'><input type='hidden' name='proSta[]' value='".$standard_note."'>".$standard."</td>";
						$message .= "<td id='td_proCor'><input type='hidden' name='proCor[]' value='".$color."'><div id='tooltip_".$tr_name."'><a href='#'>".$color."</a></div></td>";
						$message .= "<td id='td_proNum'><input type='hidden' name='proNum[]' value='".$countI."'>".$countI."</td>";
					}
					$message .= "<td id='td_proWid'><input type='hidden' name='proWid[]' value='".$widthI."'>".$widthI."</td><td id='td_proHei'><input type='hidden' name='proHei[]' value='noHei'></td><td id='td_proFrame'><input type='hidden' name='proFrame[]' value='noFrame'></td><td id='td_proPos'><input type='hidden' name='proPos[]' value='".$spaceI."'>".$spaceI."</td>";
					
					$message .= "<td><input type='hidden' id='trId' value='".$tr_name."' />";
					$message .= "<input type='hidden' id='proURL' value='".$proJPG."' />";
					$message .= "<input type='button' value='刪除' onClick='DelRow(".$tr_name.")'/></td></tr>";

				}
			}else{ //tassel 後半

				$message .= "<td id='td_proNum'><input type='hidden' name='proNum[]' value='".$number."'>".$number."</td><td id='td_proWid'><input type='hidden' name='proWid[]' value='noWid'></td><td id='td_proHei'><input type='hidden' name='proHei[]' value='noHei'></td><td id='td_proFrame'><input type='hidden' name='proFrame[]' value=''></td><td id='td_proPos'><input type='hidden' name='proPos[]' value='noSpace'></td>";
				$message .= "<td><input type='hidden' id='trId' value='".$tr_name."' />";
				$message .= "<input type='hidden' id='proURL' value='".$proJPG."' />";
				$message .= "<input type='button' value='刪除' onClick='DelRow(".$tr_name.")'/></td></tr>";
		

			}
			
		}else{
			//$message .= "<td id='td_proNum'><input type='hidden' name='proNum[]' value='noNum'></td>";
			$num = $number;
			//echo "<script>alert('".$number."');</script>";

			for($i = 1; $i<= $num; $i++){
				
				$countI = $count[$i];
				$widthI = $width[$i].' cm'; 
				$heightI = $height[$i].' cm';
				$frameI = "";
				$spaceI = "";
				if( !empty($frame[$i]) ){
					$frameI = $frame[$i];
				}
				if( !empty($space[$i]) ){
					$spaceI = $space[$i];
				}
				if( empty($count[$i]) ){
					$countI = 1;
				}
				if( $i==1 ){
					// #414 ~ #416 已有前部分code
					$message .= "<td id='td_proNum' value='".$countI."'>".$countI."</td>";
					$message .= "<td id='td_proWid'><input type='hidden' name='proWid[]' value='".$widthI."'>".$widthI."</td><td id='td_proHei'><input type='hidden' name='proHei[]' value='".$heightI."'>".$heightI."</td><td id='td_proFrame'><input type='hidden' name='proFrame[]' value='".$frameI."'>".$frameI."</td><td id='td_proPos'><input type='hidden' name='proPos[]' value='".$spaceI."'>".$spaceI."</td>";
					
				}else{
					$tr_name = $level1Id.rand(1,30000);
				
					$message .= "<tr id='".$tr_name."'>";
					$message .= "<td id='td_proName'><input type='hidden' name='proName[]' value='".$level1."'>".$level1."</td><td id='td_proSer'><input type='hidden' name='proSer[]' value='".$level2."'>".$level2."</td><td id='td_proSta'><input type='hidden' name='proSta[]' value='".$standard."'>".$standard."</td>";
					$message .= "<td id='td_proCor'><input type='hidden' name='proCor[]' value='".$color."'><div id='tooltip_".$tr_name."'><a href='#'>".$color."</a></div></td><td id='td_proNum'><input type='hidden' name='proNum[]' value='".$countI."'>".$countI."</td>";
					$message .= "<td id='td_proWid'><input type='hidden' name='proWid[]' value='".$widthI."'>".$widthI."</td><td id='td_proHei'><input type='hidden' name='proHei[]' value='".$heightI."'>".$heightI."</td><td id='td_proFrame'><input type='hidden' name='proFrame[]' value='".$frameI."'>".$frameI."</td><td id='td_proPos'><input type='hidden' name='proPos[]' value='".$spaceI."'>".$spaceI."</td>";
					
				}
				//proJPG URL
				$message .= "<td><input type='hidden' id='trId' value='".$tr_name."' />";
				$message .= "<input type='hidden' id='proURL' value='".$proJPG."' />";
				$message .= "<input type='button' value='刪除' onClick='DelRow(".$tr_name.")'/></td></tr>";
			}		
		}	
		//***$message .= "<td><input type='button' value='刪除' onClick='DelRow(".$tr_name.")'/></td></tr>";
		//***ori $message .= '</tr></table>';
		//$message = '<table><tr><td>1</td><td>abc</td></tr></table>';
		//echo json_encode($message);
		//echo $message;
		echo $message.'<br/>';
	}

	/****
	//	2014.10.17 Susan
	//  send askprice table to mail table page
	****/
	function send_form(){
		//* 驗證碼
		
		$this->load->helper('captcha');
		
		//* db random word
		$db_def = $this->load->database('default',TRUE);
		
		$pool = '0123456789';
		$word = '';
		for($i=0; $i<4; $i++){
			$word .= substr($pool, mt_rand(0, strlen($pool)-1), 1);
		}

		
		
		$vals = array(
				'word' => $word,
				'img_path' => './captcha/',
				'img_url' => base_url().'captcha/',
				'img_width' => '100',
				'img_height' => '30',
				'expiration' => 3600
			);
		$cap = create_captcha($vals);
		
		//* Captcha DB
		$data = array(
				'ip_address'	=> $this->input->ip_address(),
				'thecode'		=> $word
				);

		//* DB captcha word record
		$query = $db_def->insert_string('captcha', $data);
		$db_def->query($query);

		$samples = array();
		$samples['cap_img'] = $cap['image'];

		
		$samples['items'] = $this->input->post('checksample', true);
		$samples['check'] = $this->input->post('checkvalue', true);
		$samples['number'] = $this->input->post('checkNumber', true);

		//$proName = $this->input->post('proName',true);
		$samples['proName'] = $this->input->post('proName',true);
		$samples['proSer']  = $this->input->post('proSer',true);
		$samples['proSta']  = $this->input->post('proSta',true);
		$samples['proCor']  = $this->input->post('proCor',true);
		$samples['proNum']  = $this->input->post('proNum',true);
		$samples['proWid']  = $this->input->post('proWid',true);
		$samples['proHei']  = $this->input->post('proHei',true);
		$samples['proFrame']= $this->input->post('proFrame',true);
		$samples['proPos']  = $this->input->post('proPos',true);
		$samples['message'] = '';
		$message = '';
		// 弄成html table 的$var
		$array_num = count($samples['proName']);
		//echo '[debug]check table rows:'.$array_num.'<br/>';
		
		for($i=0; $i<$array_num; $i++){
			if($samples['proSta'][$i]=='noSta'){$samples['proSta'][$i]=='';} 
			if($samples['proSer'][$i]=='noSer'){$samples['proSer'][$i]=='';} 
			if($samples['proFrame'][$i]=='noFrame'){$samples['proFrame'][$i]=='';} 
			if($samples['proPos'][$i]=='noPos'){$samples['proPos'][$i]=='';} 
					if(isset($samples['proName'][$i]) ){
						if($samples['proName'][$i]=='窗簾配件')
  							$samples['proName'][$i] = '配件';
  					}
					if(isset($samples['proSer'][$i]) ){
  						$samples['proSer'][$i] = $samples['proSer'][$i];
  					}else{
  						$samples['proSer'][$i] = '';
  					}
  					if(isset($samples['proCor'][$i]) ){
  						$samples['proCor'][$i] = $samples['proCor'][$i];
  					}else{
  						$samples['proCor'][$i] = '';
  					}

					if(isset($samples['proSta'][$i])){
  						if($samples['proSta'][$i]=='noSta')	
  							$samples['proSta'][$i] = '';
  					}else{
  						$samples['proSta'][$i] = '';
  					}

  					if(isset($samples['proNum'][$i])){
  						if($samples['proNum'][$i]=='noNum')	
  							$samples['proNum'][$i] = '';
  					}else{
  						$samples['proNum'][$i] = '1';
  					}
  					if(isset($samples['proFrame'][$i])){
						if($samples['proFrame'][$i]=='noFrame')
  							$samples['proFrame'][$i] = '';
  					}else{
  						$samples['proFrame'][$i] = '';
  					}
  					if(isset($samples['proPos'][$i])){
						if($samples['proPos'][$i]=='noPos')
  							$samples['proPos'][$i] = '';
  					}else{
  						$samples['proPos'][$i] = '';
  					}
  					if(isset($samples['proWid'][$i])){
						if($samples['proWid'][$i]=='noWid'){
  							$samples['proWid'][$i] = '';
  						}else{
  							$samples['proWid'][$i] .= '';
  						}
  					}else{
  						$samples['proWid'][$i] = '';
  					}
  					if(isset($samples['proHei'][$i])){
						if($samples['proHei'][$i]=='noHei'){
  							$samples['proHei'][$i] = '';
  						}else{
  							$samples['proHei'][$i] .= '';
  						}
  					}else{
  						$samples['proHei'][$i] = '';
  					}
			$message .= "<tr>";
			$message .= "<td id='td_proName'>".$samples['proName'][$i]."</td>";
			$message .= "<td id='td_proSer'>".$samples['proSer'][$i]."</td>";
			$message .= "<td id='td_proSta'>".$samples['proSta'][$i]."</td>";
			$message .= "<td id='td_proCor'>".$samples['proCor'][$i]."</td>";
			$message .= "<td id='td_proNum'>".$samples['proNum'][$i]."</td>";
			$message .= "<td id='td_proWid'>".$samples['proWid'][$i]."</td>";
			$message .= "<td id='td_proHei'>".$samples['proHei'][$i]."</td>";
			$message .= "<td id='td_proFrame'>".$samples['proFrame'][$i]."</td>";
			$message .= "<td id='td_proPos'>".$samples['proPos'][$i]."</td>";
			$message .= "</tr>";
		}
		$samples['message'] = $message;
		
		

		$this->load->view('header/main',$samples);
		$this->load->view('menu/main_menu' );
		$this->load->view('price/iframe');
	}
	/***********
	// 2014.10.17 Susan
	// Need to modify
	**********/
	function new_askprice_gets(){

		$this->load->library('My_PHPMailer');		
		$this->load->library('Memberlib');
		$this->load->library('Productlib');
		
		//db system
		//$dsn = 'mysql://admin:m35j3u4fu3@220.132.39.242/new_msbt?char_set=utf8&dbcollat=utf8_general_ci&port=3306';
		//$this->load->database($dsn);
	
		//post data
		
		$pricecontent		=	$this->input->post('checkvalue',true); //詢價表格
		
		$username		=	$this->input->post('username',true); //姓名
		$sex			=	$this->input->post('gender',true); //稱謂
		$address		=	$this->input->post('addressplace', true); //安裝地址
		
		$tel_areacode	=	$this->input->post('tel_code',true); //市話區碼
		$tel			=	$this->input->post('tel',true); //市話號碼
		$cellphone		=	$this->input->post('cellphone',true); //手機
		$email			=	$this->input->post('email',true); //email
		$note			=	$this->input->post('note',true); //其他備註
		date_default_timezone_set('Asia/Taipei');
		$today 			= 	date('Y-m-d'); //寄信日期
		
		
	//驗證客戶資料	
	
	$subject	=	$today." ".$username." ".$sex." MSBT幔室布緹 詢價系統測試信"; //[CHANGE]
	$body_msg = "<p>親愛的顧客您好：</p>
	      <p>關於您提出之詢價需求如下：</p>";
	$sample_msg	=	"<table border='1' style='border-collapse: collapse'>";
	$sample_msg .= "<tr><th>商品種類</th><th>系列</th><th>規格</th><th>款式/顏色</th><th>數量</th><th>寬</th><th>高</th><th>安裝</th><th>備註</th></tr>";
  				
	
	$sample_msg .= $pricecontent;
	$sample_msg .=  '</table>';

	$body_msg	.=	$sample_msg;
	$body_msg 	.= "<p>姓名：".$username."<br>"."安裝地址：".$address."<br />聯絡電話：".$tel_areacode."-".$tel." ; ".$cellphone. "<br />需求備註：".$note."</p>
			<p>客服回信約2 ~ 3天</p>
	        如有其他疑問或相關選購需求，歡迎隨時與我們連繫，竭誠期待為您服務的機會。<br />
	    </p>" ;
	
	//增加簽名檔
		$sign = '<br/><a href=http://www.msbt.com.tw/><img width=96 src=http://www.msbt.com.tw/logo.jpg></a><br/>';
		$sign .= '<font size=1 color=#777777>幔室布緹有限公司<br/>Maison Boutique Co., Ltd.</font><br/>';
		$sign .= '<br/><font size=1 color=#777777>■ 電話：(03)488-0250<br/>■ 傳真：(03)485-3023<br/>■ 官方網站：www.msbt.com.tw<br/>■ 客服信箱：service@msbt.com.tw</font>';
		
		$body_msg .= $sign;

		//$this->mailer->sendmail();

		

	// 發送確認信件給客戶
		$mail             = new PHPMailer();
		$mail->IsSMTP(); // telling the class to use SMTP
		//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
		                                           // 1 = errors and messages
		                                           // 2 = messages only
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
		$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
		$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
		$mail->CharSet 	  = 'utf-8';
		$mail->Encoding   = 'base64';
		$mail->WordWrap   = 50;
		$mail->Username   = "service@msbt.com.tw";  // GMAIL username
		$mail->Password   = "msbt034880250msbt";            // GMAIL password

		$mail->SetFrom('service@msbt.com.tw', 'MSBT幔室布緹');
		$mail->Subject = $subject;
		$mail->IsHTML(true);

		$mail->MsgHTML($body_msg);
		$cus_address = $email;
		$mail->AddAddress($cus_address, $username);

if(!$mail->Send()) {
  echo "<script>alert('Sorry, occur the error. Please send mail to MSBT service, thank you.')</script>";
} else {
  
}

	$mail->ClearAddresses(); //清除使用者
		
	// 寄信至客服信箱

	$service_subject = $today." ".$username." MSBT幔室布緹 詢價系統測試信"; //[CHANGE]
	$service_body_msg = "<p>收件姓名：".$username.$sex."<br>"."安裝地址：".$address."<br />聯絡電話：".$tel_areacode."-".$tel." ; ".$cellphone."<br>電子郵件：".$email."<br>詢價項目:<br>";
	$service_body_msg .= $sample_msg.'<br>';		
	$service_body_msg .= "需求備註：".nl2br($note);	
	$service_body_msg .= '<br/>'.$sign;
	
		$mail->Subject = $service_subject;
		$mail->IsHTML(true);
		$mail->MsgHTML($service_body_msg);
		$address = 'sample@msbt.com.tw';
		$mail->AddAddress($address, 'MSBT幔室布緹');

if(!$mail->Send()) {
  echo "<script>alert('Sorry,1 occur the error. Please send mail to MSBT service, thank you.')</script>";
} else {
  
}
	
//	$dsn = 'dbdriver://root:2l3el4m3cj84m3@220.132.39.242/new_msbt?char_set=utf8&cache_on=false&port=3306';
//	$this->load->database($dsn);

	// member DB
/*
	$member_id	=	0;
	if(!$this->memberlib->has_the_same_member($username ,  $tel , $cellphone)){
		//將資料存入客戶資料庫chk
		$member	=	new Memberbean();
		$member->name			=	$username;
		$member->gender			=	$sex=='先生'?'男':'女';
		$member->full_address	=	$zipcode.' '.$cus_address;
		$member->address		=	$cus_address;
		$member->telephone_1	=	$tel_areacode.'-'.$tel;
		$member->cellphone		=	$cellphone;
		$member->email			=	$email;
		$member->zipcode		=	$zipcode;
		//索取樣本
		$member->source 		=	2;
		$member->comment		=	 $sample_msg. "\n\n特殊需求：\n".$note ;
		$member_id	=	$this->memberlib->add_member($member);
	}
	else{
		$where	= array();
		$where['name']		=	$username;
		if($cellphone != '')
			$where['cellphone']	=	$cellphone;
		else if($Tel !=''){
			$where['telephone_1']	=	$tel;
		}		
		$member_id	=	$this->memberlib->get_member($where)->id;
	}
	*/
	//將資料存入索取樣品歷程
/*
		$sample_record	=	array();	
		$sample_record['customer_id']		=	$member_id;
		$sample_record['sample_request']	=	$sample_msg;
		$sample_record['comment']			=	$note;
		$sample_record['request_time']		=	time();
		$this->productlib->save_request_sample($sample_record , $samples);
*/
		redirect('askprice','refresh');
			
		
	}

	// new version validate
	// 2014.09.24 Susan
	function new_validate_captcha(){
		$db_def = $this->load->database('default',TRUE);

		//檢查認証碼
		$input_ip = $this->input->ip_address();
		$input_captcha = $this->input->post('SystemPassCode' , true);
		
		if(($input_captcha == null) || ($input_captcha =='') || strlen($input_captcha)==0){
			// 使用者未輸入驗證
			echo 'nocaptcha';
		}else{
			//[debug]test can't connect db
			
			$sql = "SELECT * FROM captcha WHERE ip_address= ? AND thecode = ?";
			$query = $db_def->query($sql, array($input_ip, $input_captcha));
			//****/

			// 尋找資料庫中是否有符合之驗證
			
			if($query->num_rows() == 0){
			//if($input_captcha != "1314"){
				// 資料庫無相符合筆數
				echo 'diff';
			}else{
				// 資料庫有該驗證碼
				// CHECK SAMPLE NUM 是否未選取樣本
				$check_samples = $this->input->post('SamplesNumber', true);

				if( $check_samples == '' ){
					echo 'no';
				}else{
					echo 'match';
				}

			}	
		}

		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */