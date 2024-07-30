<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Attachment> $attachments
 */
?>
<div class="attachments index content">
    <?= $this->Html->link(__('New Attachment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Attachments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('model') ?></th>
                    <th><?= $this->Paginator->sort('file') ?></th>
                    <th><?= $this->Paginator->sort('foreign_key') ?></th>
                    <th><?= $this->Paginator->sort('dirname') ?></th>
                    <th><?= $this->Paginator->sort('basename') ?></th>
                    <th><?= $this->Paginator->sort('checksum') ?></th>
                    <th><?= $this->Paginator->sort('alternative') ?></th>
                    <th><?= $this->Paginator->sort('group') ?></th>
                    <th><?= $this->Paginator->sort('year') ?></th>
                    <th><?= $this->Paginator->sort('file_date') ?></th>
                    <th><?= $this->Paginator->sort('pocket_name') ?></th>
                    <th><?= $this->Paginator->sort('version_no') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($attachments as $attachment): ?>
                <tr>
                    <td><?= $this->Number->format($attachment->id) ?></td>
                    <td><?= h($attachment->model) ?></td>
                    <td><?= h($attachment->file) ?></td>
                    <td><?= $this->Number->format($attachment->foreign_key) ?></td>
                    <td><?= h($attachment->dirname) ?></td>
                    <td><?= h($attachment->basename) ?></td>
                    <td><?= h($attachment->checksum) ?></td>
                    <td><?= h($attachment->alternative) ?></td>
                    <td><?= h($attachment->group) ?></td>
                    <td><?= h($attachment->year) ?></td>
                    <td><?= h($attachment->file_date) ?></td>
                    <td><?= h($attachment->pocket_name) ?></td>
                    <td><?= h($attachment->version_no) ?></td>
                    <td><?= h($attachment->created) ?></td>
                    <td><?= h($attachment->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $attachment->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attachment->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $attachment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attachment->id)]) ?>
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
