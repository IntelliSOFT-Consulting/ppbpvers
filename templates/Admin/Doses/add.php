<?php 
	$this->assign('CMS', 'active');
?>

      <!-- CMS
    ================================================== -->
	<h3>Content Management System <small>(ADD A NEW DOSE)</small></h3>
		<p>Please ensure the code corresponds to the ICSR specified code and that the code does not already exist.</p>	
		<hr>
	<div class="row-fluid" style="margin-bottom: 9px;">	
		<div class="span2 columns">
			<div class="row-fluid">
				<div class="span12">
					  <?php echo $this->element('admin/contentmenu')?>				  
				</div><!--/span-->
			</div><!--/row-->	
		</div> <!-- /span5 -->

		<div class="span10 columns">			
			<div class="row-fluid"> 	
				<div class="span12"> 	
					<div class="whmcscontainer">
					<div class="contentpadded">
						<div class="page-header">
							<div class="styled_title"><h1>Add A New Dose</h1></div>
						</div>	
						<?php										
							echo $this->Form->create();
                           
							
						?>					
						<div class="row-fluid">
							<div class="span12">
								<?php								
									echo $this->Form->control('value', array(
										'label' => array('class' => 'control-label', 'text' => 'Value'),
										'class'=>'control-xlarge'));									
									echo $this->Form->control('icsr_code', array(
										'label' => array('class' => 'control-label', 'text' => 'ICSR Code'),
										'class'=>'control-xlarge'));					
									echo $this->Form->control('name', array(
										'label' => array('class' => 'control-label', 'text' => 'Dose Name'),
										'class'=>'control-xlarge'));
								?>
							</div>
						</div>
						 <hr>						
							
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
			</div>
		</div> <!-- /row-fluid -->
				
	</div> <!-- /span6 -->		
</div> <!-- /row-fluid -->
