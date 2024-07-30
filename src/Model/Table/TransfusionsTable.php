<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Transfusions Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\PqmpsTable&\Cake\ORM\Association\BelongsTo $Pqmps
 * @property \App\Model\Table\TransfusionsTable&\Cake\ORM\Association\BelongsTo $Transfusions
 * @property \App\Model\Table\CountiesTable&\Cake\ORM\Association\BelongsTo $Counties
 * @property \App\Model\Table\DesignationsTable&\Cake\ORM\Association\BelongsTo $Designations
 * @property \App\Model\Table\AttachmentsOldTable&\Cake\ORM\Association\HasMany $AttachmentsOld
 * @property \App\Model\Table\PintsTable&\Cake\ORM\Association\HasMany $Pints
 * @property \App\Model\Table\TransfusionsTable&\Cake\ORM\Association\HasMany $Transfusions
 *
 * @method \App\Model\Entity\Transfusion newEmptyEntity()
 * @method \App\Model\Entity\Transfusion newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Transfusion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Transfusion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Transfusion findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Transfusion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Transfusion[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Transfusion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Transfusion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Transfusion[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Transfusion[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Transfusion[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Transfusion[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TransfusionsTable extends Table
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

        $this->setTable('transfusions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Pqmps', [
            'foreignKey' => 'pqmp_id',
        ]);
        $this->belongsTo('Transfusions', [
            'foreignKey' => 'transfusion_id',
        ]);
        $this->belongsTo('Counties', [
            'foreignKey' => 'county_id',
        ]);
        $this->belongsTo('Designations', [
            'foreignKey' => 'designation_id',
        ]);
        $this->hasMany('AttachmentsOld', [
            'foreignKey' => 'transfusion_id',
        ]);
        $this->hasMany('Pints', [
            'foreignKey' => 'transfusion_id',
        ]);
        $this->hasMany('Transfusions', [
            'foreignKey' => 'transfusion_id',
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
            ->integer('transfusion_id')
            ->allowEmptyString('transfusion_id');

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
            ->scalar('form_type')
            ->maxLength('form_type', 25)
            ->allowEmptyString('form_type');

        $validator
            ->scalar('patient_name')
            ->maxLength('patient_name', 100)
            ->allowEmptyString('patient_name');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 10)
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
            ->scalar('date_of_birth')
            ->maxLength('date_of_birth', 20)
            ->allowEmptyString('date_of_birth');

        $validator
            ->scalar('age_years')
            ->maxLength('age_years', 70)
            ->allowEmptyString('age_years');

        $validator
            ->scalar('diagnosis')
            ->maxLength('diagnosis', 255)
            ->allowEmptyString('diagnosis');

        $validator
            ->scalar('ward')
            ->maxLength('ward', 255)
            ->allowEmptyString('ward');

        $validator
            ->scalar('pre_hb')
            ->maxLength('pre_hb', 25)
            ->allowEmptyString('pre_hb');

        $validator
            ->scalar('transfusion_reason')
            ->maxLength('transfusion_reason', 255)
            ->allowEmptyString('transfusion_reason');

        $validator
            ->scalar('current_medications')
            ->allowEmptyString('current_medications');

        $validator
            ->scalar('obstetric_history')
            ->maxLength('obstetric_history', 255)
            ->allowEmptyString('obstetric_history');

        $validator
            ->scalar('previous_transfusion')
            ->maxLength('previous_transfusion', 255)
            ->allowEmptyString('previous_transfusion');

        $validator
            ->scalar('transfusion_comment')
            ->allowEmptyString('transfusion_comment');

        $validator
            ->scalar('previous_reactions')
            ->maxLength('previous_reactions', 255)
            ->allowEmptyString('previous_reactions');

        $validator
            ->scalar('reaction_comment')
            ->allowEmptyString('reaction_comment');

        $validator
            ->scalar('reaction_general')
            ->maxLength('reaction_general', 255)
            ->allowEmptyString('reaction_general');

        $validator
            ->scalar('reaction_fever')
            ->maxLength('reaction_fever', 55)
            ->allowEmptyString('reaction_fever');

        $validator
            ->scalar('reaction_chills')
            ->maxLength('reaction_chills', 55)
            ->allowEmptyString('reaction_chills');

        $validator
            ->scalar('reaction_flushing')
            ->maxLength('reaction_flushing', 55)
            ->allowEmptyString('reaction_flushing');

        $validator
            ->scalar('reaction_vomiting')
            ->maxLength('reaction_vomiting', 55)
            ->allowEmptyString('reaction_vomiting');

        $validator
            ->scalar('reaction_dermatological')
            ->maxLength('reaction_dermatological', 255)
            ->allowEmptyString('reaction_dermatological');

        $validator
            ->scalar('reaction_cardiac')
            ->maxLength('reaction_cardiac', 255)
            ->allowEmptyString('reaction_cardiac');

        $validator
            ->scalar('reaction_chest')
            ->maxLength('reaction_chest', 55)
            ->allowEmptyString('reaction_chest');

        $validator
            ->scalar('reaction_dyspnoea')
            ->maxLength('reaction_dyspnoea', 55)
            ->allowEmptyString('reaction_dyspnoea');

        $validator
            ->scalar('reaction_hypotension')
            ->maxLength('reaction_hypotension', 55)
            ->allowEmptyString('reaction_hypotension');

        $validator
            ->scalar('reaction_tachycardia')
            ->maxLength('reaction_tachycardia', 55)
            ->allowEmptyString('reaction_tachycardia');

        $validator
            ->scalar('reaction_renal')
            ->maxLength('reaction_renal', 255)
            ->allowEmptyString('reaction_renal');

        $validator
            ->scalar('reaction_anuria')
            ->maxLength('reaction_anuria', 55)
            ->allowEmptyString('reaction_anuria');

        $validator
            ->scalar('reaction_oliguria')
            ->maxLength('reaction_oliguria', 55)
            ->allowEmptyString('reaction_oliguria');

        $validator
            ->scalar('reaction_dark')
            ->maxLength('reaction_dark', 55)
            ->allowEmptyString('reaction_dark');

        $validator
            ->scalar('reaction_haematological')
            ->maxLength('reaction_haematological', 255)
            ->allowEmptyString('reaction_haematological');

        $validator
            ->scalar('reaction_other')
            ->allowEmptyString('reaction_other');

        $validator
            ->scalar('vital_start_bp')
            ->maxLength('vital_start_bp', 55)
            ->allowEmptyString('vital_start_bp');

        $validator
            ->scalar('vital_start_t')
            ->maxLength('vital_start_t', 55)
            ->allowEmptyString('vital_start_t');

        $validator
            ->scalar('vital_start_p')
            ->maxLength('vital_start_p', 55)
            ->allowEmptyString('vital_start_p');

        $validator
            ->scalar('vital_start_r')
            ->maxLength('vital_start_r', 55)
            ->allowEmptyString('vital_start_r');

        $validator
            ->scalar('vital_during_bp')
            ->maxLength('vital_during_bp', 55)
            ->allowEmptyString('vital_during_bp');

        $validator
            ->scalar('vital_during_t')
            ->maxLength('vital_during_t', 55)
            ->allowEmptyString('vital_during_t');

        $validator
            ->scalar('vital_during_p')
            ->maxLength('vital_during_p', 55)
            ->allowEmptyString('vital_during_p');

        $validator
            ->scalar('vital_during_r')
            ->maxLength('vital_during_r', 55)
            ->allowEmptyString('vital_during_r');

        $validator
            ->scalar('vital_stop_bp')
            ->maxLength('vital_stop_bp', 55)
            ->allowEmptyString('vital_stop_bp');

        $validator
            ->scalar('vital_stop_t')
            ->maxLength('vital_stop_t', 55)
            ->allowEmptyString('vital_stop_t');

        $validator
            ->scalar('vital_stop_p')
            ->maxLength('vital_stop_p', 55)
            ->allowEmptyString('vital_stop_p');

        $validator
            ->scalar('vital_stop_r')
            ->maxLength('vital_stop_r', 55)
            ->allowEmptyString('vital_stop_r');

        $validator
            ->scalar('nurse_name')
            ->maxLength('nurse_name', 255)
            ->allowEmptyString('nurse_name');

        $validator
            ->scalar('lab_hemolysis')
            ->maxLength('lab_hemolysis', 100)
            ->allowEmptyString('lab_hemolysis');

        $validator
            ->scalar('lab_hemolysis_present')
            ->maxLength('lab_hemolysis_present', 55)
            ->allowEmptyString('lab_hemolysis_present');

        $validator
            ->scalar('recipient_blood')
            ->maxLength('recipient_blood', 25)
            ->allowEmptyString('recipient_blood');

        $validator
            ->scalar('hae_wbc')
            ->maxLength('hae_wbc', 255)
            ->allowEmptyString('hae_wbc');

        $validator
            ->scalar('hae_hb')
            ->maxLength('hae_hb', 255)
            ->allowEmptyString('hae_hb');

        $validator
            ->scalar('hae_rbc')
            ->maxLength('hae_rbc', 255)
            ->allowEmptyString('hae_rbc');

        $validator
            ->scalar('hae_hct')
            ->maxLength('hae_hct', 255)
            ->allowEmptyString('hae_hct');

        $validator
            ->scalar('hae_mcv')
            ->maxLength('hae_mcv', 255)
            ->allowEmptyString('hae_mcv');

        $validator
            ->scalar('hae_mch')
            ->maxLength('hae_mch', 255)
            ->allowEmptyString('hae_mch');

        $validator
            ->scalar('hae_mchc')
            ->maxLength('hae_mchc', 255)
            ->allowEmptyString('hae_mchc');

        $validator
            ->scalar('hae_plt')
            ->maxLength('hae_plt', 255)
            ->allowEmptyString('hae_plt');

        $validator
            ->scalar('film_rbc')
            ->maxLength('film_rbc', 255)
            ->allowEmptyString('film_rbc');

        $validator
            ->scalar('film_wbc')
            ->maxLength('film_wbc', 255)
            ->allowEmptyString('film_wbc');

        $validator
            ->scalar('film_plt')
            ->maxLength('film_plt', 255)
            ->allowEmptyString('film_plt');

        $validator
            ->scalar('donor_hemolysis')
            ->maxLength('donor_hemolysis', 255)
            ->allowEmptyString('donor_hemolysis');

        $validator
            ->scalar('donor_age')
            ->maxLength('donor_age', 55)
            ->allowEmptyString('donor_age');

        $validator
            ->scalar('culture_donor_pack')
            ->allowEmptyString('culture_donor_pack');

        $validator
            ->scalar('culture_recipient_blood')
            ->allowEmptyString('culture_recipient_blood');

        $validator
            ->scalar('compatible_saline_rt')
            ->maxLength('compatible_saline_rt', 55)
            ->allowEmptyString('compatible_saline_rt');

        $validator
            ->scalar('compatible_saline_ii')
            ->maxLength('compatible_saline_ii', 55)
            ->allowEmptyString('compatible_saline_ii');

        $validator
            ->scalar('compatible_ahg')
            ->maxLength('compatible_ahg', 55)
            ->allowEmptyString('compatible_ahg');

        $validator
            ->scalar('compatible_albumin')
            ->maxLength('compatible_albumin', 55)
            ->allowEmptyString('compatible_albumin');

        $validator
            ->scalar('negative_result')
            ->allowEmptyString('negative_result');

        $validator
            ->scalar('anti_a')
            ->maxLength('anti_a', 255)
            ->allowEmptyString('anti_a');

        $validator
            ->scalar('anti_b')
            ->maxLength('anti_b', 255)
            ->allowEmptyString('anti_b');

        $validator
            ->scalar('urinalysis')
            ->maxLength('urinalysis', 255)
            ->allowEmptyString('urinalysis');

        $validator
            ->scalar('evaluation')
            ->maxLength('evaluation', 255)
            ->allowEmptyString('evaluation');

        $validator
            ->scalar('adverse_reaction')
            ->maxLength('adverse_reaction', 255)
            ->allowEmptyString('adverse_reaction');

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
            ->maxLength('report_type', 55)
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
            ->scalar('clinic_venue')
            ->maxLength('clinic_venue', 155)
            ->allowEmptyString('clinic_venue');

        $validator
            ->allowEmptyString('specimens_post_transfusion');

        $validator
            ->allowEmptyString('specimens_edta_blood');

        $validator
            ->allowEmptyString('specimens_void_urine');

        $validator
            ->allowEmptyString('specimens_blood_reacted');

        $validator
            ->allowEmptyString('specimens_blood_bags');

        $validator
            ->scalar('clinic_code')
            ->maxLength('clinic_code', 55)
            ->allowEmptyString('clinic_code');

        $validator
            ->scalar('donor_number')
            ->maxLength('donor_number', 55)
            ->allowEmptyString('donor_number');

        $validator
            ->scalar('national_number')
            ->maxLength('national_number', 55)
            ->allowEmptyString('national_number');

        $validator
            ->scalar('home_phone')
            ->maxLength('home_phone', 55)
            ->allowEmptyString('home_phone');

        $validator
            ->scalar('cell_phone')
            ->maxLength('cell_phone', 55)
            ->allowEmptyString('cell_phone');

        $validator
            ->scalar('email_address')
            ->maxLength('email_address', 55)
            ->allowEmptyString('email_address');

        $validator
            ->scalar('residence')
            ->maxLength('residence', 55)
            ->allowEmptyString('residence');

        $validator
            ->date('nurse_date')
            ->allowEmptyDate('nurse_date');

        $validator
            ->scalar('low_volume')
            ->maxLength('low_volume', 75)
            ->allowEmptyString('low_volume');

        $validator
            ->scalar('venepuncture')
            ->maxLength('venepuncture', 85)
            ->allowEmptyString('venepuncture');

        $validator
            ->scalar('hematoma')
            ->maxLength('hematoma', 85)
            ->allowEmptyString('hematoma');

        $validator
            ->scalar('faint')
            ->maxLength('faint', 55)
            ->allowEmptyString('faint');

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
        $rules->add($rules->existsIn('transfusion_id', 'Transfusions'), ['errorField' => 'transfusion_id']);
        $rules->add($rules->existsIn('county_id', 'Counties'), ['errorField' => 'county_id']);
        $rules->add($rules->existsIn('designation_id', 'Designations'), ['errorField' => 'designation_id']);

        return $rules;
    }
}
