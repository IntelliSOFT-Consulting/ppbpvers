<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pocket $pocket
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Pockets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pockets form content">
            <?= $this->Form->create($pocket) ?>
            <fieldset>
                <legend><?= __('Add Pocket') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('content');
                    echo $this->Form->control('required');
                    echo $this->Form->control('item_number');
                    echo $this->Form->control('type');
                    echo $this->Form->control('deleted');
                    echo $this->Form->control('deleted_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
