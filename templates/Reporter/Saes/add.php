<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sae $sae
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $countries
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Saes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="saes form content">
            <?= $this->Form->create($sae) ?>
            <fieldset>
                <legend><?= __('Add Sae') ?></legend>
                <?php
                    echo $this->Form->control('application_id');
                    echo $this->Form->control('sae_id');
                    echo $this->Form->control('reference_no');
                    echo $this->Form->control('form_type');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('patient_initials');
                    echo $this->Form->control('country_id', ['options' => $countries, 'empty' => true]);
                    echo $this->Form->control('date_of_birth', ['empty' => true]);
                    echo $this->Form->control('age_years');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('causality');
                    echo $this->Form->control('enrollment_date', ['empty' => true]);
                    echo $this->Form->control('administration_date', ['empty' => true]);
                    echo $this->Form->control('latest_date', ['empty' => true]);
                    echo $this->Form->control('reaction_onset', ['empty' => true]);
                    echo $this->Form->control('reaction_end_date', ['empty' => true]);
                    echo $this->Form->control('patient_died');
                    echo $this->Form->control('prolonged_hospitalization');
                    echo $this->Form->control('incapacity');
                    echo $this->Form->control('life_threatening');
                    echo $this->Form->control('reaction_other');
                    echo $this->Form->control('reaction_description');
                    echo $this->Form->control('relevant_history');
                    echo $this->Form->control('manufacturer_name');
                    echo $this->Form->control('mfr_no');
                    echo $this->Form->control('manufacturer_date', ['empty' => true]);
                    echo $this->Form->control('source_study');
                    echo $this->Form->control('source_literature');
                    echo $this->Form->control('source_health_professional');
                    echo $this->Form->control('report_date', ['empty' => true]);
                    echo $this->Form->control('submitted_date', ['empty' => true]);
                    echo $this->Form->control('report_type');
                    echo $this->Form->control('approved');
                    echo $this->Form->control('approved_by');
                    echo $this->Form->control('email_address');
                    echo $this->Form->control('reporter_name');
                    echo $this->Form->control('reporter_phone');
                    echo $this->Form->control('reporter_email');
                    echo $this->Form->control('assigned_to');
                    echo $this->Form->control('assigned_by');
                    echo $this->Form->control('assigned_date', ['empty' => true]);
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('deleted_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
