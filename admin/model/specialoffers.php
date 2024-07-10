<?php
/**
 * 
 */
class Specialoffer extends Dbconnection
{
	
	public function __construct()
	{
		parent::__construct();
	}


	public $id;
	public $name;
	public $image;
	public $description;
	public $price;
	public $lassprice;
	public $duration;
	public $status;
	private $table_name="specialoffer";

	public function getSpecialoffer()
	{
		$sql = "SELECT * FROM ".$this->table_name;
		$query = $this->db->query($sql);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return	$data ? $data : [];
	}
	public function getSpecialofferById($id){
		$sql = "SELECT * FROM ".$this->table_name." WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		$data = $query->fetch(PDO::FETCH_ASSOC);
		return $data ? $data : [];
		
	}
	public function save()
	{
		$sql = "INSERT INTO ".$this->table_name."(name, image, description, price, lassprice, duration, status) VALUES (?, ?, ?, ?, ?, ?, ?)"; //space insert
		$query = $this->db->prepare($sql);
		$query->execute([$this->name, $this->image, $this->description, $this->price, $this->lassprice, $this->duration, $this->status]); //execute; and space
		return $this->db->lastInsertId();

		
	}

	public function update($id)
	{
		$sql = "UPDATE ".$this->table_name." SET name=?, description=?, price=?, lassprice=?, duration=?, status=? WHERE id=?";
		$query = $this->db->prepare($sql);
		$update = $query->execute([$this->name, $this->description, $this->price, $this->lassprice, $this->duration, $this->status, $id]);
		return $update ? trur : false;
	}

	public function updateImage($id){

		$sql = "UPDATE ".$this->table_name." SET image=? WHERE id=?";
		$query = $this->db->prepare($sql);
		$update = $query->execute([$this->image, $id]);
		return $update ? true : false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM ".$this->table_name." WHERE id=?"; // query wrong: not select would be delete.
		$query = $this->db->prepare($sql);
		$delete = $query->execute([$id]);
		return $delete ? true : false;
	}

	public function uploadImage($FILES){
		
		$file_name = time().$FILES['image']['name'];
		
		move_uploaded_file($FILES['image']['tmp_name'], "../uploads/product/".$file_name);
		
		return $file_name;
}
}
?>