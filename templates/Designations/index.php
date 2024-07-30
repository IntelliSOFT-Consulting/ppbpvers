<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Designation> $designations
 */
?>
<div class="designations index content">
    <?= $this->Html->link(__('New Designation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Designations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('category') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($designations as $designation): ?>
                <tr>
                    <td><?= $this->Number->format($designation->id) ?></td>
                    <td><?= h($designation->name) ?></td>
                    <td><?= $designation->category === null ? '' : $this->Number->format($designation->category) ?></td>
                    <td><?= h($designation->created) ?></td>
                    <td><?= h($designation->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $designation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $designation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $designation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designation->id)]) ?>
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
