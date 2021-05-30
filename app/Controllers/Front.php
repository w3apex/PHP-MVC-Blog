<?php
/**
 * Front Controller
 */
class Front extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->view->render("frontend/index"); //File Name
	}

	public function catList() {
		$data = array();

		$catModel = $this->view->model("CatModel"); // Model Name
		$data['cat'] = $catModel->catList();
		//$data['post'] = $postModel->postList();
		//$data['brand'] = $brandModel->brandList();

		$this->view->render("backend/category/index", $data); 

	}
}


?>