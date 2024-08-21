<?php 
	$this->assign('About', 'active');
	echo $this->Html->script('bootstrap/bootstrap-carousel', array('inline' => false));
	echo $this->Html->script('about', array('inline' => false));
	echo $this->Html->css('home', array('inline' => false));
 ?>

	<?php echo $content['content']; ?>