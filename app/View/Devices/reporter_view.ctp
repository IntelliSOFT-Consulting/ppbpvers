<?php
$this->assign('DEVICE', 'active');
?>

<!-- DEVICE
    ================================================== -->
<section id="devicesview">
  <ul id="reviewer_tab" class="nav nav-tabs">
    <li class="active"><a href="#formview" data-toggle="tab"><?php echo $device['Device']['reference_no']; ?></a></li>
    <li><a href="#external_report_comments" data-toggle="tab">Feedback (<?php echo count($device['ExternalComment']); ?>)</a></li>

    <?php
    if ($this->Session->read('Auth.User.user_type') === "County Pharmacist") {
      if (isset($device['Device']['serious']) && in_array($device['Device']['serious'], ['Fatal', 'Serious'])) { ?>
        <li><a href="#committee-review" data-toggle="tab">Committee Review </a></li>
    <?php
      }
    } ?>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="formview">
      <div class="row-fluid">
        <div class="span10">
          <?php echo $this->element('device/device_view'); ?>
        </div>
        <div class="span2">
          <?php
          echo $this->Html->link(
            'Download PDF',
            array('controller' => 'devices', 'action' => 'view', 'ext' => 'pdf', $device['Device']['id']),
            array(
              'class' => 'btn btn-primary btn-block mapop', 'title' => 'Download PDF',
              'data-content' => 'Download the pdf version of the report',
            )
          );
          ?>
          <hr>
          <?php
          echo $this->Form->postLink('<span class="btn btn-warning btn-block tooltipper" data-toggle="tooltip" title="Add follow up report">  <b>Follow-up</b> <i class="fa fa-plus" aria-hidden="true"></i> </span>', array('controller' => 'devices', 'action' => 'followup', $device['Device']['id']), array('escape' => false), __('Add a followup report?'));
          ?>

          <hr>
          <?php
          if ($device['Device']['submitted'] > 1) {
            echo $this->Html->link('Edit Report', '#', array(
              'name' => 'continueEditing',
              'class' => 'btn  btn-block mapop disabled',
              'id' => 'DeviceContinueReport', 'title' => 'Submitted Report!',
              'data-content' => 'This report has been submitted to PPB and cannot be edited',
              'div' => false,
            ));
          } else {
            echo $this->Html->link('Edit Report', array('action' => 'edit', $device['Device']['id']), array(
              'name' => 'continueEditing',
              'class' => 'btn  btn-block mapop',
              'id' => 'DeviceContinueReport', 'title' => 'Edit Report',
              'data-content' => 'This is possible only if the form has not been successfully submitted to PPB',
              'div' => false,
            ));
          }
          ?>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="external_report_comments">
      <!-- 12600 Letters debat -->
      <div class="amend-form">
        <h5 class="text-info"><u>FEEDBACK</u></h5>
        <div class="row-fluid">
          <div class="span8">
            <?php
            echo $this->element('comments/list', ['comments' => $device['ExternalComment']]);
            ?>
          </div>
          <div class="span4 lefty">
            <?php
            echo $this->element('comments/add', [
              'model' => [
                'model_id' => $device['Device']['id'],
                'foreign_key' => $device['Device']['id'],
                'model' => 'Device',
                'category' => 'external',
                'url' => 'report_feedback',
                'review' => false
              ]
            ])
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="committee-review">
      <!-- 12600 Letters debat -->
      <div class="amend-form">
        <h5 class="text-info"><u>COMMITTEE REVIEW</u></h5>
        <div class="row-fluid">
          <div class="span8">
            <?php
            echo $this->element('comments/index', ['comments' => ((isset($device['DeviceOriginal']['id']) && !empty($device['DeviceOriginal']['id'])) ? $device['DeviceOriginal']['ReviewComment'] : $device['ReviewComment'])]);
            ?>
          </div>
          <div class="span4 lefty">
            <?php
            $oid = ((isset($device['DeviceOriginal']['id']) && !empty($device['DeviceOriginal']['id'])) ? $device['DeviceOriginal']['id'] : $device['Device']['id']);
            echo $this->element('comments/add', [
              'model' => [
                'model_id' => $oid, 'foreign_key' => $oid,
                'model' => 'Device', 'category' => 'review', 'url' => 'report_feedback', 'review' => true
              ]
            ])
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>