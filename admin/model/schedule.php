<?php
/**
 * 
 */
class Schedule extends Dbconnection
{
	
	public function __construct()
	{
		parent::__construct();
	}


	public $id;
	public $name;
	public $fname;
	public $fmtime;
	public $ftranner;
	public $fbatch;
	public $sname;
	public $smtime;
	public $stranner;
	public $sbatch;
	public $tname;
	public $tmtime;
	public $ttranner;
	public $tbatch;
	public $ffname;
	public $ffmtime;
	public $fftranner;
	public $ffbatch;
	public $status;
	private $table_name="schedule";

	public function getSchedule()
	{
		$sql = "SELECT * FROM ".$this->table_name;
		$query = $this->db->query($sql);
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		return	$data ? $data : [];
	}
	public function getScheduleById($id){
		$sql = "SELECT * FROM ".$this->table_name." WHERE id=?";
		$query = $this->db->prepare($sql);
		$query->execute([$id]);
		$data = $query->fetch(PDO::FETCH_ASSOC);
		return $data ? $data : [];
		
	}
	public function save()
	{
		$sql = "INSERT INTO ".$this->table_name."(name, fname, fmtime, ftranner, fbatch, sname, smtime, stranner, sbatch, tname, tmtime, ttranner, tbatch, ffname, ffmtime, fftranner, ffbatch, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"; //space insert
		$query = $this->db->prepare($sql);
		$query->execute([$this->name, $this->fname, $this->fmtime, $this->ftranner, $this->fbatch, $this->sname, $this->smtime, $this->stranner, $this->sbatch, $this->tname, $this->tmtime, $this->ttranner, $this->tbatch, $this->ffname, $this->ffmtime, $this->fftranner, $this->ffbatch, $this->status]); //execute; and space
		return $this->db->lastInsertId();

		
	}

	public function update($id)
	{
		$sql = "UPDATE ".$this->table_name." SET name=?, fname=?, fmtime=?, ftranner=?, fbatch=?, sname=?, smtime=?, stranner=?, sbatch=?, tname=?, tmtime=?, ttranner=?, tbatch=?, ffname=?, ffmtime=?, fftranner=?, ffbatch=?, status=? WHERE id=?";
		$query = $this->db->prepare($sql);
		$update = $query->execute([$this->name, $this->fname, $this->fmtime, $this->ftranner, $this->fbatch, $this->sname, $this->smtime, $this->stranner, $this->sbatch, $this->tname, $this->tmtime, $this->ttranner, $this->tbatch, $this->ffname, $this->ffmtime, $this->fftranner, $this->ffbatch, $this->status, $id]);
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