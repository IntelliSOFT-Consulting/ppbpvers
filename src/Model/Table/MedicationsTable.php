<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Medications Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\PqmpsTable&\Cake\ORM\Association\BelongsTo $Pqmps
 * @property \App\Model\Table\MedicationsTable&\Cake\ORM\Association\BelongsTo $Medications
 * @property \App\Model\Table\CountiesTable&\Cake\ORM\Association\BelongsTo $Counties
 * @property \App\Model\Table\DesignationsTable&\Cake\ORM\Association\BelongsTo $Designations
 * @property \App\Model\Table\AttachmentsOldTable&\Cake\ORM\Association\HasMany $AttachmentsOld
 * @property \App\Model\Table\MedicationProductsTable&\Cake\ORM\Association\HasMany $MedicationProducts
 * @property \App\Model\Table\MedicationsTable&\Cake\ORM\Association\HasMany $Medications
 * @property \App\Model\Table\SadrsTable&\Cake\ORM\Association\HasMany $Sadrs
 *
 * @method \App\Model\Entity\Medication newEmptyEntity()
 * @method \App\Model\Entity\Medication newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Medication[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Medication get($primaryKey, $options = [])
 * @method \App\Model\Entity\Medication findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Medication patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Medication[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Medication|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medication saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medication[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Medication[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Medication[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Medication[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MedicationsTable extends Table
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

        $this->setTable('medications');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Pqmps', [
            'foreignKey' => 'pqmp_id',
        ]);
        $this->belongsTo('Medications', [
            'foreignKey' => 'medication_id',
        ]);
        $this->belongsTo('Counties', [
            'foreignKey' => 'county_id',
        ]);
        $this->belongsTo('Designations', [
            'foreignKey' => 'designation_id',
        ]);
        $this->hasMany('AttachmentsOld', [
            'foreignKey' => 'medication_id',
        ]);
        $this->hasMany('MedicationProducts', [
            'foreignKey' => 'medication_id',
        ]);
        $this->hasMany('Medications', [
            'foreignKey' => 'medication_id',
        ]);
        $this->hasMany('Sadrs', [
            'foreignKey' => 'medication_id',
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
            ->integer('medication_id')
            ->allowEmptyString('medication_id');

        $validator
            ->scalar('reference_no')
            ->maxLength('reference_no', 255)
            ->allowEmptyString('reference_no');

        $validator
            ->scalar('adverse_reaction')
            ->maxLength('adverse_reaction', 255)
            ->allowEmptyString('adverse_reaction');

        $validator
            ->integer('county_id')
            ->allowEmptyString('county_id');

        $validator
            ->integer('designation_id')
            ->allowEmptyString('designation_id');

        $validator
            ->date('date_of_event')
            ->allowEmptyDate('date_of_event');

        $validator
            ->scalar('time_of_event')
            ->maxLength('time_of_event', 10)
            ->allowEmptyString('time_of_event');

        $validator
            ->scalar('name_of_institution')
            ->maxLength('name_of_institution', 100)
            ->allowEmptyString('name_of_institution');

        $validator
            ->scalar('institution_code')
            ->maxLength('institution_code', 100)
            ->allowEmptyString('institution_code');

        $validator
            ->scalar('institution_contact')
            ->maxLength('institution_contact', 100)
            ->allowEmptyString('institution_contact');

        $validator
            ->scalar('patient_name')
            ->maxLength('patient_name', 100)
            ->allowEmptyString('patient_name');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 10)
            ->allowEmptyString('gender');

        $validator
            ->scalar('pregnancy_status')
            ->maxLength('pregnancy_status', 55)
            ->allowEmptyString('pregnancy_status');

        $validator
            ->scalar('patient_phone')
            ->maxLength('patient_phone', 255)
            ->allowEmptyString('patient_phone');

        $validator
            ->date('date_of_birth')
            ->allowEmptyDate('date_of_birth');

        $validator
            ->scalar('age_years')
            ->maxLength('age_years', 70)
            ->allowEmptyString('age_years');

        $validator
            ->scalar('ward')
            ->maxLength('ward', 255)
            ->allowEmptyString('ward');

        $validator
            ->scalar('clinic')
            ->maxLength('clinic', 255)
            ->allowEmptyString('clinic');

        $validator
            ->scalar('pharmacy')
            ->maxLength('pharmacy', 255)
            ->allowEmptyString('pharmacy');

        $validator
            ->scalar('accident')
            ->maxLength('accident', 255)
            ->allowEmptyString('accident');

        $validator
            ->scalar('location_other')
            ->maxLength('location_other', 255)
            ->allowEmptyString('location_other');

        $validator
            ->scalar('description_of_error')
            ->allowEmptyString('description_of_error');

        $validator
            ->scalar('process_occur')
            ->maxLength('process_occur', 255)
            ->allowEmptyString('process_occur');

        $validator
            ->scalar('process_occur_specify')
            ->maxLength('process_occur_specify', 255)
            ->allowEmptyString('process_occur_specify');

        $validator
            ->scalar('reach_patient')
            ->maxLength('reach_patient', 25)
            ->allowEmptyString('reach_patient');

        $validator
            ->scalar('correct_medication')
            ->maxLength('correct_medication', 25)
            ->allowEmptyString('correct_medication');

        $validator
            ->scalar('direct_result')
            ->allowEmptyString('direct_result');

        $validator
            ->scalar('outcome')
            ->maxLength('outcome', 255)
            ->allowEmptyString('outcome');

        $validator
            ->scalar('outcome_error')
            ->maxLength('outcome_error', 255)
            ->allowEmptyString('outcome_error');

        $validator
            ->scalar('outcome_death')
            ->maxLength('outcome_death', 255)
            ->allowEmptyString('outcome_death');

        $validator
            ->boolean('error_cause_inexperience')
            ->allowEmptyString('error_cause_inexperience');

        $validator
            ->boolean('error_cause_knowledge')
            ->allowEmptyString('error_cause_knowledge');

        $validator
            ->boolean('error_cause_distraction')
            ->allowEmptyString('error_cause_distraction');

        $validator
            ->boolean('error_cause_sound')
            ->allowEmptyString('error_cause_sound');

        $validator
            ->boolean('error_cause_medication')
            ->allowEmptyString('error_cause_medication');

        $validator
            ->boolean('error_cause_packaging')
            ->allowEmptyString('error_cause_packaging');

        $validator
            ->boolean('error_cause_workload')
            ->allowEmptyString('error_cause_workload');

        $validator
            ->boolean('error_cause_peak')
            ->allowEmptyString('error_cause_peak');

        $validator
            ->boolean('error_cause_stock')
            ->allowEmptyString('error_cause_stock');

        $validator
            ->boolean('error_cause_procedure')
            ->allowEmptyString('error_cause_procedure');

        $validator
            ->boolean('error_cause_abbreviations')
            ->allowEmptyString('error_cause_abbreviations');

        $validator
            ->boolean('error_cause_illegible')
            ->allowEmptyString('error_cause_illegible');

        $validator
            ->boolean('error_cause_inaccurate')
            ->allowEmptyString('error_cause_inaccurate');

        $validator
            ->boolean('error_cause_labelling')
            ->allowEmptyString('error_cause_labelling');

        $validator
            ->boolean('error_cause_computer')
            ->allowEmptyString('error_cause_computer');

        $validator
            ->boolean('error_cause_other')
            ->allowEmptyString('error_cause_other');

        $validator
            ->scalar('error_cause_specify')
            ->allowEmptyString('error_cause_specify');

        $validator
            ->scalar('recommendations')
            ->allowEmptyString('recommendations');

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
            ->scalar('report_type')
            ->maxLength('report_type', 25)
            ->allowEmptyString('report_type');

        $validator
            ->allowEmptyString('submitted');

        $validator
            ->dateTime('submitted_date')
            ->allowEmptyDateTime('submitted_date');

        $validator
            ->allowEmptyString('copied');

        $validator
            ->allowEmptyString('archived');

        $validator
            ->dateTime('archived_date')
            ->allowEmptyDateTime('archived_date');

        $validator
            ->boolean('active')
            ->allowEmptyString('active');

        $validator
            ->allowEmptyString('deleted');

        $validator
            ->dateTime('deleted_date')
            ->allowEmptyDateTime('deleted_date');

        $validator
            ->date('reporter_date')
            ->allowEmptyDate('reporter_date');

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

        $validator
            ->scalar('vigiflow_message')
            ->allowEmptyString('vigiflow_message');

        $validator
            ->scalar('vigiflow_ref')
            ->maxLength('vigiflow_ref', 255)
            ->allowEmptyString('vigiflow_ref');

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
        $rules->add($rules->existsIn('medication_id', 'Medications'), ['errorField' => 'medication_id']);
        $rules->add($rules->existsIn('county_id', 'Counties'), ['errorField' => 'county_id']);
        $rules->add($rules->existsIn('designation_id', 'Designations'), ['errorField' => 'designation_id']);

        return $rules;
    }
}
