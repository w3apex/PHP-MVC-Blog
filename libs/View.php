<?php
/**
 * View Class
 */
class View {

	public function render($fileName) { //frontend/index
		include "views/".$fileName.".php";
		//include "views/frontend/index.php"; 
	}
}
 //$view = new View();

?>