<?php
/**
 * 
 */
class Onlineapply extends Dbconnection
{
	
	public function __construct()
	{
		parent::__construct();
	}


	public $id;
	public $name;
	public $email;
	public $phone;
	public $hight;
	public $weight;
	public $dob;
	public $image; 
	public $course_name;
	private $table_name="onlineapply";

	public function getOnlineapply()
	{
		$sql = "SELECT * FROM ".$this->table_name;
		$query = $this->db->query($sql);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return	$data ? $data : [];
	}
	public function getOnlineapplyById($id){
		$sql = "SELECT * FROM ".$this->table_name." WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		$data = $query->fetch(PDO::FETCH_ASSOC);
		return $data ? $data : [];
		
	}
	public function save()
	{
		$sql = "INSERT INTO ".$this->table_name."(name, email, phone, hight, weight, dob, image, course_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?)"; //space insert
		$query = $this->db->prepare($sql);
		$query->execute([$this->name, $this->email, $this->phone, $this->hight, $this->weight, $this->dob, $this->image, $this->course_name]); //execute; and space
		return $this->db->lastInsertId();

		
	}

	public function update($id)
	{
		$sql = "UPDATE ".$this->table_name." SET category_id=?, name=?, description=?, price=?, duration=?, status=? WHERE id=?";
		$query = $this->db->prepare($sql);
		$update = $query->execute([$this->category_id, $this->name, $this->description, $this->price, $this->duration, $this->status, $id]);
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
		
		move_uploaded_file($FILES['image']['tmp_name'], "../../admin/uploads/product/".$file_name);
		
		return $file_name;
}
public function getTotalapply(){
		$sql = "SELECT COUNT(*) as total FROM ".$this->table_name;
		$query = $this->db->query($sql);
		$data = $query->fetch(PDO::FETCH_ASSOC);
		return $data['total'];
	}
}
?>