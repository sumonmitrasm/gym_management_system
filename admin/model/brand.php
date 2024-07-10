<?php
/**
 * 
 */
class Brand extends Dbconnection
{
	
	public function __construct()
	{
		parent::__construct();
	}


	public $id;
	public $name;
	public $logo;
	public $status;
	private $table_name="brands";

	public function getBrands()
	{
		$sql = "SELECT * FROM ".$this->table_name;
		$query = $this->db->query($sql);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return	$data ? $data : [];



	}

	public function getBrandById($id){
		$sql = "SELECT * FROM ".$this->table_name." WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]); // ''
		$data = $query->fetch(PDO::FETCH_ASSOC); //fetch spelling mistake
		return $data ? $data : [];



		
	}

	public function save()
	{
		$sql = "INSERT INTO ".$this->table_name."(name, logo, status) VALUES (?, ?, ?)"; //space insert
		$query = $this->db->prepare($sql);
		$query->execute([$this->name, $this->logo, $this->status]); //execute; and space
		return $this->db->lastInsertId();

		
	}

	public function update($id)
	{
		$sql = "UPDATE ".$this->table_name." SET name=?, status=? WHERE id=?"; // set spelling mistake:unable to save message show
		$query = $this->db->prepare($sql);
		$update=$query->execute([$this->name, $this->status, $id]);
		return $update ? trur : false;
	}

	public function update_logo($id){

		$sql = "UPDATE ".$this->table_name." SET logo=? WHERE id=?";
		$query = $this->db->prepare($sql);
		$update = $query->execute([$this->logo, $id]);
		return $update ? true : false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM ".$this->table_name." WHERE id=?"; // query wrong: not select would be delete.
		$query = $this->db->prepare($sql);
		$delete = $query->execute([$id]);
		return $delete ? true : false;
	}

	public function uploadLogo($FILES){
		
		$file_name = time().$FILES['logo']['name'];
		
		move_uploaded_file($FILES['logo']['tmp_name'], "../uploads/brand/".$file_name);
		
		return $file_name;
}
}
?>