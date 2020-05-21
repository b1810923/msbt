<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>

<style>
.red{
  color: #a82124;
}
.ori{
  color: #595757;
}
li span:hover, #menus ul li:hover{
  color: #a82124;
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

</style>
<script>
function toggle_item(category,item){
  var anchors = $('#menus ul');
  anchors.hide();
  anchors.children().removeClass('red');
  anchors.siblings('span').removeClass('red');
  $('#'+category).slideDown(); 
  $('#'+category).siblings('span').addClass('red');
  $("[name='"+item+"']").addClass('red');
  change_item(item);
}
$(function(){
  // hide menu
  var anchors = $('#menus ul');
  anchors.hide();
  // li click function
  $('#menus ul li').click(function(){
    var $this = $(this);
    $this.addClass('red').siblings('.red').removeClass('red');
  });
});
</script>
    <div id="menu">
        <ul id='menus'>
          <!-- string start -->
          <li class="ori">
            <span onclick="toggle_item('string','misua');" style="cursor:pointer">線簾</span>
            <ul id="string">
              <li name="misua" onclick="change_item('misua')" style="cursor:pointer">Misua 線簾</li>
            </ul>
          </li>    
          <!-- string end -->
          <li class="ori">
            <span onclick="toggle_item('venetian','bienzen');" style="cursor:pointer">百葉簾</span>
          
            <!--- 子分類項目 -->
              <ul id="venetian">
                <li name="bienzen" onclick="change_item('bienzen');" style="cursor:pointer">Bienzen 竹編木百葉簾</li>
                <li name="pimu" onclick="change_item('pimu');" style="cursor:pointer">Pimu 實木百葉簾</li>
                <li name="bairay" onclick="change_item('bairay');" style="cursor:pointer">Bairay 無拉繩鋁百葉簾</li>
                <li name="fenla" onclick="change_item('fenla');" style="cursor:pointer">Fenla 布織百葉簾</li>      
              </ul>
          </li>
          <!-- venetian end -->
          <li class="ori">
            <span onclick="toggle_item('roller','tiken');" style="cursor:pointer">捲簾</span>
            <ul id="roller">
              <li name="tiken" onclick="change_item('tiken')" style="cursor:pointer">Tiken 原色捲簾</li>
              <li onclick="change_item('taoza')" style="cursor:pointer">Taoza 紙編捲簾</li>
              <li onclick="change_item('zaiki')" style="cursor:pointer">Zaiki 設計捲簾</li>
              <li onclick="change_item('zicy')" style="cursor:pointer">Zicy 印花捲簾</li>
              <li onclick="change_item('ritao')" style="cursor:pointer">Ritao 透光捲簾</li>
              <li onclick="change_item('aibo')" style="cursor:pointer">Aibo 陽光面料捲簾</li>
              <li onclick="change_item('veyem')" style="cursor:pointer">Veyem 植絨捲簾</li>
              <li onclick="change_item('ladiam')" style="cursor:pointer">Ladiam 麂皮絨捲簾</li>
              <li onclick="change_item('emmi')" style="cursor:pointer">Emmi 遮光捲簾</li>
              <li onclick="change_item('sakin')" style="cursor:pointer">Sakin 平紋遮光捲簾</li>
            </ul>
          </li>    
          <!-- roller end -->
          <li class="ori">
            <span onclick="toggle_item('double','sima');" style="cursor:pointer">斑馬簾</span>
            <ul id="double">
              <li name="sima" onclick="change_item('sima')">Sima 斑馬簾</li>
              <li onclick="change_item('seda')">Seda 細織斑馬簾</li>
              <li onclick="change_item('nonya')">Nonya 條紋斑馬簾</li>
              <li onclick="change_item('yoka')">Yoka 遮光斑馬簾</li>
            </ul>
          </li>

          <li class="ori">
            <span onclick="toggle_item('honeycomb','vali');" style="cursor:pointer">蜂巢簾</span>
            <ul id="honeycomb">
              <li name="vali" onclick="change_item('vali')">Vali 無紡蜂巢簾</li>
              <li onclick="change_item('wagi')">Wagi 布織蜂巢簾</li>
            </ul>
          </li>

          <li class="ori">
            <span onclick="toggle_item('curtain','dazo');" style="cursor:pointer">布簾 / 紗簾</span>
            <ul id="curtain">
              <li name="dazo" onclick="change_item('dazo')">Dazo 設計紗簾</li>
              <li onclick="change_item('donzu')">Donzu 緹花布簾</li>
              <li onclick="change_item('haju')">Haju 裝飾布簾</li>
              <li name="limya" onclick="change_item('limya')">Limya 彩藝布簾</li>
              <li name="amra" onclick="change_item('amra')">Amra 遮光布簾</li>
            </ul>
          </li>
        </ul>
    </div>