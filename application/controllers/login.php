<?php
class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run() == false){
			$data['judul']='Login';
			$this->load->view('template/header',$data);
			$this->load->view('home/halaman_utama');
			$this->load->view('auth/login_page');
			$this->load->view('template/footer');

		}else{
			//validation succes
			$this->_login();
		}
	}
	private function _login()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');

		$user =$this->db->get_where('user',['email'=>$email])->row_array();
		if($user){
			if($user['status'] == "on"){
				if(password_verify($password,$user['password'])){
					$data =[
						'user_id'=>$user['user_id'],
						'email'=> $user['email'],
						'level'=> $user['level'],
						'status'=> $user['status']
					];
					$this->session->set_userdata($data);
					redirect('Home');
				}else{
					redirect('login');
				}
			}
		}else{
			$this->session->set_flashdata('message','<p>Email not registered </p>');
			redirect('login');
		}

	}
	public function registration()
	{
		$this->form_validation->set_rules('nama_lengkap',  'Name', 'required|trim');
		$this->form_validation->set_rules('email',  'Email', 'required|trim|valid_email|is_unique[user.email]',['is_unique'=>'This email has already registered!']);
		$this->form_validation->set_rules('password',  'Password', 'required|trim|min_length[3]|matches[re_password]',['matches'=>'password dont match!','min_length'=>'Password to Short']);
		$this->form_validation->set_rules('re_password',  'Password', 'required|trim|matches[password]');
		if($this->form_validation->run()== false){
			$data['judul']='Registration';
			$this->load->view('template/header',$data);
			$this->load->view('home/halaman_utama');
			$this->load->view('auth/register');
			$this->load->view('template/footer');

		}
		else{
			$data =[
				'level' => "member",
				'nama'=> htmlspecialchars($this->input->post('nama_lengkap',true)),
				'email'=> htmlspecialchars($this->input->post('email',true)),
				'password'=> password_hash($this->input->post('password'),PASSWORD_DEFAULT),
				'status' => "on"
			];
			$this->db->insert('user', $data);
	
			redirect('login');
		}
		
	}
	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('status');
		redirect('login');
	}


}
