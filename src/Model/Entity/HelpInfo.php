<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HelpInfo Entity
 *
 * @property int $id
 * @property string|null $field_name
 * @property string|null $field_label
 * @property string|null $place_holder
 * @property string|null $help_type
 * @property string|null $title
 * @property string|null $content
 * @property string|null $help_text
 * @property string|null $type
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class HelpInfo extends Entity
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
        'field_name' => true,
        'field_label' => true,
        'place_holder' => true,
        'help_type' => true,
        'title' => true,
        'content' => true,
        'help_text' => true,
        'type' => true,
        'created' => true,
        'modified' => true,
    ];
}
