  <div id="page_cate">
    <div id="cate_img">
      <img width="400" src="<?php echo base_url();?>/img/product/category/<?php echo $target;?>/<?php echo $target;?>.jpg"/>
    </div>
    <div id="cate_content">
      <h3><?php echo $chinese_name.' '.$category_name;?></h3>
      <div id="cate_text">
        <?php $this->load->view('product/'.$target.'/'.$target.'.html');?>
      </div>
      <div id="cate_file"></div>
    </div>
  </div>
  
