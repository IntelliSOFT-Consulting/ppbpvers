<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Devices Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\PqmpsTable&\Cake\ORM\Association\BelongsTo $Pqmps
 * @property \App\Model\Table\CountiesTable&\Cake\ORM\Association\BelongsTo $Counties
 * @property \App\Model\Table\DesignationsTable&\Cake\ORM\Association\BelongsTo $Designations
 * @property \App\Model\Table\DevicesTable&\Cake\ORM\Association\BelongsTo $Devices
 * @property \App\Model\Table\AttachmentsOldTable&\Cake\ORM\Association\HasMany $AttachmentsOld
 * @property \App\Model\Table\DevicesTable&\Cake\ORM\Association\HasMany $Devices
 * @property \App\Model\Table\ListOfDevicesTable&\Cake\ORM\Association\HasMany $ListOfDevices
 *
 * @method \App\Model\Entity\Device newEmptyEntity()
 * @method \App\Model\Entity\Device newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Device[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Device get($primaryKey, $options = [])
 * @method \App\Model\Entity\Device findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Device patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Device[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Device|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Device saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Device[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Device[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Device[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Device[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DevicesTable extends Table
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

        $this->setTable('devices');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Pqmps', [
            'foreignKey' => 'pqmp_id',
        ]);
        $this->belongsTo('Counties', [
            'foreignKey' => 'county_id',
        ]);
        $this->belongsTo('Designations', [
            'foreignKey' => 'designation_id',
        ]);
        $this->belongsTo('Devices', [
            'foreignKey' => 'device_id',
        ]);
        $this->hasMany('AttachmentsOld', [
            'foreignKey' => 'device_id',
        ]);
        $this->hasMany('Devices', [
            'foreignKey' => 'device_id',
        ]);
        $this->hasMany('ListOfDevices', [
            'foreignKey' => 'device_id',
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
            ->integer('county_id')
            ->allowEmptyString('county_id');

        $validator
            ->integer('designation_id')
            ->allowEmptyString('designation_id');

        $validator
            ->integer('device_id')
            ->allowEmptyString('device_id');

        $validator
            ->scalar('report_type')
            ->maxLength('report_type', 20)
            ->allowEmptyString('report_type');

        $validator
            ->scalar('report_title')
            ->maxLength('report_title', 255)
            ->allowEmptyString('report_title');

        $validator
            ->scalar('name_of_institution')
            ->maxLength('name_of_institution', 100)
            ->allowEmptyString('name_of_institution');

        $validator
            ->scalar('institution_code')
            ->maxLength('institution_code', 100)
            ->allowEmptyString('institution_code');

        $validator
            ->scalar('institution_address')
            ->maxLength('institution_address', 100)
            ->allowEmptyString('institution_address');

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
            ->maxLength('gender', 7)
            ->allowEmptyString('gender');

        $validator
            ->scalar('patient_address')
            ->maxLength('patient_address', 255)
            ->allowEmptyString('patient_address');

        $validator
            ->scalar('patient_phone')
            ->maxLength('patient_phone', 255)
            ->allowEmptyString('patient_phone');

        $validator
            ->numeric('patient_weight')
            ->allowEmptyString('patient_weight');

        $validator
            ->numeric('patient_height')
            ->allowEmptyString('patient_height');

        $validator
            ->scalar('pregnancy_status')
            ->maxLength('pregnancy_status', 55)
            ->allowEmptyString('pregnancy_status');

        $validator
            ->scalar('trimester')
            ->maxLength('trimester', 75)
            ->allowEmptyString('trimester');

        $validator
            ->scalar('ip_no')
            ->maxLength('ip_no', 100)
            ->allowEmptyString('ip_no');

        $validator
            ->scalar('date_of_birth')
            ->maxLength('date_of_birth', 20)
            ->allowEmptyString('date_of_birth');

        $validator
            ->scalar('age_years')
            ->maxLength('age_years', 55)
            ->allowEmptyString('age_years');

        $validator
            ->scalar('allergy')
            ->maxLength('allergy', 100)
            ->allowEmptyString('allergy');

        $validator
            ->scalar('allergy_specify')
            ->maxLength('allergy_specify', 255)
            ->allowEmptyString('allergy_specify');

        $validator
            ->scalar('problem_noted')
            ->maxLength('problem_noted', 25)
            ->allowEmptyString('problem_noted');

        $validator
            ->scalar('brand_name')
            ->maxLength('brand_name', 255)
            ->allowEmptyString('brand_name');

        $validator
            ->scalar('serial_no')
            ->maxLength('serial_no', 255)
            ->allowEmptyString('serial_no');

        $validator
            ->scalar('common_name')
            ->maxLength('common_name', 255)
            ->allowEmptyString('common_name');

        $validator
            ->scalar('device_model')
            ->maxLength('device_model', 255)
            ->allowEmptyString('device_model');

        $validator
            ->scalar('catalogue')
            ->maxLength('catalogue', 255)
            ->allowEmptyString('catalogue');

        $validator
            ->scalar('manufacturer_name')
            ->maxLength('manufacturer_name', 255)
            ->allowEmptyString('manufacturer_name');

        $validator
            ->scalar('manufacturer_address')
            ->maxLength('manufacturer_address', 255)
            ->allowEmptyString('manufacturer_address');

        $validator
            ->scalar('manufacture_date')
            ->maxLength('manufacture_date', 255)
            ->allowEmptyString('manufacture_date');

        $validator
            ->date('expiry_date')
            ->allowEmptyDate('expiry_date');

        $validator
            ->scalar('operator')
            ->maxLength('operator', 100)
            ->allowEmptyString('operator');

        $validator
            ->scalar('operator_specify')
            ->maxLength('operator_specify', 255)
            ->allowEmptyString('operator_specify');

        $validator
            ->scalar('device_usage')
            ->maxLength('device_usage', 100)
            ->allowEmptyString('device_usage');

        $validator
            ->scalar('device_duration_type')
            ->maxLength('device_duration_type', 255)
            ->allowEmptyString('device_duration_type');

        $validator
            ->integer('device_duration')
            ->allowEmptyString('device_duration');

        $validator
            ->scalar('device_availability')
            ->maxLength('device_availability', 25)
            ->allowEmptyString('device_availability');

        $validator
            ->scalar('device_unavailability')
            ->maxLength('device_unavailability', 255)
            ->allowEmptyString('device_unavailability');

        $validator
            ->date('implant_date')
            ->allowEmptyDate('implant_date');

        $validator
            ->date('explant_date')
            ->allowEmptyDate('explant_date');

        $validator
            ->scalar('implant_duration_type')
            ->maxLength('implant_duration_type', 255)
            ->allowEmptyString('implant_duration_type');

        $validator
            ->integer('implant_duration')
            ->allowEmptyString('implant_duration');

        $validator
            ->scalar('specimen_type')
            ->maxLength('specimen_type', 25)
            ->allowEmptyString('specimen_type');

        $validator
            ->integer('patients_involved')
            ->allowEmptyString('patients_involved');

        $validator
            ->integer('tests_done')
            ->allowEmptyString('tests_done');

        $validator
            ->integer('false_positives')
            ->allowEmptyString('false_positives');

        $validator
            ->integer('false_negatives')
            ->allowEmptyString('false_negatives');

        $validator
            ->integer('true_positives')
            ->allowEmptyString('true_positives');

        $validator
            ->integer('true_negatives')
            ->allowEmptyString('true_negatives');

        $validator
            ->date('date_onset_incident')
            ->allowEmptyDate('date_onset_incident');

        $validator
            ->scalar('serious')
            ->maxLength('serious', 10)
            ->allowEmptyString('serious');

        $validator
            ->scalar('serious_yes')
            ->maxLength('serious_yes', 250)
            ->allowEmptyString('serious_yes');

        $validator
            ->date('death_date')
            ->allowEmptyDate('death_date');

        $validator
            ->scalar('description_of_reaction')
            ->allowEmptyString('description_of_reaction');

        $validator
            ->scalar('remedial_action')
            ->allowEmptyString('remedial_action');

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
        $rules->add($rules->existsIn('county_id', 'Counties'), ['errorField' => 'county_id']);
        $rules->add($rules->existsIn('designation_id', 'Designations'), ['errorField' => 'designation_id']);
        $rules->add($rules->existsIn('device_id', 'Devices'), ['errorField' => 'device_id']);

        return $rules;
    }
}
