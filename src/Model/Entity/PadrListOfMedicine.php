<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PadrListOfMedicine Entity
 *
 * @property int $id
 * @property int|null $padr_id
 * @property string|null $product_name
 * @property string|null $medicine_source
 * @property string|null $manufacturer
 * @property string|null $expiry_date
 * @property \Cake\I18n\FrozenDate|null $start_date
 * @property string|null $end_date
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modifed
 *
 * @property \App\Model\Entity\Padr $padr
 */
class PadrListOfMedicine extends Entity
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
        'padr_id' => true,
        'product_name' => true,
        'medicine_source' => true,
        'manufacturer' => true,
        'expiry_date' => true,
        'start_date' => true,
        'end_date' => true,
        'created' => true,
        'modifed' => true,
        'padr' => true,
    ];
}
