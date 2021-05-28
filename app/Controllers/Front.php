<?php
/**
 * Front Controller
 */
class Front extends Controller {
	//protected $view;
	public function __construct() {
		parent::__construct();
		//$this->view = new View();
	}

	public function index() {
		$this->view->render("frontend/index");
		//$this->view->render("backend/admin/index");
	}
}

//$font = new Font();
//$font->index();
//$this->view-> = $font

//index.php->Controller/Front.php->Libs/controller.php->Libs/View.php->render(page view)

?>