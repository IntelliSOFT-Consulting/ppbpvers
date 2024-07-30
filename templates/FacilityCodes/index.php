<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\FacilityCode> $facilityCodes
 */
?>
<div class="facilityCodes index content">
    <?= $this->Html->link(__('New Facility Code'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Facility Codes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('facility_code') ?></th>
                    <th><?= $this->Paginator->sort('facility_name') ?></th>
                    <th><?= $this->Paginator->sort('province') ?></th>
                    <th><?= $this->Paginator->sort('county') ?></th>
                    <th><?= $this->Paginator->sort('sub_county') ?></th>
                    <th><?= $this->Paginator->sort('district') ?></th>
                    <th><?= $this->Paginator->sort('division') ?></th>
                    <th><?= $this->Paginator->sort('ward') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('owner') ?></th>
                    <th><?= $this->Paginator->sort('location') ?></th>
                    <th><?= $this->Paginator->sort('sub_location') ?></th>
                    <th><?= $this->Paginator->sort('constituency') ?></th>
                    <th><?= $this->Paginator->sort('nearest_town') ?></th>
                    <th><?= $this->Paginator->sort('beds') ?></th>
                    <th><?= $this->Paginator->sort('cots') ?></th>
                    <th><?= $this->Paginator->sort('keph_level') ?></th>
                    <th><?= $this->Paginator->sort('official_landline') ?></th>
                    <th><?= $this->Paginator->sort('official_fax') ?></th>
                    <th><?= $this->Paginator->sort('official_mobile') ?></th>
                    <th><?= $this->Paginator->sort('official_email') ?></th>
                    <th><?= $this->Paginator->sort('official_address') ?></th>
                    <th><?= $this->Paginator->sort('official_alternate_number') ?></th>
                    <th><?= $this->Paginator->sort('town') ?></th>
                    <th><?= $this->Paginator->sort('post_code') ?></th>
                    <th><?= $this->Paginator->sort('in_charge') ?></th>
                    <th><?= $this->Paginator->sort('job_title_of_in_charge') ?></th>
                    <th><?= $this->Paginator->sort('open_24hrs') ?></th>
                    <th><?= $this->Paginator->sort('open_weekends') ?></th>
                    <th><?= $this->Paginator->sort('operational_status') ?></th>
                    <th><?= $this->Paginator->sort('anc') ?></th>
                    <th><?= $this->Paginator->sort('art') ?></th>
                    <th><?= $this->Paginator->sort('beoc') ?></th>
                    <th><?= $this->Paginator->sort('blood') ?></th>
                    <th><?= $this->Paginator->sort('caes_sec') ?></th>
                    <th><?= $this->Paginator->sort('ceoc') ?></th>
                    <th><?= $this->Paginator->sort('c_imci') ?></th>
                    <th><?= $this->Paginator->sort('epi') ?></th>
                    <th><?= $this->Paginator->sort('fp') ?></th>
                    <th><?= $this->Paginator->sort('growm') ?></th>
                    <th><?= $this->Paginator->sort('hbc') ?></th>
                    <th><?= $this->Paginator->sort('hct') ?></th>
                    <th><?= $this->Paginator->sort('ipd') ?></th>
                    <th><?= $this->Paginator->sort('opd') ?></th>
                    <th><?= $this->Paginator->sort('outreach') ?></th>
                    <th><?= $this->Paginator->sort('pmtct') ?></th>
                    <th><?= $this->Paginator->sort('rad_xray') ?></th>
                    <th><?= $this->Paginator->sort('rhtc_rhdc') ?></th>
                    <th><?= $this->Paginator->sort('tb_diag') ?></th>
                    <th><?= $this->Paginator->sort('tb_labs') ?></th>
                    <th><?= $this->Paginator->sort('tb_treat') ?></th>
                    <th><?= $this->Paginator->sort('Youth') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($facilityCodes as $facilityCode): ?>
                <tr>
                    <td><?= $this->Number->format($facilityCode->id) ?></td>
                    <td><?= h($facilityCode->facility_code) ?></td>
                    <td><?= h($facilityCode->facility_name) ?></td>
                    <td><?= h($facilityCode->province) ?></td>
                    <td><?= h($facilityCode->county) ?></td>
                    <td><?= h($facilityCode->sub_county) ?></td>
                    <td><?= h($facilityCode->district) ?></td>
                    <td><?= h($facilityCode->division) ?></td>
                    <td><?= h($facilityCode->ward) ?></td>
                    <td><?= h($facilityCode->type) ?></td>
                    <td><?= h($facilityCode->owner) ?></td>
                    <td><?= h($facilityCode->location) ?></td>
                    <td><?= h($facilityCode->sub_location) ?></td>
                    <td><?= h($facilityCode->constituency) ?></td>
                    <td><?= h($facilityCode->nearest_town) ?></td>
                    <td><?= h($facilityCode->beds) ?></td>
                    <td><?= h($facilityCode->cots) ?></td>
                    <td><?= h($facilityCode->keph_level) ?></td>
                    <td><?= h($facilityCode->official_landline) ?></td>
                    <td><?= h($facilityCode->official_fax) ?></td>
                    <td><?= h($facilityCode->official_mobile) ?></td>
                    <td><?= h($facilityCode->official_email) ?></td>
                    <td><?= h($facilityCode->official_address) ?></td>
                    <td><?= h($facilityCode->official_alternate_number) ?></td>
                    <td><?= h($facilityCode->town) ?></td>
                    <td><?= h($facilityCode->post_code) ?></td>
                    <td><?= h($facilityCode->in_charge) ?></td>
                    <td><?= h($facilityCode->job_title_of_in_charge) ?></td>
                    <td><?= h($facilityCode->open_24hrs) ?></td>
                    <td><?= h($facilityCode->open_weekends) ?></td>
                    <td><?= h($facilityCode->operational_status) ?></td>
                    <td><?= h($facilityCode->anc) ?></td>
                    <td><?= h($facilityCode->art) ?></td>
                    <td><?= h($facilityCode->beoc) ?></td>
                    <td><?= h($facilityCode->blood) ?></td>
                    <td><?= h($facilityCode->caes_sec) ?></td>
                    <td><?= h($facilityCode->ceoc) ?></td>
                    <td><?= h($facilityCode->c_imci) ?></td>
                    <td><?= h($facilityCode->epi) ?></td>
                    <td><?= h($facilityCode->fp) ?></td>
                    <td><?= h($facilityCode->growm) ?></td>
                    <td><?= h($facilityCode->hbc) ?></td>
                    <td><?= h($facilityCode->hct) ?></td>
                    <td><?= h($facilityCode->ipd) ?></td>
                    <td><?= h($facilityCode->opd) ?></td>
                    <td><?= h($facilityCode->outreach) ?></td>
                    <td><?= h($facilityCode->pmtct) ?></td>
                    <td><?= h($facilityCode->rad_xray) ?></td>
                    <td><?= h($facilityCode->rhtc_rhdc) ?></td>
                    <td><?= h($facilityCode->tb_diag) ?></td>
                    <td><?= h($facilityCode->tb_labs) ?></td>
                    <td><?= h($facilityCode->tb_treat) ?></td>
                    <td><?= h($facilityCode->Youth) ?></td>
                    <td><?= h($facilityCode->created) ?></td>
                    <td><?= h($facilityCode->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $facilityCode->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $facilityCode->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $facilityCode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $facilityCode->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
