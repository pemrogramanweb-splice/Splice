<?php
class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Splice_Model");
		$this->load->library('form_validation');
	}


	public function index()
	{
		$this->load->view('login/index', $data);
	}
}
