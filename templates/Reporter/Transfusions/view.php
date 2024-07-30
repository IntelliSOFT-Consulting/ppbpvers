<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Transfusion $transfusion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Transfusion'), ['action' => 'edit', $transfusion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Transfusion'), ['action' => 'delete', $transfusion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transfusion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Transfusions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Transfusion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="transfusions view content">
            <h3><?= h($transfusion->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $transfusion->has('user') ? $this->Html->link($transfusion->user->name, ['controller' => 'Users', 'action' => 'view', $transfusion->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pqmp') ?></th>
                    <td><?= $transfusion->has('pqmp') ? $this->Html->link($transfusion->pqmp->id, ['controller' => 'Pqmps', 'action' => 'view', $transfusion->pqmp->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference No') ?></th>
                    <td><?= h($transfusion->reference_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('County') ?></th>
                    <td><?= $transfusion->has('county') ? $this->Html->link($transfusion->county->id, ['controller' => 'Counties', 'action' => 'view', $transfusion->county->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= $transfusion->has('designation') ? $this->Html->link($transfusion->designation->name, ['controller' => 'Designations', 'action' => 'view', $transfusion->designation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Form Type') ?></th>
                    <td><?= h($transfusion->form_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Name') ?></th>
                    <td><?= h($transfusion->patient_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($transfusion->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Address') ?></th>
                    <td><?= h($transfusion->patient_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Phone') ?></th>
                    <td><?= h($transfusion->patient_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Birth') ?></th>
                    <td><?= h($transfusion->date_of_birth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age Years') ?></th>
                    <td><?= h($transfusion->age_years) ?></td>
                </tr>
                <tr>
                    <th><?= __('Diagnosis') ?></th>
                    <td><?= h($transfusion->diagnosis) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ward') ?></th>
                    <td><?= h($transfusion->ward) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pre Hb') ?></th>
                    <td><?= h($transfusion->pre_hb) ?></td>
                </tr>
                <tr>
                    <th><?= __('Transfusion Reason') ?></th>
                    <td><?= h($transfusion->transfusion_reason) ?></td>
                </tr>
                <tr>
                    <th><?= __('Obstetric History') ?></th>
                    <td><?= h($transfusion->obstetric_history) ?></td>
                </tr>
                <tr>
                    <th><?= __('Previous Transfusion') ?></th>
                    <td><?= h($transfusion->previous_transfusion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Previous Reactions') ?></th>
                    <td><?= h($transfusion->previous_reactions) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction General') ?></th>
                    <td><?= h($transfusion->reaction_general) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Fever') ?></th>
                    <td><?= h($transfusion->reaction_fever) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Chills') ?></th>
                    <td><?= h($transfusion->reaction_chills) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Flushing') ?></th>
                    <td><?= h($transfusion->reaction_flushing) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Vomiting') ?></th>
                    <td><?= h($transfusion->reaction_vomiting) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Dermatological') ?></th>
                    <td><?= h($transfusion->reaction_dermatological) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Cardiac') ?></th>
                    <td><?= h($transfusion->reaction_cardiac) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Chest') ?></th>
                    <td><?= h($transfusion->reaction_chest) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Dyspnoea') ?></th>
                    <td><?= h($transfusion->reaction_dyspnoea) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Hypotension') ?></th>
                    <td><?= h($transfusion->reaction_hypotension) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Tachycardia') ?></th>
                    <td><?= h($transfusion->reaction_tachycardia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Renal') ?></th>
                    <td><?= h($transfusion->reaction_renal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Anuria') ?></th>
                    <td><?= h($transfusion->reaction_anuria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Oliguria') ?></th>
                    <td><?= h($transfusion->reaction_oliguria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Dark') ?></th>
                    <td><?= h($transfusion->reaction_dark) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Haematological') ?></th>
                    <td><?= h($transfusion->reaction_haematological) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vital Start Bp') ?></th>
                    <td><?= h($transfusion->vital_start_bp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vital Start T') ?></th>
                    <td><?= h($transfusion->vital_start_t) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vital Start P') ?></th>
                    <td><?= h($transfusion->vital_start_p) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vital Start R') ?></th>
                    <td><?= h($transfusion->vital_start_r) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vital During Bp') ?></th>
                    <td><?= h($transfusion->vital_during_bp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vital During T') ?></th>
                    <td><?= h($transfusion->vital_during_t) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vital During P') ?></th>
                    <td><?= h($transfusion->vital_during_p) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vital During R') ?></th>
                    <td><?= h($transfusion->vital_during_r) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vital Stop Bp') ?></th>
                    <td><?= h($transfusion->vital_stop_bp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vital Stop T') ?></th>
                    <td><?= h($transfusion->vital_stop_t) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vital Stop P') ?></th>
                    <td><?= h($transfusion->vital_stop_p) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vital Stop R') ?></th>
                    <td><?= h($transfusion->vital_stop_r) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nurse Name') ?></th>
                    <td><?= h($transfusion->nurse_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lab Hemolysis') ?></th>
                    <td><?= h($transfusion->lab_hemolysis) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lab Hemolysis Present') ?></th>
                    <td><?= h($transfusion->lab_hemolysis_present) ?></td>
                </tr>
                <tr>
                    <th><?= __('Recipient Blood') ?></th>
                    <td><?= h($transfusion->recipient_blood) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hae Wbc') ?></th>
                    <td><?= h($transfusion->hae_wbc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hae Hb') ?></th>
                    <td><?= h($transfusion->hae_hb) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hae Rbc') ?></th>
                    <td><?= h($transfusion->hae_rbc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hae Hct') ?></th>
                    <td><?= h($transfusion->hae_hct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hae Mcv') ?></th>
                    <td><?= h($transfusion->hae_mcv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hae Mch') ?></th>
                    <td><?= h($transfusion->hae_mch) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hae Mchc') ?></th>
                    <td><?= h($transfusion->hae_mchc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hae Plt') ?></th>
                    <td><?= h($transfusion->hae_plt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Film Rbc') ?></th>
                    <td><?= h($transfusion->film_rbc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Film Wbc') ?></th>
                    <td><?= h($transfusion->film_wbc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Film Plt') ?></th>
                    <td><?= h($transfusion->film_plt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Donor Hemolysis') ?></th>
                    <td><?= h($transfusion->donor_hemolysis) ?></td>
                </tr>
                <tr>
                    <th><?= __('Donor Age') ?></th>
                    <td><?= h($transfusion->donor_age) ?></td>
                </tr>
                <tr>
                    <th><?= __('Compatible Saline Rt') ?></th>
                    <td><?= h($transfusion->compatible_saline_rt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Compatible Saline Ii') ?></th>
                    <td><?= h($transfusion->compatible_saline_ii) ?></td>
                </tr>
                <tr>
                    <th><?= __('Compatible Ahg') ?></th>
                    <td><?= h($transfusion->compatible_ahg) ?></td>
                </tr>
                <tr>
                    <th><?= __('Compatible Albumin') ?></th>
                    <td><?= h($transfusion->compatible_albumin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anti A') ?></th>
                    <td><?= h($transfusion->anti_a) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anti B') ?></th>
                    <td><?= h($transfusion->anti_b) ?></td>
                </tr>
                <tr>
                    <th><?= __('Urinalysis') ?></th>
                    <td><?= h($transfusion->urinalysis) ?></td>
                </tr>
                <tr>
                    <th><?= __('Evaluation') ?></th>
                    <td><?= h($transfusion->evaluation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adverse Reaction') ?></th>
                    <td><?= h($transfusion->adverse_reaction) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name') ?></th>
                    <td><?= h($transfusion->reporter_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email') ?></th>
                    <td><?= h($transfusion->reporter_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone') ?></th>
                    <td><?= h($transfusion->reporter_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Type') ?></th>
                    <td><?= h($transfusion->report_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Person Submitting') ?></th>
                    <td><?= h($transfusion->person_submitting) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name Diff') ?></th>
                    <td><?= h($transfusion->reporter_name_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email Diff') ?></th>
                    <td><?= h($transfusion->reporter_email_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone Diff') ?></th>
                    <td><?= h($transfusion->reporter_phone_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clinic Venue') ?></th>
                    <td><?= h($transfusion->clinic_venue) ?></td>
                </tr>
                <tr>
                    <th><?= __('Clinic Code') ?></th>
                    <td><?= h($transfusion->clinic_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Donor Number') ?></th>
                    <td><?= h($transfusion->donor_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('National Number') ?></th>
                    <td><?= h($transfusion->national_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Home Phone') ?></th>
                    <td><?= h($transfusion->home_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cell Phone') ?></th>
                    <td><?= h($transfusion->cell_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Address') ?></th>
                    <td><?= h($transfusion->email_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Residence') ?></th>
                    <td><?= h($transfusion->residence) ?></td>
                </tr>
                <tr>
                    <th><?= __('Low Volume') ?></th>
                    <td><?= h($transfusion->low_volume) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venepuncture') ?></th>
                    <td><?= h($transfusion->venepuncture) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hematoma') ?></th>
                    <td><?= h($transfusion->hematoma) ?></td>
                </tr>
                <tr>
                    <th><?= __('Faint') ?></th>
                    <td><?= h($transfusion->faint) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($transfusion->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Transfusion Id') ?></th>
                    <td><?= $transfusion->transfusion_id === null ? '' : $this->Number->format($transfusion->transfusion_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted') ?></th>
                    <td><?= $transfusion->submitted === null ? '' : $this->Number->format($transfusion->submitted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copied') ?></th>
                    <td><?= $transfusion->copied === null ? '' : $this->Number->format($transfusion->copied) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived') ?></th>
                    <td><?= $transfusion->archived === null ? '' : $this->Number->format($transfusion->archived) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Designation Diff') ?></th>
                    <td><?= $transfusion->reporter_designation_diff === null ? '' : $this->Number->format($transfusion->reporter_designation_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned To') ?></th>
                    <td><?= $transfusion->assigned_to === null ? '' : $this->Number->format($transfusion->assigned_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned By') ?></th>
                    <td><?= $transfusion->assigned_by === null ? '' : $this->Number->format($transfusion->assigned_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Specimens Post Transfusion') ?></th>
                    <td><?= $transfusion->specimens_post_transfusion === null ? '' : $this->Number->format($transfusion->specimens_post_transfusion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Specimens Edta Blood') ?></th>
                    <td><?= $transfusion->specimens_edta_blood === null ? '' : $this->Number->format($transfusion->specimens_edta_blood) ?></td>
                </tr>
                <tr>
                    <th><?= __('Specimens Void Urine') ?></th>
                    <td><?= $transfusion->specimens_void_urine === null ? '' : $this->Number->format($transfusion->specimens_void_urine) ?></td>
                </tr>
                <tr>
                    <th><?= __('Specimens Blood Reacted') ?></th>
                    <td><?= $transfusion->specimens_blood_reacted === null ? '' : $this->Number->format($transfusion->specimens_blood_reacted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Specimens Blood Bags') ?></th>
                    <td><?= $transfusion->specimens_blood_bags === null ? '' : $this->Number->format($transfusion->specimens_blood_bags) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $transfusion->deleted === null ? '' : $this->Number->format($transfusion->deleted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted Date') ?></th>
                    <td><?= h($transfusion->submitted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived Date') ?></th>
                    <td><?= h($transfusion->archived_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($transfusion->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($transfusion->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date') ?></th>
                    <td><?= h($transfusion->reporter_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date Diff') ?></th>
                    <td><?= h($transfusion->reporter_date_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned Date') ?></th>
                    <td><?= h($transfusion->assigned_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nurse Date') ?></th>
                    <td><?= h($transfusion->nurse_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($transfusion->deleted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $transfusion->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Current Medications') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($transfusion->current_medications)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Transfusion Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($transfusion->transfusion_comment)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Reaction Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($transfusion->reaction_comment)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Reaction Other') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($transfusion->reaction_other)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Culture Donor Pack') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($transfusion->culture_donor_pack)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Culture Recipient Blood') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($transfusion->culture_recipient_blood)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Negative Result') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($transfusion->negative_result)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Transfusions') ?></h4>
                <?php if (!empty($transfusion->transfusions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Pqmp Id') ?></th>
                            <th><?= __('Transfusion Id') ?></th>
                            <th><?= __('Reference No') ?></th>
                            <th><?= __('County Id') ?></th>
                            <th><?= __('Designation Id') ?></th>
                            <th><?= __('Form Type') ?></th>
                            <th><?= __('Patient Name') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Patient Address') ?></th>
                            <th><?= __('Patient Phone') ?></th>
                            <th><?= __('Date Of Birth') ?></th>
                            <th><?= __('Age Years') ?></th>
                            <th><?= __('Diagnosis') ?></th>
                            <th><?= __('Ward') ?></th>
                            <th><?= __('Pre Hb') ?></th>
                            <th><?= __('Transfusion Reason') ?></th>
                            <th><?= __('Current Medications') ?></th>
                            <th><?= __('Obstetric History') ?></th>
                            <th><?= __('Previous Transfusion') ?></th>
                            <th><?= __('Transfusion Comment') ?></th>
                            <th><?= __('Previous Reactions') ?></th>
                            <th><?= __('Reaction Comment') ?></th>
                            <th><?= __('Reaction General') ?></th>
                            <th><?= __('Reaction Fever') ?></th>
                            <th><?= __('Reaction Chills') ?></th>
                            <th><?= __('Reaction Flushing') ?></th>
                            <th><?= __('Reaction Vomiting') ?></th>
                            <th><?= __('Reaction Dermatological') ?></th>
                            <th><?= __('Reaction Cardiac') ?></th>
                            <th><?= __('Reaction Chest') ?></th>
                            <th><?= __('Reaction Dyspnoea') ?></th>
                            <th><?= __('Reaction Hypotension') ?></th>
                            <th><?= __('Reaction Tachycardia') ?></th>
                            <th><?= __('Reaction Renal') ?></th>
                            <th><?= __('Reaction Anuria') ?></th>
                            <th><?= __('Reaction Oliguria') ?></th>
                            <th><?= __('Reaction Dark') ?></th>
                            <th><?= __('Reaction Haematological') ?></th>
                            <th><?= __('Reaction Other') ?></th>
                            <th><?= __('Vital Start Bp') ?></th>
                            <th><?= __('Vital Start T') ?></th>
                            <th><?= __('Vital Start P') ?></th>
                            <th><?= __('Vital Start R') ?></th>
                            <th><?= __('Vital During Bp') ?></th>
                            <th><?= __('Vital During T') ?></th>
                            <th><?= __('Vital During P') ?></th>
                            <th><?= __('Vital During R') ?></th>
                            <th><?= __('Vital Stop Bp') ?></th>
                            <th><?= __('Vital Stop T') ?></th>
                            <th><?= __('Vital Stop P') ?></th>
                            <th><?= __('Vital Stop R') ?></th>
                            <th><?= __('Nurse Name') ?></th>
                            <th><?= __('Lab Hemolysis') ?></th>
                            <th><?= __('Lab Hemolysis Present') ?></th>
                            <th><?= __('Recipient Blood') ?></th>
                            <th><?= __('Hae Wbc') ?></th>
                            <th><?= __('Hae Hb') ?></th>
                            <th><?= __('Hae Rbc') ?></th>
                            <th><?= __('Hae Hct') ?></th>
                            <th><?= __('Hae Mcv') ?></th>
                            <th><?= __('Hae Mch') ?></th>
                            <th><?= __('Hae Mchc') ?></th>
                            <th><?= __('Hae Plt') ?></th>
                            <th><?= __('Film Rbc') ?></th>
                            <th><?= __('Film Wbc') ?></th>
                            <th><?= __('Film Plt') ?></th>
                            <th><?= __('Donor Hemolysis') ?></th>
                            <th><?= __('Donor Age') ?></th>
                            <th><?= __('Culture Donor Pack') ?></th>
                            <th><?= __('Culture Recipient Blood') ?></th>
                            <th><?= __('Compatible Saline Rt') ?></th>
                            <th><?= __('Compatible Saline Ii') ?></th>
                            <th><?= __('Compatible Ahg') ?></th>
                            <th><?= __('Compatible Albumin') ?></th>
                            <th><?= __('Negative Result') ?></th>
                            <th><?= __('Anti A') ?></th>
                            <th><?= __('Anti B') ?></th>
                            <th><?= __('Urinalysis') ?></th>
                            <th><?= __('Evaluation') ?></th>
                            <th><?= __('Adverse Reaction') ?></th>
                            <th><?= __('Reporter Name') ?></th>
                            <th><?= __('Reporter Email') ?></th>
                            <th><?= __('Reporter Phone') ?></th>
                            <th><?= __('Report Type') ?></th>
                            <th><?= __('Submitted') ?></th>
                            <th><?= __('Submitted Date') ?></th>
                            <th><?= __('Copied') ?></th>
                            <th><?= __('Archived') ?></th>
                            <th><?= __('Archived Date') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Reporter Date') ?></th>
                            <th><?= __('Person Submitting') ?></th>
                            <th><?= __('Reporter Name Diff') ?></th>
                            <th><?= __('Reporter Designation Diff') ?></th>
                            <th><?= __('Reporter Email Diff') ?></th>
                            <th><?= __('Reporter Phone Diff') ?></th>
                            <th><?= __('Reporter Date Diff') ?></th>
                            <th><?= __('Assigned To') ?></th>
                            <th><?= __('Assigned By') ?></th>
                            <th><?= __('Assigned Date') ?></th>
                            <th><?= __('Clinic Venue') ?></th>
                            <th><?= __('Specimens Post Transfusion') ?></th>
                            <th><?= __('Specimens Edta Blood') ?></th>
                            <th><?= __('Specimens Void Urine') ?></th>
                            <th><?= __('Specimens Blood Reacted') ?></th>
                            <th><?= __('Specimens Blood Bags') ?></th>
                            <th><?= __('Clinic Code') ?></th>
                            <th><?= __('Donor Number') ?></th>
                            <th><?= __('National Number') ?></th>
                            <th><?= __('Home Phone') ?></th>
                            <th><?= __('Cell Phone') ?></th>
                            <th><?= __('Email Address') ?></th>
                            <th><?= __('Residence') ?></th>
                            <th><?= __('Nurse Date') ?></th>
                            <th><?= __('Low Volume') ?></th>
                            <th><?= __('Venepuncture') ?></th>
                            <th><?= __('Hematoma') ?></th>
                            <th><?= __('Faint') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($transfusion->transfusions as $transfusions) : ?>
                        <tr>
                            <td><?= h($transfusions->id) ?></td>
                            <td><?= h($transfusions->user_id) ?></td>
                            <td><?= h($transfusions->pqmp_id) ?></td>
                            <td><?= h($transfusions->transfusion_id) ?></td>
                            <td><?= h($transfusions->reference_no) ?></td>
                            <td><?= h($transfusions->county_id) ?></td>
                            <td><?= h($transfusions->designation_id) ?></td>
                            <td><?= h($transfusions->form_type) ?></td>
                            <td><?= h($transfusions->patient_name) ?></td>
                            <td><?= h($transfusions->gender) ?></td>
                            <td><?= h($transfusions->patient_address) ?></td>
                            <td><?= h($transfusions->patient_phone) ?></td>
                            <td><?= h($transfusions->date_of_birth) ?></td>
                            <td><?= h($transfusions->age_years) ?></td>
                            <td><?= h($transfusions->diagnosis) ?></td>
                            <td><?= h($transfusions->ward) ?></td>
                            <td><?= h($transfusions->pre_hb) ?></td>
                            <td><?= h($transfusions->transfusion_reason) ?></td>
                            <td><?= h($transfusions->current_medications) ?></td>
                            <td><?= h($transfusions->obstetric_history) ?></td>
                            <td><?= h($transfusions->previous_transfusion) ?></td>
                            <td><?= h($transfusions->transfusion_comment) ?></td>
                            <td><?= h($transfusions->previous_reactions) ?></td>
                            <td><?= h($transfusions->reaction_comment) ?></td>
                            <td><?= h($transfusions->reaction_general) ?></td>
                            <td><?= h($transfusions->reaction_fever) ?></td>
                            <td><?= h($transfusions->reaction_chills) ?></td>
                            <td><?= h($transfusions->reaction_flushing) ?></td>
                            <td><?= h($transfusions->reaction_vomiting) ?></td>
                            <td><?= h($transfusions->reaction_dermatological) ?></td>
                            <td><?= h($transfusions->reaction_cardiac) ?></td>
                            <td><?= h($transfusions->reaction_chest) ?></td>
                            <td><?= h($transfusions->reaction_dyspnoea) ?></td>
                            <td><?= h($transfusions->reaction_hypotension) ?></td>
                            <td><?= h($transfusions->reaction_tachycardia) ?></td>
                            <td><?= h($transfusions->reaction_renal) ?></td>
                            <td><?= h($transfusions->reaction_anuria) ?></td>
                            <td><?= h($transfusions->reaction_oliguria) ?></td>
                            <td><?= h($transfusions->reaction_dark) ?></td>
                            <td><?= h($transfusions->reaction_haematological) ?></td>
                            <td><?= h($transfusions->reaction_other) ?></td>
                            <td><?= h($transfusions->vital_start_bp) ?></td>
                            <td><?= h($transfusions->vital_start_t) ?></td>
                            <td><?= h($transfusions->vital_start_p) ?></td>
                            <td><?= h($transfusions->vital_start_r) ?></td>
                            <td><?= h($transfusions->vital_during_bp) ?></td>
                            <td><?= h($transfusions->vital_during_t) ?></td>
                            <td><?= h($transfusions->vital_during_p) ?></td>
                            <td><?= h($transfusions->vital_during_r) ?></td>
                            <td><?= h($transfusions->vital_stop_bp) ?></td>
                            <td><?= h($transfusions->vital_stop_t) ?></td>
                            <td><?= h($transfusions->vital_stop_p) ?></td>
                            <td><?= h($transfusions->vital_stop_r) ?></td>
                            <td><?= h($transfusions->nurse_name) ?></td>
                            <td><?= h($transfusions->lab_hemolysis) ?></td>
                            <td><?= h($transfusions->lab_hemolysis_present) ?></td>
                            <td><?= h($transfusions->recipient_blood) ?></td>
                            <td><?= h($transfusions->hae_wbc) ?></td>
                            <td><?= h($transfusions->hae_hb) ?></td>
                            <td><?= h($transfusions->hae_rbc) ?></td>
                            <td><?= h($transfusions->hae_hct) ?></td>
                            <td><?= h($transfusions->hae_mcv) ?></td>
                            <td><?= h($transfusions->hae_mch) ?></td>
                            <td><?= h($transfusions->hae_mchc) ?></td>
                            <td><?= h($transfusions->hae_plt) ?></td>
                            <td><?= h($transfusions->film_rbc) ?></td>
                            <td><?= h($transfusions->film_wbc) ?></td>
                            <td><?= h($transfusions->film_plt) ?></td>
                            <td><?= h($transfusions->donor_hemolysis) ?></td>
                            <td><?= h($transfusions->donor_age) ?></td>
                            <td><?= h($transfusions->culture_donor_pack) ?></td>
                            <td><?= h($transfusions->culture_recipient_blood) ?></td>
                            <td><?= h($transfusions->compatible_saline_rt) ?></td>
                            <td><?= h($transfusions->compatible_saline_ii) ?></td>
                            <td><?= h($transfusions->compatible_ahg) ?></td>
                            <td><?= h($transfusions->compatible_albumin) ?></td>
                            <td><?= h($transfusions->negative_result) ?></td>
                            <td><?= h($transfusions->anti_a) ?></td>
                            <td><?= h($transfusions->anti_b) ?></td>
                            <td><?= h($transfusions->urinalysis) ?></td>
                            <td><?= h($transfusions->evaluation) ?></td>
                            <td><?= h($transfusions->adverse_reaction) ?></td>
                            <td><?= h($transfusions->reporter_name) ?></td>
                            <td><?= h($transfusions->reporter_email) ?></td>
                            <td><?= h($transfusions->reporter_phone) ?></td>
                            <td><?= h($transfusions->report_type) ?></td>
                            <td><?= h($transfusions->submitted) ?></td>
                            <td><?= h($transfusions->submitted_date) ?></td>
                            <td><?= h($transfusions->copied) ?></td>
                            <td><?= h($transfusions->archived) ?></td>
                            <td><?= h($transfusions->archived_date) ?></td>
                            <td><?= h($transfusions->active) ?></td>
                            <td><?= h($transfusions->created) ?></td>
                            <td><?= h($transfusions->modified) ?></td>
                            <td><?= h($transfusions->reporter_date) ?></td>
                            <td><?= h($transfusions->person_submitting) ?></td>
                            <td><?= h($transfusions->reporter_name_diff) ?></td>
                            <td><?= h($transfusions->reporter_designation_diff) ?></td>
                            <td><?= h($transfusions->reporter_email_diff) ?></td>
                            <td><?= h($transfusions->reporter_phone_diff) ?></td>
                            <td><?= h($transfusions->reporter_date_diff) ?></td>
                            <td><?= h($transfusions->assigned_to) ?></td>
                            <td><?= h($transfusions->assigned_by) ?></td>
                            <td><?= h($transfusions->assigned_date) ?></td>
                            <td><?= h($transfusions->clinic_venue) ?></td>
                            <td><?= h($transfusions->specimens_post_transfusion) ?></td>
                            <td><?= h($transfusions->specimens_edta_blood) ?></td>
                            <td><?= h($transfusions->specimens_void_urine) ?></td>
                            <td><?= h($transfusions->specimens_blood_reacted) ?></td>
                            <td><?= h($transfusions->specimens_blood_bags) ?></td>
                            <td><?= h($transfusions->clinic_code) ?></td>
                            <td><?= h($transfusions->donor_number) ?></td>
                            <td><?= h($transfusions->national_number) ?></td>
                            <td><?= h($transfusions->home_phone) ?></td>
                            <td><?= h($transfusions->cell_phone) ?></td>
                            <td><?= h($transfusions->email_address) ?></td>
                            <td><?= h($transfusions->residence) ?></td>
                            <td><?= h($transfusions->nurse_date) ?></td>
                            <td><?= h($transfusions->low_volume) ?></td>
                            <td><?= h($transfusions->venepuncture) ?></td>
                            <td><?= h($transfusions->hematoma) ?></td>
                            <td><?= h($transfusions->faint) ?></td>
                            <td><?= h($transfusions->deleted) ?></td>
                            <td><?= h($transfusions->deleted_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Transfusions', 'action' => 'view', $transfusions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Transfusions', 'action' => 'edit', $transfusions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transfusions', 'action' => 'delete', $transfusions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transfusions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Attachments Old') ?></h4>
                <?php if (!empty($transfusion->attachments_old)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Sadr Id') ?></th>
                            <th><?= __('Sadr Followup Id') ?></th>
                            <th><?= __('Pqmp Id') ?></th>
                            <th><?= __('Aefi Id') ?></th>
                            <th><?= __('Device Id') ?></th>
                            <th><?= __('Transfusion Id') ?></th>
                            <th><?= __('Medication Id') ?></th>
                            <th><?= __('Filename') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Mimetype') ?></th>
                            <th><?= __('Filesize') ?></th>
                            <th><?= __('Dir') ?></th>
                            <th><?= __('File') ?></th>
                            <th><?= __('Basename') ?></th>
                            <th><?= __('Dirname') ?></th>
                            <th><?= __('Checksum') ?></th>
                            <th><?= __('Model') ?></th>
                            <th><?= __('Foreign Key') ?></th>
                            <th><?= __('Alternative') ?></th>
                            <th><?= __('Group') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($transfusion->attachments_old as $attachmentsOld) : ?>
                        <tr>
                            <td><?= h($attachmentsOld->id) ?></td>
                            <td><?= h($attachmentsOld->sadr_id) ?></td>
                            <td><?= h($attachmentsOld->sadr_followup_id) ?></td>
                            <td><?= h($attachmentsOld->pqmp_id) ?></td>
                            <td><?= h($attachmentsOld->aefi_id) ?></td>
                            <td><?= h($attachmentsOld->device_id) ?></td>
                            <td><?= h($attachmentsOld->transfusion_id) ?></td>
                            <td><?= h($attachmentsOld->medication_id) ?></td>
                            <td><?= h($attachmentsOld->filename) ?></td>
                            <td><?= h($attachmentsOld->description) ?></td>
                            <td><?= h($attachmentsOld->mimetype) ?></td>
                            <td><?= h($attachmentsOld->filesize) ?></td>
                            <td><?= h($attachmentsOld->dir) ?></td>
                            <td><?= h($attachmentsOld->file) ?></td>
                            <td><?= h($attachmentsOld->basename) ?></td>
                            <td><?= h($attachmentsOld->dirname) ?></td>
                            <td><?= h($attachmentsOld->checksum) ?></td>
                            <td><?= h($attachmentsOld->model) ?></td>
                            <td><?= h($attachmentsOld->foreign_key) ?></td>
                            <td><?= h($attachmentsOld->alternative) ?></td>
                            <td><?= h($attachmentsOld->group) ?></td>
                            <td><?= h($attachmentsOld->created) ?></td>
                            <td><?= h($attachmentsOld->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AttachmentsOld', 'action' => 'view', $attachmentsOld->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AttachmentsOld', 'action' => 'edit', $attachmentsOld->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AttachmentsOld', 'action' => 'delete', $attachmentsOld->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attachmentsOld->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Pints') ?></h4>
                <?php if (!empty($transfusion->pints)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Transfusion Id') ?></th>
                            <th><?= __('Component Type') ?></th>
                            <th><?= __('Pint No') ?></th>
                            <th><?= __('Expiry Date') ?></th>
                            <th><?= __('Volume Transfused') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($transfusion->pints as $pints) : ?>
                        <tr>
                            <td><?= h($pints->id) ?></td>
                            <td><?= h($pints->transfusion_id) ?></td>
                            <td><?= h($pints->component_type) ?></td>
                            <td><?= h($pints->pint_no) ?></td>
                            <td><?= h($pints->expiry_date) ?></td>
                            <td><?= h($pints->volume_transfused) ?></td>
                            <td><?= h($pints->created) ?></td>
                            <td><?= h($pints->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Pints', 'action' => 'view', $pints->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Pints', 'action' => 'edit', $pints->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pints', 'action' => 'delete', $pints->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pints->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
