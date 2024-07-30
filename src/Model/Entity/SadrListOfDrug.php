<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SadrListOfDrug Entity
 *
 * @property int $id
 * @property int|null $sadr_id
 * @property int|null $sadr_followup_id
 * @property int|null $dose_id
 * @property int|null $route_id
 * @property int|null $frequency_id
 * @property string|null $frequency_id_other
 * @property string|null $drug_name
 * @property string|null $brand_name
 * @property string|null $batch_no
 * @property string|null $manufacturer
 * @property \Cake\I18n\FrozenDate|null $start_date
 * @property \Cake\I18n\FrozenDate|null $stop_date
 * @property string|null $indication
 * @property string|null $suspected_drug
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Dose $dose
 * @property \App\Model\Entity\Sadr $sadr
 * @property \App\Model\Entity\SadrFollowup $sadr_followup
 * @property \App\Model\Entity\Route $route
 * @property \App\Model\Entity\Frequency $frequency
 */
class SadrListOfDrug extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'sadr_id' => true,
        'sadr_followup_id' => true,
        'dose_id' => true,
        'route_id' => true,
        'frequency_id' => true,
        'frequency_id_other' => true,
        'drug_name' => true,
        'brand_name' => true,
        'batch_no' => true,
        'manufacturer' => true,
        'dose' => true,
        'start_date' => true,
        'stop_date' => true,
        'indication' => true,
        'suspected_drug' => true,
        'created' => true,
        'modified' => true,
        'sadr' => true,
        'sadr_followup' => true,
        'route' => true,
        'frequency' => true,
    ];
}
