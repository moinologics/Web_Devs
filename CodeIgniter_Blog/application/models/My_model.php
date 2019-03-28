<?php


class My_model extends CI_Model
{
	
	public function login($email,$password)
	{
		$this->load->database();

		//$q = "SELECT * FROM users";
		// $rows = $this->db->query($q)->result();	for all rows
		$obj = $this->db->where(['email'=>$email,'password'=>$password])
					->from('admins')
					->get();
		$row = $obj->result_array();
		if(sizeof($row) > 0){
			return ['name'=>$row[0]['name'],'email'=>$row[0]['email']];
		}else{
			return 0;
		}
	}

	public function fetch_articals_admin($admin)
	{
		$this->load->database();
		$obj = $this->db->where(['admin'=>$admin])
						->from('articals')
						->get();
		$rows = $obj->result_array();		//$rows is 2D array contains row(numeric index from 0)  
		// print_r($rows);
		return $rows;
	}

	public function add_update_artical($action,$title,$content,$admin,$date,$artical_id)
	{
		$this->load->database();
		if($action=='add'){
			$id = substr(uniqid(),-5);	//last 5 char
			$img = $id.'_1.jpg';
			$this->db->insert('articals',['artical_id'=>$id,'title'=>$title,'images'=>$img,'content'=>$content,'date'=>$date,'admin'=>$admin]);
		}
		else{
			$result = $this->db->where(['artical_id'=>$artical_id])
								->update('articals',['title'=>$title,'content'=>$content]);
		}
	}

	public function delete_artical($artical)
	{
		$this->load->database();
		$this->db->delete('articals',['artical_id'=>$artical]);
	}

	public function fetch_articals_user($condition='',$admin='',$artical_id='',$category='')
	{
		$this->load->database();
		if($condition=='')
			$rows = $this->db->query("SELECT * FROM articals")->result_array();
		elseif($condition=='by_admin')
			$rows = $this->fetch_articals_admin($admin);		
		elseif($condition=='by_date_newest_first')
			$rows = '';
		elseif($condition=='by_date_oldest_first')
			$rows = '';
		elseif($condition=='by_artical_id'){
			$obj = $this->db->where(['artical_id'=>$artical_id])
							->from('articals')
							->get();
			$rows = $obj->result_array();
		}
		elseif($condition=='by_category'){
			$obj = $this->db->where(['category'=>$category])
							->from('articals')
							->get();
			$rows = $obj->result_array();
		}
		return $rows;
	}

	public function TopArtical()
	{
		$this->load->database();
		$obj = $this->db->order_by('likes','DESC')
						->from('articals')
						->get()->result_array();
		return $obj;
	}

	public function categories($new='')
	{	
		$this->load->database();
		if($new==''){
			$categories = $this->db->from('info')->get()->result_array();
			return $categories;
		}else{
			$this->db->insert('info',['categories'=>$new]); 
			return [];
		}
		
	}

	public function fetch_comments($artical_id)
	{
		$this->load->database();
		$obj = $this->db->where(['artical_id'=>$artical_id])
						->from('comments')
						->get();
		$comments = $obj->result_array();	
		return $comments;
	}

	public function insercomment($artical_id,$name,$email,$comment,$replies)
	{
		$this->load->database();
		date_default_timezone_set('Asia/Kolkata');
		$datetime = date("H:i d-M-Y");
		return $this->db->insert('comments',['artical_id'=>$artical_id,'commenter_name'=>$name,'commenter_email'=>$email,'comment'=>$comment,'date_time'=>$datetime,'replies'=>$replies]);
	}

	public function insertreply($id,$artical_id,$data)
	{
		$this->load->database();
		$obj = $this->db->where(['id'=>$id,'artical_id'=>$artical_id])
						->from('comments')
						->get();
		$old_replies = $obj->result_array()[0]['replies'];

		$old_replies = json_decode($old_replies,true);
		array_push($old_replies,$data);
		$new_replies = json_encode($old_replies);

		$new = ['replies'=>$new_replies];
		$result = $this->db->where(['id'=>$id,'artical_id'=>$artical_id])
					->update('comments',$new);
		return $result;

	}

	public function add_like($artical_id)
	{
		$this->load->database();

		$obj = $this->db->where(['artical_id'=>$artical_id])
						->set('likes', 'likes+1', FALSE)	//false(optional) for not check for sql injection mean ' quotes
						->update('articals');
		if($obj==1) return 'liked';
		else return 'error';
	}



	
}