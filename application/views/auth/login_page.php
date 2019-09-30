<div id="container-user-akses" method="post" action="<?=base_url('login');?>">
	<form action=" "method="POST">
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
			<span><input type="submit" value="Login" /></span>
		</div>
		<div class="element-form"> 
		<a href="<?php echo base_url(); ?>login/registration"><span>Create account </span></a>
		</div>
		
	</form>
</div>