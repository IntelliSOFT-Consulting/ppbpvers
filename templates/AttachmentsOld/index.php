<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\AttachmentsOld> $attachmentsOld
 */
?>
<div class="attachmentsOld index content">
    <?= $this->Html->link(__('New Attachments Old'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Attachments Old') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('sadr_id') ?></th>
                    <th><?= $this->Paginator->sort('sadr_followup_id') ?></th>
                    <th><?= $this->Paginator->sort('pqmp_id') ?></th>
                    <th><?= $this->Paginator->sort('aefi_id') ?></th>
                    <th><?= $this->Paginator->sort('device_id') ?></th>
                    <th><?= $this->Paginator->sort('transfusion_id') ?></th>
                    <th><?= $this->Paginator->sort('medication_id') ?></th>
                    <th><?= $this->Paginator->sort('filename') ?></th>
                    <th><?= $this->Paginator->sort('mimetype') ?></th>
                    <th><?= $this->Paginator->sort('filesize') ?></th>
                    <th><?= $this->Paginator->sort('dir') ?></th>
                    <th><?= $this->Paginator->sort('file') ?></th>
                    <th><?= $this->Paginator->sort('basename') ?></th>
                    <th><?= $this->Paginator->sort('dirname') ?></th>
                    <th><?= $this->Paginator->sort('checksum') ?></th>
                    <th><?= $this->Paginator->sort('model') ?></th>
                    <th><?= $this->Paginator->sort('foreign_key') ?></th>
                    <th><?= $this->Paginator->sort('alternative') ?></th>
                    <th><?= $this->Paginator->sort('group') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($attachmentsOld as $attachmentsOld): ?>
                <tr>
                    <td><?= $this->Number->format($attachmentsOld->id) ?></td>
                    <td><?= $attachmentsOld->has('sadr') ? $this->Html->link($attachmentsOld->sadr->id, ['controller' => 'Sadrs', 'action' => 'view', $attachmentsOld->sadr->id]) : '' ?></td>
                    <td><?= $attachmentsOld->has('sadr_followup') ? $this->Html->link($attachmentsOld->sadr_followup->id, ['controller' => 'SadrFollowups', 'action' => 'view', $attachmentsOld->sadr_followup->id]) : '' ?></td>
                    <td><?= $attachmentsOld->has('pqmp') ? $this->Html->link($attachmentsOld->pqmp->id, ['controller' => 'Pqmps', 'action' => 'view', $attachmentsOld->pqmp->id]) : '' ?></td>
                    <td><?= $attachmentsOld->has('aefi') ? $this->Html->link($attachmentsOld->aefi->id, ['controller' => 'Aefis', 'action' => 'view', $attachmentsOld->aefi->id]) : '' ?></td>
                    <td><?= $attachmentsOld->has('device') ? $this->Html->link($attachmentsOld->device->id, ['controller' => 'Devices', 'action' => 'view', $attachmentsOld->device->id]) : '' ?></td>
                    <td><?= $attachmentsOld->has('transfusion') ? $this->Html->link($attachmentsOld->transfusion->id, ['controller' => 'Transfusions', 'action' => 'view', $attachmentsOld->transfusion->id]) : '' ?></td>
                    <td><?= $attachmentsOld->has('medication') ? $this->Html->link($attachmentsOld->medication->id, ['controller' => 'Medications', 'action' => 'view', $attachmentsOld->medication->id]) : '' ?></td>
                    <td><?= h($attachmentsOld->filename) ?></td>
                    <td><?= h($attachmentsOld->mimetype) ?></td>
                    <td><?= $attachmentsOld->filesize === null ? '' : $this->Number->format($attachmentsOld->filesize) ?></td>
                    <td><?= h($attachmentsOld->dir) ?></td>
                    <td><?= h($attachmentsOld->file) ?></td>
                    <td><?= h($attachmentsOld->basename) ?></td>
                    <td><?= h($attachmentsOld->dirname) ?></td>
                    <td><?= h($attachmentsOld->checksum) ?></td>
                    <td><?= h($attachmentsOld->model) ?></td>
                    <td><?= $attachmentsOld->foreign_key === null ? '' : $this->Number->format($attachmentsOld->foreign_key) ?></td>
                    <td><?= h($attachmentsOld->alternative) ?></td>
                    <td><?= h($attachmentsOld->group) ?></td>
                    <td><?= h($attachmentsOld->created) ?></td>
                    <td><?= h($attachmentsOld->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $attachmentsOld->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attachmentsOld->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $attachmentsOld->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attachmentsOld->id)]) ?>
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
