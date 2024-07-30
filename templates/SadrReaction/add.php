<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SadrReaction $sadrReaction
 * @var \Cake\Collection\CollectionInterface|string[] $sadrs
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Sadr Reaction'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sadrReaction form content">
            <?= $this->Form->create($sadrReaction) ?>
            <fieldset>
                <legend><?= __('Add Sadr Reaction') ?></legend>
                <?php
                    echo $this->Form->control('sadr_id', ['options' => $sadrs, 'empty' => true]);
                    echo $this->Form->control('reaction');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
