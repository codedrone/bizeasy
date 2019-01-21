<?php 
class QueryCreator_model extends CI_Model {
	/*
		This method returns single or multiple records
	*/
	public function selectQuery($table,$columnsToSelect,$comparisonColumnsAndValues,$recordType,$sortingColumnsAndValues,$groupingColumnsAndValues = array(), $limit = 0){
		$this->db->select($columnsToSelect);
		$this->db->from($table);
		foreach($comparisonColumnsAndValues as $key => $value){
			$whereType = $value[1];
			if($key=='group_start')
			{
				$this->db->group_start();
			}
			else if($key=='group_end')
			{
				$this->db->group_end();
			}
			else
			{
			   $this->db->$whereType($key,$value[0]); 
			}
			
		}
		foreach($sortingColumnsAndValues as $key => $value){
			$this->db->order_by($key,$value);
		}
		foreach($groupingColumnsAndValues as $value){
			$this->db->group_by($value);
		}
		if(is_array($limit) && count($limit)>0){
			$this->db->limit($limit[0],$limit[1]);   
		}
		$res = $this->db->get();
		return ($recordType=='Single') ? $res->row_array() : $res->result_array();
	}

	/*
		This method returns no of rows
	*/
	public function noOfRecords($table,$comparisonColumnsAndValues){
		$this->db->select('');
		$this->db->from($table);
		foreach($comparisonColumnsAndValues as $key => $value){
			$whereType = $value[1];
			if($key=='group_start')
			{
				$this->db->group_start();
			}
			else if($key=='group_end')
			{
				$this->db->group_end();
			}
			else
			{
			   $this->db->$whereType($key,$value[0]); 
			}
		}
		$res = $this->db->get();
		return $res->num_rows();
	}

	/*
		This method add single record
	*/
	public function insertSingle($table,$data){
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	/*
		This method add multiple record
	*/
	public function insertMultiple($table,$data){
		$this->db->insert_batch($table,$data);
		return $this->db->insert_id();
	}

	/*
		This method update single or multiple records
	*/
	public function updateQuery($table,$comparisonColumnsAndValues,$targetColumnsAndValues){
		foreach($comparisonColumnsAndValues as $key => $value){
			$whereType = $value[1];
			if($key=='group_start')
			{
				$this->db->group_start();
			}
			else if($key=='group_end')
			{
				$this->db->group_end();
			}
			else
			{
			   $this->db->$whereType($key,$value[0]); 
			}
		}
		$this->db->update($table,$targetColumnsAndValues);
		return $this->db->affected_rows();
	}

	/*
		This method delete single or multiple records
	*/
	public function deleteQuery($table,$comparisonColumnsAndValues){
		foreach($comparisonColumnsAndValues as $key => $value){
			$whereType = $value[1];
			if($key=='group_start')
			{
				$this->db->group_start();
			}
			else if($key=='group_end')
			{
				$this->db->group_end();
			}
			else
			{
			   $this->db->$whereType($key,$value[0]); 
			}
		}
		$this->db->delete($table);
		return $this->db->affected_rows();
	}

	/*
		This method joins 2 or more tables and returns single or multiple records
	*/
	public function joinInnerQuery($tableComparisonColumns,$columnsToSelect,$comparisonColumnsAndValues,$recordType,$sortingColumnsAndValues,$groupingColumnsAndValues,$limit){
		$this->db->select($columnsToSelect);
		foreach($tableComparisonColumns as $key => $value){
			if(empty($value)){
				$this->db->from($key);
			}
			else {
				$this->db->join($key,$value);        
			}
		}
		foreach($comparisonColumnsAndValues as $key => $value){
			$whereType = $value[1];
			if($key=='group_start')
			{
				$this->db->group_start();
			}
			else if($key=='group_end')
			{
				$this->db->group_end();
			}
			else
			{
			   $this->db->$whereType($key,$value[0]); 
			}
		}
		foreach($sortingColumnsAndValues as $key => $value){
			$this->db->order_by($key,$value);
		}
		foreach($groupingColumnsAndValues as $value){
			$this->db->group_by($value);
		}
		if(count($limit)>0){
			$this->db->limit($limit[0],$limit[1]);   
		}
		$res = $this->db->get();
		return ($recordType=='Single') ? $res->row_array() : $res->result_array();
	}

	/*
		This method joins 2 or more tables and returns no of records
	*/
	public function joinInnerNoOfRecords($tableComparisonColumns,$comparisonColumnsAndValues){
		$this->db->select('');
		foreach($tableComparisonColumns as $key => $value){
			if(empty($value)){
				$this->db->from($key);
			}
			else {
				$this->db->join($key,$value);        
			}
		}
		foreach($comparisonColumnsAndValues as $key => $value){
			$whereType = $value[1];
			if($key=='group_start')
			{
				$this->db->group_start();
			}
			else if($key=='group_end')
			{
				$this->db->group_end();
			}
			else
			{
			   $this->db->$whereType($key,$value[0]); 
			}
		}
		$res = $this->db->get();
		return $res->num_rows();
	}

	/*
		This method add single or multiple column
	*/
	public function addColumnQuery($table,$fields){
		 return $this->dbforge->add_column($table, $fields);
	}

	 /*
		This method add single or multiple column
	*/
	public function deleteColumnQuery($table,$fields){
		return $this->dbforge->drop_column($table, $fields);
	}


	/*
		This method return single or multiple records, It is only for getting data
	*/
	public function customQuery($sql,$recordType){
		$query = $this->db->query($sql);
		return ($recordType=='Single') ? $query->row_array() : $query->result_array();
	}
}
?>