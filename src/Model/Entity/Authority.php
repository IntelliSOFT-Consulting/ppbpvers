<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Authority Entity
 *
 * @property int $id
 * @property string|null $mah_name
 * @property string|null $mah_company_name
 * @property string|null $mah_company_address
 * @property string|null $mah_company_telephone
 * @property string|null $mah_company_email
 * @property int|null $product
 * @property string|null $master_mah
 */
class Authority extends Entity
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
        'mah_name' => true,
        'mah_company_name' => true,
        'mah_company_address' => true,
        'mah_company_telephone' => true,
        'mah_company_email' => true,
        'product' => true,
        'master_mah' => true,
    ];
}
