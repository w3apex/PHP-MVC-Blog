<?php
/**
 * Category Model
 */
class PostModel extends Model {
	
	public function __construct() 
	{
		parent::__construct();
	}

	public function postList($table) 
	{	
		$query = "SELECT post.*, category.cat_name
		FROM post
		INNER JOIN category
		ON post.cat_id = category.id";

		return $this->db->select($query);
	}

	public function insertPost($table, $data) 
	{
		return $this->db->insert($table, $data);
	}

	public function PostById($table, $id)
	{
		$query = "SELECT * FROM $table WHERE id = :id";
		$data = array(":id" => $id);

		return $this->db->select($query, $data);
	}

	public function updatePost($table, $data, $cond)
	{
		return $this->db->update($table, $data, $cond);
	}

	public function deletePost($table, $cond)
	{
		return $this->db->delete($table, $cond);
	}
}



?>