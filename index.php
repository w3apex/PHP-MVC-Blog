 <?php
	include("libs/Controller.php");
	include("libs/View.php");
	include("libs/Model.php");
	include("libs/Database.php");

	include("config/database.php");

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
			echo "Error";
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
	


?>