<?php
class Trainer extends DbConnection{
	
	public $id;
	public $name;
	public $email;
	public $phone;
	public $address;
	public $experience_label;
	public $image;
	public $status;

	private $table_name="trainer";
	public function __construct(){
		 parent::__construct();
	}
	
	public function getTrainer(){
		
		$sql = "SELECT * FROM ".$this->table_name;
		$query = $this->db->query($sql);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return $data ? $data : [];
		
		
	}

	public function getTrainerById($id){
		$sql = "SELECT * FROM ".$this->table_name." WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		$data = $query->fetch(PDO::FETCH_ASSOC);
		return $data ? $data : [];
		
	}
	
	public function save(){
		
		$sql = "INSERT INTO ".$this->table_name."(name, email, phone, address, experience_label, image, status) VALUES(?, ?, ?, ?, ?, ?, ?)";
		$query = $this->db->prepare($sql);
		$query->execute([$this->name, $this->email, $this->phone, $this->address, $this->experience_label, $this->image, $this->status]);
		
		return $this->db->lastInsertId();
		
	}
	
	public function update($id)
	{
		$sql = "UPDATE ".$this->table_name." SET name=?, email=?, phone=?, address=?, experience_label=?, status=? WHERE id=?";
		$query = $this->db->prepare($sql);
		$update = $query->execute([$this->name, $this->email, $this->phone, $this->address, $this->experience_label, $this->status, $id]);
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
public function getTotalTrainer(){
		$sql = "SELECT COUNT(*) as total FROM ".$this->table_name;
		$query = $this->db->query($sql);
		$data = $query->fetch(PDO::FETCH_ASSOC);
		return $data['total'];
	}
}
?>