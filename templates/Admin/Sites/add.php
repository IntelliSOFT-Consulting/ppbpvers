<?php
$this->assign('Content', 'active');
echo  $this->Html->script('ckeditor/ckeditor', array('inline' => false));
echo  $this->Html->script('ckeditor/adapters/jquery', array('inline' => false));
?>
<div class="row-fluid">
    <?php echo $this->Form->create($site, array(
        'type' => 'file',
        // 'class' => 'form-horizontal',

    ));
    echo $this->Form->control('id'); ?>
    <fieldset>
        <legend>Add Site</legend>
        <?php
        echo $this->Form->control('id');

        echo $this->Form->control('content', array(
            'id'=>'message',
            'label' => array(
                'class' => 'control-label required message',
                'text' => 'Content <span class="sterix">*</span>',
                'escape' => false
            ),
            'between' => '<div class="controls">',
            'placeholder' => 'study title',
            'class' => 'control-large',
        ));
        echo $this->Form->control('description', array('class' => 'control-xlarge'));
        ?>
    </fieldset>
    <?php
    echo $this->Html->div(
        'form-actions',
        $this->Form->button('Save', [
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