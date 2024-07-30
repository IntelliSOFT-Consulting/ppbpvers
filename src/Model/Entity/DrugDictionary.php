<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DrugDictionary Entity
 *
 * @property int $id
 * @property string|null $MedId
 * @property string|null $drug_record_number
 * @property string|null $sequence_no_1
 * @property string|null $sequence_no_2
 * @property string|null $sequence_no_3
 * @property string|null $sequence_no_4
 * @property string|null $trade_name
 * @property string|null $generic
 * @property string|null $drug_name
 * @property string|null $health_program
 * @property string|null $name_specifier
 * @property string|null $market_authorization_number
 * @property string|null $market_authorization_date
 * @property string|null $market_authorization_withdrawal_date
 * @property string|null $country
 * @property string|null $company
 * @property string|null $marketing_authorization_holder
 * @property string|null $source_code
 * @property string|null $source_country
 * @property string|null $source_year
 * @property string|null $product_type
 * @property string|null $product_group
 * @property string|null $create_date
 * @property string|null $date_changed
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class DrugDictionary extends Entity
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
        'MedId' => true,
        'drug_record_number' => true,
        'sequence_no_1' => true,
        'sequence_no_2' => true,
        'sequence_no_3' => true,
        'sequence_no_4' => true,
        'trade_name' => true,
        'generic' => true,
        'drug_name' => true,
        'health_program' => true,
        'name_specifier' => true,
        'market_authorization_number' => true,
        'market_authorization_date' => true,
        'market_authorization_withdrawal_date' => true,
        'country' => true,
        'company' => true,
        'marketing_authorization_holder' => true,
        'source_code' => true,
        'source_country' => true,
        'source_year' => true,
        'product_type' => true,
        'product_group' => true,
        'create_date' => true,
        'date_changed' => true,
        'created' => true,
        'modified' => true,
    ];
}
