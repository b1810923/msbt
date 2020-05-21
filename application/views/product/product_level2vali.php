<?php 
$level2Eng = '';
$level2id = '';
$category = '';
$first = '';
$firstNum = '';
foreach($level2 as $item): 
  $level2Eng =  $item['level2Eng'];
  $level2id = $item['level2Id'];
  $category = $item['category'];
  $first = $item['level3Eng'];
  $firstNum = $item['picNum'];
  break;
endforeach;

// level2 items name
$this->load->model('product_model');
$level2Pro = $this->product_model->get_level2($level2Eng);
?>
<script type="text/javascript" src='<?php echo base_url();?>js/jquery-1.8.3.min.js'></script>
<script type="text/javascript" src='<?php echo base_url();?>js/jquery.zoom-min.js'></script>

<!-- fancybox start -->
<script type="text/javascript" src="<?php echo base_url();?>/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
  

  <style>
  #msbtcontent{
    color: #595757;
    line-height: 1.5em; /* 文字行距 */
  }
  </style>
 <!-- fancybox end --> 

<style>
#<?php echo $level2Eng;?>{
  color: #a82124;
}
/********************/
/* category  page   */
#topMenu{
  width: 20%;
  float: left;
}
#page_pro{
  float: right;
  width: 80%;
}

#pro_img{
  float: left;
  width: 410px;
}
#pro_thumb{
  float: right;
}
#pro_zoom{
  float:left;
  width: 300px;
}

#pro_content{
  float: right;
  margin-top:0;
  margin-right:0;
  width: 370px;
  border-top: 7px solid #595757;
}
#line{
  border: 1px solid #f4f4f4;
}
.capword{
  color:white;
}

#pro_content h3{
  font-size: 23px;
  color: #595757;
  margin: 25px 10px;
  margin-bottom: 35px;
}
#pro_colorselect{
  margin: 0 10px;
  top: 25px;
}
#pro_text{
  color: #595757;
  font-size: 13px;
  line-height: 20px;
  margin: 3px 10px;
  padding-bottom: 20px;
  border-bottom: 1px solid #f1f1f1;
  
}
#pro_color{
  width: 290px;
  margin: 15px 10px;}
/* items color CSS */
#pro_color .ori{ margin-bottom: 5px;}
.ori { border: 1px solid white; margin-right: 5px; margin-bottom:5px;}
.use { border: 1px solid black; margin-right: 5px; margin-bottom:5px;}
.thumb{ width: 90px;}
.small{ width: 300px;}

#pro_thumb li{
  margin: 5px 0;
  margin-top: 0;
}
#pro_items{
  text-align: right;
  margin-right: 25px;
}
#pro_items a{
  color: #595757;
}
#pro_items li{
  margin-bottom: 10px;  
  font-size:13px;
}

#pro_items a#askprice{
  font-size:15px;
  color: #a82124;

  
}
#pro_items img{
  width: 20px;
}

#pro_color img{
  width: 30px;
}
.zoomWindowContainer{
  width: 300px;
}
.zoomWindow{
  width: 300px;
}


/* optional icon style */
.zoomIcon { 
  width:33px; 
  height:33px; 
  position:absolute; 
  top:0;
  right:0;
  background:url('<?php echo base_url();?>img/icon.png');
}

.zoom p { position:absolute; top:3px; right:28px; color:#fff; font:bold 13px/1 sans-serif;}

.zoom {
  display:inline-block;
  position:relative;
}

.zoom img {
  display: block;
}

.zoom img::selection { background-color: transparent; }
.no{
  color: #ccc;
}

table tr,td{
  margin: 0;
  padding: 0;
  font-size: 100%;
  border: 0;
  vertical-align: top;
  
  border-spacing: 5;
  vertical-align: top;
  line-height: 1.5em; /* 文字行距 */
  letter-spacing: 0.1em;  /*文字間距 */

}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  margin-top: 20px;
}
tr{
  height:1.5rem;
}
td{
  text-align: top;
}
.td1{
  width: 63px;
}
#sqau{
  color: white;
}
.table2th{
  margin-left: 66px;
}
.table4th{
  margin-left: 95px;
}
.table1th{
  margin-left: 18px;
}
.pro_subheading{
  margin-top: -25px;
  padding-bottom: 25px;
  margin-left: 10px;
  margin-right: 15px;
  color: #595757;
  line-height: 1.5em; /* 文字行距 */
  letter-spacing: 0.01em;  /*文字間距 */
}
</style>
<script>
//alert('[debug]first value:'+test);
</script>

<div id="content">
  <div id="topMenu">
    <?php $this->load->view('menu/product_menu.php'); ?>
  </div>
    <div id="page_pro">
      <div id="pro_img">
        <div id="pro_zoom">
          <span class='zoom' id='ex1'>
            <img id="def_img" class="small" src="<?php echo base_url();?>img/product/category/<?php echo $level2Pro['category'].'/'.ucfirst($level2Pro['level2Eng']);?>/<?php echo ucfirst($level2Pro['level2Eng']).'_'.$first; ?>_01.jpg" />
            </span>
        </div>
        <div id="pro_thumb">
        <ul id="pro_ul">
           <?php for($i=1; $i<=$firstNum; $i++){ ?>
            <li><img id="zoom_0<?php echo $i;?>" style="cursor: pointer;" class="thumb" src="<?php echo base_url();?>img/product/category/<?php echo $level2Pro['category'].'/'.ucfirst($level2Pro['level2Eng']);?>/<?php echo ucfirst($level2Pro['level2Eng']).'_'.$first;?>_0<?php echo $i;?>.jpg" onclick="setTimeout(changePic('<?php echo $first; ?>','<?php echo $i;?>') ,5000)" /></li>
           <?php } ?>  
        </ul>
        </div>
      </div>
      <div id="pro_content">
        <div id="line">
          <h3><?php echo 'Vali 無紡蜂巢簾 – '.$level2Pro['level2Name'];?></h3>
          <div class="pro_subheading"><?php echo $level2Pro['title'];?></div>
          <div id="pro_colorselect">
              顏色：
              <select id="select">
                  <?php foreach($level2 as $item): ?>
                  <option value="<?php echo $item['level3Eng'].'-'.$item['picNum'];?>"><?php echo $item['level3Name'].' '.ucfirst($item['level3Eng']);?></option>
                  <?php endforeach ?>        
              </select>
          </div>
          <div id="pro_text">
            <?php echo $level2Pro['intro']; ?>
          </div>
          <div id="pro_color">
            <?php foreach($level2 as $colors): 
              if($colors['index']<10) $colors['index'] = '0'.$colors['index'];
            ?>
              <img class="ori" id="<?php echo $colors['level3Eng'];?>" style="cursor: pointer;" title="<?php echo $colors['level3Name'];?>" alt="<?php echo $colors['level3Name'];?>" onclick="changePicList('<?php echo $colors['level3Eng'];?>','<?php echo $colors['picNum'];?>');" src="<?php echo base_url();?>img/product/category/<?php echo $level2Pro['category'].'/'.ucfirst($level2Pro['level2Eng']).'/';?>color/<?php echo ucfirst($level2Pro['level2Eng']).'_Color_'.$colors['level3Eng'].'_'.$colors['index'];?>.jpg" />
            <?php endforeach ?>
          </div>
          <?php 
          $sampleKey = 'N';
          $measureKey = 'N';
          $setupKey = 'N';
          
          //丈量教學
          if(strlen($level2Pro['haveMeasure'])>1 && ($level2Pro['haveMeasure'])!='N'){
            $link = site_url($level2Pro['haveMeasure']);
            $measureKey = "<a href='".$link."'>丈量教學</a>";
          }else{
            $measureKey = "<span class='no'>丈量教學</span>";
          }
          //安裝說明
          if(strlen($level2Pro['haveSetup'])>1 && ($level2Pro['haveSetup'])!='N'){
            $link = site_url($level2Pro['haveSetup']);
            $setupKey = "<a href='".$link."'>安裝說明</a>";
          }else{
            $setupKey = "<span class='no'>安裝說明</span>";
          }
          //樣本索取
          if($level2Pro['haveSample']!='N'){
            $link = site_url('sample');
            $sampleKey = "<a href='".$link."'>樣本索取</a>";
          }else{
            $sampleKey = "<span class='no'>樣本索取</span>";
          }

          ?>
          <div id="pro_items">
            <ul>
              <li><?php echo $measureKey; ?></li>
              <li><?php echo $setupKey;?></li>
              <li><?php echo $sampleKey;?></li>
              <li><span id="askimg"><img src='<?php echo base_url();?>/img/header/r_email.jpg' /></span><a href="<?php echo site_url('askprice');?>" target="_blank"  id="askprice">客服詢價</a></li>
            </ul>
          </div>
       </div>
      </div>
       </div>

       <div style="display: none;">
        <div id="contactMSBT" style="width:250px;height:80px;overflow:auto;">
          <div id="msbtcontent">
            營業時間：週一至週五 09:00 - 18:00<br/>
            聯絡電話：03-4880250<br/>
            公司傳真：03-4853023<br/>
            客服信箱：service@msbt.com.tw<br/>
          </div>  
        </div>
       </div>

       <input id="level1" type="hidden" value="<?php echo $category;?>"/> 
       <input id="level2" type="hidden" value="<?php echo $level2Pro['level2Eng'];?>"/>       
</div>


<!-- left menu 左側選單效果-->
<script src="<?php echo base_url();?>js/msbtleft.js" type="text/javascript"></script>
<script>
var id = document.getElementById('level1').value;
var level2 = document.getElementById('level2').value;
toggleLeftl2(id, level2);


$(document).ready(function(){
  //預設第一張圖片的反應
  $('#ex1').zoom();
});

// Select change 1 pic and 1 gallery pics
$("#select").change(function(e){
  var current = $("#select").val();
  var color = new Array();
  var color = current.split("-");
  setTimeout(changePicList(color[0],color[1]), 5000 );
});

function changePic(picName,num){
  pic_url = "<?php echo base_url();?>"+'img/product/category/'+"<?php echo $category.'/'.ucfirst($level2Eng).'/'.ucfirst($level2Eng);?>"+'_'+picName+'_0'+num+'.jpg';
  
  $('#def_img').attr('src', pic_url);
  $('#ex1').zoom();
}
// 換一組圖
function changePicList(picName, picNum){
  
  pic_url = "<?php echo base_url();?>"+'img/product/category/'+"<?php echo $category.'/'.ucfirst($level2Eng).'/'.ucfirst($level2Eng);?>"+'_'+picName+'_01.jpg';
  
  $('#def_img').attr('src', pic_url);
  $('#ex1').zoom();

  $("#pro_ul").html('');
 
  for(var i=1; i<=picNum;i++){
    
    var imgSrc = "<?php echo base_url();?>"+'img/product/category/'+"<?php echo $category.'/'.ucfirst($level2Eng).'/'.ucfirst($level2Eng);?>"+'_'+picName+'_0'+i+'.jpg';
    var newLi = $("<li></li>");
    var newImg = $("<img id=zoom_0"+i+" />").attr('class','thumb').attr('src',imgSrc).attr('style','cursor:pointer').attr('onclick',"changePic(\'"+picName+"\',\'"+i+"\')");

       
    newLi.append(newImg);
    $('#pro_ul').append(newLi);
  
  }

  var selectVal = picName+'-'+picNum;
  $("#select").children().each(function(){
    if($(this).val()==selectVal ){
      $(this).attr("selected", true);
    }
  });

  $.each($("#pro_color").children(),function(e){
    if(this.id==picName){
      $(this).attr('class','use');
      
    }else{
      $(this).attr('class','ori');
    }
  });
   

}
</script>
</div>
