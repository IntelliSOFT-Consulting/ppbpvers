<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aggregate $aggregate
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
                ['action' => 'delete', $aggregate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aggregate->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Aggregates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aggregates form content">
            <?= $this->Form->create($aggregate) ?>
            <fieldset>
                <legend><?= __('Edit Aggregate') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('aggregate_id');
                    echo $this->Form->control('county_id', ['options' => $counties, 'empty' => true]);
                    echo $this->Form->control('summary_available');
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
                    echo $this->Form->control('brand_name');
                    echo $this->Form->control('inn_name');
                    echo $this->Form->control('mah');
                    echo $this->Form->control('local_technical');
                    echo $this->Form->control('therapeutic_group');
                    echo $this->Form->control('authorised_indications');
                    echo $this->Form->control('form_strength');
                    echo $this->Form->control('interval_code');
                    echo $this->Form->control('submission_frequency');
                    echo $this->Form->control('reminder_date', ['empty' => true]);
                    echo $this->Form->control('introduction');
                    echo $this->Form->control('worldwide_marketing');
                    echo $this->Form->control('action_taken');
                    echo $this->Form->control('reference_changes');
                    echo $this->Form->control('estimated_exposure');
                    echo $this->Form->control('clinical_findings');
                    echo $this->Form->control('efficacy');
                    echo $this->Form->control('late_breaking');
                    echo $this->Form->control('safety_concerns');
                    echo $this->Form->control('risks_evaluation');
                    echo $this->Form->control('risks_characterisation');
                    echo $this->Form->control('benefit_evaluation');
                    echo $this->Form->control('risk_balance');
                    echo $this->Form->control('recommendation');
                    echo $this->Form->control('conclusion');
                    echo $this->Form->control('report_type');
                    echo $this->Form->control('manager_initiated');
                    echo $this->Form->control('manager_submitted');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
