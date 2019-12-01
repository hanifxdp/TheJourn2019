<div class="konten">

<form method="post" action="<?php base_url();?>konten/post" >
                <div class="element-form"> 
			<label>Judul</label>
			<span><input type="text" name="judul"/></span>
			
		</div>
        <select name="subject">
                <label>konten</label>
                <option value="lifestyle">lifestyle</option>
                <option value="food">food</option>
                <option value="Travel">Travel</option>
        </select>
<textarea name="post"></textarea>
              
                <script>
                        CKEDITOR.replace( 'post' );  

                </script>
<div class="element-form"> 
			<span><input type="submit" value="post" /></span>
		</div>
</form>
</div>
      
