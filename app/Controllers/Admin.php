<?php
/**
 * Admin Controller
 */
class Admin extends Controller {

	public function __construct() 
	{
		parent::__construct();
		Session::checkSession();
	}

	public function index() 
	{ 	
		$this->view->render("backend/admin/dashboard"); 
	}


	public function logout() 
	{ 	
		Session::init();
		Session::destroy();
		header("Location:".BASE_URL."/Login");
	}
}	