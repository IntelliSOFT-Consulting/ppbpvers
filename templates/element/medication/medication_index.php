<?php
$this->assign('MED', 'active');
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
            '<i class="fa fa-file-o" aria-hidden="true"></i> New Medication Error',
            array('controller' => 'medications', 'action' => 'add'),
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
          <h3>MEDICATION:<small> <i class="icon-glass"></i> Filter, <i class="icon-search"></i> Search, and <i class="icon-eye-open"></i> view reports</small></h3>
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
                'placeholder' => 'me/2020',
                'class' => 'span12', 'label' => array('class' => 'required', 'text' => 'Reference No.')
              )
            );
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'generic_name_i',
              array(
                'div' => false,
                'placeholder' => 'intended product',
                'class' => 'unauthorized_index span10', 'label' => array('class' => 'required', 'text' => 'Generic name')
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
                'class' => 'span12', 'label' => array('class' => 'required', 'text' => 'Institution')
              )
            );
            ?>
          </td>
          <td>
            <h5>Error reach patient?</h5>
            <?php
            echo $this->Form->control('reach_patient', array(
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
            echo $this->Form->control('process_occur', array(
              'type' => 'select',
              'empty' => true, 'class' => 'span12',
              'options' => array(
                'Prescribing' => 'Prescribing',
                'Dispensing (includes filling)' => 'Dispensing (includes filling)',
                'Administration' => 'Administration',
                'Others' => 'Others'
              ),
              'label' => array('class' => 'required', 'text' => 'In which process did the error occur?')
            ));

            if (($this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program'))  echo $this->Form->control(
              'patient_name',
              array(
                'div' => false, 'placeholder' => 'Patient name',
                'class' => 'span12 unauthorized_index', 'label' => array('class' => 'required', 'text' => 'Patient Name')
              )
            );

            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control('outcome', array(
              'type' => 'select',
              'empty' => true, 'class' => 'control',
              'options' => array(
                'Treatment /intervention required-caused temporary harm' => 'Treatment /intervention required-caused temporary harm',
                'Initial/prolonged hospitalization-caused temporary harm' => 'Initial/prolonged hospitalization-caused temporary harm',
                'Caused permanent harm' => 'Caused permanent harm',
                'Actual error-did not reach patient' => 'Actual error-did not reach patient',
                'Actual error-caused no harm' => 'Actual error-caused no harm',
                'Additional monitoring required-caused no harm' => 'Additional monitoring required-caused no harm',
                'Death' => 'Death',
              ),
              'label' => array('class' => 'required', 'text' => 'Error Outcome')
            ));

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
          <td colspan="2">
            <h5>Error Cause</h5>
            <?php
            echo $this->Form->control('error_cause_inexperience', array('label' => 'Inexperienced personnel', 'hiddenField' => false));
            echo $this->Form->control('error_cause_knowledge', array('label' => 'Inadequate knowledge', 'hiddenField' => false));
            echo $this->Form->control('error_cause_distraction', array('label' => 'Distraction', 'hiddenField' => false));
            echo $this->Form->control('error_cause_sound', array('label' => 'Sound alike medication', 'hiddenField' => false));
            echo $this->Form->control('error_cause_medication', array('label' => 'Look alike packaging', 'hiddenField' => false));
            echo $this->Form->control('error_cause_workload', array('label' => 'Heavy workload', 'hiddenField' => false));
            echo $this->Form->control('error_cause_peak', array('label' => 'Peak hour', 'hiddenField' => false));
            echo $this->Form->control('error_cause_stock', array('label' => 'Stock arrangements/storage problem', 'hiddenField' => false));
            ?>
          </td>
          <td>
            <h5>Task and technology</h5>
            <?php
            echo $this->Form->control('error_cause_procedure', array('label' => 'Failure to adhere to work procedure', 'hiddenField' => false));
            echo $this->Form->control('error_cause_abbreviations', array('label' => 'Use of abbreviations', 'hiddenField' => false));
            echo $this->Form->control('error_cause_illegible', array('label' => 'Illegible prescriptions', 'hiddenField' => false));
            echo $this->Form->control('error_cause_inaccurate', array('label' => 'Patient information', 'hiddenField' => false));
            echo $this->Form->control('error_cause_labelling', array('label' => 'Wrong labelling', 'hiddenField' => false));
            echo $this->Form->control('error_cause_computer', array('label' => 'Incorrect computer entry', 'hiddenField' => false));
            echo $this->Form->control('error_cause_other', array('label' => 'Others', 'hiddenField' => false));
            ?>
          </td>
          <td>
            <?php

            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'generic_name_ii',
              array(
                'div' => false, 'placeholder' => '(Error product)',
                'class' => 'span12 unauthorized_index', 'label' => array('class' => 'required', 'text' => 'Generic name')
              )
            );
            ?>
          </td>
        </tr>
        <tr>

          <td>
            <?php
            echo $this->Form->control('health_program', array(
              'type' => 'select', 'options' => [
                'Malaria program' => 'Malaria program', 'National Vaccines and immunisation program' => 'National Vaccines and immunisation program',
                'Neglected tropical diseases program' => 'Neglected tropical diseases program', 'MNCAH Priority Medicines' => 'MNCAH Priority Medicines', 'TB program' => 'TB program',
                'NASCOP program' => 'NASCOP program', 'Cancer/Oncology program' => 'Cancer/Oncology program'
              ], 'empty' => true,
              'label' => array('class' => 'control-label', 'text' => 'Public Health Program'),
              'class' => 'control-xlarge'
            ));
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control('sending_device', array(
              'type' => 'select', 'options' => [
                '1' => 'Web',
                '2' => 'Mobile',
              ], 'empty' => true,
              'label' => array('class' => 'control-label', 'text' => 'Sending Device'),
              'class' => 'control-xlarge'
            ));  ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'reporter',
              array('div' => false, 'class' => 'span12 unauthorized_index', 'label' => array('class' => 'required', 'text' => 'Reporter'), 'placeholder' => 'Name/Email')
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
          <td><?php
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
              ?></td>
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
          <td><label for="MedicationPages" class="required">Pages</label></td>
          <td>
            <?php
            echo $this->Form->control('pages', array(
              'type' => 'select', 'div' => false, 'class' => 'control-small',
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
              'class' => 'btn btn-primary', 'div' => 'control-group', 'div' => false,
              'escapeTitle'=>false,
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
showing <span class="badge">{{current}}</span> Medications Errors out of 
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
          <th><?php echo ($this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program') ? $this->Paginator->sort('patient_name') : $this->Paginator->sort('gender'); ?></th>
          <th><?php echo $this->Paginator->sort('reporter_date', 'Date reported'); ?></th>
          <th><?php echo $this->Paginator->sort('created', 'Date created'); ?></th>
          <th><?php echo $this->Paginator->sort('submitted_date', 'Date Submitted'); ?></th>
          <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($medications as $medication) : ?>
          <tr class="">
            <td><?php echo h($medication['id']); ?>&nbsp;</td>
            <td>
              <?php
              if ($medication['submitted'] > 1) {
                echo $this->Html->link($medication['reference_no'], array('action' => 'view', $medication['id']), array('escape' => false, 'class' => 'text-' . (in_array($medication['outcome'], array(
                    "Treatment /intervention required-caused temporary harm",
                    "Initial/prolonged hospitalization-caused temporary harm",
                    "Caused permanent harm",
                    "Near death event",
                    "Death"
                  )) ? 'error' : 'success')));
              } else {
                echo $this->Html->link($medication['reference_no'], array('action' => (($prefix == 'reporter') ? 'edit' : 'view'), $medication['id']), array('escape' => false, 'class' => 'text-' . (in_array($medication['outcome'], array(
                    "Treatment /intervention required-caused temporary harm",
                    "Initial/prolonged hospitalization-caused temporary harm",
                    "Caused permanent harm",
                    "Near death event",
                    "Death"
                  )) ? 'error' : 'success')));
              }
              ?>&nbsp;
            </td>
            <td><?php echo ($this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program') ? h($medication['patient_name']) : h($medication['gender']); ?>&nbsp;</td>
            <td><?php echo h($medication['reporter_date']); ?>&nbsp;</td>
            <td><?php echo h($medication['created']); ?>&nbsp;</td>
            <td><?php echo h($medication['submitted_date']); ?>&nbsp;</td>
            <td class="actions">
              <?php
              if ($medication['submitted'] > 1) {
                echo $this->Html->link(
                  '<span class="label label-info tooltipper" title="View"><i class="fa fa-eye" aria-hidden="true"></i> View </span>',
                  array('controller' => 'medications', 'action' => 'view', $medication['id']),
                  array('escape' => false)
                );
                echo "&nbsp;";
                if ($prefix == 'reporter' and $this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program') echo $this->Form->postLink('<span class="label label-inverse tooltipper" data-toggle="tooltip" title="Add follow up report"> <i class="fa fa-facebook" aria-hidden="true"></i> Followup </span>', array('controller' => 'medications', 'action' => 'followup', $medication['id']), array('escape' => false), __('Add a followup report?'));
                echo "&nbsp;";
                if ($prefix == 'manager' || $prefix == 'reviewer') echo $this->Form->postLink('<span class="label label-inverse tooltipper" data-toggle="tooltip" title="Download E2B file"> <i class="fa fa-etsy" aria-hidden="true"></i> 2 <i class="fa fa-bold" aria-hidden="true"></i> </span>', array('controller' => 'medications', 'action' => 'download', $medication['id'], 'ext' => 'xml', 'manager' => false), array('escape' => false), __('Download E2B?'));
                echo "&nbsp;";
                if (($prefix == 'manager' || $prefix == 'reviewer') && empty($medication['vigiflow_ref'])  && $medication['copied'] == 2) echo $this->Html->link(
                  '<span class="label label-warning tooltipper" title="Send to vigiflow"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Vigiflow </span>',
                  array('controller' => 'medications', 'action' => 'vigiflow', $medication['id'], 'manager' => false),
                  array('escape' => false)
                );
                echo "&nbsp;";
                if (($prefix == 'manager' || $prefix == 'reviewer') && $medication['copied'] == 2) echo $this->Html->link(
                  '<span class="label label-success tooltipper" title="Copy & Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </span>',
                  array('controller' => 'medications', 'action' => 'edit', $medication['id']),
                  array('escape' => false)
                );
                echo "&nbsp;";
                if (($prefix == 'manager' || $prefix == 'reviewer') && $medication['copied'] == 0) echo $this->Form->postLink('<span class="badge badge-success tooltipper" data-toggle="tooltip" title="Copy & Edit"> <i class="fa fa-copy" aria-hidden="true"></i> Copy </span>', array('controller' => 'medications', 'action' => 'copy', $medication['id']), array('escape' => false), __('Create a clean copy to edit?'));
                if (($prefix == 'manager' || $prefix == 'reviewer')) echo $this->Html->link(
                  '<span class="label label-warning tooltipper" title="View"><i class="fa fa-refresh" aria-hidden="true"></i> Archive </span>',
                  array('controller' => 'medications', 'action' => 'archive', $medication['id']),
                  array('escape' => false),
                  __('Are you sure you want to archive the report?')
                );
              } else {
                // if($prefix != 'manager' && $medication['copied'] != 2) 
                if ($prefix == 'reporter' and $this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program')   echo $this->Html->link(
                  '<span class="label label-success tooltipper" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </span>',
                  array('controller' => 'medications', 'action' => 'edit', $medication['id']),
                  array('escape' => false)
                );
              }
              echo "&nbsp;";
              echo $this->Html->link(
                '<span class="label label-default tooltipper" title="View"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF </span>',
                array('action' => 'view', 'ext' => 'pdf', $medication['id']),
                array('escape' => false)
              );

              echo "&nbsp;";

              // check if the user is a reporter and the report is not submitted
              if (($prefix == 'reporter' || $prefix == 'manager') && $medication['submitted'] == 0 && $this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program') {
                echo $this->Form->postLink('<span class="label label-warning tooltipper" data-toggle="tooltip" title="Delete"> <i class="fa fa-trash-o" aria-hidden="true"></i> Delete </span>', array('controller' => 'medications', 'action' => 'delete', $medication['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $medication['id'] . '?
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
    var adates = $('#MedicationStartDate, #MedicationEndDate').datepicker({
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
        var option = this.id == "MedicationStartDate" ? "minDate" : "maxDate",
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