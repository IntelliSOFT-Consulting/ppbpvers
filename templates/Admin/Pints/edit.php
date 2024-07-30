<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pint $pint
 * @var string[]|\Cake\Collection\CollectionInterface $transfusions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pint->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pint->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pints'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pints form content">
            <?= $this->Form->create($pint) ?>
            <fieldset>
                <legend><?= __('Edit Pint') ?></legend>
                <?php
                    echo $this->Form->control('transfusion_id', ['options' => $transfusions, 'empty' => true]);
                    echo $this->Form->control('component_type');
                    echo $this->Form->control('pint_no');
                    echo $this->Form->control('expiry_date', ['empty' => true]);
                    echo $this->Form->control('volume_transfused');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
