<?php
/**
 * Category Controller
 */
class Category extends Controller {
	//protected $view;
	public function __construct() {
		parent::__construct();
		//$this->view = new View();
	}

	public function show() { //Category list
		$data = array();
		$table = "category";
		$catModel = $this->view->model("CatModel");//Model Name
		$data['cat'] = $catModel->catList($table);

		$this->view->render("backend/category/index", $data); 
	}

	public function create() {
		$this->view->render("backend/category/create");
	}

	public function store() {
		$data = array();
		$table = "category";
		$name = $_POST['cat_name'];

		$data = array(
			'cat_name' => $name
		);

		$catModel = $this->view->model("CatModel");
		$insertcat = $catModel->insertCat($table, $data);

		$msg = array();
		if ($insertcat == 1) {
			$msg['msg'] = "Category added successfully.";
		} 
		else {
			$msg['msg'] = "Category not added...";
		}
		$this->view->render("backend/category/create",$msg);
	}

	public function edit() {
		$data = array();
		$table = "category";
		$id = 5;
		$catModel = $this->view->model("CatModel");//Model Name
		$data['catbyid'] = $catModel->catById($table, $id);
		$this->view->render("backend/category/edit",$data);
	}

	public function update() {
		$data = array();
		$table = "category";
		$id = $_POST['id'];
		$name = $_POST['cat_name'];
	}
	
	public function destroy() {}
}


?>