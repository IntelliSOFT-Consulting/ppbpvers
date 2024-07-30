<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Device Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $pqmp_id
 * @property string|null $reference_no
 * @property int|null $county_id
 * @property int|null $designation_id
 * @property int|null $device_id
 * @property string|null $report_type
 * @property string|null $report_title
 * @property string|null $name_of_institution
 * @property string|null $institution_code
 * @property string|null $institution_address
 * @property string|null $institution_contact
 * @property string|null $patient_name
 * @property string|null $gender
 * @property string|null $patient_address
 * @property string|null $patient_phone
 * @property float|null $patient_weight
 * @property float|null $patient_height
 * @property string|null $pregnancy_status
 * @property string|null $trimester
 * @property string|null $ip_no
 * @property string|null $date_of_birth
 * @property string|null $age_years
 * @property string|null $allergy
 * @property string|null $allergy_specify
 * @property string|null $problem_noted
 * @property string|null $brand_name
 * @property string|null $serial_no
 * @property string|null $common_name
 * @property string|null $device_model
 * @property string|null $catalogue
 * @property string|null $manufacturer_name
 * @property string|null $manufacturer_address
 * @property string|null $manufacture_date
 * @property \Cake\I18n\FrozenDate|null $expiry_date
 * @property string|null $operator
 * @property string|null $operator_specify
 * @property string|null $device_usage
 * @property string|null $device_duration_type
 * @property int|null $device_duration
 * @property string|null $device_availability
 * @property string|null $device_unavailability
 * @property \Cake\I18n\FrozenDate|null $implant_date
 * @property \Cake\I18n\FrozenDate|null $explant_date
 * @property string|null $implant_duration_type
 * @property int|null $implant_duration
 * @property string|null $specimen_type
 * @property int|null $patients_involved
 * @property int|null $tests_done
 * @property int|null $false_positives
 * @property int|null $false_negatives
 * @property int|null $true_positives
 * @property int|null $true_negatives
 * @property \Cake\I18n\FrozenDate|null $date_onset_incident
 * @property string|null $serious
 * @property string|null $serious_yes
 * @property \Cake\I18n\FrozenDate|null $death_date
 * @property string|null $description_of_reaction
 * @property string|null $remedial_action
 * @property string|null $outcome
 * @property string|null $reporter_name
 * @property string|null $reporter_email
 * @property string|null $reporter_phone
 * @property \Cake\I18n\FrozenDate|null $reporter_date
 * @property string|null $person_submitting
 * @property string|null $reporter_name_diff
 * @property int|null $reporter_designation_diff
 * @property string|null $reporter_email_diff
 * @property string|null $reporter_phone_diff
 * @property \Cake\I18n\FrozenDate|null $reporter_date_diff
 * @property int|null $assigned_to
 * @property int|null $assigned_by
 * @property \Cake\I18n\FrozenTime|null $assigned_date
 * @property int|null $submitted
 * @property \Cake\I18n\FrozenTime|null $submitted_date
 * @property int|null $copied
 * @property int|null $archived
 * @property \Cake\I18n\FrozenTime|null $archived_date
 * @property bool|null $active
 * @property int|null $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Pqmp $pqmp
 * @property \App\Model\Entity\County $county
 * @property \App\Model\Entity\Designation $designation
 * @property \App\Model\Entity\Device[] $devices
 * @property \App\Model\Entity\AttachmentsOld[] $attachments_old
 * @property \App\Model\Entity\ListOfDevice[] $list_of_devices
 */
class Device extends Entity
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
        'pqmp_id' => true,
        'reference_no' => true,
        'county_id' => true,
        'designation_id' => true,
        'device_id' => true,
        'report_type' => true,
        'report_title' => true,
        'name_of_institution' => true,
        'institution_code' => true,
        'institution_address' => true,
        'institution_contact' => true,
        'patient_name' => true,
        'gender' => true,
        'patient_address' => true,
        'patient_phone' => true,
        'patient_weight' => true,
        'patient_height' => true,
        'pregnancy_status' => true,
        'trimester' => true,
        'ip_no' => true,
        'date_of_birth' => true,
        'age_years' => true,
        'allergy' => true,
        'allergy_specify' => true,
        'problem_noted' => true,
        'brand_name' => true,
        'serial_no' => true,
        'common_name' => true,
        'device_model' => true,
        'catalogue' => true,
        'manufacturer_name' => true,
        'manufacturer_address' => true,
        'manufacture_date' => true,
        'expiry_date' => true,
        'operator' => true,
        'operator_specify' => true,
        'device_usage' => true,
        'device_duration_type' => true,
        'device_duration' => true,
        'device_availability' => true,
        'device_unavailability' => true,
        'implant_date' => true,
        'explant_date' => true,
        'implant_duration_type' => true,
        'implant_duration' => true,
        'specimen_type' => true,
        'patients_involved' => true,
        'tests_done' => true,
        'false_positives' => true,
        'false_negatives' => true,
        'true_positives' => true,
        'true_negatives' => true,
        'date_onset_incident' => true,
        'serious' => true,
        'serious_yes' => true,
        'death_date' => true,
        'description_of_reaction' => true,
        'remedial_action' => true,
        'outcome' => true,
        'reporter_name' => true,
        'reporter_email' => true,
        'reporter_phone' => true,
        'reporter_date' => true,
        'person_submitting' => true,
        'reporter_name_diff' => true,
        'reporter_designation_diff' => true,
        'reporter_email_diff' => true,
        'reporter_phone_diff' => true,
        'reporter_date_diff' => true,
        'assigned_to' => true,
        'assigned_by' => true,
        'assigned_date' => true,
        'submitted' => true,
        'submitted_date' => true,
        'copied' => true,
        'archived' => true,
        'archived_date' => true,
        'active' => true,
        'deleted' => true,
        'deleted_date' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'pqmp' => true,
        'county' => true,
        'designation' => true,
        'devices' => true,
        'attachments_old' => true,
        'list_of_devices' => true,
    ];
}
