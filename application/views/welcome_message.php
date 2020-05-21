<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo base_url();?>css/default.css" type="text/css">

<script type="text/javascript" src="<?php echo base_url();?>js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.scrollTo-1.4.2-min.js"></script>

<!-- slider -->
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.nivo.slider.pack.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>themes/default/default.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url();?>css/nivo-slider.css" type="text/css" />

<style>
</style>
<script type="text/javascript">
$(window).load(function(){
	$('#slider').nivoSlider();
});
</script>
<style>
.sliderdiv{
	margin: 0,auto;
}
/* CSS Document */
#intro{
	color: white;
	height: 680px;
	margin: 0 auto;
	padding: 0;
	position: relative;
	overflow-x:hidden;
}

/* slider */
.nivoSlider {
	position:relative;
	width:100%;
	height:auto;
	overflow: hidden;
	margin: 0 auto;

}
.nivoSlider img {
	position:absolute;
	top:0px;
	left:0px;
	max-width: none; /*[ori] none;*/
}
.nivo-main-image {
	display: block !important;
	position: relative !important; 
	width: 100% !important;
}

/* If an image is wrapped in a link */
.nivoSlider a.nivo-imageLink {
	position:absolute;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	border:0;
	padding:0;
	margin:0;
	z-index:6;
	display:none;
	background:white; 
	filter:alpha(opacity=0); 
	opacity:0;
}
/* The slices and boxes in the Slider */
.nivo-slice {
	display:block;
	position:absolute;
	z-index:5;
	height:100%;
	top:0;
}
.nivo-box {
	display:block;
	position:absolute;
	z-index:5;
	overflow:hidden;
}
.nivo-box img { display:block; }

/* Caption styles */
.nivo-caption {
	position:absolute;
	left:0px;
	bottom:0px;
	background:#000;
	color:#fff;
	width:100%;
	z-index:8;
	padding: 5px 10px;
	opacity: 0.8;
	overflow: hidden;
	display: none;
	-moz-opacity: 0.8;
	filter:alpha(opacity=8);
	-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
	-moz-box-sizing: border-box;    /* Firefox, other Gecko */
	box-sizing: border-box;         /* Opera/IE 8+ */
}
.nivo-caption p {
	padding:5px;
	margin:0;
}
.nivo-caption a {
	display:inline !important;
}
.nivo-html-caption {
    display:none;
}
/* Direction nav styles (e.g. Next & Prev) */
.nivo-directionNav a {
	position:absolute;
	top:45%;
	z-index:9;
	cursor:pointer;
}
.nivo-prevNav {
	left:0px;
}
.nivo-nextNav {
	right:0px;
}
/* Control nav styles (e.g. 1,2,3...) */
.nivo-controlNav {
	text-align:left;
	position: absolute;
	top: 555px;
	z-index: 7;

}
.nivo-controlNav a {
	cursor:pointer;
}
.nivo-controlNav a.active {
	font-weight:bold;

}
</style>
<script>
$(document).ready(function(){
	$('#nav').localScroll(800);
	
	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	$('#intro').parallax("50%", 0.1);
	$('.story').parallax("50%", 3.1);
	$('.float-word1').parallax("50%", 1.8);
	$('.blog').parallax("50%", 2.9);
	$('.case').parallax("50%", 1.1);
	$('.float-left').parallax("30%", 0.1);
	$('.ballchain').parallax("50%",0.1);
	$('.video').parallax("50%",0.3);
	/*
	$('.more').parallax("50%", 0.1);
	
	$('#second').parallax("50%", 0.1);
	$('.bg').parallax("50%", 0.4);
	$('#third').parallax("50%", 0.3);
	*/
})
</script>
<div id="content">
	<div id="intro">
		<div class="story">
	    	<div class="sliderdiv">
				<div class="slider-wrapper theme-default" style="width:1000px;">
					<div id="slider" class="nivoSlider" >
						<img src="<?php echo base_url();?>img/index/slide1.jpg"/>
						<img src="<?php echo base_url();?>img/index/slide5.jpg"/>
						<img src="<?php echo base_url();?>img/index/slide3.jpg"/>
						<img src="<?php echo base_url();?>img/index/slide4.jpg"/>
					</div>
				</div>
			</div>
	    </div> <!--.story-->
	</div> <!--#intro-->		
</div>

