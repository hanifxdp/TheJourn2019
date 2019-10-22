<div class="login">
                    <li><a href="<?php echo base_url(); ?>login/Logout" class="button"><span>Logout</span></a>
                    </li>

                    <?php
                    $data['user']=$this->db->get_where('user', ['email'=>
                    $this->session->userdata('email')])->row_array();
                    ?>
                    <li><a href="<?php echo base_url(); ?>login/Logout" class="button"><span><?php echo $data['user']['nama'];?></span></a>
                    </li>

                </div>

                </ul>
             </nav>
         </div>
    <div id="content">

    </div>
</div>
</div>