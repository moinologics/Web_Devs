<?php


class User extends CI_Controller
{
	public function index()
	{	
		$this->load->model('My_model','m_obj');
		$articals = $this->m_obj->fetch_articals_user();
		$categories = $this->categories();
		$topartical = $this->TopArtical();
		$this->load->helper('url');
		$this->load->view('home',['articals'=>$articals,'topartical'=>$topartical,'categories'=>$categories]);
	}

	public function TopArtical()
	{
		$this->load->model('My_model','m_obj');
		return $this->m_obj->TopArtical();
	}

	public function categories()	//for inserting and fetching categories
	{
		$this->load->model('My_model','m_obj');
		$new = $this->input->get('new');
		if(isset($new)){
			$this->m_obj->categories($new);
		}
		else{
			$tmp = $this->m_obj->categories();		//tmp is 2D array but we want 1D
			foreach ($tmp as $index => $category) {
				$categories[$index] = $category['categories'];
			}
			return $categories;
		}
	}

	public function articals_by_category(){
		$category = $this->input->get('catg');
		$this->load->model('My_model','m_obj');
		$articals = $this->m_obj->fetch_articals_user('by_category','','',$category);
		$categories = $this->categories();
		$this->load->helper('url');
		$this->load->view('home',['articals'=>$articals,'categories'=>$categories]);
	}

	public function artical(){
		
		$artical_id = $this->input->get('id');
		$this->load->model('My_model','m_obj');
		$artical = $this->m_obj->fetch_articals_user('by_artical_id','',$artical_id);
		$comments = $this->m_obj->fetch_comments($artical_id);
		$topartical = $this->TopArtical();
		foreach ($comments as $index => $comment) {
			$comments[$index]['replies'] = json_decode($comments[$index]['replies'],true);	//second argument 'true' for array output 
		}
		//print_r($comments); exit;
		$this->load->helper('url');
		$this->load->view('artical',['artical'=>$artical[0],'comments'=>$comments,'categories'=>$this->categories(),'topartical'=>$topartical]);
	}

	public function submit_comment(){

		$artical_id = $this->input->post('artical_id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$comment = $this->input->post('comment');
		$replies = '[]';

		$this->load->model('My_model','m_obj');
		$this->m_obj->insercomment($artical_id,$name,$email,$comment,$replies);

		$this->load->helper('url');
		return redirect('user/artical?id='.$artical_id);
	}

	public function submit_reply(){

		$artical_id = $this->input->post('artical');
		$id = $this->input->post('cid');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$reply = $this->input->post('reply_text');

		$this->load->helper('url');
		date_default_timezone_set('Asia/Kolkata');
		$datetime = date("H:i d-M-Y");
		$data = ['name'=>$name,'email'=>$email,'date_time'=>$datetime,'reply'=>$reply];

		$this->load->model('My_model','m_obj');
		
		$bool = $this->m_obj->insertreply($id,$artical_id,$data);
		
		return redirect(base_url('user/artical?id='.$artical_id));
	}

	public function about()
	{
		$this->load->helper('url');
		$this->load->view('about');
	}

	public function contacts()
	{
		$this->load->helper('url');
		$this->load->view('contacts');
	}
	
}


