<script src="<?php echo base_url();?>js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/baseJS.js" type="text/javascript"></script>
<style src="<?php echo base_url();?>css/default.css" type="text/javascript"></style>

 <br />
 

<style type="text/css">
#misua,
#bienzen,#pimu,#bairay,#fenla,
#tiken,#taoza,#zaiki,#zicy,#ritao,#aibo,#veyem,#ladiam,#emmi,#sakin,
#sima,#seda,#nonya,#yoka,
#vali,#wagi,
#dazo,#donzu,#amra,#haju,#limya{
    display:none;
}
#banner{
    position: relative;
    margin-left: -50px;
    display:block;
}
#sampleMenu{
  display: block;
  width: 18%;
  text-align: left;
  float: left;  
}
.samplesIndex{
    border: 0.5pt solid #DCDDDD;
    float: right;
    width: 765px;
    height: 264px;
    margin-right: 20px;
    margin-bottom: 20px;
    overflow-y: auto; 
    overflow-x: hidden;       
    scrollbar-Face-Color:#FFFFFF;
}
.samples{
    position: relative;
    margin-left: -50px;
    border: 0.5pt solid #DCDDDD;
    float: right;
    width: 765px;
    height: 555px;
    margin-right: 20px;
    margin-bottom: 20px;
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
    margin: 0px;  
    margin-bottom: 3px; 
}
.item h6{
    font-size: 13px;
    padding: 0;
    margin: 0;
}
.item p{ /* prepare items */
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
    font-size: 12px;
}
.item img{
    border: 0;
    padding-bottom: 10px;
    width: 80px;
}
.item input{
    border: 9pt;
    font-size: 9pt;

}
#msbtword{
  width: 120px;
  color: white;
}
.point{
    color:#a41f24;
}
h6{
  width: 680px;
}
h6 > #point{
  color:red;
  float:right;
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
  margin-bottom: 80px;
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
  width:100px;
}
.error{
  color:red;
}

.small{
  font-size: 11px;
  margin-left: 5px;
}
#SystemPassCode{
  margin: auto 0;
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

<div id="content">
  <div id="sampleContent">
    <div id="sampleMenu">
      <?php $this->load->view('menu/sample_menu.php');?>
    </div>
    <div id="samples">
<!-- banner -->
<div id="banner" name="banner" class="samplesIndex"><img alt="樣本索取" title="樣本索取" src="<?php echo base_url();?>img/getsample/samples.jpg" width="765"></div>

<!--start misua -->
<?php
foreach($misua_item AS $item_key => $item){
	$item_name = $item['name'];
	$item_length = count($item['items']);
//	echo '[debug]item length:'.$item_length;
	
?>


<div id="misua" name="misua" class="samples">
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
		<img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
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
<!--end misua -->

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
<style>
  #point{
    color: red;
    right: 0;
  }
</style>
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
      <h6><?php echo $item_name;?><span id="point">因木竹本身素材特性，樣本與實品偶有些許顏色差異</span>
</h6>
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
		 <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
		 <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		 </td>
		<?php
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 2){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 3){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 4){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 5){
					echo "<td id='msbtword'>msbt</td>";
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
		 <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
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
      <h6>實木百葉簾 > <span class="point">椴木著色</span><span id="point">因木竹本身素材特性，樣本與實品偶有些許顏色差異</span>
</h6>
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
        <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $img_file;?>.jpg"><br/>
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
      <h6>實木百葉簾 > <span class="point">椴木鋼琴烤漆</span><span id="point">因木竹本身素材特性，樣本與實品偶有些許顏色差異</span>
</h6>
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
        <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $img_file;?>.jpg"><br/>
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
      <h6>實木百葉簾 > <span class="point">PVC仿木</span><span id="point">因木竹本身素材特性，樣本與實品偶有些許顏色差異</span></h6>
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
        <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $img_file;?>.jpg"><br/>
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
      <h6>實木百葉簾 > <span class="point">紅雪松著色</span><span id="point">因木竹本身素材特性，樣本與實品偶有些許顏色差異</span>
</h6>
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
        <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $img_file;?>.jpg"><br/>
        <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
      </td>
    <?php
      if($a == $item_count){
        if($a == 1){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 2){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 3){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 4){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 5){
          echo "<td id='msbtword'>msbt</td>";
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
      <h6>實木百葉簾 > <span class="point">硬竹著色</span><span id="point">因木竹本身素材特性，樣本與實品偶有些許顏色差異</span>
</h6>
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
        <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $img_file;?>.jpg"><br/>
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

<!--start Fenla-->
<div id="fenla" name="fenla" class="samples">
  <div class="item"> 
    <?php
    foreach($fenla_array AS $item_key => $item){
      $item_name = $item['name'];
      $item_key = 'Fenla';
      $array = $item['items'];
      $item_count = count($array);
      
    ?>
      <h1>Fenla</h1>
      <h6>布織百葉簾</h6>
      <hr />
      <table>
        <?php 
          $a = 0; $k= 1;
          foreach($array as $eng => $chinese){
            $img_file = $item_key.'_'.$eng;
            $img_file = str_replace(' ', '_', $img_file);
            $value_name = $item_key.' '.$item_name.' - '.$chinese;
            $list_name = $chinese;
            $id_name = $item_key.'_'.$eng;
           
      $a++; $k++;
      if($k == 2){
        echo '<tr>';
      }
    ?>
      <td>
        <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $img_file;?>.jpg"><br/>
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
<!-- end Fenla -->

<!-- ##########################################################-->
<?php
// roller item
foreach($roller_item AS $item_key => $item){
	//echo '[debug]'.$item_key;
	switch($item_key){
		case "Tiken": //NEW ITEM
			$tiken_array = array($item);
			break;
		case "Taoza":
			$taoza_array = array($item);
			break;
		case "Zaiki":
			$zaiki_array = array($item);
			break;
		case "Zicy": //NO
			$zicy_array = array($item);
			break;
		case "Ritao": // question
			$ritao_array = array($item);	
			break;
		case "Aibo":	//question
			$aibo_array = array($item);
			break;
		case "Veyem":
			$veyem_array = array($item);
			break;
		case "Ladiam"://NO
			$ladiam_array = array($item);
			break;
		case "Emmi":
			$emmi_array = array($item);
			break;
		case "Sakin":
			$sakin_array = array($item);	
			break;
		default:
			
	}
}
?>
<!--start Tiken-->
<div id="tiken" name="tiken" class="samples">
  <div class="item"> 
      <?php
		foreach($tiken_array as $item){
			$item_key ="Tiken";
			$item_name = $item['name'];
			$item_array = $item['items'];
			$item_count = count($item_array);
			
			
		?>
		<h1><?php echo $item_key;?></h1>
		<h6><?php echo $item_name;?></h6>
		<hr />
		<table>
		<?php
			$a = 0; $k =1;
			foreach($item_array as $eng => $chinese){
				$img_file = strtolower($eng);
				$img_file = str_replace(' ','_',$img_file);
				$list_name = $chinese;
				$value_name = $item_key.' '.$item_name.' - '.$chinese;
				$id_name = $item_key.'_'.$eng;
				$a++; $k++;
				if($k == 2){
					echo '<tr>';
				}
				?>
				<td>
				<label for="sample[]"><img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/></label>
				<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
				<td/>
				<?php
				if($a == $item_count){
				if($a == 1){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a ==2){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 3){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 4){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 5){
					echo "<td id='msbtword'>msbt</td>";
				}
				
			}
				if($k == 7){
					echo '</tr>';
					$k =1;
				}
			}
			?>
		</table>
			<?php
			
		}
	  ?>
      
  </div>
</div>
<!-- end Tiken -->

<!--start Taoza-->
<div id="taoza" name="taoza" class="samples">
  <div class="item"> 
      <?php
		foreach($taoza_array as $item){
			$item_key	=	"Taoza";
			$item_name	=	$item['name'];
			$item_array =	$item['items'];
			$item_count =	count($item['items']);
	  ?>
      <h1><?php echo $item_key;?></h1>
      <h6><?php echo $item_name;?></h6>
      <hr />
      <table>	
	  <?php
		$a = 0; $k = 1;
		foreach($item_array AS $eng => $chinese){
		//echo '[DEBUG]'.$eng.' '.$chinese;
			$img_file	=	strtolower($eng);
          	$img_file	=	str_replace(' ','_',$img_file);
          	$list_name	=	$chinese;
          	$id_name	=	$item_key.'_'.$eng;
			$value_name = $item_key.' '.$item_name.' - '.$chinese;
		
			$a ++;$k ++;
			if($k == 2){
				echo '<tr>';
			}
			
	  ?>
		<td width='108'>
		<label for="sample[]"><img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/></label>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
		
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a ==2){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 3){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 4){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 5){
					echo "<td id='msbtword'>msbt</td>";
				}
				
			}
			if($k == 7){
				$k = 1;
				echo '<tr/>';
			}
		}// end foreach chinese
		?>
      </table>	  
	  <?php
		} //end foreach item
	  ?>
  </div>
</div>
<!-- end Taoza -->

<!--start Zaiki-->
<div id="zaiki" name="zaiki" class="samples">
  <div class="item"> 
      <?php
		foreach($zaiki_array as $item){
			$item_key	=	"Zaiki";
			$item_name	=	$item['name'];
			$item_array =	$item['items'];
			$item_count =	count($item['items']);
	  ?>
      <h1><?php echo $item_key;?></h1>
      <h6><?php echo $item_name;?></h6>
      <hr />
      <table>	
	  <?php
		$a = 0; $k = 1;
		foreach($item_array AS $eng => $chinese){
		//echo '[DEBUG]'.$eng.' '.$chinese;
			$img_file	=	strtolower($eng);
          	$img_file	=	str_replace(' ','_',$img_file);
          	$list_name	=	$chinese;
          	$id_name	=	$item_key.'_'.$eng;
			$value_name = $item_key.' '.$item_name.' - '.$chinese;
		
			$a ++;$k ++;
			if($k == 2){
				echo '<tr>';
			}
			
	  ?>
		<td>
		<img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
		
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a ==2){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 3){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 4){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 5){
					echo "<td id='msbtword'>msbt</td>";
				}
				
			}
			if($k == 7){
				$k = 1;
				echo '<tr/>';
			}
		}// end foreach chinese
		?>
      </table>	  
	  <?php
		} //end foreach item
	  ?>
  </div>
</div>
<!-- end Zaiki -->


<!--start Zicy-->
<div id="zicy" name="zicy" class="samples">
  <div class="item"> 
      <p>抱歉，該系列相關服務準備中</p>
      
  </div>
</div>
<!-- end Zicy -->


<!--start Zaiki-->
<div id="zaiki" name="zaiki" class="samples">
  <div class="item"> 
      <?php
		foreach($zaiki_array as $item){
			$item_key	=	"Zaiki";
			$item_name	=	$item['name'];
			$item_array =	$item['items'];
			$item_count =	count($item['items']);
	  ?>
      <h1><?php echo $item_key;?></h1>
      <h6><?php echo $item_name;?></h6>
      <hr />
      <table>	
	  <?php
		$a = 0; $k = 1;
		foreach($item_array AS $eng => $chinese){
		//echo '[DEBUG]'.$eng.' '.$chinese;
			$img_file	=	strtolower($eng);
          	$img_file	=	str_replace(' ','_',$img_file);
          	$list_name	=	$chinese;
          	$id_name	=	$item_key.'_'.$eng;
			$value_name = $item_key.' '.$item_name.' - '.$chinese;
		
			$a ++;$k ++;
			if($k == 2){
				echo '<tr>';
			}
			
	  ?>
		<td>
		<img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
		
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a ==2){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 3){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 4){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 5){
					echo "<td id='msbtword'>msbt</td>";
				}
				
			}
			if($k == 7){
				$k = 1;
				echo '<tr/>';
			}
		}// end foreach chinese
		?>
      </table>	  
	  <?php
		} //end foreach item
	  ?>
  </div>
</div>
<!-- end Zaiki -->


<!--start Ritao-->
<div id="ritao" name="ritao" class="samples">
  <div class="item"> 
      <?php
		foreach($ritao_array as $item){
			$item_key	=	"Ritao";
			$item_name	=	$item['name'];
			$item_array =	$item['items'];
			$item_count =	count($item['items']);
	  ?>
      <h1><?php echo $item_key;?></h1>
      <h6><?php echo $item_name;?></h6>
      <hr />
      <table>	
	  <?php
		$a = 0; $k = 1;
		foreach($item_array AS $eng => $chinese){
			$img_file	=	strtolower($eng);
          	$img_file	=	str_replace(' ','_',$img_file);
          	$list_name	=	$chinese;
          	$id_name	=	$item_key.'_'.$eng;
			$value_name = $item_key.' '.$item_name.' - '.$chinese;
		
			$a ++;$k ++;
			if($k == 2){
				echo '<tr>';
			}
			
	  ?>
		<td>
		<img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
		
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a ==2){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 3){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 4){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 5){
					echo "<td id='msbtword'>msbt</td>";
				}
				
			}
			if($k == 7){
				$k = 1;
				echo '<tr/>';
			}
		}// end foreach chinese
		?>
      </table>	  
	  <?php
		} //end foreach item
	  ?>
  </div>
</div>
<!-- end Ritao -->


<!--start Aibo-->
<div id="aibo" name="aibo" class="samples">
  <div class="item"> 
      <?php
		foreach($aibo_array as $item){
			$item_key	=	"Aibo";
			$item_name	=	$item['name'];
			$item_array =	$item['items'];
			$item_count =	count($item['items']);
	  ?>
      <h1><?php echo $item_key;?></h1>
      <h6><?php echo $item_name;?></h6>
      <hr />
      <table>	
	  <?php
		$a = 0; $k = 1;
		foreach($item_array AS $eng => $chinese){
		//echo '[DEBUG]'.$eng.' '.$chinese;
			$img_file	=	strtolower($eng);
          	$img_file	=	str_replace(' ','_',$img_file);
          	$list_name	=	$chinese;
          	$id_name	=	$item_key.'_'.$eng;
			$value_name = $item_key.' '.$item_name.' - '.$chinese;
		
			$a ++;$k ++;
			if($k == 2){
				echo '<tr>';
			}
			
	  ?>
		<td>
		<img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
		
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a ==2){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 3){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 4){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 5){
					echo "<td id='msbtword'>msbt</td>";
				}
				
			}
			if($k == 7){
				$k = 1;
				echo '<tr/>';
			}
		}// end foreach chinese
		?>
      </table>	  
	  <?php
		} //end foreach item
	  ?>
  </div>
</div>
<!-- end Aibo -->


<!--start Veyem-->
<div id="veyem" name="veyem" class="samples">
  <div class="item"> 
      <?php
		foreach($veyem_array as $item){
			$item_key	=	"Veyem";
			$item_name	=	$item['name'];
			$item_array =	$item['items'];
			$item_count =	count($item['items']);
	  ?>
      <h1><?php echo $item_key;?></h1>
      <h6><?php echo $item_name;?></h6>
      <hr />
      <table>	
	  <?php
		$a = 0; $k = 1;
		foreach($item_array AS $eng => $chinese){
		//echo '[DEBUG]'.$eng.' '.$chinese;
			$img_file	=	strtolower($eng);
          	$img_file	=	str_replace(' ','_',$img_file);
          	$list_name	=	$chinese;
          	$id_name	=	$item_key.'_'.$eng;
			$value_name = $item_key.' '.$item_name.' - '.$chinese;
		
			$a ++;$k ++;
			if($k == 2){
				echo '<tr>';
			}
			
	  ?>
		<td>
		<img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
		
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a ==2){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 3){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 4){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 5){
					echo "<td id='msbtword'>msbt</td>";
				}
				
			}
			if($k == 7){
				$k = 1;
				echo '<tr/>';
			}
		}// end foreach chinese
		?>
      </table>	  
	  <?php
		} //end foreach item
	  ?>
  </div>
</div>
<!-- end Veyem -->


<!--start Ladiam-->
<div id="ladiam" name="ladiam" class="samples">
  <div class="item"> 
      <p>抱歉，該系列相關服務準備中</p>
      
  </div>
</div>
<!-- end Ladiam -->

<!--start Emmi-->
<div id="emmi" name="emmi" class="samples">
  <div class="item"> 
      <?php
		foreach($emmi_array as $item){
			$item_key	=	"Emmi";
			$item_name	=	$item['name'];
			$item_array =	$item['items'];
			$item_count =	count($item['items']);
	  ?>
      <h1><?php echo $item_key;?></h1>
      <h6><?php echo $item_name;?></h6>
      <hr />
      <table>	
	  <?php
		$a = 0; $k = 1;
		foreach($item_array AS $eng => $chinese){
		//echo '[DEBUG]'.$eng.' '.$chinese;
			$img_file	=	strtolower($eng);
          	$img_file	=	str_replace(' ','_',$img_file);
          	$list_name	=	$chinese;
          	$id_name	=	$item_key.'_'.$eng;
			$value_name = $item_key.' '.$item_name.' - '.$chinese;
		
			$a ++;$k ++;
			if($k == 2){
				echo '<tr>';
			}
			
	  ?>
		<td>
		<img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
		
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a ==2){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 3){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 4){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 5){
					echo "<td id='msbtword'>msbt</td>";
				}
				
			}
			if($k == 7){
				$k = 1;
				echo '<tr/>';
			}
		}// end foreach chinese
		?>
      </table>	  
	  <?php
		} //end foreach item
	  ?>
  </div>
</div>
<!-- end Emmi -->

<!--start Sakin-->
<div id="sakin" name="sakin" class="samples">
  <div class="item"> 
     <?php 
    foreach($sakin_array as $item){
      //echo '[debug]'.$item['name'].'xx';
      $item_key = "Sakin";
      $item_name = $item['name'];
      $item_array = $item['items'];
      $item_count = count($item_array);
    ?>
    <h1><?php echo $item_key;?></h1>
    <h6><?php echo $item_name;?></h6>
    <hr />
    <table> 
    <?php
    $a = 0; $k = 1;
    foreach($item_array AS $eng => $chinese){
    //echo '[DEBUG]'.$eng.' '.$chinese;
      $img_file = strtolower($eng);
            $img_file = str_replace(' ','_',$img_file);
            $list_name  = $chinese;
            $id_name  = $item_key.'_'.$eng;
      $value_name = $item_key.' '.$item_name.' - '.$chinese;
    
      $a ++;$k ++;
      if($k == 2){
        echo '<tr>';
      }
      
    ?>
    <td>
    <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
    <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
    <td/>
    <?php
    
      if($a == $item_count){
        if($a == 1){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a ==2){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 3){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 4){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 5){
          echo "<td id='msbtword'>msbt</td>";
        }
        
      }
      if($k == 7){
        $k = 1;
        echo '<tr/>';
      }
    }// end foreach chinese
    ?>
    </table>
    <?php
    }
   ?>
  </div>
</div>
<!-- end Sakin -->

<!-- ##########################################################-->
<?php 
foreach($sima_item as $item_key => $item){
	//echo '[debug]'.$test.' '.$item['name'];
	switch($item_key){
		case "Sima":
			$sima_array = array($item);
			break;
    case "Seda":
      $seda_array = array($item);
      break;
    case "Nonya":
      $nonya_array = array($item);
      break;
		case "Yoka":
			$yoka_array = array($item);
			break;
		default:
			break;
	}

}
?>
<!--start Sima-->
<div id="sima" name="sima" class="samples">
  <div class="item"> 
     <?php 
		foreach($sima_array as $item){
			//echo '[debug]'.$item['name'].'xx';
			$item_key = "Sima";
			$item_name = $item['name'];
			$item_array = $item['items'];
			$item_count = count($item_array);
		?>
		<h1><?php echo $item_key;?></h1>
		<h6><?php echo $item_name;?></h6>
		<hr />
		<table>	
		<?php
		$a = 0; $k = 1;
		foreach($item_array AS $eng => $chinese){
		//echo '[DEBUG]'.$eng.' '.$chinese;
			$img_file	=	strtolower($eng);
          	$img_file	=	str_replace(' ','_',$img_file);
          	$list_name	=	$chinese;
          	$id_name	=	$item_key.'_'.$eng;
			$value_name = $item_key.' '.$item_name.' - '.$chinese;
		
			$a ++;$k ++;
			if($k == 2){
				echo '<tr>';
			}
			
	  ?>
		<td>
		<img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
		
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a ==2){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 3){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 4){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 5){
					echo "<td id='msbtword'>msbt</td>";
				}
				
			}
			if($k == 7){
				$k = 1;
				echo '<tr/>';
			}
		}// end foreach chinese
		?>
		</table>
		<?php
		}
	 ?>
  </div>
</div>
<!-- end Sima -->

<!--start Seda-->
<div id="seda" name="seda" class="samples">
  <div class="item"> 
     <?php 
    foreach($seda_array as $item){
      //echo '[debug]'.$item['name'].'xx';
      $item_key = "Seda";
      $item_name = $item['name'];
      $item_array = $item['items'];
      $item_count = count($item_array);
    ?>
    <h1><?php echo $item_key;?></h1>
    <h6><?php echo $item_name;?></h6>
    <hr />
    <table> 
    <?php
    $a = 0; $k = 1;
    foreach($item_array AS $eng => $chinese){
    //echo '[DEBUG]'.$eng.' '.$chinese;
      $img_file = strtolower($eng);
            $img_file = str_replace(' ','_',$img_file);
            $list_name  = $chinese;
            $id_name  = $item_key.'_'.$eng;
      $value_name = $item_key.' '.$item_name.' - '.$chinese;
    
      $a ++;$k ++;
      if($k == 2){
        echo '<tr>';
      }
      
    ?>
    <td>
    <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
    <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
    <td/>
    <?php
    
      if($a == $item_count){
        if($a == 1){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a ==2){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 3){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 4){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 5){
          echo "<td id='msbtword'>msbt</td>";
        }
        
      }
      if($k == 7){
        $k = 1;
        echo '<tr/>';
      }
    }// end foreach chinese
    ?>
    </table>
    <?php
    }
   ?>
  </div>
</div>
<!-- end Seda -->

<!--start Nonya-->
<div id="nonya" name="nonya" class="samples">
  <div class="item"> 
     <?php 
    foreach($nonya_array as $item){
      //echo '[debug]'.$item['name'].'xx';
      $item_key = "Nonya";
      $item_name = $item['name'];
      $item_array = $item['items'];
      $item_count = count($item_array);
    ?>
    <h1><?php echo $item_key;?></h1>
    <h6><?php echo $item_name;?></h6>
    <hr />
    <table> 
    <?php
    $a = 0; $k = 1;
    foreach($item_array AS $eng => $chinese){
    //echo '[DEBUG]'.$eng.' '.$chinese;
      $img_file = strtolower($eng);
            $img_file = str_replace(' ','_',$img_file);
            $list_name  = $chinese;
            $id_name  = $item_key.'_'.$eng;
      $value_name = $item_key.' '.$item_name.' - '.$chinese;
    
      $a ++;$k ++;
      if($k == 2){
        echo '<tr>';
      }
      
    ?>
    <td>
    <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
    <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
    <td/>
    <?php
    
      if($a == $item_count){
        if($a == 1){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a ==2){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 3){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 4){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 5){
          echo "<td id='msbtword'>msbt</td>";
        }
        
      }
      if($k == 7){
        $k = 1;
        echo '<tr/>';
      }
    }// end foreach chinese
    ?>
    </table>
    <?php
    }
   ?>
  </div>
</div>
<!-- end Nonya -->

<!--start Yoka-->
<div id="yoka" name="yoka" class="samples">
  <div class="item"> 
     <?php 
    foreach($yoka_array as $item){
      //echo '[debug]'.$item['name'].'xx';
      $item_key = "Yoka";
      $item_name = $item['name'];
      $item_array = $item['items'];
      $item_count = count($item_array);
    ?>
    <h1><?php echo $item_key;?></h1>
    <h6><?php echo $item_name;?></h6>
    <hr />
    <table> 
    <?php
    $a = 0; $k = 1;
    foreach($item_array AS $eng => $chinese){
    //echo '[DEBUG]'.$eng.' '.$chinese;
      $img_file = strtolower($eng);
            $img_file = str_replace(' ','_',$img_file);
            $list_name  = $chinese;
            $id_name  = $item_key.'_'.$eng;
      $value_name = $item_key.' '.$item_name.' - '.$chinese;
    
      $a ++;$k ++;
      if($k == 2){
        echo '<tr>';
      }
      
    ?>
    <td>
    <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
    <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
    <td/>
    <?php
    
      if($a == $item_count){
        if($a == 1){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a ==2){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 3){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 4){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 5){
          echo "<td id='msbtword'>msbt</td>";
        }
        
      }
      if($k == 7){
        $k = 1;
        echo '<tr/>';
      }
    }// end foreach chinese
    ?>
    </table>
    <?php
    }
   ?>
  </div>
</div>
<!-- end Yoka -->
<!-- yoka code at notebook-->
<!-- ##########################################################-->
<!--start Vali-->
<?php
  foreach($honeycomb_item as $item_key => $item){
    
    if($item_key == 'Vali Single'){
      $single_array = $item['items'];
      $single_name = $item['name'];
      $single_key = $item_key;
    }else if($item_key == 'Vali Double'){
      $double_array = $item['items'];
      $double_name = $item['name'];
      $double_key = $item_key;
    }else if($item_key == 'Vali Blackout'){
      $blackout_array = $item['items'];
      $blackout_name = $item['name'];
      $blackout_key = $item_key;
    }else if($item_key == 'Wagi'){
      $wagi_array = $item['items'];
      $wagi_name = $item['name'];
      $wagi_key = $item_key;
    }else{

    }
  }
  //echo '<br/>count vali num:'.count($single_array).'<br/>';
  //echo 'count wagi num:'.count($wagi_array).'<br/>';
  
?>
<div id="vali" name="vali" class="samples">
      <?php 
        $item_count = count($single_array);
        $double_count = count($double_array);
        $blackout_count = count($blackout_array);
        $item_orikey = "Vali";
        $item_name = "無紡蜂巢簾";
        //echo '[debug]item count:'.$item_count;
        ?>
        <div class="item">
        <h1><?php echo $item_orikey;?></h1>
        <h6><?php echo $item_name.' > ';?><span class="point"><?php echo $single_name;?></span></h6>
        <hr />
        <table>
        <?php
        $a = 0; $k =1;
        foreach($single_array as $eng => $chinese){
          $id_name = $single_key.'_'.$eng;
          $img_file = str_replace(' ','_',$id_name);
          $value_name = $item_orikey.' '.$item_name.' '.$single_name.' - '.$chinese;
          $list_name = $chinese;

          $a++; $k++;
          if($k == 2){
            echo '<tr>';
          }
        ?>
        <td>
        <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $img_file;?>.jpg"><br/>
        <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
        <td/>
        <?php
          if($a == $item_count){
            if($a == 1){
            echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
            }else if($a ==2){
            echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
            }else if($a == 3){
            echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
            }else if($a == 4){
            echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
            }else if($a == 5){
            echo "<td id='msbtword'>msbt</td>";
            }
          }
          if($k == 7){
            echo '</tr>';
            $k = 1;
          }
        }
        ?>
        </table>
        </div>
    
    <div class="item">
        <h1><?php echo $item_orikey;?></h1>
        <h6><?php echo $item_name.' > ';?><span class="point"><?php echo $double_name;?></span></h6>
        <hr />
        <table>
        <?php
        $a = 0; $k =1;
        foreach($double_array as $eng => $chinese){
          $id_name = $double_key.'_'.$eng;
          $img_file = str_replace(' ','_',$id_name);
          $value_name = $item_orikey.' '.$item_name.' '.$double_name.' - '.$chinese;
          $list_name = $chinese;

          $a++; $k++;
          if($k == 2){
            echo '<tr>';
          }
        ?>
        <td>
        <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $img_file;?>.jpg"><br/>
        <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
        <td/>
        <?php
          if($a == $double_count){
            if($a == 1){
            echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
            }else if($a ==2){
            echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
            }else if($a == 3){
            echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
            }else if($a == 4){
            echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
            }else if($a == 5){
            echo "<td id='msbtword'>msbt</td>";
            }
          }
          if($k == 7){
            echo '</tr>';
            $k = 1;
          }
        }
        ?>
        </table>
        </div>


        <div class="item">
        <h1><?php echo $item_orikey;?></h1>
        <h6><?php echo $item_name.' > ';?><span class="point"><?php echo $blackout_name;?></span></h6>
        <hr />
        <table>
        <?php
        $a = 0; $k =1;
        foreach($blackout_array as $eng => $chinese){
          $id_name = $blackout_key.'_'.$eng;
          $img_file = str_replace(' ','_',$id_name);
          $value_name = $item_orikey.' '.$item_name.' '.$blackout_name.' - '.$chinese;
          $list_name = $chinese;

          $a++; $k++;
          if($k == 2){
            echo '<tr>';
          }
        ?>
        <td>
        <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $img_file;?>.jpg"><br/>
        <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
        <td/>
        <?php
          if($a == $blackout_count){
            if($a == 1){
            echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
            }else if($a ==2){
            echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
            }else if($a == 3){
            echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
            }else if($a == 4){
            echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
            }else if($a == 5){
            echo "<td id='msbtword'>msbt</td>";
            }
          }
          if($k == 7){
            echo '</tr>';
            $k = 1;
          }
        }
        ?>
        </table>
        </div>
</div>
<!-- end Vali -->

<!--start Wagi-->
<div id="wagi" name="wagi" class="samples">
 <div class="item"> 
    <h1><?php echo $wagi_key;?></h1>
    <h6><?php echo $wagi_name;?></h6>
    <hr />
    <table>
     <?php 
     $a = 0; $k = 1;
    foreach($wagi_array as $eng=> $chinese){
      $id_name = $wagi_key.'_'.$eng;
      $img_file = str_replace(' ','_',$id_name);
      $value_name = $wagi_key.' '.$wagi_name.' - '.$chinese;
      $list_name = $chinese;

      $a++; $k++;
      if($k == 2){
        echo '<tr>';
      }
    ?>
    <td>
      <img title="<?php echo $value_name;?>" alt="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $img_file;?>.jpg"><br/>
      <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
        
    </td>
    <?php

      if($k == 7){
        $k =1;
        echo '</tr>';
      }
    }
   ?>
    </table>
    
  </div>
</div>
<!-- end Aibo -->

<!-- ##########################################################-->
<!--start Dazo-->
<?php
// curtain items
foreach($curtain_item AS $item_key => $item){
	if($item_key =="Dazo"){
		$dazo_array = array($item);
	}
	else if($item_key =="Donzu"){
		$donzu_array = array($item);
	
	}else if($item_key == "Haju"){
    $haju_array = array($item);
  }else if($item_key == "Amra"){
		$amra_array = array($item);
	}else if($item_key == "Hajus"){
    $hajus_array = array($item);
  }else if($item_key == "Limya"){
    $limya_array = array($item);
  }
}	
?>


<div id="dazo" name="dazo" class="samples">
  <div class="item"> 
  <?php
	foreach($dazo_array AS $name => $number){
		$item_name = $number['name'];
		$array =$number['items'];
		$item_key = 'Dazo';
		$item_number = count($array);
		//echo '[debug] item number='.$item_number.'<br/>';
	?>
      <h1><?php echo $item_key;?></h1>
      <h6><?php echo $item_name;?></h6>
      <hr />
      <table>
	  <?php
		
		$a = 0; $k = 1;
		foreach($array AS $eng => $chinese){
			$img_file	=	strtolower($eng);
          	$img_file	=	str_replace(' ','_',$img_file);
          	$list_name	=	$chinese;
          	$id_name	=	$item_key.'_'.$eng;
			       $value_name = $item_key.' '.$item_name.' '.'-'.' '.$chinese;
		
			$a ++;$k ++;
			//echo '[debug] k ='.$k.'<br/>';
			
			//echo '[debug] a ='.$a.'<br/>';
			if($k == 2){
				echo '<tr>';
			}
	  ?>
		<td>
		<img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
			if($a == $item_number){
				if($a == 1){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a ==2){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 3){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 4){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 5){
					echo "<td id='msbtword'>msbt</td>";
				}
				
			}
			if($k == 7){
				$k = 1;
				echo '<tr/>';
			}
		}// end foreach eng->chinese
		?>
      </table>
	  <?php
	 }
	 ?>   
  </div> 

 </div>

<!-- end Dazo -->

<!-- start donzu -->
<div id="donzu" name="donzu" class="samples">
  <div class="item"> 
    <?php
	foreach($donzu_array AS $name => $number){
		$item_name = $number['name'];
		$array =$number['items'];
		$item_key = 'Donzu';
		$item_number = count($array);
		//echo '[debug] item number='.$item_number.'<br/>';
	?>
      <h1><?php echo $item_key;?></h1>
      <h6><?php echo $item_name;?></h6>
      <hr />
      <table>
	   <?php
		
		$a = 0; $k = 1;
		foreach($array AS $eng => $chinese){
			$img_file	=	strtolower($eng);
          	$img_file	=	str_replace(' ','_',$img_file);
          	$list_name	=	$chinese;
          	$id_name	=	$item_key.'_'.$eng;
			$value_name = $item_key.' '.$item_name.' '.'-'.' '.$chinese;
		
			$a ++;$k ++;
			//echo '[debug] k ='.$k.'<br/>';
			
			//echo '[debug] a ='.$a.'<br/>';
			if($k == 2){
				echo '<tr>';
			}
	  ?>
		<td>
		<img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
			if($a == $item_number){
				if($a == 1){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a ==2){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 3){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 4){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 5){
					echo "<td id='msbtword'>msbt</td>";
				}
				
			}
			if($k == 7){
				$k = 1;
				echo '<tr/>';
			}
		}// end foreach eng->chinese
		?>
      </table>
	<?php 
	}
	?>
  </div>  
</div>
<!-- end Donzu -->

<!-- start Haju -->
<div id="haju" name="haju" class="samples">
  <div class="item"> 
    <?php
  foreach($hajus_array AS $name => $number){
    $item_name = $number['name'];
    $array =$number['items'];
    $item_key = 'Haju';
    $item_number = count($array);
    //echo '[debug] item number='.$item_number.'<br/>';
  ?>
      <h1><?php echo $item_key;?></h1>    
      <h6>裝飾布簾 > <span class="point"><?php echo $item_name;?></span></h6>
      <hr />
      <table>
     <?php
    
    $a = 0; $k = 1;
    foreach($array AS $eng => $chinese){
      $img_file = strtolower($eng);
            $img_file = str_replace(' ','_',$img_file);
            $list_name  = $chinese;
            $id_name  = $item_key.'_'.$eng;
      $value_name =   $item_key.' '.$item_name.' '.'-'.' '.$chinese;
    
      $a ++;$k ++;
      //echo '[debug] k ='.$k.'<br/>';
      
      //echo '[debug] a ='.$a.'<br/>';
      if($k == 2){
        echo '<tr>';
      }
    ?>
    <td>
    <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'s_'.$img_file;?>.jpg"><br/>
    <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
    <td/>
    <?php
      if($a == $item_number){
        if($a == 1){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a ==2){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 3){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 4){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 5){
          echo "<td id='msbtword'>msbt</td>";
        }
        
      }
      if($k == 7){
        $k = 1;
        echo '<tr/>';
      }
    }// end foreach eng->chinese
    ?>
      </table>
  <?php 
  }
  ?>
 </div>
  <div class="item"> 
    <?php
  foreach($haju_array AS $name => $number){
    $item_name = $number['name'];
    $array =$number['items'];
    $item_key = 'Haju';
    $item_number = count($array);
    //echo '[debug] item number='.$item_number.'<br/>';
  ?>
      <h1><?php echo $item_key;?></h1>    
      <h6>裝飾布簾 > <span class="point"><?php echo $item_name;?></span></h6>
      <hr />
      <table>
     <?php
    
    $a = 0; $k = 1;
    foreach($array AS $eng => $chinese){
      $img_file = strtolower($eng);
            $img_file = str_replace(' ','_',$img_file);
            $list_name  = $chinese;
            $id_name  = $item_key.'_'.$eng;
      $value_name =   $item_key.' '.$item_name.' '.'-'.' '.$chinese;
    
      $a ++;$k ++;
      //echo '[debug] k ='.$k.'<br/>';
      
      //echo '[debug] a ='.$a.'<br/>';
      if($k == 2){
        echo '<tr>';
      }
    ?>
    <td>
    <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
    <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
    <td/>
    <?php
      if($a == $item_number){
        if($a == 1){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a ==2){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 3){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 4){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 5){
          echo "<td id='msbtword'>msbt</td>";
        }
        
      }
      if($k == 7){
        $k = 1;
        echo '<tr/>';
      }
    }// end foreach eng->chinese
    ?>
      </table>
  <?php 
  }
  ?>
 </div>


</div>
<?php 
  
   //end foreach
 ?>
<!-- end Haju -->

<!-- start Limya-->
<div id="limya" name="limya" class="samples">
  <div class="item">
<?php
  foreach($limya_array AS $name => $number){
    $item_name = $number['name'];
    $array =$number['items'];
    $item_key = 'Limya';
    $item_number = count($array);
    //echo '[debug] item number='.$item_number.'<br/>';
  ?>
      <h1><?php echo $item_key;?></h1>
      <h6><?php echo $item_name;?></h6>
      <hr />
      <table>
     <?php
    
    $a = 0; $k = 1;
    foreach($array AS $eng => $chinese){
      $img_file = strtolower($eng);
            $img_file = str_replace(' ','_',$img_file);
            $list_name  = $chinese;
            $id_name  = $item_key.'_'.$eng;
      $value_name = $item_key.' '.$item_name.' '.'-'.' '.$chinese;
    
      $a ++;$k ++;
      //echo '[debug] k ='.$k.'<br/>';
      
      //echo '[debug] a ='.$a.'<br/>';
      if($k == 2){
        echo '<tr>';
      }
    ?>
    <td>
    <img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
    <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
    <td/>
    <?php
      if($a == $item_number){
        if($a == 1){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a ==2){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 3){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 4){
          echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
        }else if($a == 5){
          echo "<td id='msbtword'>msbt</td>";
        }
        
      }
      if($k == 7){
        $k = 1;
        echo '<tr/>';
      }
    }// end foreach eng->chinese
    ?>
      </table>
  <?php 
  }
  ?>
  </div>
</div>
<!-- end Limya-->

<!-- start Amra -->
<div id="amra" name="amra" class="samples">
  <div class="item"> 
    <?php
	foreach($amra_array AS $name => $number){
		$item_name = $number['name'];
		$array =$number['items'];
		$item_key = 'Amra';
		$item_number = count($array);
		//echo '[debug] item number='.$item_number.'<br/>';
	?>
      <h1><?php echo $item_key;?></h1>
      <h6><?php echo $item_name;?></h6>      <hr />
      <table>
	   <?php
		
		$a = 0; $k = 1;
		foreach($array AS $eng => $chinese){
			$img_file	=	strtolower($eng);
          	$img_file	=	str_replace(' ','_',$img_file);
          	$list_name	=	$chinese;
          	$id_name	=	$item_key.'_'.$eng;
			$value_name =   $item_key.' '.$item_name.' '.'-'.' '.$chinese;
		
			$a ++;$k ++;
			//echo '[debug] k ='.$k.'<br/>';
			
			//echo '[debug] a ='.$a.'<br/>';
			if($k == 2){
				echo '<tr>';
			}
	  ?>
		<td>
		<img alt="<?php echo $value_name;?>" title="<?php echo $value_name;?>" src="<?php echo base_url();?>img/getsample/<?php echo $item_key.'_'.$img_file;?>.jpg"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
			if($a == $item_number){
				if($a == 1){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a ==2){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 3){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 4){
					echo "<td id='msbtword'>msbt</td><td id='msbtword'>msbt</td>";
				}else if($a == 5){
					echo "<td id='msbtword'>msbt</td>";
				}
				
			}
			if($k == 7){
				$k = 1;
				echo '<tr/>';
			}
		}// end foreach eng->chinese
		?>
      </table>
	<?php 
	}
	?>
 </div>
</div>
<?php	
	
   //end foreach
 ?>
<!-- end Amra -->



<div id="table">
  <form id="form1" name="form1" method="post" action="<?php echo site_url('sample/samples_gets');?>">

 <table class="table-form">
   <tr>
    <th>收件姓名：<span class="point">*</span></th>
    <td class="write"><input type="text" name="username" id="username" class="required">
 </td>
    <th rowspan="7">寄送內容</th>
    <td class="getsamplesNo" rowspan="7" id="getcontent1">
     <div id="no" name="no" class="no"></div>
     <div id="itempoint" name="itempoint" class="itempoint"></div>
    </td>  
  </tr>
  <tr>
    <th>稱謂：<span class="point">*</span></th>
    <td class="write"> <div><input type="radio" name="sex" id="RadioGroup1_0" value="先生" checked="checked">先生<input type="radio" name="sex" id="RadioGroup1_1" value="小姐">小姐</div></td>
  </tr>
  <tr>
    <th>寄送地址：<span class="point">*</span></th>
    <td class="write"><div>郵遞區號<input type="text" name="zipcode" id="zipcode" class="add_zipcode required number"><span class="point"><a href="http://www.post.gov.tw/post/internet/f_searchzone/index.jsp" target="_blank">中華郵政-郵遞區號查詢</a></span> </div>
    <div>地址<input type="text" name="address" id="address" class="add_require required"/><?php echo form_error('address'); ?></div></td>
   </tr>
   <tr>
    <th>聯絡電話：<span class="point">*</span></th>
    <td class="write"><div>市話<input type="text" class="tel_zipcode number" name="tel_zipcode" id="tel_zipcode">-<input type="text" class="write" name="tel" id="tel"><?php echo form_error('tel'); ?></div>
                      <div>手機<input type="text" class="write required number" name="cellphone" id="cellphone" minLength="10" maxlength="10"><?php echo form_error('cellphone'); ?></div></td>
   </tr>
   <tr>
    <th>電子郵件：<span class="point">*</span></th>
    <td class="write"><input type="text" name="email" id="email" class="email_required required email"><?php echo form_error('email'); ?>
    <br/><span class="point small">請務必填寫E-mail，若電話聯繫不到將以信件通知</span>
    </td>
  </tr>
   <tr>
    <th>其他備註：</th>
    <td class="write"><textarea name="note" rows="5" width="270" class="other_required"></textarea><?php echo form_error('note'); ?></td>
  </tr>
   <tr>
    <th>驗證碼：</th>
    <td class="write"><?php 
		// 隨機產生系統驗證碼
      echo $cap_img;
    ?> <input type="text" class="SystemPassCode" name="SystemPassCode" id="SystemPassCode"></td>
   </tr>
   <input type="hidden" name="checkvalue" id="checkvalue" value="" />
   <input type="hidden" name="samples" id="samples" value="無" />
  </table>
    <div class="btn_div"><input type="submit" name="button1" value="送出" class="buttons"/></div>
	<br/><br/><br/>
 </form>
 <br/><br/>
  </div> <!-- end samples -->
</div> <!-- end table -->
</div><!-- end container -->

<script type="text/javascript">
$(function(){
  
     $("#form1").validate({

    submitHandler :function(form) {
                
      var post_url  = "<?php echo site_url('sample/check_sample_captcha');?>";
        
        $.post(
          post_url, {SystemPassCode : $('#SystemPassCode').val(),
                      SamplesValue : $('#samples').val() } ,
          function(data){
              data = data.Trim();
              if(data == 'diff'){
                alert('驗證碼輸入錯誤!!');
              }else if(data == 'no'){
                alert('尚未選取任何品項\n敬請至左上角邊欄內勾選');
              }else if(data == 'match'){
                form.submit(); // 送出表單
                alert("幔室布緹感謝您索取樣本\n申請遞送已完成");  
              }else if(data == 'nocaptcha'){
                alert('請填寫驗證碼');
              }else if(data == 'error'){
                alert('系統維修中，請稍後使用');
              }
              
          });         
          }
   
      });
    
  });

</script>



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

/* 變換商品項目 
  function change_item(id){
    var itemsNameA = id+'-a';
    var itemsNameB = id+'-b';
    document.getElementById(itemsNameB).style.display = 'block';
    document.getElementById(itemsNameA).style.display = 'none';
  }*/
</script>
<script type="text/javascript">
function change_item(id){
  if(id=="misua"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'block';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="bienzen"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'block';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="pimu"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'block';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="bairay"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'block';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="fenla"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'block';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="tiken"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'block';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="taoza"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'block';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="zaiki"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'block';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="zicy"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'block';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="ritao"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'block';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="aibo"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'block';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="veyem"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'block';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="ladiam"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'block';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="emmi"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'block';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="sakin"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'block';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="sima"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'block';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="seda"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'block';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="nonya"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'block';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="yoka"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'block';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="vali"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'block';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="wagi"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'block';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="dazo"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'block';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="donzu"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'block';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="amra"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'block';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'none';
  }
  if(id=="haju"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'none';
    document.getElementById('haju').style.display = 'block';
  }
  if(id=="limya"){
    document.getElementById('banner').style.display = 'none';

    document.getElementById('misua').style.display = 'none';

    document.getElementById('bienzen').style.display = 'none';
    document.getElementById('pimu').style.display = 'none';
    document.getElementById('bairay').style.display = 'none';
    document.getElementById('fenla').style.display = 'none';

    document.getElementById('tiken').style.display = 'none';
    document.getElementById('taoza').style.display = 'none';
    document.getElementById('zaiki').style.display = 'none';
    document.getElementById('zicy').style.display = 'none';
    document.getElementById('ritao').style.display = 'none';
    document.getElementById('aibo').style.display = 'none';
    document.getElementById('veyem').style.display = 'none';
    document.getElementById('ladiam').style.display = 'none';
    document.getElementById('emmi').style.display = 'none';
    document.getElementById('sakin').style.display = 'none';

    document.getElementById('sima').style.display = 'none';
    document.getElementById('seda').style.display = 'none';
    document.getElementById('nonya').style.display = 'none';
    document.getElementById('yoka').style.display = 'none';

    document.getElementById('vali').style.display = 'none';
    document.getElementById('wagi').style.display = 'none';

    document.getElementById('dazo').style.display = 'none';
    document.getElementById('donzu').style.display = 'none';
    document.getElementById('amra').style.display = 'none';
    document.getElementById('limya').style.display = 'block';
    document.getElementById('haju').style.display = 'none';
  }
}

</script>
