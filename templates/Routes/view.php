<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Route $route
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Route'), ['action' => 'edit', $route->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Route'), ['action' => 'delete', $route->id], ['confirm' => __('Are you sure you want to delete # {0}?', $route->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Routes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Route'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="routes view content">
            <h3><?= h($route->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Value') ?></th>
                    <td><?= h($route->value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($route->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Icsr Code') ?></th>
                    <td><?= h($route->icsr_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($route->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($route->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($route->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Ce2b List Of Drugs') ?></h4>
                <?php if (!empty($route->ce2b_list_of_drugs)) : ?>
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
                        <?php foreach ($route->ce2b_list_of_drugs as $ce2bListOfDrugs) : ?>
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
                <h4><?= __('Related Concomittant Drugs') ?></h4>
                <?php if (!empty($route->concomittant_drugs)) : ?>
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
                        <?php foreach ($route->concomittant_drugs as $concomittantDrugs) : ?>
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
                <h4><?= __('Related Sadr List Of Drugs') ?></h4>
                <?php if (!empty($route->sadr_list_of_drugs)) : ?>
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
                        <?php foreach ($route->sadr_list_of_drugs as $sadrListOfDrugs) : ?>
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
                <?php if (!empty($route->sadr_list_of_medicines)) : ?>
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
                        <?php foreach ($route->sadr_list_of_medicines as $sadrListOfMedicines) : ?>
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
            <div class="related">
                <h4><?= __('Related Suspected Drugs') ?></h4>
                <?php if (!empty($route->suspected_drugs)) : ?>
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
                        <?php foreach ($route->suspected_drugs as $suspectedDrugs) : ?>
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
