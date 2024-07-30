<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disproportionality $disproportionality
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Disproportionalities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="disproportionalities form content">
            <?= $this->Form->create($disproportionality) ?>
            <fieldset>
                <legend><?= __('Add Disproportionality') ?></legend>
                <?php
                    echo $this->Form->control('drug_name');
                    echo $this->Form->control('reaction_name');
                    echo $this->Form->control('model');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
