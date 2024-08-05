<?php
$this->assign('Content', 'active');
?>

<!-- Content
    ================================================== -->
<h3>Content Management System <small>(FACILITY CODES)</small></h3>
<p>Search for the content that you wish to modify and change accordingly.</p>
<hr>
<div class="row-fluid" style="margin-bottom: 9px;">
    <div class="span2 columns">
        <div class="row-fluid">
            <div class="span12">
                <?php 
                echo $this->element('admin/contentmenu')
                ?>

            </div><!--/span-->
        </div><!--/row-->
    </div> <!-- /span5 -->

    <div class="span10 columns">
        <?php
        echo $this->Form->create();

        // 'FacilityCode', array(
        // 	'url' => array_merge(array('action' => 'admin_index', 'admin' => true), $this->params['pass']),
        // 	'class' => 'well',
        // ));
        ?>
        <div class="row-fluid">
            <div class="span2 columns">
                <?php

                echo $this->Html->link(
                    '<i class="icon-plus icon-white"></i> Add a Facility',
                    array(
                        'controller' => 'facility_codes',
                        'action' => 'add',
                        'admin' => true
                    ),
                    array('class' => 'btn btn-info', 'escape' => false),

                );

                echo $this->Html->link('<i class="icon-upload icon-white"></i>Upload Facilities', "#", array(
                    'class' => 'btn btn-success',
                    'data-toggle' => 'modal',
                    'data-target' => '#uploadModal',
                    'escape' => false
                )
            );

                ?>
            </div>
            <!-- <div class="span3 columns"> -->
                <?php
                // echo $this->Form->control('facility_codes', array(
                //     'div' => false,
                //     'class' => 'span10',
                //     'label' => array('class' => 'required', 'text' => 'Facility Codes')
                // ));
                ?>
            <!-- </div> -->
            <div class="span3 columns">
                <?php
                echo $this->Form->control('facility_name', array(
                    'div' => false,
                    'class' => 'span10',
                    'label' => array('class' => 'required', 'text' => 'Facility Name')
                ));
                ?>
            </div>
            <div class="span4 columns">
                <p class="muted">Search on any field.</p>
                <?php
                echo $this->Form->button('<i class="icon-search icon-white"></i> Search', array(
                    'escapeTitle' => false,
                    'class' => 'btn btn-inverse', 'div' => 'control-group', 'div' => false,
                ));
                echo $this->Form->end();
                ?>
            </div>
        </div>

        <div class="row-fluid">

            <?php
            if (count($facilityCodes) >  0) { ?>
                <p>
                    <?php
                    echo $this->Paginator->counter(
                        __('Page <span class="badge">{{page}}</span> of <span class="badge">{{pages}}</span>, 
                            showing <span class="badge">{{current}}</span> Facilities out of 
                            <span class="badge badge-inverse">{{count}}</span> total, starting on record <span class="badge">{{start}}</span>, 
                            ending on <span class="badge">{{end}}</span>')
                    );
                    ?>
                </p>
                <div class="pagination">
                    <ul>

                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>

                    </ul>
                </div>
                <hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('id'); ?></th>
                            <th><?php echo $this->Paginator->sort('facility_code'); ?></th>
                            <th><?php echo $this->Paginator->sort('facility_name'); ?></th>
                            <th><?php echo $this->Paginator->sort('county'); ?></th>
                            <th><?php echo $this->Paginator->sort('sub_county'); ?></th>
                            <th><?php echo $this->Paginator->sort('ward'); ?></th>
                            <th><?php echo __('Actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($facilityCodes as $facilityCode) : ?>
                            <tr>
                                <td><?php echo h($facilityCode['id']); ?>&nbsp;</td>
                                <td><?php echo h($facilityCode['facility_code']); ?>&nbsp;</td>
                                <td><?php echo h($facilityCode['facility_name']); ?>&nbsp;</td>
                                <td><?php echo h($facilityCode['county']); ?>&nbsp;</td>
                                <td><?php echo h($facilityCode['sub_county']); ?>&nbsp;</td>
                                <td><?php echo h($facilityCode['ward']); ?>&nbsp;</td>
                                <td>
                                    <?php echo $this->Html->link(
                                        '<span class="label label-info"><i class="icon-pencil icon-white"></i> Edit</span>',
                                        array('controller' => 'facility_codes', 'action' => 'edit', $facilityCode['id']),
                                        array('escape' => false)
                                    ); ?>&nbsp;
                                    <?php echo $this->Form->postLink(
                                        __('<span class="label label-important"><i class="icon-trash icon-white"></i> Delete</span>'),
                                        array('action' => 'delete', $facilityCode['id']),
                                        array('escape' => false),
                                        __('Are you sure you want to delete # %s?', $facilityCode['id'])
                                    ); ?>&nbsp;
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            <?php } else { ?>
                <p>There were no reports that met your search criteria.</p>
            <?php } ?>
        </div> <!-- /row-fluid -->
    </div> <!-- /span6 -->

</div> <!-- /row-fluid -->


<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload CSV</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $this->Form->create(); //'Upload', array('type' => 'file', 'url' => array('controller' => 'facility_codes', 'action' => 'upload'))); 
                ?>

                <?php echo $this->Form->control('csv_file', array('type' => 'file')); ?>
            </div>
            <div class="modal-footer">
                <?php echo $this->Form->button('Upload', array('class' => 'btn btn-primary')); ?>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>
<style>
    .modal-header .close {
        margin-top: -1.5rem;
        margin-right: -0.5rem;
    }
</style>