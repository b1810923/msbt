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

function change_icon(id){
  
  var gray = 'm_'+id+'_g'; 
  var red =  'm_'+id+'_r';
  var text = 'm_'+id;
  
  if(id.match('m_')){
    hideMainMenu('main_menu');
    gray = id+'_g';
    red= id+'_r';
    text = id;
  }else{
    hideMainMenu('contact_us');
    hideMainMenu('info');
  }
  if(id=='fb'){
    window.open('http://www.facebook.com/MSBTpage');
  }
  if(id=='youtube'){
    window.open('http://www.youtube.com/user/MSBTvideo/videos');
  }
  
  document.getElementById(gray).style.display = 'none';
  document.getElementById(red).style.display = 'block';
  if( (text=='m_phone') || (text=='m_email') ){
    document.getElementById(text).style.display = 'block';
  }
}
function hideMainMenu(id){
  if(id=='info'){
    var o= document.getElementById(id).getElementsByTagName('span');
  }else{
    var o = document.getElementById(id).getElementsByTagName('img');
  }

  for(var i=0;i<o.length;i++){
    var nodeId= o[i].getAttribute("id");
    if(nodeId.match('_g')){
      document.getElementById(nodeId).style.display = 'block';
    }else{
      document.getElementById(nodeId).style.display = 'none';
    }

    
  }
}
//去除前後左右的空白
String.prototype.Trim = function(){
  return this.replace(/(^[\s]*)|([\s]*$)/g, "");
}
// remove all menu li class
function OriLink(id){
  if(id == 'main_menu'){
    var o = document.getElementById(id).getElementsByTagName('a');
  }
  for(var i=0; i<o.length;i++){
    var nodeId = o[i].getAttribute("id");
    $("#"+nodeId).removeClass("red");
  }
  
}
// li link
function linkChange(id, linkUrl){
  var webURL = linkUrl;
  //alert('[debug]webUrl: '+webURL);
  document.location.href= webURL;
 
}
// add li class: font color is red
function linkSelect(liId, menuDiv){
  OriLink(menuDiv);
   $("#"+id).addClass("red"); // class CSS 在各自的頁面
  
}


//-->
