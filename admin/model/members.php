<?php
class Members extends Dbconnection{

	public $id;
	public $name;
	public $email;
	public $password;
	public $course;
	public $batch;
	private $table_name = "tbl_member";

	public function __construct()
	{

		parent::__construct();
	}

	public function __destruct()
	{

		$this->db = null;
	}
   
    public function getMembers(){
    	$sql = "SELECT * FROM ".$this->table_name;
    	$query = $this->db->query($sql);
    	$data = $query->fetchAll(PDO::FETCH_ASSOC);
    	return $data ? $data : [];

    }

    public function getDuplicateData()
    {
    	$sql = "SELECT * FROM ".$this->table_name." WHERE col_id = ? OR col_email = ?";
    	$query = $this->db->prepare($sql);
    	$query->execute([$this->id, $this->email]);
    	$count = $query->rowCount();
    	return $count;
    }

    	
	 public function getMemberById($id){
		 $sql = "SELECT * FROM ".$this->table_name." WHERE col_id=?";
         $query = $this->db->prepare($sql);
         $query->execute([$id]);
         $data = $query->fetch(PDO::FETCH_ASSOC);
         return $data ? $data : [];

	  }

	  public function getMembersByEmail($email){
         
         $sql = "SELECT * FROM ".$this->table_name." WHERE col_email=?";
         $query = $this->db->prepare($sql);
         $query->execute([$email]);
         $data = $query->fetch(PDO::FETCH_ASSOC);
         return $data ? $data : [];

	  }
    
	public function saveMember(){
		$msg = false;

		$sql = "INSERT INTO ".$this->table_name."(col_name, col_id, col_email, col_pass, col_course, col_batch) VALUES (?, ?, ?, ?, ?, ?)";
		$query = $this->db->prepare($sql);
		$query->execute([$this->name, $this->id, $this->email, $this->password, $this->course, $this->batch]);
		if($query) {$msg = true; return $msg;}
		else { return $msg;}
	}

	public function updateMember($id){
	 $sql = "UPDATE ".$this->table_name." SET col_name=?, col_email=?, col_pass=?, col_course=?, col_batch=? WHERE col-id=?";
	 $query = $this->db->prepare($sql);
	 $status = $query->execute([$this->name, $this->email, $this->phone, $this->user_type, $this->status, $id]);
	 return $status ? true : false;

	}

	public function deleteMember(){
    $sql = "DELETE FROM ".$this->table_name." WHERE col_id=?";
		$query = $this->db->prepare($sql);
		$status = $query->execute([$this->id]);
		return $status;
	}


}




?>