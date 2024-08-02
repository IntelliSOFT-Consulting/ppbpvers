<?php
$this->assign('CMS', 'active');
?>

<!-- CMS
    ================================================== -->
<h3>Content Management System <small>(ADD A NEW FACILITY)</small></h3>
<p>This is from the Ministry of Health List of Health facilities in Kenya.</p>
<hr>
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
            <div class="span12">
                <div class="whmcscontainer">
                    <div class="contentpadded">
                        <div class="page-header">
                            <div class="styled_title">
                                <h1>Add A New Facility</h1>
                            </div>
                        </div>
                        <?php
                        echo $this->Form->create();

                        // 'FacilityCode', array(
                        // 	'url' => array('action' => 'add', 'admin' => true ),
                        // 	'class' => 'form-horizontal',
                        // 	'controlDefaults' => array(
                        // 		'div' => array('class' => 'control-group'),
                        // 		'label' => array('class' => 'control-label'),
                        // 		'between' => '<div class="controls">',
                        // 		'after' => '</div>',
                        // 		'class' => '',
                        // 		'format' => array('before', 'label', 'between', 'control', 'after','error'),
                        // 		'error' => array('attributes' => array('class' => 'controls help-block')),
                        // 	 ),		
                        // ));

                        ?>
                        <div class="row-fluid">
                            <div class="span6">
                                <?php
                                echo $this->Form->control('facility_code', array(
                                    'label' => array('class' => 'control-label', 'text' => 'Facility Code'),
                                    'class' => 'control-xlarge'
                                ));
                                echo $this->Form->control('facility_name', array(
                                    'label' => array('class' => 'control-label', 'text' => 'Facility Name'),
                                    'class' => 'control-xlarge'
                                ));
                                echo $this->Form->control('type', array(
                                    'label' => array('class' => 'control-label', 'text' => 'Type'),
                                    'class' => 'control-xlarge'
                                ));
                                echo $this->Form->control('owner', array(
                                    'label' => array('class' => 'control-label', 'text' => 'Owner'),
                                    'class' => 'control-xlarge'
                                ));
                                echo $this->Form->control('province', array(
                                    'label' => array('class' => 'control-label', 'text' => 'Province'),
                                    'class' => 'control-xlarge'
                                ));
                                echo $this->Form->control('district', array(
                                    'label' => array('class' => 'control-label', 'text' => 'District'),
                                    'class' => 'control-xlarge'
                                ));
                                echo $this->Form->control('Division', array(
                                    'label' => array('class' => 'control-label', 'text' => 'Division'),
                                    'class' => 'control-xlarge'
                                ));
                                echo $this->Form->control('sub_location', array(
                                    'label' => array('class' => 'control-label', 'text' => 'Sub-location'),
                                    'class' => 'control-xlarge'
                                ));
                                echo $this->Form->control('constituency', array(
                                    'label' => array('class' => 'control-label', 'text' => 'Constituency'),
                                    'class' => 'control-xlarge'
                                ));
                                ?>
                            </div>
                            <div class="span6">
                                <?php
                                echo $this->Form->control('nearest_town', array(
                                    'label' => array('class' => 'control-label', 'text' => 'Nearest Town'),
                                    'class' => 'control-xlarge'
                                ));
                                echo $this->Form->control('keph_level', array(
                                    'label' => array('class' => 'control-label', 'text' => 'keph_level'),
                                    'class' => 'control-xlarge'
                                ));
                                echo $this->Form->control('plot_number', array(
                                    'label' => array('class' => 'control-label', 'text' => 'Plot Number'),
                                    'class' => 'control-xlarge'
                                ));
                                echo $this->Form->control('open_24hrs', array(
                                    'label' => array('class' => 'control-label', 'text' => 'Open 24 Hrs'),
                                    'class' => 'control-xlarge'
                                ));
                                echo $this->Form->control('open_weekends', array(
                                    'label' => array('class' => 'control-label', 'text' => 'Open Weekends'),
                                    'class' => 'control-xlarge'
                                ));
                                echo $this->Form->control('beds', array(
                                    'label' => array('class' => 'control-label', 'text' => 'Beds'),
                                    'class' => 'control-xlarge'
                                ));
                                echo $this->Form->control('cots', array(
                                    'label' => array('class' => 'control-label', 'text' => 'Cots'),
                                    'class' => 'control-xlarge'
                                ));
                                echo $this->Form->control('operational_status', array(
                                    'label' => array('class' => 'control-label', 'text' => 'Operational Status'),
                                    'class' => 'control-xlarge'
                                ));
                                ?>
                            </div>
                        </div>
                        <hr>

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

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /row-fluid -->

</div> <!-- /span6 -->
</div> <!-- /row-fluid -->