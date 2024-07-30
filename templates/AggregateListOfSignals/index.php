<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\AggregateListOfSignal> $aggregateListOfSignals
 */
?>
<div class="aggregateListOfSignals index content">
    <?= $this->Html->link(__('New Aggregate List Of Signal'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aggregate List Of Signals') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('aggregate_id') ?></th>
                    <th><?= $this->Paginator->sort('aggregate_followup_id') ?></th>
                    <th><?= $this->Paginator->sort('date_detected') ?></th>
                    <th><?= $this->Paginator->sort('date_closed') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aggregateListOfSignals as $aggregateListOfSignal): ?>
                <tr>
                    <td><?= $this->Number->format($aggregateListOfSignal->id) ?></td>
                    <td><?= $aggregateListOfSignal->has('aggregate') ? $this->Html->link($aggregateListOfSignal->aggregate->id, ['controller' => 'Aggregates', 'action' => 'view', $aggregateListOfSignal->aggregate->id]) : '' ?></td>
                    <td><?= $aggregateListOfSignal->aggregate_followup_id === null ? '' : $this->Number->format($aggregateListOfSignal->aggregate_followup_id) ?></td>
                    <td><?= h($aggregateListOfSignal->date_detected) ?></td>
                    <td><?= h($aggregateListOfSignal->date_closed) ?></td>
                    <td><?= h($aggregateListOfSignal->created) ?></td>
                    <td><?= h($aggregateListOfSignal->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aggregateListOfSignal->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aggregateListOfSignal->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aggregateListOfSignal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aggregateListOfSignal->id)]) ?>
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
