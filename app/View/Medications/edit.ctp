<?php
    $this->assign('Adverse Event Following Immunization', 'active');
    $this->Html->script('jquery.ui.core', array('inline' => false));
    $this->Html->script('jquery.ui.widget', array('inline' => false));
    $this->Html->script('jquery.ui.mouse', array('inline' => false));
    $this->Html->script('jquery.ui.draggable', array('inline' => false));
    $this->Html->script('jquery.ui.button', array('inline' => false));
    $this->Html->script('jquery.ui.position', array('inline' => false));
    $this->Html->script('jquery.ui.autocomplete', array('inline' => false));
    $this->Html->script('jquery.ui.dialog', array('inline' => false));
    $this->Html->script('widgets', array('inline' => false));
    $this->Html->script('medication', array('inline' => false));
    $this->Html->css('jquery.datetimepicker', null, array('inline' => false));
    $this->Html->script('jquery.datetimepicker.full', array('inline' => false));
 ?>

      <!-- Adverse Event Following Immunization
    ================================================== -->
<section id="medicationsadd">
    <div class="row-fluid">
        <div class="span12">

        <ul class="nav nav-tabs">
            <li class="active"><a href="#" id="medication_edit_tab1"><?php    echo 'Initial Report ID: '.$this->data['Medication']['id']; ?></a></li>
            <!-- <li id="medication_edit_tab2">Follow up Reports()</li> -->
        </ul>

            <?php echo $this->element('medication/medication_edit');?>

        </div> <!-- /span -->
    </div> <!-- /row -->
</section> <!-- /row -->