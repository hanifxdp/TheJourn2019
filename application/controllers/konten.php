<?php
class konten extends CI_Controller {
	private $_table = "user";

    public $product_id;
    public $konten;
    public $tgl;

	public function index()
	{
		$data['judul']='Konten';
		$this->load->view('template/header',$data);
		$this->load->view('home/halaman_utama');
		if($this->session->userdata('status')=='on'){
			$this->load->view('template/logout_bar');
		}
	else
	{
		$this->load->view('template/login_bar');
		
	}

		$this->load->view('konten/postKonten');
		$this->load->view('template/footer');
	}
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}


	public function post()
	{
		// $this->load->library('../controllers/login');
		
		$time=time();
		$date=date("Y-m-d h:i:s",$time);
		$this->form_validation->set_rules('post','Post','required');
		
		if($this->input->post('subject')=='food'){
			$subject='1';
		}else if($this->input->post('subject')=='lifestyle'){
			$subject='2';
		}
		else{
			$subject='3';
		}
		
		$data1=[
			'subject'=> $this->input->post('subject'),
			'tanggal'=>$date,
			'user_id'=>$this->session->userdata('user_id'),
			'id_subject'=>$subject
		];
		$this->db->insert('konten', $data1);
		$data =[
			'konten'=> $this->input->post('post'),
			'tanggal_post'=>$date,
			'user_id'=>$this->session->userdata('user_id'),
			'title'=>$this->input->post('judul'),
			'id_konten'=> $this->db->insert_id()
			
		];
		
			$this->db->insert('post', $data);
			redirect('konten');

	}
}
