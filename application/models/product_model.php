<?php

class Product_model extends CI_Model{
	
	public function __construct(){
		$db_def = $this->load->database('default', TRUE);
		

	//	$db2 = $this->load->database($internal,TRUE);
	}
	private function get_menu_join($level1Eng = FALSE){
		$db_def = $this->load->database('default', TRUE);

		$db_def->select('a.id as level1id');
		$db_def->select('a.level1Name as level1Name');
		$db_def->select('a.engTag as level1engTag');
		$db_def->select('b.id as level2id');
		$db_def->select('b.level2Name as level2Name');
		$db_def->select('b.level2Eng as level2engTag');
		$db_def->from('pro_level1 as a');
		$db_def->join('pro_level2 as b', 'b.level1id=a.id','left');
		$db_def->where('a.open',"Y");
		$db_def->where('b.open',"Y");
		$db_def->order_by("a.index","asc"); //desc , asc
		$db_def->order_by("a.id","asc"); //desc , asc
		$db_def->order_by("b.index","asc"); //desc , asc	
		$db_def->order_by("b.id","asc");
		$query = $db_def->get();
		return $query->result_array();
	}
	public function get_level1($level1Eng = FALSE){
		$db_def = $this->load->database('default', TRUE);	

		if($level1Eng === FALSE){ //pro_level1:id, level1Name, level1Eng, index,
												//open,engTag
			/*
			$db_def->select('id','level1Name','level1Eng');
			$db_def->where('open',"Y");
			$db_def->order_by("index","asc"); //desc , asc
			$db_def->order_by("id","asc");
			$query = $db_def->get('pro_level1');
			return $query->result_array();
			*/

		//return $query;
			//return $query;
		}

		$query = $db_def->get_where('pro_level1', array('level1Eng' => $level1Eng));
		return $query->row_array();
	}

	public function get_level2($level2Eng = FALSE){
		$db_def = $this->load->database('default', TRUE);
		

		if($level2Eng === FALSE){
			$query = $db_def->get('pro_level2');
			return $query->result_array();
		}

		$query = $db_def->get_where('pro_level2', array('level2Eng' => $level2Eng));
		return $query->row_array();
	}

	public function get_level3($level2Id = FALSE){
		$db_def = $this->load->database('default', TRUE);
		

		if($level2Id === FALSE){
			$query = $db_def->get('pro_level3');
			return $query->result_array();
		}

		$query = $db_def->get_where('pro_level3', array('level2Id' => $level2Id));
		return $query->row_array();
	}
	public function get_level3join($level2Eng){
		$db_def = $this->load->database('default', TRUE);
		

		if($level2Eng === FALSE){
			return false;
		}

		//$sql = "SELECT a.level2Name, a.level2Eng, a.category, b.* FROM pro_level2 AS a LEFT JOIN pro_level3 AS b ON a.id = b.level2Id WHERE a.level2Eng = ? ORDER BY b.index ASC, b.id ASC";
		$sql = "SELECT a.level2Name, a.level2Eng, a.category, a.haveMeasure AS aMeasure, a.haveSetup AS aSetup, a.haveSample AS aSample, b.* FROM pro_level3 AS b LEFT JOIN pro_level2 AS a ON a.id = b.level2Id WHERE a.level2Eng = ? && b.open ='Y' ORDER BY b.index ASC, b.id ASC";
		$query =$db_def->query( $sql, array($level2Eng) );
		
		if($query->num_rows() >0){
			return $query->result_array();
		}
		
	}


}
