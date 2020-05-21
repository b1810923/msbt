<?php 
$level2Eng = '';
$level2id = '';
$category = '';
$first = '';
$firstNum = '';
foreach($level2 as $item): 
	$level2Eng =  $item['level2Eng'];
	$level2id = $item['level2Id'];
	$category = $item['category'];
	$first = $item['level3Eng'];
	$firstNum = $item['picNum'];
	break;
endforeach;

$this->load->model('product_model');
$level2Pro = $this->product_model->get_level2($level2Eng);
$level3Pro = $this->product_model->get_level3($level2id);

?>

	<h2><?php echo $level2Pro['level2Eng'].' '.$level2Pro['level2Name'].'[debug]category:'.$first;?></h2>
	
	<div id="pro_img">
        <div id="pro_zoom">
          <img id="zoom_01" src="<?php echo base_url();?>/img/product/category/<?php echo $level2Pro['category'].'/'.ucfirst($level2Pro['level2Eng'])?>/<?php echo $first; ?>-01.jpg" data-zoom-image=""/>
	
        </div>
        <div id="pro_thumb">
        <ul>
           <?php for($i=1; $i<$firstNum; $i++){ ?>
            <li><img id="zoom_0<?php echo $i;?>" class="thumb" src="<?php echo base_url();?>/img/product/category/<?php echo $level2Pro['category'].'/'.ucfirst($level2Pro['level2Eng'])?>/<?php echo $first; ?>-0<?php echo $i;?>.jpg" onclick="changePic('<?php echo $first; ?>','<?php echo $i;?>')" /></li>
           <?php } ?>  
        </ul>
        </div>
      
      </div>
	<div id="pro_colorselect">
        顏色：
        <select id="select">
            <?php foreach($level2 as $item): ?>
            <option value="<?php echo $item['level3Eng'];?>"><?php echo $item['level3Name'].' '.ucfirst($item['level3Eng']);?></option>
    		<?php endforeach ?>        
        </select>
    </div>

    <div id="pro_color">
    	<?php foreach($level2 as $colors): ?>
        <img class="ori" id="<?php echo $colors['level3Eng'];?>" onclick="changePicList('<?php echo $colors['level3Eng'];?>','<?php echo $colors['picNum'];?>');" src="<?php echo base_url();?>/img/product/category/<?php echo $level2Pro['category'].'/'.ucfirst($level2Pro['level2Eng']).'/';?>color/<?php echo $colors['level3Eng']?>.jpg" />
    	<?php endforeach ?>
    </div>


    <script>
    // Select change 1 pic and 1 gallery pics
$("#select").change(function(e){
alert('test');
  var currentVal = $("#select").val();
  alert('[debug]'+currentVal);
/*/
  if( currentVal == 'r_'){
    //換可放大的第一張圖
    changePicList('r_');
  }
  if( currentVal == 'a_'){
    changePicList('a_');
  }
  if( currentVal == 'w_'){
    changePicList('w_');
  }
  if( currentVal == 'u_'){
    changePicList('u_');
  }
//*/
});
function changePicList(picName, picNum){
	alert('[debug]picName:'+picName+' pic numbers:'+picNum);
}
    </script>

