<?php
class User extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        
    }
    public function index(){
        // $data['user']=$this->db->get_where('user', ['email'=>
        // $this->session->userdata('email')])->row_array();
        // echo 'User '.$data['user']['nama'];
        $data['judul']='User';
        $this->load->view('user/index',$data);
    }
    public function profile(){
        
        // $data['judul']='Edit profile';
        // $this->load->view('template/header',$data);
        // $this->load->view('user/profile');
        $data['user']=$this->db->get_where('user',['email'=>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_baru','Nama Baru',
        'required|trim');
        $this->form_validation->set_rules('bio_baru','Bio Baru',
        'required|trim');
        if($this->form_validation->run()==false){
            $this->load->view('template/header',$data);
            $this->load->view('user/profile');

        }else{
            $nama_baru=$this->input->post('nama_baru');
            $bio_baru=$this->input->post('bio_baru');
            $this->db->set('nama', $nama_baru);
            $this->db->where('email', $this->session->userdata('email'));
            $this->db->set('bio', $bio_baru);
            $this->db->where('email', $this->session->userdata('email'));
            $this->db->update('user');
                    redirect('User');
        }


    }
    public function changepassword(){
        
        $data['judul']='Change password';
        $data['user']=$this->db->get_where('user',['email'=>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('current_password','Current Password',
        'required|trim');
        $this->form_validation->set_rules('new_password','New Password',
        'required|trim|min_length[3]|matches[repeat_password]');
        $this->form_validation->set_rules('repeat_password','Confirm Password',
        'required|trim|min_length[3]|matches[new_password]');
        if($this->form_validation->run()==false){
            $this->load->view('template/header',$data);
            $this->load->view('user/change_password');

        }else{
            $current_password=$this->input->post('current_password');  
            $new_password=$this->input->post('new_password');
            if(!password_verify($current_password, $data['user']['password'])) {
                // $this->session->set_flashdata();
                redirect('User/changepassword');
            }else{
                if($current_password == $new_password){
                    // $this->session->set_flashdata();
                    redirect('User/changepassword');

                }else{
                    //password tidak sama dengan yang lama
                    $password_hash=password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    redirect('User');
                }
            }
        }
    }
   

}