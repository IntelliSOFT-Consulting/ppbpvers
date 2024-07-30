<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'designation_id' => 1,
                'county_id' => 1,
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => '',
                'confirm_password' => '',
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => '',
                'role_id' => 1,
                'name_of_institution' => 'Lorem ipsum dolor sit amet',
                'institution_address' => 'Lorem ipsum dolor sit amet',
                'institution_code' => 'Lorem ipsum dolor sit amet',
                'institution_email' => 'Lorem ipsum dolor sit amet',
                'institution_contact' => 'Lorem ipsum dolor sit amet',
                'ward' => 'Lorem ipsum dolor sit amet',
                'phone_no' => 'Lorem ipsum dolor sit amet',
                'forgot_password' => 1,
                'initial_email' => 1,
                'is_active' => 1,
                'is_admin' => 1,
                'deleted' => 1,
                'deleted_date' => '2024-07-30 10:20:49',
                'created' => '2024-07-30 10:20:49',
                'modified' => '2024-07-30 10:20:49',
                'user_type' => 'Lorem ipsum dolor sit amet',
                'sponsor_email' => 'Lorem ipsum dolor sit amet',
                'health_program' => 'Lorem ipsum dolor sit amet',
                'active_date' => '2024-07-30',
            ],
        ];
        parent::init();
    }
}
