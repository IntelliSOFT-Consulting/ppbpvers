<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aro Entity
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string|null $model
 * @property int|null $foreign_key
 * @property string|null $alias
 * @property int|null $lft
 * @property int|null $rght
 *
 * @property \App\Model\Entity\ParentAro $parent_aro
 * @property \App\Model\Entity\ChildAro[] $child_aros
 * @property \App\Model\Entity\Aco[] $acos
 */
class Aro extends Entity
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
        'parent_id' => true,
        'model' => true,
        'foreign_key' => true,
        'alias' => true,
        'lft' => true,
        'rght' => true,
        'parent_aro' => true,
        'child_aros' => true,
        'acos' => true,
    ];
}
