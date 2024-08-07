<?php
$this->assign('NT', 'active');
echo $this->Html->script('highcharts/modules/data', array('inline' => false));
?>

<div class="row-fluid">
    <div class="span12">

        <div class="marketing">
            <div class="row-fluid">
                <div class="span12">
                    <h3><i class="icon-exclamation"></i> Notifications: <small> <i class="icon-glass"></i> Filter, <i class="icon-search"></i> Search, and <i class="icon-eye-open"></i> view reports</small></h3>
                    <hr class="soften" style="margin: 7px 0px;">
                </div>
            </div>
        </div>

        <?php

        echo $this->Form->create(null, [
            'type' => 'get',
            'url' => ['action' => 'index']
        ]); ?>
        <table class="table table-condensed table-bordered" style="margin-bottom: 2px;">
            <thead>
                <tr>

                    <th>
                        <?php
                        echo $this->Form->control('protocol_no', array(
                            'div' => false, 'class' => 'span12 unauthorized_index',
                            'label' => array('class' => 'required', 'text' => 'Reference No.'),
                            'type' => 'text',
                        ));
                        ?>
                    </th>
                    <th>
                        <?php

                        echo $this->Form->control(
                            'start_date',
                            ['label' => array(
                                'class' => 'required start_date', 'text' => 'Notification Create Dates'
                            ), 'class' => 'start_date', 'templates' => 'clear_form', 'placeholder' => 'Sent Start Date']
                        );
                        echo $this->Form->control(
                            'end_date',
                            [
                                'label' => array(
                                    'class' => 'required end_date', 'text' => 'Notification Create Dates'
                                ),
                                'class' => 'end_date',
                                'templates' => 'clear_form', 'placeholder' => 'Sent End Date'
                            ]
                        );

                        ?>
                    </th>
                    <th>
                        <?php
                        echo $this->Form->control('model', array(
                            'div' => false, 'class' => 'span12 unauthorized_index',
                            'label' => array('class' => 'required', 'text' => 'Report Type.'),
                            'type' => 'select',
                            'empty' => true,
                            'options' => array(
                                'User' => 'User Registration',
                                'Sadr' => 'SADR',
                                'Padr' => 'PADR',
                                'Aefi' => 'AEFI',
                                'Saefi' => 'Investigation Reports',
                                'Pqmp' => 'PQHPT',
                                'Ce2b' => 'E2B',
                                'Device' => 'Devices',
                                'Medication' => 'Medication Errors',
                                'Transfusion' => 'Transfusion Reaction'
                            ),
                        ));
                        ?>

                    </th>
                    <th>
                        <?php
                        echo $this->Form->control('pages', array(
                            'type' => 'select',
                            'div' => false,
                            'class' => 'span12',
                            // 'selected' => $this->request->getParams('paging')['limit'],
                            'empty' => true,
                            'options' => $page_options,
                            'label' => array('class' => 'required', 'text' => 'Pages'),
                        ));
                        ?>
                    </th>
                    <th rowspan="2" style="width: 14%;">

                        <?php
                        echo $this->Form->button('<i class="icon-search icon-white"></i> Search', array(
                            'escapeTitle' => false,
                            'class' => 'btn btn-inverse', 'div' => 'control-group', 'div' => false,
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

        <?php echo $this->Form->end(); ?>
        <p>
                    <?php
                    echo $this->Paginator->counter(
                        __('Page <span class="badge">{{page}}</span> of <span class="badge">{{pages}}</span>, 
                        showing <span class="badge">{{current}}</span> Notifications out of 
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

        <table class="table  table-bordered table-striped">
            <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('user_id'); ?></th>
                    <th><?php echo 'Message' ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($notifications as $notification) :

                ?>
                    <tr class="">
                        <td><?php echo h($notification['id']); ?>&nbsp;</td>
                        <td>
                            <?php echo $notification['user']['name']; ?>&nbsp;
                        </td>
                        <td><?php echo $notification['system_message']; ?>&nbsp;</td>
                        <td><?php echo h($notification['created']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php echo $this->Form->postLink(
                                '<label class="label label-important">Delete</label>',
                                array('action' => 'delete', $notification['id']),
                                array('escape' => false),
                                __('Are you sure you want to delete # %s?', $notification['id'])
                            ); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        $(".start_date").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy',
            maxDate: new Date(),

        });
        $(".end_date").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy',
            maxDate: new Date(),
        });
    });


    $(function() {
        $(".morecontent").expander();


        var adates = $('#NotificationStartDate, #NotificationEndDate').datepicker({
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
                var option = this.id == "NotificationStartDate" ? "minDate" : "maxDate",
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