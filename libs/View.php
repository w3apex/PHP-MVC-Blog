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
	}

	public function model($modelName) {//CatModel
		include "app/models/".$modelName.".php";
		//include "app/models/CatModel.php";
		//$cat = new CatModel();
		return new $modelName();
	}
	
}


?>