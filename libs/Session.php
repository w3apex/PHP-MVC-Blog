<?php
/**
 * Session Class
 */
class Session {

	public static function init() {
		session_start();
	}

	//$arr = array("name" => "Raj");
	public static function set($key, $val) {
		$_SESSION[$key] = $val;
		//$_SESSION["email"] = $email;
	}

	public static function get($key) {
		if (isset($_SESSION[$key])) {
			return $_SESSION[$key];
		} 
		else {
			return false;
		}
	}

	public static function checkSession() {
		self::init();
		if (self::get('loggedIn') == false) {
			self::destroy();

			header("Location:".BASE_URL."/Login");
		}
	}

	public static function checkLogin() {
		self::init();
		if (self::get('loggedIn') == true) {
			header("Location:".BASE_URL."/Admin");
		}
	}

	public static function destroy() {
		session_destroy();
	}

}


?>