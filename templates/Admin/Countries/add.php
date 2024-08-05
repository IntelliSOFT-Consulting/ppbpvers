<?php 
	$this->assign('Content', 'active');
?>

      <!-- Content
    ================================================== -->
	<h3>Content Management System <small>(ADD A NEW COUNTRY)</small></h3>
		<p>Highly unlikely that you would need to add a country, but then again....</p>	
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
							<div class="styled_title"><h1>Add A New Country</h1></div>
						</div>	
						<?php										
							echo $this->Form->create($country);
                           
							
						?>					
						<div class="row-fluid">
							<div class="span12">
								<?php								
									echo $this->Form->control('code', array(
										'label' => array('class' => 'control-label', 'text' => 'Country Code'),
										'class'=>'control-xlarge'));					
									echo $this->Form->control('name', array(
										'label' => array('class' => 'control-label', 'text' => 'Country Name'),
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
