<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * County Entity
 *
 * @property int $id
 * @property string|null $county_name
 * @property string|null $org_unit
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Aefi[] $aefis
 * @property \App\Model\Entity\Aggregate[] $aggregates
 * @property \App\Model\Entity\Ce2b[] $ce2bs
 * @property \App\Model\Entity\Device[] $devices
 * @property \App\Model\Entity\Medication[] $medications
 * @property \App\Model\Entity\Padr[] $padrs
 * @property \App\Model\Entity\Pqmp[] $pqmps
 * @property \App\Model\Entity\SadrFollowup[] $sadr_followups
 * @property \App\Model\Entity\Sadr[] $sadrs
 * @property \App\Model\Entity\SubCounty[] $sub_counties
 * @property \App\Model\Entity\Transfusion[] $transfusions
 * @property \App\Model\Entity\User[] $users
 */
class County extends Entity
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
        'county_name' => true,
        'org_unit' => true,
        'created' => true,
        'modified' => true,
        'aefis' => true,
        'aggregates' => true,
        'ce2bs' => true,
        'devices' => true,
        'medications' => true,
        'padrs' => true,
        'pqmps' => true,
        'sadr_followups' => true,
        'sadrs' => true,
        'sub_counties' => true,
        'transfusions' => true,
        'users' => true,
    ];
}
