<?php
/**
 * 
 */
class Specialofferapply extends Dbconnection
{
	
	public function __construct()
	{
		parent::__construct();
	}


	public $id;
	public $specialoffer_id;
	public $name;
	public $uname;
	public $email;
	public $phone;
	public $dob;
	private $table_name="specialoffer_apply";

	public function getSpecialofferapply()
	{
		$sql = "SELECT * FROM ".$this->table_name;
		$query = $this->db->query($sql);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return	$data ? $data : [];
	}
	public function getSpecialofferapplyById($id){
		$sql = "SELECT * FROM ".$this->table_name." WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		$data = $query->fetch(PDO::FETCH_ASSOC);
		return $data ? $data : [];
		
	}
	public function getSpecialofferbysecialoffeapplyById($specialoffer_id){
		
		$sql = "SELECT * FROM ".$this->table_name." WHERE specialoffer_id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$specialoffer_id]);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return $data ? $data : [];
		
		
	}

	public function save()
	{
		$sql = "INSERT INTO ".$this->table_name."(specialoffer_id, name, uname, email, phone, dob) VALUES (?, ?, ?, ?, ?, ?)"; //space insert
		$query = $this->db->prepare($sql);
		$query->execute([$this->specialoffer_id, $this->name, $this->uname, $this->email, $this->phone, $this->dob]); //execute; and space
		return $this->db->lastInsertId();

		
	}

	public function update($id)
	{
		$sql = "UPDATE ".$this->table_name." SET specialoffer_id=?, name=?, uname=?, email=?, phone=?, dob=? WHERE id=?";
		$query = $this->db->prepare($sql);
		$update = $query->execute([$this->specialoffer_id, $this->name, $this->uname, $this->email, $this->phone, $this->dob, $id]);
		return $update ? trur : false;
	}
	public function delete($id)
	{
		$sql = "DELETE FROM ".$this->table_name." WHERE id=?"; // query wrong: not select would be delete.
		$query = $this->db->prepare($sql);
		$delete = $query->execute([$id]);
		return $delete ? true : false;
	}
}
?>