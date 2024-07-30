<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MedicationProduct Entity
 *
 * @property int $id
 * @property int|null $medication_id
 * @property string|null $generic_name_i
 * @property string|null $product_name_i
 * @property string|null $dosage_form_i
 * @property string|null $dosage_i
 * @property string|null $manufacturer_i
 * @property string|null $strength_i
 * @property string|null $container_i
 * @property string|null $generic_name_ii
 * @property string|null $product_name_ii
 * @property string|null $dosage_form_ii
 * @property string|null $dosage_ii
 * @property string|null $manufacturer_ii
 * @property string|null $strength_ii
 * @property string|null $container_ii
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modifed
 *
 * @property \App\Model\Entity\Medication $medication
 */
class MedicationProduct extends Entity
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
        'medication_id' => true,
        'generic_name_i' => true,
        'product_name_i' => true,
        'dosage_form_i' => true,
        'dosage_i' => true,
        'manufacturer_i' => true,
        'strength_i' => true,
        'container_i' => true,
        'generic_name_ii' => true,
        'product_name_ii' => true,
        'dosage_form_ii' => true,
        'dosage_ii' => true,
        'manufacturer_ii' => true,
        'strength_ii' => true,
        'container_ii' => true,
        'created' => true,
        'modifed' => true,
        'medication' => true,
    ];
}
