function change_icon(id){
  
  var gray = 'm_'+id+'_g'; 
  var red =  'm_'+id+'_r';
  var text = 'm_'+id;
  
  if(id.match('m_')){
    hideMenu('main_menu');
    gray = id+'_g';
    red= id+'_r';
    text = id;
  }else{
    hideMenu('contact_us');
    hideMenu('info');
  }
  if(id=='fb'){
    window.open('http://www.facebook.com/MSBTpage');
  }

  if(id=='youtube'){
    window.open('http://google.com.tw');
  }
  document.getElementById(gray).style.display = 'none';
  document.getElementById(red).style.display = 'block';
  if((!id.match("fb")) && (!id.match("youtube")) ){
    document.getElementById(text).style.display = 'block';
  }
}
function hideMenu(id){
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
