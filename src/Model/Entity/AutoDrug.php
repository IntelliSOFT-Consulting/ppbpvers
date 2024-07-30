<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AutoDrug Entity
 *
 * @property int $id
 * @property string $drugName
 * @property string $drugCode
 * @property bool|null $isGeneric
 * @property bool|null $isPreferred
 * @property string|null $countryOfSales
 * @property string|null $activeIngredients
 * @property string|null $atcs
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class AutoDrug extends Entity
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
        'drugName' => true,
        'drugCode' => true,
        'isGeneric' => true,
        'isPreferred' => true,
        'countryOfSales' => true,
        'activeIngredients' => true,
        'atcs' => true,
        'created' => true,
        'modified' => true,
    ];
}
