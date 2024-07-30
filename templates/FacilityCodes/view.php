<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FacilityCode $facilityCode
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Facility Code'), ['action' => 'edit', $facilityCode->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Facility Code'), ['action' => 'delete', $facilityCode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $facilityCode->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Facility Codes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Facility Code'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="facilityCodes view content">
            <h3><?= h($facilityCode->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Facility Code') ?></th>
                    <td><?= h($facilityCode->facility_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Facility Name') ?></th>
                    <td><?= h($facilityCode->facility_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Province') ?></th>
                    <td><?= h($facilityCode->province) ?></td>
                </tr>
                <tr>
                    <th><?= __('County') ?></th>
                    <td><?= h($facilityCode->county) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sub County') ?></th>
                    <td><?= h($facilityCode->sub_county) ?></td>
                </tr>
                <tr>
                    <th><?= __('District') ?></th>
                    <td><?= h($facilityCode->district) ?></td>
                </tr>
                <tr>
                    <th><?= __('Division') ?></th>
                    <td><?= h($facilityCode->division) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ward') ?></th>
                    <td><?= h($facilityCode->ward) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($facilityCode->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Owner') ?></th>
                    <td><?= h($facilityCode->owner) ?></td>
                </tr>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= h($facilityCode->location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sub Location') ?></th>
                    <td><?= h($facilityCode->sub_location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Constituency') ?></th>
                    <td><?= h($facilityCode->constituency) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nearest Town') ?></th>
                    <td><?= h($facilityCode->nearest_town) ?></td>
                </tr>
                <tr>
                    <th><?= __('Beds') ?></th>
                    <td><?= h($facilityCode->beds) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cots') ?></th>
                    <td><?= h($facilityCode->cots) ?></td>
                </tr>
                <tr>
                    <th><?= __('Keph Level') ?></th>
                    <td><?= h($facilityCode->keph_level) ?></td>
                </tr>
                <tr>
                    <th><?= __('Official Landline') ?></th>
                    <td><?= h($facilityCode->official_landline) ?></td>
                </tr>
                <tr>
                    <th><?= __('Official Fax') ?></th>
                    <td><?= h($facilityCode->official_fax) ?></td>
                </tr>
                <tr>
                    <th><?= __('Official Mobile') ?></th>
                    <td><?= h($facilityCode->official_mobile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Official Email') ?></th>
                    <td><?= h($facilityCode->official_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Official Address') ?></th>
                    <td><?= h($facilityCode->official_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Official Alternate Number') ?></th>
                    <td><?= h($facilityCode->official_alternate_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Town') ?></th>
                    <td><?= h($facilityCode->town) ?></td>
                </tr>
                <tr>
                    <th><?= __('Post Code') ?></th>
                    <td><?= h($facilityCode->post_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('In Charge') ?></th>
                    <td><?= h($facilityCode->in_charge) ?></td>
                </tr>
                <tr>
                    <th><?= __('Job Title Of In Charge') ?></th>
                    <td><?= h($facilityCode->job_title_of_in_charge) ?></td>
                </tr>
                <tr>
                    <th><?= __('Open 24hrs') ?></th>
                    <td><?= h($facilityCode->open_24hrs) ?></td>
                </tr>
                <tr>
                    <th><?= __('Open Weekends') ?></th>
                    <td><?= h($facilityCode->open_weekends) ?></td>
                </tr>
                <tr>
                    <th><?= __('Operational Status') ?></th>
                    <td><?= h($facilityCode->operational_status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anc') ?></th>
                    <td><?= h($facilityCode->anc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Art') ?></th>
                    <td><?= h($facilityCode->art) ?></td>
                </tr>
                <tr>
                    <th><?= __('Beoc') ?></th>
                    <td><?= h($facilityCode->beoc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Blood') ?></th>
                    <td><?= h($facilityCode->blood) ?></td>
                </tr>
                <tr>
                    <th><?= __('Caes Sec') ?></th>
                    <td><?= h($facilityCode->caes_sec) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ceoc') ?></th>
                    <td><?= h($facilityCode->ceoc) ?></td>
                </tr>
                <tr>
                    <th><?= __('C Imci') ?></th>
                    <td><?= h($facilityCode->c_imci) ?></td>
                </tr>
                <tr>
                    <th><?= __('Epi') ?></th>
                    <td><?= h($facilityCode->epi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fp') ?></th>
                    <td><?= h($facilityCode->fp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Growm') ?></th>
                    <td><?= h($facilityCode->growm) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hbc') ?></th>
                    <td><?= h($facilityCode->hbc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hct') ?></th>
                    <td><?= h($facilityCode->hct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ipd') ?></th>
                    <td><?= h($facilityCode->ipd) ?></td>
                </tr>
                <tr>
                    <th><?= __('Opd') ?></th>
                    <td><?= h($facilityCode->opd) ?></td>
                </tr>
                <tr>
                    <th><?= __('Outreach') ?></th>
                    <td><?= h($facilityCode->outreach) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pmtct') ?></th>
                    <td><?= h($facilityCode->pmtct) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rad Xray') ?></th>
                    <td><?= h($facilityCode->rad_xray) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rhtc Rhdc') ?></th>
                    <td><?= h($facilityCode->rhtc_rhdc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tb Diag') ?></th>
                    <td><?= h($facilityCode->tb_diag) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tb Labs') ?></th>
                    <td><?= h($facilityCode->tb_labs) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tb Treat') ?></th>
                    <td><?= h($facilityCode->tb_treat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Youth') ?></th>
                    <td><?= h($facilityCode->Youth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($facilityCode->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($facilityCode->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($facilityCode->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description Of Location') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($facilityCode->description_of_location)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
