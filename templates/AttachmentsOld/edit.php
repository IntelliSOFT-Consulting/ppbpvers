<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AttachmentsOld $attachmentsOld
 * @var string[]|\Cake\Collection\CollectionInterface $sadrs
 * @var string[]|\Cake\Collection\CollectionInterface $sadrFollowups
 * @var string[]|\Cake\Collection\CollectionInterface $pqmps
 * @var string[]|\Cake\Collection\CollectionInterface $aefis
 * @var string[]|\Cake\Collection\CollectionInterface $devices
 * @var string[]|\Cake\Collection\CollectionInterface $transfusions
 * @var string[]|\Cake\Collection\CollectionInterface $medications
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $attachmentsOld->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $attachmentsOld->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Attachments Old'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="attachmentsOld form content">
            <?= $this->Form->create($attachmentsOld) ?>
            <fieldset>
                <legend><?= __('Edit Attachments Old') ?></legend>
                <?php
                    echo $this->Form->control('sadr_id', ['options' => $sadrs, 'empty' => true]);
                    echo $this->Form->control('sadr_followup_id', ['options' => $sadrFollowups, 'empty' => true]);
                    echo $this->Form->control('pqmp_id', ['options' => $pqmps, 'empty' => true]);
                    echo $this->Form->control('aefi_id', ['options' => $aefis, 'empty' => true]);
                    echo $this->Form->control('device_id', ['options' => $devices, 'empty' => true]);
                    echo $this->Form->control('transfusion_id', ['options' => $transfusions, 'empty' => true]);
                    echo $this->Form->control('medication_id', ['options' => $medications, 'empty' => true]);
                    echo $this->Form->control('filename');
                    echo $this->Form->control('description');
                    echo $this->Form->control('mimetype');
                    echo $this->Form->control('filesize');
                    echo $this->Form->control('dir');
                    echo $this->Form->control('file');
                    echo $this->Form->control('basename');
                    echo $this->Form->control('dirname');
                    echo $this->Form->control('checksum');
                    echo $this->Form->control('model');
                    echo $this->Form->control('foreign_key');
                    echo $this->Form->control('alternative');
                    echo $this->Form->control('group');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
