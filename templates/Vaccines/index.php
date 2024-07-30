<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Vaccine> $vaccines
 */
?>
<div class="vaccines index content">
    <?= $this->Html->link(__('New Vaccine'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vaccines') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('vaccine_name') ?></th>
                    <th><?= $this->Paginator->sort('health_program') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('deleted_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vaccines as $vaccine): ?>
                <tr>
                    <td><?= $this->Number->format($vaccine->id) ?></td>
                    <td><?= h($vaccine->vaccine_name) ?></td>
                    <td><?= h($vaccine->health_program) ?></td>
                    <td><?= h($vaccine->created) ?></td>
                    <td><?= h($vaccine->modified) ?></td>
                    <td><?= h($vaccine->deleted) ?></td>
                    <td><?= h($vaccine->deleted_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $vaccine->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vaccine->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vaccine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vaccine->id)]) ?>
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
