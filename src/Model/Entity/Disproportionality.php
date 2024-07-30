<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Disproportionality Entity
 *
 * @property int $id
 * @property string|null $drug_name
 * @property string|null $reaction_name
 * @property string|null $model
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Disproportionality extends Entity
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
        'drug_name' => true,
        'reaction_name' => true,
        'model' => true,
        'created' => true,
        'modified' => true,
    ];
}
