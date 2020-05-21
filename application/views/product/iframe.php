<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script src="<?php echo base_url();?>js/validate/lib/jquery.js"></script>
	
	<script src="<?php echo base_url();?>js/validate/dist/jquery.validate.js"></script>

	<title>fancyBox - iframe demo</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<style>
	#sampleMenu{
		float: left;
		color:white;
	}
	#table{
		float:right;
	}
/*table */
.table-form {
  float: right;
  font-size:13px;
  margin-right:22px;
  
  width: 765px;
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
  width: 500px;
  margin-top: 20px;
  margin-bottom: 80px;
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
  width:100px;
}
.error{
  color:red;
}

.small{
  font-size: 11px;
  margin-left: 5px;
}
#SystemPassCode{
  margin: auto 0;
}

.no li{ 
 line-height: 1.3em;   /* 文字行距 */
 letter-spacing: 0.05em; 
}
.ulagree{
  line-height: 1.7em;   /* 文字行距 */
  letter-spacing: 0.15em;  /*文字間距 */
}
.noitem{
  width: 108px;
}
#agree{
	margin-left: 215px;
}
/*validate*/
	
	#form1 label.error {
		margin-left: 10px;
		width: auto;
		display: inline;
	}
</style>
<script>
	$.validator.setDefaults({
		submitHandler: function(form) {
			var passCode =$('#SystemPassCode').val();
			$.ajax({
				url: '<?php echo base_url();?>index.php/sample/new_validate_captcha',
				dataType: 'html',
				type: 'post',
				data:{'SystemPassCode':passCode,'SamplesNumber':$('#items').val()},
				error:function(err){
					alert('sorry, error happend.');
				},
				success:function(data){
					//alert('[debug]return data:'+data);
					  data = data.Trim();
		              if(data == 'diff'){
		                alert('驗證碼輸入錯誤!!');
		              }else if(data == 'no'){
		                alert('尚未選取任何品項\n敬請至前一頁左上角邊欄內勾選');
		              }else if(data == 'match'){
		                alert("幔室布緹感謝您索取樣本\n申請遞送已完成"); 
		                form.submit(); // 送出表單
		                 
		              }else if(data == 'nocaptcha'){
		                alert('請填寫驗證碼');
		              }else if(data == 'error'){
		                alert('系統維修中，請稍後使用');
		              }
				}
			});

		}
	});
	$().ready(function() {
		
		// validate signup form on keyup and submit
		$("#form1").validate({
			rules: {
				username: {
					required: true,
					minlength: 2
				},
				email: {
					required: true,
					email: true
				},
				add_code:{
					number: true
				},
				addressplace:{
					required: true,
					minlength: 5
				},
				cellphone:{
					required: true,
					number: true,
					minlength: 10
				},
				agree: "required"
			},
			messages: {
				username: {
					required: "請填寫收件姓名",
					minlength: "請填寫正確姓名"
				},
				gender:{
					required:"此為必填欄位"
				},
				add_code:{
					number: "請填入數字"
				},
				addressplace:{
					required:"請填寫地址",
					minlength:"請填寫正確的地址"
				},
				cellphone:{
					required:"請填寫手機",
					number: "請填入數字",
					minlength:"請填正確的手機號碼"
				},
				email:{
					required:"請填寫email",
					email:"請填寫正確email格式"
				}, 
				agree: "* "
			}

		});

		

		//code to hide topic selection, disable for demo
		var newsletter = $("#newsletter");
		// newsletter topics are optional, hide at first
		var inital = newsletter.is(":checked");
		var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
		var topicInputs = topics.find("input").attr("disabled", !inital);
		// show when newsletter is checked
		newsletter.click(function() {
			topics[this.checked ? "removeClass" : "addClass"]("gray");
			topicInputs.attr("disabled", !this.checked);
		});

	});
	</script>
	<style>
	.gray{
		color: #797979;
	}
	#commentForm {
		width: 500px;
	}
	#commentForm label {
		width: 250px;
	}
	#commentForm label.error, #commentForm input.submit {
		margin-left: 253px;
	}
	#form1 {
		width: 670px;
	}
	#form1 label.error {
		margin-left: 10px;
		width: auto;
		display: inline;
	}
	#newsletter_topics label.error {
		display: none;
		margin-left: 103px;
	}
	#msbtlogo{
		color: #a82124;
	}
	#cap_img img{
		width:100px;
	}
	.btn_div input{
		margin-left: 15px;
	}
	</style>
</head>
<body>

<div id="content">
  <div id="sampleContent">
<div id="sampleMenu">SSNILoveU</div>
<div id="table">
<form class="cmxform" id="form1" name="form1" method="post" action="<?php echo site_url('sample/new_samples_gets');?>">
	 <table class="table-form">
	 	<tr>
			<th>
				<label for="username">收件姓名：<span class="point">*</span></label>
			</th>
			<td>
				<input id="username" name="username" type="text">
			</td>
			<th rowspan="6">寄送內容</th>
			<td rowspan="6" class="no"><?php echo $items;?></td>
		</tr>
		<tr>
			<th>	
				<label>稱謂：<span class="point">*</span></label>
			</th>
			<td>
				<label for="gender_male">
					<input type="radio" id="gender_male" value="先生" name="gender" required>先生
				</label>
				<label for="gender_female">
					<input type="radio" id="gender_female" value="小姐" name="gender">小姐
				</label>
				<label for="gender" class="error"></label>
			</td>
			
		</tr>
		<tr>
			<th><lable>寄送地址：<span class="point">*</span></label></th>
			<td>郵遞區號<input id="add_code" name="add_code" class="add_zipcode" minlength="3" maxlength="5"><span class="point"><a href="http://www.post.gov.tw/post/internet/Postal/index.jsp?ID=208" target="_blank">中華郵政-郵遞區號查詢</a></span> <br/>
			地址<input id="addressplace" name="addressplace" class="add_require">
			</td>
		</tr>
		<tr>
			<th>聯絡電話：<span class="point">*</span></th>
			<td>市話<input id="tel_code" name="tel_code" class="tel_zipcode" >-<input id="tel" name="tel">
			<br/>手機<input id="cellphone" name="cellphone" minlength="10" maxlength="10">
			</td>
		</tr>
		<tr>
			<th><label for="email">E-mail：<span class="point">*</span></label></th>
			<td><input id="email" name="email" type="email"  class="add_require">
			<br/><span class="point small">請務必填寫E-mail，若電話聯繫不到將以信件通知</span>
		</td>
		</tr>
		<tr>
		    <th>其他備註：</th>
		    <td><textarea name="note" rows="5" width="270" class="other_required"></textarea></td>
		</tr>

		<tr>
			<th>服務條款：<span class="point">*</span></th>
			<td colspan="3"><label for="agree">
				<ul class="ulagree"><li>1.樣本與實際產品為不同批次生產之物料，偶有些許顏色差異。<li/>
					<li>2.樣本採郵局平信寄送，約需3～5個工作天（不包含假日）。</li>
					<li>3.使用者透過本網站提供之資料，同意幔室布緹有限公司於合理範圍內蒐集、保存及使用，以提供使用者其他資訊或服務、或作為行銷統計資料。</li><br/>
				</ul>
				</label>
				<span id="agree"><input type="checkbox" class="checkbox" id="agree" name="agree"><label for="agree" class="ulagree">我已閱讀並同意上述條款說明</label></span></td>
			
		</tr>
		<tr>
		    <th>驗證碼：</th>
		    <td id="cap_img" colspan="3"><?php 
				// 隨機產生系統驗證碼
		      echo $cap_img;
		    ?> <input type="text" class="SystemPassCode" name="SystemPassCode" id="SystemPassCode"></td>
		</tr>
		<input type="hidden" name="items" id="items" value="<?php echo $number;?>" />
		<input type="hidden" name="checkvalue" id="checkvalue" value="<?php echo $check;?>" />
		<input type="hidden" name="samples" id="samples" value="<?php echo $check;?>" />
	</table><div class="btn_div"><input class="buttons" type="button" value="上一頁" id="last" onclick="history.go(-1);"><input class="buttons" type="submit" value="送出"></div>
	</form>
 <br/><br/>
  </div> <!-- end samples -->
</div> <!-- end table -->

</div><!-- end samplecontent -->
</div><!-- end content -->

</body>
</html>
