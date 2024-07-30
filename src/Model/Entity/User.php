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
 * @property int $role_id
 * @property string|null $name_of_institution
 * @property string|null $institution_address
 * @property string|null $institution_code
 * @property string|null $institution_email
 * @property string|null $institution_contact
 * @property string|null $ward
 * @property string|null $phone_no
 * @property int|null $forgot_password
 * @property int|null $initial_email
 * @property bool|null $is_active
 * @property bool|null $is_admin
 * @property bool|null $deleted
 * @property \Cake\I18n\FrozenTime|null $deleted_date
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $user_type
 * @property string|null $sponsor_email
 * @property string|null $health_program
 * @property \Cake\I18n\FrozenDate|null $active_date
 *
 * @property \App\Model\Entity\Designation $designation
 * @property \App\Model\Entity\County $county
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Aefi[] $aefis
 * @property \App\Model\Entity\Aggregate[] $aggregates
 * @property \App\Model\Entity\Ce2b[] $ce2bs
 * @property \App\Model\Entity\Comment[] $comments
 * @property \App\Model\Entity\Device[] $devices
 * @property \App\Model\Entity\Feedback[] $feedbacks
 * @property \App\Model\Entity\Medication[] $medications
 * @property \App\Model\Entity\Notification[] $notifications
 * @property \App\Model\Entity\Padr[] $padrs
 * @property \App\Model\Entity\Pqmp[] $pqmps
 * @property \App\Model\Entity\Reminder[] $reminders
 * @property \App\Model\Entity\Review[] $reviews
 * @property \App\Model\Entity\SadrFollowup[] $sadr_followups
 * @property \App\Model\Entity\Sadr[] $sadrs
 * @property \App\Model\Entity\Saefi[] $saefis
 * @property \App\Model\Entity\Sae[] $saes
 * @property \App\Model\Entity\Transfusion[] $transfusions
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
        'created' => true,
        'modified' => true,
        'user_type' => true,
        'sponsor_email' => true,
        'health_program' => true,
        'active_date' => true,
        'designation' => true,
        'county' => true,
        'role' => true,
        'aefis' => true,
        'aggregates' => true,
        'ce2bs' => true,
        'comments' => true,
        'devices' => true,
        'feedbacks' => true,
        'medications' => true,
        'notifications' => true,
        'padrs' => true,
        'pqmps' => true,
        'reminders' => true,
        'reviews' => true,
        'sadr_followups' => true,
        'sadrs' => true,
        'saefis' => true,
        'saes' => true,
        'transfusions' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];


    public function parentNode()
    {
        if (!$this->id) {
            return null;
        }
        if (isset($this->role_id)) {
            $roleId = $this->role_id;
        } else {
            $Users = TableRegistry::get('Users');
            $user = $Users->find('all', ['fields' => ['role_id']])->where(['id' => $this->id])->first();
            $roleId = $user->role_id;
        }
        if (!$roleId) {
            return null;
        }
        return ['Roles' => ['id' => $roleId]];
    }
}
