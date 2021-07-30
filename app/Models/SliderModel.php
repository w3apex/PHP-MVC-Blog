<?php
/**
 * Slider Model
 */
class SliderModel extends Model {
	
	public function __construct() {
		parent::__construct();
	}

	public function slidList($table) {

		$query = "SELECT * FROM $table";
		return $this->db->select($query);


	}

	public function insertSlid($table, $data) {

		return $this->db->insert($table, $data);
	}

	public function slidById( $table, $id) {

		$query = "SELECT * FROM $table WHERE id = :id";
		$data  = array(":id" => $id);

		return $this->db->select($query, $data);

	}

	public function updateSlid($table, $data, $cond) {
		return $this->db->update($table, $data, $cond);

	}

	public function deleteSlid () {
		return $this->db->delete($table, $cond);

	}
}



?>