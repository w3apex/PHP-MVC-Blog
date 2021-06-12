<?php
/**
 * Category Controller
 */
class Category extends Controller {
	
	public function __construct() {
		parent::__construct();
	}

	public function show() {
		$data = array();
		$catModel = $this->view->model("CatModel");//Model Name
		$data['cat'] = $catModel->catList();

		$this->view->render("backend/category/index", $data); 

	}

	public function create() {
		$this->view->render("backend/category/create");
	}

	public function store() {}

	public function edit() {}

	public function update() {}
	
	public function destroy() {}
}


?>