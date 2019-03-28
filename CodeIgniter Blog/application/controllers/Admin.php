<?php


class Admin extends CI_Controller
{
	public function index(){

		$this->load->helper('url');
		$this->load->library('session');
		if(!isset($_SESSION['name']))
			return redirect('login_signup');
		return redirect('admin/dashboard');
	}

	public function dashboard()
	{	
		$this->load->helper('url');
		$this->load->library('session');
		if(!isset($_SESSION['name']))
			return redirect('login_signup');
		$this->load->model('My_model','m_obj');
		$rows = $this->m_obj->fetch_articals_user('by_admin','abc@gmail.com');
		$this->load->view('admin_dashboard',['articals'=>$rows]);		//$rows access as $articals on view
	}

	public function add_artical()
	{
		$this->load->helper('url');
		$this->load->library('session');
		if(!isset($_SESSION['name']))
			return redirect('login_signup');
		$this->load->view('add_artical');		//$rows access as $articals on view
	}

	public function submit_artical()	//for adding end editing
	{
		$this->load->helper('url');
		$this->load->library('session');
		if(!isset($_SESSION['name']))
			return redirect('login_signup');
		$action = $this->input->post('action');
		$artical_id = $this->input->post('artical');	//valid in edit action
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$admin = $this->session->userdata('email');
		date_default_timezone_set('Asia/Kolkata');
		$date = date("d-M-Y");
		$this->load->model('My_model','m_obj');
		$this->m_obj->add_update_artical($action,$title,$content,$admin,$date,$artical_id);
		return redirect('admin/dashboard');
	}

	public function edit_artical()
	{	
		$this->load->helper('url');
		$this->load->library('session');
		if(!isset($_SESSION['name']))
			return redirect('login_signup');
		$artical_id = $this->input->get('artical');

		$this->load->model('My_model','m_obj');
		$rows = $this->m_obj->fetch_articals_user('by_artical_id','',$artical_id);
		$this->load->view('add_artical',['artical_id'=>$artical_id,'title'=>$rows[0]['title'],'content'=>$rows[0]['content']]);
		
	}

	public function delete_artical()
	{
		$this->load->helper('url');
		$this->load->library('session');
		if(!isset($_SESSION['name']))
			return redirect('login_signup');
		$artical_id = $this->input->get('artical');

		$this->load->model('My_model','m_obj');

		$this->m_obj->delete_artical($artical_id);
		return redirect('admin/dashboard');
	}
}