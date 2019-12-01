
      
        </div>
    </div>
</div>

	<div class="bg-modal">
		<div class="modal-content">
			<div class="close">+</div>
				<form method="POST"  action="<?=base_url('login');?>">
					
				<div class="element-form"> 
						<input type="text" name="email" value="<?= set_value('email');?>" placeholder="Email"/>
						<small><?=  form_error('email');?></small>
				</div>
				<div class="element-form"> 
						<input type="password" name="password" placeholder="password"/>
						<small><?=  form_error('password');?></small>
				</div>	
				<div class="element-form"> 
						<input type="submit" value="Login" class="button"/>
					<a href="<?php echo base_url(); ?>login/registration"><span>Create account </span></a>
				</div>
					
				</form>

		</div>
	</div>
