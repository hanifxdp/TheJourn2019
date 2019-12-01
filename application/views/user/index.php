<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="<?php echo base_url()?>Asset/css/style.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo base_url()?>ckeditor/plugins/easyimage/styles/easyimage.css" type="text/css" rel="stylesheet" />
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
                                            <a class="edit" href="<?php base_url()?>User/changepassword" rel="noopener">change Password</a>
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
                        <div class="content-post">
                            <h3 class="info-post">
                                <?php
                                     $data['post']=$this->db->get_where('post', ['user_id'=>
                                     $this->session->userdata('user_id')])->row_array();
                                     echo $data['post']['konten'];
                                ?>
                            </h3>
                        </div>
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