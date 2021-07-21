<?php
/**
 * Login Model
 */
class LoginModel extends Model {
	
	public function __construct() 
	{
		parent::__construct();
	}

	public function loginControl($table, $data)
	{	
		$cond = null;
		foreach ($data as $key => $val) {
			$cond .= "$key=:$key AND ";
		}
		$cond = rtrim($cond, " AND ");

		/*echo "<pre>";
		print_r($cond);
		echo "</pre>";
		exit();*/

		$query = "SELECT * FROM $table WHERE $cond";
		//$query = "SELECT * FROM $table WHERE email = :email AND password = :password";

		return $this->db->machingRows($query, $data);



		
	}
}	