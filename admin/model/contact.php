<?php
/**
 * 
 */
class Contact extends Dbconnection
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public $id;
	public $name;
	public $email;
	public $phone; 
	public $enquiry;
	private $table_name="contact";

	public function getContact()
	{
		$sql = "SELECT * FROM ".$this->table_name;
		$query = $this->db->query($sql);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return	$data ? $data : [];
	}
	public function getContactById($id){
		$sql = "SELECT * FROM ".$this->table_name." WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		$data = $query->fetch(PDO::FETCH_ASSOC);
		return $data ? $data : [];
		
	}
	public function save()
	{
		$sql = "INSERT INTO ".$this->table_name."(name, email, phone, enquiry) VALUES (?, ?, ?, ?)"; //space insert
		$query = $this->db->prepare($sql);
		$query->execute([$this->name, $this->email, $this->phone, $this->enquiry]); //execute; and space
		return $this->db->lastInsertId();

		
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