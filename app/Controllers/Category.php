<?php
/**
 * Category Controller
 */
class Category extends Controller {
	//protected $view; //Object of View Class
	public function __construct() 
	{
		parent::__construct();
		//$this->view = new View();
	}

	public function show() 
	{ 	
		$table = "category";
		$data = array();
		$catModel = $this->view->model("CatModel");//Model Name // $catModel is an object
		$data['cat'] = $catModel->catList($table);
		$this->view->render("backend/category/index", $data); 
	}

	/*
	$this->view = new View();
	$this->view->render();
	$this->view->model();
	*/

	public function create() 
	{
		$this->view->render("backend/category/create");
	}

	public function store() 
	{	
		$table = "category";
		$name = $_POST['cat_name'];

		$data = array(
			'cat_name' => $name
		);

		$catModel = $this->view->model("CatModel");
		$insert_cat = $catModel->insertCat($table, $data);

		$msg = array();

		if ($insert_cat == TRUE) {
			$msg['msg'] = "<span style='color:green;'>Category added successfully..</span>";
		} else {
			$msg['msg'] = "<span style='color:red;'>Category not added !!</span>";
		}
	
		$this->view->render("backend/category/create", $msg); 
	}

	public function edit($id) 
	{	
		$table = "category";
		$data = array();
		//$id = 2;
		$catModel = $this->view->model("CatModel");
		$data['cat_by_id'] = $catModel->catById($table, $id);

		$this->view->render("backend/category/edit",$data);
	}

	public function update() 
	{
		$table = "category";
		$id       = $_POST['id'];
		$cat_name = $_POST['cat_name'];
		$cond = "id = $id";

		$data = array(
			'cat_name' => $cat_name
		);

		$catModel = $this->view->model("CatModel");
		$update_cat = $catModel->updateCat($table, $data, $cond);

		$msg = array();

		if ($update_cat == 1) {
			$msg['msg'] = "<span style='color:green;'>Category updated successfully..</span>";
		} else {
			$msg['msg'] = "<span style='color:red;'>Category not updated !!</span>";
		}
	
		$this->view->render("backend/category/index", $msg); 
		
	}
	
	public function destroy($id) 
	{
		$table = "category";
		$cond  = "id = $id";

		$catModel = $this->view->model("CatModel");
		$delete_cat = $catModel->deleteCat($table, $cond);

		$msg = array();

		if ($delete_cat == 1) {
			$msg['msg'] = "<span style='color:green;'>Category deleted successfully ...</span>";
		} else {
			$msg['msg'] = "<span style='color:red;'>Category not deleted !!</span>";
		}
	
		$this->view->render("backend/category/index", $msg); 
	}
}


?>