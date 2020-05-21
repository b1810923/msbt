<script src="<?php echo base_url();?>js/jquery.validate.js" type="text/javascript"></script>
 <br />
 
 <script type="text/JavaScript" language="JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

//-->
</script>



<style type="text/css">
@charset "UTF-8";


    /*將有內距外距的元素歸零，避免不同瀏覽器內外距不同而錯位*/
    body, h1, h2, h3, h4, h5, h6, p, blockquote, th, td, div, dl, dt, dd, ul, ol, li, pre, code, form, fieldset, legend, input, button, textarea {
      margin: 0;
      padding: 0;
    }


    /*重置頁面基本字型大小及行高*/
    body,td,th {
      font-family: Verdana, Geneva, sans-serif;
      font-size: 100%;
      line-height: 1;
    }


    /*將標題的字型大小及粗細都重置*/
    h1, h2, h3, h4, h5, h6 {
      font-size: 100%;
      font-weight: normal;
    }


    
    /*將影像及欄位集的邊框歸零*/
    img, fieldset {
      border: 0;
    }


    /*將清單樣式清除，其實只要list-style: none就好了，後面都是為了特定瀏覽器*/
    ol, ul {
      list-style: none;
    }


    /*將表格的邊框設定為結合，第二行是為了特定瀏覽器*/
    table {
      border-collapse: collapse;
      border-spacing: 0;
    }

    /*重置表格註解及標題儲存格的對齊*/
    caption, th {
      text-align: left;
    }


    /*將連結、底線重置；其實應該要再加上一個 del 刪除線的，但常常用del就不重置了*/
    a, ins {
      text-decoration: none;
      outline: none;
      hlbr:expression(this.onFocus=this.blur());
    }

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
    align: center;
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
    <div id="menu">
        <ul id='menus'>
          <!-- string start -->
          <li>
            <span onclick="toggle('string');toggleMenu('string','misua');change_item('misua');">
            <img id="string-a" name="string" src="img/leftMenu/product/string-a.jpg" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('string-a','','img/leftMenu/product/string-b.jpg',1)" onmouseout="MM_swapImgRestore()">
            <img id="string-b" name="string" src="img/leftMenu/product/string-b.jpg" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('string-b','','img/leftMenu/product/string-b.jpg',1)" onmouseout="MM_swapImgRestore()">
           </span>
          </li>
          <ul id="string">
            <li>
              <span onclick="toggleMenu('string','misua')">
                <img id="misua-a" name="misua" src="img/leftMenu/product/items/misua-a.jpg" onclick="change_item('misua');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('misua-a','','img/leftMenu/product/items/misua-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="misua-b" name="misua" src="img/leftMenu/product/items/misua-b.jpg" onclick="change_item('misua');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('misua-b','','img/leftMenu/product/items/misua-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('string','wolan')">
                <img id="wolan-a" name="wolan" src="img/leftMenu/product/items/wolan-a.jpg" onclick="change_item('wolan');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('wolan-a','','img/leftMenu/product/items/wolan-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="wolan-b" name="wolan" src="img/leftMenu/product/items/wolan-b.jpg" onclick="change_item('wolan');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('wolan-b','','img/leftMenu/product/items/wolan-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
          </ul>
          <!-- string end -->

          <!-- venetian blind start -->
          <li>
            <span onclick="toggle('venetian');toggleMenu('venetian','bienzen');change_item('bienzen');">
             <img id="venetian-a" name="venetian" src="img/leftMenu/product/venetian-a.jpg"  width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('venetian-a','','img/leftMenu/product/venetian-b.jpg',1)" onmouseout="MM_swapImgRestore()">
             <img id="venetian-b" name="venetian" src="img/leftMenu/product/venetian-b.jpg"  width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('venetian-b','','img/leftMenu/product/venetian-b.jpg',1)" onmouseout="MM_swapImgRestore()">
            </span>
          </li>
            <!--- 子分類項目 -->
          <ul id="venetian">
            <li>
              <span onclick="toggleMenu('venetian','bienzen')">
                <img id="bienzen-a" name="bienzen" src="img/leftMenu/product/items/bienzen-a.jpg" onclick="change_item('bienzen');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('bienzen-a','','img/leftMenu/product/items/bienzen-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="bienzen-b" name="bienzen" src="img/leftMenu/product/items/bienzen-b.jpg" onclick="change_item('bienzen');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('bienzen-b','','img/leftMenu/product/items/bienzen-b.jpg',1)" onmouseout="MM_swapImgRestore()">
               </span>
            </li>
            <li>
              <span onclick="toggleMenu('venetian','pimu')">
                <img id="pimu-a" name="pimu" src="img/leftMenu/product/items/pimu-a.jpg" onclick="change_item('pimu');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('pimu-a','','img/leftMenu/product/items/pimu-b.jpg',1)"  onmouseout="MM_swapImgRestore()">
                <img id="pimu-b" name="pimu" src="img/leftMenu/product/items/pimu-b.jpg" onclick="change_item('pimu');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('pimu-b','','img/leftMenu/product/items/pimu-b.jpg',1)"  onmouseout="MM_swapImgRestore()">
                </span>
            </li>
            <li>
              <span onclick="toggleMenu('venetian','bairay')">
                <img id="bairay-a" name="bairay" src="img/leftMenu/product/items/bairay-a.jpg" onclick="change_item('bairay');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('bairay-a','','img/leftMenu/product/items/bairay-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="bairay-b" name="bairay" src="img/leftMenu/product/items/bairay-b.jpg" onclick="change_item('bairay');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('bairay-b','','img/leftMenu/product/items/bairay-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('venetian','fenla')">
                <img id="fenla-a" name="fenla" src="img/leftMenu/product/items/fenla-a.jpg" onclick="change_item('fenla');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('fenla-a','','img/leftMenu/product/items/fenla-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="fenla-b" name="fenla" src="img/leftMenu/product/items/fenla-b.jpg" onclick="change_item('fenla');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('fenla-b','','img/leftMenu/product/items/fenla-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>      
          </ul>
          <!-- venetian end -->
          <!-- roller blind start -->
          <li>
            <span onclick="toggle('roller');toggleMenu('roller','tiken');change_item('tiken');">
              <img id="roller-a" name="roller" src="img/leftMenu/product/roller-a.jpg" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('roller-a','','img/leftMenu/product/roller-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              <img id="roller-b" name="roller" src="img/leftMenu/product/roller-b.jpg" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('roller-b','','img/leftMenu/product/roller-b.jpg',1)" onmouseout="MM_swapImgRestore()">
            </span>
          </li>
          <!-- roller items start-->
          <ul id="roller">
            <li>
              <span onclick="toggleMenu('roller','tiken')">
                <img id="tiken-a" name="tiken" src="img/leftMenu/product/items/tiken-a.jpg" onclick="change_item('tiken');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('tiken-a','','img/leftMenu/product/items/tiken-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="tiken-b" name="tiken" src="img/leftMenu/product/items/tiken-b.jpg" onclick="change_item('tiken');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('tiken-b','','img/leftMenu/product/items/tiken-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('roller','taoza')">
                <img id="taoza-a" name="taoza" src="img/leftMenu/product/items/taoza-a.jpg" onclick="change_item('taoza');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('taoza-a','','img/leftMenu/product/items/taoza-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="taoza-b" name="taoza" src="img/leftMenu/product/items/taoza-b.jpg" onclick="change_item('taoza');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('taoza-b','','img/leftMenu/product/items/taoza-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('roller','zaiki')">
                <img id="zaiki-a" name="zaiki" src="img/leftMenu/product/items/zaiki-a.jpg" onclick="change_item('zaiki');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('zaiki-a','','img/leftMenu/product/items/zaiki-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="zaiki-b" name="zaiki" src="img/leftMenu/product/items/zaiki-b.jpg" onclick="change_item('zaiki');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('zaiki-b','','img/leftMenu/product/items/zaiki-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('roller','zicy')">
                <img id="zicy-a" name="zicy" src="img/leftMenu/product/items/zicy-a.jpg" onclick="change_item('zicy');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('zicy-a','','img/leftMenu/product/items/zicy-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="zicy-b" name="zicy" src="img/leftMenu/product/items/zicy-b.jpg" onclick="change_item('zicy');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('zicy-b','','img/leftMenu/product/items/zicy-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('roller','ritao')">
                <img id="ritao-a" name="ritao" src="img/leftMenu/product/items/ritao-a.jpg" onclick="change_item('ritao');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('ritao-a','','img/leftMenu/product/items/ritao-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="ritao-b" name="ritao" src="img/leftMenu/product/items/ritao-b.jpg" onclick="change_item('ritao');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('ritao-b','','img/leftMenu/product/items/ritao-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('roller','aibo')">
                <img id="aibo-a" name="aibo" src="img/leftMenu/product/items/aibo-a.jpg" onclick="change_item('aibo');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('aibo-a','','img/leftMenu/product/items/aibo-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="aibo-b" name="aibo" src="img/leftMenu/product/items/aibo-b.jpg" onclick="change_item('aibo');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('aibo-b','','img/leftMenu/product/items/aibo-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('roller','veyem')">
                <img id="veyem-a" name="veyem" src="img/leftMenu/product/items/veyem-a.jpg" onclick="change_item('veyem');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('veyem-a','','img/leftMenu/product/items/veyem-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="veyem-b" name="veyem" src="img/leftMenu/product/items/veyem-b.jpg" onclick="change_item('veyem');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('veyem-b','','img/leftMenu/product/items/veyem-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('roller','ladiam')">
                <img id="ladiam-a" name="ladiam" src="img/leftMenu/product/items/ladiam-a.jpg" onclick="change_item('ladiam');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('ladiam-a','','img/leftMenu/product/items/ladiam-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="ladiam-b" name="ladiam" src="img/leftMenu/product/items/ladiam-b.jpg" onclick="change_item('ladiam');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('ladiam-b','','img/leftMenu/product/items/ladiam-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('roller','emmi')">
                <img id="emmi-a" name="emmi" src="img/leftMenu/product/items/emmi-a.jpg" onclick="change_item('emmi');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('emmi-a','','img/leftMenu/product/items/emmi-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="emmi-b" name="emmi" src="img/leftMenu/product/items/emmi-b.jpg" onclick="change_item('emmi');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('emmi-b','','img/leftMenu/product/items/emmi-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('roller','sakin')">
                <img id="sakin-a" name="sakin" src="img/leftMenu/product/items/sakin-a.jpg" onclick="change_item('sakin');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('sakin-a','','img/leftMenu/product/items/sakin-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="sakin-b" name="sakin" src="img/leftMenu/product/items/sakin-b.jpg" onclick="change_item('sakin');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('sakin-b','','img/leftMenu/product/items/sakin-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>

          </ul>
          <!-- roller items end -->
          <!-- double roller blind start-->
          <li>
            <span onclick="toggle('double');toggleMenu('double','sima');change_item('sima');">
              <img id="double-a" name="double" src="img/leftMenu/product/double-a.jpg" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('double-a','','img/leftMenu/product/double-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              <img id="double-b" name="double" src="img/leftMenu/product/double-b.jpg" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('double-b','','img/leftMenu/product/double-b.jpg',1)" onmouseout="MM_swapImgRestore()">
            </span>
          </li>
          <!-- double items start -->
          <ul id="double">
            <li>
              <span onclick="toggleMenu('double','sima')">
                <img id="sima-a" name="sima" src="img/leftMenu/product/items/sima-a.jpg" onclick="change_item('sima');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('sima-a','','img/leftMenu/product/items/sima-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="sima-b" name="sima" src="img/leftMenu/product/items/sima-b.jpg" onclick="change_item('sima');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('sima-b','','img/leftMenu/product/items/sima-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('double','simaXL')">
                <img id="simaXL-a" name="simaXL" src="img/leftMenu/product/items/simaXL-a.jpg" onclick="change_item('simaXL');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('simaXL-a','','img/leftMenu/product/items/simaXL-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="simaXL-b" name="simaXL" src="img/leftMenu/product/items/simaXL-b.jpg" onclick="change_item('simaXL');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('simaXL-b','','img/leftMenu/product/items/simaXL-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('double','seda')">
                <img id="seda-a" name="seda" src="img/leftMenu/product/items/seda-a.jpg" onclick="change_item('seda');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('seda-a','','img/leftMenu/product/items/seda-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="seda-b" name="seda" src="img/leftMenu/product/items/seda-b.jpg" onclick="change_item('seda');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('seda-b','','img/leftMenu/product/items/seda-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('double','nonya')">
                <img id="nonya-a" name="nonya" src="img/leftMenu/product/items/nonya-a.jpg" onclick="change_item('nonya');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('nonya-a','','img/leftMenu/product/items/nonya-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="nonya-b" name="nonya" src="img/leftMenu/product/items/nonya-b.jpg" onclick="change_item('nonya');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('nonya-b','','img/leftMenu/product/items/nonya-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('double','yoka')">
                <img id="yoka-a" name="yoka" src="img/leftMenu/product/items/yoka-a.jpg" onclick="change_item('yoka');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('yoka-a','','img/leftMenu/product/items/yoka-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="yoka-b" name="yoka" src="img/leftMenu/product/items/yoka-b.jpg" onclick="change_item('yoka');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('yoka-b','','img/leftMenu/product/items/yoka-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
          </ul>
          <!-- double items end -->
          <!-- honeycomp start -->
          <li>
            <span onclick="toggle('honeycomp');toggleMenu('honeycomp','vali');change_item('vali');">
              <img id="honeycomp-a" name="honeycomp" src="img/leftMenu/product/honeycomp-a.jpg" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('honeycomp-a','','img/leftMenu/product/honeycomp-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              <img id="honeycomp-b" name="honeycomp" src="img/leftMenu/product/honeycomp-b.jpg" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('honeycomp-b','','img/leftMenu/product/honeycomp-b.jpg',1)" onmouseout="MM_swapImgRestore()">
            </span>
          </li>
          <ul id="honeycomp">
            <li>
              <span onclick="toggleMenu('honeycomp','vali')">
                <img id="vali-a" name="vali" src="img/leftMenu/product/items/vali-a.jpg" onclick="change_item('vali');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('vali-a','','img/leftMenu/product/items/vali-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="vali-b" name="vali" src="img/leftMenu/product/items/vali-b.jpg" onclick="change_item('vali');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('vali-b','','img/leftMenu/product/items/vali-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('honeycomp','wagi')">
                <img id="wagi-a" name="wagi" src="img/leftMenu/product/items/wagi-a.jpg" onclick="change_item('wagi');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('wagi-a','','img/leftMenu/product/items/wagi-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="wagi-b" name="wagi" src="img/leftMenu/product/items/wagi-b.jpg" onclick="change_item('wagi');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('wagi-b','','img/leftMenu/product/items/wagi-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
          </ul>
          <!-- honeycomp end -->
          <!-- hanas start-->
          <li>
            <span onclick="toggle('hanas');">
              <img id="hanas-a" name="hanas" src="img/leftMenu/product/hanas-a.jpg" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('hanas-a','','img/leftMenu/product/hanas-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              <img id="hanas-b" name="hanas" src="img/leftMenu/product/hanas-b.jpg" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('hanas-b','','img/leftMenu/product/hanas-b.jpg',1)" onmouseout="MM_swapImgRestore()">
            </span>
          </li>
          <!-- hanas end -->
          <!-- rakusho start -->
          <li>
            <span onclick="toggle('rakusho');">
              <img id="rakusho-a" name="rakusho" src="img/leftMenu/product/rakusho-a.jpg" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('rakusho-a','','img/leftMenu/product/rakusho-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              <img id="rakusho-b" name="rakusho" src="img/leftMenu/product/rakusho-b.jpg" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('rakusho-b','','img/leftMenu/product/rakusho-b.jpg',1)" onmouseout="MM_swapImgRestore()">
            </span>
          </li>
          <!-- rakusho end -->
          <!-- cushion start -->
          <li>
            <span onclick="toggle('cushion');toggleMenu('cushion','basa');change_item('basa')">
              <img id="cushion-a" name="cushion" src="img/leftMenu/product/cushion-a.jpg" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('cushion-a','','img/leftMenu/product/cushion-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              <img id="cushion-b" name="curtain" src="img/leftMenu/product/cushion-b.jpg" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('cushion-b','','img/leftMenu/product/cushion-b.jpg',1)" onmouseout="MM_swapImgRestore()">
            </span>
          </li>
          <ul id="cushion">
            <li>
              <span onclick="toggleMenu('cushion','basa')">
                <img id="basa-a" name="basa" src="img/leftMenu/product/items/basa-a.jpg" onclick="change_item('basa');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('basa-a','','img/leftMenu/product/items/basa-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="basa-b" name="basa" src="img/leftMenu/product/items/basa-b.jpg" onclick="change_item('basa');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('basa-b','','img/leftMenu/product/items/basa-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('cushion','yito')">
                <img id="yito-a" name="yito" src="img/leftMenu/product/items/yito-a.jpg" onclick="change_item('yito');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('yito-a','','img/leftMenu/product/items/yito-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="yito-b" name="yito" src="img/leftMenu/product/items/yito-b.jpg" onclick="change_item('yito');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('yito-b','','img/leftMenu/product/items/yito-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
             <li>
              <span onclick="toggleMenu('cushion','naka')">
                <img id="naka-a" name="naka" src="img/leftMenu/product/items/naka-a.jpg" onclick="change_item('naka');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('naka-a','','img/leftMenu/product/items/naka-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="naka-b" name="naka" src="img/leftMenu/product/items/naka-b.jpg" onclick="change_item('naka');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('naka-b','','img/leftMenu/product/items/naka-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
             <li>
              <span onclick="toggleMenu('cushion','sardi')">
                <img id="sardi-a" name="sardi" src="img/leftMenu/product/items/sardi-a.jpg" onclick="change_item('sardi');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('sardi-a','','img/leftMenu/product/items/sardi-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="sardi-b" name="sardi" src="img/leftMenu/product/items/sardi-b.jpg" onclick="change_item('sardi');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('sardi-b','','img/leftMenu/product/items/sardi-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
             <li>
              <span onclick="toggleMenu('cushion','patti')">
                <img id="patti-a" name="patti" src="img/leftMenu/product/items/patti-a.jpg" onclick="change_item('patti');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('patti-a','','img/leftMenu/product/items/patti-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="patti-b" name="patti" src="img/leftMenu/product/items/patti-b.jpg" onclick="change_item('patti');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('patti-b','','img/leftMenu/product/items/patti-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
             <li>
              <span onclick="toggleMenu('cushion','varin')">
                <img id="varin-a" name="varin" src="img/leftMenu/product/items/varin-a.jpg" onclick="change_item('varin');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('varin-a','','img/leftMenu/product/items/varin-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="varin-b" name="varin" src="img/leftMenu/product/items/varin-b.jpg" onclick="change_item('varin');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('varin-b','','img/leftMenu/product/items/varin-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            
          </ul>
          <!-- cushion end -->
          <!-- curtain start -->
          <li>
            <span onclick="toggle('curtain');toggleMenu('curtain','dazo');change_item('dazo')">
              <img id="curtain-a" name="curtain" src="img/leftMenu/product/curtain-a.jpg" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('curtain-a','','img/leftMenu/product/curtain-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              <img id="curtain-b" name="curtain" src="img/leftMenu/product/curtain-b.jpg" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('curtain-b','','img/leftMenu/product/curtain-b.jpg',1)" onmouseout="MM_swapImgRestore()">
            </span>
          </li>
          <ul id="curtain">
            <li>
              <span onclick="toggleMenu('curtain','dazo')">
                <img id="dazo-a" name="dazo" src="img/leftMenu/product/items/dazo-a.jpg" onclick="change_item('dazo');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('dazo-a','','img/leftMenu/product/items/dazo-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="dazo-b" name="dazo" src="img/leftMenu/product/items/dazo-b.jpg" onclick="change_item('dazo');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('dazo-b','','img/leftMenu/product/items/dazo-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('curtain','donzu')">
                <img id="donzu-a" name="donzu" src="img/leftMenu/product/items/donzu-a.jpg" onclick="change_item('donzu');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('donzu-a','','img/leftMenu/product/items/donzu-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="donzu-b" name="donzu" src="img/leftMenu/product/items/donzu-b.jpg" onclick="change_item('donzu');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('donzu-b','','img/leftMenu/product/items/donzu-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('curtain','haju')">
                <img id="haju-a" name="haju" src="img/leftMenu/product/items/haju-a.jpg" onclick="change_item('haju');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('haju-a','','img/leftMenu/product/items/haju-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="haju-b" name="haju" src="img/leftMenu/product/items/haju-b.jpg" onclick="change_item('haju');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('haju-b','','img/leftMenu/product/items/haju-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('curtain','amra')">
                <img id="amra-a" name="amra" src="img/leftMenu/product/items/amra-a.jpg" onclick="change_item('amra');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('amra-a','','img/leftMenu/product/items/amra-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="amra-b" name="amra" src="img/leftMenu/product/items/amra-b.jpg" onclick="change_item('amra');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('amra-b','','img/leftMenu/product/items/amra-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>  
          </ul>
          <!-- accessories start -->
          <li>
            <span onclick="toggle('accessories');toggleMenu('accessories','wenpiz');change_item('wenpiz')">
              <img id="accessories-a" name="accessories" src="img/leftMenu/product/accessories-a.jpg" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('accessories-a','','img/leftMenu/product/accessories-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              <img id="accessories-b" name="accessories" src="img/leftMenu/product/accessories-b.jpg" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('accessories-b','','img/leftMenu/product/accessories-b.jpg',1)" onmouseout="MM_swapImgRestore()">
            </span>
          </li>
          <ul id="accessories">
            <li>
              <span onclick="toggleMenu('accessories','wenpiz')">
                <img id="wenpiz-a" name="wenpiz" src="img/leftMenu/product/items/wenpiz-a.jpg" onclick="change_item('wenpiz');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('wenpiz-a','','img/leftMenu/product/items/wenpiz-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="wenpiz-b" name="wenpiz" src="img/leftMenu/product/items/wenpiz-b.jpg" onclick="change_item('wenpiz');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('wenpiz-b','','img/leftMenu/product/items/wenpiz-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('accessories','blouk')">
                <img id="blouk-a" name="blouk" src="img/leftMenu/product/items/blouk-a.jpg" onclick="change_item('blouk');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('blouk-a','','img/leftMenu/product/items/blouk-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="blouk-b" name="blouk" src="img/leftMenu/product/items/blouk-b.jpg" onclick="change_item('blouk');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('blouk-b','','img/leftMenu/product/items/blouk-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('accessories','finial')">
                <img id="finial-a" name="finial" src="img/leftMenu/product/items/finial-a.jpg" onclick="change_item('finial');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('finial-a','','img/leftMenu/product/items/finial-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="finial-b" name="" src="img/leftMenu/product/items/finial-b.jpg" onclick="change_item('finial');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('finial-b','','img/leftMenu/product/items/finial-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
             <li>
              <span onclick="toggleMenu('accessories','tassel')">
                <img id="tassel-a" name="tassel" src="img/leftMenu/product/items/tassel-a.jpg" onclick="change_item('tassel');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('tassel-a','','img/leftMenu/product/items/tassel-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="tassel-b" name="tassel" src="img/leftMenu/product/items/tassel-b.jpg" onclick="change_item('tassel');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('tassel-b','','img/leftMenu/product/items/tassel-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('accessories','ballchain')">
                <img id="ballchain-a" name="ballchain" src="img/leftMenu/product/items/ballchain-a.jpg" onclick="change_item('ballchain');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('ballchain-a','','img/leftMenu/product/items/ballchain-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="ballchain-b" name="ballchain" src="img/leftMenu/product/items/ballchain-b.jpg" onclick="change_item('ballchain');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('ballchain-b','','img/leftMenu/product/items/ballchain-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
            <li>
              <span onclick="toggleMenu('accessories','extra')">
                <img id="extra-a" name="extra" src="img/leftMenu/product/items/extra-a.jpg" onclick="change_item('extra');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('extra-a','','img/leftMenu/product/items/extra-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="extra-b" name="extra" src="img/leftMenu/product/items/extra-b.jpg" onclick="change_item('extra');" width="172" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('extra-b','','img/leftMenu/product/items/extra-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span>
            </li>
          </ul>
          <!-- accessories end -->
        </ul>
    </div>

<!-- banner -->
<div id="banner" name="banner" class="samplesIndex"><img alt="樣本索取" src="<?php echo base_url();?>images/img/samples.jpg" width="765"></div>

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
		<img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
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
		 <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
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
		 <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
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
        <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $img_file;?>.jpg"><br/>
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
        <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $img_file;?>.jpg"><br/>
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
        <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $img_file;?>.jpg"><br/>
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
        <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $img_file;?>.jpg"><br/>
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
        <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $img_file;?>.jpg"><br/>
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
        <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $img_file;?>.jpg"><br/>
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
		case "Sakin"://NO
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
				<label for="sample[]"><img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/></label>
				<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
				<td/>
				<?php
				if($a == $item_count){
				if($a == 1){
					echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
				}else if($a ==2){
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
		<label for="sample[]"><img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/></label>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
		
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
				}else if($a ==2){
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
		<img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
		
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
				}else if($a ==2){
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
		<img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
		
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
				}else if($a ==2){
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
		<img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
		
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
				}else if($a ==2){
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
		<img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
		
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
				}else if($a ==2){
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
		<img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
		
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
				}else if($a ==2){
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
		<img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
		
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
				}else if($a ==2){
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
      $item_key = "Sakin";
      $item_name  = $item['name'];
      $item_array = $item['items'];
      $item_count = count($item['items']);
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
    <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
    <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
    <td/>
    <?php
    
      if($a == $item_count){
        if($a == 1){
          echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
        }else if($a ==2){
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
		<img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
		
			if($a == $item_count){
				if($a == 1){
					echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
				}else if($a ==2){
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
    <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
    <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
    <td/>
    <?php
    
      if($a == $item_count){
        if($a == 1){
          echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
        }else if($a ==2){
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
    <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
    <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
    <td/>
    <?php
    
      if($a == $item_count){
        if($a == 1){
          echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
        }else if($a ==2){
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
    <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
    <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
    <td/>
    <?php
    
      if($a == $item_count){
        if($a == 1){
          echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
        }else if($a ==2){
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
        <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $img_file;?>.JPG"><br/>
        <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
        <td/>
        <?php
          if($a == $item_count){
            if($a == 1){
            echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
            }else if($a ==2){
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
        <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $img_file;?>.JPG"><br/>
        <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
        <td/>
        <?php
          if($a == $double_count){
            if($a == 1){
            echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
            }else if($a ==2){
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
        <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $img_file;?>.JPG"><br/>
        <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
        <td/>
        <?php
          if($a == $blackout_count){
            if($a == 1){
            echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
            }else if($a ==2){
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
      <img src="<?php echo base_url();?>images/getsample/<?php echo $img_file;?>.JPG"><br/>
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
		<img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
			if($a == $item_number){
				if($a == 1){
					echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
				}else if($a ==2){
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
		<img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
			if($a == $item_number){
				if($a == 1){
					echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
				}else if($a ==2){
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
    <img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
    <input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
    <td/>
    <?php
      if($a == $item_number){
        if($a == 1){
          echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
        }else if($a ==2){
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
		<img alt="<?php echo $value_name;?>" src="<?php echo base_url();?>images/getsample/<?php echo $item_key.'_'.$img_file;?>.JPG"><br/>
		<input type="checkbox" name="sample[]" id="<?php echo $id_name;?>" value="<?php echo $value_name;?>" onclick="checkBox(this)"> <?php echo $list_name;?>
		<td/>
		<?php
			if($a == $item_number){
				if($a == 1){
					echo "<td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td><td id='msbt'>msbt</td>";
				}else if($a ==2){
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


</div> <!-- end topMenu -->



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
			echo $cap_image;
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

      if(o.hasChildNodes()){
        o.style.display='block';
      }


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


/* 變換商品項目 */
function change_item(id){
  var itemsNameA = id+'-a';
  var itemsNameB = id+'-b';
  document.getElementById(itemsNameB).style.display = 'block';
  document.getElementById(itemsNameA).style.display = 'none';
}

</script>
</script>

