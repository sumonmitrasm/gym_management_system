<?php
include 'members.php';
class Attend extends Dbconnection {

	public $id;
	public $name;
	public $time;
	public $date;
	public $present_absent;
	public $course;
	public $batch;
	private $table_name = "tbl_attend";
	private $table_name2 = "tbl_member";

	

	


	public function __construct(){
		parent::__construct();
	}

	public function __destruct()
	{
		$this->db=null;
	}
   
    public function getAttend(){
    	$sql = "SELECT * FROM ".$this->table_name;
    	$query = $this->db->query($sql);
    	$data = $query->fetchAll(PDO::FETCH_ASSOC);
    	return $data ? $data : [];

	}


	
	public function searchData()
	{

		$sql = "SELECT col_name, col_id FROM ".$this->table_name2." WHERE col_course = ? AND col_batch = ? AND col_id NOT IN ( SELECT col_id FROM ".$this->table_name ." WHERE col_date = ? )";
		$query  = $this->db->prepare($sql);
		$query->execute([$this->course, $this->batch, $this->date]);
		return $query;
	}

	 public function getAttendCourse()
	 {
	 	$sql = "SELECT DISTINCT(col_course) FROM ".$this->table_name2;
	 	$query = $this->db->prepare($sql);
	 	$query->execute();
	 	return $query;
	  }

	  

	  public function getAttendBatch()
	  {
	  	$sql = "SELECT DISTINCT(col_batch) FROM ".$this->table_name2;
	 	$query = $this->db->prepare($sql);
	 	$query->execute();
	 	return $query;
	  }	

	

	  public function getAttendByName() {
         
         $sql = "SELECT col_name FROM ".$this->table_name2." WHERE col_id=:id";
         $query = $this->db->prepare($sql);
         $query->execute(['id'=>$this->id]);
         $count = $query->rowCount();
         $data = $query->fetch(PDO::FETCH_ASSOC);
         $name = $data['col_name'];
         return $name;
	  }
    
	public function saveAttend(){
		$msg = false;
		$sql = "INSERT INTO ".$this->table_name."(col_name, col_id,  col_time, col_date, col_present_absent) VALUES(?, ?, ?, ?, ?)";
		$query = $this->db->prepare($sql);
		$query->execute([$this->name, $this->id, $this->time, $this->date, $this->present_absent]);
		
		if($query){$msg = true; return $msg;}
		else {return $msg;}
	}

	public function updateAttend(){
	 $msg = false;
	 $sql = "UPDATE ".$this->table_name." SET 	col_present_absent	= :status WHERE col_id = :id";
	 $query = $this->db->prepare($sql);
	 $query->execute(['status'=>$this->present_absent, 'id' => $this->id]);
	 if($query){$msg = true; return $msg;}
	 else {return $msg;}

	}

	public function deleteAttend(){
    $sql = "DELETE FROM ".$this->table_name." WHERE id=?";
		$query = $this->db->prepare($sql);
		$status = $query->execute([$this->id]);

		return $status;
	}

	public function getInfo()
	{
	  $sql = "SELECT t1.col_name,t1.col_id, t1.col_present_absent FROM ".$this->table_name." t1, ".$this->table_name2." t2  WHERE t1.col_date = :date AND t1.col_id = t2.col_id AND t2.col_course = :course AND t2.col_batch = :batch";

	  $query = $this->db->prepare($sql);
	  $query->bindParam(':date',$this->date,PDO::PARAM_STR);
	  $query->bindParam(':course',$this->course,PDO::PARAM_STR);
	  $query->bindParam(':batch',$this->batch,PDO::PARAM_INT);
	  $query->execute();
	  return $query;
	}
}




?>