<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attachment $attachment
 */
?>

<div class="row-fluid">
    <div class="span4">
    <aside class="column">
                <div class="side-nav">
                    <h4 class="heading"><?= __('Actions') ?></h4>
                    <?= $this->Html->link(__('List Attachments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                </div>
            </aside>
    </div>
    <div class="span8">
        <div class="row">
           
            <div class="column-responsive column-80">
                <div class="attachments form content">
                    <!-- <?= $this->Form->create($attachment) ?> -->
                    <?= $this->Form->create($attachment, ['type' => 'file']); ?>
                    <fieldset>
                        <legend><?= __('Add Attachment') ?></legend>
                        <?php
                        echo $this->Form->control('model');
                        echo $this->Form->control('file',array('type'=>'file'));
                        echo $this->Form->control('foreign_key');
                        // echo $this->Form->control('dirname');
                        echo $this->Form->control('basename',array('type'=>'hidden'));
                        echo $this->Form->control('checksum',array('type'=>'hidden'));
                        // echo $this->Form->control('alternative');
                        // echo $this->Form->control('group');
                        echo $this->Form->control('description');
                        // echo $this->Form->control('year');
                        // echo $this->Form->control('file_date', ['empty' => true]);
                        // echo $this->Form->control('pocket_name');
                        // echo $this->Form->control('version_no');
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Submit')) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>