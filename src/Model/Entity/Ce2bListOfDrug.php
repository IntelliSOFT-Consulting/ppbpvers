<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ce2bListOfDrug Entity
 *
 * @property int $id
 * @property int|null $ce2b_id
 * @property int|null $ce2b_followup_id
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
 * @property \App\Model\Entity\Route $route
 * @property \App\Model\Entity\Ce2b $ce2b
 * @property \App\Model\Entity\Frequency $frequency
 */
class Ce2bListOfDrug extends Entity
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
        'ce2b_id' => true,
        'ce2b_followup_id' => true,
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
        'route' => true,
        'ce2b' => true,
        'frequency' => true,
    ];
}
