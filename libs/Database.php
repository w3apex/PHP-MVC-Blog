<?php
/**
 * Database Class
 */
class Database extends PDO {
	
	public function __construct() {
		parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
	}

	public function select($query, $data = array())
	{
		$stmt = $this->prepare($query);
		foreach ($data as $key => $value) {
			$stmt->bindParam($key, $value);
		}
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function insert($table, $data) {

		$keys   = implode(",", array_keys($data)); //name,email,phone
		$values = ":".implode(", :", array_keys($data));//:name,:email,:phone

		$query = "INSERT INTO $table($keys) VALUES($values)";
		//$query = "INSERT INTO $table(name,email,phone,pass) VALUES(:cat_name, :email, :phone, :pass)";
		$stmt = $this->prepare($query);
		
		foreach ($data as $key => $value) {
			//$stmt->bindParam(":".$key, $value);
			$stmt->bindValue(":$key", $value);
			//echo $key." = ".$value;
		}
		//exit();
		//$stmt->bindParam(":cat_name", $cat_name);
		return $stmt->execute();
	}

	public function update($table, $data, $cond) 
	{	
		$updateKeys = null;

		foreach ($data as $key => $val) {
			$updateKeys .= "$key=:$key,";
		}
		$updateKeys = rtrim($updateKeys, ",");

		$query = "UPDATE $table SET $updateKeys WHERE $cond";
		$stmt = $this->prepare($query);
		
		foreach ($data as $key => $value) {
			$stmt->bindParam(":".$key, $value);
		}

		return $stmt->execute();
	}

	public function delete($table, $cond) 
	{
		$query = "DELETE FROM $table WHERE $cond";
		$stmt = $this->prepare($query);
		return $stmt->execute();
	}

	public function machingRows($query, $data)
	{	
		$stmt = $this->prepare($query);

		foreach ($data as $key => $value) {
			$stmt->bindParam(":".$key, $value);
		}
		$stmt->execute();
		return $stmt->fetchAll();
	}
}


?>