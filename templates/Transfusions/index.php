<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Transfusion> $transfusions
 */
?>
<div class="transfusions index content">
    <?= $this->Html->link(__('New Transfusion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Transfusions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('pqmp_id') ?></th>
                    <th><?= $this->Paginator->sort('transfusion_id') ?></th>
                    <th><?= $this->Paginator->sort('reference_no') ?></th>
                    <th><?= $this->Paginator->sort('county_id') ?></th>
                    <th><?= $this->Paginator->sort('designation_id') ?></th>
                    <th><?= $this->Paginator->sort('form_type') ?></th>
                    <th><?= $this->Paginator->sort('patient_name') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('patient_address') ?></th>
                    <th><?= $this->Paginator->sort('patient_phone') ?></th>
                    <th><?= $this->Paginator->sort('date_of_birth') ?></th>
                    <th><?= $this->Paginator->sort('age_years') ?></th>
                    <th><?= $this->Paginator->sort('diagnosis') ?></th>
                    <th><?= $this->Paginator->sort('ward') ?></th>
                    <th><?= $this->Paginator->sort('pre_hb') ?></th>
                    <th><?= $this->Paginator->sort('transfusion_reason') ?></th>
                    <th><?= $this->Paginator->sort('obstetric_history') ?></th>
                    <th><?= $this->Paginator->sort('previous_transfusion') ?></th>
                    <th><?= $this->Paginator->sort('previous_reactions') ?></th>
                    <th><?= $this->Paginator->sort('reaction_general') ?></th>
                    <th><?= $this->Paginator->sort('reaction_fever') ?></th>
                    <th><?= $this->Paginator->sort('reaction_chills') ?></th>
                    <th><?= $this->Paginator->sort('reaction_flushing') ?></th>
                    <th><?= $this->Paginator->sort('reaction_vomiting') ?></th>
                    <th><?= $this->Paginator->sort('reaction_dermatological') ?></th>
                    <th><?= $this->Paginator->sort('reaction_cardiac') ?></th>
                    <th><?= $this->Paginator->sort('reaction_chest') ?></th>
                    <th><?= $this->Paginator->sort('reaction_dyspnoea') ?></th>
                    <th><?= $this->Paginator->sort('reaction_hypotension') ?></th>
                    <th><?= $this->Paginator->sort('reaction_tachycardia') ?></th>
                    <th><?= $this->Paginator->sort('reaction_renal') ?></th>
                    <th><?= $this->Paginator->sort('reaction_anuria') ?></th>
                    <th><?= $this->Paginator->sort('reaction_oliguria') ?></th>
                    <th><?= $this->Paginator->sort('reaction_dark') ?></th>
                    <th><?= $this->Paginator->sort('reaction_haematological') ?></th>
                    <th><?= $this->Paginator->sort('vital_start_bp') ?></th>
                    <th><?= $this->Paginator->sort('vital_start_t') ?></th>
                    <th><?= $this->Paginator->sort('vital_start_p') ?></th>
                    <th><?= $this->Paginator->sort('vital_start_r') ?></th>
                    <th><?= $this->Paginator->sort('vital_during_bp') ?></th>
                    <th><?= $this->Paginator->sort('vital_during_t') ?></th>
                    <th><?= $this->Paginator->sort('vital_during_p') ?></th>
                    <th><?= $this->Paginator->sort('vital_during_r') ?></th>
                    <th><?= $this->Paginator->sort('vital_stop_bp') ?></th>
                    <th><?= $this->Paginator->sort('vital_stop_t') ?></th>
                    <th><?= $this->Paginator->sort('vital_stop_p') ?></th>
                    <th><?= $this->Paginator->sort('vital_stop_r') ?></th>
                    <th><?= $this->Paginator->sort('nurse_name') ?></th>
                    <th><?= $this->Paginator->sort('lab_hemolysis') ?></th>
                    <th><?= $this->Paginator->sort('lab_hemolysis_present') ?></th>
                    <th><?= $this->Paginator->sort('recipient_blood') ?></th>
                    <th><?= $this->Paginator->sort('hae_wbc') ?></th>
                    <th><?= $this->Paginator->sort('hae_hb') ?></th>
                    <th><?= $this->Paginator->sort('hae_rbc') ?></th>
                    <th><?= $this->Paginator->sort('hae_hct') ?></th>
                    <th><?= $this->Paginator->sort('hae_mcv') ?></th>
                    <th><?= $this->Paginator->sort('hae_mch') ?></th>
                    <th><?= $this->Paginator->sort('hae_mchc') ?></th>
                    <th><?= $this->Paginator->sort('hae_plt') ?></th>
                    <th><?= $this->Paginator->sort('film_rbc') ?></th>
                    <th><?= $this->Paginator->sort('film_wbc') ?></th>
                    <th><?= $this->Paginator->sort('film_plt') ?></th>
                    <th><?= $this->Paginator->sort('donor_hemolysis') ?></th>
                    <th><?= $this->Paginator->sort('donor_age') ?></th>
                    <th><?= $this->Paginator->sort('compatible_saline_rt') ?></th>
                    <th><?= $this->Paginator->sort('compatible_saline_ii') ?></th>
                    <th><?= $this->Paginator->sort('compatible_ahg') ?></th>
                    <th><?= $this->Paginator->sort('compatible_albumin') ?></th>
                    <th><?= $this->Paginator->sort('anti_a') ?></th>
                    <th><?= $this->Paginator->sort('anti_b') ?></th>
                    <th><?= $this->Paginator->sort('urinalysis') ?></th>
                    <th><?= $this->Paginator->sort('evaluation') ?></th>
                    <th><?= $this->Paginator->sort('adverse_reaction') ?></th>
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
                    <th><?= $this->Paginator->sort('clinic_venue') ?></th>
                    <th><?= $this->Paginator->sort('specimens_post_transfusion') ?></th>
                    <th><?= $this->Paginator->sort('specimens_edta_blood') ?></th>
                    <th><?= $this->Paginator->sort('specimens_void_urine') ?></th>
                    <th><?= $this->Paginator->sort('specimens_blood_reacted') ?></th>
                    <th><?= $this->Paginator->sort('specimens_blood_bags') ?></th>
                    <th><?= $this->Paginator->sort('clinic_code') ?></th>
                    <th><?= $this->Paginator->sort('donor_number') ?></th>
                    <th><?= $this->Paginator->sort('national_number') ?></th>
                    <th><?= $this->Paginator->sort('home_phone') ?></th>
                    <th><?= $this->Paginator->sort('cell_phone') ?></th>
                    <th><?= $this->Paginator->sort('email_address') ?></th>
                    <th><?= $this->Paginator->sort('residence') ?></th>
                    <th><?= $this->Paginator->sort('nurse_date') ?></th>
                    <th><?= $this->Paginator->sort('low_volume') ?></th>
                    <th><?= $this->Paginator->sort('venepuncture') ?></th>
                    <th><?= $this->Paginator->sort('hematoma') ?></th>
                    <th><?= $this->Paginator->sort('faint') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transfusions as $transfusion): ?>
                <tr>
                    <td><?= $this->Number->format($transfusion->id) ?></td>
                    <td><?= $transfusion->has('user') ? $this->Html->link($transfusion->user->name, ['controller' => 'Users', 'action' => 'view', $transfusion->user->id]) : '' ?></td>
                    <td><?= $transfusion->has('pqmp') ? $this->Html->link($transfusion->pqmp->id, ['controller' => 'Pqmps', 'action' => 'view', $transfusion->pqmp->id]) : '' ?></td>
                    <td><?= $transfusion->transfusion_id === null ? '' : $this->Number->format($transfusion->transfusion_id) ?></td>
                    <td><?= h($transfusion->reference_no) ?></td>
                    <td><?= $transfusion->has('county') ? $this->Html->link($transfusion->county->id, ['controller' => 'Counties', 'action' => 'view', $transfusion->county->id]) : '' ?></td>
                    <td><?= $transfusion->has('designation') ? $this->Html->link($transfusion->designation->name, ['controller' => 'Designations', 'action' => 'view', $transfusion->designation->id]) : '' ?></td>
                    <td><?= h($transfusion->form_type) ?></td>
                    <td><?= h($transfusion->patient_name) ?></td>
                    <td><?= h($transfusion->gender) ?></td>
                    <td><?= h($transfusion->patient_address) ?></td>
                    <td><?= h($transfusion->patient_phone) ?></td>
                    <td><?= h($transfusion->date_of_birth) ?></td>
                    <td><?= h($transfusion->age_years) ?></td>
                    <td><?= h($transfusion->diagnosis) ?></td>
                    <td><?= h($transfusion->ward) ?></td>
                    <td><?= h($transfusion->pre_hb) ?></td>
                    <td><?= h($transfusion->transfusion_reason) ?></td>
                    <td><?= h($transfusion->obstetric_history) ?></td>
                    <td><?= h($transfusion->previous_transfusion) ?></td>
                    <td><?= h($transfusion->previous_reactions) ?></td>
                    <td><?= h($transfusion->reaction_general) ?></td>
                    <td><?= h($transfusion->reaction_fever) ?></td>
                    <td><?= h($transfusion->reaction_chills) ?></td>
                    <td><?= h($transfusion->reaction_flushing) ?></td>
                    <td><?= h($transfusion->reaction_vomiting) ?></td>
                    <td><?= h($transfusion->reaction_dermatological) ?></td>
                    <td><?= h($transfusion->reaction_cardiac) ?></td>
                    <td><?= h($transfusion->reaction_chest) ?></td>
                    <td><?= h($transfusion->reaction_dyspnoea) ?></td>
                    <td><?= h($transfusion->reaction_hypotension) ?></td>
                    <td><?= h($transfusion->reaction_tachycardia) ?></td>
                    <td><?= h($transfusion->reaction_renal) ?></td>
                    <td><?= h($transfusion->reaction_anuria) ?></td>
                    <td><?= h($transfusion->reaction_oliguria) ?></td>
                    <td><?= h($transfusion->reaction_dark) ?></td>
                    <td><?= h($transfusion->reaction_haematological) ?></td>
                    <td><?= h($transfusion->vital_start_bp) ?></td>
                    <td><?= h($transfusion->vital_start_t) ?></td>
                    <td><?= h($transfusion->vital_start_p) ?></td>
                    <td><?= h($transfusion->vital_start_r) ?></td>
                    <td><?= h($transfusion->vital_during_bp) ?></td>
                    <td><?= h($transfusion->vital_during_t) ?></td>
                    <td><?= h($transfusion->vital_during_p) ?></td>
                    <td><?= h($transfusion->vital_during_r) ?></td>
                    <td><?= h($transfusion->vital_stop_bp) ?></td>
                    <td><?= h($transfusion->vital_stop_t) ?></td>
                    <td><?= h($transfusion->vital_stop_p) ?></td>
                    <td><?= h($transfusion->vital_stop_r) ?></td>
                    <td><?= h($transfusion->nurse_name) ?></td>
                    <td><?= h($transfusion->lab_hemolysis) ?></td>
                    <td><?= h($transfusion->lab_hemolysis_present) ?></td>
                    <td><?= h($transfusion->recipient_blood) ?></td>
                    <td><?= h($transfusion->hae_wbc) ?></td>
                    <td><?= h($transfusion->hae_hb) ?></td>
                    <td><?= h($transfusion->hae_rbc) ?></td>
                    <td><?= h($transfusion->hae_hct) ?></td>
                    <td><?= h($transfusion->hae_mcv) ?></td>
                    <td><?= h($transfusion->hae_mch) ?></td>
                    <td><?= h($transfusion->hae_mchc) ?></td>
                    <td><?= h($transfusion->hae_plt) ?></td>
                    <td><?= h($transfusion->film_rbc) ?></td>
                    <td><?= h($transfusion->film_wbc) ?></td>
                    <td><?= h($transfusion->film_plt) ?></td>
                    <td><?= h($transfusion->donor_hemolysis) ?></td>
                    <td><?= h($transfusion->donor_age) ?></td>
                    <td><?= h($transfusion->compatible_saline_rt) ?></td>
                    <td><?= h($transfusion->compatible_saline_ii) ?></td>
                    <td><?= h($transfusion->compatible_ahg) ?></td>
                    <td><?= h($transfusion->compatible_albumin) ?></td>
                    <td><?= h($transfusion->anti_a) ?></td>
                    <td><?= h($transfusion->anti_b) ?></td>
                    <td><?= h($transfusion->urinalysis) ?></td>
                    <td><?= h($transfusion->evaluation) ?></td>
                    <td><?= h($transfusion->adverse_reaction) ?></td>
                    <td><?= h($transfusion->reporter_name) ?></td>
                    <td><?= h($transfusion->reporter_email) ?></td>
                    <td><?= h($transfusion->reporter_phone) ?></td>
                    <td><?= h($transfusion->report_type) ?></td>
                    <td><?= $transfusion->submitted === null ? '' : $this->Number->format($transfusion->submitted) ?></td>
                    <td><?= h($transfusion->submitted_date) ?></td>
                    <td><?= $transfusion->copied === null ? '' : $this->Number->format($transfusion->copied) ?></td>
                    <td><?= $transfusion->archived === null ? '' : $this->Number->format($transfusion->archived) ?></td>
                    <td><?= h($transfusion->archived_date) ?></td>
                    <td><?= h($transfusion->active) ?></td>
                    <td><?= h($transfusion->created) ?></td>
                    <td><?= h($transfusion->modified) ?></td>
                    <td><?= h($transfusion->reporter_date) ?></td>
                    <td><?= h($transfusion->person_submitting) ?></td>
                    <td><?= h($transfusion->reporter_name_diff) ?></td>
                    <td><?= $transfusion->reporter_designation_diff === null ? '' : $this->Number->format($transfusion->reporter_designation_diff) ?></td>
                    <td><?= h($transfusion->reporter_email_diff) ?></td>
                    <td><?= h($transfusion->reporter_phone_diff) ?></td>
                    <td><?= h($transfusion->reporter_date_diff) ?></td>
                    <td><?= $transfusion->assigned_to === null ? '' : $this->Number->format($transfusion->assigned_to) ?></td>
                    <td><?= $transfusion->assigned_by === null ? '' : $this->Number->format($transfusion->assigned_by) ?></td>
                    <td><?= h($transfusion->assigned_date) ?></td>
                    <td><?= h($transfusion->clinic_venue) ?></td>
                    <td><?= $transfusion->specimens_post_transfusion === null ? '' : $this->Number->format($transfusion->specimens_post_transfusion) ?></td>
                    <td><?= $transfusion->specimens_edta_blood === null ? '' : $this->Number->format($transfusion->specimens_edta_blood) ?></td>
                    <td><?= $transfusion->specimens_void_urine === null ? '' : $this->Number->format($transfusion->specimens_void_urine) ?></td>
                    <td><?= $transfusion->specimens_blood_reacted === null ? '' : $this->Number->format($transfusion->specimens_blood_reacted) ?></td>
                    <td><?= $transfusion->specimens_blood_bags === null ? '' : $this->Number->format($transfusion->specimens_blood_bags) ?></td>
                    <td><?= h($transfusion->clinic_code) ?></td>
                    <td><?= h($transfusion->donor_number) ?></td>
                    <td><?= h($transfusion->national_number) ?></td>
                    <td><?= h($transfusion->home_phone) ?></td>
                    <td><?= h($transfusion->cell_phone) ?></td>
                    <td><?= h($transfusion->email_address) ?></td>
                    <td><?= h($transfusion->residence) ?></td>
                    <td><?= h($transfusion->nurse_date) ?></td>
                    <td><?= h($transfusion->low_volume) ?></td>
                    <td><?= h($transfusion->venepuncture) ?></td>
                    <td><?= h($transfusion->hematoma) ?></td>
                    <td><?= h($transfusion->faint) ?></td>
                    <td><?= $transfusion->deleted === null ? '' : $this->Number->format($transfusion->deleted) ?></td>
                    <td><?= h($transfusion->deleted_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $transfusion->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transfusion->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transfusion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transfusion->id)]) ?>
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
