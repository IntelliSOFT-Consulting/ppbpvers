<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ListOfDevice Entity
 *
 * @property int $id
 * @property int|null $device_id
 * @property string|null $brand_name
 * @property string|null $serial_no
 * @property string|null $common_name
 * @property string|null $manufacturer
 * @property string|null $manufacture_date
 * @property string|null $expiry_date
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Device $device
 */
class ListOfDevice extends Entity
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
        'device_id' => true,
        'brand_name' => true,
        'serial_no' => true,
        'common_name' => true,
        'manufacturer' => true,
        'manufacture_date' => true,
        'expiry_date' => true,
        'created' => true,
        'modified' => true,
        'device' => true,
    ];
}
