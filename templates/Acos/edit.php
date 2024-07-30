<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aco $aco
 * @var string[]|\Cake\Collection\CollectionInterface $parentAcos
 * @var string[]|\Cake\Collection\CollectionInterface $aros
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aco->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Acos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="acos form content">
            <?= $this->Form->create($aco) ?>
            <fieldset>
                <legend><?= __('Edit Aco') ?></legend>
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
