<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AefiReaction $aefiReaction
 * @var \Cake\Collection\CollectionInterface|string[] $aefis
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Aefi Reactions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aefiReactions form content">
            <?= $this->Form->create($aefiReaction) ?>
            <fieldset>
                <legend><?= __('Add Aefi Reaction') ?></legend>
                <?php
                    echo $this->Form->control('aefi_id', ['options' => $aefis, 'empty' => true]);
                    echo $this->Form->control('reaction_name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
