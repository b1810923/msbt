<script type="text/javascript" src='<?php echo base_url();?>js/jquery-1.8.3.min.js'></script>
<script type="text/javascript" src='<?php echo base_url();?>js/jquery.zoom-min.js'></script>
<style>
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
.cate{
  padding-top: 20px;
  padding-bottom: 10px;
  color: #595757;

}
.no{
  color: #ccc;
}
</style>
<?php 
$debug = 'false';
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

if($debug == "true"){
  echo '[debug] level2Eng:'.$level2Eng.'<br/>';
  echo '[debug] level2id :'.$level2id.'<br/>';
  echo '[debug] category :'.$category.'<br/>';
  echo '[debug] first    :'.$first.'<br/>';
  echo '[debug] firstNum :'.$firstNum.'<br/>';
  echo '======================<br/>';
}
 
$level3Name = explode('_',$first);

if($debug =="true"){
  echo '[debug] level3Name[0]:'.$level3Name[0].'<br/>';
  echo '[debug] level3Name[1]:'.$level3Name[1].'<br/>';
}
// level2 items name
$this->load->model('product_model');
$level2Pro = $this->product_model->get_level2($level2Eng);
?>
<div id="content">
  <div id="topMenu">
    <?php $this->load->view('menu/product_menu.php'); ?>
  </div>
    <div id="page_pro">
      <div id="pro_img">
        <div id="pro_zoom">
          <span class='zoom' id='ex1'>
            <img id="def_img" class="small" src="<?php echo base_url();?>img/product/category/<?php echo $level2Pro['category'].'/'.ucfirst($level2Pro['level2Eng']).'/'.$level3Name[0];?>/<?php echo $first; ?>_01.jpg" />
            <p>Hover</p>
            </span>
        </div>
        <div id="pro_thumb">
        <ul id="pro_ul">
           <?php for($i=1; $i<=$firstNum; $i++){ ?>
            <li><img id="zoom_0<?php echo $i;?>" style="cursor: pointer;" class="thumb" src="<?php echo base_url();?>img/product/category/<?php echo $level2Pro['category'].'/'.ucfirst($level2Pro['level2Eng']).'/'.$level3Name[0];?>/<?php echo $first;?>_0<?php echo $i;?>.jpg" onclick="setTimeout(changePic('<?php echo $first; ?>','<?php echo $i;?>') ,5000)" /></li>
           <?php } ?>  
        </ul>
        </div>
      </div>
      <div id="pro_content">
        <div id="line">
          <h3><?php echo ucfirst($level2Pro['level2Eng']).' '.$level2Pro['level2Name'];?></h3>
          <div id="pro_colorselect">
              顏色：
              <select id="select">
                  <?php foreach($level2 as $item): ?>
                  <option value="<?php echo $item['level3Eng'].'-'.$item['picNum'];?>"><?php echo $item['level3Name'];?></option>
                  <?php endforeach ?>        
              </select>
          </div>
          <div id="pro_text">
            <?php echo $level2Pro['intro']; ?>
          </div>
          <div id='pro_color'>
          <?php foreach($level2 as $colors): 
              $level3 = explode('_',$colors['level3Eng']);
              //echo $level3[0].'++'.$level3[1].'<br/>';
              $colors['index'] = substr($colors['index'], -2); //取出db的index後兩碼
              if($colors['index']=='01'){
                //$indexNum = substr($colors['index'],0);
                $chinese = explode(' ',$colors['level3Name']);
              
                echo "<div class='cate'>".$chinese[0]."</div>";
                
                
              } 
            ?>
          
            
              <img class="ori" id="<?php echo $colors['level3Eng'];?>" style="cursor: pointer;" title="<?php echo $colors['level3Name'];?>" alt="<?php echo $colors['level3Name'];?>" onclick="changePicList('<?php echo $colors['level3Eng'];?>','<?php echo $colors['picNum'];?>');" src="<?php echo base_url();?>img/product/category/<?php echo $level2Pro['category'].'/'.ucfirst($level2Pro['level2Eng']).'/'.$level3[0].'/';?>color/<?php echo $level3[0].'_Color_'.$level3[1].'_'.$colors['index'];?>.jpg" />
            <?php 


            endforeach ?>
          </div>
          <?php 
          $sampleKey = 'N';
          $measureKey = 'N';
          $setupKey = 'N';
          
          //丈量教學
          if(strlen($level2Pro['haveMeasure'])>1 && ($level2Pro['haveMeasure'])!='N'){
            $link = "http://localhost/~susan/msbt_new/index.php/".$level2Pro['haveMeasure'];
            $measureKey = "<a href='".$link."'>丈量教學</a>";
          }else{
            $measureKey = "<span class='no'>丈量教學</span>";
          }
          //安裝說明
          if(strlen($level2Pro['haveSetup'])>1 && ($level2Pro['haveSetup'])!='N'){
            $link = "http://localhost/~susan/msbt_new/index.php/".$level2Pro['haveSetup'];
            $setupKey = "<a href='".$link."'>安裝說明</a>";
          }else{
            $setupKey = "<span class='no'>安裝說明</span>";
          }
          //樣本索取
          if($level2Pro['haveSample']!='N'){
            $sampleKey = "<a href='http://localhost/~susan/msbt_new/index.php/sample'>樣本索取</a>";
          }else{
            $sampleKey = "<span class='no'>樣本索取</span>";
          }

          ?>
          <div id="pro_items">
            <ul>
              <li><?php echo $measureKey; ?></li>
              <li><?php echo $setupKey;?></li>
              <li><?php echo $sampleKey;?></li>
              <li><a href="#" id="askprice">線上詢價</a></li>
            </ul>
          </div>
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
toggleMenu(id,level2);


$(document).ready(function(){
  //預設第一張圖片的反應
  $('#ex1').zoom();
});

// Select change 1 pic and 1 gallery pics
$("#select").change(function(e){
  var current = $("#select").val();
  var color = new Array();
  var color = current.split("-");
  //color[0] is Name , color[1] is ItemsPicNumbers
  setTimeout(changePicList(color[0],color[1]), 5000 );
});

function changePic(picName,num){
  var level3 = new Array();
  var level3 = picName.split("_");

  <?php if($debug=="true"){ ?>
  alert('[debug] picName:'+picName);
  alert('[debug] num    :'+num);
  <?php } ?>
  
  var level3Name = level3[0];
  var level3Num = level3[1];
  // level3[0] is Bamboo, level3[1] is 1200
  pic_url = "<?php echo base_url();?>"+'img/product/category/';
  pic_url +="<?php echo $category.'/';?>";
  pic_url +="<?php echo ucfirst($level2Eng).'/';?>";
  pic_url += level3Name+'/'+picName+'_0'+num+'.jpg';
  
  $('#def_img').attr('src', pic_url);
  $('#ex1').zoom();
}
// 換一組圖
function changePicList(picName, picNum){
  var level3 = new Array();
  var level3 = picName.split("_");
  // level3[0] is Bamboo, level3[1] is 1200
  pic_url = "<?php echo base_url();?>"+'img/product/category/'+"<?php echo $category.'/'.ucfirst($level2Eng).'/';?>";
  pic_url += level3[0]+'/'+picName+'_01.jpg';
  
  $('#def_img').attr('src', pic_url);
  $('#ex1').zoom();

  $("#pro_ul").html('');
 
  for(var i=1; i<=picNum;i++){
    
    var imgSrc = "<?php echo base_url();?>"+'img/product/category/'+"<?php echo $category.'/'.ucfirst($level2Eng).'/';?>";
    imgSrc +=level3[0]+'/'+picName+'_0'+i+'.jpg';
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
      
    }else if($(this).attr('class')=='cate'){
      $(this).attr('class','cate');
    }else{
      $(this).attr('class','ori');
    }
  });
   

}
</script>
</div>
