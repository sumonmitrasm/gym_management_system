<?php
	class Attenadance extends Dbconnection
{
	
	public function __construct()
	{
		parent::__construct();
	}


	public $id;
	public $col_name;
	public $col_time;
	public $col_date;
	public $col_present_absent;
	public $col_sr;
	public $col_id;
	public $col_email;
	public $col_pass;
	public $col_course;
	public $col_batch;
	private $table_name="tbl_attend";
	private $tables="tbl_member";

	public function getAttenadance()
	{
		$sql = "SELECT * FROM ".$this->table_name;
		$query = $this->db->query($sql);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return	$data ? $data : [];
	}

	public function getMembers()
	{
		$sql = "SELECT * FROM ".$this->tables;
		$query = $this->db->query($sql);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return	$data ? $data : [];
	}

}

?>