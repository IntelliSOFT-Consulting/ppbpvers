<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sadrs Model
 *
 * @property \App\Model\Table\SadrsTable&\Cake\ORM\Association\BelongsTo $Sadrs
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\PqmpsTable&\Cake\ORM\Association\BelongsTo $Pqmps
 * @property \App\Model\Table\MedicationsTable&\Cake\ORM\Association\BelongsTo $Medications
 * @property \App\Model\Table\CountiesTable&\Cake\ORM\Association\BelongsTo $Counties
 * @property \App\Model\Table\SubCountiesTable&\Cake\ORM\Association\BelongsTo $SubCounties
 * @property \App\Model\Table\DesignationsTable&\Cake\ORM\Association\BelongsTo $Designations
 * @property \App\Model\Table\AttachmentsOldTable&\Cake\ORM\Association\HasMany $AttachmentsOld
 * @property \App\Model\Table\SadrDescriptionsTable&\Cake\ORM\Association\HasMany $SadrDescriptions
 * @property \App\Model\Table\SadrFollowupsTable&\Cake\ORM\Association\HasMany $SadrFollowups
 * @property \App\Model\Table\SadrListOfDrugsTable&\Cake\ORM\Association\HasMany $SadrListOfDrugs
 * @property \App\Model\Table\SadrListOfMedicinesTable&\Cake\ORM\Association\HasMany $SadrListOfMedicines
 * @property \App\Model\Table\SadrReactionTable&\Cake\ORM\Association\HasMany $SadrReaction
 * @property \App\Model\Table\SadrsTable&\Cake\ORM\Association\HasMany $Sadrs
 *
 * @method \App\Model\Entity\Sadr newEmptyEntity()
 * @method \App\Model\Entity\Sadr newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Sadr[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sadr get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sadr findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Sadr patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sadr[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sadr|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sadr saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sadr[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sadr[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sadr[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sadr[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SadrsTable extends Table
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

        $this->setTable('sadrs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sadrs', [
            'foreignKey' => 'sadr_id',
        ]);
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
        $this->belongsTo('SubCounties', [
            'foreignKey' => 'sub_county_id',
        ]);
        $this->belongsTo('Designations', [
            'foreignKey' => 'designation_id',
        ]);
        $this->hasMany('AttachmentsOld', [
            'foreignKey' => 'sadr_id',
        ]);
        $this->hasMany('SadrDescriptions', [
            'foreignKey' => 'sadr_id',
        ]);
        $this->hasMany('SadrFollowups', [
            'foreignKey' => 'sadr_id',
        ]);
        $this->hasMany('SadrListOfDrugs', [
            'foreignKey' => 'sadr_id',
        ]);
        $this->hasMany('SadrListOfMedicines', [
            'foreignKey' => 'sadr_id',
        ]);
        $this->hasMany('SadrReaction', [
            'foreignKey' => 'sadr_id',
        ]);
        $this->hasMany('Sadrs', [
            'foreignKey' => 'sadr_id',
        ]);

        $this->hasMany('Attachment', [
            'foreignKey' => 'foreign_key',
            'conditions' => array('Attachment.model' => 'Sadr', 'Attachment.group' => 'attachment'),
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
            ->integer('sadr_id')
            ->allowEmptyString('sadr_id');

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
            ->scalar('vigiflow_id')
            ->maxLength('vigiflow_id', 50)
            ->allowEmptyString('vigiflow_id');

        $validator
            ->scalar('report_title')
            ->maxLength('report_title', 100)
            ->allowEmptyString('report_title');

        $validator
            ->scalar('report_type')
            ->maxLength('report_type', 20)
            ->allowEmptyString('report_type');

        $validator
            ->boolean('report_sadr')
            ->allowEmptyString('report_sadr');

        $validator
            ->boolean('report_therapeutic')
            ->allowEmptyString('report_therapeutic');

        $validator
            ->allowEmptyString('report_misuse');

        $validator
            ->allowEmptyString('report_off_label');

        $validator
            ->scalar('product_category')
            ->maxLength('product_category', 255)
            ->allowEmptyString('product_category');

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
            ->scalar('name_of_institution')
            ->maxLength('name_of_institution', 100)
            ->allowEmptyString('name_of_institution');

        $validator
            ->scalar('institution_code')
            ->maxLength('institution_code', 100)
            ->allowEmptyString('institution_code');

        $validator
            ->scalar('address')
            ->maxLength('address', 100)
            ->allowEmptyString('address');

        $validator
            ->scalar('contact')
            ->maxLength('contact', 100)
            ->allowEmptyString('contact');

        $validator
            ->scalar('patient_name')
            ->maxLength('patient_name', 100)
            ->allowEmptyString('patient_name');

        $validator
            ->scalar('ip_no')
            ->maxLength('ip_no', 100)
            ->allowEmptyString('ip_no');

        $validator
            ->scalar('date_of_birth')
            ->maxLength('date_of_birth', 20)
            ->allowEmptyString('date_of_birth');

        $validator
            ->scalar('age_group')
            ->maxLength('age_group', 40)
            ->allowEmptyString('age_group');

        $validator
            ->scalar('patient_address')
            ->maxLength('patient_address', 100)
            ->allowEmptyString('patient_address');

        $validator
            ->scalar('ward')
            ->maxLength('ward', 100)
            ->allowEmptyString('ward');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 7)
            ->allowEmptyString('gender');

        $validator
            ->scalar('known_allergy')
            ->maxLength('known_allergy', 3)
            ->allowEmptyString('known_allergy');

        $validator
            ->scalar('known_allergy_specify')
            ->maxLength('known_allergy_specify', 100)
            ->allowEmptyString('known_allergy_specify');

        $validator
            ->scalar('pregnant')
            ->maxLength('pregnant', 10)
            ->allowEmptyString('pregnant');

        $validator
            ->scalar('pregnancy_status')
            ->maxLength('pregnancy_status', 20)
            ->allowEmptyString('pregnancy_status');

        $validator
            ->scalar('weight')
            ->maxLength('weight', 10)
            ->allowEmptyString('weight');

        $validator
            ->scalar('height')
            ->maxLength('height', 10)
            ->allowEmptyString('height');

        $validator
            ->scalar('diagnosis')
            ->allowEmptyString('diagnosis');

        $validator
            ->scalar('reaction')
            ->maxLength('reaction', 500)
            ->allowEmptyString('reaction');

        $validator
            ->scalar('medical_history')
            ->allowEmptyString('medical_history');

        $validator
            ->scalar('date_of_onset_of_reaction')
            ->maxLength('date_of_onset_of_reaction', 20)
            ->allowEmptyString('date_of_onset_of_reaction');

        $validator
            ->scalar('description_of_reaction')
            ->allowEmptyString('description_of_reaction');

        $validator
            ->scalar('reaction_resolve')
            ->maxLength('reaction_resolve', 55)
            ->allowEmptyString('reaction_resolve');

        $validator
            ->scalar('reaction_reappear')
            ->maxLength('reaction_reappear', 55)
            ->allowEmptyString('reaction_reappear');

        $validator
            ->scalar('lab_investigation')
            ->allowEmptyString('lab_investigation');

        $validator
            ->scalar('severity')
            ->maxLength('severity', 100)
            ->allowEmptyString('severity');

        $validator
            ->scalar('serious')
            ->maxLength('serious', 255)
            ->allowEmptyString('serious');

        $validator
            ->scalar('serious_reason')
            ->maxLength('serious_reason', 255)
            ->allowEmptyString('serious_reason');

        $validator
            ->scalar('action_taken')
            ->maxLength('action_taken', 100)
            ->allowEmptyString('action_taken');

        $validator
            ->scalar('outcome')
            ->maxLength('outcome', 100)
            ->allowEmptyString('outcome');

        $validator
            ->scalar('causality')
            ->maxLength('causality', 100)
            ->allowEmptyString('causality');

        $validator
            ->scalar('any_other_comment')
            ->allowEmptyString('any_other_comment');

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
            ->allowEmptyString('submitted');

        $validator
            ->allowEmptyString('emails');

        $validator
            ->boolean('active')
            ->allowEmptyString('active');

        $validator
            ->allowEmptyString('device');

        $validator
            ->boolean('deleted')
            ->allowEmptyString('deleted');

        $validator
            ->boolean('archived')
            ->allowEmptyString('archived');

        $validator
            ->dateTime('archived_date')
            ->allowEmptyDateTime('archived_date');

        $validator
            ->dateTime('deleted_date')
            ->allowEmptyDateTime('deleted_date');

        $validator
            ->allowEmptyString('notified');

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

        $validator
            ->dateTime('vigiflow_date')
            ->allowEmptyDateTime('vigiflow_date');

        $validator
            ->scalar('webradr_ref')
            ->maxLength('webradr_ref', 255)
            ->allowEmptyString('webradr_ref');

        $validator
            ->dateTime('webradr_date')
            ->allowEmptyDateTime('webradr_date');

        $validator
            ->dateTime('submitted_date')
            ->allowEmptyDateTime('submitted_date');

        $validator
            ->scalar('webradr_message')
            ->maxLength('webradr_message', 255)
            ->allowEmptyString('webradr_message');

        $validator
            ->allowEmptyString('copied');

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
        $rules->add($rules->existsIn('sadr_id', 'Sadrs'), ['errorField' => 'sadr_id']);
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn('pqmp_id', 'Pqmps'), ['errorField' => 'pqmp_id']);
        $rules->add($rules->existsIn('medication_id', 'Medications'), ['errorField' => 'medication_id']);
        $rules->add($rules->existsIn('county_id', 'Counties'), ['errorField' => 'county_id']);
        $rules->add($rules->existsIn('sub_county_id', 'SubCounties'), ['errorField' => 'sub_county_id']);
        $rules->add($rules->existsIn('designation_id', 'Designations'), ['errorField' => 'designation_id']);

        return $rules;
    }
}
