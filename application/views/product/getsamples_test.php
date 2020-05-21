<!--
<script src="<?php echo base_url();?>js/jquery.validate.js" type="text/javascript"></script>
-->
<script src="<?php echo base_url();?>js/baseJS.js" type="text/javascript"></script>
<style src="<?php echo base_url();?>css/allCSS.js" type="text/javascript"></style>

 <br />
 

<style type="text/css">
#string,
#bienzen,#pimu,#bairay,#fenla,
#tiken,#taoza,#zaiki,#zicy,#ritao,#aibo,#veyem,#ladiam,#emmi,#sakin,
#sima,#seda,#nonya,#yoka,
#vali,#wagi,
#dazo,#donzu,#amra,#haju{
    display:none;
}
#string-b, #venetian-b, #roller-b, #double-b, #honeycomp-b, #curtain-b{
    display: none;
}
#banner{
    display:block;
}



#container{
    width: 976px;
    overflow: hidden;
}
#topMenu{
    height: 300px;
}
#menus{
    float: left;
    width: 150px;
    margin-left: 20px;
    margin-top: 20px;

}
.samplesIndex{
    border: 0.5pt solid #DCDDDD;
    float: right;
    width: 765px;
    height: 264px;
    margin-right: 20px;
    margin-bottom: 20px;
    margin-top: 20px;
    overflow-y: auto; 
    overflow-x: hidden;       
    scrollbar-Face-Color:#FFFFFF;
    

}
.samples{
    border: 0.5pt solid #DCDDDD;
    float: right;
    width: 765px;
    height: 555px;
    margin-right: 20px;
    margin-bottom: 20px;
    margin-top: 20px;
    overflow-y: auto; 
    overflow-x: hidden;       
    scrollbar-Face-Color:#FFFFFF;
    

}



/* 三階層分類商品項目*/
.item{
    padding: 20px;
    color: #231815;
    margin-left: 20px;
}
.item h1{
    font-size: 20px;    
    padding-bottom: 2px;
}
.item h6{
    font-size: 13px;
}
.item p{
    font-size: 15px;
    margin-top: 245px;
    text-align: center;
    vertical-align: center;
    color: #000000;
}
.item hr{
    width: 681px;
    border: 0.5pt solid block;
    border-collapse: collapse;
    border-spacing: 0;
    text-align: left;
    margin-left: 0px;
}
.item table{
    width: 720px;
	
}
.item td{
    padding-bottom: 10px;
}
.item img{
    border: 0;
    padding-bottom: 10px;
}
.item input{
    border: 9pt;
    font-size: 9pt;

}
#msbt{
	width: 120px;
	color: white;
}
.point{
    color:#a41f24;
}

/*table */
.table-form {
  float: right;
  margin-top: 15px;
  margin-right:22px;
  font-size:13px;
  width: 765px;
  border: 0.5pt solid #DCDDDD; 

    
}
.table-form td, th{
    line-height: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    font-size: 13px;
    vertical-align: middle;
	
}
.table-form th{
    background-color: #f3f3f3;
    text-align: center;
    color: #000000;
    width: 90px;
    border: 0.5pt solid #DCDDDD;

}
.table-form td{
    width: 300px;
    padding-left: 10px;
    border: 0.5pt solid #DCDDDD;
}
.table-form div{
    padding-top: 3px;
    padding-bottom: 3px;
}
.table-form td input, td select,td textarea{
  /*border:solid 1px #ababab;*/
  border: solid 1px #DCDDDD;

    padding-top: 2px;
    padding-bottom: 2px;
    margin-left: 5px;
    margin-right: 3px;
    margin-top: 3px;
    margin-bottom: 3px;
}

.table-form td input:hover, select:hover, textarea:hover{
  background-color: #f5f5f5;
}

.table-form input:focus{
  background-color: #f5f5f5;
}
.table-form .point{
    color:#fa0330;
}

.table-form .textarea{
    margin: 10px;

    
}
#other_required{
    text-align: left;
    font-size: 13px;
    margin: 0;
    padding: 0; 
    width: 270px;
}
.email_required{
    width: 250px;
}
.tel_zipcode{
    width: 50px;
}
.tel{
    width: 100px;
}
.add_zipcode{
    width: 50px;
}
.add_require{
    width: 250px;
}
.getsamplesNo{
    text-align: left;
    font-size: 13px;
    margin: 0;

}
.getitem{
    font-size: 13px;
    margin: 0;

}
.itempoint{
   margin-right: 5px;
   text-align: right;
   color: #7c7c7c;
}

.btn_div{
  position: relative;
  float: left;
  width: 976px;
  margin-left: 87px;
  margin-top: 20px;
  text-align:center;
}
.buttons{
  border: 0.5pt solid #DCDDDD;
  color:#000000;
  background-color: #f3f3f3;
  font-size:12px;
  font-weight:bold;
  margin-top: 0px;
  text-decoration:none;
  text-transform:uppercase;  
  width: 60px;
  height: 40px;
  vertical-align: middle;
} 
.write img{
  margin-top:3px;
  margin-bottom:3px;
}
#SystemPassCode{
  margin-top:-25px;
}
.no{

  height: 380px;
}
.noitem{
  width: 108px;
}
</style>

</head>
<body onload="clearAll();">

<div id="container">
  <div id="topMenu">
      <?php $this->load->view('menu/sample_menu.php');?>
  </div>
<!-- banner -->
<div id="banner" name="banner" class="samplesIndex"><img alt="樣本索取" src="<?php echo base_url();?>img/leftMenu/product/samples.jpg" width="765"></div>

<!--start String -->
<?php
foreach($misua_item AS $item_key => $item){
	$item_name = $item['name'];
	$item_length = count($item['items']);
//	echo '[debug]item length:'.$item_length;
	
?>


<div id="string" name="string" class="samples">
  <div class="item"> 
      <h1><?php echo $item_key;?></h1>
      <h6><?php echo $item_name;?></h6>
      <hr />
      <table>
	  <?php
		
		$item_array	=	$item['items'];
    $a = 0;
		$k = 1;  
    foreach ($item_array AS $eng => $chinese){
          	$img_file	=	strtolower($eng);
          	$img_file	=	str_replace(' ','_',$img_file);
          	$list_name	=	$chinese;
          	$id_name	=	$item_key.'_'.$eng;
			$value_name = $item_key.' '.$item_name.' '.'-'.' '.$chinese;
		
			$a ++;$k ++;
			if($k == 2){
				echo '<tr>';
			}
			
			//echo '[debug]$a = '.$a.'<br/>';
			//echo '[debug]$k = '.$k.'<br/>';
		?>
		<td>
		<img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>img/leftMenu/product/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
			if($k == 7){
				$k = 1;
				echo '<tr/>';
			}
		}
			
	  ?>
      </table>
  </div>
</div> 
<?php } ?>    
<!--end String -->

<!-- ##########################################################-->
<?php
foreach($venetian_item AS $item_key => $item){
	//echo '[debug]:'.$item_key.'<br/>';
	if($item_key =="Bienzen"){
		$bienzen_array = array($item); 
    //echo 'test count:'.count($bienzen_array);
	}else if($item_key == "Bairay"){
		$bairay_array = array($item);
    //echo 'test count:'.count($bairay_array);
	}else if($item_key == "Pimu Wooden"){
    $wooden_array = array($item);
    //echo 'test count:'.count($wooden_array);
  }else if($item_key == "Pimu High Glossed"){
    $glossed_array = array($item);
  }else if($item_key == "Pimu Faux Wood"){
    $faux_array = array($item);
  }else if($item_key == "Pimu Western Cedar"){
    $western_array = array($item);
  }else if($item_key == "Pimu Bamboo"){
    $bamboo_array = array($item);
  }else if($item_key == "Fenla"){
    $fenla_array = array($item);
  }else{

  } 
}
?>
<!--start Bienzen-->
<div id="bienzen" name="bienzen" class="samples">
  <div class="item"> 
  <?php
	foreach($bienzen_array AS $item_key => $item){
		$item_name = $item['name'];
		$item_key = 'Bienzen';
		$array = $item['items'];
		$item_count = count($array);
		//echo '[debug] 商品數量:'.$item_count;
  ?>
      <h1><?php echo $item_key;?></h1>
      <h6><?php echo $item_name;?></h6>
      <hr />
      <table>
        <?php 
		$a= 0; $k=1;
		foreach($array AS $eng => $chinese){
			$img_file = strtolower($eng);
			$img_file =  str_replace(' ','_',$img_file);
			$list_name = $chinese;
			$value_name = $item_key.' '.$item_name.' - '.$chinese;
			$id_name = $item_key.'_'.$eng;
			
			$a++; $k++;
			if($k == 2){
				echo '<tr>';
			}
		?>
         <td>
		 <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>img/leftMenu/product/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
		 <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		 </td>
		<?php
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
				}else if($a == 2){
					echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
				}else if($a == 3){
					echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
				}else if($a == 4){
					echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
				}else if($a == 5){
					echo "<td id='msbt'>msbt</td>";
				}
				
			}
			if($k == 7){
				$k =1;
				echo '</tr>';
			}
		}
		?>
      </table>
  <?php
	}
	?>
  </div>
</div> 
<!--end Bienzen-->


<!--start Bairay-->
<div id="bairay" name="bairay" class="samples">
  <div class="item"> 
  <?php
	foreach($bairay_array AS $item_key => $item){
		$item_name = $item['name'];
		$item_key = 'Bairay';
		$array = $item['items'];
		$item_count = count($array);
		//echo '[debug] 商品數量:'.$item_count;
  ?>
      <h1><?php echo $item_key;?></h1>
      <h6><?php echo $item_name;?></h6>
      <hr />
      <table>
        <?php 
		$a= 0; $k=1;
		foreach($array AS $eng => $chinese){
			$img_file = strtolower($eng);
			$img_file =  str_replace(' ','_',$img_file);
			$list_name = $chinese;
			$value_name = $item_key.' '.$item_name.' - '.$chinese;
			$id_name = $item_key.'_'.$eng;
			
			$a++; $k++;
			if($k == 2){
				echo '<tr>';
			}
		?>
         <td>
		 <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>img/leftMenu/product/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
		 <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		 </td>
		<?php
		
			if($k == 7){
				$k =1;
				echo '<tr/>';
			}
		}
		?>
      </table>
  <?php
	}
	?>
  </div>
</div> 
<!--end Bairay->

<!--start Pimu-->
<div id="pimu" name="pimu" class="samples">
  <?php $pimu_key = 'Pimu 實木百葉簾';?>
  <div class="item"> 
    <?php
    foreach($wooden_array AS $item_key => $item){
      $item_name = $item['name'];
      $item_key = 'Pimu Wooden';
      $array = $item['items'];
      $item_count = count($array);
      
    ?>
      <h1>Pimu</h1>
      <h6>實木百葉簾 > <span class="point">椴木著色</span></h6>
      <hr />
      <table>
        <?php 
          $a = 0; $k= 1;
          foreach($array as $eng => $chinese){
            $img_file = $item_key.'_'.$eng;
            $img_file = str_replace(' ', '_', $img_file);
            $value_name = $pimu_key.' '.$item_name.' - '.$chinese;
            $list_name = $chinese;
            $id_name = $item_key.'_'.$eng;
           
      $a++; $k++;
      if($k == 2){
        echo '<tr>';
      }
    ?>
      <td>
        <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>img/leftMenu/product/<?php echo $img_file;?>.jpg"><br/>
        <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
      </td>
    <?php
    
        if($k == 7){
          $k =1;
          echo '<tr/>';
        }
      
      } 
    ?>
      </table>
    <?php
    }
      ?>
  </div>

<div class="item"> 
    <?php
    foreach($glossed_array AS $item_key => $item){
      $item_name = $item['name'];
      $item_key = 'Pimu High Glossed';
      $array = $item['items'];
      $item_count = count($array);
      
    ?>
      <h1>Pimu</h1>
      <h6>實木百葉簾 > <span class="point">椴木鋼琴烤漆</span></h6>
      <hr />
      <table>
        <?php 
          $a = 0; $k= 1;
          foreach($array as $eng => $chinese){
            $img_file = $item_key.'_'.$eng;
            $img_file = str_replace(' ', '_', $img_file);
            $value_name = $pimu_key.' '.$item_name.' - '.$chinese;
            $list_name = $chinese;
            $id_name = $item_key.'_'.$eng;
           
      $a++; $k++;
      if($k == 2){
        echo '<tr>';
      }
    ?>
      <td>
        <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>img/leftMenu/product/<?php echo $img_file;?>.jpg"><br/>
        <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
      </td>
    <?php
    
        if($k == 7){
          $k =1;
          echo '<tr/>';
        }
      
      } 
    ?>
      </table>
    <?php
    }
      ?>
  </div>

  <div class="item"> 
    <?php
    foreach($faux_array AS $item_key => $item){
      $item_name = $item['name'];
      $item_key = 'Pimu Faux Wood';
      $array = $item['items'];
      $item_count = count($array);
      
    ?>
      <h1>Pimu</h1>
      <h6>實木百葉簾 > <span class="point">PVC仿木</span></h6>
      <hr />
      <table>
        <?php 
          $a = 0; $k= 1;
          foreach($array as $eng => $chinese){
            $img_file = $item_key.'_'.$eng;
            $img_file = str_replace(' ', '_', $img_file);
            $value_name = $pimu_key.' '.$item_name.' - '.$chinese;
            $list_name = $chinese;
            $id_name = $item_key.'_'.$eng;
           
      $a++; $k++;
      if($k == 2){
        echo '<tr>';
      }
    ?>
      <td>
        <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>img/leftMenu/product/<?php echo $img_file;?>.jpg"><br/>
        <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
      </td>
    <?php
    
        if($k == 7){
          $k =1;
          echo '<tr/>';
        }
      
      } 
    ?>
      </table>
    <?php
    }
      ?>
  </div>

  <div class="item"> 
    <?php
    foreach($western_array AS $item_key => $item){
      $item_name = $item['name'];
      $item_key = 'Pimu Western Cedar';
      $array = $item['items'];
      $item_count = count($array);
      
    ?>
      <h1>Pimu</h1>
      <h6>實木百葉簾 > <span class="point">紅雪松著色</span></h6>
      <hr />
      <table>
        <?php 
          $a = 0; $k= 1;
          foreach($array as $eng => $chinese){
            $img_file = $item_key.'_'.$eng;
            $img_file = str_replace(' ', '_', $img_file);
            $value_name = $pimu_key.' '.$item_name.' - '.$chinese;
            $list_name = $chinese;
            $id_name = $item_key.'_'.$eng;
           
      $a++; $k++;
      if($k == 2){
        echo '<tr>';
      }
    ?>
      <td>
        <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>img/leftMenu/product/<?php echo $img_file;?>.jpg"><br/>
        <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
      </td>
    <?php
      if($a == $item_count){
        if($a == 1){
          echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
        }else if($a == 2){
          echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
        }else if($a == 3){
          echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
        }else if($a == 4){
          echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
        }else if($a == 5){
          echo "<td id='msbt'>msbt</td>";
        }
        
      }

        if($k == 7){
          $k =1;
          echo '<tr/>';
        }
      
      } 
    ?>
      </table>
    <?php
    }
      ?>
  </div>


  <div class="item"> 
    <?php
    foreach($bamboo_array AS $item_key => $item){
      $item_name = $item['name'];
      $item_key = 'Pimu Bamboo';
      $array = $item['items'];
      $item_count = count($array);
      
    ?>
      <h1>Pimu</h1>
      <h6>實木百葉簾 > <span class="point">硬竹著色</span></h6>
      <hr />
      <table>
        <?php 
          $a = 0; $k= 1;
          foreach($array as $eng => $chinese){
            $img_file = $item_key.'_'.$eng;
            $img_file = str_replace(' ', '_', $img_file);
            $value_name = $pimu_key.' '.$item_name.' - '.$chinese;
            $list_name = $chinese;
            $id_name = $item_key.'_'.$eng;
           
      $a++; $k++;
      if($k == 2){
        echo '<tr>';
      }
    ?>
      <td>
        <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>img/leftMenu/product/<?php echo $img_file;?>.jpg"><br/>
        <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
      </td>
    <?php
    
        if($k == 7){
          $k =1;
          echo '<tr/>';
        }
      
      } 
    ?>
      </table>
    <?php
    }
      ?>
  </div>


</div> 
<!--end Pimu-->




<div id="table">
  <form id="form1" name="form1" method="post" action="<?php echo site_url('product/samples_gets');?>">

 <table class="table-form">
   <tr>
    <th>收件姓名：<span class="point">*</span></th>
    <td class="write"><input type="text" name="username" id="username" class="required"></td>
    <th rowspan="7">寄送內容</th>
    <td class="getsamplesNo" rowspan="7" id="getcontent1">
     <div id="no" name="no" class="no"></div>
     <div id="itempoint" class="itempoint"></div>
    </td>  
  </tr>
  <tr>
    <th>性別：<span class="point">*</span></th>
    <td class="write"> <div><input type="radio" name="sex" id="RadioGroup1_0" value="先生" checked="checked">先生<input type="radio" name="sex" id="RadioGroup1_1" value="小姐">小姐</div></td>
  </tr>
  <tr>
    <th>寄送地址：<span class="point">*</span></th>
    <td class="write"><div>郵遞區號<input type="text" name="zipcode" id="zipcode" class="add_zipcode required number"><span class="point"><a href="http://www.post.gov.tw/post/internet/f_searchzone/index.jsp" target="_blank">中華郵政-郵遞區號查詢</a></span> </div>
    <div>地址<input type="text" name="address" id="address" class="add_require required"/></div></td>
   </tr>
   <tr>
    <th>聯絡電話：<span class="point">*</span></th>
    <td class="write"><div>市話<input type="text" class="tel_zipcode number" name="tel_zipcode" id="tel_zipcode">-<input type="text" class="write" name="tel" id="tel"></div>
                      <div>手機<input type="text" class="write required number" name="cellphone" id="cellphone" minLength="10" maxlength="10"></div></td>
   </tr>
   <tr>
    <th>電子郵件：<span class="point">*</span></th>
    <td class="write"><input type="text" name="email" id="email" class="email_required required email"></td>
  </tr>
   <tr>
    <th>其他備註：</th>
    <td class="write"><textarea name="note" rows="5" width="270" class="other_required"></textarea></td>
  </tr>
   <tr>
    <th>驗證碼：</th>
    <td class="write"><?php 
		// 隨機產生系統驗證碼
			//echo $cap_image;
    ?> <input type="text" class="SystemPassCode" name="SystemPassCode" id="SystemPassCode"></td>
   </tr>
   <input type="hidden" name="checkvalue" id="checkvalue" value="" />
   <input type="hidden" name="samples" id="samples" value="無" />
  </table>
    <div class="btn_div"><input type="submit" name="button1" value="送出" class="buttons"/></div>
	<br/><br/><br/>
 </form>
</div> <!-- end table -->
</div><!-- end container -->
<!--
<script type="text/javascript">
$(function(){
	   $("#form1").validate({
		submitHandler :function(form) {
                
			var post_url	=	'<?php echo site_url('product/check_sample_captcha');?>';
	    	$.post(
	    		post_url,
	    		{
          SystemPassCode : $('#SystemPassCode').val(),
          SamplesValue : $('#samples').val() },
	    		function(data){
	    				if(data == 'diff'){
	    					alert('[debug]認證碼輸入錯誤!!');
	    				}else if(data == 'no'){
                alert('您尚未選取樣本');
              }
	    				else if(data == 'match'){
	    					form.submit(); // 送出表單
	    		      alert("幔室布緹感謝您索取樣本\n申請遞送已完成");	

	    				}
	    		});	        
	            

	        }
	 
	    });
		
	});

</script>
-->
<!-- 超過限定數量顯示警告/ 清空checkbox -->
<script language="javascript">
var Maxnum = 20;
var Chknum = 0;
var checkboxes = document.getElementsByName('sample[]');
var selectNum = checkboxes.length;
var testbox = document.getElementById('checkvalue').value;

function checkBox(node){
  var boxValue1="";
  var boxValue2="";
  var nodeValue= node.value;
  var nodeId = node.id;
  var j=1;
  //alert('a: '+Chknum);
  if(node.checked){
    if(Chknum>=Maxnum){
      node.checked=false;
      alert("所選品項已達"+Maxnum+"件上限");
      //alert('b: '+Chknum);
    }else{
      Chknum++;
    }

  }else{
    Chknum--;
  }

  //alert('c: '+Chknum);

  var test=0;
  for(var i=0;i<selectNum;i++){
 
    if(checkboxes[i].checked==true){
      
        (j<10)?(j='0'+j):(j=j);
         boxValue1 = boxValue1+'<div class=\"getitem\">'+j+' '+checkboxes[i].value+'</div>';
         //boxValue2 = boxValue2+','+checkboxes[i].id;
		 boxValue2 = boxValue2+' '+j+' '+checkboxes[i].value+'<br/>';
       if(j==10){
          //boxValue1 = boxValue1+'<br/><hr/>';
       }
        
        j++;
        test++;

      //alert(' +1:'+test);
	   
    }
    
  }//end for

  //alert('d total:'+Chknum+' really:'+test);
  document.getElementById('no').innerHTML = boxValue1;
  document.getElementById('itempoint').innerHTML = '※單次索取以20件為限';
  document.getElementById('checkvalue').value = boxValue2;
  document.getElementById('samples').value = boxValue2;
}

/*** 重整網頁時清空checkbox ***/ 
function clearAll(){

  for(var j=0;j<selectNum;j++){
    checkboxes[j].checked=false;
  }
  document.getElementById('checkvalue').value ="";
}
</script>

