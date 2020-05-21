<?php 
class Productlib {

	var $CI;
	var $db;
	
	function Productlib()
	{
		$this->CI =& get_instance();
		//$this->CI->load->database();
		$db_def = $this->CI->load->database('default', TRUE);
		$db_int = $this->CI->load->database('internal', TRUE);

		$db_def = $this->CI->db;
	}
	
	function get_product_content($serial_name){
		$where	=	array();
		$db_def = $this->CI->load->database('default', TRUE);
		$where['serial_name']	=	$serial_name;
		$db_def->from('product_intro');
		$db_def->where($where);
		$result	=	$db_def->get();
		
		$product_info	=	array();
		$product_info['info']	=	$result->row();
		
		//取出系列所有的顏色
		$where	=	array();
		$where['serial_name']	=	$serial_name;
		
		$db_def->from('product_color');
		$db_def->where($where);
		$db_def->order_by('color_order ASC');
		$result			=	$db_def->get();
		$image_array	=	array();
		
		foreach ($result->result() AS $row){
			
			$color	=	$row->color;
			$where	=	array();
			$where['serial_name']	=	$serial_name;
			$where['color']			=	$color;
			$db_def->from('product_images');
			$db_def->where($where);
			$db_def->order_by('img_order ASC');
			$img_result	=	$db_def->get();
			$image_array[$color]	=	$img_result->result_array();
		}
		$product_info['images']	=	$image_array;
		return $product_info;		
	}

	function get_cushion_price($product ,  $width , $height ){
		
		$db_def = $this->CI->load->database('default', TRUE);
		$where	=	array();
		$where['is_off']		=	1;
		$where['max_width']		=	$width;
		$where['height >=']		=	$height;
		$where['product_name']	=	$product;	
		$db_def->select(' price , display_name ');
		$db_def->from('product_price');
		$db_def->where($where);
		$result	=	$db_def->get();
		if($result->num_rows() > 0 )
			return $result->row();
		else{
			$where	=	array();
			$where['is_off']		=	0;
			$where['min_width <=']	=	$width;
			$where['max_width >=']	=	$width;
			$where['height >=']		=	$height;
			$where['product_name']	=	$product;	
			$db_def->select(' price , display_name ');
			$db_def->from('product_price');
			$db_def->where($where);
			$result	=	$db_def->get();			
			if($result->num_rows() > 0 )
				return $result->row();			
			
		}
		return 0;		
	}
	
	function get_product_price($product ,  $width , $height ){
		$db_def = $this->CI->load->database('default', TRUE);
		
		$where	=	array();
		$where['is_off']		=	1;
		$where['max_width']		=	$width;
		$where['height >=']		=	$height;
		$where['product_name']	=	$product;	
		$db_def->select(' price ');
		$db_def->from('product_price');
		$db_def->where($where);
		$result	=	$db_def->get();
		if($result->num_rows() > 0 )
			return $result->row()->price;
		else{
			$where	=	array();
			$where['is_off']		=	0;
			$where['min_width <=']	=	$width;
			$where['max_width >=']	=	$width;
			$where['height >=']		=	$height;
			$where['product_name']	=	$product;	
			$db_def->select(' price ');
			$db_def->from('product_price');
			$db_def->where($where);
			$result	=	$db_def->get();			
			if($result->num_rows() > 0 )
				return $result->row()->price;			
			
		}
		return 0;				
	}
	
	function get_product_off_price_list($product){
		$where	=	array();
		$db_def = $this->CI->load->database('default', TRUE);
		$where['is_off']		=	1;
		$where['product_name']	=	$product;	
		$db_def->select(' * ');
		$db_def->from('product_price');
		$db_def->where($where);
		$db_def->order_by(' height ASC , min_width ASC ');
		$result	=	$db_def->get();
		return $result;		
	}
	
	function get_product_normal_price_list($product){
		$where	=	array();
		$db_def = $this->CI->load->database('default', TRUE);
		$where['is_off']		=	0;
		$where['product_name']	=	$product;	
		$db_def->select(' * ');
		$db_def->from('product_price');
		$db_def->where($where);
		$db_def->order_by(' height ASC , min_width ASC ');
		$result	=	$db_def->get();
		return $result;		
	}
	
	function save_request_sample($sample_record , $sample_content){
		$db_int = $this->CI->load->database('internal', TRUE);
		
		$db_int->insert('sample_record',$sample_record);
		$sample_id	=	$db_int->insert_id();
	/*
		for ($k=0;$k<count($sample_content);$k++)
		{
			$content	=	array();
			$content['sample_id']	=	$sample_id;
			$content['item_name']	=	$sample_content[$k];
			$content['item_num']	=	1;
			$db_def->insert('sample_content',$content);
		}
	*/	
		
		return $sample_id;
	}
		
	
	function get_pole_price_list($product){
		$db_def = $this->CI->load->database('default', TRUE);
		$where	=	array();
		$where['cate']	=	$product;	
		$db_def->select(' * ');
		$db_def->from('pole_price');
		$db_def->where($where);
		$db_def->order_by('id ASC');
		$result	=	$db_def->get();
		return $result;		
	}

	function get_pole_price($product){
		$db_def = $this->CI->load->database('default', TRUE);
		
		$where	=	array();
		$where['product_name']	=	$product;	
		$db_def->select(' price ');
		$db_def->from('pole_price');
		$db_def->where($where);
		$result	=	$db_def->get();
		if($result->num_rows() > 0 )
			return $result->row()->price;
		return 0;				
	}	
}

?>
