<script src="<?php echo base_url();?>js/baseJS.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/allCSS.css" />
</head>
<body>
  <div id="website">
<div id="header">
  <div id="logo"><a href="<?php echo base_url('msbt/msbt');?>"><img src="<?php echo base_url();?>img/msbt_logo.jpg"></a></div>
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
        <img id="m_youtube_g" name="youtube" width="61" border="0" src="<?php echo base_url();?>img/header/g_youtube.jpg" style="cursor: pointer;" onclick="change_icon('youtube')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_youtube_g','','<?php echo base_url();?>img/header/r_youtube.jpg',1)"/>
        <img id="m_youtube_r" name="youtube" width="61" border="0" src="<?php echo base_url();?>img/header/r_youtube.jpg" style="cursor: pointer;" onclick="change_icon('youtube')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_youtube_r','','<?php echo base_url();?>img/header/r_youtube.jpg',1)"/>
        
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
        <a href="<?php echo site_url('msbt');?>">
        <img id="m_msbt_g" name="m_msbt" src="<?php echo base_url();?>img/header/menu_g_msbt.jpg" style="cursor: pointer;" onclick="change_icon('m_msbt')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_msbt_g','','<?php echo base_url();?>img/header/menu_l_msbt.jpg',1)"/>
        <img id="m_msbt_r" name="m_msbt" src="<?php echo base_url();?>img/header/menu_l_msbt.jpg" style="cursor: pointer;" onclick="change_icon('m_msbt')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_msbt_r','','<?php echo base_url();?>img/header/menu_l_msbt.jpg',1)"/>
        </a>
      </li>
      <li>
        <a href="<?php echo site_url('latest');?>">
        <img id="m_latest_g" name="m_latest" src="<?php echo base_url();?>img/header/menu_g_latest.jpg" style="cursor: pointer;" onclick="change_icon('m_latest')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_latest_g','','<?php echo base_url();?>img/header/menu_l_latest.jpg',1)"/>
        <img id="m_latest_r" name="m_latest" src="<?php echo base_url();?>img/header/menu_l_latest.jpg" style="cursor: pointer;" onclick="change_icon('m_latest')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_latest_r','','<?php echo base_url();?>img/header/menu_l_latest.jpg',1)"/>
        </a>
      </li>
      <li>
        <a href="<?php echo site_url('product');?>">
        <img id="m_allpro_g" name="m_allpro" src="<?php echo base_url();?>img/header/menu_g_allpro.jpg" style="cursor: pointer;" onclick="change_icon('m_allpro')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_allpro_g','','<?php echo base_url();?>img/header/menu_l_allpro.jpg',1)"/>
        <img id="m_allpro_r" name="m_allpro" src="<?php echo base_url();?>img/header/menu_l_allpro.jpg" style="cursor: pointer;" onclick="change_icon('m_allpro')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_allpro_r','','<?php echo base_url();?>img/header/menu_l_allpro.jpg',1)"/>
        </a>
      </li>
      <li>
        <a href="http://220.143.39.242/index.php/product/getsamples">
        <img id="m_sample_g" name="m_sample" src="<?php echo base_url();?>img/header/menu_g_sample.jpg" style="cursor: pointer;" onclick="change_icon('m_sample')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_sample_g','','<?php echo base_url();?>img/header/menu_l_sample.jpg',1)"/>
        <img id="m_sample_r" name="m_sample" src="<?php echo base_url();?>img/header/menu_l_sample.jpg" style="cursor: pointer;" onclick="change_icon('m_sample')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_sample_r','','<?php echo base_url();?>img/header/menu_l_sample.jpg',1)"/>
        </a>
      </li>
      <li>
        <a href="<?php echo site_url('setup');?>">
        <img id="m_setup_g" name="m_setup" src="<?php echo base_url();?>img/header/menu_g_setup.jpg" style="cursor: pointer;" onclick="change_icon('m_setup')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_setup_g','','<?php echo base_url();?>img/header/menu_l_setup.jpg',1)"/>
        <img id="m_setup_r" name="m_setup" src="<?php echo base_url();?>img/header/menu_l_setup.jpg" style="cursor: pointer;" onclick="change_icon('m_setup')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_setup_r','','<?php echo base_url();?>img/header/menu_l_setup.jpg',1)"/>
        </a>
      </li>
      <li>
        <a href="<?php echo site_url('contact');?>">
        <img id="m_contact_g" name="m_contact" src="<?php echo base_url();?>img/header/menu_g_contact.jpg" style="cursor: pointer;" onclick="change_icon('m_contact')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_contact_g','','<?php echo base_url();?>img/header/menu_l_contact.jpg',1)"/>
        <img id="m_contact_r" name="m_contact" src="<?php echo base_url();?>img/header/menu_l_contact.jpg" style="cursor: pointer;" onclick="change_icon('m_contact')" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('m_contact_r','','<?php echo base_url();?>img/header/menu_l_contact.jpg',1)"/>
        </a>
      </li>
    </ul>
  </div>
  </div>
</div>