<?php
$this->assign('Content', 'active');
echo $this->Html->script('ckeditor/ckeditor', array('inline' => false));
echo $this->Html->script('ckeditor/adapters/jquery', array('inline' => false));
?>

<div class="row-fluid" style="margin-bottom: 9px;">
    <div class="span2 columns">
        <div class="row-fluid">
            <div class="span12">
                <?php echo $this->element('admin/contentmenu') ?>
            </div><!--/span-->
        </div><!--/row-->
    </div> <!-- /span5 -->

    <div class="span10 columns">
<div class="row-fluid">
    <?php echo $this->Form->create(
    $message, array(
        'type' => 'file',
        // 'class' => 'form-horizontal',

    ));
    echo $this->Form->control('id'); ?>
    <fieldset>
        <legend>Edit <strong><?php echo $this->Form->value('Messages.name'); ?></strong></legend>
        <?php
        echo $this->Form->control('id'); 
        echo $this->Form->control('subject');
        echo $this->Form->control(
            'style',
            array(
                'type' => 'select',
                'empty' => true,
                'options' =>  array('info' => 'Blue', 'success' => 'Green', 'error' => 'Red', 'warning' => 'Orange'),
                'label' => array('class' => 'control-label', 'text' => 'Notification Style')
            )
        ); 
        echo $this->Form->control('content', array(
            'id'=>'message',
            'label' => array(
                'class' => 'control-label required message',
                'text' => 'Content <span class="sterix">*</span>',
                'escape' => false
            ),
            'between' => '<div class="controls">', 'placeholder' => 'content', 'class' => 'control-large',
        ));
        echo $this->Form->control('sms', array(
            'type' => 'textarea',
            'rows' => 3,
            'label' => array('class' => 'control-label required', 'text' => 'SMS <span class="sterix">*</span>','escape'=>false),
            'between' => '<div class="controls">',
            'placeholder' => 'sms',
            'class' => 'control-xxlarge',
        ));
        echo $this->Form->control('type');
        echo $this->Form->control('description', array('class' => 'control-xlarge'));
        ?>
    </fieldset>
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

    <script type="text/javascript">
        CKEDITOR.replace('message');
    </script>
</div>
    </div>