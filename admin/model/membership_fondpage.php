<?php
/**
 * 
 */
class Membership extends Dbconnection
{
	
	public function __construct()
	{
		parent::__construct();
	}


	public $id;
	public $network_age;
	public $silver_rate;
	public $gold_rate;
	public $platinium_rate;
	public $status;
	private $table_name="membership";

	public function getMembership()
	{
		$sql = "SELECT * FROM ".$this->table_name;
		$query = $this->db->query($sql);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return	$data ? $data : [];
	}
	public function getMembershipById($id){
		$sql = "SELECT * FROM ".$this->table_name." WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		$data = $query->fetch(PDO::FETCH_ASSOC);
		return $data ? $data : [];
		
	}
	public function save()
	{
		$sql = "INSERT INTO ".$this->table_name."(network_age, silver_rate, gold_rate, platinium_rate, status) VALUES (?, ?, ?, ?, ?)"; //space insert
		$query = $this->db->prepare($sql);
		$query->execute([$this->network_age, $this->silver_rate, $this->gold_rate, $this->platinium_rate, $this->status]); //execute; and space
		return $this->db->lastInsertId();

		
	}

	public function update($id)
	{
		$sql = "UPDATE ".$this->table_name." SET network_age=?, silver_rate=?, gold_rate=?, platinium_rate=?, status=? WHERE id=?";
		$query = $this->db->prepare($sql);
		$update = $query->execute([$this->network_age, $this->silver_rate, $this->gold_rate, $this->platinium_rate, $this->status, $id]);
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