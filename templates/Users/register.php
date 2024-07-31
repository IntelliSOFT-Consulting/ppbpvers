<?php
$this->assign('Register', 'active');
echo $this->Html->script('jquery/combobox', array('inline' => false));
echo $this->Html->script('register', array('inline' => false));
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

				echo $this->Flash->render();

				echo $this->Form->create($user, array(
					'class' => 'form-horizontal',
					// 'controlDefaults' => array(
					// 	'div' => array('class' => 'control-group'),
					// 	'label' => array('class' => 'control-label'),
					// 	'between' => '<div class="controls">',
					// 	'after' => '</div>',
					// 	'class' => '',
					// 	'format' => array('before', 'label', 'between', 'control', 'after', 'error'),
					// 	'error' => array('attributes' => array('class' => 'controls help-block')),
					// ),
				));
				?>



				<div class="row-fluid">
					<div class="span6">
						<?php
						echo $this->Form->control('username', array('label' => array('class' => 'control-label required', 'text' => 'Username'),));
						echo $this->Form->control('password', array('label' => array('class' => 'control-label required', 'text' => 'Password'),));
						echo $this->Form->control('confirm_password', array(
							'type' => 'password',
							'label' => array('class' => 'control-label required', 'text' => 'Confirm Password'),
						));
						echo $this->Form->control('name', array('label' => array('class' => 'control-label required', 'text' => 'Name'),));
						echo $this->Form->control('email', array(
							'type' => 'email',
							'div' => array('class' => 'control-group required'),
							'label' => array('class' => 'control-label required', 'text' => 'E-MAIL ADDRESS')
						));
						echo $this->Form->control('phone_no', array('label' => array('class' => 'control-label', 'text' => 'Phone Number'),));
						echo $this->Form->control('designation_id', array('label' => array('class' => 'control-label', 'text' => 'Designation'),));
						echo $this->Form->control('user_type', array(
							'type' => 'checkbox',  'value' => 'Market Authority', 'label' => false, 'class' => false, 'hiddenField' => false,
							'between' => '<label class="controls checkbox">',
							'after' => 'Are you reporting for market authority? </label>',
						));

						echo $this->Form->control('sponsor_email', array(
							'type' => 'email',
							'div' => array('class' => 'control-group ribidi'),
							'label' => array('class' => 'control-label required', 'text' => 'Company\'s Email')
						));
						?>
					</div><!--/span-->
					<div class="span6">
						<?php
						echo $this->Form->control('name_of_institution', array(
							'label' => array('class' => 'control-label', 'text' => 'Name of Institution'),
							'after' => '<p class="help-block"> Start typing and suggestions will appear </p></div>',
						));
						echo $this->Form->control('institution_code', array(
							'label' => array('class' => 'control-label', 'text' => 'Institution Code'),
							'after' => '<p class="help-block"> Start typing and suggestions will appear </p></div>',
						));
						echo $this->Form->control('institution_address', array('label' => array('class' => 'control-label', 'text' => 'Institution Address'),));
						echo $this->Form->control('institution_contact', array('label' => array('class' => 'control-label', 'text' => 'Institution Contacts'),));
						echo $this->Form->control('institution_email', array('type' => 'email', 'label' => array('class' => 'control-label', 'text' => 'Institution Email'),));
						echo $this->Form->control('county_id', array(
							'label' => array('class' => 'control-label required', 'text' => 'County '),
							'empty' => true, 'between' => '<div class="controls ui-widget">',
						));

						// echo $this->Captcha->control('User', array('label' => false, 'type' => 'number'));
						?>
					</div><!--/span-->
				</div><!--/row-->
				<hr>



				<?php
				echo $this->Form->control('bot_stop', array(
					'div' => array('style' => 'display:none')
				));
				// echo $this->Form->end(array( 
				// 	'label' => 'Submit',
				// 	'value' => 'Save',
				// 	'class' => 'btn btn-primary',
				// 	'id' => 'SadrSaveChanges',
				// 	'div' => array(
				// 		'class' => 'form-actions',
				// 	)
				// ));

				echo $this->Html->div(
					'form-actions',
					$this->Form->button('Save', [
						'type' => 'Submit',
						'class' => 'btn btn-primary',
						'id' => 'SadrSaveChanges'
					])
				);

				// Close the form
				echo $this->Form->end();
				?>
			</div>
		</div>
	</div>
</div>