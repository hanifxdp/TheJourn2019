<div class="konten">

<form method="post" action="<?php base_url();?>konten/post" >
                <div class="element-form"> 
			<label>Judul</label>
                        <span><input type="text" name="judul"  />
                        </span>
			
		</div>
        <select name="subject">
                <label>konten</label>
                <option value="lifestyle">lifestyle</option>
                <option value="food">food</option>
                <option value="Travel">Travel</option>
        </select>
<textarea name="post" id="ckeditor">
      
</textarea>
              
                <script>
                        CKEDITOR.replace( 'post' );  
                        // var ckeditor= CKEDITOR.replace('post');
                        // CKEDITOR.disableAutoInline=true;
                        // CKEDITOR.inline('editable');

                </script>
<div class="element-form"> 
			<span><input type="submit" value="post" /></span>
		</div>
</form>
</div>
      
