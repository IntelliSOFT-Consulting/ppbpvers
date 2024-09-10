<?php
$this->assign('AGGREGATE', 'active');
?>

<div class="row-fluid">
    <div class="span12">
        <?php
        if ($prefix == 'reporter' || $prefix == 'manager') {
            echo $this->Html->link(
                '<i class="fa fa-file-o" aria-hidden="true"></i> New Report',
                array('controller' => 'aggregates', 'action' => 'add'),
                array('escape' => false, 'class' => 'btn btn-success')
            );
        }
        ?>
        <h3>Aggregate Reports:<small> <i class="icon-glass"></i> Filter, <i class="icon-search"></i> Search, and <i class="icon-eye-open"></i> view reports</small>

        </h3>
        <hr class="soften" style="margin: 7px 0px;">
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <?php
        echo $this->Form->create(null, ['valueSources' => 'query']);
        ?>
        <table class="table table-condensed" style="margin-bottom: 2px;">
            <tbody>
                <tr>
                    <td>
                        <?php
                        echo $this->Form->control(
                            'reference_no',
                            array(
                                'div' => false,
                                'placeholder' => 'aggregates/2023',
                                'class' => 'span12',
                                'label' => array('class' => 'required', 'text' => 'Reference No.')
                            )
                        );
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->control(
                            'company_name',
                            array(
                                'div' => false,
                                'placeholder' => '',
                                'class' => 'span12 unauthorized_index',
                                'label' => array('class' => 'required', 'text' => 'Company Name ')
                            )
                        );
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->control(
                            'reporter_email',
                            array(
                                'div' => false,
                                'placeholder' => '',
                                'class' => 'span12 unauthorized_index',
                                'label' => array('class' => 'required', 'text' => 'Reporter Email ')
                            )
                        );
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->control(
                            'start_date',
                            array(
                                'div' => false,
                                'type' => 'text',
                                'class' => 'control-small unauthorized_index',
                                'after' => '-to-',
                                'label' => array('class' => 'required', 'text' => 'Report Dates'),
                                'placeHolder' => 'Start Date'
                            )
                        );
                        echo $this->Form->control(
                            'end_date',
                            array(
                                'div' => false,
                                'type' => 'text',
                                'class' => 'control-small unauthorized_index',
                                'after' => '<a style="font-weight:normal" onclick="$(\'.unauthorized_index\').val(\'\');" >
                              <em class="accordion-toggle">clear!</em></a>',
                                'label' => false,
                                'placeHolder' => 'End Date'
                            )
                        );
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        echo $this->Form->control(
                            'brand_name',
                            array(
                                'div' => false,
                                'placeholder' => '',
                                'class' => 'span12 unauthorized_index',
                                'label' => array('class' => 'required', 'text' => 'Brand Name ')
                            )
                        );
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->control(
                            'inn_name',
                            array(
                                'div' => false,
                                'placeholder' => '',
                                'class' => 'span12 unauthorized_index',
                                'label' => array('class' => 'required', 'text' => 'Inn Name ')
                            )
                        );
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->control(
                            'submission_frequency',
                            array(
                                'div' => false,
                                'class' => 'span12',
                                'label' => array('class' => 'required submission_frequency', 'text' => 'Submission Frequency '),
                                'type' => 'select',
                                'empty' => true,
                                'options' => array(
                                    '0' => 'Monthly',
                                    '1' => 'Yearly'
                                )
                            )
                        );
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="PadrPages" class="required">Pages</label></td>
                    <td>
                        <?php
                        echo $this->Form->control('pages', array(
                            'type' => 'select',
                            'div' => false,
                            'class' => 'control-small',
                            'empty' => true,
                            'options' => $page_options,
                            'label' => false,
                        ));
                        ?>
                    </td>
                    <td>
                        <?php

                        ?>
                    </td>
                    <td></td>
                    <td>
                        <?php
                        echo $this->Form->button('<i class="icon-search icon-white"></i> Search', array(
                            'escapeTitle' => false,
                            'class' => 'btn btn-primary',
                            'div' => 'control-group',
                            'div' => false,
                            'formnovalidate' => 'formnovalidate',
                            'style' => array('margin-bottom: 5px')
                        ));
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Html->link('<i class="icon-remove"></i> Clear', array('action' => 'index'), array('class' => 'btn', 'escape' => false, 'style' => array('margin-bottom: 5px')));
                        ?>
                    </td>
                    <td>
                        <?php
                        // echo $this->Html->link('<i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel', array('action' => 'index', 'ext' => 'csv', '?' => $this->request->query), array('class' => 'btn btn-success', 'escape' => false));
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <p>
            <?php
            echo $this->Paginator->counter(
                __('Page <span class="badge">{{page}}</span> of <span class="badge">{{pages}}</span>, 
    showing <span class="badge">{{current}}</span> PBRERs out of 
    <span class="badge badge-inverse">{{count}}</span> total, starting on record <span class="badge">{{start}}</span>, 
    ending on <span class="badge">{{end}}</span>')
            );
            ?>
        </p>
        <?php echo $this->Form->end(); ?>

        <div class="pagination">
            <ul>
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
        </div>

        <table class="table  table-bordered table-striped">
            <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('reference_no'); ?></th>
                    <th><?php echo $this->Paginator->sort('brand_name'); ?></th>
                    <th><?php echo $this->Paginator->sort('inn_name'); ?></th>
                    <th><?php echo $this->Paginator->sort('reporter_email'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('date_submitted'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $counter = 0;
                foreach ($aggregates as $aggregate) : ?>
                    <tr class="">
                        <td><?php
                            $counter++;
                            echo $counter; ?>&nbsp;</td>
                        <td>
                            <?php
                            echo $this->Html->link($aggregate['reference_no'], array('action' => 'view', $aggregate['id']), array('escape' => false));
                            ?>&nbsp;</td>
                        <td>
                            <?php
                            echo $this->Text->truncate($aggregate['brand_name'], 42);
                            if ($aggregate['report_type'] == 'Followup') {
                                echo "<br> Initial: ";
                                echo $this->Html->link(
                                    '<label class="label label-info">' . $aggregate['reference_no'] . '</label>',
                                    array('action' => 'view', $aggregate['aggregate_id']),
                                    array('escape' => false)
                                );
                            }
                            ?>&nbsp;
                        </td>
                        <td><?php echo h($aggregate['inn_name']); ?>&nbsp;</td>
                        <td><?php echo h($aggregate['reporter_email']); ?>&nbsp;</td>
                        <td><?php echo h($aggregate['created']); ?>&nbsp;</td>
                        <td><?php echo h($aggregate['submitted_date']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php
                            if ($aggregate['submitted'] > 1) {
                                echo $this->Html->link(
                                    '<span class="label label-info tooltipper" title="View"><i class="fa fa-eye" aria-hidden="true"></i> View </span>',
                                    array('controller' => 'aggregates', 'action' => 'view', $aggregate['id']),
                                    array('escape' => false)
                                );
                                echo "&nbsp;";
                                if ($prefix == 'reporter'  and $this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program') echo $this->Form->postLink('<span class="label label-inverse tooltipper" data-toggle="tooltip" title="Add follow up report"> <i class="fa fa-facebook" aria-hidden="true"></i> Followup </span>', array('controller' => 'aggregates', 'action' => 'followup', $aggregate['id']), array('escape' => false), __('Add a followup report?'));


                                echo "&nbsp;";
                                if (($prefix == 'manager' || $prefix == 'reviewer') && $aggregate['user_id'] == $this->request->getSession()->read('Auth.User.id'))  echo $this->Form->postLink('<span class="label label-inverse tooltipper" data-toggle="tooltip" title="Add follow up report"> <i class="fa fa-facebook" aria-hidden="true"></i> Followup </span>', array('controller' => 'aggregates', 'action' => 'followup', $aggregate['id']), array('escape' => false), __('Add a followup report?'));
                                echo "&nbsp;";
                                if (($prefix == 'manager' || $prefix == 'reviewer') && $aggregate['copied'] == 2) echo $this->Html->link(
                                    '<span class="label label-success tooltipper" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </span>',
                                    array('controller' => 'aggregates', 'action' => 'edit', $aggregate['id']),
                                    array('escape' => false)
                                );
                                echo "&nbsp;";
                                // if (($prefix == 'manager' || $prefix == 'reviewer') && $aggregate['copied'] == 0) echo $this->Form->postLink('<span class="badge badge-success tooltipper" data-toggle="tooltip" title="Copy & Edit"> <i class="fa fa-copy" aria-hidden="true"></i> Copy </span>', array('controller' => 'aggregates', 'action' => 'copy', $aggregate['id']), array('escape' => false), __('Create a clean copy to edit?'));
                                if (($prefix == 'manager' || $prefix == 'reviewer')) echo $this->Html->link(
                                    '<span class="label label-warning tooltipper" title="View"><i class="fa fa-refresh" aria-hidden="true"></i> Archive </span>',
                                    array('controller' => 'aggregates', 'action' => 'archive', $aggregate['id']),
                                    array('escape' => false),
                                    __('Are you sure you want to archive the report?')
                                );
                            } else {
                                if ($prefix == 'reporter') echo $this->Html->link(
                                    '<span class="label label-success tooltipper" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </span>',
                                    array('controller' => 'aggregates', 'action' => 'edit', $aggregate['id']),
                                    array('escape' => false)
                                );
                                echo "&nbsp;";
                                if (($prefix == 'reporter' || $prefix == 'manager') && $aggregate['submitted'] == 0) {
                                    echo "&nbsp;";
                                    echo $this->Form->postLink('<span class="label label-warning tooltipper" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete </span>', array('controller' => 'aggregates', 'action' => 'delete', $aggregate['id']), array('escape' => false), __('Are you sure you want to delete this report?
                                    Note: This action cannot be undone.'));
                                }
                                echo "&nbsp;";
                                if ($prefix == 'manager' || $prefix == 'reviewer') echo $this->Html->link(
                                    '<span class="label label-info tooltipper" title="View"><i class="fa fa-eye" aria-hidden="true"></i> View </span>',
                                    array('controller' => 'aggregates', 'action' => 'view', $aggregate['id']),
                                    array('escape' => false)
                                );
                            }
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<script type="text/javascript">
    $(function() {
        var adates = $('#AggregateStartDate, #AggregateEndDate').datepicker({
            minDate: "-100Y",
            maxDate: "-0D",
            dateFormat: 'dd-mm-yy',
            format: 'dd-mm-yy',
            endDate: '-0d',
            showButtonPanel: true,
            changeMonth: true,
            changeYear: true,
            showAnim: 'show',
            onSelect: function(selectedDate) {
                var option = this.id == "AggregateStartDate" ? "minDate" : "maxDate",
                    instance = $(this).data("datepicker"),
                    date = $.datepicker.parseDate(
                        instance.settings.dateFormat ||
                        $.datepicker._defaults.dateFormat,
                        selectedDate, instance.settings);
                adates.not(this).datepicker("option", option, date);
            }
        });

    });
</script>