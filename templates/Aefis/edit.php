<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aefi $aefi
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $pqmps
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
                ['action' => 'delete', $aefi->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aefi->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Aefis'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aefis form content">
            <?= $this->Form->create($aefi) ?>
            <fieldset>
                <legend><?= __('Edit Aefi') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('pqmp_id', ['options' => $pqmps, 'empty' => true]);
                    echo $this->Form->control('reference_no');
                    echo $this->Form->control('aefi_id');
                    echo $this->Form->control('county_id', ['options' => $counties, 'empty' => true]);
                    echo $this->Form->control('sub_county_id', ['options' => $subCounties, 'empty' => true]);
                    echo $this->Form->control('vigiflow_ref');
                    echo $this->Form->control('vigiflow_date', ['empty' => true]);
                    echo $this->Form->control('vigiflow_message');
                    echo $this->Form->control('webradr_ref');
                    echo $this->Form->control('webradr_date', ['empty' => true]);
                    echo $this->Form->control('webradr_message');
                    echo $this->Form->control('designation_id', ['options' => $designations, 'empty' => true]);
                    echo $this->Form->control('report_type');
                    echo $this->Form->control('name_of_institution');
                    echo $this->Form->control('institution_code');
                    echo $this->Form->control('patient_name');
                    echo $this->Form->control('guardian_name');
                    echo $this->Form->control('patient_address');
                    echo $this->Form->control('patient_phone');
                    echo $this->Form->control('patient_village');
                    echo $this->Form->control('ip_no');
                    echo $this->Form->control('date_of_birth');
                    echo $this->Form->control('age_months');
                    echo $this->Form->control('age_group');
                    echo $this->Form->control('patient_ward');
                    echo $this->Form->control('patient_county');
                    echo $this->Form->control('patient_sub_county');
                    echo $this->Form->control('vaccination_center');
                    echo $this->Form->control('vaccination_county');
                    echo $this->Form->control('vaccination_type');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('pregnancy_status');
                    echo $this->Form->control('bcg');
                    echo $this->Form->control('convulsion');
                    echo $this->Form->control('urticaria');
                    echo $this->Form->control('high_fever');
                    echo $this->Form->control('abscess');
                    echo $this->Form->control('local_reaction');
                    echo $this->Form->control('anaphylaxis');
                    echo $this->Form->control('meningitis');
                    echo $this->Form->control('paralysis');
                    echo $this->Form->control('toxic_shock');
                    echo $this->Form->control('complaint_other');
                    echo $this->Form->control('complaint_other_specify');
                    echo $this->Form->control('description_of_reaction');
                    echo $this->Form->control('date_aefi_started', ['empty' => true]);
                    echo $this->Form->control('time_aefi_started');
                    echo $this->Form->control('aefi_symptoms');
                    echo $this->Form->control('serious');
                    echo $this->Form->control('serious_yes');
                    echo $this->Form->control('serious_other');
                    echo $this->Form->control('medical_history');
                    echo $this->Form->control('treatment_given');
                    echo $this->Form->control('specimen_collected');
                    echo $this->Form->control('outcome');
                    echo $this->Form->control('reporter_name');
                    echo $this->Form->control('reporter_email');
                    echo $this->Form->control('reporter_phone');
                    echo $this->Form->control('reporter_date', ['empty' => true]);
                    echo $this->Form->control('submitted');
                    echo $this->Form->control('submitted_date', ['empty' => true]);
                    echo $this->Form->control('active');
                    echo $this->Form->control('device');
                    echo $this->Form->control('copied');
                    echo $this->Form->control('archived');
                    echo $this->Form->control('archived_date', ['empty' => true]);
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('deleted_date', ['empty' => true]);
                    echo $this->Form->control('person_submitting');
                    echo $this->Form->control('reporter_name_diff');
                    echo $this->Form->control('reporter_designation_diff');
                    echo $this->Form->control('reporter_email_diff');
                    echo $this->Form->control('reporter_phone_diff');
                    echo $this->Form->control('reporter_date_diff', ['empty' => true]);
                    echo $this->Form->control('assigned_to');
                    echo $this->Form->control('assigned_by');
                    echo $this->Form->control('assigned_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
