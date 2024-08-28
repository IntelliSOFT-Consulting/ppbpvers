<?php
$this->assign('TRN', 'active');
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
            '<i class="fa fa-file-o" aria-hidden="true"></i> New Blood Transfusion Reaction',
            array('controller' => 'transfusions', 'action' => 'add'),
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
          <h3>TRANSFUSION:<small> <i class="icon-glass"></i> Filter, <i class="icon-search"></i> Search, and <i class="icon-eye-open"></i> view reports</small></h3>
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
                'placeholder' => 'trn/2020',
                'class' => 'span12', 'label' => array('class' => 'required', 'text' => 'Reference No.')
              )
            );
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'diagnosis',
              array(
                'div' => false,
                'placeholder' => 'diagnosis',
                'class' => 'unauthorized_index span10', 'label' => array('class' => 'required', 'text' => 'Diagnosis')
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
            <h5>Previous transfusion</h5>
            <?php
            echo $this->Form->control('previous_transfusion', array(
              'options' => array('Yes' => 'Yes', 'No' => 'No'), 'legend' => false,
              'type' => 'radio',
              'label'=>false
            ));
            ?>
          </td>
          <td>
            <h5>Previous reactions?</h5>
            <?php
            echo $this->Form->control('previous_reactions', array(
              'options' => array('Yes' => 'Yes', 'No' => 'No'), 'legend' => false,
              'type' => 'radio', 'label'=>false
            ));
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'ward',
              array(
                'div' => false,
                'placeholder' => 'ward',
                'class' => 'control-small', 'label' => array('class' => 'required', 'text' => 'Ward')
              )
            );
            ?>
          </td>
        </tr>
        <tr>
          <td>
            <?php
            echo $this->Form->control('reaction_general', array(
              'type' => 'select',
              'empty' => true, 'class' => 'span12',
              'options' => array(
                'Fever' => 'Fever',
                'Chills/Rigors' => 'Chills/Rigors',
                'Flushing' => 'Flushing',
                'Nausea/ Vomiting' => 'Nausea/ Vomiting'
              ),
              'label' => array('class' => 'required', 'text' => 'General')
            ));
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control('reaction_dermatological', array(
              'type' => 'select',
              'empty' => true, 'class' => 'control-small',
              'options' => array(
                'Urticaria' => 'Urticaria',
                'Other skin rash' => 'Other skin rash'
              ),
              'label' => array('class' => 'required', 'text' => 'Dermatological')
            ));
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control('reaction_cardiac', array(
              'type' => 'select',
              'empty' => true, 'class' => 'control-small',
              'options' => array(
                'Chest pain' => 'Chest pain',
                'Dyspnoea' => 'Dyspnoea',
                'Hypotension' => 'Hypotension',
                'Tachycardia' => 'Tachycardia'
              ),
              'label' => array('class' => 'required', 'text' => 'Cardiac/Respiratory')
            ));
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control('reaction_renal', array(
              'type' => 'select',
              'empty' => true, 'class' => 'control-small',
              'options' => array(
                'Haemoglobinuria- Dark urine' => 'Haemoglobinuria- Dark urine',
                'Oliguria' => 'Oliguria',
                'Anuria' => 'Anuria'
              ),
              'label' => array('class' => 'required', 'text' => 'Renal')
            ));
            ?>
          </td>
          <td>
            <h5>Task and technology</h5>
            <?php
            echo $this->Form->control('reaction_haematological', array(
              'type' => 'select',
              'empty' => true, 'class' => 'control-small',
              'options' => array(
                'Unexplained bleeding' => 'Unexplained bleeding'
              ),
              'label' => array('class' => 'required', 'text' => 'Renal')
            ));
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control('lab_hemolysis', array(
              'type' => 'select',
              'empty' => true, 'class' => 'control-small',
              'options' => array(
                'Present' => 'Present',
                'Absent' => 'Absent',
                'Equivocal' => 'Equivocal'
              ),
              'label' => array('class' => 'required', 'text' => 'Hemolysis')
            ));
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control('lab_hemolysis_present', array(
              'type' => 'select',
              'empty' => true, 'class' => 'control-small',
              'options' => array(
                'Mild' => 'Mild',
                'Moderate' => 'Moderate',
                'Marked' => 'Marked'
              ),
              'label' => array('class' => 'required', 'text' => 'Supernatant: if present')
            ));
            ?>
          </td>
        </tr>
        <tr>
          <td>
            <?php
            echo $this->Form->control('recipient_blood', array(
              'type' => 'select',
              'empty' => true, 'class' => 'control',
              'options' => array(
                'Present' => 'Present',
                'Absent' => 'Absent'
              ),
              'label' => array('class' => 'required', 'text' => 'Recipient: Agglutination')
            ));
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control('donor_hemolysis', array(
              'type' => 'select',
              'empty' => true, 'class' => 'control-small',
              'options' => array(
                'Present' => 'Present',
                'Absent' => 'Absent'
              ),
              'label' => array('class' => 'required', 'text' => 'Donor: Agglutination')
            ));
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
              'component',
              array(
                'div' => false,
                'placeholder' => 'component',
                'class' => 'control-small', 'label' => array('class' => 'required', 'text' => 'Component')
              )
            );
            ?>
          </td>
          <td>
            <?php
            echo $this->Form->control(
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
          <td>
            <h5>Gender</h5>
            <?php
            echo $this->Form->control('gender', array(
              'options' => array('Male' => 'Male', 'Female' => 'Female'), 'legend' => false,
              'type' => 'radio', 'label'=>false
            ));
            ?>
          </td>
        </tr>
        <tr>
        <tr>
          <!-- Added -->
          <td>
            <?php
            echo $this->Form->control('submitted', array(
              'type' => 'select',
              'empty' => true,
              'options' => array(
                '0' => 'Submitted',
                '1' => 'Unsubmitted'
              ),
              'label' => array('class' => 'required', 'text' => 'Report Status')
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
          <td></td>
          <td></td>
          <td></td>
          <td></td>

          <!-- End -->
        </tr>
        <td><label for="TransfusionPages" class="required">Pages</label></td>
        <td>
          <?php
          echo $this->Form->control('pages', array(
            'type' => 'select', 'div' => false, 'class' => 'control-small', 
            // 'selected' => $this->request->params['paging']['limit'],
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
            'formnovalidate' => 'formnovalidate',
            'escapeTitle'=>false,
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
        //   echo $this->Html->link('<i class="fa fa-file-excel-o" aria-hidden="true"></i> Excel', array('action' => 'index', 'ext' => 'csv', '?' => $this->request->query), array('class' => 'btn btn-success', 'escape' => false));
          ?>
        </td>
        </tr>
      </tbody>
    </table>
    <p>
      
    <?php

echo $this->Paginator->counter(
    __('Page <span class="badge">{{page}}</span> of <span class="badge">{{pages}}</span>, 
showing <span class="badge">{{current}}</span> Blood Transfussions out of <span class="badge badge-inverse">{{count}}</span> total, starting on record <span class="badge">{{start}}</span>, 
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
          <th><?php echo $this->Paginator->sort('patient_name'); ?></th>
          <th><?php echo $this->Paginator->sort('reporter_date', 'Date reported'); ?></th>
          <th><?php echo $this->Paginator->sort('created', 'Date created'); ?></th>
          <th><?php echo $this->Paginator->sort('submitted_date', 'Date Submitted'); ?></th>
          <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($transfusions as $transfusion) : ?>
          <tr class="">
            <td><?php echo h($transfusion['id']); ?>&nbsp;</td>
            <td>
              <?php
              if ($transfusion['submitted'] > 1) {
                echo $this->Html->link($transfusion['reference_no'], array('action' => 'view', $transfusion['id']), array('escape' => false));
              } else {
                echo $this->Html->link($transfusion['reference_no'], array('action' => (($prefix == 'reporter') ? 'edit' : 'view'), $transfusion['id']), array('escape' => false));
              }
              ?>&nbsp;
            </td>
            <td><?php echo h($transfusion['patient_name']); ?>&nbsp;</td>
            <td><?php echo h($transfusion['reporter_date']); ?>&nbsp;</td>
            <td><?php echo h($transfusion['created']); ?>&nbsp;</td>
            <td><?php echo h($transfusion['submitted_date']); ?>&nbsp;</td>
            <td class="actions">
              <?php
              if ($transfusion['submitted'] > 1) {
                echo $this->Html->link(
                  '<span class="label label-info tooltipper" title="View"><i class="fa fa-eye" aria-hidden="true"></i> View </span>',
                  array('controller' => 'transfusions', 'action' => 'view', $transfusion['id']),
                  array('escape' => false)
                );
                echo "&nbsp;";
                if ($prefix == 'reporter') echo $this->Form->postLink('<span class="label label-inverse tooltipper" data-toggle="tooltip" title="Add follow up report"> <i class="fa fa-facebook" aria-hidden="true"></i> Followup </span>', array('controller' => 'transfusions', 'action' => 'followup', $transfusion['id']), array('escape' => false), __('Add a followup report?'));
                echo "&nbsp;";
                if (($prefix == 'manager' || $prefix == 'reviewer') && $transfusion['copied'] == 2) echo $this->Html->link(
                  '<span class="label label-success tooltipper" title="Copy & Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </span>',
                  array('controller' => 'transfusions', 'action' => 'edit', $transfusion['id']),
                  array('escape' => false)
                );
                echo "&nbsp;";
                if (($prefix == 'manager' || $prefix == 'reviewer') && $transfusion['copied'] == 0) echo $this->Form->postLink('<span class="badge badge-success tooltipper" data-toggle="tooltip" title="Copy & Edit"> <i class="fa fa-copy" aria-hidden="true"></i> Copy </span>', array('controller' => 'transfusions', 'action' => 'copy', $transfusion['id']), array('escape' => false), __('Create a clean copy to edit?'));

                if (($prefix == 'manager' || $prefix == 'reviewer'))                echo $this->Html->link(
                  '<span class="label label-warning tooltipper" title="View"><i class="fa fa-refresh" aria-hidden="true"></i> Archive </span>',
                  array('controller' => 'transfusions', 'action' => 'archive', $transfusion['id']),
                  array('escape' => false),
                  __('Are you sure you want to archive the report?')
                );
              } else {
                if ($prefix == 'reporter') echo $this->Html->link(
                  '<span class="label label-success tooltipper" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit </span>',
                  array('controller' => 'transfusions', 'action' => 'edit', $transfusion['id']),
                  array('escape' => false)
                );
              }
              echo "&nbsp;";
              echo $this->Html->link(
                '<span class="label label-default tooltipper" title="View"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF </span>',
                array('action' => 'view', 'ext' => 'pdf', $transfusion['id']),
                array('escape' => false)
              );
              echo "&nbsp;";

              // check if report has not been submitted and user is reporter

              if (($prefix == 'reporter' || $prefix == 'manager') && $transfusion['submitted'] == 0 && $this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program') {
                echo $this->Form->postLink('<span class="label label-warning tooltipper" data-toggle="tooltip" title="Delete"> <i class="fa fa-trash" aria-hidden="true"></i> Delete </span>', array('controller' => 'transfusions', 'action' => 'delete', $transfusion['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $transfusion['id'] . '?
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
    var adates = $('#TransfusionStartDate, #TransfusionEndDate').datepicker({
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
        var option = this.id == "TransfusionStartDate" ? "minDate" : "maxDate",
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