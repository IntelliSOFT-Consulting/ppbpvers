<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArosAco $arosAco
 * @var \Cake\Collection\CollectionInterface|string[] $aros
 * @var \Cake\Collection\CollectionInterface|string[] $acos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Aros Acos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="arosAcos form content">
            <?= $this->Form->create($arosAco) ?>
            <fieldset>
                <legend><?= __('Add Aros Aco') ?></legend>
                <?php
                    echo $this->Form->control('aro_id', ['options' => $aros]);
                    echo $this->Form->control('aco_id', ['options' => $acos]);
                    echo $this->Form->control('_create');
                    echo $this->Form->control('_read');
                    echo $this->Form->control('_update');
                    echo $this->Form->control('_delete');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
