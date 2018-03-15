<?php 
defined('BASEPATH') OR exit('No direct scripts allowed beyond this bullshit point');
class Home extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->helper(array('url'));
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function upload()
	{
		$this->load->view('upload');
	}

}



?>