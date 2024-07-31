<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

use Cake\Auth\DefaultPasswordHasher;

/**
 * Users Model
 *
 * @property \App\Model\Table\DesignationsTable&\Cake\ORM\Association\BelongsTo $Designations
 * @property \App\Model\Table\CountiesTable&\Cake\ORM\Association\BelongsTo $Counties
 * @property \App\Model\Table\RolesTable&\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\AefisTable&\Cake\ORM\Association\HasMany $Aefis
 * @property \App\Model\Table\AggregatesTable&\Cake\ORM\Association\HasMany $Aggregates
 * @property \App\Model\Table\Ce2bsTable&\Cake\ORM\Association\HasMany $Ce2bs
 * @property \App\Model\Table\CommentsTable&\Cake\ORM\Association\HasMany $Comments
 * @property \App\Model\Table\DevicesTable&\Cake\ORM\Association\HasMany $Devices
 * @property \App\Model\Table\FeedbacksTable&\Cake\ORM\Association\HasMany $Feedbacks
 * @property \App\Model\Table\MedicationsTable&\Cake\ORM\Association\HasMany $Medications
 * @property \App\Model\Table\NotificationsTable&\Cake\ORM\Association\HasMany $Notifications
 * @property \App\Model\Table\PadrsTable&\Cake\ORM\Association\HasMany $Padrs
 * @property \App\Model\Table\PqmpsTable&\Cake\ORM\Association\HasMany $Pqmps
 * @property \App\Model\Table\RemindersTable&\Cake\ORM\Association\HasMany $Reminders
 * @property \App\Model\Table\ReviewsTable&\Cake\ORM\Association\HasMany $Reviews
 * @property \App\Model\Table\SadrFollowupsTable&\Cake\ORM\Association\HasMany $SadrFollowups
 * @property \App\Model\Table\SadrsTable&\Cake\ORM\Association\HasMany $Sadrs
 * @property \App\Model\Table\SaefisTable&\Cake\ORM\Association\HasMany $Saefis
 * @property \App\Model\Table\SaesTable&\Cake\ORM\Association\HasMany $Saes
 * @property \App\Model\Table\TransfusionsTable&\Cake\ORM\Association\HasMany $Transfusions
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
        $this->addBehavior('Acl.Acl', ['type' => 'requester']);
        // $this->addBehavior('Acl.Acl', ['type' => 'requester']);


        $this->belongsTo('Designations', [
            'foreignKey' => 'designation_id',
        ]);
        $this->belongsTo('Counties', [
            'foreignKey' => 'county_id',
        ]);
        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Aefis', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Aggregates', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Ce2bs', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Comments', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Devices', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Feedbacks', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Medications', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Notifications', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Padrs', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Pqmps', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Reminders', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Reviews', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('SadrFollowups', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Sadrs', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Saefis', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Saes', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Transfusions', [
            'foreignKey' => 'user_id',
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
            ->notEmptyString('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 140)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('confirm_password')
            ->maxLength('confirm_password', 140)
            ->allowEmptyString('confirm_password');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->allowEmptyString('name');

        $validator
            ->email('email')
            ->notEmptyString('email');

        $validator
            ->integer('role_id')
            ->notEmptyString('role_id');

        $validator
            ->scalar('name_of_institution')
            ->maxLength('name_of_institution', 100)
            ->allowEmptyString('name_of_institution');

        $validator
            ->scalar('institution_address')
            ->maxLength('institution_address', 100)
            ->allowEmptyString('institution_address');

        $validator
            ->scalar('institution_code')
            ->maxLength('institution_code', 100)
            ->allowEmptyString('institution_code');

        $validator
            ->scalar('institution_email')
            ->maxLength('institution_email', 255)
            ->allowEmptyString('institution_email');

        $validator
            ->scalar('institution_contact')
            ->maxLength('institution_contact', 100)
            ->allowEmptyString('institution_contact');

        $validator
            ->scalar('ward')
            ->maxLength('ward', 100)
            ->allowEmptyString('ward');

        $validator
            ->scalar('phone_no')
            ->maxLength('phone_no', 100)
            ->allowEmptyString('phone_no');

        $validator
            ->allowEmptyString('forgot_password');

        $validator
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
            ->maxLength('user_type', 55)
            ->allowEmptyString('user_type');

        $validator
            ->scalar('sponsor_email')
            ->maxLength('sponsor_email', 55)
            ->allowEmptyString('sponsor_email');

        $validator
            ->scalar('health_program')
            ->maxLength('health_program', 105)
            ->allowEmptyString('health_program');

        $validator
            ->date('active_date')
            ->allowEmptyDate('active_date');

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
        $rules->add($rules->existsIn('designation_id', 'Designations'), ['errorField' => 'designation_id']);
        $rules->add($rules->existsIn('county_id', 'Counties'), ['errorField' => 'county_id']);
        $rules->add($rules->existsIn('role_id', 'Roles'), ['errorField' => 'role_id']);

        return $rules;
    }

    public function beforeSave(
        \Cake\Event\Event $event,
        \Cake\ORM\Entity $entity,
        \ArrayObject $options
    ) {
        $hasher = new DefaultPasswordHasher();
        if (!empty($entity->password)) $entity->password = $hasher->hash($entity->password);
        if (!empty($entity->confirm_password)) $entity->confirm_password = $hasher->hash($entity->confirm_password);
        return true;
    }
}
