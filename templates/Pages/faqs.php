<?php
$this->assign('Faqs', 'active');
echo $this->Html->script('bootstrap/bootstrap-carousel', array('inline' => false));
echo $this->Html->script('about', array('inline' => false));
echo $this->Html->css('home', array('inline' => false));
echo $this->Html->css('pvers', array('inline' => false));
?>
<!-- <br><br><br> -->

<div class="row-fluid">

	<div class="span12">
		<?php echo $content['content']; ?>
	</div>
</div>
<div class="row-fluid">
	<div class="blank_faq"></div>
</div>