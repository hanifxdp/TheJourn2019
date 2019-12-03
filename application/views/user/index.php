<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="<?php echo base_url()?>Asset/css/style.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo base_url()?>ckeditor/plugins/easyimage/styles/easyimage.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="<?= base_url()?>ckeditor/ckeditor.js"></script>
        <script src="https://kit.fontawesome.com/7d908fb9a4.js" crossorigin="anonymous"></script>
        <title><?=$judul;?></title>
    </head>
    <body>
        <div id="root">
            <div class="under-root">
                <section class="section-class">
                    <div class="inside">
                            <nav class="nav-bar">
                                <div class="in-nav">
                                    <div class="in-nav-in">
                                        <div class="nav-in">
                                            <div class="ano-in">
                                                <div class="ano-in-in">
                                                    <a href="" aria-label="homepage" rel="noopener">
                                                        <div class="inside-ano-in">
                                                            <a href="<?php echo base_url();?>">
                                                            <img class="logo" src="<?php echo base_url(); ?>Asset/images/judul.png" width="272" height="50">
                                                            </a>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ano-in-acc">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                            <div class="margins-bot"></div>
                            <div class="content-in">
                                <div class="content-profile">
                                    img from database user
                                </div>
                                <div class="content-profile-init">

                                    <div class="name">
                                    <?php
                                        $data['user']=$this->db->get_where('user', ['email'=>
                                        $this->session->userdata('email')])->row_array();
                                        ?>
                                        <h1 class="name-name"><?php echo $data['user']['nama'];?></h1>
                                        <div class="edit-profile">
                                            <a class="edit" href="<?php base_url()?>User/profile" rel="noopener">edit profile</a>
                                        </div>
                                        <div class="edit-profile">
                                            <a class="edit" href="<?php base_url()?>User/profile" rel="noopener">change Password</a>
                                        </div>
                                        <div class="edit-profile">
                                            <a class="edit" href="<?php base_url()?>konten" rel="noopener">New Post</a>
                                        </div>
                                    </div>
                                    <div class="short-bio">
                                        <p class="bio"><?php echo $data['user']['bio'];?> </p>
                                    </div>
                                    <span></span>
                                    <div class="following">
                                        <span class="span-following">
                                            <div class="in-following">
                                                <div class="in-in-following">
                                                    <a class="a-following">1 following</a>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
        <div class="post-new">
            <div class="label-post">
                <h4 class="latest">Latest</h4>
            </div>
            <?php
             $data['user']=$this->db->get_where('user', ['email'=>
             $this->session->userdata('email')])->row_array();
                            if($posts->num_rows() > 0){
                            foreach($posts->result() as $row)
                            {
            ?>
            <div class="post-an">
                <div class="under-post-an">
                    <div class="info-post">
                        <div class="nama-dan-lain-lain">
                            <div class="fix-nama-dan-tanggal">
                                <div>
                                    <a rel="noonopener" href="">
                                        <img src="<?php echo base_url()?>Asset/images/kudaliar.png"  width="40" height="40">
                                    </a>
                                </div>
                                <div class="nama-tanggal">
                                    <div class="nama-doang">
                                        <div style="flex: 1 1 0%;">
                                            <span class="spanning-astaga">
                                                <div class="dalaman-span-lg">
                                                    <span class="span-nama">
                                                        <a class="a-nama"><?php echo $data['user']['nama'];?></a>
                                                    </span>
                                                    
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="span-tanggal">
                                        <span class="span-nama">
                                            <div>
                                                <a class="a-nama"><?php echo $row->tanggal_post;?></a>
                                            </div>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="buat-span">
                            <span class="span-tanggal"></span>
                        </div>
                    </div>
                    <div class="postingan-akhirnya">
                        <a class="a-post">
                            <div>
                                <div class="buat-post"></div>
                                <section class="section-post">
                                    <div>
                                        <h1 class="judul-post"><?php echo $row->title; ?></h1>
                                    </div>
                                    <p id="" class="isi-post" data-selectable-paragraph=""><?php echo $row->konten;?></p>
                                    
                                </section>
                            </div>
                        </a>
                    </div>
                    <span class="span-buat-delete-dan-bookmark">
                        <div class="dalaman-span-buat-delete">
                            <div class="clap">
                                
                            </div>
                            <div class="span-buat-delete"></div>
                            <div class="delete-dan-lainnya">
                                <div class="delete-pol">
                                    <div class="button-delete">
                                        <a class="fa fa-trash" href="<?= base_url(); ?>konten/hapus/<?= $row->post_id;?>" rel="noopener"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
                        <!-- <div class="content-post">
                        <?php
                            if($posts->num_rows() > 0){
                            foreach($posts->result() as $row)
                            {
                        ?>
                            <tr>
                                <td> <?php echo $row->konten;?></td>
                            </tr>
                        <h3 class="info-post">  
                        <?php
                        echo $row->tanggal_post;

                        ?>
                        </h3>
                        <?php
                            }
                        }
                        ?>
                        </div> -->
                </section>
            </div>
        </div>
    </body>
</html>
<!-- <div class="wrapper">
    <div class="sidebar">
                     <?php
                    $data['user']=$this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
                    ?>
        <h2><?php echo $data['user']['nama'];?></h2>
        <ul>
            <?php
                if($this->session->userdata('level')=="admin"){
            ?>
            <li><a href="<?php echo base_url()?>konten"><i class="fas fa-user"></i>Admin</a></li>
            <?php
                }
                ?>
            <li><a href="<?php echo base_url()?>konten"><i class="fas fa-plus-circle"></i>New Post</a></li>
            <li><a href="<?php echo base_url()?>konten"><i class="fas fa-thumbtack"></i>POST</a></li>
            <li><a href="#"><i class="fas fa-key">Change Password</i></a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt">Logout</i></a></li>
          
        </ul>
    </div>
    <div class="main_content">
        <div class="header">MY PROFILE</div>
        <div class="info">
        <?php
            $data['post']=$this->db->get_where('post', ['user_id'=>
            $this->session->userdata('user_id')])->row_array();
            echo $data['post']['konten'];
         ?>
        </div>
     
    </div>
</div> -->