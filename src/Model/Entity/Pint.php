<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pint Entity
 *
 * @property int $id
 * @property int|null $transfusion_id
 * @property string|null $component_type
 * @property string|null $pint_no
 * @property \Cake\I18n\FrozenDate|null $expiry_date
 * @property string|null $volume_transfused
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Transfusion $transfusion
 */
class Pint extends Entity
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
        'transfusion_id' => true,
        'component_type' => true,
        'pint_no' => true,
        'expiry_date' => true,
        'volume_transfused' => true,
        'created' => true,
        'modified' => true,
        'transfusion' => true,
    ];
}
