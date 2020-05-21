<style>
#topMenu{
  width: 20%;
  float: left;
}
#page_cate{
  float: right;
  width: 80%;
}
#cate_img{
  width: 400px;
  float: left;
}
#cate_content{
  float: right;
  
}
/********************/
/* category  page   */
#cate_content{
  float: right;
  margin-top:0;
  width: 370px;
  border-top: 7px solid #595757;

}
#cate_content h3{
  font-size: 23px;
  color: #595757;
  margin: 25px 0;
}
#cate_text{
  color: #595757;
  font-size: 13px;
  line-height: 20px;
}
#cate_file{
/* video */
margin-top:70px;
width: 400px;
height: 300px;
}
</style>
<div id="content">
  <div id="topMenu">
    <?php $this->load->view('menu/product_menu.php'); ?>
  </div>
    <div id="page_cate">
      <div id="cate_img">
        <img width="400" src="<?php echo base_url();?>/img/product/category/<?php echo $data['engTag'];?>/<?php echo $data['level1Eng'];?>.jpg"/>
      </div>
      <div id="cate_content">
        <h3><?php echo $data['level1Name'].' '.$data['level1Eng'];?></h3>
        <div id="cate_text">
          <?php echo $data['intro']; ?>
        </div>
        <div id="cate_file">
          <?php 
          //是否有影片？database儲存file url
          if($data['file_url']!='N'){
           //echo 'here have file';
          ?>
            <iframe width="365" height="300" src="<?php echo $data['file_url'];?>" frameborder="0" allowfullscreen></iframe>
          <?php 
          }
            ?>
        </div>
      </div>
      <input id="engTag" type="hidden" value="<?php echo $data['engTag'];?>"/>
      </div>
</div>

<!-- left menu 左側選單效果-->
<script src="<?php echo base_url();?>/js/msbtleft.js" type="text/javascript"></script>
<script>
var level1 = document.getElementById('engTag').value;
toggleLeft(level1);
</script>
</div>
