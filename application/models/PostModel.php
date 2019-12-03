
	
<?php
class PostModel extends CI_Model {
 private $_table = "post";
 private $_table2 = "konten";

 public function __construct(){
     parent::__construct();
    $this->load->database();
 }
 public function get_posts(){
    
     $query=$this->db->get('post');
     return $query;
 }
public function hapusPost($id){
    $this->db->where('post_id',$id);
    $this->db->delete('post');
}
 
}
?>