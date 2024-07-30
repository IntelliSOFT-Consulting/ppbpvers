<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Drug $drug
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Drugs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="drugs form content">
            <?= $this->Form->create($drug) ?>
            <fieldset>
                <legend><?= __('Add Drug') ?></legend>
                <?php
                    echo $this->Form->control('brand_name');
                    echo $this->Form->control('inn_name');
                    echo $this->Form->control('manufacturer');
                    echo $this->Form->control('local_trade_rep');
                    echo $this->Form->control('batch_number');
                    echo $this->Form->control('registration_status');
                    echo $this->Form->control('retention_status');
                    echo $this->Form->control('donation');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
