<?php
class lifestyle extends CI_Controller {


	public function index()
	{
		
		$data['judul']='Lifestyle';
		$this->load->view('template/header',$data);
		$this->load->view('lifestyle/lifestyle_home');
		$this->load->view('template/footer');
	}
	
}
