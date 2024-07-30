<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dose $dose
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dose'), ['action' => 'edit', $dose->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dose'), ['action' => 'delete', $dose->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dose->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Doses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dose'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="doses view content">
            <h3><?= h($dose->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Value') ?></th>
                    <td><?= h($dose->value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Icsr Code') ?></th>
                    <td><?= h($dose->icsr_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($dose->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($dose->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($dose->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($dose->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Ce2b List Of Drugs') ?></h4>
                <?php if (!empty($dose->ce2b_list_of_drugs)) : ?>
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
                        <?php foreach ($dose->ce2b_list_of_drugs as $ce2bListOfDrugs) : ?>
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
                <h4><?= __('Related Sadr List Of Drugs') ?></h4>
                <?php if (!empty($dose->sadr_list_of_drugs)) : ?>
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
                        <?php foreach ($dose->sadr_list_of_drugs as $sadrListOfDrugs) : ?>
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
                <?php if (!empty($dose->sadr_list_of_medicines)) : ?>
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
                        <?php foreach ($dose->sadr_list_of_medicines as $sadrListOfMedicines) : ?>
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
