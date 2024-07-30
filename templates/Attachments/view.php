<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attachment $attachment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Attachment'), ['action' => 'edit', $attachment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Attachment'), ['action' => 'delete', $attachment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attachment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Attachments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Attachment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="attachments view content">
            <h3><?= h($attachment->basename) ?></h3>
            <table>
                <tr>
                    <th><?= __('Model') ?></th>
                    <td><?= h($attachment->model) ?></td>
                </tr>
                <tr>
                    <th><?= __('File') ?></th>
                    <td><?= h($attachment->file) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dirname') ?></th>
                    <td><?= h($attachment->dirname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Basename') ?></th>
                    <td><?= h($attachment->basename) ?></td>
                </tr>
                <tr>
                    <th><?= __('Checksum') ?></th>
                    <td><?= h($attachment->checksum) ?></td>
                </tr>
                <tr>
                    <th><?= __('Alternative') ?></th>
                    <td><?= h($attachment->alternative) ?></td>
                </tr>
                <tr>
                    <th><?= __('Group') ?></th>
                    <td><?= h($attachment->group) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= h($attachment->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pocket Name') ?></th>
                    <td><?= h($attachment->pocket_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Version No') ?></th>
                    <td><?= h($attachment->version_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($attachment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Foreign Key') ?></th>
                    <td><?= $this->Number->format($attachment->foreign_key) ?></td>
                </tr>
                <tr>
                    <th><?= __('File Date') ?></th>
                    <td><?= h($attachment->file_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($attachment->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($attachment->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($attachment->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
