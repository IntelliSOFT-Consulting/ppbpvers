<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Frequency $frequency
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Frequencies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="frequencies form content">
            <?= $this->Form->create($frequency) ?>
            <fieldset>
                <legend><?= __('Add Frequency') ?></legend>
                <?php
                    echo $this->Form->control('value');
                    echo $this->Form->control('name');
                    echo $this->Form->control('icsr_code');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
