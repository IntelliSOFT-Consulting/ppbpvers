<?php
$this->assign('SADRs', 'active');
?> 
<div class="row-fluid">
    <div class="span12">
        <?php
        if ($prefix == 'reporter') {
            if ($this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program') echo $this->Html->link(
                '<i class="fa fa-file-o" aria-hidden="true"></i> New SADR',
                array('controller' => 'sadrs', 'action' => 'add'),
                array('escape' => false, 'class' => 'btn btn-success')
            );
        }
        ?>
        <h3>Suspected ADRs:<small> <i class="icon-glass"></i> Filter, <i class="icon-search"></i> Search, and <i class="icon-eye-open"></i> view reports</small></h3>
        <hr class="soften" style="margin: 7px 0px;">
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <?php
        echo $this->Form->create();
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
                                'placeholder' => 'sadr/2020',
                                'class' => 'span12', 'label' => array('class' => 'required', 'text' => 'Reference No.')
                            )
                        );
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->control(
                            'report_title',
                            array(
                                'div' => false,
                                'placeholder' => 'rash',
                                'class' => 'unauthorized_index span10', 'label' => array('class' => 'required', 'text' => 'Report Title')
                            )
                        );
                        ?>
                    </td>
                    <td colspan="2">
                        <?php
                        echo $this->Form->control(
                            'start_date',
                            array(
                                'div' => false, 'type' => 'text', 'class' => 'control-small unauthorized_index', 'after' => '-to-',
                                'label' => array('class' => 'required', 'text' => 'Report Dates'), 'placeHolder' => 'Start Date'
                            )
                        );
                        echo $this->Form->control(
                            'end_date',
                            array(
                                'div' => false, 'type' => 'text', 'class' => 'control-small unauthorized_index',
                                'after' => '<a style="font-weight:normal" onclick="$(\'.unauthorized_index\').val(\'\');" >
                              <em class="accordion-toggle">clear!</em></a>',
                                'label' => false, 'placeHolder' => 'End Date'
                            )
                        );
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->control(
                            'name_of_institution',
                            array(
                                'div' => false, 'placeholder' => 'institution',
                                'class' => 'control-small', 'label' => array('class' => 'required', 'text' => 'Institution')
                            )
                        );
                        ?>
                    </td>
                    <td>
                        <h5>Serious?</h5>
                        <?php
                        echo $this->Form->control('serious', array(
                            'options' => array('Yes' => 'Yes', 'No' => 'No'), 'legend' => false,
                            'type' => 'radio'
                        ));
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->control(
                            'county_id',
                            array(
                                'div' => false, 'empty' => true,
                                'class' => 'control-small', 'label' => array('class' => 'required', 'text' => 'County')
                            )
                        );
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        echo $this->Form->control(
                            'drug_name',
                            array(
                                'div' => false, 'placeholder' => 'brand name',
                                'class' => 'span12 unauthorized_index', 'label' => array('class' => 'required', 'text' => 'Brand Name')
                            )
                        );
                        ?>
                        <?php
                        echo $this->Form->control(
                            'manufacturer',
                            array(
                                'div' => false, 'placeholder' => 'manufacturer',
                                'class' => 'span12 unauthorized_index', 'label' => array('class' => 'required', 'text' => 'Manufacturer')
                            )
                        );
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->control(
                            'inn',
                            array('div' => false, 'placeholder' => 'INN', 'class' => 'span12 unauthorized_index', 'label' => array('class' => 'required', 'text' => 'INN'))
                        );
                        ?>
                        <h5>Suspected Drugs?<br></h5>
                        <?php
                        echo $this->Form->control('suspected_drug', array(
                            'type' => 'checkbox', 'hiddenField' => false,
                            'label' => array('class' => '', 'text' => 'Only Suspected?')
                        ));
                        ?>

                    </td>
                    <td colspan="2">
                        <h5>Report on:</h5>
                        <?php
                        echo $this->Form->control('report_sadr', array('label' => 'Suspected adverse drug reaction', 'hiddenField' => false));
                        echo $this->Form->control('report_therapeutic', array('label' => 'Therapeutic Ineffectiveness', 'hiddenField' => false));
                        echo $this->Form->control('report_misuse', array('label' => 'Suspected misuse, abuse and / or dependence on medicines', 'hiddenField' => false, 'type' => 'checkbox',));
                        echo $this->Form->control('report_off_label', array('label' => 'Off-label Use', 'hiddenField' => false, 'type' => 'checkbox',));


                        ?>
                    </td>
                    <td>
                        <h5>Product</h5>
                        <?php
                        echo $this->Form->control('medicinal_product', array('label' => 'Medicinal', 'hiddenField' => false));
                        echo $this->Form->control('blood_products', array('label' => 'Blood product', 'hiddenField' => false));
                        ?>
                    </td>
                    <td>
                        <h5>category</h5>
                        <?php
                        echo $this->Form->control('herbal_product', array('label' => 'Herbal product', 'hiddenField' => false));
                        echo $this->Form->control('cosmeceuticals', array('label' => 'Cosmeceuticals', 'hiddenField' => false));
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->control('product_other', array('label' => 'Other', 'hiddenField' => false));
                        echo $this->Form->control('product_specify', array('label' => false, 'class' => 'control-small', 'placeholder' => '(specify)'));
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        if ($this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program')  echo $this->Form->control(
                            'patient_name',
                            array(
                                'div' => false, 'placeholder' => 'Patient name',
                                'class' => 'span12 unauthorized_index', 'label' => array('class' => 'required', 'text' => 'Patient Name')
                            )
                        );
                        ?>
                    </td>
                    <td>
                        <h5>Report Type?</h5>
                        <?php
                        echo $this->Form->control('report_type', array(
                            'options' => array('Initial' => 'Initial', 'Followup' => 'Followup'), 'legend' => false,
                            'type' => 'radio'
                        ));
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->control('serious_reason', array(
                            'type' => 'select',
                            'empty' => true, 'class' => 'span12',
                            'options' => array(
                                'Hospitalization/ Prolonged Hospitalization' => 'Hospitalization',
                                'Disability' => 'Disability',
                                'Congenital anomality' => 'Congenital anomality',
                                'Life threatening' => 'Life threatening',
                                'Death' => 'Death'
                            ),
                            'label' => array('class' => 'required', 'text' => 'Seriousness Criteria')
                        ));
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->control('outcome', array(
                            'type' => 'select',
                            'empty' => true, 'class' => 'control-small',
                            'options' => array(
                                'recovered/resolved' => 'Recovered/resolved',
                                'recovering/resolving' => 'Recovering/resolving',
                                'recovered/resolved with sequelae' => 'Recovered/resolved with sequelae',
                                'not recovered/not resolved' => 'Not recovered/not resolved',
                                'fatal - unrelated to reaction' => 'Fatal - unrelated to reaction',
                                'fatal - reaction may be contributory' => 'Fatal - reaction may be contributory',
                                'fatal - due to reaction' => 'Fatal - due to reaction',
                                'Unknown' => 'Unknown'
                            ),
                            'label' => array('class' => 'required', 'text' => 'Outcome')
                        ));
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->control(
                            'reporter',
                            array('div' => false, 'class' => 'control-small unauthorized_index', 'label' => array('class' => 'required', 'text' => 'Reporter'), 'placeholder' => 'Name/Email')
                        );
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->control(
                            'designation_id',
                            array(
                                'div' => false, 'empty' => true,
                                'class' => 'control-small', 'label' => array('class' => 'required', 'text' => 'Designation')
                            )
                        );
                        ?>
                    </td>
                    <td>
                        <h5>Gender</h5>
                        <?php
                        echo $this->Form->control('gender', array(
                            'options' => array('Male' => 'Male', 'Female' => 'Female', 'Unknown' => 'Unknown'), 'legend' => false,
                            'type' => 'radio'
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Report Status</h5>
                        <?php

                        echo $this->Form->control('submitted', array(
                            'options' => array('1' => 'UnSubmitted', '2' => 'Submitted'), 'legend' => false,
                            'type' => 'radio'
                        ));
                        ?>
                    </td>
                    <td> <?php
                            echo $this->Form->control('health_program', array(
                                'type' => 'select', 'options' => [
                                    'Malaria program' => 'Malaria program', 'National Vaccines and immunisation program' => 'National Vaccines and immunisation program',
                                    'Neglected tropical diseases program' => 'Neglected tropical diseases program', 'MNCAH Priority Medicines' => 'MNCAH Priority Medicines', 'TB program' => 'TB program',
                                    'NASCOP program' => 'NASCOP program', 'Cancer/Oncology program' => 'Cancer/Oncology program'
                                ], 'empty' => true,
                                'label' => array('class' => 'control-label', 'text' => 'Public Health Program'),
                                'class' => 'control-xlarge'
                            ));  ?>
                    </td>
                    <td><?php
                        echo $this->Form->control('device', array(
                            'type' => 'select', 'options' => [
                                '0' => 'Web',
                                '1' => 'Mobile',
                            ], 'empty' => true,
                            'label' => array('class' => 'control-label', 'text' => 'Sending Device'),
                            'class' => 'control-xlarge'
                        ));  ?></td>
                    <td><?php
                        echo $this->Form->control('mah', array(
                            'type' => 'select', 'options' => [
                                '0' => 'MAH',
                                '1' => 'Non MAH',
                            ],
                            'empty' => true,
                            'label' => array('class' => 'control-label', 'text' => 'Reporter Role'),
                            'class' => 'control-xlarge'
                        ));  ?></td>
                    <td>
                        <h5>Vigiflow status:</h5>
                        <?php
                        echo $this->Form->control('vigiflow', array(
                            'type' => 'select', 'options' => [
                                '0' => 'Uploaded',
                                '1' => 'Pending',
                            ], 'empty' => true,
                            'label' => array('class' => 'control-label', 'text' => ''),
                            'class' => 'control-xlarge'
                        ));
                        ?>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label for="SadrPages" class="required">Pages</label></td>
                    <td>
                        <?php
                        echo $this->Form->control('pages', array(
                            'type' => 'select',
                            'div' => false,
                            'class' => 'control-small',
                            //    'selected' => $this->request->params['paging']['limit'],
                            'empty' => true,
                            'options' => $page_options,
                            'label' => false,
                        ));
                        ?>
                    </td>
                    <td>


                    </td>
                    <td></td>
                    <td>
                        <?php
                        echo $this->Form->button('<i class="icon-search icon-white"></i> Search', array(
                            'escapeTitle' => false,
                            'class' => 'btn btn-primary', 'div' => 'control-group', 'div' => false,
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
                        echo $this->Html->link('<i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel', array('action' => 'index', 'ext' => 'csv', '?' => $this->request->getQuery()), array('class' => 'btn btn-success', 'escape' => false));
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <p>
            <?php
            echo $this->Paginator->counter(
                __('Page <span class="badge">{{page}}</span> of <span class="badge">{{pages}}</span>, 
            showing <span class="badge">{{current}}</span> SADRs out of 
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
                    <th><?php echo $this->Paginator->sort('report_title'); ?></th>
                    <th><?php echo ($this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program') ? $this->Paginator->sort('patient_name') : $this->Paginator->sort('gender'); ?></th>
                    <?php if ($prefix == 'manager' || $prefix == 'reviewer') { ?><th><?php echo $this->Paginator->sort('vigiflow_ref'); ?></th> <?php } ?>
                    <th><?php echo $this->Paginator->sort('reporter_date', 'Date reported'); ?></th>
                    <th><?php echo $this->Paginator->sort('created', 'Date created'); ?></th>
                    <th><?php echo $this->Paginator->sort('submitted_date', 'Date Submitted'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($sadrs as $sadr) : ?>
                    <tr class="">
                        <td><?php echo h($sadr['id']); ?>&nbsp;</td>
                        <td>
                            <?php             
                            if ($sadr['submitted'] > 1) {
                                echo $this->Html->link($sadr['reference_no'], array('action' => 'view', $sadr['id']), array('escape' => false, 'class' => 'text-' . ((isset($sadr['serious']) && $sadr['serious'] == 'Yes') ? 'error' : 'success')));
                            } else {
                                echo $this->Html->link($sadr['reference_no'], array('action' => (($prefix == 'reporter') ? 'edit' : 'view'), $sadr['id']), array('escape' => false, 'class' => 'text-' . ((isset($sadr['serious']) && $sadr['serious'] == 'Yes') ? 'error' : 'success')));
                            }
                            ?>&nbsp;</td>
                        <td><?php
                        if (!empty($sadr['report_title'])) {
                         echo $this->Text->truncate($sadr['report_title'], 42);
                        }
                            if ($sadr['report_type'] == 'Followup') {
                                echo "<br> Initial: ";
                                echo $this->Html->link(
                                    '<label class="label label-info">' . $sadr['reference_no'] . '</label>',
                                    array('action' => 'view', $sadr['sadr_id']),
                                    array('escape' => false)
                                );
                            }
                            ?>&nbsp;
                        </td>
                        <td><?php echo ($this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program') ? h($sadr['patient_name']) : h($sadr['gender']); ?>&nbsp;</td>
                        <?php if ($prefix == 'manager' || $prefix == 'reviewer') { ?><td><?php echo h($sadr['vigiflow_ref']);
                                                                                        echo "\n" . $sadr['vigiflow_date']; ?></td> <?php } ?>
                        <td><?php echo h($sadr['reporter_date']); ?>&nbsp;</td>
                        <td><?php echo h($sadr['created']); ?>&nbsp;</td>
                        <td><?php echo h($sadr['submitted_date']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php
                            if ($sadr['submitted'] > 1) {
                                echo $this->Html->link(
                                    '<span class="label label-info tooltipper" title="View"><i class="fa fa-eye" aria-hidden="true"></i> View </span>',
                                    array('controller' => 'sadrs', 'action' => 'view', $sadr['id']),
                                    array('escape' => false)
                                );
                                echo "&nbsp;";
                                if ($prefix == 'reporter' and $this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program') echo $this->Form->postLink('<span class="label label-inverse tooltipper" data-toggle="tooltip" title="Add follow up report"> <i class="fa fa-facebook" aria-hidden="true"></i> Followup </span>', array('controller' => 'sadrs', 'action' => 'followup', $sadr['id']), array('escape' => false), __('Add a followup report?'));
                                echo "&nbsp;";
                                if ($prefix == 'manager' || $prefix == 'reviewer') echo $this->Form->postLink('<span class="label label-inverse tooltipper" data-toggle="tooltip" title="Download E2B file"> <i class="fa fa-etsy" aria-hidden="true"></i> 2 <i class="fa fa-bold" aria-hidden="true"></i> </span>', array('controller' => 'sadrs', 'action' => 'download', $sadr['id'], 'ext' => 'xml', 'manager' => false), array('escape' => false), __('Download E2B?'));
                                echo "&nbsp;";
                                if (($prefix == 'manager' || $prefix == 'reviewer') && empty($sadr['vigiflow_ref']) && $sadr['copied'] == 2) echo $this->Html->link(
                                    '<span class="label label-warning tooltipper" title="Send to vigiflow"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Vigiflow </span>',
                                    array('controller' => 'sadrs', 'action' => 'vigiflow', $sadr['id'], 'manager' => false),
                                    array('escape' => false)
                                );
                                echo "&nbsp;";

                                if (($prefix == 'manager' || $prefix == 'reviewer') && $sadr['copied'] == 2) echo $this->Html->link(
                                    '<span class="label label-success tooltipper" title="Copy & Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </span>',
                                    array('controller' => 'sadrs', 'action' => 'edit', $sadr['id']),
                                    array('escape' => false)
                                );
                                echo "&nbsp;";
                                if (($prefix == 'manager' || $prefix == 'reviewer') && $sadr['copied'] == 0) echo $this->Form->postLink('<span class="badge badge-success tooltipper" data-toggle="tooltip" title="Copy & Edit"> <i class="fa fa-copy" aria-hidden="true"></i> Copy </span>', array('controller' => 'sadrs', 'action' => 'copy', $sadr['id']), array('escape' => false), __('Create a clean copy to edit?'));
                                echo $this->Html->link(
                                    '<span class="label label-warning tooltipper" title="View"><i class="fa fa-refresh" aria-hidden="true"></i> Archive </span>',
                                    array('controller' => 'sadrs', 'action' => 'archive', $sadr['id']),
                                    array('escape' => false),
                                    __('Are you sure you want to archive the report?')
                                );
                            } else {
                                if ($prefix == 'reporter' and $this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program') echo $this->Html->link(
                                    '<span class="label label-success tooltipper" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </span>',
                                    array('controller' => 'sadrs', 'action' => 'edit', $sadr['id']),
                                    array('escape' => false)
                                );
                                echo "&nbsp;";
                                if ($prefix == 'manager' || $prefix == 'reviewer') echo $this->Html->link(
                                    '<span class="label label-info tooltipper" title="View"><i class="fa fa-eye" aria-hidden="true"></i> View </span>',
                                    array('controller' => 'sadrs', 'action' => 'view', $sadr['id']),
                                    array('escape' => false)
                                );
                            }
                            echo "&nbsp;";
                            echo $this->Html->link(
                                '<span class="label label-default tooltipper" title="View"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF </span>',
                                array('controller' => 'sadrs', 'action' => 'view', 'ext' => 'pdf', $sadr['id']),
                                array('escape' => false)
                            );
                            // Check if the user is a reporter and the report is not submitted
                            if (($prefix == 'reporter' || $prefix == 'manager') && $sadr['submitted'] == 0) {
                                echo "&nbsp;";
                                echo $this->Form->postLink('<span class="label label-warning tooltipper" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete </span>', array('controller' => 'sadrs', 'action' => 'delete', $sadr['id']), array('escape' => false), __('Are you sure you want to delete this report?
                Note: This action cannot be undone.'));
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
        var adates = $('#SadrStartDate, #SadrEndDate').datepicker({
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
                var option = this.id == "SadrStartDate" ? "minDate" : "maxDate",
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