<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aco $aco
 * @var \Cake\Collection\CollectionInterface|string[] $parentAcos
 * @var \Cake\Collection\CollectionInterface|string[] $aros
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Acos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="acos form content">
            <?= $this->Form->create($aco) ?>
            <fieldset>
                <legend><?= __('Add Aco') ?></legend>
                <?php
                    echo $this->Form->control('parent_id', ['options' => $parentAcos, 'empty' => true]);
                    echo $this->Form->control('model');
                    echo $this->Form->control('foreign_key');
                    echo $this->Form->control('alias');
                    echo $this->Form->control('aros._ids', ['options' => $aros]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
