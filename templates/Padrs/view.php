<?php
$this->assign('PADR', 'active');
?>
<section id="padrsview">

    <div class="row-fluid">
        <div class="span10">
            <?php echo $this->element('padr/padr_view');
            ?>
        </div>
        <div class="span2">
            <?php
            echo $this->Html->link(
                '<i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download PDF',
                array('controller' => 'padrs', 'action' => 'view', 'ext' => 'pdf', $padr['token']),
                array(
                    'class' => 'btn btn-primary btn-block mapop',
                    'title' => 'Download PDF',
                    'escape' => false,
                    'data-content' => 'Download the pdf version of the report',
                )
            );
            ?>
            <hr>

            <p class="help-block">Do you have more information on the reaction?</p>
            <?php
            if ($padr['token']) {
                echo $this->Form->postLink(__('Followup Report'), array('action' => 'followup', $padr['token']), array('escape' => false, 'class' => 'btn btn-block'), __('Are you sure you want to create a follow up report for %s?', $padr['reference_no']));
            }
            ?>
        </div>
    </div>
</section>