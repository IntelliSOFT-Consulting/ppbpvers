<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Disproportionality> $disproportionalities
 */
?>
<div class="disproportionalities index content">
    <?= $this->Html->link(__('New Disproportionality'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Disproportionalities') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('drug_name') ?></th>
                    <th><?= $this->Paginator->sort('reaction_name') ?></th>
                    <th><?= $this->Paginator->sort('model') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($disproportionalities as $disproportionality): ?>
                <tr>
                    <td><?= $this->Number->format($disproportionality->id) ?></td>
                    <td><?= h($disproportionality->drug_name) ?></td>
                    <td><?= h($disproportionality->reaction_name) ?></td>
                    <td><?= h($disproportionality->model) ?></td>
                    <td><?= h($disproportionality->created) ?></td>
                    <td><?= h($disproportionality->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $disproportionality->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $disproportionality->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $disproportionality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disproportionality->id)]) ?>
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
