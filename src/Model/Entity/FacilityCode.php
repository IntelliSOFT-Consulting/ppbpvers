<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FacilityCode Entity
 *
 * @property int $id
 * @property string|null $facility_code
 * @property string|null $facility_name
 * @property string|null $province
 * @property string|null $county
 * @property string|null $sub_county
 * @property string|null $district
 * @property string|null $division
 * @property string|null $ward
 * @property string|null $type
 * @property string|null $owner
 * @property string|null $location
 * @property string|null $sub_location
 * @property string|null $description_of_location
 * @property string|null $constituency
 * @property string|null $nearest_town
 * @property string|null $beds
 * @property string|null $cots
 * @property string|null $keph_level
 * @property string|null $official_landline
 * @property string|null $official_fax
 * @property string|null $official_mobile
 * @property string|null $official_email
 * @property string|null $official_address
 * @property string|null $official_alternate_number
 * @property string|null $town
 * @property string|null $post_code
 * @property string|null $in_charge
 * @property string|null $job_title_of_in_charge
 * @property string|null $open_24hrs
 * @property string|null $open_weekends
 * @property string|null $operational_status
 * @property string|null $anc
 * @property string|null $art
 * @property string|null $beoc
 * @property string|null $blood
 * @property string|null $caes_sec
 * @property string|null $ceoc
 * @property string|null $c_imci
 * @property string|null $epi
 * @property string|null $fp
 * @property string|null $growm
 * @property string|null $hbc
 * @property string|null $hct
 * @property string|null $ipd
 * @property string|null $opd
 * @property string|null $outreach
 * @property string|null $pmtct
 * @property string|null $rad_xray
 * @property string|null $rhtc_rhdc
 * @property string|null $tb_diag
 * @property string|null $tb_labs
 * @property string|null $tb_treat
 * @property string|null $Youth
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class FacilityCode extends Entity
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
        'facility_code' => true,
        'facility_name' => true,
        'province' => true,
        'county' => true,
        'sub_county' => true,
        'district' => true,
        'division' => true,
        'ward' => true,
        'type' => true,
        'owner' => true,
        'location' => true,
        'sub_location' => true,
        'description_of_location' => true,
        'constituency' => true,
        'nearest_town' => true,
        'beds' => true,
        'cots' => true,
        'keph_level' => true,
        'official_landline' => true,
        'official_fax' => true,
        'official_mobile' => true,
        'official_email' => true,
        'official_address' => true,
        'official_alternate_number' => true,
        'town' => true,
        'post_code' => true,
        'in_charge' => true,
        'job_title_of_in_charge' => true,
        'open_24hrs' => true,
        'open_weekends' => true,
        'operational_status' => true,
        'anc' => true,
        'art' => true,
        'beoc' => true,
        'blood' => true,
        'caes_sec' => true,
        'ceoc' => true,
        'c_imci' => true,
        'epi' => true,
        'fp' => true,
        'growm' => true,
        'hbc' => true,
        'hct' => true,
        'ipd' => true,
        'opd' => true,
        'outreach' => true,
        'pmtct' => true,
        'rad_xray' => true,
        'rhtc_rhdc' => true,
        'tb_diag' => true,
        'tb_labs' => true,
        'tb_treat' => true,
        'Youth' => true,
        'created' => true,
        'modified' => true,
    ];
}
