<?php
/**
 * Post Controller
 */
class Sana extends Controller {
	
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->view->render("frontend/index");
		//$this->view->render("backend/admin/index");
	}
}


?>