<?php
$this->assign('SAE', 'active');
?>

<div class="row-fluid">
    <div class="span12">

        <?php
        if ($prefix == 'applicant') {
        ?>
            <div class="row-fluid">
                <div class="span12">
                    <?php
                    echo $this->Html->link(
                        '<i class="icon-file"></i> New SAE/SUSAR',
                        array('controller' => 'applications', 'action' => 'index'),
                        array('escape' => false, 'class' => 'btn btn-success',  'style' => 'margin-right: 10px;')
                    );
                    ?>
                </div>
            </div>
            <hr>
        <?php } ?>

        <div class="marketing">
            <div class="row-fluid">
                <div class="span12">
                    <h3>SAE/SUSARs:<small> <i class="icon-glass"></i> Filter, <i class="icon-search"></i> Search, and <i class="icon-eye-open"></i> view reports</small></h3>
                    <hr class="soften" style="margin: 7px 0px;">
                </div>
            </div>
        </div>

        <?php
        echo $this->Form->create(null, ['valueSources' => 'query']);
        ?>
        <table class="table table-condensed table-bordered" style="margin-bottom: 2px;">
            <thead>
                <tr>
                    <th style="width: 15%;">
                        <?php
                        echo $this->Form->control(
                            'reference_no',
                            array('div' => false, 'class' => 'span12 unauthorized_index', 'label' => array('class' => 'required', 'text' => 'Reference No.'))
                        );
                        ?>
                    </th>
                    <th>
                        <?php

                        echo $this->Form->control(
                            'drug_name',
                            array(
                                'div' => false,
                                'placeholder' => 'drug name',
                                'class' => 'span12 unauthorized_index',
                                'label' => array('class' => 'required', 'text' => 'Drug Name')
                            )
                        );
                        ?>
                    </th>
                    <th>
                        <?php
                        echo $this->Form->control(
                            'start_date',
                            array(
                                'div' => false,
                                'type' => 'text',
                                'class' => 'input-small unauthorized_index',
                                'after' => '-to-',
                                'label' => array('class' => 'required', 'text' => 'SAE/SUSAR Create Dates'),
                                'placeHolder' => 'Start Date'
                            )
                        );
                        echo $this->Form->control(
                            'end_date',
                            array(
                                'div' => false,
                                'type' => 'text',
                                'class' => 'input-small unauthorized_index',
                                'after' => '<a style="font-weight:normal" onclick="$(\'.unauthorized_index\').val(\'\');" >
                            <em class="accordion-toggle">clear!</em></a>',
                                'label' => false,
                                'placeHolder' => 'End Date'
                            )
                        );
                        ?>
                    </th>
                    <th>
                        <?php
                        echo $this->Form->control('pages', array(
                            'type' => 'select',
                            'div' => false,
                            'class' => 'span12',
                            'empty' => true,
                            'options' => $page_options,
                            'label' => array('class' => 'required', 'text' => 'Pages'),
                        ));
                        ?>
                    </th>
                    <th rowspan="2" style="width: 14%;">
                        <?php
                        echo $this->Form->button('<i class="icon-search icon-white"></i> Search', array(
                            'class' => 'btn btn-inverse',
                            'escapeTitle'=>false,
                            'div' => 'control-group',
                            'div' => false,
                            'style' => array('margin-bottom: 5px')
                        ));

                        echo $this->Html->link('<i class="icon-remove"></i> Clear', array('action' => 'index'), array('class' => 'btn', 'escape' => false, 'style' => array('margin-bottom: 5px')));
                        echo "<br>";
                        echo $this->Html->link('<i class="icon-file-alt"></i> Excel', array('action' => 'index', 'ext' => 'csv'), array('class' => 'btn btn-success', 'escape' => false));
                        ?>
                    </th>
                </tr>
            </thead>
        </table>
        <p>
            <?php
            echo $this->Paginator->counter(
                __('Page <span class="badge">{{page}}</span> of <span class="badge">{{pages}}</span>, 
showing <span class="badge">{{current}}</span> Saes out of 
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
                    <th><?php echo $this->Paginator->sort('report_type'); ?></th>
                    <th><?php echo $this->Paginator->sort('patient_initials'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($saes as $sae): ?>
                    <tr class="">
                        <td><?php echo h($sae['id']); ?>&nbsp;</td>
                        <td>
                            <?php
                            // echo h($sae['reference_no']); 
                            echo $this->Html->link($sae['reference_no'], array('action' => 'view', $sae['id']), array('escape' => false));
                            ?>&nbsp;</td>
                        <td><?php echo h($sae['report_type']);
                            if ($sae['report_type'] == 'Followup') {
                                echo "<br> Initial: ";
                                echo $this->Html->link(
                                    '<label class="label label-info">' . substr($sae['reference_no'], 0, strpos($sae['reference_no'], '_')) . '</label>',
                                    array('action' => 'view', $sae['sae_id']),
                                    array('escape' => false)
                                );
                            }
                            ?>&nbsp;</td>
                        <td><?php echo h($sae['patient_initials']); ?>&nbsp;</td>
                        <td><?php echo h($sae['created']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php if ($sae['approved'] > 0) echo $this->Html->link(__('<label class="label label-info">View</label>'), array('action' => 'view', $sae['id']), array('escape' => false)); ?>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        // $(".morecontent").expander();
        var adates = $('#SaeStartDate, #SaeEndDate').datepicker({
            minDate: "-100Y",
            maxDate: "-0D",
            dateFormat: 'dd-mm-yy',
            format: 'dd-mm-yyyy',
            endDate: '-0d',
            showButtonPanel: true,
            changeMonth: true,
            changeYear: true,
            showAnim: 'show',
            onSelect: function(selectedDate) {
                var option = this.id == "SaeStartDate" ? "minDate" : "maxDate",
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