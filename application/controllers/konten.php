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
		
			
			$data =[
				'konten'=> $this->input->post('post'),
				'tanggal_post'=>$date,
				'id_konten'=>'1',
				'user_id'=>$this->session->userdata('user_id'),
				'title'=>$this->input->post('judul'),
				
			];
		
			$data1=[
				'subject'=> $this->input->post('subject'),
				'tanggal'=>$date,
				'user_id'=>$this->session->userdata('user_id')
			];
		
			$this->db->insert('post', $data);
			$this->db->insert('konten', $data1);
			redirect('konten');

	}
}
