<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Padrs Model
 *
 * @property \App\Model\Table\PadrsTable&\Cake\ORM\Association\BelongsTo $Padrs
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CountiesTable&\Cake\ORM\Association\BelongsTo $Counties
 * @property \App\Model\Table\SubCountiesTable&\Cake\ORM\Association\BelongsTo $SubCounties
 * @property \App\Model\Table\DesignationsTable&\Cake\ORM\Association\BelongsTo $Designations
 * @property \App\Model\Table\PadrListOfMedicinesTable&\Cake\ORM\Association\HasMany $PadrListOfMedicines
 * @property \App\Model\Table\PadrsTable&\Cake\ORM\Association\HasMany $Padrs
 *
 * @method \App\Model\Entity\Padr newEmptyEntity()
 * @method \App\Model\Entity\Padr newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Padr[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Padr get($primaryKey, $options = [])
 * @method \App\Model\Entity\Padr findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Padr patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Padr[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Padr|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Padr saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Padr[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Padr[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Padr[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Padr[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PadrsTable extends Table
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

        $this->setTable('padrs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Padrs', [
            'foreignKey' => 'padr_id',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
        $this->hasMany('PadrListOfMedicines', [
            'foreignKey' => 'padr_id',
            'cascadeCallbacks' => true,
        ]);
        $this->hasMany('Padrs', [
            'foreignKey' => 'padr_id',
            'cascadeCallbacks' => true,
        ]);
        $this->hasMany('Attachments', [
            'foreignKey' => 'foreign_key',
            'dependent' => true,
            'cascadeCallbacks' => true,
            'conditions' => [
                'Attachments.model' => 'Padr',
                //  'Attachments.group' => 'attachment'
            ],
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
            ->integer('padr_id')
            ->allowEmptyString('padr_id');

        $validator
            ->integer('user_id')
            ->allowEmptyString('user_id');


        $validator
            ->scalar('reporter_name')
            ->maxLength('reporter_name', 100)
            ->notEmptyString('reporter_name', 'Please provide reporter name');

        $validator
            ->integer('county_id')
            ->notEmptyString('county_id', 'Please provide county');

        $validator
            ->integer('sub_county_id')
            ->notEmptyString('sub_county_id', 'Please select a sub county');

        $validator
            ->integer('designation_id')
            ->allowEmptyString('designation_id');

        $validator
            ->scalar('reference_no')
            ->maxLength('reference_no', 55)
            ->allowEmptyString('reference_no');

        $validator
            ->scalar('token')
            ->maxLength('token', 200)
            ->allowEmptyString('token');

        $validator
            ->scalar('relation')
            ->maxLength('relation', 55)
            ->allowEmptyString('relation');

        $validator
            ->scalar('vigiflow_ref')
            ->maxLength('vigiflow_ref', 255)
            ->allowEmptyString('vigiflow_ref');

        $validator
            ->scalar('vigiflow_message')
            ->allowEmptyString('vigiflow_message');

        $validator
            ->scalar('vigiflow_date')
            ->maxLength('vigiflow_date', 255)
            ->allowEmptyString('vigiflow_date');

        $validator
            ->scalar('report_title')
            ->maxLength('report_title', 100)
            ->allowEmptyString('report_title');

        $validator
            ->scalar('report_type')
            ->maxLength('report_type', 20)
            ->allowEmptyString('report_type');

        $validator
            ->scalar('report_sadr')
            ->maxLength('report_sadr', 55)
            ->allowEmptyString('report_sadr');

        $validator
            ->boolean('sadr_vomiting')
            ->allowEmptyString('sadr_vomiting');

        $validator
            ->boolean('sadr_dizziness')
            ->allowEmptyString('sadr_dizziness');

        $validator
            ->boolean('sadr_headache')
            ->allowEmptyString('sadr_headache');

        $validator
            ->boolean('sadr_joints')
            ->allowEmptyString('sadr_joints');

        $validator
            ->boolean('sadr_rash')
            ->allowEmptyString('sadr_rash');

        $validator
            ->boolean('sadr_mouth')
            ->allowEmptyString('sadr_mouth');

        $validator
            ->boolean('sadr_stomach')
            ->allowEmptyString('sadr_stomach');

        $validator
            ->boolean('sadr_urination')
            ->allowEmptyString('sadr_urination');

        $validator
            ->boolean('sadr_eyes')
            ->allowEmptyString('sadr_eyes');

        $validator
            ->boolean('sadr_died')
            ->allowEmptyString('sadr_died');

        $validator
            ->boolean('pqmp_label')
            ->allowEmptyString('pqmp_label');

        $validator
            ->scalar('patient_name')
            ->maxLength('patient_name', 100)
            ->allowEmptyString('patient_name');

        $validator
            ->boolean('pqmp_material')
            ->allowEmptyString('pqmp_material');

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
            ->boolean('pqmp_color')
            ->allowEmptyString('pqmp_color');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 7)
            ->allowEmptyString('gender');

        $validator
            ->boolean('pqmp_smell')
            ->allowEmptyString('pqmp_smell');

        $validator
            ->boolean('pqmp_working')
            ->allowEmptyString('pqmp_working');

        $validator
            ->boolean('pqmp_bottle')
            ->allowEmptyString('pqmp_bottle');

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
            ->scalar('medical_history')
            ->allowEmptyString('medical_history');

        $validator
            ->scalar('date_of_onset_of_reaction')
            ->maxLength('date_of_onset_of_reaction', 20)
            ->allowEmptyString('date_of_onset_of_reaction');

        $validator
            ->scalar('date_of_end_of_reaction')
            ->maxLength('date_of_end_of_reaction', 25)
            ->allowEmptyString('date_of_end_of_reaction');

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
            ->scalar('reporter_email')
            ->maxLength('reporter_email', 100)
            ->allowEmptyString('reporter_email');

        $validator
            ->scalar('reporter_phone')
            ->maxLength('reporter_phone', 100)
            ->allowEmptyString('reporter_phone');
        // Custom validation rule to check that at least one field is filled
        $validator->add('reporter_email', 'custom', [
            'rule' => [$this, 'validateReporterContact'],
            'message' => 'Please provide either an email or a phone number.'
        ]);

        $validator->add('reporter_phone', 'custom', [
            'rule' => [$this, 'validateReporterContact'],
            'message' => 'Please provide either an email or a phone number.'
        ]);


        $validator
            ->dateTime('submitted_date')
            ->allowEmptyDateTime('submitted_date');

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
            ->dateTime('deleted_date')
            ->allowEmptyDateTime('deleted_date');

        $validator
            ->allowEmptyString('notified');

        $validator
            ->date('reporter_date')
            ->allowEmptyDate('reporter_date');

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
            ->dateTime('assigned_date')
            ->allowEmptyDateTime('assigned_date');

        $validator
            ->scalar('reaction_on')
            ->maxLength('reaction_on', 25)
            ->allowEmptyString('reaction_on');

        $validator
            ->scalar('consent')
            ->maxLength('consent', 255)
            ->allowEmptyString('consent'); 
        return $validator;
    }


    // Custom validation function
    public function validateReporterContact($value, $context)
    {
        $reporterEmail = $context['data']['reporter_email'] ?? null;
        $reporterPhone = $context['data']['reporter_phone'] ?? null;

        // Validation passes if either reporter_email or reporter_phone is provided
        return !empty($reporterEmail) || !empty($reporterPhone);
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
        $rules->add($rules->existsIn('padr_id', 'Padrs'), ['errorField' => 'padr_id']);
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn('county_id', 'Counties'), ['errorField' => 'county_id']);
        $rules->add($rules->existsIn('sub_county_id', 'SubCounties'), ['errorField' => 'sub_county_id']);
        $rules->add($rules->existsIn('designation_id', 'Designations'), ['errorField' => 'designation_id']);

        return $rules;
    }
}
