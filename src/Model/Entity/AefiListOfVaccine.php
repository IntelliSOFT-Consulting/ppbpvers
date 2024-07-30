<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AefiListOfVaccine Entity
 *
 * @property int $id
 * @property int|null $aefi_id
 * @property int|null $saefi_id
 * @property int|null $vaccine_id
 * @property string|null $vaccine_name
 * @property \Cake\I18n\FrozenTime|null $vaccination_date
 * @property string|null $vaccination_time
 * @property string|null $vaccine_manufacturer
 * @property string|null $vaccination_route
 * @property string|null $vaccination_site
 * @property string|null $dosage
 * @property string|null $icsr_code
 * @property string|null $batch_number
 * @property \Cake\I18n\FrozenDate|null $expiry_date
 * @property string|null $diluent_batch_number
 * @property string|null $diluent_manufacturer
 * @property \Cake\I18n\FrozenDate|null $diluent_expiry_date
 * @property bool|null $suspected_drug
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Aefi $aefi
 * @property \App\Model\Entity\Saefi $saefi
 * @property \App\Model\Entity\Vaccine $vaccine
 */
class AefiListOfVaccine extends Entity
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
        'aefi_id' => true,
        'saefi_id' => true,
        'vaccine_id' => true,
        'vaccine_name' => true,
        'vaccination_date' => true,
        'vaccination_time' => true,
        'vaccine_manufacturer' => true,
        'vaccination_route' => true,
        'vaccination_site' => true,
        'dosage' => true,
        'icsr_code' => true,
        'batch_number' => true,
        'expiry_date' => true,
        'diluent_batch_number' => true,
        'diluent_manufacturer' => true,
        'diluent_expiry_date' => true,
        'suspected_drug' => true,
        'created' => true,
        'modified' => true,
        'aefi' => true,
        'saefi' => true,
        'vaccine' => true,
    ];
}
