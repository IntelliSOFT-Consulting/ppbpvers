<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Drug Entity
 *
 * @property int $id
 * @property string|null $brand_name
 * @property string|null $inn_name
 * @property string|null $manufacturer
 * @property string|null $local_trade_rep
 * @property string|null $batch_number
 * @property string|null $registration_status
 * @property string|null $retention_status
 * @property string|null $donation
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Drug extends Entity
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
        'brand_name' => true,
        'inn_name' => true,
        'manufacturer' => true,
        'local_trade_rep' => true,
        'batch_number' => true,
        'registration_status' => true,
        'retention_status' => true,
        'donation' => true,
        'created' => true,
        'modified' => true,
    ];
}
