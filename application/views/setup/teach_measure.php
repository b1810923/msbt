<?php 
$menu['teach_item'] = $teach_item;
$menu['setup_item'] = $setup_item;

$movie1 ="";
$movie2 ="";

  $inner1 = '';
  $outer1 = '';
if($teach_item=='roller'){
  $movie1 = 'http://www.youtube.com/v/kpQsdjt5TLw?fs=1&amp;hl=zh_TW&amp;rel=0&amp;color1=0x990033&amp;color2=0x990033';
  $movie2 = 'http://www.youtube.com/v/o0aWdZy5JYU?fs=1&amp;hl=zh_TW&amp;rel=0&amp;color1=0x990033&amp;color2=0x990033';
}else if($teach_item=='venetian'){
  $movie1 = 'http://www.youtube.com/v/mxCUoN_NmnI?fs=1&amp;hl=zh_TW&amp;rel=0&amp;color1=0x990033&amp;color2=0x990033';
  $movie2 = 'http://www.youtube.com/v/iV_wROFHCFs?fs=1&amp;hl=zh_TW&amp;rel=0&amp;color1=0x990033&amp;color2=0x990033';


}

?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/measure.css" />

<div id="content">
   <div id="setupMenu">
    <?php $this->load->view('menu/setup_menu.php', $menu);?>
   </div>
   <div id="page_setup">
      <div><img src="<?php echo base_url();?>img/setup/title_<?php echo $teach_item;?>.jpg" /></div>
      <div class="stepcontainer"><span class="highlight">STEP 1：</span>先決定窗簾要裝在牆面窗框內或是窗框外 </div>
      <div class="stepcontainer"><span class="highlight">STEP 2：</span>請依以下說明，或觀看影片進行丈量</div>

      <div id="measurecontent">
         
         <div id="leftinner">
          <div class="measureimg"><img src="<?php echo base_url();?>img/measure/inside_frame.png" height="112"  alt="框外" /></div>
           <span class="innertitle">框內</span>
           <ul class="measure_description_li">
            <li>◆指安裝在牆面窗框內側</li>
           <?php if($teach_item=='curtain'){  ?>
            <li>◆常使用在凸窗、有窗檯的狀況</li>
            <li>◆窗框深度達15cm，即可完全嵌<p class="p_txet_indent">入牆面</p></li>
           <?php }else{ ?>
            <li>◆外觀較為簡潔平整 </li>
            <li>◆窗框深度達7cm，即可完全嵌入<p class="p_txet_indent">牆面</p></li>
            
           <?php } ?>
           </ul>
           <p>&nbsp;</p>
         </div>
         <div id="rightinner">
          <div class="measureimg"><img src="<?php echo base_url();?>img/measure/outside_frame.png" height="112"  alt="框外" /></div>
           <span class="innertitle">框外</span>
           <ul class="measure_description_li">
             <li>◆指安裝在牆面窗框外的平面或天<p class="p_txet_indent">花板</p> </li>
             <?php if($teach_item=='curtain'){  ?>
             <li>◆可以完全遮蔽窗戶，不漏光 </li>
             <li>◆為較慣用的安裝方式。簾面收至<p class="p_txet_indent">左右時，收褶厚度將不遮蔽窗戶</p><p class="p_txet_indent">採光範圍</p></li>
             <?php }else{ ?>
             <li>◆可以完全遮蔽窗戶，不露框 </li>
             <li>◆可用於隱藏窗戶大小、遮蔽不常<p class="p_txet_indent">用之門窗，當做室內裝飾</p></li>
             <?php } ?>
           </ul>
           <p>&nbsp;</p>
         </div> 
      </div>

  <div id="measurecontent">
    <!-- leftinner start -->
   <div id="leftinner">
    <?php if($teach_item=='curtain'){ ?>
      <span class="measureimg"><img  src="<?php echo base_url();?>img/measure/curtain/measure_inside_red_upside.png" alt="框內" /></span>
    <?php }else{ ?>
      <span class="measureimg"><img  src="<?php echo base_url();?>img/measure/measure_inside.png" alt="框內" /></span>
    <?php } ?>
       <div class="innertitle">框內丈量</div>
       <br/>
       <div class="innercontent">
          <div class="highlight">STEP  1：</div>    
    <?php if($teach_item=='curtain'){ 
    ?>
          <p>丈量框內寬，請量<span class="text_strong">預定安裝窗簾桿</span>位置之寬距</p>
    <?php
           }else{  ?>
          <p>丈量框內寬，請量上、中、下位置。記錄三者最小尺寸為<span class="text_strong">窗簾寬度</span></p>
    <?php } ?>
       </div>
       <div class="innercontent">
          <div class="highlight">STEP  2：</div>
    <?php if($teach_item!='curtain'){ ?>
          <p>丈量框內高，請量左、中、右三個位置。記錄三者最大尺寸為<span class="text_strong">窗簾高度</span></p>
    <?php }else{ ?>
           <p>丈量框內高，請量左、中、右三個位置。記錄三者最大尺寸為<span class="text_strong">窗簾總高度</span></p>
    <?php } ?>
       </div>
     
       <div class="innercontent">
        <?php if($teach_item!='curtain'){ ?>
          <div class="highlight">※ 以0.5cm為最小單位</div><br/><br/>
        <?php } ?>
           <?php
              if($teach_item=='roller'){
          ?><div class="highlight">注意事項：</div> 
               <ol class="notice">
                 <li>◆寬度是指從托架外側至另一端托架外側<br />
                    （窗簾含左右托架零件的最大寬度）<br /></li>
                 <li>◆布料寬度會因左右托架零件而比窗簾總寬度少<br/><p class="p_txet_indent">1.3~2.5cm（捲簾、簡約型斑馬簾：珠鍊控制端</p><p class="p_txet_indent">1.5cm、尾端1cm）</p>（精緻型斑馬簾：珠鍊控制端1cm、尾端0.3cm）
                 </li>         
                 <li>◆若需完全遮蔽，建議挑選框外安裝</li>
               </ol>
           <?php
                }else if($teach_item=='curtain'){

            ?>
            <br/><br/>
            <div class="highlight">注意事項：</div> 
              <ol class="notice">
            
             <li>◆若使用Buloo壁托安裝窗簾桿，因簾面可收至最末
              <p class="p_txet_indent">端，將能達到最大遮蔽效果</p></li>
             <li>◆簾面收闔至左右時，收褶厚度將遮蔽部分窗戶採光
              <p class="p_txet_indent">範圍；若需展現完整窗戶，建議挑選框外安裝</p>
             </li>         
             <li>◆所需布面攤平寬度尺寸必須比框內寬距多50%以
              <p class="p_txet_indent">上，以達適當的收褶曲線
             </li>
           </ol>
                 
            <?php
                }else{
                  echo '<p>&nbsp;</p>';
                }        
                 ?>
       </div>
   </div>
   <!-- leftinner end -->
       <!-- rightinner start -->
       <div id="rightinner" >
              <div class="measureimg"><img src="<?php echo base_url();?>img/measure/measure_outside.png" height="112"  alt="框內" /></div>
              <div class="innertitle">框外丈量</div><br/>

              <div class="innercontent">
                 <div class="highlight">STEP 1：</div> 
               
                 <p>丈量窗框寬</p>
                 <p>+ 希望布面額外遮蓋的寬度(建議增</p>
                 <?php if($teach_item=="curtain"){ ?>
                    <p class="p_txet_indent">加20~30cm，左右各10~15cm)</p>     
                 <?php
                       }else{
                  ?>
                    <p class="p_txet_indent">10~15cm，一邊5~7.5cm)</p> 
                  <?php
                       }
                        if($teach_item=='roller'){
                  ?>
                  <p>+ 捲動零件及托架尺寸 3cm</p>
                  <?php
                        }
                        if($teach_item=='curtain'){
                 ?>
                      <p> ＝ <span class="text_strong">所需窗簾桿長度（未包含飾頭）</span></p>
                 <?php }else{ ?>
                  <p> =  <span class="text_strong">所需窗簾寬度</span></p>
                 <?php } ?>
              </div>

              <div class="innercontent">
            
                  <div class="highlight">STEP 2：</div>
        <?php if($teach_item!='curtain'){ ?>

                  <p>丈量窗框高</p>
                  <p>+  希望布面額外遮蓋的高度</p>
                  <p> = <span class="text_strong">所需窗簾高度</span> </p>
        <?php }else{ ?>
                  <p>窗簾桿長 x 1.5倍至2倍</p>
                  <p> ＝ 所需布面<span class="text_strong">攤平總寬度</span></p>
                  <br/>
                  <div class="highlight">* 布面攤平寬度尺寸比窗簾桿更寬，可達適當的收褶
                    <p class="p_text_indent">曲線</p></div>

                  <div class="highlight"><p>* 若需採用布面打褶、縫合鉤針的傳統型式，請洽客</p>
                    <p class="p_text_indent">服人員了解相關訂製細節</p></div>
                  <br/>
                  <div class="highlight">STEP 3：</div>
                  <p>丈量窗框高</p>
                  <p>＋額外遮蓋的高度（建議增加20~30cm，上下各</p>
                  <p>10cm~15cm）</p>
                  <p>= 所需<span class="text_strong">布面高度</span></p>
        <?php } ?>
              </div>

               <p>&nbsp;</p>
               <p>&nbsp;</p>
               <p>&nbsp;</p>
                 
        <?php
              if($teach_item=='roller'){
                  ?>

               <p>&nbsp;</p>
               <p>&nbsp;</p>
               <p>&nbsp;</p>
               <p>&nbsp;</p>
               <p>&nbsp;</p>
               <p>&nbsp;</p>
               
               <p>&nbsp;</p>
               <p>&nbsp;</p>
               <p>&nbsp;</p>
        <?php
               }else{
                ?>

                <?php
               }
                 ?>

       </div>
       <!-- rightinner end -->
        <br>
        <!-- movie start-->
        <div id="measurecontent" class="movie">

       <div style="clear:both;"></div> 
           <div id="leftmovieinner">
            <object width="350" height="287"><param name="movie" value="<?php echo $movie1;?>"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="<?php echo $movie1;?>" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="350" height="287"></embed></object>
           </div>
           <div id="rightmovieinner">
            <object width="350" height="287"><param name="movie" value="<?php echo $movie2;?>"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="<?php echo $movie2;?>" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="350" height="287"></embed></object>
           </div>
        </div>
        <!-- movie end -->
  </div>
      <br/><br/><br/>
   </div><!-- page_setup end -->
</div><!-- content -->
<script src="<?php echo base_url();?>js/msbtleft.js" type="text/javascript"></script>
<!-- set teach menu toggle style start-->
<?php
if(isset($teach_item) && ($teach_item=='roller')){
?>
  <script>toggleLeft('setup_teachm');</script>
  <style>
  #setup_teach,#teach_roller{
    color: #a82124;
  }
  </style>
<?php
}else if(isset($teach_item) && ($teach_item=='venetian')){
?>
  <script>toggleLeft('setup_teachm');</script>
  <style>
  #setup_teach,#teach_venetian{
    color: #a82124;
  }
  </style>
<?php
}else if(isset($teach_item) && ($teach_item=='curtain')){
?>
  <script>toggleLeft('setup_teachm');</script>
  <style>
  #setup_teach,#teach_curtain{
    color: #a82124;
  }
  </style>
<?php
}
?>
<!-- set teach menu toggle style end-->