<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AutoDrug $autoDrug
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Auto Drug'), ['action' => 'edit', $autoDrug->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Auto Drug'), ['action' => 'delete', $autoDrug->id], ['confirm' => __('Are you sure you want to delete # {0}?', $autoDrug->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Auto Drugs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Auto Drug'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="autoDrugs view content">
            <h3><?= h($autoDrug->drugName) ?></h3>
            <table>
                <tr>
                    <th><?= __('DrugName') ?></th>
                    <td><?= h($autoDrug->drugName) ?></td>
                </tr>
                <tr>
                    <th><?= __('DrugCode') ?></th>
                    <td><?= h($autoDrug->drugCode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($autoDrug->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($autoDrug->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($autoDrug->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('IsGeneric') ?></th>
                    <td><?= $autoDrug->isGeneric ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('IsPreferred') ?></th>
                    <td><?= $autoDrug->isPreferred ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('CountryOfSales') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($autoDrug->countryOfSales)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('ActiveIngredients') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($autoDrug->activeIngredients)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Atcs') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($autoDrug->atcs)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
