<style>
#m_setup_g{
  display: none;
}
#m_setup_r{
  display: block;
}
</style>

    <div id="menu">
        <ul id='menus'>
          <!-- diy start -->
          <li>
            <a href="<?php echo site_url('setup/setup_diy');?>"><h3>DIY vs. 專人服務</h3></a>
          </li>
          <!-- diy end -->
          <!-- teach start -->
          <li>
            <a href="<?php echo site_url('setup/setup_teach');?>"><h3>丈量教學</h3></a>
          </li>
          <ul id="setup_teach">
            <li>
              <a href="<?php echo site_url('setup/teach_venetian');?>">
              <span onclick="toggleMenu('setup_teach','teach_venetian')">
                <img id="teach_venetian-a" name="teach_venetian" src="<?php echo base_url();?>img/leftMenu/setup/items/teach_venetian-a.jpg" onclick="change_item('teach_venetian');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('teach_venetian-a','','<?php echo base_url();?>img/leftMenu/setup/items/teach_venetian-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="teach_venetian-b" name="teach_venetian" src="<?php echo base_url();?>img/leftMenu/setup/items/teach_venetian-b.jpg" onclick="change_item('teach_venetian');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('teach_venetian-b','','<?php echo base_url();?>img/leftMenu/setup/items/teach_venetian-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span></a>
            </li>
            <li>
              <a href="<?php echo site_url('setup/teach_roller');?>">
              <span onclick="toggleMenu('setup_teach','teach_roller')">
                <img id="teach_roller-a" name="teach_roller" src="<?php echo base_url();?>img/leftMenu/setup/items/teach_roller-a.jpg" onclick="change_item('teach_roller');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('teach_roller-a','','<?php echo base_url();?>img/leftMenu/setup/items/teach_roller-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="teach_roller-b" name="teach_roller" src="<?php echo base_url();?>img/leftMenu/setup/items/teach_roller-b.jpg" onclick="change_item('teach_roller');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('teach_roller-b','','<?php echo base_url();?>img/leftMenu/setup/items/teach_roller-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span></a>
            </li>
            <li>
              <a href="<?php echo site_url('setup/teach_curtain');?>">
              <span onclick="toggleMenu('setup_teach','teach_curtain')">
                <img id="teach_curtain-a" name="teach_curtain" src="<?php echo base_url();?>img/leftMenu/setup/items/teach_curtain-a.jpg" onclick="change_item('teach_curtain');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('teach_curtain-a','','<?php echo base_url();?>img/leftMenu/setup/items/teach_curtain-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="teach_curtain-b" name="teach_curtain" src="<?php echo base_url();?>img/leftMenu/setup/items/teach_curtain-b.jpg" onclick="change_item('teach_curtain');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('teach_curtain-b','','<?php echo base_url();?>img/leftMenu/setup/items/teach_curtain-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span></a>
            </li>
          </ul>
          <!-- teach end -->
          <!-- explanation start -->
          <li>
            <a href="<?php echo site_url('setup/setup_explanation');?>">
            <span onclick="toggle('setup_explanation');">
             <img id="setup_explanation-a" name="setup_explanation" src="<?php echo base_url();?>img/leftMenu/setup/setup_explanation-a.jpg" width="173" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('setup_explanation-a','','<?php echo base_url();?>img/leftMenu/setup/setup_explanation-b.jpg',1)" onmouseout="MM_swapImgRestore()">
             <img id="setup_explanation-b" name="setup_explanation" src="<?php echo base_url();?>img/leftMenu/setup/setup_explanation-b.jpg" width="173" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('setup_explanation-b','','<?php echo base_url();?>img/leftMenu/setup/setup_explanation-b.jpg',1)" onmouseout="MM_swapImgRestore()">
            </span>
            </a>
          </li>
          <ul id="setup_explanation">
            <li>
              <a href="<?php echo site_url('setup/explain_misua');?>">
              <span onclick="toggleMenu('setup_explanation','explain_misua')">
                <img id="explain_misua-a" name="explain_misua" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_misua-a.jpg" onclick="change_item('explain_misua');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_misua-a','','<?php echo base_url();?>img/leftMenu/setup/items/explain_misua-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="explain_misua-b" name="explain_misua" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_misua-b.jpg" onclick="change_item('explain_misua');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_misua-b','','<?php echo base_url();?>img/leftMenu/setup/items/explain_misua-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span></a>
            </li>
             <li>
              <a href="<?php echo site_url('setup/explain_bienzen');?>">
              <span onclick="toggleMenu('setup_explanation','explain_bienzen')">
                <img id="explain_bienzen-a" name="explain_bienzen" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_bienzen-a.jpg" onclick="change_item('explain_bienzen');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_bienzen-a','','<?php echo base_url();?>img/leftMenu/setup/items/explain_bienzen-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="explain_bienzen-b" name="explain_bienzen" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_bienzen-b.jpg" onclick="change_item('explain_bienzen');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_bienzen-b','','<?php echo base_url();?>img/leftMenu/setup/items/explain_bienzen-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span></a>
            </li>
            <li>
              <a href="<?php echo site_url('setup/explain_pimu');?>">
              <span onclick="toggleMenu('setup_explanation','explain_pimu')">
                <img id="explain_pimu-a" name="explain_pimu" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_pimu-a.jpg" onclick="change_item('explain_pimu');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_pimu-a','','<?php echo base_url();?>img/leftMenu/setup/items/explain_pimu-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="explain_pimu-b" name="explain_pimu" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_pimu-b.jpg" onclick="change_item('explain_pimu');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_pimu-b','','<?php echo base_url();?>img/leftMenu/setup/items/explain_pimu-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span></a>
            </li>
            <li>
              <a href="<?php echo site_url('setup/explain_bairay');?>">
              <span onclick="toggleMenu('setup_explanation','explain_bairay')">
                <img id="explain_bairay-a" name="explain_bairay" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_bairay-a.jpg" onclick="change_item('explain_bairay');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_bairay-a','','<?php echo base_url();?>img/leftMenu/setup/items/explain_bairay-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="explain_bairay-b" name="explain_bairay" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_bairay-b.jpg" onclick="change_item('explain_bairay');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_bairay-b','','<?php echo base_url();?>img/leftMenu/setup/items/explain_bairay-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span></a>
            </li>
            <li>
              <a href="<?php echo site_url('setup/explain_fenla');?>">
              <span onclick="toggleMenu('setup_explanation','explain_fenla')">
                <img id="explain_fenla-a" name="explain_fenla" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_fenla-a.jpg" onclick="change_item('explain_fenla');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_fenla-a','','<?php echo base_url();?>img/leftMenu/setup/items/explain_fenla-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="explain_fenla-b" name="explain_fenla" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_fenla-b.jpg" onclick="change_item('explain_fenla');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_fenla-b','','<?php echo base_url();?>img/leftMenu/setup/items/explain_fenla-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span></a>
            </li>
            <li>
              <a href="<?php echo site_url('setup/explain_roller');?>">
              <span onclick="toggleMenu('setup_explanation','explain_roller')">
                <img id="explain_roller-a" name="explain_roller" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_roller-a.jpg" onclick="change_item('explain_roller');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_roller-a','','<?php echo base_url();?>img/leftMenu/setup/items/explain_roller-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="explain_roller-b" name="explain_roller" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_roller-b.jpg" onclick="change_item('explain_roller');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_roller-b','','<?php echo base_url();?>img/leftMenu/setup/items/explain_roller-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span></a>
            </li>
            <li>
              <a href="<?php echo site_url('setup/explain_doubleR');?>">
              <span onclick="toggleMenu('setup_explanation','explain_doubleR')">
                <img id="explain_doubleR-a" name="explain_doubleR" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_doubleR-a.jpg" onclick="change_item('explain_doubleR');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_doubleR-a','','<?php echo base_url();?>img/leftMenu/setup/items/explain_doubleR-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="explain_doubleR-b" name="explain_doubleR" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_doubleR-b.jpg" onclick="change_item('explain_doubleR');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_doubleR-b','','<?php echo base_url();?>img/leftMenu/setup/items/explain_doubleR-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span></a>
            </li>
            <li>
              <a href="<?php echo site_url('setup/explain_double');?>">
              <span onclick="toggleMenu('setup_explanation','explain_double')">
                <img id="explain_double-a" name="explain_double" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_double-a.jpg" onclick="change_item('explain_double');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_double-a','','<?php echo base_url();?>img/leftMenu/setup/items/explain_double-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="explain_double-b" name="explain_double" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_double-b.jpg" onclick="change_item('explain_double');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_double-b','','<?php echo base_url();?>img/leftMenu/setup/items/explain_double-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span></a>
            </li>
            <li>
              <a href="<?php echo site_url('setup/explain_vali');?>">
              <span onclick="toggleMenu('setup_explanation','explain_vali')">
                <img id="explain_vali-a" name="explain_vali" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_vali-a.jpg" onclick="change_item('explain_vali');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_vali-a','','<?php echo base_url();?>img/leftMenu/setup/items/explain_vali-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="explain_vali-b" name="explain_vali" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_vali-b.jpg" onclick="change_item('explain_vali');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_vali-b','','<?php echo base_url();?>img/leftMenu/setup/items/explain_vali-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span></a>
            </li>
            <li>
              <a href="<?php echo site_url('setup/explain_wagi');?>">
              <span onclick="toggleMenu('setup_explanation','explain_wagi')">
                <img id="explain_wagi-a" name="explain_wagi" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_wagi-a.jpg" onclick="change_item('explain_wagi');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_wagi-a','','<?php echo base_url();?>img/leftMenu/setup/items/explain_wagi-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="explain_wagi-b" name="explain_wagi" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_wagi-b.jpg" onclick="change_item('explain_wagi');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_wagi-b','','<?php echo base_url();?>img/leftMenu/setup/items/explain_wagi-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span></a>
            </li>
            <li>
              <a href="<?php echo site_url('setup/explain_hanas');?>">
              <span onclick="toggleMenu('setup_explanation','explain_hanas')">
                <img id="explain_hanas-a" name="explain_hanas" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_hanas-a.jpg" onclick="change_item('explain_hanas');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_hanas-a','','<?php echo base_url();?>img/leftMenu/setup/items/explain_hanas-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="explain_hanas-b" name="explain_hanas" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_hanas-b.jpg" onclick="change_item('explain_hanas');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_hanas-b','','<?php echo base_url();?>img/leftMenu/setup/items/explain_hanas-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span></a>
            </li>
            <li>
              <a href="<?php echo site_url('setup/explain_rakusho');?>">
              <span onclick="toggleMenu('setup_explanation','explain_rakusho')">
                <img id="explain_rakusho-a" name="explain_rakusho" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_rakusho-a.jpg" onclick="change_item('explain_rakusho');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_rakusho-a','','<?php echo base_url();?>img/leftMenu/setup/items/explain_rakusho-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="explain_rakusho-b" name="explain_rakusho" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_rakusho-b.jpg" onclick="change_item('explain_rakusho');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_rakusho-b','','<?php echo base_url();?>img/leftMenu/setup/items/explain_rakusho-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span></a>
            </li>
            <li>
              <a href="<?php echo site_url('setup/explain_curtain');?>">
              <span onclick="toggleMenu('setup_explanation','explain_curtain')">
                <img id="explain_curtain-a" name="explain_curtain" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_curtain-a.jpg" onclick="change_item('explain_curtain');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_curtain-a','','<?php echo base_url();?>img/leftMenu/setup/items/explain_curtain-b.jpg',1)" onmouseout="MM_swapImgRestore()">
                <img id="explain_curtain-b" name="explain_curtain" src="<?php echo base_url();?>img/leftMenu/setup/items/explain_curtain-b.jpg" onclick="change_item('explain_curtain');" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('explain_curtain-b','','<?php echo base_url();?>img/leftMenu/setup/items/explain_curtain-b.jpg',1)" onmouseout="MM_swapImgRestore()">
              </span></a>
            </li>
          </ul>
          <!-- explanation end -->
          <!-- case start -->
          <li>
            <a href="http://msbtblog.wordpress.com/" target="_blank">
            <span onclick="toggle('setup_case');toggleOnly('setup_case');">
             <img id="setup_case-a" name="setup_case" src="<?php echo base_url();?>img/leftMenu/setup/setup_case-a.jpg" width="173" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('setup_case-a','','<?php echo base_url();?>img/leftMenu/setup/setup_case-b.jpg',1)" onmouseout="MM_swapImgRestore()">
             <img id="setup_case-b" name="setup_case" src="<?php echo base_url();?>img/leftMenu/setup/setup_case-b.jpg" width="173" border="0" style="cursor: pointer;" onmouseover="MM_swapImage('setup_case-b','','<?php echo base_url();?>img/leftMenu/setup/setup_case-b.jpg',1)" onmouseout="MM_swapImgRestore()">
            </span>
            </a>
          </li>
          <!-- case end -->
        </ul>
    </div>

<!-- left menu 左側選單效果-->
<script src="<?php echo base_url();?>js/msbtleft.js" type="text/javascript"></script>


<!-- set setup menu toggle style start -->
<?php
if(isset($setup_item) && ($setup_item=='teach')){
?>

<style>
#setup_teach-a{
  display: none;
}
#setup_teach-b{
  display: block;
}
</style>
<?php
}else if(isset($setup_item) && ($setup_item=='diy')){
?>

<style>
#setup_diy-a{
  display: none;
}
#setup_diy-b{
  display: block;
}
</style>
<?php  
}else if(isset($setup_item) && ($setup_item=='explaination')){
?>
<style>
#setup_explaination-a{
  display: none;
}
#setup_explaination-b{
  display: block;
}
</style>
<?php
}
?>
<!-- set setup menu toggle style end -->
