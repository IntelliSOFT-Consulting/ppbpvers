<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SadrDescription $sadrDescription
 * @var \Cake\Collection\CollectionInterface|string[] $sadrs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Sadr Descriptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sadrDescriptions form content">
            <?= $this->Form->create($sadrDescription) ?>
            <fieldset>
                <legend><?= __('Add Sadr Description') ?></legend>
                <?php
                    echo $this->Form->control('sadr_id', ['options' => $sadrs, 'empty' => true]);
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
