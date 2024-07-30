<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AefiDescription $aefiDescription
 * @var string[]|\Cake\Collection\CollectionInterface $aefis
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aefiDescription->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aefiDescription->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Aefi Descriptions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aefiDescriptions form content">
            <?= $this->Form->create($aefiDescription) ?>
            <fieldset>
                <legend><?= __('Edit Aefi Description') ?></legend>
                <?php
                    echo $this->Form->control('aefi_id', ['options' => $aefis, 'empty' => true]);
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
