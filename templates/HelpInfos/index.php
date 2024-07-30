<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\HelpInfo> $helpInfos
 */
?>
<div class="helpInfos index content">
    <?= $this->Html->link(__('New Help Info'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Help Infos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('field_name') ?></th>
                    <th><?= $this->Paginator->sort('field_label') ?></th>
                    <th><?= $this->Paginator->sort('place_holder') ?></th>
                    <th><?= $this->Paginator->sort('help_type') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('help_text') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($helpInfos as $helpInfo): ?>
                <tr>
                    <td><?= $this->Number->format($helpInfo->id) ?></td>
                    <td><?= h($helpInfo->field_name) ?></td>
                    <td><?= h($helpInfo->field_label) ?></td>
                    <td><?= h($helpInfo->place_holder) ?></td>
                    <td><?= h($helpInfo->help_type) ?></td>
                    <td><?= h($helpInfo->title) ?></td>
                    <td><?= h($helpInfo->help_text) ?></td>
                    <td><?= h($helpInfo->type) ?></td>
                    <td><?= h($helpInfo->created) ?></td>
                    <td><?= h($helpInfo->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $helpInfo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $helpInfo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $helpInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $helpInfo->id)]) ?>
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
