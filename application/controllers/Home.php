<?php
class Home extends CI_Controller {


	public function index()
	{
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
		
		
			
		$this->load->view('template/footer');
		
	}

}
