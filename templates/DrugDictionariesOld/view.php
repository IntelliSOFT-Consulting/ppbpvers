<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DrugDictionariesOld $drugDictionariesOld
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Drug Dictionaries Old'), ['action' => 'edit', $drugDictionariesOld->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Drug Dictionaries Old'), ['action' => 'delete', $drugDictionariesOld->id], ['confirm' => __('Are you sure you want to delete # {0}?', $drugDictionariesOld->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Drug Dictionaries Old'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Drug Dictionaries Old'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="drugDictionariesOld view content">
            <h3><?= h($drugDictionariesOld->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('MedId') ?></th>
                    <td><?= h($drugDictionariesOld->MedId) ?></td>
                </tr>
                <tr>
                    <th><?= __('Drug Record Number') ?></th>
                    <td><?= h($drugDictionariesOld->drug_record_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sequence No 1') ?></th>
                    <td><?= h($drugDictionariesOld->sequence_no_1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sequence No 2') ?></th>
                    <td><?= h($drugDictionariesOld->sequence_no_2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sequence No 3') ?></th>
                    <td><?= h($drugDictionariesOld->sequence_no_3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sequence No 4') ?></th>
                    <td><?= h($drugDictionariesOld->sequence_no_4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Generic') ?></th>
                    <td><?= h($drugDictionariesOld->generic) ?></td>
                </tr>
                <tr>
                    <th><?= __('Drug Name') ?></th>
                    <td><?= h($drugDictionariesOld->drug_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Health Program') ?></th>
                    <td><?= h($drugDictionariesOld->health_program) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name Specifier') ?></th>
                    <td><?= h($drugDictionariesOld->name_specifier) ?></td>
                </tr>
                <tr>
                    <th><?= __('Market Authorization Number') ?></th>
                    <td><?= h($drugDictionariesOld->market_authorization_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Market Authorization Date') ?></th>
                    <td><?= h($drugDictionariesOld->market_authorization_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Market Authorization Withdrawal Date') ?></th>
                    <td><?= h($drugDictionariesOld->market_authorization_withdrawal_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($drugDictionariesOld->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= h($drugDictionariesOld->company) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marketing Authorization Holder') ?></th>
                    <td><?= h($drugDictionariesOld->marketing_authorization_holder) ?></td>
                </tr>
                <tr>
                    <th><?= __('Source Code') ?></th>
                    <td><?= h($drugDictionariesOld->source_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Source Country') ?></th>
                    <td><?= h($drugDictionariesOld->source_country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Source Year') ?></th>
                    <td><?= h($drugDictionariesOld->source_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Type') ?></th>
                    <td><?= h($drugDictionariesOld->product_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Group') ?></th>
                    <td><?= h($drugDictionariesOld->product_group) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create Date') ?></th>
                    <td><?= h($drugDictionariesOld->create_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Changed') ?></th>
                    <td><?= h($drugDictionariesOld->date_changed) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($drugDictionariesOld->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($drugDictionariesOld->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($drugDictionariesOld->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
