<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WhoDrug $whoDrug
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Who Drug'), ['action' => 'edit', $whoDrug->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Who Drug'), ['action' => 'delete', $whoDrug->id], ['confirm' => __('Are you sure you want to delete # {0}?', $whoDrug->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Who Drugs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Who Drug'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="whoDrugs view content">
            <h3><?= h($whoDrug->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('MedId') ?></th>
                    <td><?= h($whoDrug->MedId) ?></td>
                </tr>
                <tr>
                    <th><?= __('Drug Record Number') ?></th>
                    <td><?= h($whoDrug->drug_record_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sequence No 1') ?></th>
                    <td><?= h($whoDrug->sequence_no_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sequence No 2') ?></th>
                    <td><?= h($whoDrug->sequence_no_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sequence No 3') ?></th>
                    <td><?= h($whoDrug->sequence_no_3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sequence No 4') ?></th>
                    <td><?= h($whoDrug->sequence_no_4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Generic') ?></th>
                    <td><?= h($whoDrug->generic) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name Specifier') ?></th>
                    <td><?= h($whoDrug->name_specifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Market Authorization Number') ?></th>
                    <td><?= h($whoDrug->market_authorization_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Market Authorization Date') ?></th>
                    <td><?= h($whoDrug->market_authorization_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Market Authorization Withdrawal Date') ?></th>
                    <td><?= h($whoDrug->market_authorization_withdrawal_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($whoDrug->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= h($whoDrug->company) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marketing Authorization Holder') ?></th>
                    <td><?= h($whoDrug->marketing_authorization_holder) ?></td>
                </tr>
                <tr>
                    <th><?= __('Source Code') ?></th>
                    <td><?= h($whoDrug->source_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Source Country') ?></th>
                    <td><?= h($whoDrug->source_country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Source Year') ?></th>
                    <td><?= h($whoDrug->source_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Type') ?></th>
                    <td><?= h($whoDrug->product_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Group') ?></th>
                    <td><?= h($whoDrug->product_group) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create Date') ?></th>
                    <td><?= h($whoDrug->create_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Changed') ?></th>
                    <td><?= h($whoDrug->date_changed) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($whoDrug->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($whoDrug->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($whoDrug->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Drug Name') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($whoDrug->drug_name)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
