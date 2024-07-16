<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\RolesTable&\Cake\ORM\Association\BelongsTo $Roles
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('designation_id')
            ->allowEmptyString('designation_id');

        $validator
            ->integer('county_id')
            ->allowEmptyString('county_id');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->notEmptyString('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('confirm_password')
            ->maxLength('confirm_password', 255)
            ->allowEmptyString('confirm_password');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->integer('role_id')
            ->allowEmptyString('role_id');

        $validator
            ->scalar('name_of_institution')
            ->maxLength('name_of_institution', 255)
            ->allowEmptyString('name_of_institution');

        $validator
            ->scalar('institution_address')
            ->maxLength('institution_address', 255)
            ->allowEmptyString('institution_address');

        $validator
            ->scalar('institution_code')
            ->maxLength('institution_code', 255)
            ->allowEmptyString('institution_code');

        $validator
            ->scalar('institution_email')
            ->maxLength('institution_email', 255)
            ->allowEmptyString('institution_email');

        $validator
            ->scalar('institution_contact')
            ->maxLength('institution_contact', 255)
            ->allowEmptyString('institution_contact');

        $validator
            ->scalar('ward')
            ->maxLength('ward', 255)
            ->allowEmptyString('ward');

        $validator
            ->scalar('phone_no')
            ->maxLength('phone_no', 20)
            ->allowEmptyString('phone_no');

        $validator
            ->scalar('forgot_password')
            ->maxLength('forgot_password', 255)
            ->allowEmptyString('forgot_password');

        $validator
            ->scalar('initial_email')
            ->maxLength('initial_email', 255)
            ->allowEmptyString('initial_email');

        $validator
            ->boolean('is_active')
            ->allowEmptyString('is_active');

        $validator
            ->boolean('is_admin')
            ->allowEmptyString('is_admin');

        $validator
            ->boolean('deleted')
            ->allowEmptyString('deleted');

        $validator
            ->dateTime('deleted_date')
            ->allowEmptyDateTime('deleted_date');

        $validator
            ->scalar('user_type')
            ->maxLength('user_type', 255)
            ->allowEmptyString('user_type');

        $validator
            ->scalar('sponsor_email')
            ->maxLength('sponsor_email', 255)
            ->allowEmptyString('sponsor_email');

        $validator
            ->scalar('health_program')
            ->maxLength('health_program', 255)
            ->allowEmptyString('health_program');

        $validator
            ->dateTime('active_date')
            ->allowEmptyDateTime('active_date');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['username']), ['errorField' => 'username']);
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);
        $rules->add($rules->existsIn('role_id', 'Roles'), ['errorField' => 'role_id']);

        return $rules;
    }
}
