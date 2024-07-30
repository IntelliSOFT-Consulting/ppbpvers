<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Khi> $khis
 */
?>
<div class="khis index content">
    <?= $this->Html->link(__('New Khi'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Khis') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('elementId') ?></th>
                    <th><?= $this->Paginator->sort('elementName') ?></th>
                    <th><?= $this->Paginator->sort('deleted') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($khis as $khi): ?>
                <tr>
                    <td><?= $this->Number->format($khi->id) ?></td>
                    <td><?= h($khi->elementId) ?></td>
                    <td><?= h($khi->elementName) ?></td>
                    <td><?= h($khi->deleted) ?></td>
                    <td><?= h($khi->created) ?></td>
                    <td><?= h($khi->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $khi->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $khi->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $khi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $khi->id)]) ?>
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
