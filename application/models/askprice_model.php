<?php

class Askprice_model extends CI_Model{
	
	public function __construct(){
		$db_def = $this->load->database('default', TRUE);
		
	}

	public function getLevel1($openKey = FALSE){
		$db_def = $this->load->database('default', TRUE);
		
		$db_def->select('id, level1Name, level1Eng, index, open, engTag');
		if($openKey === FALSE){
			$openKey = 'Y';
		}
		$db_def->where('open', $openKey);
		$sql = $db_def->get('pro_level1');
		return $sql->result_array();

	}

	public function getLevel2($levelOneId =  FALSE){
		$db_def = $this->load->database('default', TRUE);
		$db_def->select('id, index, open, level2Name, level2Eng');
		if($levelOneId === FALSE){
			$levelOneId = '1';
		}

		$db_def->where('open', 'Y');
		$db_def->where('level1id', $levelOneId);
		$db_def->order_by('index','asc');
		$sql = $db_def->get('pro_level2');
		return $sql->result_array();
	}

	public function getStandard($proId = FALSE){
		$db_def = $this->load->database('default', TRUE);
		$db_def->select('*');
		$db_def->join('pro_standard', 'pro_standard.proId = pro_level2.id');
		$db_def->where('open', 'Y');
		$db_def->where('pro_level2.id', $proId);
		$db_def->order_by('index','asc');
		$sql = $db_def->get('pro_level2');
		if($sql->num_rows() >0){
			return $sql->result_array();
		}else{
			return '0';
		}
		

	}

	public function getColor($proId = FALSE){
		$db_def = $this->load->database('default' , TRUE);
		$db_def->select('*');
		$db_def->where('open','Y');
		$db_def->where('level2Id' , $proId);
		$db_def->order_by('index', 'asc');
		$sql =  $db_def->get('pro_level3');
		

		if($sql->num_rows() >0){
			return $sql->result_array();
		}else{	
			return 'noColor';
		}

	}

	public function getEngNamePrice($colorId = FALSE){
		$db_def = $this->load->database('default' , TRUE);
		
		if($colorId === FALSE){
			return false;
		}

		$sql = "SELECT a.level2Eng AS level2Eng , b.level3Eng AS level3Eng, b.index AS indexNum FROM pro_level3 AS b LEFT JOIN pro_level2 AS a ON a.id = b.level2Id WHERE b.id= ? LIMIT 1";
		$query =$db_def->query( $sql, array($colorId) );

		if($query->num_rows() >0){
			return $query->result_array();
		}
		
	}

}
