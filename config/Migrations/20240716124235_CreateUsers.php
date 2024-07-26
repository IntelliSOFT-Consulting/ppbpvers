<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('designation_id', 'integer', ['null' => true])
            ->addColumn('county_id', 'integer', ['null' => true])
            ->addColumn('username', 'string', ['limit' => 255, 'null' => false])
            ->addColumn('password', 'string', ['limit' => 255, 'null' => false])
            ->addColumn('confirm_password', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('name', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('email', 'string', ['limit' => 255, 'null' => false])
            ->addColumn('role_id', 'integer', ['null' => true])
            ->addColumn('name_of_institution', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('institution_address', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('institution_code', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('institution_email', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('institution_contact', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('ward', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('phone_no', 'string', ['limit' => 20, 'null' => true])
            ->addColumn('forgot_password', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('initial_email', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('is_active', 'boolean', ['default' => false])
            ->addColumn('is_admin', 'boolean', ['default' => false])
            ->addColumn('deleted', 'boolean', ['default' => false])
            ->addColumn('deleted_date', 'datetime', ['null' => true]) 
            ->addColumn('user_type', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('sponsor_email', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('health_program', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('active_date', 'datetime', ['null' => true])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
}
