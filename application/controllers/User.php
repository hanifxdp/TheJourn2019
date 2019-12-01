<?php
class User extends CI_Controller{
    public function index(){
        // $data['user']=$this->db->get_where('user', ['email'=>
        // $this->session->userdata('email')])->row_array();
        // echo 'User '.$data['user']['nama'];
        $data['judul']='User';
        $this->load->view('user/index',$data);
    }
    public function profile(){
        
        $data['judul']='Edit profile';
        $this->load->view('template/header',$data);
        $this->load->view('user/profile');
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
        if($this->form_validation-run()==false){
            $this->load->view('template/header',$data);
            $this->load->view('user/change_password');

        }
    }
   

}