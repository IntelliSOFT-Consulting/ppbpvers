<?php
$this->assign('Register', 'active');
echo $this->Html->script('jquery/combobox', array('inline' => false));
echo $this->Html->script('registration', array('inline' => false));

?>


<div class="row-fluid">
	<div class="span12">

		<div class="whmcscontainer">
			<div class="contentpadded">

				<div class="page-header">
					<div class="styled_title">
						<h1>Register</h1>
					</div>
				</div>
				<?php echo $this->Form->create($user); ?>

				<div class="row-fluid">
					<div class="span4">

						<?php
						echo $this->Form->control('username', ['label' => 'Username ', 'escape' => false, 'class' => '']); 
						echo $this->Form->control('password', [
							'label' => 'Password ',
							'escape' => false,
							 
						]);
						
						echo $this->Form->control('confirm_password', ['type' => 'password', 'label' => 'Confirm Password ', 'escape' => false]);
						echo $this->Form->control('name', ['label' => 'Name ', 'escape' => false]);
						echo $this->Form->control('email', ['label' => 'Email Address ', 'escape' => false]); 
						?> 
					</div>
					<div class="span4">
						<?php

						echo $this->Form->control('phone_no');
						echo $this->Form->control('designation_id', ['empty' => true]);
						echo $this->Form->control('user_type',[
							'type'=>'checkbox',
							'label'=>[
								'text'=>'Are you reporting for market authority?'
							]
						]);
						echo $this->Form->control('sponsor_email',[
							'class'=>'ribidi',
							'label'=>[
								'class'=>'ribidi'
							]
						]);
						echo $this->Form->control('county_id', ['empty' => true]); 
						// debug($this->Captcha->render());
						echo $this->Captcha->render([
							'placeholder' => __('Please solve the riddle'), 
						]);
						  
						?>
					</div><!--/span-->
					<div class="span4">
						<?php


						echo $this->Form->control('name_of_institution');
						echo $this->Form->control('institution_code');
						echo $this->Form->control('institution_address');
						echo $this->Form->control('institution_contact');
						echo $this->Form->control('institution_email');
 
						?>
					</div><!--/span-->
				</div><!--/row-->
				<hr>


				<div class="form-actions">
					<button type="submit" class="btn btn-primary active " id="login"><i class="icon-search icon-white"></i> Register</button>
				</div>
				<?php

				// Close the form
				echo $this->Form->end();
				?>
			</div>
		</div>
	</div>
</div>