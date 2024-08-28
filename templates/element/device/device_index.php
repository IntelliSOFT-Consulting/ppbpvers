<?php
$this->assign('DEV', 'active');
echo $this->Html->script('sadrs_index', array('inline' => false));
?>

<div class="row-fluid">
  <div class="span12">

    <?php
    if ($prefix == 'reporter') {
    ?>
      <div class="row-fluid">
        <div class="span12">
          <?php
          if ($this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program') echo $this->Html->link(
            '<i class="fa fa-file-o" aria-hidden="true"></i> New Medical Device Incident',
            array('controller' => 'devices', 'action' => 'add'),
            array('escape' => false, 'class' => 'btn btn-success')
          );
          ?>
        </div>
      </div>
      <hr>
    <?php } ?>

    <div class="marketing">
      <div class="row-fluid">
        <div class="span12">
          <h3>DEVICE:<small> <i class="icon-glass"></i> Filter, <i class="icon-search"></i> Search, and <i class="icon-eye-open"></i> view reports</small></h3>
          <hr class="soften" style="margin: 7px 0px;">
        </div>
      </div>
    </div>

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
                'placeholder' => 'device/2020',
                'class' => 'span12',
                'label' => array('class' => 'required', 'text' => 'Reference No.')
              )
            );
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'brand_name',
              array(
                'div' => false,
                'placeholder' => 'brand name',
                'class' => 'unauthorized_index span10',
                'label' => array('class' => 'required', 'text' => 'Brand name')
              )
            );
            ?>
          </td>
          <td colspan="2">
            <h5>Report Dates</h5>
            <div style="display: flex; align-items: center;">
              <?php
              echo $this->Form->control(
                'start_date',
                array(
                  'div' => false,
                  'type' => 'text',
                  'class' => 'control-small unauthorized_index',
                  'label' => false,
                  'placeHolder' => 'Start Date'
                )
              );
              ?>
              <span style="margin: 0 10px;">-to-</span>
              <?php
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
            </div>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'name_of_institution',
              array(
                'div' => false,
                'placeholder' => 'institution',
                'class' => 'span12',
                'label' => array('class' => 'required', 'text' => 'Institution')
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
                'placeholder' => 'Report title',
                'class' => 'span12',
                'label' => array('class' => 'required', 'text' => 'Report Title')
              )
            );
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'county_id',
              array(
                'div' => false,
                'empty' => true,
                'class' => 'control-small',
                'label' => array('class' => 'required', 'text' => 'County')
              )
            );
            ?>
          </td>
        </tr>
        <tr>
          <td>
            <?php
            echo $this->Form->control('serious', array(
              'type' => 'select',
              'empty' => true,
              'class' => 'control',
              'options' => array(
                'Fatal' => 'Fatal',
                'Serious' => 'Serious',
                'Moderate' => 'Moderate',
                'Mild' => 'Mild',
                'Unknown' => 'Unknown'
              ),
              'label' => array('class' => 'required', 'text' => 'Event classification')
            ));
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control('serious_yes', array(
              'type' => 'select',
              'empty' => true,
              'class' => 'control',
              'options' => array(
                'Death' => 'Death',
                'Life-threatening' => 'Life-threatening',
                'Hospitalization or prolongation of existing hospitalization' => 'Hospitalization or prolongation of existing hospitalization',
                'Results in persistent or significant disability' => 'Results in persistent or significant disability',
                'Congenital anomaly or birth defect' => 'Congenital anomaly or birth defect'
              ),
              'label' => array('class' => 'required', 'text' => 'Reason for seriousness')
            ));
            ?>
          </td>
          <td colspan="2">
            <?php
            echo $this->Form->control('outcome', array(
              'type' => 'select',
              'empty' => true,
              'class' => 'control',
              'options' => array(
                'Recovered' => 'Recovered',
                'Recovering' => 'Recovering',
                'Recovered with sequalae' => 'Recovered with sequalae',
                'Fatal' => 'Fatal',
                'Unknown' => 'Unknown'
              ),
              'label' => array('class' => 'required', 'text' => 'Patient outcome')
            ));

            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'common_name',
              array(
                'div' => false,
                'placeholder' => 'common name',
                'class' => 'control-small',
                'label' => array('class' => 'required', 'text' => 'Common name')
              )
            );
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'manufacturer_name',
              array(
                'div' => false,
                'placeholder' => 'manufacturer',
                'class' => 'control-small',
                'label' => array('class' => 'required', 'text' => 'Manufacturer')
              )
            );
            ?>
          </td>
          <td>
            <h5>Problem noted prior?</h5>
            <?php
            echo $this->Form->control('problem_noted', array(
              'options' => array('Yes' => 'Yes', 'No' => 'No'),
              'legend' => false,
              'label'=>false,
              'type' => 'radio'
            ));
            ?>
          </td>
        </tr>
        <tr>
          <td>
            <?php
            echo $this->Form->control(
              'patient_name',
              array(
                'div' => false,
                'placeholder' => 'Patient name',
                'class' => 'span12 unauthorized_index',
                'label' => array('class' => 'required', 'text' => 'Patient Name')
              )
            );
            echo $this->Form->control('submitted', array(
              'label' => array('class' => 'required', 'text' => 'Report Status'),
              'empty' => true,
              'hiddenField' => false,
              'options' => array(
                '0' => 'Submitted',
                '1' => 'Unsubmitted'
              )
            ));

            ?>
          </td>
          <td>
            <h5>Report Type?</h5>
            <?php
            echo $this->Form->control('report_type', array(
              'options' => array('Initial' => 'Initial', 'Followup' => 'Followup'),
              'legend' => false,
              'label'=>false,
              'type' => 'radio'
            ));
            echo $this->Form->control('health_program', array(
              'type' => 'select',
              'options' => [
                'Malaria program' => 'Malaria program',
                'National Vaccines and immunisation program' => 'National Vaccines and immunisation program',
                'Neglected tropical diseases program' => 'Neglected tropical diseases program',
                'MNCAH Priority Medicines' => 'MNCAH Priority Medicines',
                'TB program' => 'TB program',
                'NASCOP program' => 'NASCOP program',
                'Cancer/Oncology program' => 'Cancer/Oncology program'
              ],
              'empty' => true,
              'label' => array('class' => 'control-label', 'text' => 'Public Health Program'),
              'class' => 'control-xlarge'
            ));
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control('operator', array(
              'type' => 'select',
              'empty' => true,
              'class' => 'control-small',
              'options' => array(
                'Healthcare professional' => 'Healthcare professional',
                'Patient' => 'Patient',
                'Caregiver' => 'Caregiver',
                'Other' => 'Other'
              ),
              'label' => array('class' => 'required', 'text' => 'Operator')
            ));
            ?>

          </td>
          <td>
            <?php
            echo $this->Form->control('device_usage', array(
              'type' => 'select',
              'empty' => true,
              'class' => 'control-small',
              'options' => array(
                'Single use' => 'Single use',
                'Reuse of reusable' => 'Reuse of reusable',
                'Reuse of single-use' => 'Reuse of single-use',
                'Reserviced/Refurbished' => 'Reserviced/Refurbished'
              ),
              'label' => array('class' => 'required', 'text' => 'Device usage')
            ));
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'reporter',
              array('div' => false, 'class' => 'span12 unauthorized_index', 'label' => array('class' => 'required', 'text' => 'Reporter'), 'placeholder' => 'Name/Email')
            );

            echo $this->Form->control('sending_device', array(
              'type' => 'select',
              'options' => [
                '1' => 'Web',
                '2' => 'Mobile',
              ],
              'empty' => true,
              'label' => array('class' => 'control-label', 'text' => 'Sending Device'),
              'class' => 'control-xlarge'
            ));  ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'designation_id',
              array(
                'div' => false,
                'empty' => true,
                'class' => 'control-small',
                'label' => array('class' => 'required', 'text' => 'Designation')
              )
            );
            echo $this->Form->control('mah', array(
              'type' => 'select',
              'options' => [
                '0' => 'MAH',
                '1' => 'Non MAH',
              ],
              'empty' => true,
              'label' => array('class' => 'control-label', 'text' => 'Reporter Role'),
              'class' => 'control-xlarge'
            ));
            ?>
          </td>
          <td>
            <h5>Gender</h5>
            <?php
            echo $this->Form->control('gender', array(
              'options' => array('Male' => 'Male', 'Female' => 'Female', 'Unknown' => 'Unknown'),
              'legend' => false,
              'type' => 'radio',
              'label'=>false,
            ));
            ?>
          </td>
        </tr>
        <tr>
          <td><label for="DevicePages" class="required">Pages</label></td>
          <td>
            <?php
            echo $this->Form->control('pages', array(
              'type' => 'select',
              'div' => false,
              'class' => 'control-small',
              //   'selected' => $this->request->params['paging']['limit'],
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
              'class' => 'btn btn-primary',
              'div' => 'control-group',
              'div' => false,
              'escapeTitle' => false,
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
showing <span class="badge">{{current}}</span> Devices out of 
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
          <th><?php echo $this->Paginator->sort('brand_name'); ?></th>
          <th><?php echo $this->Paginator->sort('patient_name'); ?></th>
          <th><?php echo $this->Paginator->sort('reporter_date', 'Date reported'); ?></th>
          <th><?php echo $this->Paginator->sort('created', 'Date created'); ?></th>
          <th><?php echo $this->Paginator->sort('submitted_date', 'Date Submitted'); ?></th>
          <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($devices as $device) : ?>
          <tr class="">
            <td><?php echo h($device['id']); ?>&nbsp;</td>
            <td>
              <?php
              if ($device['submitted'] > 1) {
                echo $this->Html->link($device['reference_no'], array('action' => 'view', $device['id']), array('escape' => false, 'class' => 'text-' . ((isset($device['serious']) && in_array($device['serious'], ['Fatal', 'Serious'])) ? 'error' : 'success')));
              } else {
                echo $this->Html->link($device['reference_no'], array('action' => (($prefix == 'reporter') ? 'edit' : 'view'), $device['id']), array('escape' => false, 'class' => 'text-' . ((isset($device['serious']) && in_array($device['serious'], ['Fatal', 'Serious'])) ? 'error' : 'success')));
              }
              ?>&nbsp;</td>
            <td><?php echo h($device['report_title']);
                if ($device['report_type'] == 'Followup') {
                  echo "<br> Initial: ";
                  echo $this->Html->link(
                    '<label class="label label-info">' . substr($device['reference_no'], 0, strpos($device['reference_no'], '_')) . '</label>',
                    array('action' => 'view', $device['device_id']),
                    array('escape' => false)
                  );
                }
                ?>&nbsp;
            </td>
            <td><?php echo h($device['brand_name']); ?>&nbsp;</td>
            <td><?php echo h($device['patient_name']); ?>&nbsp;</td>
            <td><?php echo h($device['reporter_date']); ?>&nbsp;</td>
            <td><?php echo h($device['created']); ?>&nbsp;</td>
            <td><?php echo h($device['submitted_date']); ?>&nbsp;</td>
            <td class="actions">
              <?php
              if ($device['submitted'] > 1) {
                echo $this->Html->link(
                  '<span class="label label-info tooltipper" title="View"><i class="fa fa-eye" aria-hidden="true"></i> View </span>',
                  array('controller' => 'devices', 'action' => 'view', $device['id']),
                  array('escape' => false)
                );
                echo "&nbsp;";
                if ($prefix == 'reporter') echo $this->Form->postLink('<span class="label label-inverse tooltipper" data-toggle="tooltip" title="Add follow up report"> <i class="fa fa-facebook" aria-hidden="true"></i> Followup</span>', array('controller' => 'devices', 'action' => 'followup', $device['id']), array('escape' => false), __('Add a followup report?'));
                echo "&nbsp;";
                if (($prefix == 'manager' || $prefix == 'reviewer') && $device['copied'] == 2) echo $this->Html->link(
                  '<span class="label label-success tooltipper" title="Copy & Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </span>',
                  array('controller' => 'devices', 'action' => 'edit', $device['id']),
                  array('escape' => false)
                );
                echo "&nbsp;";
                if (($prefix == 'manager' || $prefix == 'reviewer') && $device['copied'] == 0) echo $this->Form->postLink('<span class="badge badge-success tooltipper" data-toggle="tooltip" title="Copy & Edit"> <i class="fa fa-copy" aria-hidden="true"></i> Copy </span>', array('controller' => 'devices', 'action' => 'copy', $device['id']), array('escape' => false), __('Create a clean copy to edit?'));
                if (($prefix == 'manager' || $prefix == 'reviewer')) echo $this->Html->link(
                  '<span class="label label-warning tooltipper" title="View"><i class="fa fa-refresh" aria-hidden="true"></i> Archive </span>',
                  array('controller' => 'devices', 'action' => 'archive', $device['id']),
                  array('escape' => false),
                  __('Are you sure you want to archive the report?')
                );
              } else {
                echo $this->Html->link(
                  '<span class="label label-success tooltipper" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </span>',
                  array('controller' => 'devices', 'action' => 'edit', $device['id']),
                  array('escape' => false)
                );
              }
              echo "&nbsp;";
              // Check if the user is a reporter and report not submitted and not a health program
              if (($prefix == 'reporter' || $prefix == 'manager') && $device['submitted'] == 0 && $this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program') {
                echo $this->Form->postLink('<span class="label label-warning tooltipper" data-toggle="tooltip" title="Delete"> <i class="fa fa-trash" aria-hidden="true"></i> Delete </span>', array('controller' => 'devices', 'action' => 'delete', $device['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $device['id'] . '?
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
    var adates = $('#DeviceStartDate, #DeviceEndDate').datepicker({
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
        var option = this.id == "DeviceStartDate" ? "minDate" : "maxDate",
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