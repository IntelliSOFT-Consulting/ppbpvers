<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ce2bListOfDrug $ce2bListOfDrug
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ce2b List Of Drug'), ['action' => 'edit', $ce2bListOfDrug->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ce2b List Of Drug'), ['action' => 'delete', $ce2bListOfDrug->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ce2bListOfDrug->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ce2b List Of Drugs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ce2b List Of Drug'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ce2bListOfDrugs view content">
            <h3><?= h($ce2bListOfDrug->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ce2b') ?></th>
                    <td><?= $ce2bListOfDrug->has('ce2b') ? $this->Html->link($ce2bListOfDrug->ce2b->id, ['controller' => 'Ce2bs', 'action' => 'view', $ce2bListOfDrug->ce2b->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Dose') ?></th>
                    <td><?= $ce2bListOfDrug->has('dose') ? $this->Html->link($ce2bListOfDrug->dose->name, ['controller' => 'Doses', 'action' => 'view', $ce2bListOfDrug->dose->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Route') ?></th>
                    <td><?= $ce2bListOfDrug->has('route') ? $this->Html->link($ce2bListOfDrug->route->name, ['controller' => 'Routes', 'action' => 'view', $ce2bListOfDrug->route->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Frequency') ?></th>
                    <td><?= $ce2bListOfDrug->has('frequency') ? $this->Html->link($ce2bListOfDrug->frequency->name, ['controller' => 'Frequencies', 'action' => 'view', $ce2bListOfDrug->frequency->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Frequency Id Other') ?></th>
                    <td><?= h($ce2bListOfDrug->frequency_id_other) ?></td>
                </tr>
                <tr>
                    <th><?= __('Drug Name') ?></th>
                    <td><?= h($ce2bListOfDrug->drug_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Brand Name') ?></th>
                    <td><?= h($ce2bListOfDrug->brand_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Batch No') ?></th>
                    <td><?= h($ce2bListOfDrug->batch_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manufacturer') ?></th>
                    <td><?= h($ce2bListOfDrug->manufacturer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dose') ?></th>
                    <td><?= h($ce2bListOfDrug->dose) ?></td>
                </tr>
                <tr>
                    <th><?= __('Indication') ?></th>
                    <td><?= h($ce2bListOfDrug->indication) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suspected Drug') ?></th>
                    <td><?= h($ce2bListOfDrug->suspected_drug) ?></td>
                </tr>
                <tr>
                    <th><?= __('Route') ?></th>
                    <td><?= h($ce2bListOfDrug->route) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ce2bListOfDrug->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ce2b Followup Id') ?></th>
                    <td><?= $ce2bListOfDrug->ce2b_followup_id === null ? '' : $this->Number->format($ce2bListOfDrug->ce2b_followup_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Date') ?></th>
                    <td><?= h($ce2bListOfDrug->start_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stop Date') ?></th>
                    <td><?= h($ce2bListOfDrug->stop_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($ce2bListOfDrug->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($ce2bListOfDrug->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
