<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TmpDrug Entity
 *
 * @property int|null $ectd_product_id
 * @property string|null $product_trade_name
 * @property string|null $product_registration_no
 * @property string|null $local_foreign
 * @property string|null $inn_of_api
 * @property string|null $api_strength_per_dosage
 * @property int|null $AL
 */
class TmpDrug extends Entity
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
        'ectd_product_id' => true,
        'product_trade_name' => true,
        'product_registration_no' => true,
        'local_foreign' => true,
        'inn_of_api' => true,
        'api_strength_per_dosage' => true,
        'AL' => true,
    ];
}
