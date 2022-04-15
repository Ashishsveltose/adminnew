<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
function __construct()
	{
		parent::__construct();
		
	}

	 
	public function index()
	{
		$this->load->view('Home');
		//echo "sfdg";
	}
	public function dashboard()
	{
		$this->load->view('welcome_message');
		//echo "sfdg";
	}
	public function items()
	{
		$this->load->view('items');
		//echo "sfdg";
	}
	
}
