<?php
/**
 * Slider Controller
 */
class Slider extends Controller {
	//protected $view;
	public function __construct() 
	{
		parent::__construct();
		//$this->view = new View();
	}

	public function show() {

		$table = "slider";
		$data = array();

		$slidModel = $this->view->model("SlidModel");//Model Name
		$data['slider'] = $slidModel->slidList($table);

		$this->view->render("backend/slider/index", $data);
	}

	public function create() 
	{
		$this->view->render("backend/slider/create");
	}

	public function store() 
	{

		$table = "slider";

		$title   	= $_POST['title'];
		$sub_title  = $_POST['sub_title'];
		$image   	= $_POST['image'];
			
		
		$data = array(

			'title'     => $title,
			'sub_title' => $sub_title,
			'image'     => $image
		);

		$slidModel = $this->view->model("SliderModel");
		$insert_cat = $slidModel->insertCat($table, $data);

		$msg = array();

		if ($insert_cat == TRUE) {
			$msg['msg'] = "<span style='color:green;'>Slider added successfully..</span>";
		} else {
			$msg['msg'] = "<span style='color:red;'>Slider not added !!</span>";
		}

		$this->view->render("backend/slider/create", $msg); 

	}

	public function edit($id) {

		$table = "slider";
		$data = array();

		$slidModel = $this->view->model("SliderModel"); 
		$data['cat_by_id'] = $slidModel->catById($table, $id);

		$this->view->render("backend/slider/edit", $data);
	}

	public function update() {

		$table   = "slider";

		$id       = $_POST['id'];
		$cat_name = $_POST['cat_name'];

		$cond     = "id = $id";

		$data = array(
			'cat_name' => $cat_name
		);

		$slidModel = $this->view->model("SliderModel");
		$update_slid = $slidModel->updateCat($table, $data, $cond);

		$msg = array();

		if ($update_slid == 1) {
			$msg['msg'] = "<span style='color:green;'>slider updated successfully..</span>";
		} else {
			$msg['msg'] = "<span style='color:red;'>slider not updated.</span>";
		}

		$this->view->render("backend/slider/index", $msg); 
	}
	
	public function destroy($id) {

		$table = "slider";
		$cond =  "id = $id"; 

		$slidModel = $this->view->model("SlidModel");
		$deleteSlid = $slidModel->deleteSlid($table, $cond);

		$msg = array();

		if ($deleteSlid == 1) {
			$msg['msg'] = "<span style='color:green;'>slider deleted successfully..</span>";
		} else {
			$msg['msg'] = "<span style='color:red;'>slider not deleted !!</span>";
		}

		header("Location:".BASE_URL."/slider/show?msg=".urlencode(serialize($msg))); 

	}
}


?>