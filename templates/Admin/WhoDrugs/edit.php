<?php 
	$this->assign('CMS', 'active');
?>

      <!-- CMS
    ================================================== -->
	<h3>Content Management System <small>(EDIT PPB DRUG)</small></h3>
		<p>You may refer to the WHO DRUG DICTIONARY to get the drug.</p>	
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
							<div class="styled_title"><h1>EDIT PPB Drug</h1></div>
						</div>	
						<?php										
							echo $this->Form->create($whoDrug); 
							
						?>					
						<div class="row-fluid">
							<div class="span6">
								<?php								
									echo $this->Form->control('id', array(
										'label' => array('class' => 'control-label', 'text' => 'Medicinal Product Id'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('generic', array(
										'label' => array('class' => 'control-label', 'text' => 'Generic (Y/N)'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('drug_name', array(
										'label' => array('class' => 'control-label', 'text' => 'Drug Name'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('MedId', array(
										'label' => array('class' => 'control-label', 'text' => 'Med Id'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('drug_record_number', array(
										'label' => array('class' => 'control-label', 'text' => 'Drug Record Number'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('sequence_no_1', array(
										'label' => array('class' => 'control-label', 'text' => 'Sequence Number 1'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('sequence_no_2', array(
										'label' => array('class' => 'control-label', 'text' => 'Sequence Number 2'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('sequence_no_3', array(
										'label' => array('class' => 'control-label', 'text' => 'Sequence Number 3'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('sequence_no_4', array(
										'label' => array('class' => 'control-label', 'text' => 'Sequence Number 4'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('name_specifier', array(
										'label' => array('class' => 'control-label', 'text' => 'Name Specifier'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('market_authorization_number', array(
										'label' => array('class' => 'control-label', 'text' => 'Market Authorization Number'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('market_authorization_date', array(
										'label' => array('class' => 'control-label', 'text' => 'Market Authorization Date'),
										'class'=>'control-xlarge'));													
									
								?>
							</div>
							<div class="span6">
								<?php								
									echo $this->Form->control('market_authorization_withdrawal_date', array(
										'label' => array('class' => 'control-label', 'text' => 'Market Authorization Withdrawal Date'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('country', array(
										'label' => array('class' => 'control-label', 'text' => 'Country Code (3AN)'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('company', array(
										'label' => array('class' => 'control-label', 'text' => 'Company'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('marketing_authorization_holder', array(
										'label' => array('class' => 'control-label', 'text' => 'Marketing Authorization Holder'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('source_code', array(
										'label' => array('class' => 'control-label', 'text' => 'Source Code'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('source_country', array(
										'label' => array('class' => 'control-label', 'text' => 'Source Country'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('source_year', array(
										'label' => array('class' => 'control-label', 'text' => 'Source Year'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('product_type', array(
										'label' => array('class' => 'control-label', 'text' => 'Product Type'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('product_group', array(
										'label' => array('class' => 'control-label', 'text' => 'Product Group'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('create_date', array(
										'label' => array('class' => 'control-label', 'text' => 'Create Date'),
										'class'=>'control-xlarge'));													
									echo $this->Form->control('date_changed', array(
										'label' => array('class' => 'control-label', 'text' => 'Date Changed'),
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
