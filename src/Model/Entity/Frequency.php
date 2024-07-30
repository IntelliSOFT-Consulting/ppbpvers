<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Frequency Entity
 *
 * @property int $id
 * @property string|null $value
 * @property string|null $name
 * @property string|null $icsr_code
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Ce2bListOfDrug[] $ce2b_list_of_drugs
 * @property \App\Model\Entity\SadrListOfDrug[] $sadr_list_of_drugs
 * @property \App\Model\Entity\SadrListOfMedicine[] $sadr_list_of_medicines
 */
class Frequency extends Entity
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
        'value' => true,
        'name' => true,
        'icsr_code' => true,
        'created' => true,
        'modified' => true,
        'ce2b_list_of_drugs' => true,
        'sadr_list_of_drugs' => true,
        'sadr_list_of_medicines' => true,
    ];
}
