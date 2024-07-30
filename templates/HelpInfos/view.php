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
            <?= $this->Html->link(__('Edit Help Info'), ['action' => 'edit', $helpInfo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Help Info'), ['action' => 'delete', $helpInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $helpInfo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Help Infos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Help Info'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="helpInfos view content">
            <h3><?= h($helpInfo->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Field Name') ?></th>
                    <td><?= h($helpInfo->field_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Field Label') ?></th>
                    <td><?= h($helpInfo->field_label) ?></td>
                </tr>
                <tr>
                    <th><?= __('Place Holder') ?></th>
                    <td><?= h($helpInfo->place_holder) ?></td>
                </tr>
                <tr>
                    <th><?= __('Help Type') ?></th>
                    <td><?= h($helpInfo->help_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($helpInfo->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Help Text') ?></th>
                    <td><?= h($helpInfo->help_text) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($helpInfo->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($helpInfo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($helpInfo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($helpInfo->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Content') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($helpInfo->content)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
