<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Device $device
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
                ['action' => 'delete', $device->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $device->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Devices'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="devices form content">
            <?= $this->Form->create($device) ?>
            <fieldset>
                <legend><?= __('Edit Device') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('pqmp_id', ['options' => $pqmps, 'empty' => true]);
                    echo $this->Form->control('reference_no');
                    echo $this->Form->control('county_id', ['options' => $counties, 'empty' => true]);
                    echo $this->Form->control('designation_id', ['options' => $designations, 'empty' => true]);
                    echo $this->Form->control('device_id');
                    echo $this->Form->control('report_type');
                    echo $this->Form->control('report_title');
                    echo $this->Form->control('name_of_institution');
                    echo $this->Form->control('institution_code');
                    echo $this->Form->control('institution_address');
                    echo $this->Form->control('institution_contact');
                    echo $this->Form->control('patient_name');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('patient_address');
                    echo $this->Form->control('patient_phone');
                    echo $this->Form->control('patient_weight');
                    echo $this->Form->control('patient_height');
                    echo $this->Form->control('pregnancy_status');
                    echo $this->Form->control('trimester');
                    echo $this->Form->control('ip_no');
                    echo $this->Form->control('date_of_birth');
                    echo $this->Form->control('age_years');
                    echo $this->Form->control('allergy');
                    echo $this->Form->control('allergy_specify');
                    echo $this->Form->control('problem_noted');
                    echo $this->Form->control('brand_name');
                    echo $this->Form->control('serial_no');
                    echo $this->Form->control('common_name');
                    echo $this->Form->control('device_model');
                    echo $this->Form->control('catalogue');
                    echo $this->Form->control('manufacturer_name');
                    echo $this->Form->control('manufacturer_address');
                    echo $this->Form->control('manufacture_date');
                    echo $this->Form->control('expiry_date', ['empty' => true]);
                    echo $this->Form->control('operator');
                    echo $this->Form->control('operator_specify');
                    echo $this->Form->control('device_usage');
                    echo $this->Form->control('device_duration_type');
                    echo $this->Form->control('device_duration');
                    echo $this->Form->control('device_availability');
                    echo $this->Form->control('device_unavailability');
                    echo $this->Form->control('implant_date', ['empty' => true]);
                    echo $this->Form->control('explant_date', ['empty' => true]);
                    echo $this->Form->control('implant_duration_type');
                    echo $this->Form->control('implant_duration');
                    echo $this->Form->control('specimen_type');
                    echo $this->Form->control('patients_involved');
                    echo $this->Form->control('tests_done');
                    echo $this->Form->control('false_positives');
                    echo $this->Form->control('false_negatives');
                    echo $this->Form->control('true_positives');
                    echo $this->Form->control('true_negatives');
                    echo $this->Form->control('date_onset_incident', ['empty' => true]);
                    echo $this->Form->control('serious');
                    echo $this->Form->control('serious_yes');
                    echo $this->Form->control('death_date', ['empty' => true]);
                    echo $this->Form->control('description_of_reaction');
                    echo $this->Form->control('remedial_action');
                    echo $this->Form->control('outcome');
                    echo $this->Form->control('reporter_name');
                    echo $this->Form->control('reporter_email');
                    echo $this->Form->control('reporter_phone');
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
                    echo $this->Form->control('submitted');
                    echo $this->Form->control('submitted_date', ['empty' => true]);
                    echo $this->Form->control('copied');
                    echo $this->Form->control('archived');
                    echo $this->Form->control('archived_date', ['empty' => true]);
                    echo $this->Form->control('active');
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('deleted_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
