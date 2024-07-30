<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SubCounty Entity
 *
 * @property int $id
 * @property int|null $county_id
 * @property string|null $sub_county_name
 * @property string|null $county_name
 * @property string|null $Province
 * @property string|null $Pop_2009
 * @property string|null $RegVoters
 * @property string|null $AreaSqKms
 * @property string|null $CAWards
 * @property string|null $MainEthnicGroup
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\County $county
 * @property \App\Model\Entity\Aefi[] $aefis
 * @property \App\Model\Entity\Aggregate[] $aggregates
 * @property \App\Model\Entity\Ce2b[] $ce2bs
 * @property \App\Model\Entity\Padr[] $padrs
 * @property \App\Model\Entity\Pqmp[] $pqmps
 * @property \App\Model\Entity\Sadr[] $sadrs
 */
class SubCounty extends Entity
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
        'county_id' => true,
        'sub_county_name' => true,
        'county_name' => true,
        'Province' => true,
        'Pop_2009' => true,
        'RegVoters' => true,
        'AreaSqKms' => true,
        'CAWards' => true,
        'MainEthnicGroup' => true,
        'created' => true,
        'modified' => true,
        'county' => true,
        'aefis' => true,
        'aggregates' => true,
        'ce2bs' => true,
        'padrs' => true,
        'pqmps' => true,
        'sadrs' => true,
    ];
}
