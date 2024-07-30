<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DrugDictionary $drugDictionary
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Drug Dictionary'), ['action' => 'edit', $drugDictionary->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Drug Dictionary'), ['action' => 'delete', $drugDictionary->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drugDictionary->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Drug Dictionaries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Drug Dictionary'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="drugDictionaries view content">
            <h3><?= h($drugDictionary->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('MedId') ?></th>
                    <td><?= h($drugDictionary->MedId) ?></td>
                </tr>
                <tr>
                    <th><?= __('Drug Record Number') ?></th>
                    <td><?= h($drugDictionary->drug_record_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sequence No 1') ?></th>
                    <td><?= h($drugDictionary->sequence_no_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sequence No 2') ?></th>
                    <td><?= h($drugDictionary->sequence_no_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sequence No 3') ?></th>
                    <td><?= h($drugDictionary->sequence_no_3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sequence No 4') ?></th>
                    <td><?= h($drugDictionary->sequence_no_4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Trade Name') ?></th>
                    <td><?= h($drugDictionary->trade_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Generic') ?></th>
                    <td><?= h($drugDictionary->generic) ?></td>
                </tr>
                <tr>
                    <th><?= __('Drug Name') ?></th>
                    <td><?= h($drugDictionary->drug_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Health Program') ?></th>
                    <td><?= h($drugDictionary->health_program) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name Specifier') ?></th>
                    <td><?= h($drugDictionary->name_specifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Market Authorization Number') ?></th>
                    <td><?= h($drugDictionary->market_authorization_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Market Authorization Date') ?></th>
                    <td><?= h($drugDictionary->market_authorization_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Market Authorization Withdrawal Date') ?></th>
                    <td><?= h($drugDictionary->market_authorization_withdrawal_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($drugDictionary->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= h($drugDictionary->company) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marketing Authorization Holder') ?></th>
                    <td><?= h($drugDictionary->marketing_authorization_holder) ?></td>
                </tr>
                <tr>
                    <th><?= __('Source Code') ?></th>
                    <td><?= h($drugDictionary->source_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Source Country') ?></th>
                    <td><?= h($drugDictionary->source_country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Source Year') ?></th>
                    <td><?= h($drugDictionary->source_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Type') ?></th>
                    <td><?= h($drugDictionary->product_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Group') ?></th>
                    <td><?= h($drugDictionary->product_group) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create Date') ?></th>
                    <td><?= h($drugDictionary->create_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Changed') ?></th>
                    <td><?= h($drugDictionary->date_changed) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($drugDictionary->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($drugDictionary->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($drugDictionary->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
