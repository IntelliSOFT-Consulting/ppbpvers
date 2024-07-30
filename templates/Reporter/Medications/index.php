<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Medication> $medications
 */
?>
<div class="medications index content">
    <?= $this->Html->link(__('New Medication'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Medications') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('pqmp_id') ?></th>
                    <th><?= $this->Paginator->sort('medication_id') ?></th>
                    <th><?= $this->Paginator->sort('reference_no') ?></th>
                    <th><?= $this->Paginator->sort('adverse_reaction') ?></th>
                    <th><?= $this->Paginator->sort('county_id') ?></th>
                    <th><?= $this->Paginator->sort('designation_id') ?></th>
                    <th><?= $this->Paginator->sort('date_of_event') ?></th>
                    <th><?= $this->Paginator->sort('time_of_event') ?></th>
                    <th><?= $this->Paginator->sort('name_of_institution') ?></th>
                    <th><?= $this->Paginator->sort('institution_code') ?></th>
                    <th><?= $this->Paginator->sort('institution_contact') ?></th>
                    <th><?= $this->Paginator->sort('patient_name') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('pregnancy_status') ?></th>
                    <th><?= $this->Paginator->sort('patient_phone') ?></th>
                    <th><?= $this->Paginator->sort('date_of_birth') ?></th>
                    <th><?= $this->Paginator->sort('age_years') ?></th>
                    <th><?= $this->Paginator->sort('ward') ?></th>
                    <th><?= $this->Paginator->sort('clinic') ?></th>
                    <th><?= $this->Paginator->sort('pharmacy') ?></th>
                    <th><?= $this->Paginator->sort('accident') ?></th>
                    <th><?= $this->Paginator->sort('location_other') ?></th>
                    <th><?= $this->Paginator->sort('process_occur') ?></th>
                    <th><?= $this->Paginator->sort('process_occur_specify') ?></th>
                    <th><?= $this->Paginator->sort('reach_patient') ?></th>
                    <th><?= $this->Paginator->sort('correct_medication') ?></th>
                    <th><?= $this->Paginator->sort('outcome') ?></th>
                    <th><?= $this->Paginator->sort('outcome_error') ?></th>
                    <th><?= $this->Paginator->sort('outcome_death') ?></th>
                    <th><?= $this->Paginator->sort('error_cause_inexperience') ?></th>
                    <th><?= $this->Paginator->sort('error_cause_knowledge') ?></th>
                    <th><?= $this->Paginator->sort('error_cause_distraction') ?></th>
                    <th><?= $this->Paginator->sort('error_cause_sound') ?></th>
                    <th><?= $this->Paginator->sort('error_cause_medication') ?></th>
                    <th><?= $this->Paginator->sort('error_cause_packaging') ?></th>
                    <th><?= $this->Paginator->sort('error_cause_workload') ?></th>
                    <th><?= $this->Paginator->sort('error_cause_peak') ?></th>
                    <th><?= $this->Paginator->sort('error_cause_stock') ?></th>
                    <th><?= $this->Paginator->sort('error_cause_procedure') ?></th>
                    <th><?= $this->Paginator->sort('error_cause_abbreviations') ?></th>
                    <th><?= $this->Paginator->sort('error_cause_illegible') ?></th>
                    <th><?= $this->Paginator->sort('error_cause_inaccurate') ?></th>
                    <th><?= $this->Paginator->sort('error_cause_labelling') ?></th>
                    <th><?= $this->Paginator->sort('error_cause_computer') ?></th>
                    <th><?= $this->Paginator->sort('error_cause_other') ?></th>
                    <th><?= $this->Paginator->sort('reporter_name') ?></th>
                    <th><?= $this->Paginator->sort('reporter_email') ?></th>
                    <th><?= $this->Paginator->sort('reporter_phone') ?></th>
                    <th><?= $this->Paginator->sort('report_type') ?></th>
                    <th><?= $this->Paginator->sort('submitted') ?></th>
                    <th><?= $this->Paginator->sort('submitted_date') ?></th>
                    <th><?= $this->Paginator->sort('copied') ?></th>
                    <th><?= $this->Paginator->sort('archived') ?></th>
                    <th><?= $this->Paginator->sort('archived_date') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('reporter_date') ?></th>
                    <th><?= $this->Paginator->sort('person_submitting') ?></th>
                    <th><?= $this->Paginator->sort('reporter_name_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_designation_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_email_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_phone_diff') ?></th>
                    <th><?= $this->Paginator->sort('reporter_date_diff') ?></th>
                    <th><?= $this->Paginator->sort('assigned_to') ?></th>
                    <th><?= $this->Paginator->sort('assigned_by') ?></th>
                    <th><?= $this->Paginator->sort('assigned_date') ?></th>
                    <th><?= $this->Paginator->sort('vigiflow_ref') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($medications as $medication): ?>
                <tr>
                    <td><?= $this->Number->format($medication->id) ?></td>
                    <td><?= $medication->has('user') ? $this->Html->link($medication->user->name, ['controller' => 'Users', 'action' => 'view', $medication->user->id]) : '' ?></td>
                    <td><?= $medication->has('pqmp') ? $this->Html->link($medication->pqmp->id, ['controller' => 'Pqmps', 'action' => 'view', $medication->pqmp->id]) : '' ?></td>
                    <td><?= $medication->medication_id === null ? '' : $this->Number->format($medication->medication_id) ?></td>
                    <td><?= h($medication->reference_no) ?></td>
                    <td><?= h($medication->adverse_reaction) ?></td>
                    <td><?= $medication->has('county') ? $this->Html->link($medication->county->id, ['controller' => 'Counties', 'action' => 'view', $medication->county->id]) : '' ?></td>
                    <td><?= $medication->has('designation') ? $this->Html->link($medication->designation->name, ['controller' => 'Designations', 'action' => 'view', $medication->designation->id]) : '' ?></td>
                    <td><?= h($medication->date_of_event) ?></td>
                    <td><?= h($medication->time_of_event) ?></td>
                    <td><?= h($medication->name_of_institution) ?></td>
                    <td><?= h($medication->institution_code) ?></td>
                    <td><?= h($medication->institution_contact) ?></td>
                    <td><?= h($medication->patient_name) ?></td>
                    <td><?= h($medication->gender) ?></td>
                    <td><?= h($medication->pregnancy_status) ?></td>
                    <td><?= h($medication->patient_phone) ?></td>
                    <td><?= h($medication->date_of_birth) ?></td>
                    <td><?= h($medication->age_years) ?></td>
                    <td><?= h($medication->ward) ?></td>
                    <td><?= h($medication->clinic) ?></td>
                    <td><?= h($medication->pharmacy) ?></td>
                    <td><?= h($medication->accident) ?></td>
                    <td><?= h($medication->location_other) ?></td>
                    <td><?= h($medication->process_occur) ?></td>
                    <td><?= h($medication->process_occur_specify) ?></td>
                    <td><?= h($medication->reach_patient) ?></td>
                    <td><?= h($medication->correct_medication) ?></td>
                    <td><?= h($medication->outcome) ?></td>
                    <td><?= h($medication->outcome_error) ?></td>
                    <td><?= h($medication->outcome_death) ?></td>
                    <td><?= h($medication->error_cause_inexperience) ?></td>
                    <td><?= h($medication->error_cause_knowledge) ?></td>
                    <td><?= h($medication->error_cause_distraction) ?></td>
                    <td><?= h($medication->error_cause_sound) ?></td>
                    <td><?= h($medication->error_cause_medication) ?></td>
                    <td><?= h($medication->error_cause_packaging) ?></td>
                    <td><?= h($medication->error_cause_workload) ?></td>
                    <td><?= h($medication->error_cause_peak) ?></td>
                    <td><?= h($medication->error_cause_stock) ?></td>
                    <td><?= h($medication->error_cause_procedure) ?></td>
                    <td><?= h($medication->error_cause_abbreviations) ?></td>
                    <td><?= h($medication->error_cause_illegible) ?></td>
                    <td><?= h($medication->error_cause_inaccurate) ?></td>
                    <td><?= h($medication->error_cause_labelling) ?></td>
                    <td><?= h($medication->error_cause_computer) ?></td>
                    <td><?= h($medication->error_cause_other) ?></td>
                    <td><?= h($medication->reporter_name) ?></td>
                    <td><?= h($medication->reporter_email) ?></td>
                    <td><?= h($medication->reporter_phone) ?></td>
                    <td><?= h($medication->report_type) ?></td>
                    <td><?= $medication->submitted === null ? '' : $this->Number->format($medication->submitted) ?></td>
                    <td><?= h($medication->submitted_date) ?></td>
                    <td><?= $medication->copied === null ? '' : $this->Number->format($medication->copied) ?></td>
                    <td><?= $medication->archived === null ? '' : $this->Number->format($medication->archived) ?></td>
                    <td><?= h($medication->archived_date) ?></td>
                    <td><?= h($medication->active) ?></td>
                    <td><?= $medication->deleted === null ? '' : $this->Number->format($medication->deleted) ?></td>
                    <td><?= h($medication->deleted_date) ?></td>
                    <td><?= h($medication->created) ?></td>
                    <td><?= h($medication->modified) ?></td>
                    <td><?= h($medication->reporter_date) ?></td>
                    <td><?= h($medication->person_submitting) ?></td>
                    <td><?= h($medication->reporter_name_diff) ?></td>
                    <td><?= $medication->reporter_designation_diff === null ? '' : $this->Number->format($medication->reporter_designation_diff) ?></td>
                    <td><?= h($medication->reporter_email_diff) ?></td>
                    <td><?= h($medication->reporter_phone_diff) ?></td>
                    <td><?= h($medication->reporter_date_diff) ?></td>
                    <td><?= $medication->assigned_to === null ? '' : $this->Number->format($medication->assigned_to) ?></td>
                    <td><?= $medication->assigned_by === null ? '' : $this->Number->format($medication->assigned_by) ?></td>
                    <td><?= h($medication->assigned_date) ?></td>
                    <td><?= h($medication->vigiflow_ref) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $medication->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medication->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medication->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
