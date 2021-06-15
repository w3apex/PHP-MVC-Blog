<?php
/**
 * Database Class
 */
class Database extends PDO {
	
	public function __construct() {
		parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
	}

	public function select($query, $data = array()) {
		//$query = "SELECT * FROM $table WHERE $id = $id";
		$stmt = $this->prepare($query);
		foreach ($data as $key => $value) {
			$stmt->bindParam($key, $value);
		}
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function insert($table, $data) {
		$keys = implode(",", array_keys($data)); //name,email,phone
		$values = ":".implode(", :", array_keys($data));

		$query = "INSERT INTO $table($keys) VALUES($values)";
		//$query = "INSERT INTO $table(name,email,phone,pass) VALUES(:cat_name, :email, :phone, :pass)";
		$stmt = $this->prepare($query);
		
		foreach ($data as $key => $value) {
			$stmt->bindParam(":".$key, $value);
		}
		//$stmt->bindParam(":cat_name", $cat_name);
		return $stmt->execute();
	}

	public function update($table, $data, $cond) {
		
	}

	public function delete() {}
}


?>