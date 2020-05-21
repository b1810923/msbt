<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<script src="<?php echo base_url();?>js/baseJS.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>js/jquery-1.8.3.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/default.css" />

<style>
.red
{
color:#a82124;
}
</style>
</head>
<body>
  <div id="website">
<div id="header">
  <div id="logo"><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>img/msbt_logo.jpg"></a></div>
  <div id="menu_icon">
  <div id="contact_us">
    <ul>
      <li>
        <img id="m_phone_g" name="phone" width="39" border="0" src="<?php echo base_url();?>img/header/g_phone.jpg" style="cursor: pointer;" onclick="change_icon('phone')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_phone_g','','<?php echo base_url();?>img/header/r_phone.jpg',1)"/>
        <img id="m_phone_r" name="phone" width="39" border="0" src="<?php echo base_url();?>img/header/r_phone.jpg" style="cursor: pointer;" onclick="change_icon('phone')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_phone_r','','<?php echo base_url();?>img/header/r_phone.jpg',1)"/>
      </li>
      <li>
        <img id="m_email_g" name="email" width="39" border="0" src="<?php echo base_url();?>img/header/g_email.jpg" style="cursor: pointer;" onclick="change_icon('email')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_email_g','','<?php echo base_url();?>img/header/r_email.jpg',1)"/>
        <img id="m_email_r" name="email" width="39" border="0"  src="<?php echo base_url();?>img/header/r_email.jpg" style="cursor: pointer;" onclick="change_icon('email')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_email_r','','<?php echo base_url();?>img/header/r_email.jpg',1)"/>
        
      </li>
      <li>
        <img id="m_fb_g" name="fb" height="27" border="0" src="<?php echo base_url();?>img/header/g_fb.jpg" style="cursor: pointer;" onclick="change_icon('fb')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_fb_g','','<?php echo base_url();?>img/header/r_fb.jpg',1)"/>
        <img id="m_fb_r" name="fb" height="27" border="0" src="<?php echo base_url();?>img/header/r_fb.jpg" style="cursor: pointer;" onclick="change_icon('fb')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_fb_r','','<?php echo base_url();?>img/header/r_fb.jpg',1)"/>
        
      </li>
      <li>
        <img id="m_youtube_g" name="youtube" width="26" border="0" src="<?php echo base_url();?>img/header/g_youtube.jpg" style="cursor: pointer;" onclick="change_icon('youtube')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_youtube_g','','<?php echo base_url();?>img/header/r_youtube.jpg',1)"/>
        <img id="m_youtube_r" name="youtube" width="26" border="0" src="<?php echo base_url();?>img/header/r_youtube.jpg" style="cursor: pointer;" onclick="change_icon('youtube')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_youtube_r','','<?php echo base_url();?>img/header/r_youtube.jpg',1)"/>
        
      </li>
    </ul>
  </div>
  <div id="info">
    <span id="m_phone" style="cursor: auto;">03-4880250</span>
    <span id="m_email" style="cursor: auto;">service@msbt.com.tw</span>
  </div>
  <div id="main_menu">
    <ul>
      <li>
        <a id="msbt" onclick="linkChange('msbt','<?php echo site_url('msbt');?>');linkSelect('msbt','main_menu')">關於我們
        </a>
      </li>
      <li>
        <a id="latest" onclick="linkChange('latest','<?php echo site_url('latest');?>');linkSelect('latest','main_menu')">最新消息
        </a>
      </li>
      <li>
        <a id="product" onclick="linkChange('product','<?php echo site_url('product');?>');linkSelect('product','main_menu')">商品全覽


        
        </a>
      </li>
      <li>
        <a id="sample" onclick="linkChange('sample','<?php echo site_url('sample');?>');linkSelect('sample','main_menu')">
        樣本索取
        </a>
      </li>
      <li>
        <a id="setup" onclick="linkChange('setup','<?php echo site_url('setup');?>');linkSelect('setup','main_menu')">
        丈量安裝
        </a>
      </li>
      <li>
        <a id="contact" onclick="linkChange('contact','<?php echo site_url('contact');?>');linkSelect('contact','main_menu')">
        聯絡我們
        </a>
      </li>
    </ul>
  </div>
  </div>
</div>
