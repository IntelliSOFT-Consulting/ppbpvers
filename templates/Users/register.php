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
				<?php


				echo $this->Form->create($user);

				?>

				<div class="row-fluid">
					<div class="span4">

						<?php
						echo $this->Form->control('username', ['label' => 'Username ', 'escape' => false, 'class' => 'span8']);
						// echo $this->Form->control('password', ['label' => 'Password ', 'escape' => false]);
						echo $this->Form->control('password', [
							'label' => 'Password ',
							'escape' => false,
							'templates' => [
								'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>',
							],
						]);
						
						echo $this->Form->control('confirm_password', ['type' => 'password', 'label' => 'Confirm Password ', 'escape' => false]);
						echo $this->Form->control('name', ['label' => 'Name ', 'escape' => false]);
						echo $this->Form->control('email', ['label' => 'Email Address ', 'escape' => false]); 
						?>


						<?php
						// echo $this->Form->control('username', array(
						// 	'class' => 'span8',
						// 	'label' => array('class' => 'control-label required', 'text' => 'Username'),
						// ));
						// echo $this->Form->control('password', array(
						// 	'class' => 'span8',
						// 	'label' => array('class' => 'control-label required', 'text' => 'Password'),
						// ));
						// echo $this->Form->control('confirm_password', array(
						// 	'class' => 'span8',
						// 	'type' => 'password',
						// 	'label' => array('class' => 'control-label required', 'text' => 'Confirm Password'),
						// ));
						// echo $this->Form->control('name', array(
						// 	'class' => 'span8',
						// 	'label' => array('class' => 'control-label required', 'text' => 'Name'),
						// ));
						// echo $this->Form->control('email', array(
						// 	'class' => 'span8',
						// 	'type' => 'email',
						// 	'div' => array('class' => 'control-group required'),
						// 	'label' => array('class' => 'control-label required', 'text' => 'E-MAIL ADDRESS')
						// ));
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
						 

						// echo $this->Form->control('phone_no', array(
						// 	'class' => 'span8',
						// 	'label' => array('class' => 'control-label', 'text' => 'Phone Number'),
						// ));
						// echo $this->Form->control('designation_id', array(
						// 	'class' => 'span8',
						// 	'label' => array('class' => 'control-label', 'text' => 'Designation'),
						// ));
						// echo $this->Form->control('user_type', array(
						// 	'type' => 'checkbox',
						// 	'class' => ' ',
						// 	'div' => array('class' => 'control-group user_user_type'),
						// 	'label' => array('class' => 'control-label user_user_type', 'text' => 'Are you reporting for market authority?'),
						// ));


						// echo $this->Form->control('sponsor_email', array(
						// 	'type' => 'email',
						// 	'class' => 'ribidi span8',
						// 	'div' => array('class' => 'control-group ribidi'),
						// 	'label' => array('class' => 'control-label required ribidi', 'text' => 'Company\'s Email')
						// ));
						// echo $this->Form->control('county_id', array(
						// 	'class' => 'span8',
						// 	'label' => array('class' => 'control-label required', 'text' => 'County '),
						// 	'empty' => true,
						// 	'between' => '<div class="controls ui-widget">',
						// ));
						?>
					</div><!--/span-->
					<div class="span4">
						<?php


						echo $this->Form->control('name_of_institution');
						echo $this->Form->control('institution_code');
						echo $this->Form->control('institution_address');
						echo $this->Form->control('institution_contact');
						echo $this->Form->control('institution_email');


						// echo $this->Form->control('name_of_institution', array(
						// 	'class' => 'user_name_of_institution span8',
						// 	'label' => array('class' => 'control-label', 'text' => 'Name of Institution'),
						// 	'after' => '<p class="help-block"> Start typing and suggestions will appear </p></div>',
						// ));
						// echo $this->Form->control('institution_code', [
						// 	'class' => 'user_institution_code span8',
						// 	'label' => [
						// 		'class' => 'control-label institution_code',
						// 		'text' => 'Institution Code'
						// 	],
						// 	'templates' => [
						// 		'inputContainer' => '<div class="form-group">{{content}}</div>',
						// 		'input' => '<input type="text" name="{{name}}"{{attrs}}><p class="help-block">Start typing and suggestions will appear</p>'
						// 	]
						// ]);

						// echo $this->Form->control('institution_address', array(
						// 	'class' => 'user_institution_address span8',
						// 	'label' => array('class' => 'control-label ', 'text' => 'Institution Address'),
						// ));
						// echo $this->Form->control('institution_contact', array(
						// 	'class' => 'user_institution_contact span8',
						// 	'label' => array('class' => 'control-label', 'text' => 'Institution Contacts'),
						// ));
						// echo $this->Form->control('institution_email', array('class' => 'span8', 'type' => 'email', 'label' => array('class' => 'control-label', 'text' => 'Institution Email'),));


						// echo $this->Captcha->control('null', array('label' => false, 'type' => 'number'));
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