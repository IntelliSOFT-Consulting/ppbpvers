<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int|null $designation_id
 * @property int|null $county_id
 * @property string $username
 * @property string $password
 * @property string|null $confirm_password
 * @property string|null $name
 * @property string $email
 * @property int|null $role_id
 * @property string|null $name_of_institution
 * @property string|null $institution_address
 * @property string|null $institution_code
 * @property string|null $institution_email
 * @property string|null $institution_contact
 * @property string|null $ward
 * @property string|null $phone_no
 * @property string|null $forgot_password
 * @property string|null $initial_email
 * @property bool|null $is_active
 * @property bool|null $is_admin
 * @property bool|null $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 * @property string|null $user_type
 * @property string|null $sponsor_email
 * @property string|null $health_program
 * @property \Cake\I18n\FrozenTime|null $active_date
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Role $role
 */
class User extends Entity
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
        'designation_id' => true,
        'county_id' => true,
        'username' => true,
        'password' => true,
        'confirm_password' => true,
        'name' => true,
        'email' => true,
        'role_id' => true,
        'name_of_institution' => true,
        'institution_address' => true,
        'institution_code' => true,
        'institution_email' => true,
        'institution_contact' => true,
        'ward' => true,
        'phone_no' => true,
        'forgot_password' => true,
        'initial_email' => true,
        'is_active' => true,
        'is_admin' => true,
        'deleted' => true,
        'deleted_date' => true,
        'user_type' => true,
        'sponsor_email' => true,
        'health_program' => true,
        'active_date' => true,
        'created' => true,
        'modified' => true,
        'role' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
}
