<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Meddra Entity
 *
 * @property int|null $id
 * @property string|null $llt_name
 * @property int|null $pt_code
 * @property string|null $llt_whoart_code
 * @property string|null $llt_harts_code
 * @property string|null $llt_costart_sym
 * @property string|null $llt_icd9_code
 * @property string|null $llt_icd9cm_code
 * @property string|null $llt_icd10_code
 * @property string|null $llt_currency
 * @property string|null $llt_jart_code
 * @property string|null $COL_12
 */
class Meddra extends Entity
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
        'id' => true,
        'llt_name' => true,
        'pt_code' => true,
        'llt_whoart_code' => true,
        'llt_harts_code' => true,
        'llt_costart_sym' => true,
        'llt_icd9_code' => true,
        'llt_icd9cm_code' => true,
        'llt_icd10_code' => true,
        'llt_currency' => true,
        'llt_jart_code' => true,
        'COL_12' => true,
    ];
}
