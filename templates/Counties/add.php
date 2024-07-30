<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\County $county
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Counties'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="counties form content">
            <?= $this->Form->create($county) ?>
            <fieldset>
                <legend><?= __('Add County') ?></legend>
                <?php
                    echo $this->Form->control('county_name');
                    echo $this->Form->control('org_unit');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
