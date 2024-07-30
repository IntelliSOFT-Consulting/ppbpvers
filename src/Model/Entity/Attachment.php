<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Attachment Entity
 *
 * @property int $id
 * @property string|null $model
 * @property string|null $file
 * @property int $foreign_key
 * @property string|null $dirname
 * @property string $basename
 * @property string $checksum
 * @property string|null $alternative
 * @property string|null $group
 * @property string|null $description
 * @property string|null $year
 * @property \Cake\I18n\FrozenDate|null $file_date
 * @property string|null $pocket_name
 * @property string|null $version_no
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Attachment extends Entity
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
        'model' => true,
        'file' => true,
        'foreign_key' => true,
        'dirname' => true,
        'basename' => true,
        'checksum' => true,
        'alternative' => true,
        'group' => true,
        'description' => true,
        'year' => true,
        'file_date' => true,
        'pocket_name' => true,
        'version_no' => true,
        'created' => true,
        'modified' => true,
    ];
}
