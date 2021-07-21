<?php
/**
 * Admin Controller
 */
class Admin extends Controller {

	public function __construct() 
	{
		parent::__construct();

		Session::init();
		$login = Session::get("loggedIn");
		if ($login == false) {
			Session::destroy();
			header("Location:".BASE_URL."/Login");
			exit();
		}
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