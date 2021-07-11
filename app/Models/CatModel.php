<?php
/**
 * Category Model
 */
class CatModel extends Model {
	
	public function __construct() 
	{
		parent::__construct();
	}

	public function catList($table) 
	{	
		$query = "SELECT * FROM $table";
		return $this->db->select($query);
	}

	public function insertCat($table, $data) 
	{
		return $this->db->insert($table, $data);
	}

	public function catById($table, $id)
	{
		$query = "SELECT * FROM $table WHERE id = :id";
		$data = array(":id" => $id);

		return $this->db->select($query, $data);
	}

	public function updateCat($table, $data, $cond)
	{
		return $this->db->update($table, $data, $cond);
	}

	public function deleteCat($table, $cond)
	{
		return $this->db->delete($table, $cond);
	}
}



?>