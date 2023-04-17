<?php
  $this->assign('Adverse Event Following Immunization', 'active');
 ?>

      <!-- Adverse Event Following Immunization
    ================================================== -->
<section id="aefisview">
  <ul id="reviewer_tab" class="nav nav-tabs">
        <li class="active"><a href="#formview" data-toggle="tab"><?php echo $aefi['Aefi']['reference_no']; ?></a></li>
        <li><a href="#external_report_comments" data-toggle="tab">Feedback (<?php echo count($aefi['ExternalComment']); ?>)</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="formview">
        <div class="row-fluid">   
          <div class="span10">
            <?php echo $this->element('aefi/aefi_view');?>
          </div>
          <div class="span2">
            <?php
                echo $this->Html->link('Download PDF', array('controller'=>'aefis','action'=>'view', 'ext'=> 'pdf', $aefi['Aefi']['id']),
                            array('class' => 'btn btn-primary btn-block mapop', 'title'=>'Download PDF',
                            'data-content' => 'Download the pdf version of the report',));
            ?>
            <hr>
            <?php
              if($this->Session->read('Auth.User.user_type') != 'Public Health Program')  echo $this->Form->postLink('<span class="btn btn-warning btn-block tooltipper" data-toggle="tooltip" title="Add follow up report">  <b>Follow-up</b> <i class="fa fa-plus" aria-hidden="true"></i> </span>', array('controller' => 'aefis' , 'action' => 'followup', $aefi['Aefi']['id']), array('escape' => false), __('Add a followup report?'));
            ?>

            <hr>
            <?php
                if($aefi['Aefi']['submitted'] > 1) {
                  echo $this->Html->link('Edit Report', '#', array(
                    'name' => 'continueEditing',
                    'class' => 'btn  btn-block mapop disabled',
                    'id' => 'AefiContinueReport', 'title'=>'Submitted Report!',
                    'data-content' => 'This report has been submitted to PPB and cannot be edited',
                    'div' => false,
                  ));
                } else {
                  echo $this->Html->link('Edit Report', array('action' => 'edit', $aefi['Aefi']['id']), array(
                    'name' => 'continueEditing',
                    'class' => 'btn  btn-block mapop',
                    'id' => 'AefiContinueReport', 'title'=>'Edit Report',
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
                    echo $this->element('comments/list', ['comments' => $aefi['ExternalComment']]);
                  ?> 
                </div>
                <div class="span4 lefty">
                <?php  
                    echo $this->element('comments/add', [
                                 'model' => ['model_id' => $aefi['Aefi']['id'], 'foreign_key' => $aefi['Aefi']['id'],   
                                             'model' => 'Aefi', 'category' => 'external', 'url' => 'report_feedback']]) 
                ?>
                </div>
            </div>
        </div>
      </div>
    </div>

  
</section>
