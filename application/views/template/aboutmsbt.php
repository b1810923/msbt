<div id="content" style="width:1000px">
	<div id="topMenu">
<?php $this->load->view('menu/msbt_menu.php'); ?>
	</div>
<!-- left menu 左側選單效果-->
<script type="text/javascript">
  function toggleMenu(id,child){
      menu();
      hideMenu('menus');

      var a= id+'-a';
      var b= id+'-b';
      document.getElementById(a).style.display = 'none';
      document.getElementById(b).style.display = 'block';

      var o=document.getElementById(id);
      o.style.display = 'block';
      
      var ca = child+'-a';
      var cb = child+'-b';
      
      document.getElementById(ca).style.display = 'none';
      document.getElementById(cb).style.display = 'block';

  }
  function toggle(id){
      var o=document.getElementById( id );
      
      menu();
      hideMenu('menus');

      var a= id+'-a';
      var b= id+'-b';
      document.getElementById(a).style.display = 'none';
      document.getElementById(b).style.display = 'block';
  }

  // all li hide
  function menu(){
    var node = document.getElementById('menus').getElementsByTagName('img');
    for(var i=0;i<node.length;i++){
      var nodeID = node[i].getAttribute("id");
      if(nodeID.match("-a")){
        document.getElementById(nodeID).style.display = 'block';
      }else{
        document.getElementById(nodeID).style.display = 'none';
      }
    }

  }
  function hideMenu( id )
  {

    var o=document.getElementById( id ).getElementsByTagName('ul');
   
    for( var i=0; i < o.length; i++){
      o[i].style.display='none';
      
    }

  }

  hideMenu('menus');

/*** 重整網頁時清空checkbox ***/ 
function clearAll(){

  for(var j=0;j<selectNum;j++){
    checkboxes[j].checked=false;
  }

}

/* 變換商品項目 */
function change_item(id){
  var itemsNameA = id+'-a';
  var itemsNameB = id+'-b';
  document.getElementById(itemsNameB).style.display = 'block';
  document.getElementById(itemsNameA).style.display = 'none';
}

</script>
	<div id="pageContent">
hahahahaha
	</div>
</div>