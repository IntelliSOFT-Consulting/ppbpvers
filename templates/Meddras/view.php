<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Meddra $meddra
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Meddra'), ['action' => 'edit', $meddra->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Meddra'), ['action' => 'delete', $meddra->id], ['confirm' => __('Are you sure you want to delete # {0}?', $meddra->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Meddras'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Meddra'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="meddras view content">
            <h3><?= h($meddra->llt_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Llt Name') ?></th>
                    <td><?= h($meddra->llt_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Llt Whoart Code') ?></th>
                    <td><?= h($meddra->llt_whoart_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Llt Harts Code') ?></th>
                    <td><?= h($meddra->llt_harts_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Llt Costart Sym') ?></th>
                    <td><?= h($meddra->llt_costart_sym) ?></td>
                </tr>
                <tr>
                    <th><?= __('Llt Icd9 Code') ?></th>
                    <td><?= h($meddra->llt_icd9_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Llt Icd9cm Code') ?></th>
                    <td><?= h($meddra->llt_icd9cm_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Llt Icd10 Code') ?></th>
                    <td><?= h($meddra->llt_icd10_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Llt Currency') ?></th>
                    <td><?= h($meddra->llt_currency) ?></td>
                </tr>
                <tr>
                    <th><?= __('Llt Jart Code') ?></th>
                    <td><?= h($meddra->llt_jart_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('COL 12') ?></th>
                    <td><?= h($meddra->COL_12) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $meddra->id === null ? '' : $this->Number->format($meddra->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pt Code') ?></th>
                    <td><?= $meddra->pt_code === null ? '' : $this->Number->format($meddra->pt_code) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
