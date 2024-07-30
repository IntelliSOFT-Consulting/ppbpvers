<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pqmp Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $pqmp_id
 * @property int|null $county_id
 * @property int|null $sub_county_id
 * @property int|null $country_id
 * @property int|null $designation_id
 * @property string|null $reference_no
 * @property string|null $facility_name
 * @property string|null $facility_code
 * @property string|null $facility_address
 * @property string|null $facility_phone
 * @property string|null $brand_name
 * @property string|null $generic_name
 * @property string|null $batch_number
 * @property string|null $manufacture_date
 * @property \Cake\I18n\FrozenDate|null $expiry_date
 * @property \Cake\I18n\FrozenDate|null $receipt_date
 * @property string|null $name_of_manufacturer
 * @property string|null $country_of_origin
 * @property string|null $supplier_name
 * @property string|null $supplier_address
 * @property string|null $product_formulation
 * @property string|null $product_formulation_specify
 * @property bool|null $colour_change
 * @property bool|null $separating
 * @property bool|null $powdering
 * @property bool|null $caking
 * @property bool|null $moulding
 * @property bool|null $odour_change
 * @property bool|null $mislabeling
 * @property bool|null $incomplete_pack
 * @property bool|null $therapeutic_ineffectiveness
 * @property bool|null $particulate_matter
 * @property bool|null $complaint_other
 * @property string|null $complaint_other_specify
 * @property string|null $complaint_description
 * @property string|null $require_refrigeration
 * @property string|null $product_at_facility
 * @property string|null $returned_by_client
 * @property string|null $stored_to_recommendations
 * @property string|null $other_details
 * @property string|null $comments
 * @property string|null $reporter_name
 * @property string|null $reporter_email
 * @property string|null $reporter_phone
 * @property string|null $contact_number
 * @property string|null $adverse_reaction
 * @property string|null $reaction_comments
 * @property string|null $medication_error
 * @property int|null $emails
 * @property int|null $submitted
 * @property \Cake\I18n\FrozenTime|null $submitted_date
 * @property bool|null $active
 * @property int|null $device
 * @property int|null $copied
 * @property int|null $archived
 * @property \Cake\I18n\FrozenTime|null $archived_date
 * @property int|null $notified
 * @property int|null $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property bool|null $medicinal_product
 * @property bool|null $blood_products
 * @property bool|null $herbal_product
 * @property bool|null $medical_device
 * @property bool|null $cosmeceuticals
 * @property bool|null $product_other
 * @property string|null $product_specify
 * @property bool|null $product_vaccine
 * @property bool|null $packaging
 * @property bool|null $labelling
 * @property bool|null $sampling
 * @property bool|null $mechanism
 * @property bool|null $electrical
 * @property bool|null $device_data
 * @property bool|null $software
 * @property bool|null $environmental
 * @property bool|null $failure_to_calibrate
 * @property bool|null $results
 * @property bool|null $readings
 * @property string|null $cold_chain
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
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Pqmp[] $pqmps
 * @property \App\Model\Entity\County $county
 * @property \App\Model\Entity\SubCounty $sub_county
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Designation $designation
 * @property \App\Model\Entity\Aefi[] $aefis
 * @property \App\Model\Entity\AttachmentsOld[] $attachments_old
 * @property \App\Model\Entity\Device[] $devices
 * @property \App\Model\Entity\Medication[] $medications
 * @property \App\Model\Entity\Sadr[] $sadrs
 * @property \App\Model\Entity\Transfusion[] $transfusions
 */
class Pqmp extends Entity
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
        'county_id' => true,
        'sub_county_id' => true,
        'country_id' => true,
        'designation_id' => true,
        'reference_no' => true,
        'facility_name' => true,
        'facility_code' => true,
        'facility_address' => true,
        'facility_phone' => true,
        'brand_name' => true,
        'generic_name' => true,
        'batch_number' => true,
        'manufacture_date' => true,
        'expiry_date' => true,
        'receipt_date' => true,
        'name_of_manufacturer' => true,
        'country_of_origin' => true,
        'supplier_name' => true,
        'supplier_address' => true,
        'product_formulation' => true,
        'product_formulation_specify' => true,
        'colour_change' => true,
        'separating' => true,
        'powdering' => true,
        'caking' => true,
        'moulding' => true,
        'odour_change' => true,
        'mislabeling' => true,
        'incomplete_pack' => true,
        'therapeutic_ineffectiveness' => true,
        'particulate_matter' => true,
        'complaint_other' => true,
        'complaint_other_specify' => true,
        'complaint_description' => true,
        'require_refrigeration' => true,
        'product_at_facility' => true,
        'returned_by_client' => true,
        'stored_to_recommendations' => true,
        'other_details' => true,
        'comments' => true,
        'reporter_name' => true,
        'reporter_email' => true,
        'reporter_phone' => true,
        'contact_number' => true,
        'adverse_reaction' => true,
        'reaction_comments' => true,
        'medication_error' => true,
        'emails' => true,
        'submitted' => true,
        'submitted_date' => true,
        'active' => true,
        'device' => true,
        'copied' => true,
        'archived' => true,
        'archived_date' => true,
        'notified' => true,
        'deleted' => true,
        'deleted_date' => true,
        'created' => true,
        'modified' => true,
        'medicinal_product' => true,
        'blood_products' => true,
        'herbal_product' => true,
        'medical_device' => true,
        'cosmeceuticals' => true,
        'product_other' => true,
        'product_specify' => true,
        'product_vaccine' => true,
        'packaging' => true,
        'labelling' => true,
        'sampling' => true,
        'mechanism' => true,
        'electrical' => true,
        'device_data' => true,
        'software' => true,
        'environmental' => true,
        'failure_to_calibrate' => true,
        'results' => true,
        'readings' => true,
        'cold_chain' => true,
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
        'user' => true,
        'pqmps' => true,
        'county' => true,
        'sub_county' => true,
        'country' => true,
        'designation' => true,
        'aefis' => true,
        'attachments_old' => true,
        'devices' => true,
        'medications' => true,
        'sadrs' => true,
        'transfusions' => true,
    ];
}
