<?php
$this->assign('PADR', 'active');
// $this->Html->script('jquery/jqprint.0.3', array('inline' => false));
?>

<!-- PADR
    ================================================== -->
<section id="padrsview">
	<?php 
	?>
	<div class="row-fluid">
		<div class="span10">
			<?php echo $this->element('padr/padr_view'); ?>
		</div>
		<div class="span2">
			<div>
				<?php 
                echo $this->Html->link(
                    '<i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download PDF',
                    ['controller' => 'Padrs', 'action' => 'view', $padr['token'], '_ext' => 'pdf'], // Use '_ext' instead of 'ext'
                    [
                        'class' => 'btn btn-primary btn-block mapop',
                        'title' => 'Download PDF',
                        'escape' => false,
                        'data-content' => 'Download the PDF version of the report',
                    ]
                );
                
				?>
			</div> 
			<hr>
		</div>
	</div>
</section>