<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Khi $khi
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Khis'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="khis form content">
            <?= $this->Form->create($khi) ?>
            <fieldset>
                <legend><?= __('Add Khi') ?></legend>
                <?php
                    echo $this->Form->control('elementId');
                    echo $this->Form->control('elementName');
                    echo $this->Form->control('deleted', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
