<?php
 
    $this->assign('SADR', 'active');
 
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sadr $sadr
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $pqmps
 * @var string[]|\Cake\Collection\CollectionInterface $medications
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
                ['action' => 'delete', $sadr->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sadr->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sadrs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sadrs form content">
            <?= $this->Form->create($sadr) ?>
            <fieldset>
                <legend><?= __('Edit Sadr') ?></legend>
                <?php
                    echo $this->Form->control('sadr_id');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('pqmp_id', ['options' => $pqmps, 'empty' => true]);
                    echo $this->Form->control('medication_id', ['options' => $medications, 'empty' => true]);
                    echo $this->Form->control('county_id', ['options' => $counties, 'empty' => true]);
                    echo $this->Form->control('sub_county_id', ['options' => $subCounties, 'empty' => true]);
                    echo $this->Form->control('designation_id', ['options' => $designations, 'empty' => true]);
                    echo $this->Form->control('reference_no');
                    echo $this->Form->control('vigiflow_id');
                    echo $this->Form->control('report_title');
                    echo $this->Form->control('report_type');
                    echo $this->Form->control('report_sadr');
                    echo $this->Form->control('report_therapeutic');
                    echo $this->Form->control('report_misuse');
                    echo $this->Form->control('report_off_label');
                    echo $this->Form->control('product_category');
                    echo $this->Form->control('medicinal_product');
                    echo $this->Form->control('blood_products');
                    echo $this->Form->control('herbal_product');
                    echo $this->Form->control('cosmeceuticals');
                    echo $this->Form->control('product_other');
                    echo $this->Form->control('product_specify');
                    echo $this->Form->control('name_of_institution');
                    echo $this->Form->control('institution_code');
                    echo $this->Form->control('address');
                    echo $this->Form->control('contact');
                    echo $this->Form->control('patient_name');
                    echo $this->Form->control('ip_no');
                    echo $this->Form->control('date_of_birth');
                    echo $this->Form->control('age_group');
                    echo $this->Form->control('patient_address');
                    echo $this->Form->control('ward');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('known_allergy');
                    echo $this->Form->control('known_allergy_specify');
                    echo $this->Form->control('pregnant');
                    echo $this->Form->control('pregnancy_status');
                    echo $this->Form->control('weight');
                    echo $this->Form->control('height');
                    echo $this->Form->control('diagnosis');
                    echo $this->Form->control('reaction');
                    echo $this->Form->control('medical_history');
                    echo $this->Form->control('date_of_onset_of_reaction');
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
                    echo $this->Form->control('emails');
                    echo $this->Form->control('active');
                    echo $this->Form->control('device');
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('archived');
                    echo $this->Form->control('archived_date', ['empty' => true]);
                    echo $this->Form->control('deleted_date', ['empty' => true]);
                    echo $this->Form->control('notified');
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
                    echo $this->Form->control('vigiflow_date', ['empty' => true]);
                    echo $this->Form->control('webradr_ref');
                    echo $this->Form->control('webradr_date', ['empty' => true]);
                    echo $this->Form->control('submitted_date', ['empty' => true]);
                    echo $this->Form->control('webradr_message');
                    echo $this->Form->control('copied');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
