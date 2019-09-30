<?php
class travel extends CI_Controller {


	public function index()
	{
		$data['judul']='Travel';
		$this->load->view('template/header',$data);
		$this->load->view('travel/travel_home');
		$this->load->view('template/footer');
	}
	
}
