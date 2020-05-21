<script src="<?php echo base_url();?>js/jquery.1.8.3.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/jquery.cookie.js" type="text/javascript"></script>
<?php
$debug = 'false'; //check model level1 data
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
   if(id=='venetian'){
    $('#pimu').slideDown();
    $('#pimu').css('color','#a82124');
   }
   if(id=='honeycomb'){
    $('#vali').slideDown();
    $('#vali').css('color','#a82124');
   }
  }
// left menu - product level2 
function toggleLeftl2(id , level2){
   // hideMenu('menus');
   $('#'+id).children('ul').slideDown();
   $('#'+id).children().css('color','#a82124');
   $('#'+level2).children().css('color','#a82124');
   if(id=='venetian'){
    $('#pimu').slideDown();
    $('#pimu').css('color','#a82124');
   }
   if(id=='honeycomb'){
    $('#vali').slideDown();
    $('#vali').css('color','#a82124');
   }
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
#pimu{
  margin-left: 40px;
}
#vali{
  margin-left: 34px;
}
</style>

    <div id="menu">
        <ul id='menus'>
          <li id="string" class="ori"><a id="string-a" href="<?php echo site_url('product/string');?>">線簾</a>
            <ul id="string-b">
              <li class="ori" id="misua"><a href="<?php echo site_url('product/misua');?>">Misua 線簾</a></li>
              <li class="ori" id="wolan"><a href="<?php echo site_url('product/wolan');?>">Wolan 掛飾</a></li>
            </ul>
          </li> 
          <!-- string end --> 
          <li id="venetian" class="ori"><a id="venetian-a" href="<?php echo site_url('product/venetian');?>">百葉簾</a>
            <ul id="venetian-b">
              <li id="bienzen"class="ori" ><a href="<?php echo site_url('product/bienzen');?>">Bienzen 竹編木百葉簾</a></li>
              <li id="lipimu" class="ori"><a id="venetian-a" href="<?php echo site_url('product/pimu');?>">Pimu 實木百葉簾</a></li>   
                <ul id="pimu">
                  <li id="wooden" class="ori"><a href="<?php echo site_url('product/basewood');?>">椴木著色</a></li>
                  <li id="highGlossed" class="ori"><a href="<?php echo site_url('product/highglossed');?>">鋼琴烤漆</a></li>
                  <li id="fauxWood" class="ori"><a href="<?php echo site_url('product/fauxwood');?>">PVC仿木</a></li>
                  <li id="westernCedar" class="ori"><a href="<?php echo site_url('product/westerncedar');?>">紅雪松</a></li>
                  <li id="bamboo" class="ori"><a href="<?php echo site_url('product/bamboo');?>">硬竹著色</a></li>
                </ul>
               
              <li id="bairay" class="ori"><a href="<?php echo site_url('product/bairay');?>">Bairay 無拉繩鋁百葉簾</a></li>
              <li id="fenla" class="ori"><a href="<?php echo site_url('product/fenla');?>">Fenla 布織百葉簾</a></li>
            </ul>
          </li>  
          <!-- venetian end -->
          <li id="roller" class="ori"><a id="roller-a" href="<?php echo site_url('product/roller');?>">捲簾</a>
            <ul id="roller-b">
              <li id="tiken" class="ori"><a href="<?php echo site_url('product/tiken');?>">Tiken 原色捲簾</a></li>
              <li id="taoza" class="ori"><a href="<?php echo site_url('product/taoza');?>">Taoza 紙編捲簾</a></li>
              <li id="zaiki" class="ori"><a href="<?php echo site_url('product/zaiki');?>">Zaiki 設計捲簾</a></li>
              <li id="zicy" class="ori"><a href="<?php echo site_url('product/zicy');?>">Zicy 印花捲簾</a></li>
              <li id="ritao" class="ori"><a href="<?php echo site_url('product/ritao');?>">Ritao 透光捲簾</a></li>
              <li id="aibo" class="ori"><a href="<?php echo site_url('product/aibo');?>">Aibo 陽光面料捲簾</a></li>
              <li id="veyem" class="ori"><a href="<?php echo site_url('product/veyem');?>">Veyem 植絨捲簾</a></li>
              <li id="ladiam" class="ori"><a href="<?php echo site_url('product/ladiam');?>">Ladiam 麂皮絨捲簾</a></li>
              <li id="emmi" class="ori"><a href="<?php echo site_url('product/emmi');?>">Emmi 遮光捲簾</a></li>
              <li id="sakin" class="ori"><a href="<?php echo site_url('product/sakin');?>">Sakin 平紋遮光捲簾</a></li>
            </ul>
          </li> 
          <!-- roller end -->
          <li id="double" class="ori"><a id="double-a" href="<?php echo site_url('product/double');?>">斑馬簾</a>
            <ul id="double-b">
              <li id="sima"  class="ori"><a href="<?php echo site_url('product/sima');?>">Sima 斑馬簾</a></li>
              <li id="simaXL"  class="ori"><a href="<?php echo site_url('product/simaXL');?>">Sima-XL 寬版斑馬簾</a></li>
              <li id="seda"  class="ori"><a href="<?php echo site_url('product/seda');?>">Seda 細織斑馬簾</a></li>
              <li id="nonya"  class="ori"><a href="<?php echo site_url('product/nonya');?>">Nonya 條紋斑馬簾</a></li>
              <li id="yoka"  class="ori"><a href="<?php echo site_url('product/yoka');?>">Yoka 遮光斑馬簾</a></li>
            
            </ul>
          </li> 
          <!-- end -->
          <li id="honeycomb" class="ori"><a id="honeycomb-a" href="<?php echo site_url('product/honeycomb');?>">蜂巢簾</a>
            <ul id="honeycomb-b">
              <li id="livali" class="ori"><a href="<?php echo site_url('product/valiSingle');?>">Vali 無紡蜂巢簾</a></li>
                <ul id="vali">
                  <li id="valiSingle" class="ori"><a href="<?php echo site_url('product/valiSingle');?>">單巢</a></li>
                  <li id="valiDouble" class="ori"><a href="<?php echo site_url('product/valiDouble');?>">雙巢</a></li>
                  <li id="valiBlackout" class="ori"><a href="<?php echo site_url('product/valiBlackout');?>">單巢遮光</a></li>
                </ul>
              <li id="wagi" class="ori"><a href="<?php echo site_url('product/wagi');?>">Wagi 布織蜂巢簾</a></li>
            </ul>
          </li> 
          <!-- honeycomb end -->
           <li id="vertical" class="ori"><a id="vertical-a" href="<?php echo site_url('product/vertical');?>">直立簾</a>
            <ul id="vertical-b">
              <li id="hanas" class="ori"><a href="<?php echo site_url('product/hanas');?>">Hanas 柔紗直立簾</a></li>
            </ul>
          </li>
          <!-- vertical end -->
          <li id="tempshade" class="ori"><a id="tempshade-a" href="<?php echo site_url('product/tempshade');?>">便利簾</a>
            <ul id="tempshade-b">
              <li id="rakusho" class="ori"><a href="<?php echo site_url('product/rakusho');?>">Rakusho 便利簾</a></li>
            </ul>
          </li> 
          <!-- tempshade end -->
           <li id="cushion" class="ori"><a id="cushion-a" href="<?php echo site_url('product/cushion');?>">抱枕</a>
            <ul id="cushion-b">
              <li id="basa" class="ori"><a href="<?php echo site_url('product/basa');?>">Basa 原色抱枕</a></li>
              <li id="canli" class="ori"><a href="<?php echo site_url('product/canli');?>">Canli 彩印帆布抱枕</a></li>
              <li id="phula" class="ori"><a href="<?php echo site_url('product/phula');?>">Phula 雪尼爾緹花抱枕</a></li>
              <li id="yito" class="ori"><a href="<?php echo site_url('product/yito');?>">Yito 繡花抱枕</a></li>
              <li id="dari" class="ori"><a href="<?php echo site_url('product/dari');?>">Dari 點線抱枕</a></li>
              <li id="naka" class="ori"><a href="<?php echo site_url('product/naka');?>">Naka 自然風抱枕</a></li>
              <li id="sardi" class="ori"><a href="<?php echo site_url('product/sardi');?>">Sardi 短毛抱枕</a></li>
              <li id="patti" class="ori"><a href="<?php echo site_url('product/patti');?>">Patti 緹花抱枕</a></li>
              <li id="varin" class="ori"><a href="<?php echo site_url('product/varin');?>">Varin 多彩抱枕</a></li>
              <li id="laina" class="ori"><a href="<?php echo site_url('product/laina');?>">Laina 雙色抱枕</a></li>
            </ul>
          </li>
          <!-- cushion end -->
           <li id="curtain" class="ori"><a id="curtain-a" href="<?php echo site_url('product/curtain');?>">布簾 / 紗簾</a>
            <ul id="curtain-b">
              <li id="dazo" class="ori"><a href="<?php echo site_url('product/dazo');?>">Dazo 設計紗簾</a></li>
              <li id="donzu" class="ori"><a href="<?php echo site_url('product/donzu');?>">Donzu 緹花布簾</a></li>
              <li id="haju" class="ori"><a href="<?php echo site_url('product/haju');?>">Haju 裝飾布簾</a></li>
              <li id="limya" class="ori"><a href="<?php echo site_url('product/limya');?>">Limya 彩藝布簾</a></li>
              <li id="amra" class="ori"><a href="<?php echo site_url('product/amra');?>">Amra 遮光布簾</a></li>
            </ul>
          </li>
          <!-- curtain end -->
           <li id="accessories" class="ori"><a id="accessories-a" href="<?php echo site_url('product/accessories');?>">窗簾配件</a>
            <ul id="accessories-b">
              <li id="pole" class="ori"><a href="<?php echo site_url('product/pole');?>">Pole 窗簾桿</a></li>
              <li id="bracket" class="ori"><a href="<?php echo site_url('product/bracket');?>">Bracket 托架</a></li>
              <li id="finial" class="ori"><a href="<?php echo site_url('product/finial');?>">Finial 飾頭</a></li>
              <li id="extra" class="ori"><a href="<?php echo site_url('product/extra');?>">Extra 配件</a></li>
              <li id="tassel" class="ori"><a href="<?php echo site_url('product/tassel');?>">Tassel 珠鍊拉繩垂飾</a></li>
              <li id="ballchain" class="ori"><a href="<?php echo site_url('product/ballchain');?>">Ballchain 金屬珠鍊</a></li>
            </ul>
          </li>
          <!-- accessories -->
      </ul>
    </div>

    <!-- left menu 左側選單效果-->
<script src="<?php echo base_url();?>js/msbtleft.js" type="text/javascript"></script>
