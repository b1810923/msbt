<script src="<?php echo base_url();?>js/jquery.1.8.3.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/jquery.cookie.js" type="text/javascript"></script>
<?php
$debug = 'flase'; //check model level1 data
if($debug=='true'){

foreach ($level1 as $key => $value) {
  echo $key.' '.$value['level1Name'].' '.$value['level2Name'].'<br/>';
}

}

?>
<script>
//if save index = 0,1,5
  function licolor(){
    $('li').each(function(){
      $(this).removeClass('red').addClass('ori');
    });
  }
  function changeColor(){
    hideMenu('menus');
    $(this).css('class','red');
  }
  function toggleLeft(id){
   // hideMenu('menus');

   $('#'+id).children('ul').slideDown();
   $('#'+id).children().css('color','#a82124');
   if(id=='string'){
    $('#misua').css('color','#a82124');
   
   }else if(id=='venetian'){
    $('#bienzen').css('color','#a82124');
   
   }else if(id=='roller'){
    $('#tiken').css('color','#a82124');
   
   }else if(id=='double'){
    $('#sima').css('color','#a82124');
   
   }else if(id=='honeycomb'){
    $('#vali').css('color','#a82124');
   
   }else if(id=='curtain'){
    $('#dazo').css('color','#a82124');
   
   }
  }
// left menu - product level2 
function toggleLeftl2(id , level2){
   // hideMenu('menus');
   $('#'+id).children('ul').slideDown();
   $('#'+id).children().css('color','#a82124');
   $('#'+level2).children().css('color','#a82124');
  
}
</script>
<style>
.red{
  color: #a82124;
}
.ori{
  color: #595757;
}
#menu{
  width: 100%;
}

#menu ul li{
  font-size: 11px;
  margin: 5px 0;
  line-height: 1.3em; /* 文字行距 */
  letter-spacing: 0.15em;  /*文字間距 */
  /*word-spacing: 0.1em; /* */
  margin: 1.1em 0; /* p元素之間有1.12em的margin */
}
#menu ul li ul li{
  font-size: 9px;
  margin: 5px 0;
  line-height: 1.3em; /* 文字行距 */
  letter-spacing: 0.15em;  /*文字間距 */
  /*word-spacing: 0.1em; /* */
  margin: 1.1em 0; /* p元素之間有1.12em的margin */
  cursor: pointer;
  margin-left: 20px;
  
}

#product{
  color:#a82124;
}
#lipimu a{
  color:#595757;
}
#livali a{
  color:#595757;
}
#pimu,#vali{
  margin-left: 20px;
}
</style>

    <div id="menu">
        <ul id='menus'>
          <li id="string" class="ori"><span id="string-a" onclick="change_item('misua');"><h3>線簾</h3></span>
            <ul id="string-b">
              <li class="ori" id="misua"><span id="misua"><h3>Misua 線簾</h3></span></li>
            </ul>
          </li> 
          <!-- string end --> 
          <li id="venetian" class="ori"><span id="venetian-a" onclick="change_item('bienzen');"><h3>百葉簾</h3></span>
            <ul id="venetian-b">
              <li id="bienzen"class="ori" ><span onclick="change_item('bienzen');" ><h3>Bienzen 竹編木百葉簾</h3></span></li>
              <li id="pimu" class="ori"><span onclick="change_item('pimu');"><h3>Pimu 實木百葉簾</h3></span></li>   
              <li id="bairay" class="ori"><span onclick="change_item('bairay');"><h3>Bairay 無拉繩鋁百葉簾</h3></span></li>
              <li id="fenla" class="ori"><span onclick="change_item('fenla');"><h3>Fenla 布織百葉簾</h3></span></li>
            </ul>
          </li>  
          <!-- venetian end -->
          <li id="roller" class="ori"><span id="roller" onclick="change_item('tiken');"><h3>捲簾</h3></span>
            <ul id="roller-b">
              <li id="tiken" class="ori"><span onclick="change_item('tiken');"><h3>Tiken 原色捲簾</h3></span></li>
              <li id="taoza" class="ori"><span onclick="change_item('taoza');"><h3>Taoza 紙編捲簾</h3></span></li>
              <li id="zaiki" class="ori"><span onclick="change_item('zaiki');"><h3>Zaiki 設計捲簾</h3></span></li>
              <li id="zicy" class="ori"><span onclick="change_item('zicy');"><h3>Zicy 印花捲簾</h3></span></li>
              <li id="ritao" class="ori"><span onclick="change_item('ritao');"><h3>Ritao 透光捲簾</h3></span></li>
              <li id="aibo" class="ori"><span onclick="change_item('aibo');"><h3>Aibo 陽光面料捲簾</h3></span></li>
              <li id="veyem" class="ori"><span onclick="change_item('veyem');"><h3>Veyem 植絨捲簾</h3></span></li>
              <li id="ladiam" class="ori"><span onclick="change_item('ladiam');"><h3>Ladiam 麂皮絨捲簾</h3></span></li>
              <li id="emmi" class="ori"><span onclick="change_item('emmi');"><h3>Emmi 遮光捲簾</h3></span></li>
              <li id="sakin" class="ori"><span onclick="change_item('sakin');"><h3>Sakin 平紋遮光捲簾</h3></span></li>
            </ul>
          </li> 
          <!-- roller end -->
          <li id="double" class="ori"><a id="double-a" onclick="change_item('sima');" href="<?php echo site_url('product/double');?>"><h3>斑馬簾</h3></a>
            <ul id="double-b">
              <li id="sima"  class="ori"><a href="<?php echo site_url('product/sima');?>"><h3>Sima 斑馬簾</h3></a></li>
              <li id="seda"  class="ori"><a href="<?php echo site_url('product/seda');?>"><h3>Seda 細織斑馬簾</h3></a></li>
              <li id="nonya"  class="ori"><a href="<?php echo site_url('product/nonya');?>"><h3>Nonya 條紋斑馬簾</h3></a></li>
              <li id="yoka"  class="ori"><a href="<?php echo site_url('product/yoka');?>"><h3>Yoka 遮光斑馬簾</h3></a></li>
            </ul>
          </li> 
          <!-- end -->
          <li id="honeycomb" class="ori"><a id="honeycomb-a" onclick="change_item('vali');" href="<?php echo site_url('product/honeycomb');?>"><h3>蜂巢簾</h3></a>
            <ul id="honeycomb-b">
              <li id="vali" class="ori"><a href="<?php echo site_url('product/honeycomb');?>"><h3>Vali 無紡蜂巢簾</h3></a></li>
              <li id="wagi" class="ori"><a href="<?php echo site_url('product/wagi');?>"><h3>Wagi 布織蜂巢簾</h3></a></li>
            </ul>
          </li> 
          <!-- honeycomb end -->
          <li id="curtain" class="ori"><a id="curtain-a" onclick="change_item('dazo');" href="<?php echo site_url('product/curtain');?>"><h3>布簾 / 紗簾</h3></a>
            <ul id="curtain-b">
              <li id="dazo" class="ori"><a href="<?php echo site_url('product/dazo');?>"><h3>Dazo 設計紗簾</h3></a></li>
              <li id="donzu" class="ori"><a href="<?php echo site_url('product/donzu');?>"><h3>Donzu 緹花布簾</h3></a></li>
              <li id="haju" class="ori"><a href="<?php echo site_url('product/haju');?>"><h3>Haju 裝飾布簾</h3></a></li>
              <li id="amra" class="ori"><a href="<?php echo site_url('product/amra');?>"><h3>Amra 遮光布簾</h3></a></li>
            </ul>
          </li>
          <!-- curtain end -->
          
      </ul>
    </div>

    <!-- left menu 左側選單效果-->
<script src="<?php echo base_url();?>js/msbtleft.js" type="text/javascript"></script>
