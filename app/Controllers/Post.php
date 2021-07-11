<?php
/**
 * Post Controller
 */
class Post extends Controller {
	//protected $view; //Object of View Class
	public function __construct() 
	{
		parent::__construct();
		//$this->view = new View();
	}

	public function show() 
	{ 	
		$table = "post";
		$data = array();
		$postModel = $this->view->model("PostModel");//Model Name // $postModel is an object
		$data['post'] = $postModel->postList($table);
		$this->view->render("backend/post/index", $data); 
	}

	/*
	$this->view = new View();
	$this->view->render();
	$this->view->model();
	*/

	public function create() 
	{
		$this->view->render("backend/post/create");
	}

	public function store() 
	{	
		$table = "post";
		$name = $_POST['cat_name'];

		$data = array(
			'cat_name' => $name
		);

		$postModel = $this->view->model("postModel");
		$insert_post = $postModel->insertPost($table, $data);

		$msg = array();

		if ($insert_post == TRUE) {
			$msg['msg'] = "<span style='color:green;'>Post added successfully..</span>";
		} else {
			$msg['msg'] = "<span style='color:red;'>Post not added !!</span>";
		}
	
		$this->view->render("backend/post/create", $msg); 
	}

	public function edit($id) 
	{	
		$table = "category";
		$data = array();
		//$id = 2;
		$postModel = $this->view->model("postModel");
		$data['post_by_id'] = $postModel->postById($table, $id);

		$this->view->render("backend/post/edit",$data);
	}

	public function update() 
	{
		$table = "post";
		$id       = $_POST['id'];
		$cat_name = $_POST['cat_name'];
		$cond = "id = $id";

		$data = array(
			'cat_name' => $cat_name
		);

		$postModel = $this->view->model("postModel");
		$update_post = $postModel->updatePost($table, $data, $cond);

		$msg = array();

		if ($update_post == 1) {
			$msg['msg'] = "<span style='color:green;'>Post updated successfully..</span>";
		} else {
			$msg['msg'] = "<span style='color:red;'>Post not updated !!</span>";
		}
	
		$this->view->render("backend/post/index", $msg); 
	}
	
	public function destroy($id) 
	{
		$table = "post";
		$cond  = "id = $id";

		$postModel = $this->view->model("postModel");
		$delete_post = $postModel->deletePost($table, $cond);

		$msg = array();

		if ($delete_post == 1) {
			$msg['msg'] = "<span style='color:green;'>Post deleted successfully ...</span>";
		} else {
			$msg['msg'] = "<span style='color:red;'>Post not deleted !!</span>";
		}
	
		$this->view->render("backend/post/index", $msg); 
	}
}


?>