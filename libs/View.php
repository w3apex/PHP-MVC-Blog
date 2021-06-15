<?php
/**
 * View Class
 */
class View {

	public function render($fileName, $data = false) {
		if ($data == true) {
			extract($data);
		}
		include "views/".$fileName.".php";
		//include "views/backend/category/create.php";
	}

	public function model($modelName) {//CatModel
		include "app/models/".$modelName.".php";
		return new $modelName(); //new CatModel();
	}
	
}


?>