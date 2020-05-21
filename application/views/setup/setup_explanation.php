<?php 
$menu['teach_item'] = $teach_item;
$menu['setup_item'] = $setup_item;
?>
<div id="content">
  <div id="setupMenu">
    <?php $this->load->view('menu/setup_menu.php',$menu); ?>
  </div>
    <div id="page_setup">
      <div id="setup" >
        <img src="<?php echo base_url();?>img/install/<?php echo $teach_item;?>.jpg" width="760px;" alt="安裝說明" />
      <div>
    </div>
</div>

<!-- left menu 左側選單效果-->
<script src="<?php echo base_url();?>js/msbtleft.js" type="text/javascript"></script>
</div>
<!-- set teach menu toggle style start-->
<?php
if(isset($teach_item) && ($teach_item=='roller')){
?>
  <script>toggleLeft('setup_explan');</script>
  <style>
  #setup_explanation,#explain_roller{
    color: #a82124;
  }
  </style>
<?php
}else if(isset($teach_item) && ($teach_item=='misua')){
?>
  <script>toggleLeft('setup_explan');</script>
  <style>
  #setup_explanation,#explain_misua{
    color: #a82124;
  }
  </style>
<?php
}else if(isset($teach_item) && ($teach_item=='bienzen')){
?>
  <script>toggleLeft('setup_explan');</script>
  <style>
  #setup_explanation,#explain_bienzen{
    color: #a82124;
  }
  </style>
  <?php
}else if(isset($teach_item) && ($teach_item=='pimu')){
?>
  <script>toggleLeft('setup_explan');</script>
  <style>
  #setup_explanation,#explain_pimu{
    color: #a82124;
  }
  </style>
  <?php
}else if(isset($teach_item) && ($teach_item=='bairay')){
?>
  <script>toggleLeft('setup_explan');</script>
  <style>
  #setup_explanation,#explain_bairay{
    color: #a82124;
  }
  </style>
<?php
}else if(isset($teach_item) && ($teach_item=='fenla')){
?>
  <script>toggleLeft('setup_explan');</script>
  <style>
  #setup_explanation,#explain_fenla{
    color: #a82124;
  }
  </style>
  <?php
}else if(isset($teach_item) && ($teach_item=='doubleR')){
?>
  <script>toggleLeft('setup_explan');</script>
  <style>
  #setup_explanation,#explain_doubleR{
    color: #a82124;
  }
  </style>
  <?php
}else if(isset($teach_item) && ($teach_item=='double')){
?>
  <script>toggleLeft('setup_explan');</script>
  <style>
  #setup_explanation,#explain_double{
    color: #a82124;
  }
  </style>
<?php
}else if(isset($teach_item) && ($teach_item=='vali')){
?>
  <script>toggleLeft('setup_explan');</script>
  <style>
  #setup_explanation,#explain_vali{
    color: #a82124;
  }
  </style>
<?php
}else if(isset($teach_item) && ($teach_item=='wagi')){
?>
  <script>toggleLeft('setup_explan');</script>
  <style>
  #setup_explanation,#explain_wagi{
    color: #a82124;
  }
  </style>
<?php
}else if(isset($teach_item) && ($teach_item=='hanas')){
?>
  <script>toggleLeft('setup_explan');</script>
  <style>
  #setup_explanation,#explain_hanas{
    color: #a82124;
  }
  </style>
<?php
}else if(isset($teach_item) && ($teach_item=='rakusho')){
?>
  <script>toggleLeft('setup_explan');</script>
  <style>
  #setup_explanation,#explain_rakusho{
    color: #a82124;
  }
  </style>
<?php
}else if(isset($teach_item) && ($teach_item=='curtain')){
?>
  <script>toggleLeft('setup_explan');</script>
  <style>
  #setup_explanation,#explain_curtain{
    color: #a82124;
  }
  </style>
<?php } ?>
<!-- set teach menu toggle style end-->
