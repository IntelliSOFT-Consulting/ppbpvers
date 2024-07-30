<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ce2b $ce2b
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $counties
 * @var string[]|\Cake\Collection\CollectionInterface $subCounties
 * @var string[]|\Cake\Collection\CollectionInterface $designations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ce2b->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ce2b->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ce2bs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ce2bs form content">
            <?= $this->Form->create($ce2b) ?>
            <fieldset>
                <legend><?= __('Edit Ce2b') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('ce2b_id');
                    echo $this->Form->control('vigiflow_message');
                    echo $this->Form->control('vigiflow_date');
                    echo $this->Form->control('report_type');
                    echo $this->Form->control('county_id', ['options' => $counties, 'empty' => true]);
                    echo $this->Form->control('sub_county_id', ['options' => $subCounties, 'empty' => true]);
                    echo $this->Form->control('designation_id', ['options' => $designations, 'empty' => true]);
                    echo $this->Form->control('reference_no');
                    echo $this->Form->control('messageid');
                    echo $this->Form->control('assigned_to');
                    echo $this->Form->control('assigned_by');
                    echo $this->Form->control('company_code');
                    echo $this->Form->control('company_name');
                    echo $this->Form->control('comment');
                    echo $this->Form->control('reporter_email');
                    echo $this->Form->control('e2b_content');
                    echo $this->Form->control('e2b_type');
                    echo $this->Form->control('e2b_file');
                    echo $this->Form->control('dir');
                    echo $this->Form->control('size');
                    echo $this->Form->control('type');
                    echo $this->Form->control('assigned_date', ['empty' => true]);
                    echo $this->Form->control('signature');
                    echo $this->Form->control('submitted');
                    echo $this->Form->control('submitted_date', ['empty' => true]);
                    echo $this->Form->control('reporter_name');
                    echo $this->Form->control('reporter_designation');
                    echo $this->Form->control('reporter_phone');
                    echo $this->Form->control('reporter_date', ['empty' => true]);
                    echo $this->Form->control('person_submitting');
                    echo $this->Form->control('reporter_name_diff');
                    echo $this->Form->control('reporter_designation_diff');
                    echo $this->Form->control('reporter_email_diff');
                    echo $this->Form->control('reporter_phone_diff');
                    echo $this->Form->control('reporter_date_diff', ['empty' => true]);
                    echo $this->Form->control('resubmit');
                    echo $this->Form->control('status');
                    echo $this->Form->control('active');
                    echo $this->Form->control('copied');
                    echo $this->Form->control('archived');
                    echo $this->Form->control('archived_date', ['empty' => true]);
                    echo $this->Form->control('action_date');
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('deleted_date', ['empty' => true]);
                    echo $this->Form->control('report_reference');
                    echo $this->Form->control('creation_time');
                    echo $this->Form->control('sender_reference');
                    echo $this->Form->control('receiver_id');
                    echo $this->Form->control('sender_id');
                    echo $this->Form->control('sender_unique_identifier');
                    echo $this->Form->control('worldwide_identifier');
                    echo $this->Form->control('case_narrative');
                    echo $this->Form->control('date_first_received');
                    echo $this->Form->control('date_most_recent_info');
                    echo $this->Form->control('serious');
                    echo $this->Form->control('patient_name');
                    echo $this->Form->control('patient_sex');
                    echo $this->Form->control('patient_dob');
                    echo $this->Form->control('patient_number');
                    echo $this->Form->control('past_medical');
                    echo $this->Form->control('sender_address');
                    echo $this->Form->control('sender_city');
                    echo $this->Form->control('sender_state');
                    echo $this->Form->control('sender_department');
                    echo $this->Form->control('sender_organization');
                    echo $this->Form->control('results_in_detah');
                    echo $this->Form->control('life_threatening');
                    echo $this->Form->control('prolonged_hospitalization');
                    echo $this->Form->control('incapacitating');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
