<?php
/**
 * Login Controller
 */
class Login extends Controller {

	public function __construct() 
	{
		parent::__construct();
	}

	public function index() 
	{ 	
		$this->login();
	}

	public function login() 
	{ 	
		Session::init();
		if (Session::get("loggedIn") == true) {
			header("Location:".BASE_URL."/Admin");
		}
		$this->view->render("backend/login/login"); 
	}

	public function adminLoginAct() 
	{ 	
		if ((isset($_POST['email']) && $_POST['email'] != "") && (isset($_POST['password']) && $_POST['password'] != "")) {

			$table = "admin";
			$email    = $_POST['email'];
			$password = md5($_POST['password']);
			
			$data = array(
				'email' => $email,
				'password' => $password
			);

			$loginModel = $this->view->model("LoginModel");
			$count = $loginModel->loginControl($table, $data);	


			if ($count > 0) {
				Session::init();
				Session::set("loggedIn", true);
				//Session::set("name", $name);
				Session::set("email", $email);
				//Session::set("id", $id);

				header("Location:".BASE_URL."/Admin");
			} 
			else {
				//echo "Your username or Password incurrect !!";
				header("Location:".BASE_URL."/Login");
			}
		} 
		else {
			header("Location:".BASE_URL."/Login");
		}
		
		
	}

}	