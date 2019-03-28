<?php


class Ajax extends CI_Controller
{
	
	public function add_like()
	{
		$artical_id = $this->input->post('artical_id');

		$this->load->model('My_model','m_obj');
		$result = $this->m_obj->add_like($artical_id);

		echo $result; 

	}
}



?>