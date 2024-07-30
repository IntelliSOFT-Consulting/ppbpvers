<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SadrFollowup $sadrFollowup
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sadr Followup'), ['action' => 'edit', $sadrFollowup->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sadr Followup'), ['action' => 'delete', $sadrFollowup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrFollowup->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sadr Followups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sadr Followup'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sadrFollowups view content">
            <h3><?= h($sadrFollowup->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $sadrFollowup->has('user') ? $this->Html->link($sadrFollowup->user->name, ['controller' => 'Users', 'action' => 'view', $sadrFollowup->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('County') ?></th>
                    <td><?= $sadrFollowup->has('county') ? $this->Html->link($sadrFollowup->county->id, ['controller' => 'Counties', 'action' => 'view', $sadrFollowup->county->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sadr') ?></th>
                    <td><?= $sadrFollowup->has('sadr') ? $this->Html->link($sadrFollowup->sadr->id, ['controller' => 'Sadrs', 'action' => 'view', $sadrFollowup->sadr->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= $sadrFollowup->has('designation') ? $this->Html->link($sadrFollowup->designation->name, ['controller' => 'Designations', 'action' => 'view', $sadrFollowup->designation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Outcome') ?></th>
                    <td><?= h($sadrFollowup->outcome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Email') ?></th>
                    <td><?= h($sadrFollowup->reporter_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reporter Phone') ?></th>
                    <td><?= h($sadrFollowup->reporter_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sadrFollowup->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Submitted') ?></th>
                    <td><?= $sadrFollowup->submitted === null ? '' : $this->Number->format($sadrFollowup->submitted) ?></td>
                </tr>
                <tr>
                    <th><?= __('Emails') ?></th>
                    <td><?= $sadrFollowup->emails === null ? '' : $this->Number->format($sadrFollowup->emails) ?></td>
                </tr>
                <tr>
                    <th><?= __('Device') ?></th>
                    <td><?= $sadrFollowup->device === null ? '' : $this->Number->format($sadrFollowup->device) ?></td>
                </tr>
                <tr>
                    <th><?= __('Notified') ?></th>
                    <td><?= $sadrFollowup->notified === null ? '' : $this->Number->format($sadrFollowup->notified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($sadrFollowup->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($sadrFollowup->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Active') ?></th>
                    <td><?= $sadrFollowup->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description Of Reaction') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($sadrFollowup->description_of_reaction)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Attachments Old') ?></h4>
                <?php if (!empty($sadrFollowup->attachments_old)) : ?>
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
                        <?php foreach ($sadrFollowup->attachments_old as $attachmentsOld) : ?>
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
                <h4><?= __('Related Sadr List Of Drugs') ?></h4>
                <?php if (!empty($sadrFollowup->sadr_list_of_drugs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Sadr Id') ?></th>
                            <th><?= __('Sadr Followup Id') ?></th>
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
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($sadrFollowup->sadr_list_of_drugs as $sadrListOfDrugs) : ?>
                        <tr>
                            <td><?= h($sadrListOfDrugs->id) ?></td>
                            <td><?= h($sadrListOfDrugs->sadr_id) ?></td>
                            <td><?= h($sadrListOfDrugs->sadr_followup_id) ?></td>
                            <td><?= h($sadrListOfDrugs->dose_id) ?></td>
                            <td><?= h($sadrListOfDrugs->route_id) ?></td>
                            <td><?= h($sadrListOfDrugs->frequency_id) ?></td>
                            <td><?= h($sadrListOfDrugs->frequency_id_other) ?></td>
                            <td><?= h($sadrListOfDrugs->drug_name) ?></td>
                            <td><?= h($sadrListOfDrugs->brand_name) ?></td>
                            <td><?= h($sadrListOfDrugs->batch_no) ?></td>
                            <td><?= h($sadrListOfDrugs->manufacturer) ?></td>
                            <td><?= h($sadrListOfDrugs->dose) ?></td>
                            <td><?= h($sadrListOfDrugs->start_date) ?></td>
                            <td><?= h($sadrListOfDrugs->stop_date) ?></td>
                            <td><?= h($sadrListOfDrugs->indication) ?></td>
                            <td><?= h($sadrListOfDrugs->suspected_drug) ?></td>
                            <td><?= h($sadrListOfDrugs->created) ?></td>
                            <td><?= h($sadrListOfDrugs->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'SadrListOfDrugs', 'action' => 'view', $sadrListOfDrugs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'SadrListOfDrugs', 'action' => 'edit', $sadrListOfDrugs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SadrListOfDrugs', 'action' => 'delete', $sadrListOfDrugs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrListOfDrugs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Sadr List Of Medicines') ?></h4>
                <?php if (!empty($sadrFollowup->sadr_list_of_medicines)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Sadr Id') ?></th>
                            <th><?= __('Sadr Followup Id') ?></th>
                            <th><?= __('Dose Id') ?></th>
                            <th><?= __('Route Id') ?></th>
                            <th><?= __('Frequency Id') ?></th>
                            <th><?= __('Frequency Other') ?></th>
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
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($sadrFollowup->sadr_list_of_medicines as $sadrListOfMedicines) : ?>
                        <tr>
                            <td><?= h($sadrListOfMedicines->id) ?></td>
                            <td><?= h($sadrListOfMedicines->sadr_id) ?></td>
                            <td><?= h($sadrListOfMedicines->sadr_followup_id) ?></td>
                            <td><?= h($sadrListOfMedicines->dose_id) ?></td>
                            <td><?= h($sadrListOfMedicines->route_id) ?></td>
                            <td><?= h($sadrListOfMedicines->frequency_id) ?></td>
                            <td><?= h($sadrListOfMedicines->frequency_other) ?></td>
                            <td><?= h($sadrListOfMedicines->drug_name) ?></td>
                            <td><?= h($sadrListOfMedicines->brand_name) ?></td>
                            <td><?= h($sadrListOfMedicines->batch_no) ?></td>
                            <td><?= h($sadrListOfMedicines->manufacturer) ?></td>
                            <td><?= h($sadrListOfMedicines->dose) ?></td>
                            <td><?= h($sadrListOfMedicines->start_date) ?></td>
                            <td><?= h($sadrListOfMedicines->stop_date) ?></td>
                            <td><?= h($sadrListOfMedicines->indication) ?></td>
                            <td><?= h($sadrListOfMedicines->suspected_drug) ?></td>
                            <td><?= h($sadrListOfMedicines->created) ?></td>
                            <td><?= h($sadrListOfMedicines->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'SadrListOfMedicines', 'action' => 'view', $sadrListOfMedicines->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'SadrListOfMedicines', 'action' => 'edit', $sadrListOfMedicines->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SadrListOfMedicines', 'action' => 'delete', $sadrListOfMedicines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sadrListOfMedicines->id)]) ?>
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
