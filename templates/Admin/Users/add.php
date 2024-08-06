<?php
$this->assign('LOGIN', 'active');
echo $this->Html->script('widgets', array('inline' => false));
echo $this->Html->script('user', array('inline' => false));
echo $this->Html->css('user', array('inline' => false));
?>

<div class="row-fluid">
    <div class="span12">

        <div class="whmcscontainer">
            <div class="contentpadded">

                <div class="page-header">
                    <div class="styled_title">
                        <h2>Add a User</h2>
                    </div>
                </div>
                <?php

                echo $this->Flash->render();
                echo $this->Form->create();
                ?>
                <div class="row-fluid">
                    <div class="span4">
                        <?php
                        echo $this->Form->control('username', array(
                            'label' => array(
                                'class' => 'control-label',
                                'text' => 'Username'
                            ),
                            'esape' => false
                        ));
                        echo $this->Form->control('name', array('label' => array('class' => 'control-label', 'text' => 'Name'),));
                        echo $this->Form->control('email', array(
                            'type' => 'email',
                            'div' => array('class' => 'control-group required'),
                            'label' => array('class' => 'control-label required', 'text' => 'E-MAIL ADDRESS')
                        ));
                        echo $this->Form->control('phone_no', array('label' => array('class' => 'control-label', 'text' => 'Phone Number'),));
                        echo $this->Form->control('role_id', array('label' => array('class' => 'control-label', 'text' => 'Role'),));
                        echo $this->Form->control('ward', array(
                            'label' => array('class' => 'control-label', 'text' => 'Hospital MFL Code'),
                            'after' => '<p class="help-block"> Only for group institution manager! </p></div>',
                        ));

                        ?>
                    </div>
                    <!--/span-->
                    <div class="span4">
                        <?php
                        echo $this->Form->control('designation_id', array('label' => array('class' => 'control-label', 'text' => 'Designation'),));
                        echo $this->Form->control('name_of_institution', array(
                            'label' => array('class' => 'control-label', 'text' => 'Name of Institution'),
                            'after' => '<p class="help-block"> Start typing and suggestions will appear </p></div>',
                        ));
                        echo $this->Form->control('institution_code', array(
                            'label' => array('class' => 'control-label', 'text' => 'Institution Code'),
                            'after' => '<p class="help-block"> Start typing and suggestions will appear </p></div>',
                        ));
                        echo $this->Form->control('institution_address', array('label' => array('class' => 'control-label', 'text' => 'Institution Address'),));
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
                    </div>
                    <span class="span4">
                        <?php

                        echo $this->Form->control('password', array(
                            'label' => array(
                                'class' => 'control-label required',
                                'text' => 'New Password' . ' <span style="color:red;">*</span>',
                                'escape' => false
                            ),
                            'error' => array('attributes' => array('class' => 'error-message'))
                        ));
                        echo $this->Form->control('confirm_password', array(
                            'type' => 'password',
                            'label' => array(
                                'class' => 'control-label required',
                                'text' => 'Confirm New Password' . ' <span style="color:red;">*</span>',
                                'escape' => false
                            ),
                            'error' => ['attributes' => ['class' => 'error-message']]
                        ));
                        echo $this->Form->control('active_date', array(
                            'type' => 'text', 'class' => 'date-pick-field',
                            'label' => array('class' => 'control-label', 'text' => 'Active Date'),
                        ));

                        echo $this->Form->control('user_type', array(
                            'type' => 'select', 'label' => array('class' => 'control-label', 'text' => 'User Type'),
                            'empty' => true, 'options' => ['Market Authority' => 'Market Authority', 'County Pharmacist' => 'County Pharmacist', 'Public Health Program' => 'Public Health Program']
                        ));
                        echo $this->Form->control('sponsor_email', array('type' => 'email', 'label' => array('class' => 'control-label', 'text' => 'Company email'),));
                        echo $this->Form->control('health_program', array(
                            'type' => 'select', 'options' => [
                                'Malaria program' => 'Malaria program', 'National Vaccines and immunisation program' => 'National Vaccines and immunisation program',
                                'Neglected tropical diseases program' => 'Neglected tropical diseases program', 'MNCAH Priority Medicines' => 'MNCAH Priority Medicines', 'TB program' => 'TB program',
                                'NASCOP program' => 'NASCOP program', 'Cancer/Oncology program' => 'Cancer/Oncology program'
                            ], 'empty' => true,
                            'label' => array('class' => 'control-label', 'text' => 'Public Health Program')
                        ));

                        echo $this->Form->control('is_active', array(
                            'type' => 'checkbox',
                            'label' => array('class' => 'control-label', 'text' => 'Is Active?'),
                        ));

                        ?>
                    </span>
                    <!--/span-->
                </div>
                <!--/row-->
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

                // Close the form
                echo $this->Form->end();
                ?>

            </div>
        </div>
    </div>
</div>