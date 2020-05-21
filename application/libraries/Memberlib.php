<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @name Member Object
 * @author Frederic
 * @version Date : 2010/10/02
 * @version Last Edit : 2010/10/02
 * @version [2010/10/02] First build
 */

class Memberbean{
	var $id					= 	0;
	var $name 				= 	"";
	var $create_date		=	0;
	var $gender 			= 	"男";
	var $county 			= 	0;
	var $town 				= 	3;
	var $full_address 		= 	"";
	var $address			= 	"";
	var $telephone_1 		= 	"";
	var $telephone_2		= 	"";
	var $cellphone			= 	1900;
	var $email				= 	01;
	var $source				= 	01;
	var $zipcode 			= 	'';
	var $comment			= 	'';
}

class Memberlib {

	var $CI;
	var $bean;
	var $reg_error	=	array();
	var $db;
	
	function Memberlib()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('member_model');
		$this->CI->load->library('session');
		$this->CI->load->database();
		$this->db	=	$this->CI->db;
	}
	
	
	/**
	 *  判斷會員是否登入 
	 */
	function is_user_logined(){
		
		if($this->CI->session->userdata('member_id')>0){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
	
	/*
	 * 從正常入口登入
	 */
	function user_login($account , $password){
		
		$param = array(	
						'msbt_mid'				=>	$account
						,'msbt_psw'				=>	$password
						);
						
		$query = $this->CI->member_model->get_member_by_param($param);
		
		$remove_arr = array(
							'member_id'			=>'',
							'member_account'	=>'',
							'member_status'		=>'', 
							'member_type'		=>'',
							'member_level'		=>'',
							'member_photo'		=>''
							);	
		$this->CI->session->unset_userdata($remove_arr);
		
		if($query->num_rows() >0 ){
			
			$this->loadBeanFromQuery($query);
			//更新登入時間及次數
			$member = $this->bean;
			$member->login_times ++;
			$member->login_time = time();
			$where = array('id'=>$member->id);
			$this->CI->member_model->update_member_where($member , $where);
			
			//取得等級資訊
			$levelbean = $this->load_member_level_from_db($member->id);
			$this->CI->session->set_userdata(array(
											'member_id' 		=> 	$member->id,
											'member_account'	=>	$member->account,
											'member_status'		=>	$member->account_status,
											'member_type'		=>	$member->account_type,
											'member_photo'		=>	$member->photo_path,
											'member_level'		=>	$levelbean->member_level
										));	
			return TRUE;		
		}
		else{
			return FALSE;
		}
	}	
	/*
	 * 驗證是否有重複的帳號 
	 */
	function has_the_same_member($name, $telphone = '' , $cellphone = ''){
		$where	= array();
		$where['name']		=	$name;
		if($cellphone != '')
			$where['cellphone']	=	$cellphone;
		else if($telphone !=''){
			$where['telephone_1']	=	$telphone;
		}
			
			
		$member_count  = $this->CI->member_model->member_count($where);
		return $member_count > 0;
	}
	

	function get_member($where ){
		$query = $this->CI->member_model->get_member($where);
		return $query->row();
	}
	
	/*
	 * 會員註冊
	 * 回傳會員的id
	 */
	function add_member( $member){
		
		$current_time = time();
		$member->create_date	=	$current_time*1000;
		
		$id = $this->CI->member_model->insert_member($member);	
		
		return $id;
	}	
	
	/*
	 * 刪除會員
	 */
	function del_member($member_id){
		
		$where	=	array();
		$where['id']	=	$member_id;
		
		$param	=	array();
		$param['account_status']	=	'D';
		$this->CI->member_model->update_member_where($param,$where);
		
		
	}
	
	
	function update_member($member,$where){
		$member['lastedit_time'] = time();
		$this->CI->member_model->update_member_where($member,$where);
	}
	
}

?>
