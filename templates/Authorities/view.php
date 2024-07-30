<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Authority $authority
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Authority'), ['action' => 'edit', $authority->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Authority'), ['action' => 'delete', $authority->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authority->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Authorities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Authority'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="authorities view content">
            <h3><?= h($authority->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Mah Name') ?></th>
                    <td><?= h($authority->mah_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mah Company Name') ?></th>
                    <td><?= h($authority->mah_company_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mah Company Address') ?></th>
                    <td><?= h($authority->mah_company_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mah Company Telephone') ?></th>
                    <td><?= h($authority->mah_company_telephone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mah Company Email') ?></th>
                    <td><?= h($authority->mah_company_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Master Mah') ?></th>
                    <td><?= h($authority->master_mah) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($authority->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $authority->product === null ? '' : $this->Number->format($authority->product) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
