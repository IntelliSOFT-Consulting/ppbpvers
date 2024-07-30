<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Padr $padr
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $counties
 * @var \Cake\Collection\CollectionInterface|string[] $subCounties
 * @var \Cake\Collection\CollectionInterface|string[] $designations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Padrs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="padrs form content">
            <?= $this->Form->create($padr) ?>
            <fieldset>
                <legend><?= __('Add Padr') ?></legend>
                <?php
                    echo $this->Form->control('padr_id');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('county_id', ['options' => $counties, 'empty' => true]);
                    echo $this->Form->control('sub_county_id', ['options' => $subCounties, 'empty' => true]);
                    echo $this->Form->control('designation_id', ['options' => $designations, 'empty' => true]);
                    echo $this->Form->control('reference_no');
                    echo $this->Form->control('token');
                    echo $this->Form->control('relation');
                    echo $this->Form->control('vigiflow_ref');
                    echo $this->Form->control('vigiflow_message');
                    echo $this->Form->control('vigiflow_date');
                    echo $this->Form->control('report_title');
                    echo $this->Form->control('report_type');
                    echo $this->Form->control('report_sadr');
                    echo $this->Form->control('sadr_vomiting');
                    echo $this->Form->control('sadr_dizziness');
                    echo $this->Form->control('sadr_headache');
                    echo $this->Form->control('sadr_joints');
                    echo $this->Form->control('sadr_rash');
                    echo $this->Form->control('sadr_mouth');
                    echo $this->Form->control('sadr_stomach');
                    echo $this->Form->control('sadr_urination');
                    echo $this->Form->control('sadr_eyes');
                    echo $this->Form->control('sadr_died');
                    echo $this->Form->control('pqmp_label');
                    echo $this->Form->control('patient_name');
                    echo $this->Form->control('pqmp_material');
                    echo $this->Form->control('date_of_birth');
                    echo $this->Form->control('age_group');
                    echo $this->Form->control('patient_address');
                    echo $this->Form->control('pqmp_color');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('pqmp_smell');
                    echo $this->Form->control('pqmp_working');
                    echo $this->Form->control('pqmp_bottle');
                    echo $this->Form->control('pregnancy_status');
                    echo $this->Form->control('weight');
                    echo $this->Form->control('height');
                    echo $this->Form->control('diagnosis');
                    echo $this->Form->control('medical_history');
                    echo $this->Form->control('date_of_onset_of_reaction');
                    echo $this->Form->control('date_of_end_of_reaction');
                    echo $this->Form->control('description_of_reaction');
                    echo $this->Form->control('reaction_resolve');
                    echo $this->Form->control('reaction_reappear');
                    echo $this->Form->control('lab_investigation');
                    echo $this->Form->control('severity');
                    echo $this->Form->control('serious');
                    echo $this->Form->control('serious_reason');
                    echo $this->Form->control('action_taken');
                    echo $this->Form->control('outcome');
                    echo $this->Form->control('causality');
                    echo $this->Form->control('any_other_comment');
                    echo $this->Form->control('reporter_name');
                    echo $this->Form->control('reporter_email');
                    echo $this->Form->control('reporter_phone');
                    echo $this->Form->control('submitted');
                    echo $this->Form->control('submitted_date', ['empty' => true]);
                    echo $this->Form->control('emails');
                    echo $this->Form->control('active');
                    echo $this->Form->control('device');
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('deleted_date', ['empty' => true]);
                    echo $this->Form->control('notified');
                    echo $this->Form->control('reporter_date', ['empty' => true]);
                    echo $this->Form->control('reporter_name_diff');
                    echo $this->Form->control('reporter_designation_diff');
                    echo $this->Form->control('reporter_email_diff');
                    echo $this->Form->control('reporter_phone_diff');
                    echo $this->Form->control('reporter_date_diff', ['empty' => true]);
                    echo $this->Form->control('assigned_to');
                    echo $this->Form->control('assigned_by');
                    echo $this->Form->control('assigned_date', ['empty' => true]);
                    echo $this->Form->control('reaction_on');
                    echo $this->Form->control('consent');
                    echo $this->Form->control('copied');
                    echo $this->Form->control('archived');
                    echo $this->Form->control('archived_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
