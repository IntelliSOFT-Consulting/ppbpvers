<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aefis Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\PqmpsTable&\Cake\ORM\Association\BelongsTo $Pqmps
 * @property \App\Model\Table\AefisTable&\Cake\ORM\Association\BelongsTo $Aefis
 * @property \App\Model\Table\CountiesTable&\Cake\ORM\Association\BelongsTo $Counties
 * @property \App\Model\Table\SubCountiesTable&\Cake\ORM\Association\BelongsTo $SubCounties
 * @property \App\Model\Table\DesignationsTable&\Cake\ORM\Association\BelongsTo $Designations
 * @property \App\Model\Table\AefiDescriptionsTable&\Cake\ORM\Association\HasMany $AefiDescriptions
 * @property \App\Model\Table\AefiListOfVaccinesTable&\Cake\ORM\Association\HasMany $AefiListOfVaccines
 * @property \App\Model\Table\AefiReactionsTable&\Cake\ORM\Association\HasMany $AefiReactions
 * @property \App\Model\Table\AefisTable&\Cake\ORM\Association\HasMany $Aefis
 * @property \App\Model\Table\AttachmentsOldTable&\Cake\ORM\Association\HasMany $AttachmentsOld
 *
 * @method \App\Model\Entity\Aefi newEmptyEntity()
 * @method \App\Model\Entity\Aefi newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Aefi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aefi get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aefi findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Aefi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aefi[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aefi|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aefi saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aefi[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aefi[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aefi[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aefi[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AefisTable extends Table
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

        $this->setTable('aefis');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Pqmps', [
            'foreignKey' => 'pqmp_id',
        ]);
        $this->belongsTo('Aefis', [
            'foreignKey' => 'aefi_id',
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
        $this->hasMany('AefiDescriptions', [
            'foreignKey' => 'aefi_id',
        ]);
        $this->hasMany('AefiListOfVaccines', [
            'foreignKey' => 'aefi_id',
        ]);
        $this->hasMany('AefiReactions', [
            'foreignKey' => 'aefi_id',
        ]);
        $this->hasMany('Aefis', [
            'foreignKey' => 'aefi_id',
        ]);
        $this->hasMany('AttachmentsOld', [
            'foreignKey' => 'aefi_id',
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
            ->integer('pqmp_id')
            ->allowEmptyString('pqmp_id');

        $validator
            ->scalar('reference_no')
            ->maxLength('reference_no', 255)
            ->allowEmptyString('reference_no');

        $validator
            ->integer('aefi_id')
            ->allowEmptyString('aefi_id');

        $validator
            ->integer('county_id')
            ->allowEmptyString('county_id');

        $validator
            ->integer('sub_county_id')
            ->allowEmptyString('sub_county_id');

        $validator
            ->scalar('vigiflow_ref')
            ->maxLength('vigiflow_ref', 55)
            ->allowEmptyString('vigiflow_ref');

        $validator
            ->dateTime('vigiflow_date')
            ->allowEmptyDateTime('vigiflow_date');

        $validator
            ->scalar('vigiflow_message')
            ->maxLength('vigiflow_message', 4294967295)
            ->allowEmptyString('vigiflow_message');

        $validator
            ->scalar('webradr_ref')
            ->maxLength('webradr_ref', 255)
            ->allowEmptyString('webradr_ref');

        $validator
            ->dateTime('webradr_date')
            ->allowEmptyDateTime('webradr_date');

        $validator
            ->scalar('webradr_message')
            ->maxLength('webradr_message', 255)
            ->allowEmptyString('webradr_message');

        $validator
            ->integer('designation_id')
            ->allowEmptyString('designation_id');

        $validator
            ->scalar('report_type')
            ->maxLength('report_type', 20)
            ->allowEmptyString('report_type');

        $validator
            ->scalar('name_of_institution')
            ->maxLength('name_of_institution', 100)
            ->allowEmptyString('name_of_institution');

        $validator
            ->scalar('institution_code')
            ->maxLength('institution_code', 100)
            ->allowEmptyString('institution_code');

        $validator
            ->scalar('patient_name')
            ->maxLength('patient_name', 100)
            ->allowEmptyString('patient_name');

        $validator
            ->scalar('guardian_name')
            ->maxLength('guardian_name', 255)
            ->allowEmptyString('guardian_name');

        $validator
            ->scalar('patient_address')
            ->maxLength('patient_address', 255)
            ->allowEmptyString('patient_address');

        $validator
            ->scalar('patient_phone')
            ->maxLength('patient_phone', 255)
            ->allowEmptyString('patient_phone');

        $validator
            ->scalar('patient_village')
            ->maxLength('patient_village', 255)
            ->allowEmptyString('patient_village');

        $validator
            ->scalar('ip_no')
            ->maxLength('ip_no', 100)
            ->allowEmptyString('ip_no');

        $validator
            ->scalar('date_of_birth')
            ->maxLength('date_of_birth', 20)
            ->allowEmptyString('date_of_birth');

        $validator
            ->integer('age_months')
            ->allowEmptyString('age_months');

        $validator
            ->scalar('age_group')
            ->maxLength('age_group', 255)
            ->allowEmptyString('age_group');

        $validator
            ->scalar('patient_ward')
            ->maxLength('patient_ward', 100)
            ->allowEmptyString('patient_ward');

        $validator
            ->scalar('patient_county')
            ->maxLength('patient_county', 255)
            ->allowEmptyString('patient_county');

        $validator
            ->scalar('patient_sub_county')
            ->maxLength('patient_sub_county', 255)
            ->allowEmptyString('patient_sub_county');

        $validator
            ->scalar('vaccination_center')
            ->maxLength('vaccination_center', 255)
            ->allowEmptyString('vaccination_center');

        $validator
            ->scalar('vaccination_county')
            ->maxLength('vaccination_county', 255)
            ->allowEmptyString('vaccination_county');

        $validator
            ->scalar('vaccination_type')
            ->maxLength('vaccination_type', 255)
            ->allowEmptyString('vaccination_type');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 7)
            ->allowEmptyString('gender');

        $validator
            ->scalar('pregnancy_status')
            ->maxLength('pregnancy_status', 20)
            ->allowEmptyString('pregnancy_status');

        $validator
            ->boolean('bcg')
            ->allowEmptyString('bcg');

        $validator
            ->boolean('convulsion')
            ->allowEmptyString('convulsion');

        $validator
            ->boolean('urticaria')
            ->allowEmptyString('urticaria');

        $validator
            ->boolean('high_fever')
            ->allowEmptyString('high_fever');

        $validator
            ->boolean('abscess')
            ->allowEmptyString('abscess');

        $validator
            ->boolean('local_reaction')
            ->allowEmptyString('local_reaction');

        $validator
            ->boolean('anaphylaxis')
            ->allowEmptyString('anaphylaxis');

        $validator
            ->boolean('meningitis')
            ->allowEmptyString('meningitis');

        $validator
            ->boolean('paralysis')
            ->allowEmptyString('paralysis');

        $validator
            ->boolean('toxic_shock')
            ->allowEmptyString('toxic_shock');

        $validator
            ->boolean('complaint_other')
            ->allowEmptyString('complaint_other');

        $validator
            ->scalar('complaint_other_specify')
            ->allowEmptyString('complaint_other_specify');

        $validator
            ->scalar('description_of_reaction')
            ->allowEmptyString('description_of_reaction');

        $validator
            ->date('date_aefi_started')
            ->allowEmptyDate('date_aefi_started');

        $validator
            ->scalar('time_aefi_started')
            ->maxLength('time_aefi_started', 10)
            ->allowEmptyString('time_aefi_started');

        $validator
            ->scalar('aefi_symptoms')
            ->allowEmptyString('aefi_symptoms');

        $validator
            ->scalar('serious')
            ->maxLength('serious', 10)
            ->allowEmptyString('serious');

        $validator
            ->scalar('serious_yes')
            ->maxLength('serious_yes', 250)
            ->allowEmptyString('serious_yes');

        $validator
            ->scalar('serious_other')
            ->allowEmptyString('serious_other');

        $validator
            ->scalar('medical_history')
            ->allowEmptyString('medical_history');

        $validator
            ->scalar('treatment_given')
            ->allowEmptyString('treatment_given');

        $validator
            ->scalar('specimen_collected')
            ->maxLength('specimen_collected', 255)
            ->allowEmptyString('specimen_collected');

        $validator
            ->scalar('outcome')
            ->maxLength('outcome', 100)
            ->allowEmptyString('outcome');

        $validator
            ->scalar('reporter_name')
            ->maxLength('reporter_name', 100)
            ->allowEmptyString('reporter_name');

        $validator
            ->scalar('reporter_email')
            ->maxLength('reporter_email', 100)
            ->allowEmptyString('reporter_email');

        $validator
            ->scalar('reporter_phone')
            ->maxLength('reporter_phone', 100)
            ->allowEmptyString('reporter_phone');

        $validator
            ->date('reporter_date')
            ->allowEmptyDate('reporter_date');

        $validator
            ->allowEmptyString('submitted');

        $validator
            ->dateTime('submitted_date')
            ->allowEmptyDateTime('submitted_date');

        $validator
            ->boolean('active')
            ->allowEmptyString('active');

        $validator
            ->allowEmptyString('device');

        $validator
            ->allowEmptyString('copied');

        $validator
            ->allowEmptyString('archived');

        $validator
            ->dateTime('archived_date')
            ->allowEmptyDateTime('archived_date');

        $validator
            ->boolean('deleted')
            ->allowEmptyString('deleted');

        $validator
            ->dateTime('deleted_date')
            ->allowEmptyDateTime('deleted_date');

        $validator
            ->scalar('person_submitting')
            ->maxLength('person_submitting', 55)
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
            ->integer('assigned_to')
            ->allowEmptyString('assigned_to');

        $validator
            ->integer('assigned_by')
            ->allowEmptyString('assigned_by');

        $validator
            ->dateTime('assigned_date')
            ->allowEmptyDateTime('assigned_date');

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
        $rules->add($rules->existsIn('pqmp_id', 'Pqmps'), ['errorField' => 'pqmp_id']);
        $rules->add($rules->existsIn('aefi_id', 'Aefis'), ['errorField' => 'aefi_id']);
        $rules->add($rules->existsIn('county_id', 'Counties'), ['errorField' => 'county_id']);
        $rules->add($rules->existsIn('sub_county_id', 'SubCounties'), ['errorField' => 'sub_county_id']);
        $rules->add($rules->existsIn('designation_id', 'Designations'), ['errorField' => 'designation_id']);

        return $rules;
    }
}
