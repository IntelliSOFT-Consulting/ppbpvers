<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\WhoDrug> $whoDrugs
 */
?>
<div class="whoDrugs index content">
    <?= $this->Html->link(__('New Who Drug'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Who Drugs') ?></h3>
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
                    <th><?= $this->Paginator->sort('generic') ?></th>
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
                <?php foreach ($whoDrugs as $whoDrug): ?>
                <tr>
                    <td><?= $this->Number->format($whoDrug->id) ?></td>
                    <td><?= h($whoDrug->MedId) ?></td>
                    <td><?= h($whoDrug->drug_record_number) ?></td>
                    <td><?= h($whoDrug->sequence_no_1) ?></td>
                    <td><?= h($whoDrug->sequence_no_2) ?></td>
                    <td><?= h($whoDrug->sequence_no_3) ?></td>
                    <td><?= h($whoDrug->sequence_no_4) ?></td>
                    <td><?= h($whoDrug->generic) ?></td>
                    <td><?= h($whoDrug->name_specifier) ?></td>
                    <td><?= h($whoDrug->market_authorization_number) ?></td>
                    <td><?= h($whoDrug->market_authorization_date) ?></td>
                    <td><?= h($whoDrug->market_authorization_withdrawal_date) ?></td>
                    <td><?= h($whoDrug->country) ?></td>
                    <td><?= h($whoDrug->company) ?></td>
                    <td><?= h($whoDrug->marketing_authorization_holder) ?></td>
                    <td><?= h($whoDrug->source_code) ?></td>
                    <td><?= h($whoDrug->source_country) ?></td>
                    <td><?= h($whoDrug->source_year) ?></td>
                    <td><?= h($whoDrug->product_type) ?></td>
                    <td><?= h($whoDrug->product_group) ?></td>
                    <td><?= h($whoDrug->create_date) ?></td>
                    <td><?= h($whoDrug->date_changed) ?></td>
                    <td><?= h($whoDrug->created) ?></td>
                    <td><?= h($whoDrug->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $whoDrug->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $whoDrug->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $whoDrug->id], ['confirm' => __('Are you sure you want to delete # {0}?', $whoDrug->id)]) ?>
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
