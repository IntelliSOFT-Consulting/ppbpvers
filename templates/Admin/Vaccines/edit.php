<?php 
	$this->assign('Content', 'active');
?>

      <!-- Content
    ================================================== -->
	<h3>Vaccines <small>(EDIT VACCINE)</small></h3>

<div class="row-fluid" style="margin-bottom: 9px;">	
	<div class="span2 columns">
		<div class="row-fluid">
			<div class="span12">
				  <?php echo $this->element('admin/contentmenu')?>				  
			</div><!--/span-->
		</div><!--/row-->	
	</div> <!-- /span5 -->
	<div class="span10 columns">
		<div class="vaccines form">
		<?php echo $this->Form->create($vaccine); ?>
			<fieldset>
				<legend><?php echo __('Edit Vaccine'); ?></legend>
			<?php
				echo $this->Form->control('id');
				echo $this->Form->control('vaccine_name');
				echo $this->Form->control('description');				
				echo $this->Form->control('health_program', array( 'type' => 'select', 'options' => ['Malaria program' => 'Malaria program', 'National Vaccines and immunisation program' => 'National Vaccines and immunisation program', 
					'Neglected tropical diseases program' => 'Neglected tropical diseases program', 'MNCAH Priority Medicines' => 'MNCAH Priority Medicines', 'TB program' => 'TB program', 
					'NASCOP program' => 'NASCOP program', 'Cancer/Oncology program' => 'Cancer/Oncology program'], 'empty' => true,
					'label' => array('class' => 'control-label', 'text' => 'Public Health Program'),
					'class'=>'control-xlarge'));	
			?>
			</fieldset>
            <?php
             echo $this->Html->div(
                'form-actions', 
                $this->Form->button('<i class="icon-search icon-white"></i> Submit', [
                    'escapeTitle' => false,
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
