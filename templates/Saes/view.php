<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sae $sae
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sae'), ['action' => 'edit', $sae->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sae'), ['action' => 'delete', $sae->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sae->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Saes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sae'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="saes view content">
            <h3><?= h($sae->email_address) ?></h3>
            <table>
                <tr>
                    <th><?= __('Reference No') ?></th>
                    <td><?= h($sae->reference_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Form Type') ?></th>
                    <td><?= h($sae->form_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $sae->has('user') ? $this->Html->link($sae->user->name, ['controller' => 'Users', 'action' => 'view', $sae->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Initials') ?></th>
                    <td><?= h($sae->patient_initials) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= $sae->has('country') ? $this->Html->link($sae->country->name, ['controller' => 'Countries', 'action' => 'view', $sae->country->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= h($sae->gender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Causality') ?></th>
                    <td><?= h($sae->causality) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manufacturer Name') ?></th>
                    <td><?= h($sae->manufacturer_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mfr No') ?></th>
                    <td><?= h($sae->mfr_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Type') ?></th>
                    <td><?= h($sae->report_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Address') ?></th>
                    <td><?= h($sae->email_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Name') ?></th>
                    <td><?= h($sae->reporter_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone') ?></th>
                    <td><?= h($sae->reporter_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email') ?></th>
                    <td><?= h($sae->reporter_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sae->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Application Id') ?></th>
                    <td><?= $sae->application_id === null ? '' : $this->Number->format($sae->application_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sae Id') ?></th>
                    <td><?= $sae->sae_id === null ? '' : $this->Number->format($sae->sae_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Age Years') ?></th>
                    <td><?= $sae->age_years === null ? '' : $this->Number->format($sae->age_years) ?></td>
                </tr>
                <tr>
                    <th><?= __('Approved') ?></th>
                    <td><?= $sae->approved === null ? '' : $this->Number->format($sae->approved) ?></td>
                </tr>
                <tr>
                    <th><?= __('Approved By') ?></th>
                    <td><?= $sae->approved_by === null ? '' : $this->Number->format($sae->approved_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned To') ?></th>
                    <td><?= $sae->assigned_to === null ? '' : $this->Number->format($sae->assigned_to) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned By') ?></th>
                    <td><?= $sae->assigned_by === null ? '' : $this->Number->format($sae->assigned_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Birth') ?></th>
                    <td><?= h($sae->date_of_birth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enrollment Date') ?></th>
                    <td><?= h($sae->enrollment_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Administration Date') ?></th>
                    <td><?= h($sae->administration_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Latest Date') ?></th>
                    <td><?= h($sae->latest_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Onset') ?></th>
                    <td><?= h($sae->reaction_onset) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction End Date') ?></th>
                    <td><?= h($sae->reaction_end_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manufacturer Date') ?></th>
                    <td><?= h($sae->manufacturer_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Report Date') ?></th>
                    <td><?= h($sae->report_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted Date') ?></th>
                    <td><?= h($sae->submitted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Assigned Date') ?></th>
                    <td><?= h($sae->assigned_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted Date') ?></th>
                    <td><?= h($sae->deleted_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($sae->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($sae->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Patient Died') ?></th>
                    <td><?= $sae->patient_died ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Prolonged Hospitalization') ?></th>
                    <td><?= $sae->prolonged_hospitalization ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Incapacity') ?></th>
                    <td><?= $sae->incapacity ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Life Threatening') ?></th>
                    <td><?= $sae->life_threatening ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Other') ?></th>
                    <td><?= $sae->reaction_other ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Source Study') ?></th>
                    <td><?= $sae->source_study ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Source Literature') ?></th>
                    <td><?= $sae->source_literature ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Source Health Professional') ?></th>
                    <td><?= $sae->source_health_professional ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted') ?></th>
                    <td><?= $sae->deleted ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Reaction Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($sae->reaction_description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Relevant History') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($sae->relevant_history)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Saes') ?></h4>
                <?php if (!empty($sae->saes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Application Id') ?></th>
                            <th><?= __('Sae Id') ?></th>
                            <th><?= __('Reference No') ?></th>
                            <th><?= __('Form Type') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Patient Initials') ?></th>
                            <th><?= __('Country Id') ?></th>
                            <th><?= __('Date Of Birth') ?></th>
                            <th><?= __('Age Years') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Causality') ?></th>
                            <th><?= __('Enrollment Date') ?></th>
                            <th><?= __('Administration Date') ?></th>
                            <th><?= __('Latest Date') ?></th>
                            <th><?= __('Reaction Onset') ?></th>
                            <th><?= __('Reaction End Date') ?></th>
                            <th><?= __('Patient Died') ?></th>
                            <th><?= __('Prolonged Hospitalization') ?></th>
                            <th><?= __('Incapacity') ?></th>
                            <th><?= __('Life Threatening') ?></th>
                            <th><?= __('Reaction Other') ?></th>
                            <th><?= __('Reaction Description') ?></th>
                            <th><?= __('Relevant History') ?></th>
                            <th><?= __('Manufacturer Name') ?></th>
                            <th><?= __('Mfr No') ?></th>
                            <th><?= __('Manufacturer Date') ?></th>
                            <th><?= __('Source Study') ?></th>
                            <th><?= __('Source Literature') ?></th>
                            <th><?= __('Source Health Professional') ?></th>
                            <th><?= __('Report Date') ?></th>
                            <th><?= __('Submitted Date') ?></th>
                            <th><?= __('Report Type') ?></th>
                            <th><?= __('Approved') ?></th>
                            <th><?= __('Approved By') ?></th>
                            <th><?= __('Email Address') ?></th>
                            <th><?= __('Reporter Name') ?></th>
                            <th><?= __('Reporter Phone') ?></th>
                            <th><?= __('Reporter Email') ?></th>
                            <th><?= __('Assigned To') ?></th>
                            <th><?= __('Assigned By') ?></th>
                            <th><?= __('Assigned Date') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($sae->saes as $saes) : ?>
                        <tr>
                            <td><?= h($saes->id) ?></td>
                            <td><?= h($saes->application_id) ?></td>
                            <td><?= h($saes->sae_id) ?></td>
                            <td><?= h($saes->reference_no) ?></td>
                            <td><?= h($saes->form_type) ?></td>
                            <td><?= h($saes->user_id) ?></td>
                            <td><?= h($saes->patient_initials) ?></td>
                            <td><?= h($saes->country_id) ?></td>
                            <td><?= h($saes->date_of_birth) ?></td>
                            <td><?= h($saes->age_years) ?></td>
                            <td><?= h($saes->gender) ?></td>
                            <td><?= h($saes->causality) ?></td>
                            <td><?= h($saes->enrollment_date) ?></td>
                            <td><?= h($saes->administration_date) ?></td>
                            <td><?= h($saes->latest_date) ?></td>
                            <td><?= h($saes->reaction_onset) ?></td>
                            <td><?= h($saes->reaction_end_date) ?></td>
                            <td><?= h($saes->patient_died) ?></td>
                            <td><?= h($saes->prolonged_hospitalization) ?></td>
                            <td><?= h($saes->incapacity) ?></td>
                            <td><?= h($saes->life_threatening) ?></td>
                            <td><?= h($saes->reaction_other) ?></td>
                            <td><?= h($saes->reaction_description) ?></td>
                            <td><?= h($saes->relevant_history) ?></td>
                            <td><?= h($saes->manufacturer_name) ?></td>
                            <td><?= h($saes->mfr_no) ?></td>
                            <td><?= h($saes->manufacturer_date) ?></td>
                            <td><?= h($saes->source_study) ?></td>
                            <td><?= h($saes->source_literature) ?></td>
                            <td><?= h($saes->source_health_professional) ?></td>
                            <td><?= h($saes->report_date) ?></td>
                            <td><?= h($saes->submitted_date) ?></td>
                            <td><?= h($saes->report_type) ?></td>
                            <td><?= h($saes->approved) ?></td>
                            <td><?= h($saes->approved_by) ?></td>
                            <td><?= h($saes->email_address) ?></td>
                            <td><?= h($saes->reporter_name) ?></td>
                            <td><?= h($saes->reporter_phone) ?></td>
                            <td><?= h($saes->reporter_email) ?></td>
                            <td><?= h($saes->assigned_to) ?></td>
                            <td><?= h($saes->assigned_by) ?></td>
                            <td><?= h($saes->assigned_date) ?></td>
                            <td><?= h($saes->deleted) ?></td>
                            <td><?= h($saes->deleted_date) ?></td>
                            <td><?= h($saes->created) ?></td>
                            <td><?= h($saes->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Saes', 'action' => 'view', $saes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Saes', 'action' => 'edit', $saes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Saes', 'action' => 'delete', $saes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $saes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Concomittant Drugs') ?></h4>
                <?php if (!empty($sae->concomittant_drugs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Sae Id') ?></th>
                            <th><?= __('Generic Name') ?></th>
                            <th><?= __('Dose') ?></th>
                            <th><?= __('Route Id') ?></th>
                            <th><?= __('Indication') ?></th>
                            <th><?= __('Date From') ?></th>
                            <th><?= __('Date To') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($sae->concomittant_drugs as $concomittantDrugs) : ?>
                        <tr>
                            <td><?= h($concomittantDrugs->id) ?></td>
                            <td><?= h($concomittantDrugs->sae_id) ?></td>
                            <td><?= h($concomittantDrugs->generic_name) ?></td>
                            <td><?= h($concomittantDrugs->dose) ?></td>
                            <td><?= h($concomittantDrugs->route_id) ?></td>
                            <td><?= h($concomittantDrugs->indication) ?></td>
                            <td><?= h($concomittantDrugs->date_from) ?></td>
                            <td><?= h($concomittantDrugs->date_to) ?></td>
                            <td><?= h($concomittantDrugs->description) ?></td>
                            <td><?= h($concomittantDrugs->deleted) ?></td>
                            <td><?= h($concomittantDrugs->deleted_date) ?></td>
                            <td><?= h($concomittantDrugs->created) ?></td>
                            <td><?= h($concomittantDrugs->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ConcomittantDrugs', 'action' => 'view', $concomittantDrugs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ConcomittantDrugs', 'action' => 'edit', $concomittantDrugs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ConcomittantDrugs', 'action' => 'delete', $concomittantDrugs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $concomittantDrugs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Suspected Drugs') ?></h4>
                <?php if (!empty($sae->suspected_drugs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Sae Id') ?></th>
                            <th><?= __('Generic Name') ?></th>
                            <th><?= __('Dose') ?></th>
                            <th><?= __('Route Id') ?></th>
                            <th><?= __('Indication') ?></th>
                            <th><?= __('Date From') ?></th>
                            <th><?= __('Date To') ?></th>
                            <th><?= __('Therapy Duration') ?></th>
                            <th><?= __('Reaction Abate') ?></th>
                            <th><?= __('Reaction Reappear') ?></th>
                            <th><?= __('Deleted') ?></th>
                            <th><?= __('Deleted Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($sae->suspected_drugs as $suspectedDrugs) : ?>
                        <tr>
                            <td><?= h($suspectedDrugs->id) ?></td>
                            <td><?= h($suspectedDrugs->sae_id) ?></td>
                            <td><?= h($suspectedDrugs->generic_name) ?></td>
                            <td><?= h($suspectedDrugs->dose) ?></td>
                            <td><?= h($suspectedDrugs->route_id) ?></td>
                            <td><?= h($suspectedDrugs->indication) ?></td>
                            <td><?= h($suspectedDrugs->date_from) ?></td>
                            <td><?= h($suspectedDrugs->date_to) ?></td>
                            <td><?= h($suspectedDrugs->therapy_duration) ?></td>
                            <td><?= h($suspectedDrugs->reaction_abate) ?></td>
                            <td><?= h($suspectedDrugs->reaction_reappear) ?></td>
                            <td><?= h($suspectedDrugs->deleted) ?></td>
                            <td><?= h($suspectedDrugs->deleted_date) ?></td>
                            <td><?= h($suspectedDrugs->created) ?></td>
                            <td><?= h($suspectedDrugs->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'SuspectedDrugs', 'action' => 'view', $suspectedDrugs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'SuspectedDrugs', 'action' => 'edit', $suspectedDrugs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SuspectedDrugs', 'action' => 'delete', $suspectedDrugs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suspectedDrugs->id)]) ?>
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
