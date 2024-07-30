<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pocket Entity
 *
 * @property int $id
 * @property string $name
 * @property string $content
 * @property bool|null $required
 * @property int|null $item_number
 * @property string|null $type
 * @property bool|null $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Pocket extends Entity
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
        'name' => true,
        'content' => true,
        'required' => true,
        'item_number' => true,
        'type' => true,
        'deleted' => true,
        'deleted_date' => true,
        'created' => true,
        'modified' => true,
    ];
}
