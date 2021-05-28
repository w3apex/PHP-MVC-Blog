<?php
/**
 * Category Controller
 */
class Category extends Controller {
	
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->view->render("backend/category/index");
		//$this->view->render("backend/admin/index");
	}
}


?>