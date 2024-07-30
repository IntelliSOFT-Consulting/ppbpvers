<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MessagesDelete $messagesDelete
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $messagesDelete->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $messagesDelete->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Messages Delete'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="messagesDelete form content">
            <?= $this->Form->create($messagesDelete) ?>
            <fieldset>
                <legend><?= __('Edit Messages Delete') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('subject');
                    echo $this->Form->control('content');
                    echo $this->Form->control('type');
                    echo $this->Form->control('style');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
