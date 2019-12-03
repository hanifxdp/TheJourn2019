<div class="konten">

<form method="post" action="<?php base_url();?>update_post" >
                <div class="element-form"> 
			<label>Judul</label>
            <span>
                <input type="text" name="update_judul"value="<?php
                        $data['post']=$this->db->get_where('post', ['user_id'=>
                        $this->session->userdata('user_id')])->row_array();
                        echo $data['post']['title'];
                        ?>"/>
            </span>
			
		</div>
        <select name="update_subject">
                <label>konten</label>
                <option value="lifestyle">lifestyle</option>
                <option value="food">food</option>
                <option value="Travel">Travel</option>
        </select>
<textarea name="update_post" id="ckeditor">
    <?php
         echo $data['post']['konten'];
    ?>
</textarea>
              
                <script>
                        CKEDITOR.replace( 'update_post' );  
                        
                </script>
<div class="element-form"> 
			<span><input type="submit" value="update" /></span>
		</div>
</form>
</div>
      
