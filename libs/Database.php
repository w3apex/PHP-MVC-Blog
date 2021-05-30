<?php
/**
 * Database Class
 */
class Database extends PDO {
	
	public function __construct() {
		parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
	}

	public function select($table) {
		$query = "SELECT * FROM $table";
		$stmt = $this->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function insert() {}

	public function update() {}

	public function delete() {}
}


?>