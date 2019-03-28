<?php

class Login_signup extends CI_Controller
{
	
	public function index(){
		$this->load->helper('url');
		$this->load->library('session');
		if(isset($_SESSION['name']))
			return redirect('admin');
		$this->load->helper('url');
		$this->load->view('login');
	}

	public function login_validate(){

		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$this->load->helper('url');
		$this->load->model('My_model','m_obj');	//second optional parameter is modal obj new name
		if($session_ = $this->m_obj->login($email,$password)){
			$this->load->library('session');
			$this->session->set_userdata($session_);		//$session is an array containe name and email
			//print_r($_SESSION); exit;
			return redirect('admin/dashboard');
		}else{
			return redirect('Login_signup');
		}
	}

	public function logout()
	{
		$this->load->helper('url');
		$this->load->library('session');
		$this->session->unset_userdata(['name','email']); 	
		return redirect('admin');
	}
}