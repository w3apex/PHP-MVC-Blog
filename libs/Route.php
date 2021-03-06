<?php
/**
 * Route Class
 */
class Route {
	
	public function __construct()
	{
		$url = isset($_GET['url']) ? $url = $_GET['url'] : NULL;
		$url = rtrim($url,"/");
		$url = explode("/", filter_var($url, FILTER_SANITIZE_URL));

		if (empty($url[0])) {
			//Default Controller
			include("app/Controllers/Front.php");
			$controller = new Front();
			$controller->index();
			return false;					
		}

		$path = "app/Controllers/".$url[0].".php";
		if (file_exists($path)) {
			include $path;
		}
		$controller = new $url[0]();

		//Method calling
		if (isset($url[2])) {
			if (method_exists($controller, $url[1])) {
				$controller->{$url[1]}($url[2]);
			} 
			else {
				echo "Error ......";
			}
		} 
		else {
			if (isset($url[1])) {
				if (method_exists($controller, $url[1])) {
					$controller->{$url[1]}();
				} 
				else {
					echo "Error";
				}
			} 
			else {
				$controller->index();
			}
		}
	}

	public function error()
	{
		include("app/Controllers/Error.php");
		$controller = new Error();
		$controller->index();
		return false;
	}
	
}


?>