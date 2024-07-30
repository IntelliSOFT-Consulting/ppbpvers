<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aro $aro
 * @var \Cake\Collection\CollectionInterface|string[] $parentAros
 * @var \Cake\Collection\CollectionInterface|string[] $acos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Aros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aros form content">
            <?= $this->Form->create($aro) ?>
            <fieldset>
                <legend><?= __('Add Aro') ?></legend>
                <?php
                    echo $this->Form->control('parent_id', ['options' => $parentAros, 'empty' => true]);
                    echo $this->Form->control('model');
                    echo $this->Form->control('foreign_key');
                    echo $this->Form->control('alias');
                    echo $this->Form->control('acos._ids', ['options' => $acos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
