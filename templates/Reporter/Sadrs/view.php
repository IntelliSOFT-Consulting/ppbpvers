<?php
$this->assign('SADR', 'active');
?>

<!-- SADR
    ================================================== -->
<section id="sadrsview">
  <ul id="reviewer_tab" class="nav nav-tabs">
    <li class="active"><a href="#formview" data-toggle="tab"><?php echo $sadr['reference_no']; ?></a></li>
    <li><a href="#external_report_comments" data-toggle="tab">Feedback (<?php
                                                                        echo count($sadr['external_comment']);
                                                                        ?>)</a></li>
    <?php
    if ($this->request->getSession()->read('Auth.User.user_type') === "County Pharmacistcc") {
      if ($sadr['serious'] == "Yes") {
    ?>
        <li><a href="#committee-review" data-toggle="tab">Committee Review </a></li>
    <?php }
    } ?>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="formview">
      <div class="row-fluid">
        <div class="span10">
          <?php echo $this->element('sadr/sadr_view'); ?>
        </div>
        <div class="span2">
          <?php

          echo $this->Html->link(
            'Download PDF',
            ['controller' => 'Sadrs', 'action' => 'view', '_ext' => 'pdf', $sadr['id']],
            [
              'class' => 'btn btn-primary btn-block mapop',
              'title' => 'Download PDF',
              'data-content' => 'Download the pdf version of the report',
              'confirm' => 'Are you sure you want to download this PDF?',
              'escape' => false
            ]
          );

          ?>
          <hr>
          <?php
          if ($this->request->getSession()->read('Auth.User.user_type') != 'Public Health Program') {

            echo $this->Html->link(
              'Add followup report <i class="fa fa-plus" aria-hidden="true"></i> ',
              ['controller' => 'Sadrs', 'action' => 'followup', $sadr['id']],
              [
                'class' => 'btn btn-warning btn-block tooltipper',
                'title' => 'Add followup report',
                'data-content' => 'Add followup report',
                'confirm' => 'Add followup report?',
                'escapeTitle' => false
              ]
            );
          }
          ?>

          <hr>
          <?php
          if ($sadr['submitted'] > 1) {
            echo $this->Html->link('Edit Report', '#', array(
              'name' => 'continueEditing',
              'class' => 'btn  btn-block mapop disabled',
              'id' => 'SadrContinueReport',
              'title' => 'Submitted Report!',
              'data-content' => 'This report has been submitted to PPB and cannot be edited',
              'div' => false,
            ));
          } else {
            echo $this->Html->link('Edit Report', array('action' => 'edit', $sadr['id']), array(
              'name' => 'continueEditing',
              'class' => 'btn  btn-block mapop',
              'id' => 'SadrContinueReport',
              'title' => 'Edit Report',
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
            echo $this->element('comments/list', ['comments' => $sadr['external_comment']]);
            ?>
          </div>
          <div class="span4 lefty">
            <?php
            echo $this->element('comments/add', [
              'model' => [
                'model_id' => $sadr['id'],
                'foreign_key' => $sadr['id'],
                'model' => 'Sadrs',
                'category' => 'external',
                'url' => 'add',
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
            echo $this->element('comments/index', ['comments' => ((isset($sadr['id']) && !empty($sadr['id'])) ? $sadr['ReviewComment'] : $sadr['ReviewComment'])]);
            ?>
          </div>
          <div class="span4 lefty">
            <?php
            $oid = ((isset($sadr['id']) && !empty($sadr['id'])) ? $sadr['id'] : $sadr['id']);
            echo $this->element('comments/add', [
              'model' => [
                'model_id' => $oid,
                'foreign_key' => $oid,
                'model' => 'Sadrskjshkdjhkjhjkhkj',
                'category' => 'review',
                'url' => 'report_feedback',
                'review' => true
              ]
            ])
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>