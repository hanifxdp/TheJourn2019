<div id="root">
 
    <div class="post-new">
        <section class="section-class">
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
                    </div>
                </div>
                <?php
                        }
                    }
                ?>
        </section>  
    </div>
</div>
  