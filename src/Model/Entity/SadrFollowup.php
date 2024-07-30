<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SadrFollowup Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $county_id
 * @property int|null $sadr_id
 * @property int|null $designation_id
 * @property string|null $description_of_reaction
 * @property string|null $outcome
 * @property string|null $reporter_email
 * @property string|null $reporter_phone
 * @property int|null $submitted
 * @property int|null $emails
 * @property bool|null $active
 * @property int|null $device
 * @property int|null $notified
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\County $county
 * @property \App\Model\Entity\Sadr $sadr
 * @property \App\Model\Entity\Designation $designation
 * @property \App\Model\Entity\AttachmentsOld[] $attachments_old
 * @property \App\Model\Entity\SadrListOfDrug[] $sadr_list_of_drugs
 * @property \App\Model\Entity\SadrListOfMedicine[] $sadr_list_of_medicines
 */
class SadrFollowup extends Entity
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
        'user_id' => true,
        'county_id' => true,
        'sadr_id' => true,
        'designation_id' => true,
        'description_of_reaction' => true,
        'outcome' => true,
        'reporter_email' => true,
        'reporter_phone' => true,
        'submitted' => true,
        'emails' => true,
        'active' => true,
        'device' => true,
        'notified' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'county' => true,
        'sadr' => true,
        'designation' => true,
        'attachments_old' => true,
        'sadr_list_of_drugs' => true,
        'sadr_list_of_medicines' => true,
    ];
}
