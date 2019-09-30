<div id="container-user-akses">
	<form method="post" action="<?php base_url('login/registration');?>">
		<div class="element-form"> 
			<label>Nama Lengkap</label>
			<span><input type="text" name="nama_lengkap" value="<?= set_value('nama_lengkap');?>" /></span>
			<small><?=  form_error('nama_lengkap');?></small>
			
		</div>
		
		<div class="element-form"> 
			<label>Email</label>
			<span><input type="text" name="email" value="<?= set_value('email');?>"/></span>
			<small><?=  form_error('email');?></small>
		</div>

		<div class="element-form"> 
			<label>Password</label>
			<span><input type="password" name="password" /></span>
			<small><?=  form_error('password');?></small>
		</div>
		
		<div class="element-form"> 
			<label>Re-type Password</label>
			<span><input type="password" name="re_password" /></span>
		</div>
		
		<div class="element-form"> 
			<span><input type="submit" value="register" /></span>
		</div>
		
		<div class="element-form"> 
		<a href="<?php echo base_url(); ?>login"><span>Already have account ?</span></a>
		</div>
		
	</form>
</div>