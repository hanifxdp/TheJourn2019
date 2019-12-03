<?php
class konten extends CI_Controller {
	private $_table = "user";

    public $product_id;
    public $konten;
    public $tgl;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('PostModel');

	
	}
	public function index()
	{
		$data['posts']=$this->PostModel->get_posts();
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

		$this->load->view('konten/postKonten',$data);
		$this->load->view('template/footer');
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
	public function get(){
		$this->data['posts'] = $this->PostModel->getPosts(); // calling Post model method getPosts()
   		// $this->load->view('posts_view', $this->data);
	}
	public function update_post(){
		$data['post']=$this->db->get_where('post', ['user_id'=>
        $this->session->userdata('user_id')])->row_array();
		$this->form_validation->set_rules('update_judul','Update Judul',
        'required|trim');
		$this->form_validation->set_rules('update_subject','Update Subject',
        'required|trim');
		$this->form_validation->set_rules('update_post','Update Post',
		'required|trim');
		if($this->form_validation->run()==false){
			$data['judul']='edit konten';
			$this->load->view('template/header',$data);
			$this->load->view('home/halaman_utama');
			if($this->session->userdata('status')=='on'){
				$this->load->view('template/logout_bar');
			}
			else
			{
				$this->load->view('template/login_bar');
				
			}

			$this->load->view('konten/update_post',$data);
			$this->load->view('template/footer');
		 }
		 else{
			 $judulBaru=$this->input->post('update_judul');
			 $subject=$this->input->post('update_subject');
			 if($this->input->post('update_subject')=="food"){
				$subjectBaru='1';
			}else if($this->input->post('update_subject')=="lifestyle"){
				$subjectBaru='2';
			}
			else{
				$subjectBaru='3';
			}
			 $kontenBaru=$this->input->post('update_post');
			 $this->db->set('title', $judulBaru);
			 $this->db->where('id_konten',$data['post']['id_konten'] );
			 $this->db->set('konten', $kontenBaru);
			 $this->db->where('id_konten',$data['post']['id_konten']);
			 $this->db->update('post');
			 $data['konten']=$this->db->get_where('konten', ['user_id'=>
			 $this->session->userdata('user_id')])->row_array();
			 $this->db->set('id_subject',$subjectBaru);
			 $this->db->where('id_konten',$data['konten']['id_konten']);
			 $this->db->set('subject',$subject);
			 $this->db->where('id_konten',$data['konten']['id_konten']);
			 $this->db->update('konten');
			 redirect('User');



		 }
	 
	 }
	 public function hapus($id){
		$this->PostModel->hapusPost($id);
		redirect('user');
	 }
	 
}
