<?php
/**
 * Front Controller
 */
class Front extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data = array();
		$catTable = "category";
		$catModel = $this->view->model("CatModel");//Model Name // $catModel is an object
		$data['cats'] = $catModel->catList($catTable);

		$Postable = "post";
		$postModel = $this->view->model("PostModel");//Model Name // $postModel is an object
		$data['posts'] = $postModel->postList($Postable);

		$this->view->render("frontend/index", $data);//File Name
	}
}


?>