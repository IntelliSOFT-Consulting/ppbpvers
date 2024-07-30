<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DrugDictionary> $drugDictionaries
 */
?>
<div class="drugDictionaries index content">
    <?= $this->Html->link(__('New Drug Dictionary'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Drug Dictionaries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('MedId') ?></th>
                    <th><?= $this->Paginator->sort('drug_record_number') ?></th>
                    <th><?= $this->Paginator->sort('sequence_no_1') ?></th>
                    <th><?= $this->Paginator->sort('sequence_no_2') ?></th>
                    <th><?= $this->Paginator->sort('sequence_no_3') ?></th>
                    <th><?= $this->Paginator->sort('sequence_no_4') ?></th>
                    <th><?= $this->Paginator->sort('trade_name') ?></th>
                    <th><?= $this->Paginator->sort('generic') ?></th>
                    <th><?= $this->Paginator->sort('drug_name') ?></th>
                    <th><?= $this->Paginator->sort('health_program') ?></th>
                    <th><?= $this->Paginator->sort('name_specifier') ?></th>
                    <th><?= $this->Paginator->sort('market_authorization_number') ?></th>
                    <th><?= $this->Paginator->sort('market_authorization_date') ?></th>
                    <th><?= $this->Paginator->sort('market_authorization_withdrawal_date') ?></th>
                    <th><?= $this->Paginator->sort('country') ?></th>
                    <th><?= $this->Paginator->sort('company') ?></th>
                    <th><?= $this->Paginator->sort('marketing_authorization_holder') ?></th>
                    <th><?= $this->Paginator->sort('source_code') ?></th>
                    <th><?= $this->Paginator->sort('source_country') ?></th>
                    <th><?= $this->Paginator->sort('source_year') ?></th>
                    <th><?= $this->Paginator->sort('product_type') ?></th>
                    <th><?= $this->Paginator->sort('product_group') ?></th>
                    <th><?= $this->Paginator->sort('create_date') ?></th>
                    <th><?= $this->Paginator->sort('date_changed') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($drugDictionaries as $drugDictionary): ?>
                <tr>
                    <td><?= $this->Number->format($drugDictionary->id) ?></td>
                    <td><?= h($drugDictionary->MedId) ?></td>
                    <td><?= h($drugDictionary->drug_record_number) ?></td>
                    <td><?= h($drugDictionary->sequence_no_1) ?></td>
                    <td><?= h($drugDictionary->sequence_no_2) ?></td>
                    <td><?= h($drugDictionary->sequence_no_3) ?></td>
                    <td><?= h($drugDictionary->sequence_no_4) ?></td>
                    <td><?= h($drugDictionary->trade_name) ?></td>
                    <td><?= h($drugDictionary->generic) ?></td>
                    <td><?= h($drugDictionary->drug_name) ?></td>
                    <td><?= h($drugDictionary->health_program) ?></td>
                    <td><?= h($drugDictionary->name_specifier) ?></td>
                    <td><?= h($drugDictionary->market_authorization_number) ?></td>
                    <td><?= h($drugDictionary->market_authorization_date) ?></td>
                    <td><?= h($drugDictionary->market_authorization_withdrawal_date) ?></td>
                    <td><?= h($drugDictionary->country) ?></td>
                    <td><?= h($drugDictionary->company) ?></td>
                    <td><?= h($drugDictionary->marketing_authorization_holder) ?></td>
                    <td><?= h($drugDictionary->source_code) ?></td>
                    <td><?= h($drugDictionary->source_country) ?></td>
                    <td><?= h($drugDictionary->source_year) ?></td>
                    <td><?= h($drugDictionary->product_type) ?></td>
                    <td><?= h($drugDictionary->product_group) ?></td>
                    <td><?= h($drugDictionary->create_date) ?></td>
                    <td><?= h($drugDictionary->date_changed) ?></td>
                    <td><?= h($drugDictionary->created) ?></td>
                    <td><?= h($drugDictionary->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $drugDictionary->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $drugDictionary->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $drugDictionary->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drugDictionary->id)]) ?>
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
