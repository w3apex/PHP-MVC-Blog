<?php
/**
 * Front Controller
 */
class Front extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->view->render("frontend/index");//File Name
	}
}


?>