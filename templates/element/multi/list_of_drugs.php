<?php
/**
 * @var \App\View\AppView $this
 */
echo $this->Html->script('list_of_drugs_v3', array('inline' => false));
echo $this->Html->css('sadr', array('inline' => false));
?>
<style>
  .small-label {
    font-size: 12px;
  }
</style>
<div class="row-fluid">
	<div class="span12">
		<h5 style="text-align: center;">List all medicines being currently used by the patient including OTC, and herbal
			products (* Tick the suspected medicine) <button type="button" class="btn btn-small" id="addListOfDrug"
				title="click to add row"><i class="icon-plus"></i></button>
		</h5>
	</div>
</div>


<div class="row-fluid srollable">
	<div class="span12">
		<table id="buildyourform" class="table table-bordered  table-condensed table-pvborder">
			<thead>
				<tr>
					<th colspan="2" class="required tooltipper" title="This is the generic name" data-content="">
						<label class="help-block required"> (include OTC and herbals) </label>
						<span class="label label-info">INN/ Generic Name</span>
					</th>
					<th style="width: 9%;">Brand Name <span style="color:red;">*</span></th>
					<th style="width: 7%;">Batch/ Lot No.<span style="color:red;">*</span></th>
					<th style="width: 7%;">Manufacturer<span style="color:red;">*</span></th>
					<th colspan="1" style="width: 15%;" class="required" title="Dosage" data-content="">
						<label class="required">DOSE <span style="color:red;">*</span></label>
					</th>
					<th colspan="2" class="required" style="width: 15%;">
						<label class="required">ROUTE AND FREQUENCY <span
								style="color:red;">*</span><span>Other</span></label>
					</th>
					<th style="width: 28%;" colspan="2">
						<h6>Treatment Period <span class="help-block required"> (dd-mm-yyyy) </span></h6>
						<label class="required pull-left">Start Date <span style="color:red;">*</span></label>
						<span class="pull-right" style="padding-right: 10px;">Stop Date</span>
					</th>
					<th style="width: 3%;">
						<label>INDICATION </label>
					</th>
					<th colspan="2" style="width: 8%;" class="required tooltipper"
						title="Drug suspected to cause reaction"
						data-content="At least one option must be selected<br>">
						<h6 class="required">TICK (&#x2713;) <br /> SUSPECTED DRUG(S) <span style="color:red;">*</span>
						</h6>
						<label class="help-block required">(select at least one) </label>
						<?php
						echo $this->Form->control('list', array('type' => 'hidden', 'value' => ''));
						echo $this->Form->error('Sadr.list', array('wrap' => 'span', 'class' => 'control-group required error'));
						?>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td data-title="Generic Name *">
						<?php
						echo $this->Form->control('sadr_list_of_drugs.0.id');

						echo $this->Form->control(
							'sadr_list_of_drugs.0.drug_name',
							array(
								'label' => false,
								'between' => false,
								'after' => false,
								'class' => 'span11 autoComblete autosave-ignore',
								'error' => array('attributes' => array('class' => 'help-block')),
								'data-items' => '4',
								'autocomplete' => 'off',
							)
						);
						?>
					</td>
					<td data-title="Brand Name">
						<?php
						echo $this->Form->control(
							'sadr_list_of_drugs.0.brand_name',
							array(
								'label' => false,
								'between' => false,
								'after' => false,
								'class' => 'span11 autoComblete2 autosave-ignore',
							)
						);
						?>
					</td>
					<td>
						<?php
						echo $this->Form->control(
							'sadr_list_of_drugs.0.batch_no',
							array(
								'label' => false,
								'between' => false,
								'after' => false,
								'class' => 'span11',
							)
						);
						?>
					</td>
					<td>
						<?php
						echo $this->Form->control(
							'sadr_list_of_drugs.0.manufacturer',
							array(
								'label' => false,
								'between' => false,
								'after' => false,
								'class' => 'span11',
							)
						);
						?>
					</td>
					<td  colspan="1" data-title="Dose *">
						<?php
						echo $this->Form->control(
							'sadr_list_of_drugs.0.dose',
							array(
								'label' => false,
								'between' => false,
								'error' => array('attributes' => array('class' => 'help-block')),
								'class' => 'span12 autosave-ignore',
							)
						);
						echo $this->Form->control(
							'sadr_list_of_drugs.0.dose_id',
							array(
								'empty' => true,
								'label' => false,
								'between' => false,
								'class' => 'span12 autosave-ignore',
								'type' => 'select',
								'id' => 'SadrListOfDrug0DoseId',
								'error' => array('attributes' => array('class' => 'help-block')),
								'options' => $dose,
							)
						);
						?>
					</td>
					 
					<td data-title="Route *">
						<?php
						echo $this->Form->control(
							'sadr_list_of_drugs.0.route_id',
							array(
								'empty' => true,
								'label' => false,
								'between' => false,
								'after' => false,
								'class' => 'span12 autosave-ignore',
								'type' => 'select',
								'id' => 'SadrListOfDrug0RouteId',
								'error' => array('attributes' => array('class' => 'help-block')),
								'options' => $routes,
							)
						);
						?>
					</td>
					<td data-title="Frequency *">
						<?php
						echo $this->Form->control(
							'sadr_list_of_drugs.0.frequency_id',
							array(
								'empty' => true,
								'label' => false,
								'between' => false,
								'after' => false,
								'class' => 'span12 autosave-ignore showHidden',
								'type' => 'select',
								'id' => 'SadrListOfDrug0FrequencyId',
								'options' => $frequency,
								'error' => array('attributes' => array('class' => 'help-block')),
							)
						);
						?>
						 
                        <?php echo $this->Form->label('sadr_list_of_drugs.0.frequency_id_other', 'If Other specify', ['class' => 'small-label']) ?>
                        <?php echo $this->Form->control('sadr_list_of_drugs.0.frequency_id_other', [
							'empty' => true,
							'label' => false,
							'between' => false,
							'after' => false,
							'class' => 'span12 autosave-ignore other',
							'type' => 'text',
							'id' => 'SadrListOfDrug0FrequencyIdOther',
							'error' => ['attributes' => ['class' => 'help-block']],
						]) ?>
					</td>
					<td data-title="Date Started (dd-mm-yyyy) *">
						<?php
						echo $this->Form->control(
							'sadr_list_of_drugs.0.start_date',
							array(
								'type' => 'text',
								'label' => false,
								'between' => false,
								'after' => false,
								'class' => 'span12 autosave-ignore date-pick-from',
								'error' => array('attributes' => array('class' => 'help-block')),
							)
						);
						?>
					</td>
					<td data-title="Date Stopped (dd-mm-yyyy)">
						<?php
						echo $this->Form->control(
							'sadr_list_of_drugs.0.stop_date',
							array(
								'type' => 'text',
								'label' => false,
								'between' => false,
								'after' => false,
								'class' => 'span12 autosave-ignore date-pick-to',
								'error' => array('attributes' => array('class' => 'help-block')),
							)
						);
						?>
					</td>
					<td data-title="Indication">
						<?php 
						echo $this->Form->control(
							'sadr_list_of_drugs.0.indication',
							array(
								'label' => false,
								'between' => false,
								'after' => false,
								'class' => 'span11',
								'error' => array('attributes' => array('class' => 'help-block'))
							)
						);
						?>
					</td>
					<td data-title="Suspected Drug?">
						<?php
						echo $this->Form->control(
							'sadr_list_of_drugs.0.suspected_drug',
							array(
								'type' => 'checkbox',
								'class' => 'autosave-ignore',
								'label' => false,
								'between' => false,
								'after' => false,
								'between' => '<label class="checkbox">',
								'after' => '</label>',
							)
						);
						?>
					</td>
					<td data-title="Add a Drug - "> </td>
				</tr>
				<?php
				// debug($this->request->getData('sadr_list_of_drugs'));
				if (!empty($this->request->getData('sadr_list_of_drugs'))) {
					for ($i = 1; $i <= count($this->request->getData('sadr_list_of_drugs')) - 1; $i++) { ?>
						<tr>
							<td>
								<?php echo $i + 1; ?>
							</td>
							<td data-title="Generic Name *">
								<?php
								echo $this->Form->control('sadr_list_of_drugs.' . $i . '.id');

								echo $this->Form->control(
									'sadr_list_of_drugs.' . $i . '.drug_name',
									array(
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span11 autoComblete autosave-ignore',
										'error' => array('attributes' => array('class' => 'help-block')),
										'data-items' => '4',
										'autocomplete' => 'off',
									)
								);
								?>
							</td>
							<td data-title="Brand Name">
								<?php echo $this->Form->control(
									'sadr_list_of_drugs.' . $i . '.brand_name',
									array(
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span11 autoComblete2 autosave-ignore',
									)
								);
								?>
							</td>
							<td>
								<?php
								echo $this->Form->control(
									'sadr_list_of_drugs.' . $i . '.batch_no',
									array(
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span11',
									)
								);
								?>
							</td>
							<td>
								<?php
								echo $this->Form->control(
									'sadr_list_of_drugs.' . $i . '.manufacturer',
									array(
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span11',
									)
								);
								?>
							</td>
							<td data-title="Dose *">
								<?php
								echo $this->Form->control(
									'sadr_list_of_drugs.' . $i . '.dose',
									array(
										'label' => false,
										'between' => false,
										'error' => array('attributes' => array('class' => 'help-block')),
										'class' => 'span12 autosave-ignore',
									)
								);

								echo $this->Form->control(
									'sadr_list_of_drugs.' . $i . '.dose_id',
									array(
										'empty' => true,
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span12 autosave-ignore',
										'type' => 'select',
										'error' => array('attributes' => array('class' => 'help-block')),
										'options' => $dose,
									)
								);
								?>
							</td>
							 
							<td data-title="Route *">
								<?php
								echo $this->Form->control(
									'sadr_list_of_drugs.' . $i . '.route_id',
									array(
										'empty' => true,
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span12 autosave-ignore',
										'type' => 'select',
										'options' => $routes,
										'error' => array('attributes' => array('class' => 'help-block')),
									)
								);
								?>
							</td>
							<td data-title="Frequency *">
								<?php
								echo $this->Form->control(
									'sadr_list_of_drugs.' . $i . '.frequency_id',
									array(
										'empty' => true,
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span12 autosave-ignore showHidden',
										'type' => 'select',
										'id' => 'SadrListOfDrug0FrequencyId',
										'options' => $frequency,
										'error' => array('attributes' => array('class' => 'help-block')),
									)
								);
								?>
								<?php echo $this->Form->label('sadr_list_of_drugs.'. $i . '.frequency_id_other', 'If Other specify', ['class' => 'small-label']) ?>
								<?php echo $this->Form->control('sadr_list_of_drugs.'. $i . '.frequency_id_other', [
									'empty' => true,
									'label' => false,
									'between' => false,
									'after' => false,
									'class' => 'span12 autosave-ignore other',
									'type' => 'text',
									'id' => 'SadrListOfDrug0FrequencyIdOther',
									'error' => ['attributes' => ['class' => 'help-block']],
								]) ?>
							</td>
							<td data-title="Date Started (dd-mm-yyyy) *">
								<?php
								echo $this->Form->control(
									'sadr_list_of_drugs.' . $i . '.start_date',
									array(
										'type' => 'text',
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span11 date-pick-from autosave-ignore',
										'error' => array('attributes' => array('class' => 'help-block')),
									)
								);
								?>
							</td>
							<td data-title="Date Stopped (dd-mm-yyyy)">
								<?php
								echo $this->Form->control(
									'sadr_list_of_drugs.' . $i . '.stop_date',
									array(
										'type' => 'text',
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span11 date-pick-to autosave-ignore',
										'error' => array('attributes' => array('class' => 'help-block')),
									)
								);
								?>
							</td>
							<td data-title="Indication">
								<?php
								// echo $this->Form->control('sadr_list_of_drugs.'.$i.'.indication', array(
								// 		'label' => false, 'between' => false,
								// 		'after' => false, 'class' => 'span9 autosave-ignore',));
								echo $this->Form->control(
									'sadr_list_of_drugs.' . $i . '.indication',
									array(
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span11',
										'error' => array('attributes' => array('class' => 'help-block'))
									)
								); 
								?>
							</td>
							<td data-title="Suspected Drug?">
								<?php
								echo $this->Form->control(
									'sadr_list_of_drugs.' . $i . '.suspected_drug',
									array(
										'type' => 'checkbox',
										'class' => 'autosave-ignore',
										'label' => false,
										'between' => false,
										'after' => false,
										'between' => '<label class="checkbox">',
										'after' => '</label>',
									)
								);
								?>
							</td>
							<td data-title="Remove Drug - ">
								<button type="button" class="btn-mini removeTr" title="click here to delete row" id="<?php if (isset($this->request->data['sadr_list_of_drugs'][$i]['id'])) {
									echo $this->request->getData('sadr_list_of_drugs')[$i]['id'];
								} ?>">
									<i class="icon-minus"></i>
								</button>
							</td>
						</tr>
					<?php }
				}
				; ?>

			</tbody>
			<tbody>
				<?php
				// $i = 0;
				if (!empty($this->request->data['SadrListOfMedicine'])) {
					for ($i = 0; $i <= count($this->request->getData('SadrListOfMedicine')) - 1; $i++) {
						?>
						<tr>
							<td>
								<?= $i + 1; ?>
							</td>
							<td>
								<?php
								echo $this->Form->control('SadrListOfMedicine.' . $i . '.id');
								echo $this->Form->control(
									'SadrListOfMedicine.' . $i . '.drug_name',
									array(
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span11',
									)
								);
								?>
							</td>
							<td>
								<?php
								echo $this->Form->control(
									'SadrListOfMedicine.' . $i . '.brand_name',
									array(
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span11',
									)
								);
								?>
							</td>
							<td>
								<?php
								echo $this->Form->control(
									'SadrListOfMedicine.' . $i . '.batch_no',
									array(
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span11',
									)
								);
								?>
							</td>
							<td>
								<?php
								echo $this->Form->control(
									'SadrListOfMedicine.' . $i . '.manufacturer',
									array(
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span11',
									)
								);
								?>
							</td>
							<td>
								<?php
								echo $this->Form->control(
									'SadrListOfMedicine.' . $i . '.dose',
									array(
										'type' => 'text',
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span11',
									)
								);
								?>
							</td>
							<td>
								<?php
								echo $this->Form->control(
									'SadrListOfMedicine.' . $i . '.dose_id',
									array(
										'empty' => true,
										'label' => false,
										'between' => false,
										'class' => 'span12',
										'type' => 'select',
										'error' => array('attributes' => array('class' => 'help-block')),
										'options' => $dose,
									)
								);
								?>
							</td>
							<td>
								<?php
								echo $this->Form->control(
									'SadrListOfMedicine.' . $i . '.route_id',
									array(
										'empty' => true,
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span12',
										'type' => 'select',
										'error' => array('attributes' => array('class' => 'help-block')),
										'options' => $routes,
									)
								);
								?>
							</td>
							<td>
								<?php
								echo $this->Form->control(
									'SadrListOfMedicine.' . $i . '.frequency_id',
									array(
										'empty' => true,
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span12',
										'type' => 'select',
										'id' => 'selectOther',
										'options' => $frequency,
										'error' => array('attributes' => array('class' => 'help-block')),
									)
								);
								?>
							</td>
							<td>
								<?php
								echo $this->Form->control(
									'SadrListOfMedicine.' . $i . '.start_date',
									array(
										'type' => 'text',
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span12 date-pick-from',
									)
								);
								?>
							</td>
							<td>
								<?php
								echo $this->Form->control(
									'SadrListOfMedicine.' . $i . '.stop_date',
									array(
										'type' => 'text',
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span12 date-pick-to',
									)
								);
								?>
							</td>

							<td>
								<?php
								echo $this->Form->control(
									'SadrListOfMedicine.' . $i . '.indication',
									array(
										'type' => 'text',
										'label' => false,
										'between' => false,
										'after' => false,
										'class' => 'span12',
									)
								);
								?>
							</td>

							<td>
								<button type="button" class="btn btn-danger btn-sm remove-medicine" value="<?php if (isset($this->request->data['SadrListOfMedicine'][$i]['id'])) {
									echo $this->request->getData('SadrListOfMedicine')[$i]['id'];
								} ?>">
									<i class="icon-minus"></i>
								</button>
							</td>
						</tr>

					<?php }
				} ?>

			</tbody>
		</table>
		<?php

		echo $this->Form->control(
			'sample',
			array(
				// create a hidden control with the same name as the control
				'type' => 'hidden',
				'id' => 'sample',
				'value' => 'dammy',
				'class' => 'autosave-ignore',
			)
		);
		?>
	</div><!--/span-->
</div><!--/row-->
<hr> 