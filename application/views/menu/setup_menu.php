<script src="<?php echo base_url();?>js/jquery.1.8.3.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/jquery.cookie.js" type="text/javascript"></script>

<script>
//if save index = 0,1,5

  function licolor(){

    $('#main li').each(function(){
      $(this).removeClass('red').addClass('ori');
      //$not(this).removeClass('ori').addClass('ori');
  
    });
    
  }
  function changeColor(){
    //hideMenu('menus');
    //$(this).css('class','red');
    alert('changeColor');
  $not(this).removeClass('red').addClass('ori');
  $(this).removeClass('ori').addClass('red');
 
  }
  function toggleLeft(id){
   // hideMenu('menus');
   $('#'+id).removeClass('ori').addClass('red');
   $('#'+id).slideDown();
  }
</script>
<style>
#setup{
  color: #a82124;
}
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
  font-size: 15px;
  margin: 5px 0;
  line-height: 1.3em; /* 文字行距 */
  letter-spacing: 0.15em;  /*文字間距 */
  /*word-spacing: 0.1em; /* */
  /*margin: 0.3em 0; /* p元素之間有1.12em的margin */
}
#menu ul li ul li{
  font-size: 13px;
  margin: 5px 0;
  line-height: 1.3em; /* 文字行距 */
  letter-spacing: 0.15em;  /*文字間距 */
  /*word-spacing: 0.1em; /* */
  /*margin: 0.2em 0; /* p元素之間有1.12em的margin */
  cursor: pointer;
  margin-left: 30px;
  
}
</style>
<div id="menu">
        <ul id="menus" class="navigation">
          <!-- diy start -->
          <li class="ori"><a id="setup_diy" href="<?php echo site_url('setup/setup_diy');?>">DIY vs. 專人服務</a></li>
          
          <!-- diy end -->
          <!-- teach start -->
          <li class="ori"><a id="setup_teach" style="cursor:pointer" href="<?php echo site_url('setup/teach_roller');?>">丈量教學</a>
         
          <ul id="setup_teachm">
            <li class="ori"><a id="teach_venetian" href="<?php echo site_url('setup/teach_venetian');?>">百葉簾 / 蜂巢簾</a></li>
            <li class="ori"><a id="teach_roller" href="<?php echo site_url('setup/teach_roller');?>">捲簾 / 斑馬簾</a></li>
            <li class="ori"><a id="teach_curtain" href="<?php echo site_url('setup/teach_curtain');?>">布簾 / 紗簾</a></li>
          </ul>
          </li>
          <!-- teach end -->
          <!-- explanation start -->
          <li><a id="setup_explanation" style="cursor:pointer" href="<?php echo site_url('setup/explain_roller');?>">安裝說明</a>
         
          <ul id="setup_explan">
            <li class="ori"><a id="explain_misua" href="<?php echo site_url('setup/explain_misua');?>">線簾</a></li>
            <li class="ori"><a id="explain_bienzen" href="<?php echo site_url('setup/explain_bienzen');?>">竹編木百葉簾</a></li>
            <li class="ori"><a id="explain_pimu" href="<?php echo site_url('setup/explain_pimu');?>">實木百葉簾</a></li>
            <li class="ori"><a id="explain_bairay" href="<?php echo site_url('setup/explain_bairay');?>">無拉繩鋁百葉簾</a></li>
            <li class="ori"><a id="explain_fenla" href="<?php echo site_url('setup/explain_fenla');?>">布織百葉簾</a></li>
            <li class="ori"><a id="explain_roller" href="<?php echo site_url('setup/explain_roller');?>">捲簾</a></li>
            <li class="ori"><a id="explain_doubleR" href="<?php echo site_url('setup/explain_doubleR');?>">簡約型斑馬簾</a></li>
            <li class="ori"><a id="explain_double" href="<?php echo site_url('setup/explain_double');?>">精緻型斑馬簾</a></li>
            <li class="ori"><a id="explain_vali" href="<?php echo site_url('setup/explain_vali');?>">無紡蜂巢簾</a></li>
            <li class="ori"><a id="explain_wagi" href="<?php echo site_url('setup/explain_wagi');?>">布織蜂巢簾</a></li>
            <li class="ori"><a id="explain_hanas" href="<?php echo site_url('setup/explain_hanas');?>">柔紗直立簾</a></li>
            <li class="ori"><a id="explain_rakusho" href="<?php echo site_url('setup/explain_rakusho');?>">便利簾</a></li>
            <li class="ori"><a id="explain_curtain" href="<?php echo site_url('setup/explain_curtain');?>">布簾 / 紗簾</a></li>
          </ul>
          </li>
          <!-- explanation end -->
          <!-- case start -->
          <li class="ori"><a id="setup_case" href="http://msbtblog.wordpress.com/category/%E9%96%8B%E7%AE%B1%E6%8E%A8%E8%96%A6%EF%BD%9Ccase-report/" target="_blank">案例實景</a></li>
          <!-- case end -->
        </ul>
    </div>
<!-- left menu 左側選單效果-->
<script src="<?php echo base_url();?>js/msbtleft.js" type="text/javascript"></script>


<!-- set setup menu toggle style start -->
<?php
$debug="false";
if($debug=="true"){
  echo "[debug]setup_item:".$setup_item.'<br/>';
  echo "[debug]teach_item:".$teach_item.'<br/>';
}
if(isset($setup_item) && ($setup_item=='teach')){
?>

<style>
#setup_teach{
  color: #a82124;
}
</style>
<?php
}else if(isset($setup_item) && ($setup_item=='diy')){
?>

<style>
#setup_diy{
  color: #a82124;
}
</style>
<?php  
}else if(isset($setup_item) && ($setup_item=='explain')){
?>
<style>
#setup_explanation{
  color: #a82124;
}
</style>
<?php
}
?>
<!-- set setup menu toggle style end -->
