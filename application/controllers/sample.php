<?php if(! defined('BASEPATH')) exit('No direct script access');

class Sample extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('product_model');
		$this->load->library('My_PHPMailer');
		$this->load->helper('form');
		
		
	}
	// new sample
	// 2014.09.24 Susan
	public function index(){
		
		$curtain_item_array	=	array(
			'Dazo'	=>	array(
				'name'	=>	'設計紗簾',
				'items'	=>	array(
					'Chiffon White'		=>	'雪紡白',
					'Chiffon Grey'		=>	'雪紡灰',
					'Chiffon Dark Grey' =>	'雪紡深灰',
					'Zigzag'			=>	'山形',
					'Cattleya'			=>	'洋蘭',
					'Celery'			=>	'芹花',
					'Gemma'				=>	'新芽',
					'Drop'				=>	'紫玉'
				)
			),
					
			'Donzu'	=>	array(
				'name'	=>	'緹花布簾',
				'items'	=>	array(
					'Purple'	=>	'紫',
					'Champagne'	=>	'香檳'
				)
			),
/*			'Limya'	=>	array(
				'name'	=>	'植絨布簾',
				'items'	=>	array(
					'Anise'	=>	'茴香',
//					'Fern'	=>	'線蕨',
	//				'Leaf'	=>	'綠葉',
					'Berry'	=>	'莓果'
				)
			),
*/			'Hajus'	=>	array(
				'name'	=>	'竹節紗',
				'items'	=>	array(
					'Tangerine'	=>	'橘',
					'Apricot'	=>	'粉橘',
					'Delft'	=>	'陶瓷藍'
				)
			),
			'Haju'	=> array(
				'name'	=>	'平紋布',
				'items' =>	array(
					'Tangerine'	=>	'橘',
					'Red'	=>	'紅',
					'Fuchsia'	=>	'紫紅',
					'Bordeaux'	=>	'酒紅',
					'Yellow'	=>	'黃',
					'Khaki'	=>	'卡其',
					'Teal'	=>	'土耳其藍',
					'Delft'	=>	'陶瓷藍',
					'Sky Blue'	=>	'天藍',
					'Army Green'	=>	'軍綠',
					'Lime'	=>	'萊姆綠',
					'Vivid Green'	=>	'嫩綠'
				)
			),
			'Limya'	=>	array(
				'name'	=>	'彩藝布簾',
				'items'	=>	array(
					'Pleocnemia'	=>	'羽蕨',
					'Fern'			=>	'線蕨',
					'Leaf'			=>	'綠葉',
					'Berry'			=>	'莓果',
					'Anise'			=>	'茴香'
				)
			),
			'Amra'	=>	array(
				'name'	=>	'遮光布簾',
				'items'	=>	array(			
					'Emboss Almond'	=>	'壓紋杏白',
					'Emboss Choco'  =>	'壓紋可可',
					'Emboss Bordeaux'	=>	'壓紋酒紅',
					'Emboss Stone Grey'	=>	'壓紋岩灰',
					'Emboss Metal Grey' => '壓紋鐵灰',
					'Stripe Brown'	=>	'條紋棕',
					'Linen Grey'	=>	'亞麻灰',
					'Linen Almond'	=>	'亞麻杏白'
					
				)
			)				
		);
		$misua_item_array	=	array(
			'Misua'	=>	array(
				'name'	=>	'線簾',
				'items'	=>	array(
					'Fuchsia'	=>	'紫',
					'Gold'	=>	'金',
					'Tango Red'	=>	'紅',
					'Black'	=>	'黑',
					'White'	=>	'白',							
					'Yellow'	=>	'黃',
					'Sky Blue'	=>	'天藍',
					'Lime'	=>	'萊姆綠',
					'Honeysuckle'	=>	'忍冬紅',
					'Delft'	=>	'陶瓷藍',
					'Celestial'	=>	'海藍',
					'Grey'	=>	'灰'	,
					'Almond' =>	'杏白',
					'Choco' =>	'可可',
					'Sakura Pink'	=>	'櫻粉紅'

				)
			)			
		);		
		$venetian_item_array = array(
			'Bienzen' => array(
				'name' => '竹編木百葉簾',
				'items' => array(
					'Natural' => '原木',
					'Cherry' => '褐',
					'Brown' => '棕'
				)
			),
			'Bairay' => array(
				'name' => '無拉繩鋁百葉簾',
				'items' => array(
					'White Gloss' => '白',
					'White Snow' => '灰泥白',
					'Magnolia' => '麥白',
					'Fawn' => '褐',
					'Alabaster' => '杏白',
					'Arctic White' => '米白',
					'Chinchilla' => '卡其灰',
					'Bright Stirling' => '亮光銀',
					'Bright Silver'=> '珠光銀',
					'Bright Steel' => '珠光鐵灰',
					'Bright Grey' => '珠光深灰'
				)
			),
			'Pimu Wooden' => array(
				'name' => '椴木著色',
				'items' => array(
					'001' => '001',
					'002' => '002',
					'003' => '003',
					'004' => '004',
					'005' => '005',
					'006' => '006',
					'007' => '007',
					'008' => '008',
					'009' => '009',
					'010' => '010',
					'011' => '011',
					'012' => '012',
					'013' => '013',
					'014' => '014',
					'022' => '022',
					'024' => '024',
					'025' => '025',
					'026' => '026'
				)
			),
			'Pimu High Glossed' => array(
				'name' => '椴木鋼琴烤漆',
				'items' => array(
					'0601' => '0601',
					'0602' => '0602',
					'0603' => '0603',
					'0604' => '0604',
					'0605' => '0605',
					'0611' => '0611',
					'0612' => '0612',
					'0613' => '0613',
					'0616' => '0616',
					'0619' => '0619'

				)
			),
			'Pimu Faux Wood' => array(
				'name' => 'PVC仿木',
				'items' => array(
					'103S' => '103S',
					'105S' => '105S',
					'201' => '201',
					'202' => '202',
					'204' => '204',
					'206' => '206',
					'207' => '207'
				)
			),
			
			'Pimu Western Cedar' => array(
				'name' => '紅雪松著色',
				'items' => array(
					'401' => '401',
					'402' => '402',
					'403' => '403',
					'404' => '404',
					'405' => '405',
					'406' => '406',
					'407' => '407',
					'408' => '408'
				)
			),
			'Pimu Bamboo' => array(
				'name' => '硬竹著色',
				'items' => array(
					'1200' => '1200',
					'1201' => '1201',
					'1202' => '1202',
					'1203' => '1203',
					'1204' => '1204',
					'1205' => '1205',
					'1206' => '1206',
					'1207' => '1207',
					'1208' => '1208',
					'1209' => '1209'
 				)
			),
			'Fenla' => array(
				'name' => '布織百葉簾',
				'items' => array(
					'White' => '白',
					'Beige' => '米白',
					'Pearl' => '淺粉',
					'Wheat' => '麥白',
					'Khaki' => '卡其灰',
					'Grey' => '灰',
					'Choco' => '可可',
					'Latte' => '拿鐵',
					'Tan' => '褐',
					'Bordeaux' => '酒紅',
					'Antique' => '珊瑚紅'
				)
			)
		);
		
		$roller_item_array	=	array(
			'Tiken' => 	array(
				'name'	=>	'原色捲簾',
				'items'	=>	array(
					'White'		=>	'白',
					'Wheat'		=>	'麥白',
					'Beige'		=>	'米白',
					'Pearl'		=>	'淺粉',
					'Yellow'		=>	'黃',
					'Chrome Yellow'	=>	'銘黃',
					'Apricot'		=>	'粉橘',
					'Green'		=>		'綠',
					'Lavender'	=>	'淺紫',
					'Dark Blue'	=>	'深藍',
					'Oxford Blue'	=>	'藍黑',
					'Grey Blue'	=>	'灰藍',
					'Navy Blue'	=>	'海軍藍',
					'Teal Blue'	=>	'土耳其藍',
					'Brown'		=>	'棕',
					'Red'		=>	'紅',
					//'Dark Red'	=>	'酒紅',
					'Orange'	=>	'橙',
					'Grey'		=>	'灰',
					'Dark Grey'	=>	'深灰',
					'Black'		=>	'黑'
				)
			),
			'Taoza'	=>	array(
				'name'	=>	'紙編捲簾',
				'items'	=>	array(
					'Natural'	=>	'自然紋',
					'Beige'		=>	'米白',
					'36001'		=>	'36001',
					'33701'		=>	'33701',
					'36507'		=>	'36507',
					'36401'		=>	'36401',
					'46012'		=>	'46012',
					'50601'		=>	'50601',
					'50903'		=>	'50903',
					'50904'		=>	'50904',
					'51201'		=>	'51201',
					'51202'		=>	'51202',
					'51301'		=>	'51301',
					'51304'		=>	'51304',
					'51401'		=>	'51401',
					'51503'		=>	'51503',
					'51505'		=>	'51505'
				)
			),
			'Zaiki'	=>	array(
				'name'	=>	'設計捲簾',
				'items'	=>	array(			
					'Tulip Honeysuckle'	=>	'鬱金香 桃紅',
					'Rhodes Dark Grey'	=>	'霧紋深灰',
					'Rhodes Latte'	=>	'霧紋拿鐵',
					'Rhodes Tan'	=>	'霧紋褐',
					'Rhodes Beige'	=>	'霧紋米白',
					'Rhodes White'	=>	'霧紋白',
					'Como Black'	=>	'格紋黑',
					'Como Dark Grey'	=>	'格紋深灰',
					'Como Choco' => '格紋可可',
					'Como Latte' =>	'格紋拿鐵',
					'Como Beige' =>	'格紋米白',
					'Como White' =>	'格紋白'

					
				)
			),						
			'Ritao'	=>	array(
				'name'	=>	'透光捲簾',
				'items'	=>	array(
					'White'	=>	'白',	
					'Brown'	=>	'棕'	
				)
			),
			'Aibo'	=>	array(
				'name'	=>	'陽光面料捲簾',
				'items'	=>	array(
					'White'	=>	'白',
					'Grey'	=>	'灰'
				)
			),
			'Veyem'	=>	array(
				'name'	=>	'植絨捲簾',
				'items'	=>	array(			
//					'Linen Black'	=>	'桔梗 亞麻黑',
					'Black'			=>	'宮廷 黑'
				)
			),			
			'Emmi'	=>	array(
				'name'	=>	'遮光捲簾',
				'items'	=>	array(		
					'Rhodes Latte' => '霧紋拿鐵',
					'Rhodes Tan' => '霧紋褐',
					'Rhodes Beige' => '霧紋米白',
					'Rhodes White' => '霧紋白',
					'Como Black' => '格紋黑',
					'Como Dark Grey' => '格紋深灰',
					'Como Choco'	=>	'格紋可可',
					'Como Latte' => '格紋拿鐵',
					'Como Beige' => '格紋米白',
					'Como White' => '格紋白',
					'Jersey Dark Grey' => '沙紋深灰',
					'Jersey Stone' => '沙紋岩灰',
					'Jersey Khaki' => '沙紋卡其灰',
					'Jersey Almond' => '沙紋杏白',
					'Jersey Beige' => '沙紋米白',
					'Jersey White' => '沙紋白',
					'Oxford Black' => '粗紋黑',
					'Oxford Latte' => '粗紋拿鐵',
					'Oxford Tan'   => '粗紋褐',
					'Oxford Beige' => '粗紋米白',
					'Oxford White' => '粗紋白',
					'Athena Black' => '木紋黑',
					'Athena Steel Grey' => '木紋鐵灰',
					'Athena Almond' => '木紋杏白',
					'Athena Beige' => '木紋米白',
					'Athena White' => '木紋白',
					'Dark Grey'	=>	'織紋深灰',
					'Beige'	=>	'織紋米白'
					
				)
			),	
			'Sakin'	=>	array(
				'name'	=>	'平紋遮光捲簾',
				'items'	=>	array(
					'Extra White'	=>	'特白',
					'Beige'		=>	'米白',
					'Ecru'		=>	'黃褐',
					//'Dark Grey'	=>	'深灰',
					'Stone'		=>	'岩灰',
					'Grey'		=>	'灰',
					'Pearl'		=>	'淺粉',
					'White'		=>	'白',
					'Lotus'		=>	'藕白',
					'Taupe'		=>	'灰褐'
				)
			)	
		);		
		$sima_item_array = array(
			'Sima'	=>	array(
				'name'	=>	'斑馬簾',
				'items'	=> array(
					'Linen'	=>'亞麻',
					'Pink'=>'粉紅',
					'Sand'	=>'金沙',
					'Lavender'	=>'淺紫',
					'Sky Blue'	=>'天藍',
					'Grey Green'=>'灰綠',
					'White'	=>'白',
					'Beige'	=>'米白',
					'Latte'=>'拿鐵',
					'Black'	=>'黑',
					'Choco'	=>'可可',
					'Metal Grey'=>	'鐵灰',
					'Dark Grey'	=>	'深灰',
					'Grey'	=>	'灰',
					'Extra White' => '特白',
					'Yellow'=>	'黃',
					'Pearl'	=>	'淺粉',
					'Linen Grey'=>	'亞麻灰',
					'Linen Beige'=>	'亞麻米白',
					'Linen Tan'	=>	'亞麻褐',
					'Linen Brown'=>	'亞麻棕'
				)
			),
			'Seda'  =>  array(
				'name'  =>  '細織斑馬簾',
				'items' =>  array(
					'White'	=> '白',
					'Beige'	=> '米白',
					'Almond'=>	'杏白',
					'Latte'	=>	'拿鐵',
					'Orange'=>	'橙',
					'Red'	=>	'紅',
					'Dark Grey'=>	'深灰',
					'Violet'	=>	'羅蘭紫',
					'Bordeaux'	=>	'酒紅',
					'Choco'		=>	'可可',
					'Brown'		=>	'棕',
					'Black'		=>	'黑'
				)
			),
			'Nonya'	=>	array(
				'name'	=>	'條紋斑馬簾',
				'items'	=>	array(
					'Latte'		=>	'拿鐵',
					'Matcha'	=>	'抹茶',
					'Choco'		=>	'可可',
					'Jujube'	=>	'棗紅',
					'Grey'		=>	'霧灰',
					'Brown'		=>	'深棕',
					'Linen'		=>	'亞麻',
					'Fawn'		=>	'淺褐',
					'Dark Linen'	=>	'棕麻',
					'Copper'		=>	'紅銅'
				)
			),
			'Yoka'	=>	array(
				'name'	=>	'遮光斑馬簾',
				'items'	=>	array(
					'White'		=>	'白',
					'Linen'		=>	'亞麻',
					'Linen Grey'=>	'亞麻灰',
					'Linen Brown'=>	'亞麻棕',
					'Silver White'	=>'銀白',
					'Tan'		=>	'褐',
					'Metal Grey'	=>'鐵灰',
					'Latte'		=>	'拿鐵',
					'Choco'		=>	'可可',
					'Black'	=>	'黑'
				)
			)
		);
		
		$honeycomb_item_array = array(
			
				'Vali Single'=> array(
					'name'	=>	'單巢',
					'items'	=> array(
						'White'			=>	'白',
						'Cloud Cream'	=>	'米白',
						'Ivory Beige'	=>	'米黃',
						'Leaf Gold'	=>	'褐',
						'Pink Mist'	=>	'粉紅',
						'Coral Pink'	=>	'粉橘',
						'Placid Blue'	=>	'藍',
						'Reed'			=>	'綠',
						'Antique Moss'		=>	'抹茶',
						'Yoke Yellow'		=>	'銘黃',
						'Champagne Beige'	=>	'卡其',
						'Bungee Cord'		=>	'深灰'
					)
				),
				'Vali Double' => array(
					'name'	=> '雙巢',
					'items'	=> array(
						'White'			=>	'白',
						'Ivory'	=>	'米黃',
						'Soft Gold'	=> '褐',
						'Coral Pink'	=>	'粉橘',
						'Placid Blue'	=>	'藍',
						'Reed'	=> '綠'
					)
				),
				'Vali Blackout' => array(
					'name'	=> '單巢遮光',
					'items'	=> array(
						'White'	=>	'銀白',
						'Ivory'	=>	'米黃',
						'Soft Gold' => '褐',
						'Linen'	=> '亞麻',
						'Rose Wood' => '香檳',
						'Smoky Blue'	=> '藍'
					)
				),
				'Wagi' => array(
					'name' => '布織蜂巢簾',
					'items' => array(
						'White' => '白',
						'Pearl' => '淺粉',
						'Apricot' => '粉橘',
						'Coffee' => '咖啡',
						'Red' => '紅',
						'Tangerine' => '橘',
						'Yellow' => '黃',
						'Green' => '綠',
						'Sky Blue' => '天藍',
						'Light Grey' => '淺灰',
						'Metal Grey' => '鐵灰',
						'Black' => '黑',
						'Beige' => '米白',
						'Wheat' => '麥白',
						'Khaki' => '卡其',
						'Grey' => '灰',
						'Choco' => '可可',
						'Midnight Blue' => '湛藍',
						'Dark Purple' => '深紫',
						'Chrome Yellow' => '銘黃'
					)
				)
			
			
		);
		
		$sample_arr	=	array();
		$sample_arr['curtain_item']	=	$curtain_item_array;
		$sample_arr['misua_item']	=	$misua_item_array;
		$sample_arr['roller_item']	=	$roller_item_array;
		$sample_arr['venetian_item'] = $venetian_item_array;
		$sample_arr['sima_item']	=	$sima_item_array;
		$sample_arr['honeycomb_item'] = $honeycomb_item_array;
		
		
		$this->load->view('header/main');
		$this->load->view('menu/main_menu' );
		$this->load->view('product/getsamples_validate', $sample_arr);

		
	}


	//sample validate iframe
	function validate(){
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
		$this->load->view('header/main',$samples);
		$this->load->view('menu/main_menu' );
		$this->load->view('product/iframe');
	}


	//new sample mailer
	// 2014.09.24 Susan
	// change some tables items name
	function new_samples_gets(){

		$this->load->library('My_PHPMailer');		
		$this->load->library('Memberlib');
		$this->load->library('Productlib');
		
		//db system
		//$dsn = 'mysql://admin:m35j3u4fu3@220.132.39.242/new_msbt?char_set=utf8&dbcollat=utf8_general_ci&port=3306';
		//$this->load->database($dsn);
	
		//post data
		$checkvalue		=	$this->input->post('checkvalue',true);
		$samples		=	$this->input->post('samples',true); //樣本索取項目
		$username		=	$this->input->post('username',true);
		$sex			=	$this->input->post('gender',true);
		$zipcode		=	$this->input->post('add_code',true);
		$cus_address	=	$this->input->post('addressplace', true);
		$tel_areacode	=	$this->input->post('tel_code',true);
		$tel			=	$this->input->post('tel',true);
		$cellphone		=	$this->input->post('cellphone',true);
		$email			=	$this->input->post('email',true);
		$note			=	$this->input->post('note',true);
		date_default_timezone_set('Asia/Taipei');
		$today 			= 	date('Y-m-d');
		
		//echo '<br/>[debug]sample no:'.$checkvalue.'<br/>';
		//$sample = explode("," ,$checkvalue);
		//echo '[debug]count checkvalue:'.count($sample);
		//echo '[debug]sample:'.$samples;
		/*
		echo '========================';
		echo '收件人姓名：'.$username.'<br/>';
		echo '稱謂：'.$sex.'<br/>';
		echo '郵遞區號：'.$zipcode.'<br/>';
		echo '寄送地址：'.$cus_address.'<br/>';
		echo '市話：'.$tel_areacode.'-'.$tel.'<br/>';
		echo '手機：'.$cellphone.'<br/>';
		echo '信箱：'.$email.'<br/>';
		echo '其他備註：'.$note.'<br/>';
		echo 'checkvalue：'.$checkvalue.'<br/>';
		echo 'samples:'.$samples.'<br/>';
		echo 'today:'.$today.'<br/>';
		*/
		
	//驗證客戶資料	
	
	$subject	=	$today." ".$username." ".$sex." MSBT幔室布緹 樣本索取"; //[CHANGE]
	$body_msg = "<p>親愛的顧客您好：</p>
	      <p>關於您索取樣本之需求，已為MSBT 幔室布緹接受且確認成立。</p>
		  <p>樣本寄出明細與收件資訊如下：</p>";
	$sample_msg	=	'';
	
	
	$sample_msg = $checkvalue;
	$body_msg	.=	$sample_msg;
	$body_msg 	.= "<p>收件姓名：".$username."<br>"."寄送地址：".$zipcode." ".$cus_address."<br />連絡電話：".$tel_areacode."-".$tel." ; ".$cellphone. "<br />需求備註：<br />".$note."</p> <p>在收到您的索取明細之後，將盡快寄出相關產品樣本，樣本寄達約需3～5個工作天（不包含假日）。<br />
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
		$address = $email;
		$mail->AddAddress($address, $username);

if(!$mail->Send()) {
  echo "<script>alert('Sorry, occur the error. Please send mail to MSBT service, thank you.')</script>";
} else {
  
}

	$mail->ClearAddresses(); //清除使用者
		
	// 寄信至客服信箱

	$service_subject = $today." ".$username." MSBT幔室布緹 樣本索取"; //[CHANGE]
	$service_body_msg = "<p>收件姓名：".$username.$sex."<br>"."寄送地址：".$zipcode." ".$cus_address."<br />連絡電話：".$tel_areacode."-".$tel." ; ".$cellphone."<br>電子郵件：".$email."<br>索取項目:<br>";
	$service_body_msg .= $sample_msg.'<br>';		
	$service_body_msg .= "需求備註：<br>".nl2br($note);	
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
	
	//將資料存入索取樣品歷程

		$sample_record	=	array();	
		$sample_record['customer_id']		=	$member_id;
		$sample_record['sample_request']	=	$sample_msg;
		$sample_record['comment']			=	$note;
		$sample_record['request_time']		=	time();
		$this->productlib->save_request_sample($sample_record , $samples);

		redirect('sample','refresh');
			
		
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
			

			// 尋找資料庫中是否有符合之驗證
			
			if($query->num_rows() == 0){
				// 資料庫無相符合筆數
				echo 'diff';
			}else{
				// 資料庫有該驗證碼
				// CHECK SAMPLE NUM 是否未選取樣本
				$check_samples = $this->input->post('SamplesNumber', true);

				if( ($check_samples == 0) || ($check_samples == '') ){
					echo 'no';
				}else{
					echo 'match';
				}

			}	
		}

		
	}

}
?>
