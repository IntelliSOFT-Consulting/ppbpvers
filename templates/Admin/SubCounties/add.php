<?php
$this->assign('CMS', 'active');
?>

<!-- CMS
    ================================================== -->
<h3>Content Management System <small>(ADD A NEW SUB COUNTY)</small></h3>
<p>Highly unlikely that you would need to add a sub county, but then again....</p>
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
                                <h1>Add A Sub County</h1>
                            </div>
                        </div>
                        <?= $this->Form->create($subCounty) ?>
                        <fieldset>
                            <legend><?= __('Add Sub County') ?></legend>
                            <?php
                            echo $this->Form->control('county_id', ['options' => $counties, 'empty' => true]);
                            echo $this->Form->control('sub_county_name');
                            echo $this->Form->control('county_name');
                            echo $this->Form->control('Province');
                            echo $this->Form->control('Pop_2009');
                            echo $this->Form->control('RegVoters');
                            echo $this->Form->control('AreaSqKms');
                            echo $this->Form->control('CAWards');
                            echo $this->Form->control('MainEthnicGroup');
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>