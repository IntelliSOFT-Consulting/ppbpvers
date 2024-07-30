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
            <?= $this->Html->link(__('Edit Disproportionality'), ['action' => 'edit', $disproportionality->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Disproportionality'), ['action' => 'delete', $disproportionality->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disproportionality->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Disproportionalities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Disproportionality'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="disproportionalities view content">
            <h3><?= h($disproportionality->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Drug Name') ?></th>
                    <td><?= h($disproportionality->drug_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reaction Name') ?></th>
                    <td><?= h($disproportionality->reaction_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Model') ?></th>
                    <td><?= h($disproportionality->model) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($disproportionality->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($disproportionality->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($disproportionality->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
