<html>
<head>
<title>My Form</title>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
 <script src="<?php echo base_url();?>js/validate/lib/jquery.js"></script>
 <script src="<?php echo base_url();?>js/validate/dist/jquery.validate.js"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/tooltip/tooltipster.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>js/tooltip/tooltipster-msbt.css" />
 
 <script src="<?php echo base_url();?>js/tooltip/jquery.tooltipster.min.js"></script>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>
<body onLoad=clearList();>
<?php 
?>
<div id="proData">
商品：
<select id="cate">
    <option value="">商品種類</option>
  <?php foreach($level1 as $items): ?>
      <option value="<?php echo $items['id'].'-'.$items['level1Name'];?>"><?php echo $items['level1Name'];?></option>
  <?php endforeach ?>
</select>
<select id="level2">
  <option value="">請選擇</option>
</select>
</div>

<script>
$( document ).ready(function(){
  // 取出data資料

  // 選擇商品
  $('#cate').change(function(){
    $('#standardsel').remove();
    $('#color').remove();
    $('#frame').remove();
    $('#ajaxsize').remove();
    $('#number').remove();
    $('#othersize').remove();
    $('#send_btn').remove();
    $('#btn_div').remove();
    $('#space').remove();
    $('#cushion').remove();
    $('#proSize').remove();
    $('#itemother').remove();
    $('#rakusho').remove();
    $('#proMark').remove();
    $('#curtain_modi').remove();
    //option value have id & level1Name
    var level1 = $('#cate').val();
    var levelOne = new Array(2);
    levelOne = level1.split("-");
    //alert(levelOne[0]+'=='+levelOne[1] );
    $.ajax({
      url:'<?php echo base_url();?>index.php/askprice/ajaxLevel2/',
      data: { 'level1': levelOne[0], level1Name: levelOne[1] },
      dataType:'json',
      type:'post',
      error:function(err){
        alert('抱歉，系統更新中，請稍後使用。');
      },
      success:function(data){
        $('#level2 option').remove();
        $('#level2').append(data);
        //*//hanas
        if(levelOne[0]=='6'){
          $('#level2')[0].selectedIndex =1;
          $('#level2').trigger('change');
        }
        if(levelOne[0] =='7'){
          $('#level2')[0].selectedIndex = 1;
          $('#level2').trigger('change');
          
        }
        //*/
      }
    });
  });

  // 選擇第二階商品
  $('#level2').change(function(){
      //alert('test level2');
     
      var levelTwo = $('#level2').val();
      var level = levelTwo.split('_');
      var level2 = level[0];
      
      var level1 = $('#cate').val();
      var levelOne = level1.split('-');
      
      //alert('level1:');
      $('#standardsel').remove();
      $('#standardonly').remove();
      $('#standardtasselsize').remove();
    
      $('#color').remove();
      $('#number').remove();
      $('#othersize').remove();
      $('#send_btn').remove();
      $('#btn_div').remove();
      $('#cushion').remove();
      $('#proSize').remove();
      $('#itemother').remove();
      $('#rakusho').remove();
      $('#proMark').remove();
      $('#curtain_modi').remove();
      
      //alert('level2:'+level2);
      //根據level2Id做程式判斷
      var stand_url = '';
      //alert('[debug]'+stand_url);
      
      if( level2 ==102){
        stand_url = '<?php echo base_url();?>index.php/askprice/ajaxStandOnly/';
      }else{
        stand_url = '<?php echo base_url();?>index.php/askprice/ajaxStand/';
      }
      
      $.ajax({
        url: stand_url,
        data: { 'proID':level2},
        dataType: 'json',
        type: 'post',
        error:function(err){
          alert('抱歉，系統忙碌中');
        },
        success:function(standard){
          
          $("#proData").append(standard);
          //rakusho selected
          if(levelOne[0]=='7'){
            $('#color')[0].selectedIndex = 1;
            $('#color').trigger('change');
          }
          //accessory-pole selected
          if(level2=='38'){
            $('#color')[0].selectedIndex = 1;
            $('#color').trigger('change');
          }
          
        }
      }); 

  });
  // 選擇規格
  $(document).on("change",'#standardonly', function(){
    $('#standardtasselsize').remove();
    $('#number').remove();
    $('#othersize').remove();
    $('#btn_div').remove();
    var level = $('#standardonly').val();
    var leveltassel = level.split('_');
   
   $.ajax({
      url: '<?php echo base_url();?>index.php/askprice/ajaxStandTasselColor/',
      data: {'tassel':leveltassel[0]},
      dataType: 'json',
      type: 'post',
      error: function(err){
        alert('抱歉，系統忙碌中，請稍後使用。');
      },
      success: function(data){
        $('#proData').append(data);
      }
    });
     
  });
  $(document).on("change",'#standardtasselsize', function(){
    $('#othersize').remove();
    $('#send_btn').remove();
    $('#cushion').remove();
    $('#number').remove();
    $('#proSize').remove();
    $('#proMark').remove();
    $('#itemother').remove();
    $('#curtain_modi').remove();
    $('#rakusho').remove();
      
    $('#btn_div').remove();
      
    var level1 = $('#cate').val();
    var levelOne = level1.split('-');
    var level2 = $('#level2').val();
    var levelTwo = level2.split('_');
    var level3 = $('#standardtasselsize').val();
    var levelThree = level3.split('_');
    $.ajax({
      url: '<?php echo base_url();?>index.php/askprice/ajaxNumber/',
      data: {'level1Id':levelOne[0],'level2Id':levelTwo[0],'level3Id':levelThree[0]},
      dataType: 'json',
      type: 'post',
      error: function(err){
        alert('抱歉，系統維修中，請稍後使用。');
      },
      success:function(data){
        $('#proData').append(data);

      }
    });
  });
  // 選擇顏色
  $(document).on("change",'#color',function(){
    $('#othersize').remove();
    $('#send_btn').remove();
    $('#cushion').remove();
    $('#number').remove();
    $('#proSize').remove();
    $('#proMark').remove();
    $('#itemother').remove();
    $('#curtain_modi').remove();
    $('#rakusho').remove();
      
    $('#btn_div').remove();
      
    var level1 = $('#cate').val();
    var levelOne = level1.split('-');
    var level2 = $('#level2').val();
    var levelTwo = level2.split('_');
    var level3 = $('#color').val();
    var levelThree = level3.split('_');
    $.ajax({
      url: '<?php echo base_url();?>index.php/askprice/ajaxNumber/',
      data: {'level1Id':levelOne[0],'level2Id':levelTwo[0],'level3Id':levelThree[0]},
      dataType: 'json',
      type: 'post',
      error: function(err){
        alert('抱歉，系統維修中，請稍後使用。');
      },
      success:function(data){
        $('#proData').append(data);

      }
    });

  });

  // 選擇商品數量
  $(document).on("change" , '#number', function(){
    var number = $('#number').val();
    var level1 = $('#cate').val();
    var levelOne = level1.split('-');
    var level2 = $('#level2').val();
    var levelTwo = level2.split('_');
    //alert(levelOne[0]+' '+levelOne[1]);

    $('#ajaxsize').remove();
    if(levelOne[0] !='1'){

      $.ajax({
        url: '<?php echo base_url();?>index.php/askprice/ajaxSize/',
        data: {'sel_number':number, 'level1Id':levelOne[0], 'level2Id':levelTwo[0]},
        dataType: 'json',
        type: 'post',
        error:function(err){
          alert('抱歉，系統忙碌中，請稍後使用。');
        },
        success:function(data){
          $('#othersize').append(data);
        }
      });
    }
  });
  
  // 確認：將資料存入data＆前台
  $(document).on("click" ,'#send_btn', function(){
    
    var cate = '';
    var level2 ='';
    var stand = '';
    var color = '';
    var number = '';
    var rakusho = '';
    var cushion = '';
    var level3 = '';
    var curtain = '';
    if( $('#cate').val()!='' ){
      cate = $('#cate').val().split('-');
    }else{ cate = '0';}
    if( $('#level2').val()!= '' ){
      level2 = $('#level2').val();
    }else{ level2 = '0';}

    if( $('#standardsel').val()!='' ){
      stand = $('#standardsel').val();
    }else{ stand = '0';}
    if( cate[0]=='9'){
      //alert('[debug]level1:'+cate[0]);
      stand = $('#curtain_Size').val();
      //alert('debug stand:'+stand);
    }
    
    if( $('#color').val()!='' ){
      color = $('#color').val();
    }else{ color = '0';}

    if( $('#number').val()!='' ){
      number = $('#number').val();
    }else{ number = '0';}



    if( $("input:checked[name='rakusho_size']").val()!=''){
      rakusho = $("input:checked[name='rakusho_size']").val();  
    }
    if( $("input:checked[name='cushion_size']").val()!=''){
      cushion = $("input:checked[name='cushion_size']").val();
    }
    if( $("input:checkbox:checked[name='curtain_modi']").val()!=''){
      curtain = $("input:checked[name='curtain_modi']").val();
      //alert('debug: curtain='+curtain);
    }
    //alert('[debug]level2:'+level2);
    //alert(cate[1]+ ' + '+level2+ ' -stand: '+stand+' color: ' +color+'+number: '+number);
    

    // number 跑徊圈
    var level2 = $('#level2').val();
    var level2array = $('#level2').val().split('_');
    var width =[];  var height = []; var frame =[]; var space=[]; var count=[];
    
    var remark = '';

    if( $('#remark_1').val()!='' ){
        remark = $('#remark_1').val();
    }
    
    //現貨
    if( (cate[1]== '1') || (cate[1]== '7') || (cate[1]== '8') || (cate[1]== '9')  ){
      if( $('#count').val()!='' ){
        number = $('#count').val();
      }
      
    }else if( cate[0] == '10'){ // 配件資料
      if( level2array[0] == '101'){
        for(var i=1; i<= number; i++){
          width[i]= $('#width_'+i).val();
          frame[i]= $('input:radio:checked[name=frame_'+i+']').val();
          space[i]= $('#space_'+i).val();
          if(width[i]==''){
            alert('寬度為必填');
            return false;
          }
          

        }
      }else if( level2array[0] == '102'){
        // color: standardtasselsize
        // standard: standardonly
        if( $('#standardtasselsize').val()!='' ){
          color = $('#standardtasselsize').val();
        }

        if( $('#standardonly').val()!='' ){
          standard = $('#standardonly').val();
        }
        
      }else{
        for(var i=1; i<=number; i++){
          
          frame[i]= $('#width_'+i+' option:selected').val();
          space[i]= $('#space_'+i).val();
          count[i]= $('#count_'+i).val();
          //未選擇珠鍊長度的判斷
          if( frame[i] == 0 ){
            alert('請選擇珠鍊長度');
            return false;
          }
        }
        
      }
    }else{
        for(var i=1; i<=number; i++ ){
          width[i] = $('#width_'+i).val();
          height[i] = $('#height_'+i).val();
          frame[i] = $('input:radio:checked[name=size_'+i+']').val();
          space[i] = $('#space_'+i).val();
          count[i] = $('#count_'+i).val();
          if(width[i]==''){
            alert('寬度為必填');
            return false;
          }
          if(height[i]==''){
            alert('請填寫高度');
            return false;
          }if(count[i]==''){
            count[i] == 1;
          }
          //alert('[debug]width:'+width[i]+' 高:'+height[i]+' 框：'+frame[i]+' 裝設空間：'+space[i]);
        }

    }
    //var 
    
    

    //validate
    //cushion
    if( cate[0]==8 ){
        var item = $("input[name=cushion_size]:checked").length;
        if( item <= 0 ){
          alert('請選擇抱枕尺寸');
          return false;
        }
    }
    //rakusho
    if( cate[0]==7){
      var item = $("input[name=rakusho_size]:checked").length;
      if( item<= 0){
        alert('請選擇便利簾尺寸');
        return false;
      }
    }

    //全品項數量
    if( $('#number').val()=='0'){
      alert('請選擇數量');
      return false;
    }
    var imgURL = '';
    //cate[0] all small, product/color/Hanas_Color_Beige.jpg
    //var imgURL = '<?php echo base_url();?>img/product/color/'+cate[0]+'/'+level2+'_Color_'+color+'.jpg';
    //**alert('debug::img :'+imgURL);
    //do
    $.ajax({
      url: "<?php echo base_url();?>index.php/askprice/saveData",
      type: "post",
      dataType: 'html',
      data: {'level1':cate[1], 'level2':level2, 'standard':stand, 'color':color, 'number':number, 'count':count,
        'width':width, 'height':height, 'frame':frame, 'space':space,'remark':remark,'level1Id':cate[0], 'cushion':cushion, 'rakusho':rakusho, 'curtain':curtain},
      success:function(data){
        $("#form1").append(data);
        tablebtn();
        RowTooltip('#form1');
      },
      error:function(err){
        alert('抱歉，系統維修處理中，請稍候使用。');
      }
    });
    
  });
  //送出表單
  $(document).on('click', '#submitbtn', function(){
    //alert('test');
    form.submit();
  });

  //$("ul.navigation > li:has(ul) > a").append('<div class="arrow-bottom"></div>');
  //$("ul.navigation > li ul li:has(ul) > a").append('<div class="arrow-right"></div>');
  
});

function DelRow(DRid){
  $('#'+DRid).remove();

}
function clearList(){
  $('#cate')[0].selectedIndex = 0;
  $('#cate').trigger;
}

function tablebtn(){
  if( $("#submitbtn").size()>0 ){
    //alert("sorry, have btn.");
  }else{
    //alert('sorry, no btn');
    $("#askprice").append("<input type='submit' class='button' id='submitbtn' name='submitbtn' value='送出' />");
  }
  //else give a new one
}

  function RowTooltip(tableName){
    $(tableName).find('tr').each(function(){
      
        var trId = $(this).find('#trId').val();
        var proImg = $(this).find('#proURL').val();
        if(trId !='td_proName'){
          if(proImg != '_.jpg'){ //無圖片
            imgURL = '<?php echo base_url();?>img/product/color/'+proImg;
         
            $('#tooltip_'+trId).tooltipster({
              theme: 'tooltipster-msbt',
              position: 'top',
              content: $('<span><img src='+imgURL+' /></span>')
            });
          }
          
      
        }
        
        
    });

    
  }
</script>
 
<body> 
 <div id="wish-pool" class="wish-pool">
  <div id="first"><br/><br/><hr/><br/>
  <form method="post" id="askprice" name="askprice" action="<?php echo site_url('askprice/send_form');?>">
  <table class='table-form' id='form1' name='form1'>
    <tr><th><input type='hidden' id='trId' value='td_proName' />商品種類</th><th id="td_proSer">系列</th><th id="td_proSta">規格</th><th id="td_proCor">款式 / 顏色</th><th id="td_proNum">數量</th><th id="td_proWid">寬</th><th id="td_proHei">高</th><th id="td_proFrame">安裝</th><th id="td_proPos">備註</th><th>刪除</th></tr>
    
  </form>
  </div>
  </div>
  <style>
  select{
    font-size: 12px;
  }
/* button */
.table-form .btn_div{
  position: relative;
  float: left;
  width: 500px;
  margin-top: 20px;
  margin-bottom: 80px;
  text-align:center;
}
.button{
  cursor: pointer;
  border: 0.5pt solid #DCDDDD;
  color:#000000;
  background-color: #f3f3f3;
  font-size:12px;
  font-weight:bold;
  text-decoration:none;
  text-transform:uppercase;  
  width: 60px;
  height: 40px;
  margin: 0 50%;
  margin-top: 30px;
  
} 
#submitbtn{

}
.table_btn{
  left: 450px;
}
/*table */
.table-form {
  font-size:13px;
  margin-right:22px;
  
  width: 100%;
  border: 0.5pt solid #DCDDDD;     
}
.table-form td, th{
    line-height: 12px;
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
/*
.table-form td input:hover, select:hover, textarea:hover{
  background-color: #f5f5f5;
}
*/
.table-form input:focus{
  background-color: #f5f5f5;
}
.table-form .point{
    color:#fa0330;
}

.table-form .textarea{
    margin: 10px;   
}

#td_proName{
  width: 8%;
}
#td_proSer{
  width: 17%;
}
#td_proSta{
  width: 20%;
}
#td_proCor{
  width: 13%;
}
#td_proNum{
  width: 5%;
}
#td_proNo{
  width: 3%;
}
#td_proWid{
  width: 6%;
}
#td_proHei{
  width: 6%;
}
#td_proFrame{
  width: 5%;
}
#td_proPos{
  width: 13%;
}
#proMark{
  color: blue;
}
.small_col{
  width: 50px;
}
.normal_col{
  width: 80px;
}
#form1 a{
  text-decoration: underline;
}
  </style>
</body>
</html>