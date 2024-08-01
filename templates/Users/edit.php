<?php
$this->assign('LOGIN', 'active');
echo $this->Html->script('widgets', array('inline' => false));
echo $this->Html->script('user', array('inline' => false));
?>

<div class="row-fluid">
    <div class="span12">

        <div class="whmcscontainer">
            <div class="contentpadded">

                <div class="page-header">
                    <div class="styled_title">
                        <h2>Update Registration Details</h2>
                    </div>
                </div>
                <?php
                echo $this->Flash->render();
                echo $this->Form->create($user);
                echo $this->Form->control('id');
                ?>



                <div class="row-fluid">
                    <div class="span6">
                        <?php
                        echo $this->Form->control('name', array('label' => array('class' => 'control-label', 'text' => 'Name'),));
                        echo $this->Form->control('email', array(
                            'type' => 'email',
                            'div' => array('class' => 'control-group required'),
                            'label' => array('class' => 'control-label required', 'text' => 'E-MAIL ADDRESS')
                        ));
                        echo $this->Form->control('phone_no', array('label' => array('class' => 'control-label', 'text' => 'Phone Number'),));
                        echo $this->Form->control('designation_id', array('label' => array('class' => 'control-label', 'text' => 'Designation'),));
                        echo $this->Form->control('name_of_institution', array(
                            'label' => array('class' => 'control-label name_of_institution', 'text' => 'Name of Institution'),
                            'after' => '<p class="help-block"> Start typing and suggestions will appear </p></div>',
                        ));
                        echo $this->Form->control('institution_code', array(
                            'label' => array('class' => 'control-label institution_code', 'text' => 'Institution Code'),
                            'after' => '<p class="help-block"> Start typing and suggestions will appear </p></div>',
                        ));
                        echo $this->Form->control('sponsor_email', array('type' => 'email', 'label' => array('class' => 'control-label', 'text' => 'Company email'),));
                        ?>
                    </div><!--/span-->
                    <div class="span6">
                        <?php
                        echo $this->Form->control('institution_address', array('label' => array('class' => 'control-label institution_address', 'text' => 'Institution Address'),));
                        echo $this->Form->control('institution_contact', array('label' => array('class' => 'control-label', 'text' => 'Institution Contacts'),));                        
                        echo $this->Form->control('county_id', array(
                            'label' => array('class' => 'control-label required', 'text' => 'County '),
                            'empty' => true, 'between' => '<div class="controls ui-widget">',
                        ));
                        echo $this->Form->control('initial_email', array(
                            'type' => 'checkbox',  'class' => false, 'hiddenField' => false,
                            'label' => array('class' => 'control-label', 'text' => 'Turn off Notification Email?'),
                            'between' => '<div class="controls"> <control type="hidden" value="0" id="UserInitialEmail_" name="data[User][initial_email]">
																	<label class="checkbox" style="color:#C09853; font-weight:normal">',
                            'after' => 'Turn on/off the initial email sent after you create a report. Only the successful submit confirmation
																email will be sent. Check to turn off. Changes will take effect on next login.</label> </div>',
                        ));
                        ?>
                    </div><!--/span-->
                </div><!--/row-->
                <hr>
                <?php
                echo $this->Html->div(
                    'form-actions',
                    $this->Form->button('Save', [
                        'type' => 'Submit',
                        'class' => 'btn btn-primary',
                        'id' => 'SadrSaveChanges'
                    ])
                );

                echo $this->Form->end();

                ?>

            </div>
        </div>
    </div>
</div>