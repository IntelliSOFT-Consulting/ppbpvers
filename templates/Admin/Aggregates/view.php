<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aggregate $aggregate
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aggregate'), ['action' => 'edit', $aggregate->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aggregate'), ['action' => 'delete', $aggregate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aggregate->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Aggregates'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aggregate'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aggregates view content">
            <h3><?= h($aggregate->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $aggregate->has('user') ? $this->Html->link($aggregate->user->name, ['controller' => 'Users', 'action' => 'view', $aggregate->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('County') ?></th>
                    <td><?= $aggregate->has('county') ? $this->Html->link($aggregate->county->id, ['controller' => 'Counties', 'action' => 'view', $aggregate->county->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Summary Available') ?></th>
                    <td><?= h($aggregate->summary_available) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sub County') ?></th>
                    <td><?= $aggregate->has('sub_county') ? $this->Html->link($aggregate->sub_county->id, ['controller' => 'SubCounties', 'action' => 'view', $aggregate->sub_county->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= $aggregate->has('designation') ? $this->Html->link($aggregate->designation->name, ['controller' => 'Designations', 'action' => 'view', $aggregate->designation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference No') ?></th>
                    <td><?= h($aggregate->reference_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Messageid') ?></th>
                    <td><?= h($aggregate->messageid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company Code') ?></th>
                    <td><?= h($aggregate->company_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company Name') ?></th>
                    <td><?= h($aggregate->company_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email') ?></th>
                    <td><?= h($aggregate->reporter_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('E2b Type') ?></th>
                    <td><?= h($aggregate->e2b_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('E2b File') ?></th>
                    <td><?= h($aggregate->e2b_file) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dir') ?></th>
                    <td><?= h($aggregate->dir) ?></td>
                </tr>
                <tr>
                    <th><?= __('Size') ?></th>
                    <td><?= h($aggregate->size) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($aggregate->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name') ?></th>
                    <td><?= h($aggregate->reporter_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone') ?></th>
                    <td><?= h($aggregate->reporter_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Person Submitting') ?></th>
                    <td><?= h($aggregate->person_submitting) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name Diff') ?></th>
                    <td><?= h($aggregate->reporter_name_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email Diff') ?></th>
                    <td><?= h($aggregate->reporter_email_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone Diff') ?></th>
                    <td><?= h($aggregate->reporter_phone_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Resubmit') ?></th>
                    <td><?= h($aggregate->resubmit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($aggregate->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Brand Name') ?></th>
                    <td><?= h($aggregate->brand_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Inn Name') ?></th>
                    <td><?= h($aggregate->inn_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mah') ?></th>
                    <td><?= h($aggregate->mah) ?></td>
                </tr>
                <tr>
                    <th><?= __('Local Technical') ?></th>
                    <td><?= h($aggregate->local_technical) ?></td>
                </tr>
                <tr>
                    <th><?= __('Therapeutic Group') ?></th>
                    <td><?= h($aggregate->therapeutic_group) ?></td>
                </tr>
                <tr>
                    <th><?= __('Authorised Indications') ?></th>
                    <td><?= h($aggregate->authorised_indications) ?></td>
                </tr>
                <tr>
                    <th><?= __('Form Strength') ?></th>
                    <td><?= h($aggregate->form_strength) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submission Frequency') ?></th>
                    <td><?= h($aggregate->submission_frequency) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Type') ?></th>
                    <td><?= h($aggregate->report_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manager Submitted') ?></th>
                    <td><?= h($aggregate->manager_submitted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($aggregate->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aggregate Id') ?></th>
                    <td><?= $aggregate->aggregate_id === null ? '' : $this->Number->format($aggregate->aggregate_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned To') ?></th>
                    <td><?= $aggregate->assigned_to === null ? '' : $this->Number->format($aggregate->assigned_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned By') ?></th>
                    <td><?= $aggregate->assigned_by === null ? '' : $this->Number->format($aggregate->assigned_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted') ?></th>
                    <td><?= $aggregate->submitted === null ? '' : $this->Number->format($aggregate->submitted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Designation') ?></th>
                    <td><?= $aggregate->reporter_designation === null ? '' : $this->Number->format($aggregate->reporter_designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Designation Diff') ?></th>
                    <td><?= $aggregate->reporter_designation_diff === null ? '' : $this->Number->format($aggregate->reporter_designation_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $aggregate->active === null ? '' : $this->Number->format($aggregate->active) ?></td>
                </tr>
                <tr>
                    <th><?= __('Copied') ?></th>
                    <td><?= $aggregate->copied === null ? '' : $this->Number->format($aggregate->copied) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived') ?></th>
                    <td><?= $aggregate->archived === null ? '' : $this->Number->format($aggregate->archived) ?></td>
                </tr>
                <tr>
                    <th><?= __('Interval Code') ?></th>
                    <td><?= $aggregate->interval_code === null ? '' : $this->Number->format($aggregate->interval_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned Date') ?></th>
                    <td><?= h($aggregate->assigned_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted Date') ?></th>
                    <td><?= h($aggregate->submitted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date') ?></th>
                    <td><?= h($aggregate->reporter_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Date Diff') ?></th>
                    <td><?= h($aggregate->reporter_date_diff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Archived Date') ?></th>
                    <td><?= h($aggregate->archived_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($aggregate->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($aggregate->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Action Date') ?></th>
                    <td><?= h($aggregate->action_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($aggregate->deleted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reminder Date') ?></th>
                    <td><?= h($aggregate->reminder_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Signature') ?></th>
                    <td><?= $aggregate->signature ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $aggregate->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Manager Initiated') ?></th>
                    <td><?= $aggregate->manager_initiated ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comment') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregate->comment)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('E2b Content') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregate->e2b_content)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Introduction') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregate->introduction)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Worldwide Marketing') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregate->worldwide_marketing)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Action Taken') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregate->action_taken)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Reference Changes') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregate->reference_changes)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Estimated Exposure') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregate->estimated_exposure)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Clinical Findings') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregate->clinical_findings)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Efficacy') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregate->efficacy)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Late Breaking') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregate->late_breaking)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Safety Concerns') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregate->safety_concerns)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Risks Evaluation') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregate->risks_evaluation)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Risks Characterisation') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregate->risks_characterisation)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Benefit Evaluation') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregate->benefit_evaluation)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Risk Balance') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregate->risk_balance)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Recommendation') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregate->recommendation)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Conclusion') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($aggregate->conclusion)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Aggregates') ?></h4>
                <?php if (!empty($aggregate->aggregates)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Aggregate Id') ?></th>
                            <th><?= __('County Id') ?></th>
                            <th><?= __('Summary Available') ?></th>
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
                            <th><?= __('Brand Name') ?></th>
                            <th><?= __('Inn Name') ?></th>
                            <th><?= __('Mah') ?></th>
                            <th><?= __('Local Technical') ?></th>
                            <th><?= __('Therapeutic Group') ?></th>
                            <th><?= __('Authorised Indications') ?></th>
                            <th><?= __('Form Strength') ?></th>
                            <th><?= __('Interval Code') ?></th>
                            <th><?= __('Submission Frequency') ?></th>
                            <th><?= __('Reminder Date') ?></th>
                            <th><?= __('Introduction') ?></th>
                            <th><?= __('Worldwide Marketing') ?></th>
                            <th><?= __('Action Taken') ?></th>
                            <th><?= __('Reference Changes') ?></th>
                            <th><?= __('Estimated Exposure') ?></th>
                            <th><?= __('Clinical Findings') ?></th>
                            <th><?= __('Efficacy') ?></th>
                            <th><?= __('Late Breaking') ?></th>
                            <th><?= __('Safety Concerns') ?></th>
                            <th><?= __('Risks Evaluation') ?></th>
                            <th><?= __('Risks Characterisation') ?></th>
                            <th><?= __('Benefit Evaluation') ?></th>
                            <th><?= __('Risk Balance') ?></th>
                            <th><?= __('Recommendation') ?></th>
                            <th><?= __('Conclusion') ?></th>
                            <th><?= __('Report Type') ?></th>
                            <th><?= __('Manager Initiated') ?></th>
                            <th><?= __('Manager Submitted') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($aggregate->aggregates as $aggregates) : ?>
                        <tr>
                            <td><?= h($aggregates->id) ?></td>
                            <td><?= h($aggregates->user_id) ?></td>
                            <td><?= h($aggregates->aggregate_id) ?></td>
                            <td><?= h($aggregates->county_id) ?></td>
                            <td><?= h($aggregates->summary_available) ?></td>
                            <td><?= h($aggregates->sub_county_id) ?></td>
                            <td><?= h($aggregates->designation_id) ?></td>
                            <td><?= h($aggregates->reference_no) ?></td>
                            <td><?= h($aggregates->messageid) ?></td>
                            <td><?= h($aggregates->assigned_to) ?></td>
                            <td><?= h($aggregates->assigned_by) ?></td>
                            <td><?= h($aggregates->company_code) ?></td>
                            <td><?= h($aggregates->company_name) ?></td>
                            <td><?= h($aggregates->comment) ?></td>
                            <td><?= h($aggregates->reporter_email) ?></td>
                            <td><?= h($aggregates->e2b_content) ?></td>
                            <td><?= h($aggregates->e2b_type) ?></td>
                            <td><?= h($aggregates->e2b_file) ?></td>
                            <td><?= h($aggregates->dir) ?></td>
                            <td><?= h($aggregates->size) ?></td>
                            <td><?= h($aggregates->type) ?></td>
                            <td><?= h($aggregates->assigned_date) ?></td>
                            <td><?= h($aggregates->signature) ?></td>
                            <td><?= h($aggregates->submitted) ?></td>
                            <td><?= h($aggregates->submitted_date) ?></td>
                            <td><?= h($aggregates->reporter_name) ?></td>
                            <td><?= h($aggregates->reporter_designation) ?></td>
                            <td><?= h($aggregates->reporter_phone) ?></td>
                            <td><?= h($aggregates->reporter_date) ?></td>
                            <td><?= h($aggregates->person_submitting) ?></td>
                            <td><?= h($aggregates->reporter_name_diff) ?></td>
                            <td><?= h($aggregates->reporter_designation_diff) ?></td>
                            <td><?= h($aggregates->reporter_email_diff) ?></td>
                            <td><?= h($aggregates->reporter_phone_diff) ?></td>
                            <td><?= h($aggregates->reporter_date_diff) ?></td>
                            <td><?= h($aggregates->resubmit) ?></td>
                            <td><?= h($aggregates->status) ?></td>
                            <td><?= h($aggregates->active) ?></td>
                            <td><?= h($aggregates->copied) ?></td>
                            <td><?= h($aggregates->archived) ?></td>
                            <td><?= h($aggregates->archived_date) ?></td>
                            <td><?= h($aggregates->created) ?></td>
                            <td><?= h($aggregates->modified) ?></td>
                            <td><?= h($aggregates->action_date) ?></td>
                            <td><?= h($aggregates->deleted) ?></td>
                            <td><?= h($aggregates->deleted_date) ?></td>
                            <td><?= h($aggregates->brand_name) ?></td>
                            <td><?= h($aggregates->inn_name) ?></td>
                            <td><?= h($aggregates->mah) ?></td>
                            <td><?= h($aggregates->local_technical) ?></td>
                            <td><?= h($aggregates->therapeutic_group) ?></td>
                            <td><?= h($aggregates->authorised_indications) ?></td>
                            <td><?= h($aggregates->form_strength) ?></td>
                            <td><?= h($aggregates->interval_code) ?></td>
                            <td><?= h($aggregates->submission_frequency) ?></td>
                            <td><?= h($aggregates->reminder_date) ?></td>
                            <td><?= h($aggregates->introduction) ?></td>
                            <td><?= h($aggregates->worldwide_marketing) ?></td>
                            <td><?= h($aggregates->action_taken) ?></td>
                            <td><?= h($aggregates->reference_changes) ?></td>
                            <td><?= h($aggregates->estimated_exposure) ?></td>
                            <td><?= h($aggregates->clinical_findings) ?></td>
                            <td><?= h($aggregates->efficacy) ?></td>
                            <td><?= h($aggregates->late_breaking) ?></td>
                            <td><?= h($aggregates->safety_concerns) ?></td>
                            <td><?= h($aggregates->risks_evaluation) ?></td>
                            <td><?= h($aggregates->risks_characterisation) ?></td>
                            <td><?= h($aggregates->benefit_evaluation) ?></td>
                            <td><?= h($aggregates->risk_balance) ?></td>
                            <td><?= h($aggregates->recommendation) ?></td>
                            <td><?= h($aggregates->conclusion) ?></td>
                            <td><?= h($aggregates->report_type) ?></td>
                            <td><?= h($aggregates->manager_initiated) ?></td>
                            <td><?= h($aggregates->manager_submitted) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Aggregates', 'action' => 'view', $aggregates->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Aggregates', 'action' => 'edit', $aggregates->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Aggregates', 'action' => 'delete', $aggregates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aggregates->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Aggregate List Of Signals') ?></h4>
                <?php if (!empty($aggregate->aggregate_list_of_signals)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Aggregate Id') ?></th>
                            <th><?= __('Aggregate Followup Id') ?></th>
                            <th><?= __('Signal Term') ?></th>
                            <th><?= __('Source Trigger') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Outcome') ?></th>
                            <th><?= __('Date Detected') ?></th>
                            <th><?= __('Date Closed') ?></th>
                            <th><?= __('Reason Summary') ?></th>
                            <th><?= __('Evaluation Method') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($aggregate->aggregate_list_of_signals as $aggregateListOfSignals) : ?>
                        <tr>
                            <td><?= h($aggregateListOfSignals->id) ?></td>
                            <td><?= h($aggregateListOfSignals->aggregate_id) ?></td>
                            <td><?= h($aggregateListOfSignals->aggregate_followup_id) ?></td>
                            <td><?= h($aggregateListOfSignals->signal_term) ?></td>
                            <td><?= h($aggregateListOfSignals->source_trigger) ?></td>
                            <td><?= h($aggregateListOfSignals->status) ?></td>
                            <td><?= h($aggregateListOfSignals->outcome) ?></td>
                            <td><?= h($aggregateListOfSignals->date_detected) ?></td>
                            <td><?= h($aggregateListOfSignals->date_closed) ?></td>
                            <td><?= h($aggregateListOfSignals->reason_summary) ?></td>
                            <td><?= h($aggregateListOfSignals->evaluation_method) ?></td>
                            <td><?= h($aggregateListOfSignals->created) ?></td>
                            <td><?= h($aggregateListOfSignals->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AggregateListOfSignals', 'action' => 'view', $aggregateListOfSignals->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AggregateListOfSignals', 'action' => 'edit', $aggregateListOfSignals->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AggregateListOfSignals', 'action' => 'delete', $aggregateListOfSignals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aggregateListOfSignals->id)]) ?>
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
