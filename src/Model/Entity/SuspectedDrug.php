<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SuspectedDrug Entity
 *
 * @property int $id
 * @property int|null $sae_id
 * @property string|null $generic_name
 * @property string|null $dose
 * @property int|null $route_id
 * @property string|null $indication
 * @property \Cake\I18n\FrozenDate|null $date_from
 * @property \Cake\I18n\FrozenDate|null $date_to
 * @property string|null $therapy_duration
 * @property string|null $reaction_abate
 * @property string|null $reaction_reappear
 * @property bool $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sae $sae
 * @property \App\Model\Entity\Route $route
 */
class SuspectedDrug extends Entity
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
        'sae_id' => true,
        'generic_name' => true,
        'dose' => true,
        'route_id' => true,
        'indication' => true,
        'date_from' => true,
        'date_to' => true,
        'therapy_duration' => true,
        'reaction_abate' => true,
        'reaction_reappear' => true,
        'deleted' => true,
        'deleted_date' => true,
        'created' => true,
        'modified' => true,
        'sae' => true,
        'route' => true,
    ];
}
