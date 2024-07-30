<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medication $medication
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $pqmps
 * @var string[]|\Cake\Collection\CollectionInterface $counties
 * @var string[]|\Cake\Collection\CollectionInterface $designations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $medication->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $medication->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Medications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="medications form content">
            <?= $this->Form->create($medication) ?>
            <fieldset>
                <legend><?= __('Edit Medication') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('pqmp_id', ['options' => $pqmps, 'empty' => true]);
                    echo $this->Form->control('medication_id');
                    echo $this->Form->control('reference_no');
                    echo $this->Form->control('adverse_reaction');
                    echo $this->Form->control('county_id', ['options' => $counties, 'empty' => true]);
                    echo $this->Form->control('designation_id', ['options' => $designations, 'empty' => true]);
                    echo $this->Form->control('date_of_event', ['empty' => true]);
                    echo $this->Form->control('time_of_event');
                    echo $this->Form->control('name_of_institution');
                    echo $this->Form->control('institution_code');
                    echo $this->Form->control('institution_contact');
                    echo $this->Form->control('patient_name');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('pregnancy_status');
                    echo $this->Form->control('patient_phone');
                    echo $this->Form->control('date_of_birth', ['empty' => true]);
                    echo $this->Form->control('age_years');
                    echo $this->Form->control('ward');
                    echo $this->Form->control('clinic');
                    echo $this->Form->control('pharmacy');
                    echo $this->Form->control('accident');
                    echo $this->Form->control('location_other');
                    echo $this->Form->control('description_of_error');
                    echo $this->Form->control('process_occur');
                    echo $this->Form->control('process_occur_specify');
                    echo $this->Form->control('reach_patient');
                    echo $this->Form->control('correct_medication');
                    echo $this->Form->control('direct_result');
                    echo $this->Form->control('outcome');
                    echo $this->Form->control('outcome_error');
                    echo $this->Form->control('outcome_death');
                    echo $this->Form->control('error_cause_inexperience');
                    echo $this->Form->control('error_cause_knowledge');
                    echo $this->Form->control('error_cause_distraction');
                    echo $this->Form->control('error_cause_sound');
                    echo $this->Form->control('error_cause_medication');
                    echo $this->Form->control('error_cause_packaging');
                    echo $this->Form->control('error_cause_workload');
                    echo $this->Form->control('error_cause_peak');
                    echo $this->Form->control('error_cause_stock');
                    echo $this->Form->control('error_cause_procedure');
                    echo $this->Form->control('error_cause_abbreviations');
                    echo $this->Form->control('error_cause_illegible');
                    echo $this->Form->control('error_cause_inaccurate');
                    echo $this->Form->control('error_cause_labelling');
                    echo $this->Form->control('error_cause_computer');
                    echo $this->Form->control('error_cause_other');
                    echo $this->Form->control('error_cause_specify');
                    echo $this->Form->control('recommendations');
                    echo $this->Form->control('reporter_name');
                    echo $this->Form->control('reporter_email');
                    echo $this->Form->control('reporter_phone');
                    echo $this->Form->control('report_type');
                    echo $this->Form->control('submitted');
                    echo $this->Form->control('submitted_date', ['empty' => true]);
                    echo $this->Form->control('copied');
                    echo $this->Form->control('archived');
                    echo $this->Form->control('archived_date', ['empty' => true]);
                    echo $this->Form->control('active');
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('deleted_date', ['empty' => true]);
                    echo $this->Form->control('reporter_date', ['empty' => true]);
                    echo $this->Form->control('person_submitting');
                    echo $this->Form->control('reporter_name_diff');
                    echo $this->Form->control('reporter_designation_diff');
                    echo $this->Form->control('reporter_email_diff');
                    echo $this->Form->control('reporter_phone_diff');
                    echo $this->Form->control('reporter_date_diff', ['empty' => true]);
                    echo $this->Form->control('assigned_to');
                    echo $this->Form->control('assigned_by');
                    echo $this->Form->control('assigned_date', ['empty' => true]);
                    echo $this->Form->control('vigiflow_message');
                    echo $this->Form->control('vigiflow_ref');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
