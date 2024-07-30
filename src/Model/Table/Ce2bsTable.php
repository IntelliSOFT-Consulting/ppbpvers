<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ce2bs Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\Ce2bsTable&\Cake\ORM\Association\BelongsTo $Ce2bs
 * @property \App\Model\Table\CountiesTable&\Cake\ORM\Association\BelongsTo $Counties
 * @property \App\Model\Table\SubCountiesTable&\Cake\ORM\Association\BelongsTo $SubCounties
 * @property \App\Model\Table\DesignationsTable&\Cake\ORM\Association\BelongsTo $Designations
 * @property \App\Model\Table\Ce2bListOfDrugsTable&\Cake\ORM\Association\HasMany $Ce2bListOfDrugs
 * @property \App\Model\Table\Ce2bReactionTable&\Cake\ORM\Association\HasMany $Ce2bReaction
 * @property \App\Model\Table\Ce2bsTable&\Cake\ORM\Association\HasMany $Ce2bs
 *
 * @method \App\Model\Entity\Ce2b newEmptyEntity()
 * @method \App\Model\Entity\Ce2b newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ce2b[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ce2b get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ce2b findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ce2b patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ce2b[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ce2b|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ce2b saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ce2b[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ce2b[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ce2b[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ce2b[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class Ce2bsTable extends Table
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

        $this->setTable('ce2bs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Ce2bs', [
            'foreignKey' => 'ce2b_id',
        ]);
        $this->belongsTo('Counties', [
            'foreignKey' => 'county_id',
        ]);
        $this->belongsTo('SubCounties', [
            'foreignKey' => 'sub_county_id',
        ]);
        $this->belongsTo('Designations', [
            'foreignKey' => 'designation_id',
        ]);
        $this->hasMany('Ce2bListOfDrugs', [
            'foreignKey' => 'ce2b_id',
        ]);
        $this->hasMany('Ce2bReaction', [
            'foreignKey' => 'ce2b_id',
        ]);
        $this->hasMany('Ce2bs', [
            'foreignKey' => 'ce2b_id',
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
            ->integer('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->integer('ce2b_id')
            ->allowEmptyString('ce2b_id');

        $validator
            ->scalar('vigiflow_message')
            ->maxLength('vigiflow_message', 255)
            ->allowEmptyString('vigiflow_message');

        $validator
            ->scalar('vigiflow_date')
            ->maxLength('vigiflow_date', 255)
            ->allowEmptyString('vigiflow_date');

        $validator
            ->scalar('report_type')
            ->maxLength('report_type', 255)
            ->allowEmptyString('report_type');

        $validator
            ->integer('county_id')
            ->allowEmptyString('county_id');

        $validator
            ->integer('sub_county_id')
            ->allowEmptyString('sub_county_id');

        $validator
            ->integer('designation_id')
            ->allowEmptyString('designation_id');

        $validator
            ->scalar('reference_no')
            ->maxLength('reference_no', 55)
            ->allowEmptyString('reference_no');

        $validator
            ->scalar('messageid')
            ->maxLength('messageid', 255)
            ->allowEmptyString('messageid');

        $validator
            ->integer('assigned_to')
            ->allowEmptyString('assigned_to');

        $validator
            ->integer('assigned_by')
            ->allowEmptyString('assigned_by');

        $validator
            ->scalar('company_code')
            ->maxLength('company_code', 255)
            ->allowEmptyString('company_code');

        $validator
            ->scalar('company_name')
            ->maxLength('company_name', 255)
            ->allowEmptyString('company_name');

        $validator
            ->scalar('comment')
            ->maxLength('comment', 16777215)
            ->allowEmptyString('comment');

        $validator
            ->scalar('reporter_email')
            ->maxLength('reporter_email', 255)
            ->allowEmptyString('reporter_email');

        $validator
            ->scalar('e2b_content')
            ->maxLength('e2b_content', 4294967295)
            ->allowEmptyString('e2b_content');

        $validator
            ->scalar('e2b_type')
            ->maxLength('e2b_type', 255)
            ->allowEmptyString('e2b_type');

        $validator
            ->scalar('e2b_file')
            ->maxLength('e2b_file', 255)
            ->allowEmptyFile('e2b_file');

        $validator
            ->scalar('dir')
            ->maxLength('dir', 255)
            ->allowEmptyString('dir');

        $validator
            ->scalar('size')
            ->maxLength('size', 255)
            ->allowEmptyString('size');

        $validator
            ->scalar('type')
            ->maxLength('type', 255)
            ->allowEmptyString('type');

        $validator
            ->dateTime('assigned_date')
            ->allowEmptyDateTime('assigned_date');

        $validator
            ->boolean('signature')
            ->allowEmptyString('signature');

        $validator
            ->integer('submitted')
            ->allowEmptyString('submitted');

        $validator
            ->dateTime('submitted_date')
            ->allowEmptyDateTime('submitted_date');

        $validator
            ->scalar('reporter_name')
            ->maxLength('reporter_name', 255)
            ->allowEmptyString('reporter_name');

        $validator
            ->integer('reporter_designation')
            ->allowEmptyString('reporter_designation');

        $validator
            ->scalar('reporter_phone')
            ->maxLength('reporter_phone', 100)
            ->allowEmptyString('reporter_phone');

        $validator
            ->date('reporter_date')
            ->allowEmptyDate('reporter_date');

        $validator
            ->scalar('person_submitting')
            ->maxLength('person_submitting', 50)
            ->allowEmptyString('person_submitting');

        $validator
            ->scalar('reporter_name_diff')
            ->maxLength('reporter_name_diff', 255)
            ->allowEmptyString('reporter_name_diff');

        $validator
            ->integer('reporter_designation_diff')
            ->allowEmptyString('reporter_designation_diff');

        $validator
            ->scalar('reporter_email_diff')
            ->maxLength('reporter_email_diff', 255)
            ->allowEmptyString('reporter_email_diff');

        $validator
            ->scalar('reporter_phone_diff')
            ->maxLength('reporter_phone_diff', 255)
            ->allowEmptyString('reporter_phone_diff');

        $validator
            ->date('reporter_date_diff')
            ->allowEmptyDate('reporter_date_diff');

        $validator
            ->scalar('resubmit')
            ->maxLength('resubmit', 15)
            ->allowEmptyString('resubmit');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->allowEmptyString('status');

        $validator
            ->allowEmptyString('active');

        $validator
            ->allowEmptyString('copied');

        $validator
            ->allowEmptyString('archived');

        $validator
            ->dateTime('archived_date')
            ->allowEmptyDateTime('archived_date');

        $validator
            ->dateTime('action_date')
            ->notEmptyDateTime('action_date');

        $validator
            ->boolean('deleted')
            ->allowEmptyString('deleted');

        $validator
            ->dateTime('deleted_date')
            ->allowEmptyDateTime('deleted_date');

        $validator
            ->scalar('report_reference')
            ->maxLength('report_reference', 255)
            ->allowEmptyString('report_reference');

        $validator
            ->scalar('creation_time')
            ->maxLength('creation_time', 255)
            ->allowEmptyString('creation_time');

        $validator
            ->scalar('sender_reference')
            ->maxLength('sender_reference', 255)
            ->allowEmptyString('sender_reference');

        $validator
            ->scalar('receiver_id')
            ->maxLength('receiver_id', 255)
            ->allowEmptyString('receiver_id');

        $validator
            ->scalar('sender_id')
            ->maxLength('sender_id', 255)
            ->allowEmptyString('sender_id');

        $validator
            ->scalar('sender_unique_identifier')
            ->maxLength('sender_unique_identifier', 255)
            ->allowEmptyString('sender_unique_identifier');

        $validator
            ->scalar('worldwide_identifier')
            ->maxLength('worldwide_identifier', 255)
            ->allowEmptyString('worldwide_identifier');

        $validator
            ->scalar('case_narrative')
            ->maxLength('case_narrative', 4294967295)
            ->allowEmptyString('case_narrative');

        $validator
            ->scalar('date_first_received')
            ->maxLength('date_first_received', 255)
            ->allowEmptyString('date_first_received');

        $validator
            ->scalar('date_most_recent_info')
            ->maxLength('date_most_recent_info', 255)
            ->allowEmptyString('date_most_recent_info');

        $validator
            ->boolean('serious')
            ->allowEmptyString('serious');

        $validator
            ->scalar('patient_name')
            ->maxLength('patient_name', 255)
            ->allowEmptyString('patient_name');

        $validator
            ->scalar('patient_sex')
            ->maxLength('patient_sex', 255)
            ->allowEmptyString('patient_sex');

        $validator
            ->scalar('patient_dob')
            ->maxLength('patient_dob', 25)
            ->allowEmptyString('patient_dob');

        $validator
            ->scalar('patient_number')
            ->maxLength('patient_number', 255)
            ->allowEmptyString('patient_number');

        $validator
            ->scalar('past_medical')
            ->maxLength('past_medical', 4294967295)
            ->allowEmptyString('past_medical');

        $validator
            ->scalar('sender_address')
            ->maxLength('sender_address', 255)
            ->allowEmptyString('sender_address');

        $validator
            ->scalar('sender_city')
            ->maxLength('sender_city', 255)
            ->allowEmptyString('sender_city');

        $validator
            ->scalar('sender_state')
            ->maxLength('sender_state', 255)
            ->allowEmptyString('sender_state');

        $validator
            ->scalar('sender_department')
            ->maxLength('sender_department', 255)
            ->allowEmptyString('sender_department');

        $validator
            ->scalar('sender_organization')
            ->maxLength('sender_organization', 255)
            ->allowEmptyString('sender_organization');

        $validator
            ->boolean('results_in_detah')
            ->allowEmptyString('results_in_detah');

        $validator
            ->boolean('life_threatening')
            ->allowEmptyString('life_threatening');

        $validator
            ->boolean('prolonged_hospitalization')
            ->allowEmptyString('prolonged_hospitalization');

        $validator
            ->boolean('incapacitating')
            ->allowEmptyString('incapacitating');

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
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn('ce2b_id', 'Ce2bs'), ['errorField' => 'ce2b_id']);
        $rules->add($rules->existsIn('county_id', 'Counties'), ['errorField' => 'county_id']);
        $rules->add($rules->existsIn('sub_county_id', 'SubCounties'), ['errorField' => 'sub_county_id']);
        $rules->add($rules->existsIn('designation_id', 'Designations'), ['errorField' => 'designation_id']);

        return $rules;
    }
}
