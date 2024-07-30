<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArosAco $arosAco
 * @var string[]|\Cake\Collection\CollectionInterface $aros
 * @var string[]|\Cake\Collection\CollectionInterface $acos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $arosAco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $arosAco->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Aros Acos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="arosAcos form content">
            <?= $this->Form->create($arosAco) ?>
            <fieldset>
                <legend><?= __('Edit Aros Aco') ?></legend>
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
