<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AttachmentsOld Entity
 *
 * @property int $id
 * @property int|null $sadr_id
 * @property int|null $sadr_followup_id
 * @property int|null $pqmp_id
 * @property int|null $aefi_id
 * @property int|null $device_id
 * @property int|null $transfusion_id
 * @property int|null $medication_id
 * @property string|null $filename
 * @property string|null $description
 * @property string|null $mimetype
 * @property int|null $filesize
 * @property string|null $dir
 * @property string|null $file
 * @property string|null $basename
 * @property string|null $dirname
 * @property string|null $checksum
 * @property string|null $model
 * @property int|null $foreign_key
 * @property string|null $alternative
 * @property string|null $group
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Sadr $sadr
 * @property \App\Model\Entity\SadrFollowup $sadr_followup
 * @property \App\Model\Entity\Pqmp $pqmp
 * @property \App\Model\Entity\Aefi $aefi
 * @property \App\Model\Entity\Device $device
 * @property \App\Model\Entity\Transfusion $transfusion
 * @property \App\Model\Entity\Medication $medication
 */
class AttachmentsOld extends Entity
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
        'sadr_id' => true,
        'sadr_followup_id' => true,
        'pqmp_id' => true,
        'aefi_id' => true,
        'device_id' => true,
        'transfusion_id' => true,
        'medication_id' => true,
        'filename' => true,
        'description' => true,
        'mimetype' => true,
        'filesize' => true,
        'dir' => true,
        'file' => true,
        'basename' => true,
        'dirname' => true,
        'checksum' => true,
        'model' => true,
        'foreign_key' => true,
        'alternative' => true,
        'group' => true,
        'created' => true,
        'modified' => true,
        'sadr' => true,
        'sadr_followup' => true,
        'pqmp' => true,
        'aefi' => true,
        'device' => true,
        'transfusion' => true,
        'medication' => true,
    ];
}
