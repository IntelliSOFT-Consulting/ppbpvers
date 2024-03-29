<div class="helpInfos form">
<?php echo $this->Form->create('HelpInfo');?>
	<fieldset>
		<legend><?php echo __('Add Help Info'); ?></legend>
	<?php
		echo $this->Form->input('field_name');
		echo $this->Form->input('field_label');
		// echo $this->Form->input('help_type');
		echo $this->Form->input('help_type', array(
			'options' => array('tooltipper'=>'tooltip', 'mapop'=>'popover'),
			'empty' => true
		));
		echo $this->Form->input('title');
		echo $this->Form->input('content', array('type' => 'textarea'));
		echo $this->Form->input('help_text');
		echo $this->Form->input('type', array(
			'options' => array('sadr'=>'sadr', 'pqmp'=>'pqmp', 'header'=>'header', 'home'=>'home', 'menu'=>'menu'),
			'empty' => true,
		));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Help Infos'), array('action' => 'index'));?></li>
	</ul>
</div>
