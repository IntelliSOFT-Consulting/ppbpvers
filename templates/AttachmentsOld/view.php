<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AttachmentsOld $attachmentsOld
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Attachments Old'), ['action' => 'edit', $attachmentsOld->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Attachments Old'), ['action' => 'delete', $attachmentsOld->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attachmentsOld->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Attachments Old'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Attachments Old'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="attachmentsOld view content">
            <h3><?= h($attachmentsOld->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Sadr') ?></th>
                    <td><?= $attachmentsOld->has('sadr') ? $this->Html->link($attachmentsOld->sadr->id, ['controller' => 'Sadrs', 'action' => 'view', $attachmentsOld->sadr->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sadr Followup') ?></th>
                    <td><?= $attachmentsOld->has('sadr_followup') ? $this->Html->link($attachmentsOld->sadr_followup->id, ['controller' => 'SadrFollowups', 'action' => 'view', $attachmentsOld->sadr_followup->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pqmp') ?></th>
                    <td><?= $attachmentsOld->has('pqmp') ? $this->Html->link($attachmentsOld->pqmp->id, ['controller' => 'Pqmps', 'action' => 'view', $attachmentsOld->pqmp->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Aefi') ?></th>
                    <td><?= $attachmentsOld->has('aefi') ? $this->Html->link($attachmentsOld->aefi->id, ['controller' => 'Aefis', 'action' => 'view', $attachmentsOld->aefi->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Device') ?></th>
                    <td><?= $attachmentsOld->has('device') ? $this->Html->link($attachmentsOld->device->id, ['controller' => 'Devices', 'action' => 'view', $attachmentsOld->device->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Transfusion') ?></th>
                    <td><?= $attachmentsOld->has('transfusion') ? $this->Html->link($attachmentsOld->transfusion->id, ['controller' => 'Transfusions', 'action' => 'view', $attachmentsOld->transfusion->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Medication') ?></th>
                    <td><?= $attachmentsOld->has('medication') ? $this->Html->link($attachmentsOld->medication->id, ['controller' => 'Medications', 'action' => 'view', $attachmentsOld->medication->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Filename') ?></th>
                    <td><?= h($attachmentsOld->filename) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mimetype') ?></th>
                    <td><?= h($attachmentsOld->mimetype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dir') ?></th>
                    <td><?= h($attachmentsOld->dir) ?></td>
                </tr>
                <tr>
                    <th><?= __('File') ?></th>
                    <td><?= h($attachmentsOld->file) ?></td>
                </tr>
                <tr>
                    <th><?= __('Basename') ?></th>
                    <td><?= h($attachmentsOld->basename) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dirname') ?></th>
                    <td><?= h($attachmentsOld->dirname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Checksum') ?></th>
                    <td><?= h($attachmentsOld->checksum) ?></td>
                </tr>
                <tr>
                    <th><?= __('Model') ?></th>
                    <td><?= h($attachmentsOld->model) ?></td>
                </tr>
                <tr>
                    <th><?= __('Alternative') ?></th>
                    <td><?= h($attachmentsOld->alternative) ?></td>
                </tr>
                <tr>
                    <th><?= __('Group') ?></th>
                    <td><?= h($attachmentsOld->group) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($attachmentsOld->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Filesize') ?></th>
                    <td><?= $attachmentsOld->filesize === null ? '' : $this->Number->format($attachmentsOld->filesize) ?></td>
                </tr>
                <tr>
                    <th><?= __('Foreign Key') ?></th>
                    <td><?= $attachmentsOld->foreign_key === null ? '' : $this->Number->format($attachmentsOld->foreign_key) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($attachmentsOld->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($attachmentsOld->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($attachmentsOld->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
