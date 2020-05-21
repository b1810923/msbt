<style type="text/css">
#pageLatest{
	width: 1050px;
}
.pics div{
	float:left;

}
.gallery{
	margin-right: 10px;
	margin-bottom: 10px;
	padding: 0;
	width: 242px;
	height: 200px;
	overflow: hidden;
	position: relative;
}

.gallery img{
	border: 0;
	
}

.gallery .caption{
	position: absolute;
	/* .gallery width - .caption的左右padding */
	width: 242px;
	height: 200px;
	top: 150px; 
	background-color: #333;
	color: white;
	filter:alpa(opacity=80);   /* old IE */
	filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=80,FinishOpacity=15, Style=3, StartX=0, FinishX=100, StartY=0,FinishY=16); /*supported by current IE*/
	-moz-opacity:0.7;          /* Moz + FF */
	opacity:0.7;  

}

.gallery .caption h2{
	margin: 0;
	padding: 10px 50px 5px; /*up left bottom*/

}

.gallery .caption a{
	text-decoration: none;
	color: white;
}

.gallery .caption div{
	padding: 5px 5px;
}

.gallery img{
	margin-right: 10px;
	margin-bottom: 10px;
	overflow: hidden;
}
.getW{ max-height:200px;overflow: hidden;}
.getH{ max-width: 242px;overflow: hidden;
}
.gallery a:hover{
	color: #fcff19;
}
.gallery .title{
	margin: 10px;
	margin-top:15px;
	font-size: 15px;
	line-height: 25px;
}
.gallery .readmore{
	font-size: 10px;
	margin: 10px;
	margin-top:15px;
	
}
.more{
	background:#f7f7f7;
	background:-moz-linear-gradient(top,#f7f7f7 0%,#e7e7e7 100%);
	background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#f7f7f7),color-stop(100%,#e7e7e7));
	background:-webkit-linear-gradient(top,#f7f7f7 0%,#e7e7e7 100%);
	background:-o-linear-gradient(top,#f7f7f7 0%,#e7e7e7 100%);
	background:-ms-linear-gradient(top,#f7f7f7 0%,#e7e7e7 100%);
	background:linear-gradient(top,#f7f7f7 0%,#e7e7e7 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7',endColorstr='#e7e7e7',GradientType=0);
	padding:8px 13px;
	color:#595757;
	font-family:'Georgia',sans-serif;
	font-size:17px;
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border:1px solid #f4f4f4;
	width: 242px;
	height: 200px;
}
.more:hover{
	background:#e7e7e7;
	background:-moz-linear-gradient(top,#e7e7e7 0%,#f7f7f7 100%);
	background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#e7e7e7),color-stop(100%,#f7f7f7));
	background:-webkit-linear-gradient(top,#e7e7e7 0%,#f7f7f7 100%);
	background:-o-linear-gradient(top,#e7e7e7 0%,#f7f7f7 100%);
	background:-ms-linear-gradient(top,#e7e7e7 0%,#f7f7f7 100%);
	background:linear-gradient(top,#e7e7e7 0%,#f7f7f7 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e7e7e7',endColorstr='#f7f7f7',GradientType=0);
	padding:8px 13px;
	color:black;
	font-family:'Georgia',sans-serif;
	font-size:17px;
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border:1px solid black;
	width: 242px;
	height: 200px;

}
#pageLatest .engtitle{
	margin-top: 5px;
	font-size: 16px;
	color:black;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	// 預設標題區塊 .gallery .caption 的 top
	var _titleHeight = 50;
	$('.gallery').each(function(){
		// 先取得區塊的高及標題區塊等資料
		var $this = $(this), 
			_height = $this.height(), 
			$caption = $('.caption', $this),
			_captionHeight = $caption.outerHeight(true),
			_speed = 250;
 
		// 當滑鼠移動到區塊上時
		$this.hover(function(){
			// 讓 $caption 往上移動
			$caption.stop().animate({
				//top: _height - _captionHeight
				top: 0
			}, _speed);
		}, function(){
			// 讓 $caption 移回原位
			$caption.stop().animate({
				top: _height - _titleHeight
			}, _speed);
		});
	});
});
</script>
<div id="content">
	<div id="pageLatest">
		<div class="pics">
		<div class="EngCap gallery">
			<h1>Latest<br/>News</h1>
			<div class="engtitle">最新消息</div>
		</div>
		
		<?php
			$key = 0;
			foreach($abctest as $key => $posts){
				$title = mb_substr($posts['title'], 0, 10, 'utf8');
				echo "<div class='gallery'>";
					echo $posts['img'];
					echo "<div class='caption'>";
						echo "<div class='title'><a href='".$posts['link']."' target='_blank'>".$posts['title']."<span class='readmore'>... more</span></a></div>";
						
					echo "</div>";
				echo "</div>";
				$key++;
				if($key==6) break;
			}
			
		?>
		</div>
		<input type="button" class="more" value="Read More..." style="cursor: pointer;" onclick="javascript:window.open('http://msbtblog.wordpress.com')" />	
	</div>
</div>
<script type="text/javascript">
$('.pics img').each(function(){
	var pic_w = $(this).width();
	var pic_h = $(this).height();

	if(pic_w > pic_h){
		$(this).addClass("getW");
	}else{
		$(this).addClass("getH");
	}
});
</script>
<style>
#latest{
	color: #a82124;
}
</style>
</div>