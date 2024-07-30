<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pqmps Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\PqmpsTable&\Cake\ORM\Association\BelongsTo $Pqmps
 * @property \App\Model\Table\CountiesTable&\Cake\ORM\Association\BelongsTo $Counties
 * @property \App\Model\Table\SubCountiesTable&\Cake\ORM\Association\BelongsTo $SubCounties
 * @property \App\Model\Table\CountriesTable&\Cake\ORM\Association\BelongsTo $Countries
 * @property \App\Model\Table\DesignationsTable&\Cake\ORM\Association\BelongsTo $Designations
 * @property \App\Model\Table\AefisTable&\Cake\ORM\Association\HasMany $Aefis
 * @property \App\Model\Table\AttachmentsOldTable&\Cake\ORM\Association\HasMany $AttachmentsOld
 * @property \App\Model\Table\DevicesTable&\Cake\ORM\Association\HasMany $Devices
 * @property \App\Model\Table\MedicationsTable&\Cake\ORM\Association\HasMany $Medications
 * @property \App\Model\Table\PqmpsTable&\Cake\ORM\Association\HasMany $Pqmps
 * @property \App\Model\Table\SadrsTable&\Cake\ORM\Association\HasMany $Sadrs
 * @property \App\Model\Table\TransfusionsTable&\Cake\ORM\Association\HasMany $Transfusions
 *
 * @method \App\Model\Entity\Pqmp newEmptyEntity()
 * @method \App\Model\Entity\Pqmp newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pqmp[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pqmp get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pqmp findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pqmp patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pqmp[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pqmp|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pqmp saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pqmp[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pqmp[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pqmp[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pqmp[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PqmpsTable extends Table
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

        $this->setTable('pqmps');
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
        $this->belongsTo('SubCounties', [
            'foreignKey' => 'sub_county_id',
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
        ]);
        $this->belongsTo('Designations', [
            'foreignKey' => 'designation_id',
        ]);
        $this->hasMany('Aefis', [
            'foreignKey' => 'pqmp_id',
        ]);
        $this->hasMany('AttachmentsOld', [
            'foreignKey' => 'pqmp_id',
        ]);
        $this->hasMany('Devices', [
            'foreignKey' => 'pqmp_id',
        ]);
        $this->hasMany('Medications', [
            'foreignKey' => 'pqmp_id',
        ]);
        $this->hasMany('Pqmps', [
            'foreignKey' => 'pqmp_id',
        ]);
        $this->hasMany('Sadrs', [
            'foreignKey' => 'pqmp_id',
        ]);
        $this->hasMany('Transfusions', [
            'foreignKey' => 'pqmp_id',
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
            ->integer('county_id')
            ->allowEmptyString('county_id');

        $validator
            ->integer('sub_county_id')
            ->allowEmptyString('sub_county_id');

        $validator
            ->integer('country_id')
            ->allowEmptyString('country_id');

        $validator
            ->integer('designation_id')
            ->allowEmptyString('designation_id');

        $validator
            ->scalar('reference_no')
            ->maxLength('reference_no', 55)
            ->allowEmptyString('reference_no');

        $validator
            ->scalar('facility_name')
            ->maxLength('facility_name', 100)
            ->allowEmptyString('facility_name');

        $validator
            ->scalar('facility_code')
            ->maxLength('facility_code', 100)
            ->allowEmptyString('facility_code');

        $validator
            ->scalar('facility_address')
            ->maxLength('facility_address', 100)
            ->allowEmptyString('facility_address');

        $validator
            ->scalar('facility_phone')
            ->maxLength('facility_phone', 100)
            ->allowEmptyString('facility_phone');

        $validator
            ->scalar('brand_name')
            ->maxLength('brand_name', 100)
            ->allowEmptyString('brand_name');

        $validator
            ->scalar('generic_name')
            ->maxLength('generic_name', 100)
            ->allowEmptyString('generic_name');

        $validator
            ->scalar('batch_number')
            ->maxLength('batch_number', 100)
            ->allowEmptyString('batch_number');

        $validator
            ->scalar('manufacture_date')
            ->maxLength('manufacture_date', 20)
            ->allowEmptyString('manufacture_date');

        $validator
            ->date('expiry_date')
            ->allowEmptyDate('expiry_date');

        $validator
            ->date('receipt_date')
            ->allowEmptyDate('receipt_date');

        $validator
            ->scalar('name_of_manufacturer')
            ->maxLength('name_of_manufacturer', 100)
            ->allowEmptyString('name_of_manufacturer');

        $validator
            ->scalar('country_of_origin')
            ->maxLength('country_of_origin', 100)
            ->allowEmptyString('country_of_origin');

        $validator
            ->scalar('supplier_name')
            ->maxLength('supplier_name', 100)
            ->allowEmptyString('supplier_name');

        $validator
            ->scalar('supplier_address')
            ->maxLength('supplier_address', 100)
            ->allowEmptyString('supplier_address');

        $validator
            ->scalar('product_formulation')
            ->maxLength('product_formulation', 70)
            ->allowEmptyString('product_formulation');

        $validator
            ->scalar('product_formulation_specify')
            ->maxLength('product_formulation_specify', 250)
            ->allowEmptyString('product_formulation_specify');

        $validator
            ->boolean('colour_change')
            ->allowEmptyString('colour_change');

        $validator
            ->boolean('separating')
            ->allowEmptyString('separating');

        $validator
            ->boolean('powdering')
            ->allowEmptyString('powdering');

        $validator
            ->boolean('caking')
            ->allowEmptyString('caking');

        $validator
            ->boolean('moulding')
            ->allowEmptyString('moulding');

        $validator
            ->boolean('odour_change')
            ->allowEmptyString('odour_change');

        $validator
            ->boolean('mislabeling')
            ->allowEmptyString('mislabeling');

        $validator
            ->boolean('incomplete_pack')
            ->allowEmptyString('incomplete_pack');

        $validator
            ->boolean('therapeutic_ineffectiveness')
            ->allowEmptyString('therapeutic_ineffectiveness');

        $validator
            ->boolean('particulate_matter')
            ->allowEmptyString('particulate_matter');

        $validator
            ->boolean('complaint_other')
            ->allowEmptyString('complaint_other');

        $validator
            ->scalar('complaint_other_specify')
            ->allowEmptyString('complaint_other_specify');

        $validator
            ->scalar('complaint_description')
            ->allowEmptyString('complaint_description');

        $validator
            ->scalar('require_refrigeration')
            ->maxLength('require_refrigeration', 10)
            ->allowEmptyString('require_refrigeration');

        $validator
            ->scalar('product_at_facility')
            ->maxLength('product_at_facility', 10)
            ->allowEmptyString('product_at_facility');

        $validator
            ->scalar('returned_by_client')
            ->maxLength('returned_by_client', 10)
            ->allowEmptyString('returned_by_client');

        $validator
            ->scalar('stored_to_recommendations')
            ->maxLength('stored_to_recommendations', 10)
            ->allowEmptyString('stored_to_recommendations');

        $validator
            ->scalar('other_details')
            ->allowEmptyString('other_details');

        $validator
            ->scalar('comments')
            ->allowEmptyString('comments');

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
            ->maxLength('reporter_phone', 255)
            ->allowEmptyString('reporter_phone');

        $validator
            ->scalar('contact_number')
            ->maxLength('contact_number', 100)
            ->allowEmptyString('contact_number');

        $validator
            ->scalar('adverse_reaction')
            ->maxLength('adverse_reaction', 255)
            ->allowEmptyString('adverse_reaction');

        $validator
            ->scalar('reaction_comments')
            ->allowEmptyString('reaction_comments');

        $validator
            ->scalar('medication_error')
            ->maxLength('medication_error', 255)
            ->allowEmptyString('medication_error');

        $validator
            ->allowEmptyString('emails');

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
            ->allowEmptyString('notified');

        $validator
            ->allowEmptyString('deleted');

        $validator
            ->dateTime('deleted_date')
            ->allowEmptyDateTime('deleted_date');

        $validator
            ->boolean('medicinal_product')
            ->allowEmptyString('medicinal_product');

        $validator
            ->boolean('blood_products')
            ->allowEmptyString('blood_products');

        $validator
            ->boolean('herbal_product')
            ->allowEmptyString('herbal_product');

        $validator
            ->boolean('medical_device')
            ->allowEmptyString('medical_device');

        $validator
            ->boolean('cosmeceuticals')
            ->allowEmptyString('cosmeceuticals');

        $validator
            ->boolean('product_other')
            ->allowEmptyString('product_other');

        $validator
            ->scalar('product_specify')
            ->maxLength('product_specify', 255)
            ->allowEmptyString('product_specify');

        $validator
            ->boolean('product_vaccine')
            ->allowEmptyString('product_vaccine');

        $validator
            ->boolean('packaging')
            ->allowEmptyString('packaging');

        $validator
            ->boolean('labelling')
            ->allowEmptyString('labelling');

        $validator
            ->boolean('sampling')
            ->allowEmptyString('sampling');

        $validator
            ->boolean('mechanism')
            ->allowEmptyString('mechanism');

        $validator
            ->boolean('electrical')
            ->allowEmptyString('electrical');

        $validator
            ->boolean('device_data')
            ->allowEmptyString('device_data');

        $validator
            ->boolean('software')
            ->allowEmptyString('software');

        $validator
            ->boolean('environmental')
            ->allowEmptyString('environmental');

        $validator
            ->boolean('failure_to_calibrate')
            ->allowEmptyString('failure_to_calibrate');

        $validator
            ->boolean('results')
            ->allowEmptyString('results');

        $validator
            ->boolean('readings')
            ->allowEmptyString('readings');

        $validator
            ->scalar('cold_chain')
            ->allowEmptyString('cold_chain');

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
        $rules->add($rules->existsIn('sub_county_id', 'SubCounties'), ['errorField' => 'sub_county_id']);
        $rules->add($rules->existsIn('country_id', 'Countries'), ['errorField' => 'country_id']);
        $rules->add($rules->existsIn('designation_id', 'Designations'), ['errorField' => 'designation_id']);

        return $rules;
    }
}
