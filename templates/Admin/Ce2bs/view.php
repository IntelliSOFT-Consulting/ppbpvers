<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ce2b $ce2b
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ce2b'), ['action' => 'edit', $ce2b->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ce2b'), ['action' => 'delete', $ce2b->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ce2b->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ce2bs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ce2b'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ce2bs view content">
            <h3><?= h($ce2b->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $ce2b->has('user') ? $this->Html->link($ce2b->user->name, ['controller' => 'Users', 'action' => 'view', $ce2b->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Vigiflow Message') ?></th>
                    <td><?= h($ce2b->vigiflow_message) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vigiflow Date') ?></th>
                    <td><?= h($ce2b->vigiflow_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Type') ?></th>
                    <td><?= h($ce2b->report_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('County') ?></th>
                    <td><?= $ce2b->has('county') ? $this->Html->link($ce2b->county->id, ['controller' => 'Counties', 'action' => 'view', $ce2b->county->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sub County') ?></th>
                    <td><?= $ce2b->has('sub_county') ? $this->Html->link($ce2b->sub_county->id, ['controller' => 'SubCounties', 'action' => 'view', $ce2b->sub_county->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= $ce2b->has('designation') ? $this->Html->link($ce2b->designation->name, ['controller' => 'Designations', 'action' => 'view', $ce2b->designation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference No') ?></th>
                    <td><?= h($ce2b->reference_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Messageid') ?></th>
                    <td><?= h($ce2b->messageid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company Code') ?></th>
                    <td><?= h($ce2b->company_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company Name') ?></th>
                    <td><?= h($ce2b->company_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email') ?></th>
                    <td><?= h($ce2b->reporter_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('E2b Type') ?></th>
                    <td><?= h($ce2b->e2b_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('E2b File') ?></th>
                    <td><?= h($ce2b->e2b_file) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dir') ?></th>
                    <td><?= h($ce2b->dir) ?></td>
                </tr>
                <tr>
                    <th><?= __('Size') ?></th>
                    <td><?= h($ce2b->size) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($ce2b->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name') ?></th>
                    <td><?= h($ce2b->reporter_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone') ?></th>
                    <td><?= h($ce2b->reporter_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Person Submitting') ?></th>
                    <td><?= h($ce2b->person_submitting) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name Diff') ?></th>
                    <td><?= h($ce2b->reporter_name_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email Diff') ?></th>
                    <td><?= h($ce2b->reporter_email_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone Diff') ?></th>
                    <td><?= h($ce2b->reporter_phone_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Resubmit') ?></th>
                    <td><?= h($ce2b->resubmit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($ce2b->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Reference') ?></th>
                    <td><?= h($ce2b->report_reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creation Time') ?></th>
                    <td><?= h($ce2b->creation_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sender Reference') ?></th>
                    <td><?= h($ce2b->sender_reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Receiver Id') ?></th>
                    <td><?= h($ce2b->receiver_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sender Id') ?></th>
                    <td><?= h($ce2b->sender_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sender Unique Identifier') ?></th>
                    <td><?= h($ce2b->sender_unique_identifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Worldwide Identifier') ?></th>
                    <td><?= h($ce2b->worldwide_identifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date First Received') ?></th>
                    <td><?= h($ce2b->date_first_received) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Most Recent Info') ?></th>
                    <td><?= h($ce2b->date_most_recent_info) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Name') ?></th>
                    <td><?= h($ce2b->patient_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Sex') ?></th>
                    <td><?= h($ce2b->patient_sex) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Dob') ?></th>
                    <td><?= h($ce2b->patient_dob) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Number') ?></th>
                    <td><?= h($ce2b->patient_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sender Address') ?></th>
                    <td><?= h($ce2b->sender_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sender City') ?></th>
                    <td><?= h($ce2b->sender_city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sender State') ?></th>
                    <td><?= h($ce2b->sender_state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sender Department') ?></th>
                    <td><?= h($ce2b->sender_department) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sender Organization') ?></th>
                    <td><?= h($ce2b->sender_organization) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ce2b->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ce2b Id') ?></th>
                    <td><?= $ce2b->ce2b_id === null ? '' : $this->Number->format($ce2b->ce2b_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned To') ?></th>
                    <td><?= $ce2b->assigned_to === null ? '' : $this->Number->format($ce2b->assigned_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned By') ?></th>
                    <td><?= $ce2b->assigned_by === null ? '' : $this->Number->format($ce2b->assigned_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted') ?></th>
                    <td><?= $ce2b->submitted === null ? '' : $this->Number->format($ce2b->submitted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Designation') ?></th>
                    <td><?= $ce2b->reporter_designation === null ? '' : $this->Number->format($ce2b->reporter_designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Designation Diff') ?></th>
                    <td><?= $ce2b->reporter_designation_diff === null ? '' : $this->Number->format($ce2b->reporter_designation_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $ce2b->active === null ? '' : $this->Number->format($ce2b->active) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copied') ?></th>
                    <td><?= $ce2b->copied === null ? '' : $this->Number->format($ce2b->copied) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived') ?></th>
                    <td><?= $ce2b->archived === null ? '' : $this->Number->format($ce2b->archived) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned Date') ?></th>
                    <td><?= h($ce2b->assigned_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted Date') ?></th>
                    <td><?= h($ce2b->submitted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date') ?></th>
                    <td><?= h($ce2b->reporter_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date Diff') ?></th>
                    <td><?= h($ce2b->reporter_date_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived Date') ?></th>
                    <td><?= h($ce2b->archived_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($ce2b->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($ce2b->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Action Date') ?></th>
                    <td><?= h($ce2b->action_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($ce2b->deleted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Signature') ?></th>
                    <td><?= $ce2b->signature ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $ce2b->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Serious') ?></th>
                    <td><?= $ce2b->serious ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Results In Detah') ?></th>
                    <td><?= $ce2b->results_in_detah ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Life Threatening') ?></th>
                    <td><?= $ce2b->life_threatening ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Prolonged Hospitalization') ?></th>
                    <td><?= $ce2b->prolonged_hospitalization ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Incapacitating') ?></th>
                    <td><?= $ce2b->incapacitating ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ce2b->comment)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('E2b Content') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ce2b->e2b_content)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Case Narrative') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ce2b->case_narrative)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Past Medical') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ce2b->past_medical)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Ce2bs') ?></h4>
                <?php if (!empty($ce2b->ce2bs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Ce2b Id') ?></th>
                            <th><?= __('Vigiflow Message') ?></th>
                            <th><?= __('Vigiflow Date') ?></th>
                            <th><?= __('Report Type') ?></th>
                            <th><?= __('County Id') ?></th>
                            <th><?= __('Sub County Id') ?></th>
                            <th><?= __('Designation Id') ?></th>
                            <th><?= __('Reference No') ?></th>
                            <th><?= __('Messageid') ?></th>
                            <th><?= __('Assigned To') ?></th>
                            <th><?= __('Assigned By') ?></th>
                            <th><?= __('Company Code') ?></th>
                            <th><?= __('Company Name') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Reporter Email') ?></th>
                            <th><?= __('E2b Content') ?></th>
                            <th><?= __('E2b Type') ?></th>
                            <th><?= __('E2b File') ?></th>
                            <th><?= __('Dir') ?></th>
                            <th><?= __('Size') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Assigned Date') ?></th>
                            <th><?= __('Signature') ?></th>
                            <th><?= __('Submitted') ?></th>
                            <th><?= __('Submitted Date') ?></th>
                            <th><?= __('Reporter Name') ?></th>
                            <th><?= __('Reporter Designation') ?></th>
                            <th><?= __('Reporter Phone') ?></th>
                            <th><?= __('Reporter Date') ?></th>
                            <th><?= __('Person Submitting') ?></th>
                            <th><?= __('Reporter Name Diff') ?></th>
                            <th><?= __('Reporter Designation Diff') ?></th>
                            <th><?= __('Reporter Email Diff') ?></th>
                            <th><?= __('Reporter Phone Diff') ?></th>
                            <th><?= __('Reporter Date Diff') ?></th>
                            <th><?= __('Resubmit') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Active') ?></th>
                            <th><?= __('Copied') ?></th>
                            <th><?= __('Archived') ?></th>
                            <th><?= __('Archived Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Action Date') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th><?= __('Report Reference') ?></th>
                            <th><?= __('Creation Time') ?></th>
                            <th><?= __('Sender Reference') ?></th>
                            <th><?= __('Receiver Id') ?></th>
                            <th><?= __('Sender Id') ?></th>
                            <th><?= __('Sender Unique Identifier') ?></th>
                            <th><?= __('Worldwide Identifier') ?></th>
                            <th><?= __('Case Narrative') ?></th>
                            <th><?= __('Date First Received') ?></th>
                            <th><?= __('Date Most Recent Info') ?></th>
                            <th><?= __('Serious') ?></th>
                            <th><?= __('Patient Name') ?></th>
                            <th><?= __('Patient Sex') ?></th>
                            <th><?= __('Patient Dob') ?></th>
                            <th><?= __('Patient Number') ?></th>
                            <th><?= __('Past Medical') ?></th>
                            <th><?= __('Sender Address') ?></th>
                            <th><?= __('Sender City') ?></th>
                            <th><?= __('Sender State') ?></th>
                            <th><?= __('Sender Department') ?></th>
                            <th><?= __('Sender Organization') ?></th>
                            <th><?= __('Results In Detah') ?></th>
                            <th><?= __('Life Threatening') ?></th>
                            <th><?= __('Prolonged Hospitalization') ?></th>
                            <th><?= __('Incapacitating') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ce2b->ce2bs as $ce2bs) : ?>
                        <tr>
                            <td><?= h($ce2bs->id) ?></td>
                            <td><?= h($ce2bs->user_id) ?></td>
                            <td><?= h($ce2bs->ce2b_id) ?></td>
                            <td><?= h($ce2bs->vigiflow_message) ?></td>
                            <td><?= h($ce2bs->vigiflow_date) ?></td>
                            <td><?= h($ce2bs->report_type) ?></td>
                            <td><?= h($ce2bs->county_id) ?></td>
                            <td><?= h($ce2bs->sub_county_id) ?></td>
                            <td><?= h($ce2bs->designation_id) ?></td>
                            <td><?= h($ce2bs->reference_no) ?></td>
                            <td><?= h($ce2bs->messageid) ?></td>
                            <td><?= h($ce2bs->assigned_to) ?></td>
                            <td><?= h($ce2bs->assigned_by) ?></td>
                            <td><?= h($ce2bs->company_code) ?></td>
                            <td><?= h($ce2bs->company_name) ?></td>
                            <td><?= h($ce2bs->comment) ?></td>
                            <td><?= h($ce2bs->reporter_email) ?></td>
                            <td><?= h($ce2bs->e2b_content) ?></td>
                            <td><?= h($ce2bs->e2b_type) ?></td>
                            <td><?= h($ce2bs->e2b_file) ?></td>
                            <td><?= h($ce2bs->dir) ?></td>
                            <td><?= h($ce2bs->size) ?></td>
                            <td><?= h($ce2bs->type) ?></td>
                            <td><?= h($ce2bs->assigned_date) ?></td>
                            <td><?= h($ce2bs->signature) ?></td>
                            <td><?= h($ce2bs->submitted) ?></td>
                            <td><?= h($ce2bs->submitted_date) ?></td>
                            <td><?= h($ce2bs->reporter_name) ?></td>
                            <td><?= h($ce2bs->reporter_designation) ?></td>
                            <td><?= h($ce2bs->reporter_phone) ?></td>
                            <td><?= h($ce2bs->reporter_date) ?></td>
                            <td><?= h($ce2bs->person_submitting) ?></td>
                            <td><?= h($ce2bs->reporter_name_diff) ?></td>
                            <td><?= h($ce2bs->reporter_designation_diff) ?></td>
                            <td><?= h($ce2bs->reporter_email_diff) ?></td>
                            <td><?= h($ce2bs->reporter_phone_diff) ?></td>
                            <td><?= h($ce2bs->reporter_date_diff) ?></td>
                            <td><?= h($ce2bs->resubmit) ?></td>
                            <td><?= h($ce2bs->status) ?></td>
                            <td><?= h($ce2bs->active) ?></td>
                            <td><?= h($ce2bs->copied) ?></td>
                            <td><?= h($ce2bs->archived) ?></td>
                            <td><?= h($ce2bs->archived_date) ?></td>
                            <td><?= h($ce2bs->created) ?></td>
                            <td><?= h($ce2bs->modified) ?></td>
                            <td><?= h($ce2bs->action_date) ?></td>
                            <td><?= h($ce2bs->deleted) ?></td>
                            <td><?= h($ce2bs->deleted_date) ?></td>
                            <td><?= h($ce2bs->report_reference) ?></td>
                            <td><?= h($ce2bs->creation_time) ?></td>
                            <td><?= h($ce2bs->sender_reference) ?></td>
                            <td><?= h($ce2bs->receiver_id) ?></td>
                            <td><?= h($ce2bs->sender_id) ?></td>
                            <td><?= h($ce2bs->sender_unique_identifier) ?></td>
                            <td><?= h($ce2bs->worldwide_identifier) ?></td>
                            <td><?= h($ce2bs->case_narrative) ?></td>
                            <td><?= h($ce2bs->date_first_received) ?></td>
                            <td><?= h($ce2bs->date_most_recent_info) ?></td>
                            <td><?= h($ce2bs->serious) ?></td>
                            <td><?= h($ce2bs->patient_name) ?></td>
                            <td><?= h($ce2bs->patient_sex) ?></td>
                            <td><?= h($ce2bs->patient_dob) ?></td>
                            <td><?= h($ce2bs->patient_number) ?></td>
                            <td><?= h($ce2bs->past_medical) ?></td>
                            <td><?= h($ce2bs->sender_address) ?></td>
                            <td><?= h($ce2bs->sender_city) ?></td>
                            <td><?= h($ce2bs->sender_state) ?></td>
                            <td><?= h($ce2bs->sender_department) ?></td>
                            <td><?= h($ce2bs->sender_organization) ?></td>
                            <td><?= h($ce2bs->results_in_detah) ?></td>
                            <td><?= h($ce2bs->life_threatening) ?></td>
                            <td><?= h($ce2bs->prolonged_hospitalization) ?></td>
                            <td><?= h($ce2bs->incapacitating) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ce2bs', 'action' => 'view', $ce2bs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ce2bs', 'action' => 'edit', $ce2bs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ce2bs', 'action' => 'delete', $ce2bs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ce2bs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Ce2b List Of Drugs') ?></h4>
                <?php if (!empty($ce2b->ce2b_list_of_drugs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Ce2b Id') ?></th>
                            <th><?= __('Ce2b Followup Id') ?></th>
                            <th><?= __('Dose Id') ?></th>
                            <th><?= __('Route Id') ?></th>
                            <th><?= __('Frequency Id') ?></th>
                            <th><?= __('Frequency Id Other') ?></th>
                            <th><?= __('Drug Name') ?></th>
                            <th><?= __('Brand Name') ?></th>
                            <th><?= __('Batch No') ?></th>
                            <th><?= __('Manufacturer') ?></th>
                            <th><?= __('Dose') ?></th>
                            <th><?= __('Start Date') ?></th>
                            <th><?= __('Stop Date') ?></th>
                            <th><?= __('Indication') ?></th>
                            <th><?= __('Suspected Drug') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Route') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ce2b->ce2b_list_of_drugs as $ce2bListOfDrugs) : ?>
                        <tr>
                            <td><?= h($ce2bListOfDrugs->id) ?></td>
                            <td><?= h($ce2bListOfDrugs->ce2b_id) ?></td>
                            <td><?= h($ce2bListOfDrugs->ce2b_followup_id) ?></td>
                            <td><?= h($ce2bListOfDrugs->dose_id) ?></td>
                            <td><?= h($ce2bListOfDrugs->route_id) ?></td>
                            <td><?= h($ce2bListOfDrugs->frequency_id) ?></td>
                            <td><?= h($ce2bListOfDrugs->frequency_id_other) ?></td>
                            <td><?= h($ce2bListOfDrugs->drug_name) ?></td>
                            <td><?= h($ce2bListOfDrugs->brand_name) ?></td>
                            <td><?= h($ce2bListOfDrugs->batch_no) ?></td>
                            <td><?= h($ce2bListOfDrugs->manufacturer) ?></td>
                            <td><?= h($ce2bListOfDrugs->dose) ?></td>
                            <td><?= h($ce2bListOfDrugs->start_date) ?></td>
                            <td><?= h($ce2bListOfDrugs->stop_date) ?></td>
                            <td><?= h($ce2bListOfDrugs->indication) ?></td>
                            <td><?= h($ce2bListOfDrugs->suspected_drug) ?></td>
                            <td><?= h($ce2bListOfDrugs->created) ?></td>
                            <td><?= h($ce2bListOfDrugs->modified) ?></td>
                            <td><?= h($ce2bListOfDrugs->route) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ce2bListOfDrugs', 'action' => 'view', $ce2bListOfDrugs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ce2bListOfDrugs', 'action' => 'edit', $ce2bListOfDrugs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ce2bListOfDrugs', 'action' => 'delete', $ce2bListOfDrugs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ce2bListOfDrugs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Ce2b Reaction') ?></h4>
                <?php if (!empty($ce2b->ce2b_reaction)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Ce2b Id') ?></th>
                            <th><?= __('Reaction Name') ?></th>
                            <th><?= __('Meddra Code') ?></th>
                            <th><?= __('Start Date') ?></th>
                            <th><?= __('Source Country') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Criteria Death Null') ?></th>
                            <th><?= __('Criteria Death Value') ?></th>
                            <th><?= __('Life Hreatening Null') ?></th>
                            <th><?= __('Life Hreatening Value') ?></th>
                            <th><?= __('Prolonged Hospitalisation Null') ?></th>
                            <th><?= __('Prolonged Hospitalisation Value') ?></th>
                            <th><?= __('Incapacitating Null') ?></th>
                            <th><?= __('Incapacitating Value') ?></th>
                            <th><?= __('Birth Defect Null') ?></th>
                            <th><?= __('Birth Defect Value') ?></th>
                            <th><?= __('Other Medical Null') ?></th>
                            <th><?= __('Other Medical Value') ?></th>
                            <th><?= __('Reaction Outcome Null') ?></th>
                            <th><?= __('Reaction Outcome Value') ?></th>
                            <th><?= __('Medical Confirmation Null') ?></th>
                            <th><?= __('Medical Confirmation Value') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ce2b->ce2b_reaction as $ce2bReaction) : ?>
                        <tr>
                            <td><?= h($ce2bReaction->id) ?></td>
                            <td><?= h($ce2bReaction->ce2b_id) ?></td>
                            <td><?= h($ce2bReaction->reaction_name) ?></td>
                            <td><?= h($ce2bReaction->meddra_code) ?></td>
                            <td><?= h($ce2bReaction->start_date) ?></td>
                            <td><?= h($ce2bReaction->source_country) ?></td>
                            <td><?= h($ce2bReaction->created) ?></td>
                            <td><?= h($ce2bReaction->modified) ?></td>
                            <td><?= h($ce2bReaction->criteria_death_null) ?></td>
                            <td><?= h($ce2bReaction->criteria_death_value) ?></td>
                            <td><?= h($ce2bReaction->life_hreatening_null) ?></td>
                            <td><?= h($ce2bReaction->life_hreatening_value) ?></td>
                            <td><?= h($ce2bReaction->prolonged_hospitalisation_null) ?></td>
                            <td><?= h($ce2bReaction->prolonged_hospitalisation_value) ?></td>
                            <td><?= h($ce2bReaction->incapacitating_null) ?></td>
                            <td><?= h($ce2bReaction->incapacitating_value) ?></td>
                            <td><?= h($ce2bReaction->birth_defect_null) ?></td>
                            <td><?= h($ce2bReaction->birth_defect_value) ?></td>
                            <td><?= h($ce2bReaction->other_medical_null) ?></td>
                            <td><?= h($ce2bReaction->other_medical_value) ?></td>
                            <td><?= h($ce2bReaction->reaction_outcome_null) ?></td>
                            <td><?= h($ce2bReaction->reaction_outcome_value) ?></td>
                            <td><?= h($ce2bReaction->medical_confirmation_null) ?></td>
                            <td><?= h($ce2bReaction->medical_confirmation_value) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ce2bReaction', 'action' => 'view', $ce2bReaction->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ce2bReaction', 'action' => 'edit', $ce2bReaction->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ce2bReaction', 'action' => 'delete', $ce2bReaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ce2bReaction->id)]) ?>
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
