<?php
class food extends CI_Controller {


	public function index()
	{
		$data['judul']='Food';
		$this->load->view('template/header',$data);
		$this->load->view('food/food_home');
		$this->load->view('template/footer');
	}

}
