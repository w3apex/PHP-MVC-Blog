<?php
/**
 * Error Controller
 */
class Error extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		echo "I am Error Controller";
	}

}


?>