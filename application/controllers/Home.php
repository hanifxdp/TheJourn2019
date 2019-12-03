<?php
class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PostModel');

	
	}
	public function index()
	{
		$data['posts']=$this->PostModel->get_posts();
		$data['judul']='The journ';
		$this->load->view('template/header',$data);
		$this->load->view('home/halaman_utama');
		
		
	
			if($this->session->userdata('status')=='on'){
					$this->load->view('template/logout_bar');
				}
			else
			{
				$this->load->view('template/login_bar');
				
			}

		
		
			
		$this->load->view('home/home_post');
		$this->load->view('template/footer');
		
	}
	public function get(){
		$this->data['posts'] = $this->PostModel->getPosts(); // calling Post model method getPosts()
   		// $this->load->view('posts_view', $this->data);
	}

}
