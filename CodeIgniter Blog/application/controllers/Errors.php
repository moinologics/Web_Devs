<?php


/**
* 
*/
class Errors extends CI_Controller
{
	public function index(){
		$this->load->view('index.html');
	}
	
	public function error_404(){
		
		$this->load->view('404');
	}
}
