<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HelpInfo $helpInfo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $helpInfo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $helpInfo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Help Infos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="helpInfos form content">
            <?= $this->Form->create($helpInfo) ?>
            <fieldset>
                <legend><?= __('Edit Help Info') ?></legend>
                <?php
                    echo $this->Form->control('field_name');
                    echo $this->Form->control('field_label');
                    echo $this->Form->control('place_holder');
                    echo $this->Form->control('help_type');
                    echo $this->Form->control('title');
                    echo $this->Form->control('content');
                    echo $this->Form->control('help_text');
                    echo $this->Form->control('type');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
