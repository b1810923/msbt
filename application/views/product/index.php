<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/masonry.js" type="text/javascript"></script>

<script>

	$(function(){
		$('#allProContent').imagesLoaded(function(){
			$('#allProContent').masonry({
				itemSelector: '.pro_box',
				columnWidth: 30,
				animate: true
			});
		});
	});
</script>
<div id="content">
	<div id="allProContent" style="width:1100px;overflow:hidden;margin:0 auto;">
		<div class="pro_box">
			<h4><a href="<?php echo site_url();?>product/string">線簾 String Curtain</a></h4>
			<div class="proitems">
				<ul><li><a class="items" href="<?php echo site_url();?>product/misua">Misua 線簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/wolan">Wolan 掛飾</a></li>
				</ul></div>
			<a href="<?php echo site_url();?>/product/string"><img title="線簾 String Curtain" alt="線簾 String Curtain/窗簾" class="proImg" src="<?php echo base_url();?>img/product/all/StringCurtain.jpg" /></a>
		</div>
		<div class="pro_box">
			<h4><a href="<?php echo site_url();?>product/venetian">百葉簾 Venetian Blind</a></h4>
			<div class="proitems">
				<ul>
					<li><a class="items" href="<?php echo site_url();?>product/bienzen">Bienzen 竹編木百葉簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/pimu">Pimu 實木百葉簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/bairay">Bairay 無拉繩鋁百葉簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/fenla">Fenla 布織百葉簾</a></li>
				</ul>
			</div>
			<a href="<?php echo site_url();?>product/venetian"><img title="百葉簾 Venetian Blind" alt="百葉簾 Venetian Blind/窗簾" class="proImg" src="<?php echo base_url();?>img/product/all/VenetianBlind.jpg" /></a>
		</div>
		<div class="pro_box">
			<h4><a href="<?php echo site_url();?>product/roller">捲簾 Roller Blind</a></h4>
			<div class="proitems">
				<ul>
					<li><a class="items" href="<?php echo site_url();?>product/tiken">Tiken 原色捲簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/taoza">Taoza 紙編捲簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/zaiki">Zaiki 設計捲簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/zicy">Zicy 印花捲簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/ritao">Ritao 透光捲簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/aibo">Aibo 陽光面料捲簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/veyem">Veyem 植絨捲簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/ladiam">Ladiam 麂皮絨捲簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/emmi">Emmi 遮光捲簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/sakin">Sakin 平紋遮光捲簾</a></li>
				</ul>
			</div>
			<a href="<?php echo site_url();?>product/roller"><img title="捲簾 Roller Blind" alt="捲簾 Roller Blind/窗簾" class="proImg" src="<?php echo base_url();?>img/product/all/RollerBlind.jpg" /></a>
		</div>
		<div class="pro_box">
			<h4><a href="<?php echo site_url();?>product/double">斑馬簾 Double Roller Blind</a></h4>
			<div class="proitems">
				<ul>
					<li><a class="items" href="<?php echo site_url();?>product/sima">Sima 斑馬簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/simaXL">Sima-XL 寬版斑馬簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/seda">Seda 細織斑馬簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/nonya">Nonya 條紋斑馬簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/yoka">Yoka 遮光斑馬簾</a></li>
				</ul>
			</div>
			<a href="<?php echo site_url();?>product/double"><img title="斑馬簾 Double Roller Blind" alt="斑馬簾 Double Roller Blind/窗簾" class="proImg" src="<?php echo base_url();?>img/product/all/DoubleRollerBlind.jpg" /></a>
		</div>
		<div class="pro_box">
			<h4><a href="<?php echo site_url();?>product/honeycomb">蜂巢簾 Honeycomb Shade</a></h4>
			<div class="proitems">
				<ul>
					<li><a class="items" href="<?php echo site_url();?>product/vali">Vali 無紡蜂巢簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/wagi">Wagi 布織蜂巢簾</a></li>
				</ul>
			</div>
			<a href="<?php echo site_url();?>product/honeycomb"><img title="蜂巢簾 Honeycomb Shade" alt="蜂巢簾 Honeycomb Shade/窗簾" class="proImg" src="<?php echo base_url();?>img/product/all/Honeycomb.jpg" /></a>
		</div>
		<div class="pro_box">
			<h4><a href="<?php echo site_url();?>product/vertical">直立簾 Vertical Blind</a></h4>
			<div class="proitems">
				<ul>
					<li><a class="items" href="<?php echo site_url();?>product/hanas">Hanas 柔紗直立簾</a></li>
				</ul>
			</div>
			<a href="<?php echo site_url();?>product/vertical"><img title="直立簾 Vertical Blind" alt="直立簾 Vertical Blind/窗簾" class="proImg" src="<?php echo base_url();?>img/product/all/VerticalBlind.jpg" /></a>
		</div>
		
		<div class="pro_box">
			<h4><a href="<?php echo site_url();?>product/cushion">抱枕 Cushion</a></h4>
			<div class="proitems">
				<ul>
					<li><a class="items" href="<?php echo site_url();?>/product/basa">Basa 原色抱枕</a></li>
					<li><a class="items" href="<?php echo site_url();?>/product/canli">Canli 彩印帆布抱枕</a></li>
					<li><a class="items" href="<?php echo site_url();?>/product/phula">Phula 雪尼爾緹花抱枕</a></li>
					<li><a class="items" href="<?php echo site_url();?>/product/yito">Yito 繡花抱枕</a></li>
					<li><a class="items" href="<?php echo site_url();?>/product/dari">Dari 點線抱枕</a></li>
					<li><a class="items" href="<?php echo site_url();?>/product/naka">Naka 自然風抱枕</a></li>
					<li><a class="items" href="<?php echo site_url();?>/product/sardi">Sardi 短毛抱枕</a></li>
					<li><a class="items" href="<?php echo site_url();?>/product/patti">Patti 緹花抱枕</a></li>
					<li><a class="items" href="<?php echo site_url();?>/product/varin">Varin 多彩抱枕</a></li>
					<li><a class="items" href="<?php echo site_url();?>/product/laina">Laina 雙色抱枕</a></li>
				</ul>
			</div>
			<a href="<?php echo site_url();?>product/cushion"><img title="抱枕 Cushion" alt="抱枕 Cushion/窗簾" class="proImg" src="<?php echo base_url();?>img/product/all/Cushion.jpg" /></a>
		</div>
		<div class="pro_box">
			<h4><a href="<?php echo site_url();?>product/tempshade">便利簾 Temp Shade</a></h4>
			<div class="proitems">
				<ul>
					<li><a class="items" href="<?php echo site_url();?>product/rakusho">Rakusho 便利簾</a></li>
				</ul>
			</div>
			<a href="<?php echo site_url();?>product/tempshade"><img title="便利簾 Temp Shade" alt="便利簾 Temp Shade/窗簾" class="proImg" src="<?php echo base_url();?>img/product/all/TempShade.jpg" /></a>
		</div>
		<div class="pro_box">
			<h4><a href="<?php echo site_url();?>product/curtain">布簾 / 紗簾 Curtain</a></h4>
			<div class="proitems">
				<ul>
					<li><a class="items" href="<?php echo site_url();?>product/dazo">Dazo 設計紗簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/donzu">Donzu 緹花布簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/haju">Haju 裝飾布簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/limya">Limya 彩藝布簾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/amra">Amra 遮光布簾</a></li>
				</ul>
			</div>
			<a href="<?php echo site_url();?>product/curtain"><img title="布簾 / 紗簾 Curtain" alt="布簾 / 紗簾 Curtain/窗簾" class="proImg" src="<?php echo base_url();?>img/product/all/Curtain.jpg" /></a>
		</div>
		<div class="pro_box">
			<h4><a href="<?php echo site_url();?>product/accessories">窗簾配件 Accessories</a></h4>
			<div class="proitems">
				<ul>
					<li><a class="items" href="<?php echo site_url();?>product/pole">Pole 窗簾桿</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/bracket">Bracket 托架</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/finial">Finial 飾頭</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/extra">Extra 配件</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/tassel">Tassel 珠鍊拉繩垂飾</a></li>
					<li><a class="items" href="<?php echo site_url();?>product/ballchain">Ballchain 金屬珠鍊</a></li>
				</ul>
			</div>
			<a href="<?php echo site_url();?>product/accessories"><img title="窗簾配件 Accessories" alt="窗簾配件 Accessories/窗簾" class="proImg" src="<?php echo base_url();?>img/product/all/Accessories.jpg" /></a>
		</div>
		<div class="pro_box" id="others">
		<span id="others">斑馬窗簾</span>
		</div>
	</div>
	<br/><br/><br/>
</div>
<!-- left menu 左側選單效果-->
<style>
#product{
	color: #a82124;
}
#others{
	border: 0;
	color:white;
}
</style>
</div>