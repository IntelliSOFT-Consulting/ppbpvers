<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transfusion $transfusion
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
                ['action' => 'delete', $transfusion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $transfusion->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Transfusions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="transfusions form content">
            <?= $this->Form->create($transfusion) ?>
            <fieldset>
                <legend><?= __('Edit Transfusion') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('pqmp_id', ['options' => $pqmps, 'empty' => true]);
                    echo $this->Form->control('transfusion_id');
                    echo $this->Form->control('reference_no');
                    echo $this->Form->control('county_id', ['options' => $counties, 'empty' => true]);
                    echo $this->Form->control('designation_id', ['options' => $designations, 'empty' => true]);
                    echo $this->Form->control('form_type');
                    echo $this->Form->control('patient_name');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('patient_address');
                    echo $this->Form->control('patient_phone');
                    echo $this->Form->control('date_of_birth');
                    echo $this->Form->control('age_years');
                    echo $this->Form->control('diagnosis');
                    echo $this->Form->control('ward');
                    echo $this->Form->control('pre_hb');
                    echo $this->Form->control('transfusion_reason');
                    echo $this->Form->control('current_medications');
                    echo $this->Form->control('obstetric_history');
                    echo $this->Form->control('previous_transfusion');
                    echo $this->Form->control('transfusion_comment');
                    echo $this->Form->control('previous_reactions');
                    echo $this->Form->control('reaction_comment');
                    echo $this->Form->control('reaction_general');
                    echo $this->Form->control('reaction_fever');
                    echo $this->Form->control('reaction_chills');
                    echo $this->Form->control('reaction_flushing');
                    echo $this->Form->control('reaction_vomiting');
                    echo $this->Form->control('reaction_dermatological');
                    echo $this->Form->control('reaction_cardiac');
                    echo $this->Form->control('reaction_chest');
                    echo $this->Form->control('reaction_dyspnoea');
                    echo $this->Form->control('reaction_hypotension');
                    echo $this->Form->control('reaction_tachycardia');
                    echo $this->Form->control('reaction_renal');
                    echo $this->Form->control('reaction_anuria');
                    echo $this->Form->control('reaction_oliguria');
                    echo $this->Form->control('reaction_dark');
                    echo $this->Form->control('reaction_haematological');
                    echo $this->Form->control('reaction_other');
                    echo $this->Form->control('vital_start_bp');
                    echo $this->Form->control('vital_start_t');
                    echo $this->Form->control('vital_start_p');
                    echo $this->Form->control('vital_start_r');
                    echo $this->Form->control('vital_during_bp');
                    echo $this->Form->control('vital_during_t');
                    echo $this->Form->control('vital_during_p');
                    echo $this->Form->control('vital_during_r');
                    echo $this->Form->control('vital_stop_bp');
                    echo $this->Form->control('vital_stop_t');
                    echo $this->Form->control('vital_stop_p');
                    echo $this->Form->control('vital_stop_r');
                    echo $this->Form->control('nurse_name');
                    echo $this->Form->control('lab_hemolysis');
                    echo $this->Form->control('lab_hemolysis_present');
                    echo $this->Form->control('recipient_blood');
                    echo $this->Form->control('hae_wbc');
                    echo $this->Form->control('hae_hb');
                    echo $this->Form->control('hae_rbc');
                    echo $this->Form->control('hae_hct');
                    echo $this->Form->control('hae_mcv');
                    echo $this->Form->control('hae_mch');
                    echo $this->Form->control('hae_mchc');
                    echo $this->Form->control('hae_plt');
                    echo $this->Form->control('film_rbc');
                    echo $this->Form->control('film_wbc');
                    echo $this->Form->control('film_plt');
                    echo $this->Form->control('donor_hemolysis');
                    echo $this->Form->control('donor_age');
                    echo $this->Form->control('culture_donor_pack');
                    echo $this->Form->control('culture_recipient_blood');
                    echo $this->Form->control('compatible_saline_rt');
                    echo $this->Form->control('compatible_saline_ii');
                    echo $this->Form->control('compatible_ahg');
                    echo $this->Form->control('compatible_albumin');
                    echo $this->Form->control('negative_result');
                    echo $this->Form->control('anti_a');
                    echo $this->Form->control('anti_b');
                    echo $this->Form->control('urinalysis');
                    echo $this->Form->control('evaluation');
                    echo $this->Form->control('adverse_reaction');
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
                    echo $this->Form->control('clinic_venue');
                    echo $this->Form->control('specimens_post_transfusion');
                    echo $this->Form->control('specimens_edta_blood');
                    echo $this->Form->control('specimens_void_urine');
                    echo $this->Form->control('specimens_blood_reacted');
                    echo $this->Form->control('specimens_blood_bags');
                    echo $this->Form->control('clinic_code');
                    echo $this->Form->control('donor_number');
                    echo $this->Form->control('national_number');
                    echo $this->Form->control('home_phone');
                    echo $this->Form->control('cell_phone');
                    echo $this->Form->control('email_address');
                    echo $this->Form->control('residence');
                    echo $this->Form->control('nurse_date', ['empty' => true]);
                    echo $this->Form->control('low_volume');
                    echo $this->Form->control('venepuncture');
                    echo $this->Form->control('hematoma');
                    echo $this->Form->control('faint');
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('deleted_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
