<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Member_model extends CI_Model {
	public function __construct(){
		
		$db_int = $this->load->database('internal', TRUE);

	}
	//php 4 constructor
	
	
	function member_count($where = array())
	{
		
		$db_int = $this->load->database('internal', TRUE);

		$db_int->select(' COUNT(*) AS count ');
		$db_int->from('customer');
		$db_int->where($where);
		
		$query = $db_int->get()->row()->count;
		return $query;
	}
	
	function find_member($limit=0, $offset=0 , $where = array() , $order_column='' , $order_type="desc")
	{
		
		$db_int = $this->load->database('internal', TRUE);

		$db_int->select('*');
		$db_int->from('customer');
		$db_int->where($where);
		
		if($order_column != ''){
			$db_int->order_by($order_column,$order_type);
		}
		if($limit>0)
			$db_int->limit($limit, $offset);
			
		$query = $db_int->get();
		return $query;
	}	
	/*
	 * 回傳 insert的member_id
	 */
	function insert_member($member){
		
		$db_int = $this->load->database('internal', TRUE);

		$db_int->insert('customer', $member); 
		//取得 member_id
		return $db_int->insert_id();

	}
	
	function get_member($array_param){
		
		$db_int = $this->load->database('internal', TRUE);

		$query = $db_int->get_where('customer', $array_param);
		return $query;
	}	

	function update_member($member_arr,$where = array()){
		
		$db_int = $this->load->database('internal', TRUE);

		$db_int->where($where);
		$db_int->update('customer', $member_arr); 
	}	
}

?>
