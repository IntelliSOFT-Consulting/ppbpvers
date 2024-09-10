<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Saefis Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\SaefisTable&\Cake\ORM\Association\BelongsTo $Saefis
 * @property \App\Model\Table\DesignationsTable&\Cake\ORM\Association\BelongsTo $Designations
 * @property \App\Model\Table\AefiListOfVaccinesTable&\Cake\ORM\Association\HasMany $AefiListOfVaccines
 * @property \App\Model\Table\ReviewsTable&\Cake\ORM\Association\HasMany $Reviews
 * @property \App\Model\Table\SaefisTable&\Cake\ORM\Association\HasMany $Saefis
 *
 * @method \App\Model\Entity\Saefi newEmptyEntity()
 * @method \App\Model\Entity\Saefi newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Saefi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Saefi get($primaryKey, $options = [])
 * @method \App\Model\Entity\Saefi findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Saefi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Saefi[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Saefi|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Saefi saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Saefi[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Saefi[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Saefi[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Saefi[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SaefisTable extends Table
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

        $this->setTable('saefis');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Search.Search');
        $this->searchManager()
            ->value('retention_status');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Saefis', [
            'foreignKey' => 'saefi_id',
        ]);
        $this->belongsTo('Designations', [
            'foreignKey' => 'designation_id',
        ]);
        $this->hasMany('AefiListOfVaccines', [
            'foreignKey' => 'saefi_id',
        ]);
        $this->hasMany('Reviews', [
            'foreignKey' => 'saefi_id',
        ]);
        $this->hasMany('Saefis', [
            'foreignKey' => 'saefi_id',
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
            ->integer('saefi_id')
            ->allowEmptyString('saefi_id');

        $validator
            ->integer('initial_id')
            ->allowEmptyString('initial_id');

        $validator
            ->scalar('messageid')
            ->maxLength('messageid', 55)
            ->allowEmptyString('messageid');

        $validator
            ->scalar('vigiflow_ref')
            ->maxLength('vigiflow_ref', 255)
            ->allowEmptyString('vigiflow_ref');

        $validator
            ->scalar('vigiflow_date')
            ->maxLength('vigiflow_date', 255)
            ->allowEmptyString('vigiflow_date');

        $validator
            ->scalar('webradr_ref')
            ->maxLength('webradr_ref', 255)
            ->allowEmptyString('webradr_ref');

        $validator
            ->scalar('webradr_date')
            ->maxLength('webradr_date', 255)
            ->allowEmptyString('webradr_date');

        $validator
            ->integer('province_id')
            ->allowEmptyString('province_id');

        $validator
            ->scalar('district')
            ->maxLength('district', 255)
            ->allowEmptyString('district');

        $validator
            ->scalar('aefi_report_ref')
            ->maxLength('aefi_report_ref', 255)
            ->allowEmptyString('aefi_report_ref');

        $validator
            ->scalar('name_of_vaccination_site')
            ->maxLength('name_of_vaccination_site', 255)
            ->allowEmptyString('name_of_vaccination_site');

        $validator
            ->scalar('reference_no')
            ->maxLength('reference_no', 50)
            ->allowEmptyString('reference_no');

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
            ->scalar('place_vaccination')
            ->maxLength('place_vaccination', 101)
            ->allowEmptyString('place_vaccination');

        $validator
            ->scalar('place_vaccination_other')
            ->maxLength('place_vaccination_other', 250)
            ->allowEmptyString('place_vaccination_other');

        $validator
            ->scalar('site_type')
            ->maxLength('site_type', 100)
            ->allowEmptyString('site_type');

        $validator
            ->scalar('site_type_other')
            ->maxLength('site_type_other', 100)
            ->allowEmptyString('site_type_other');

        $validator
            ->scalar('vaccination_in')
            ->maxLength('vaccination_in', 100)
            ->allowEmptyString('vaccination_in');

        $validator
            ->scalar('vaccination_in_other')
            ->maxLength('vaccination_in_other', 255)
            ->allowEmptyString('vaccination_in_other');

        $validator
            ->scalar('reporter_name')
            ->maxLength('reporter_name', 255)
            ->allowEmptyString('reporter_name');

        $validator
            ->date('report_date')
            ->allowEmptyDate('report_date');

        $validator
            ->date('start_date')
            ->allowEmptyDate('start_date');

        $validator
            ->date('complete_date')
            ->allowEmptyDate('complete_date');

        $validator
            ->integer('designation_id')
            ->allowEmptyString('designation_id');

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 40)
            ->allowEmptyString('telephone');

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 40)
            ->allowEmptyString('mobile');

        $validator
            ->scalar('reporter_email')
            ->maxLength('reporter_email', 100)
            ->allowEmptyString('reporter_email');

        $validator
            ->scalar('patient_name')
            ->maxLength('patient_name', 200)
            ->allowEmptyString('patient_name');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 20)
            ->allowEmptyString('gender');

        $validator
            ->scalar('patient_address')
            ->maxLength('patient_address', 255)
            ->allowEmptyString('patient_address');

        $validator
            ->date('date_of_birth')
            ->allowEmptyDate('date_of_birth');

        $validator
            ->integer('age_at_onset_years')
            ->allowEmptyString('age_at_onset_years');

        $validator
            ->integer('age_at_onset_months')
            ->allowEmptyString('age_at_onset_months');

        $validator
            ->integer('age_at_onset_days')
            ->allowEmptyString('age_at_onset_days');

        $validator
            ->scalar('age_group')
            ->maxLength('age_group', 255)
            ->allowEmptyString('age_group');

        $validator
            ->dateTime('symptom_date')
            ->allowEmptyDateTime('symptom_date');

        $validator
            ->date('hospitalization_date')
            ->allowEmptyDate('hospitalization_date');

        $validator
            ->scalar('status_on_date')
            ->maxLength('status_on_date', 255)
            ->allowEmptyString('status_on_date');

        $validator
            ->dateTime('died_date')
            ->allowEmptyDateTime('died_date');

        $validator
            ->scalar('autopsy_done')
            ->maxLength('autopsy_done', 40)
            ->allowEmptyString('autopsy_done');

        $validator
            ->date('autopsy_done_date')
            ->allowEmptyDate('autopsy_done_date');

        $validator
            ->scalar('autopsy_planned')
            ->maxLength('autopsy_planned', 55)
            ->allowEmptyString('autopsy_planned');

        $validator
            ->dateTime('autopsy_planned_date')
            ->allowEmptyDateTime('autopsy_planned_date');

        $validator
            ->scalar('past_history')
            ->maxLength('past_history', 55)
            ->allowEmptyString('past_history');

        $validator
            ->scalar('past_history_remarks')
            ->allowEmptyString('past_history_remarks');

        $validator
            ->scalar('adverse_event')
            ->maxLength('adverse_event', 100)
            ->allowEmptyString('adverse_event');

        $validator
            ->scalar('adverse_event_remarks')
            ->allowEmptyString('adverse_event_remarks');

        $validator
            ->scalar('allergy_history')
            ->maxLength('allergy_history', 100)
            ->allowEmptyString('allergy_history');

        $validator
            ->scalar('allergy_history_remarks')
            ->allowEmptyString('allergy_history_remarks');

        $validator
            ->scalar('comorbidity_disorder')
            ->maxLength('comorbidity_disorder', 255)
            ->allowEmptyString('comorbidity_disorder');

        $validator
            ->scalar('comorbidity_disorder_remarks')
            ->allowEmptyString('comorbidity_disorder_remarks');

        $validator
            ->scalar('covid_positive')
            ->maxLength('covid_positive', 255)
            ->allowEmptyString('covid_positive');

        $validator
            ->scalar('covid_positive_remarks')
            ->allowEmptyString('covid_positive_remarks');

        $validator
            ->scalar('existing_illness')
            ->maxLength('existing_illness', 100)
            ->allowEmptyString('existing_illness');

        $validator
            ->scalar('existing_illness_remarks')
            ->allowEmptyString('existing_illness_remarks');

        $validator
            ->scalar('hospitalization_history')
            ->maxLength('hospitalization_history', 100)
            ->allowEmptyString('hospitalization_history');

        $validator
            ->scalar('hospitalization_history_remarks')
            ->allowEmptyString('hospitalization_history_remarks');

        $validator
            ->scalar('medication_vaccination')
            ->maxLength('medication_vaccination', 100)
            ->allowEmptyString('medication_vaccination');

        $validator
            ->scalar('medication_vaccination_remarks')
            ->allowEmptyString('medication_vaccination_remarks');

        $validator
            ->scalar('faith_healers')
            ->maxLength('faith_healers', 100)
            ->allowEmptyString('faith_healers');

        $validator
            ->scalar('faith_healers_remarks')
            ->allowEmptyString('faith_healers_remarks');

        $validator
            ->scalar('family_history')
            ->maxLength('family_history', 100)
            ->allowEmptyString('family_history');

        $validator
            ->scalar('family_history_remarks')
            ->allowEmptyString('family_history_remarks');

        $validator
            ->scalar('pregnant')
            ->maxLength('pregnant', 100)
            ->allowEmptyString('pregnant');

        $validator
            ->scalar('pregnant_weeks')
            ->maxLength('pregnant_weeks', 50)
            ->allowEmptyString('pregnant_weeks');

        $validator
            ->scalar('breastfeeding')
            ->maxLength('breastfeeding', 100)
            ->allowEmptyString('breastfeeding');

        $validator
            ->scalar('infant')
            ->maxLength('infant', 100)
            ->allowEmptyString('infant');

        $validator
            ->integer('birth_weight')
            ->allowEmptyString('birth_weight');

        $validator
            ->scalar('delivery_procedure')
            ->maxLength('delivery_procedure', 205)
            ->allowEmptyString('delivery_procedure');

        $validator
            ->scalar('delivery_procedure_specify')
            ->allowEmptyString('delivery_procedure_specify');

        $validator
            ->boolean('source_examination')
            ->allowEmptyString('source_examination');

        $validator
            ->boolean('source_documents')
            ->allowEmptyString('source_documents');

        $validator
            ->boolean('source_verbal')
            ->allowEmptyString('source_verbal');

        $validator
            ->scalar('verbal_source')
            ->allowEmptyString('verbal_source');

        $validator
            ->boolean('source_other')
            ->allowEmptyString('source_other');

        $validator
            ->scalar('source_other_specify')
            ->allowEmptyString('source_other_specify');

        $validator
            ->scalar('examiner_name')
            ->maxLength('examiner_name', 205)
            ->allowEmptyString('examiner_name');

        $validator
            ->scalar('other_sources')
            ->allowEmptyString('other_sources');

        $validator
            ->scalar('signs_symptoms')
            ->allowEmptyString('signs_symptoms');

        $validator
            ->scalar('person_details')
            ->maxLength('person_details', 255)
            ->allowEmptyString('person_details');

        $validator
            ->scalar('person_designation')
            ->maxLength('person_designation', 205)
            ->allowEmptyString('person_designation');

        $validator
            ->dateTime('person_date')
            ->allowEmptyDateTime('person_date');

        $validator
            ->scalar('medical_care')
            ->allowEmptyString('medical_care');

        $validator
            ->scalar('not_medical_care')
            ->allowEmptyString('not_medical_care');

        $validator
            ->scalar('final_diagnosis')
            ->allowEmptyString('final_diagnosis');

        $validator
            ->scalar('when_vaccinated')
            ->maxLength('when_vaccinated', 255)
            ->allowEmptyString('when_vaccinated');

        $validator
            ->scalar('vaccine_given')
            ->maxLength('vaccine_given', 255)
            ->allowEmptyString('vaccine_given');

        $validator
            ->scalar('when_vaccinated_specify')
            ->allowEmptyString('when_vaccinated_specify');

        $validator
            ->scalar('prescribing_error')
            ->maxLength('prescribing_error', 255)
            ->allowEmptyString('prescribing_error');

        $validator
            ->scalar('prescribing_error_specify')
            ->allowEmptyString('prescribing_error_specify');

        $validator
            ->scalar('vaccine_unsterile')
            ->maxLength('vaccine_unsterile', 255)
            ->allowEmptyString('vaccine_unsterile');

        $validator
            ->scalar('vaccine_unsterile_specify')
            ->allowEmptyString('vaccine_unsterile_specify');

        $validator
            ->scalar('vaccine_condition')
            ->maxLength('vaccine_condition', 255)
            ->allowEmptyString('vaccine_condition');

        $validator
            ->scalar('vaccine_condition_specify')
            ->allowEmptyString('vaccine_condition_specify');

        $validator
            ->scalar('vaccine_reconstitution')
            ->maxLength('vaccine_reconstitution', 255)
            ->allowEmptyString('vaccine_reconstitution');

        $validator
            ->scalar('vaccine_reconstitution_specify')
            ->allowEmptyString('vaccine_reconstitution_specify');

        $validator
            ->scalar('vaccine_handling')
            ->maxLength('vaccine_handling', 255)
            ->allowEmptyString('vaccine_handling');

        $validator
            ->scalar('vaccine_handling_specify')
            ->allowEmptyString('vaccine_handling_specify');

        $validator
            ->scalar('vaccine_administered')
            ->maxLength('vaccine_administered', 255)
            ->allowEmptyString('vaccine_administered');

        $validator
            ->scalar('vaccine_administered_specify')
            ->allowEmptyString('vaccine_administered_specify');

        $validator
            ->integer('vaccinated_vial')
            ->allowEmptyString('vaccinated_vial');

        $validator
            ->integer('vaccinated_session')
            ->allowEmptyString('vaccinated_session');

        $validator
            ->integer('vaccinated_locations')
            ->allowEmptyString('vaccinated_locations');

        $validator
            ->scalar('vaccinated_locations_specify')
            ->allowEmptyString('vaccinated_locations_specify');

        $validator
            ->scalar('vaccinated_cluster')
            ->maxLength('vaccinated_cluster', 255)
            ->allowEmptyString('vaccinated_cluster');

        $validator
            ->integer('vaccinated_cluster_number')
            ->allowEmptyString('vaccinated_cluster_number');

        $validator
            ->scalar('vaccinated_cluster_vial')
            ->maxLength('vaccinated_cluster_vial', 255)
            ->allowEmptyString('vaccinated_cluster_vial');

        $validator
            ->integer('vaccinated_cluster_vial_number')
            ->allowEmptyString('vaccinated_cluster_vial_number');

        $validator
            ->scalar('syringes_used')
            ->maxLength('syringes_used', 255)
            ->allowEmptyString('syringes_used');

        $validator
            ->scalar('syringes_used_specify')
            ->maxLength('syringes_used_specify', 255)
            ->allowEmptyString('syringes_used_specify');

        $validator
            ->scalar('syringes_used_other')
            ->maxLength('syringes_used_other', 255)
            ->allowEmptyString('syringes_used_other');

        $validator
            ->scalar('syringes_used_findings')
            ->allowEmptyString('syringes_used_findings');

        $validator
            ->scalar('injection_dose_route')
            ->maxLength('injection_dose_route', 255)
            ->allowEmptyString('injection_dose_route');

        $validator
            ->scalar('injection_time_mentioned')
            ->maxLength('injection_time_mentioned', 255)
            ->allowEmptyString('injection_time_mentioned');

        $validator
            ->scalar('injection_no_touch')
            ->maxLength('injection_no_touch', 255)
            ->allowEmptyString('injection_no_touch');

        $validator
            ->scalar('injection_contraindications')
            ->maxLength('injection_contraindications', 255)
            ->allowEmptyString('injection_contraindications');

        $validator
            ->scalar('injection_reported')
            ->maxLength('injection_reported', 255)
            ->allowEmptyString('injection_reported');

        $validator
            ->scalar('injection_vaccines')
            ->maxLength('injection_vaccines', 255)
            ->allowEmptyString('injection_vaccines');

        $validator
            ->scalar('injection_vaccines_yes')
            ->maxLength('injection_vaccines_yes', 255)
            ->allowEmptyString('injection_vaccines_yes');

        $validator
            ->scalar('injection_observations')
            ->allowEmptyString('injection_observations');

        $validator
            ->scalar('reconstitution_multiple')
            ->maxLength('reconstitution_multiple', 55)
            ->allowEmptyString('reconstitution_multiple');

        $validator
            ->scalar('reconstitution_different')
            ->maxLength('reconstitution_different', 55)
            ->allowEmptyString('reconstitution_different');

        $validator
            ->scalar('reconstitution_vial')
            ->maxLength('reconstitution_vial', 55)
            ->allowEmptyString('reconstitution_vial');

        $validator
            ->scalar('reconstitution_syringe')
            ->maxLength('reconstitution_syringe', 55)
            ->allowEmptyString('reconstitution_syringe');

        $validator
            ->scalar('reconstitution_vaccines')
            ->maxLength('reconstitution_vaccines', 55)
            ->allowEmptyString('reconstitution_vaccines');

        $validator
            ->scalar('reconstitution_observations')
            ->allowEmptyString('reconstitution_observations');

        $validator
            ->scalar('cold_temperature')
            ->maxLength('cold_temperature', 55)
            ->allowEmptyString('cold_temperature');

        $validator
            ->scalar('cold_temperature_deviation')
            ->maxLength('cold_temperature_deviation', 55)
            ->allowEmptyString('cold_temperature_deviation');

        $validator
            ->scalar('cold_temperature_specify')
            ->allowEmptyString('cold_temperature_specify');

        $validator
            ->scalar('procedure_followed')
            ->maxLength('procedure_followed', 55)
            ->allowEmptyString('procedure_followed');

        $validator
            ->scalar('other_items')
            ->maxLength('other_items', 55)
            ->allowEmptyString('other_items');

        $validator
            ->scalar('partial_vaccines')
            ->maxLength('partial_vaccines', 55)
            ->allowEmptyString('partial_vaccines');

        $validator
            ->scalar('unusable_vaccines')
            ->maxLength('unusable_vaccines', 55)
            ->allowEmptyString('unusable_vaccines');

        $validator
            ->scalar('unusable_diluents')
            ->maxLength('unusable_diluents', 55)
            ->allowEmptyString('unusable_diluents');

        $validator
            ->scalar('additional_observations')
            ->allowEmptyString('additional_observations');

        $validator
            ->scalar('cold_transportation')
            ->maxLength('cold_transportation', 55)
            ->allowEmptyString('cold_transportation');

        $validator
            ->scalar('vaccine_carrier')
            ->maxLength('vaccine_carrier', 55)
            ->allowEmptyString('vaccine_carrier');

        $validator
            ->scalar('coolant_packs')
            ->maxLength('coolant_packs', 55)
            ->allowEmptyString('coolant_packs');

        $validator
            ->scalar('transport_findings')
            ->allowEmptyString('transport_findings');

        $validator
            ->scalar('similar_events')
            ->maxLength('similar_events', 55)
            ->allowEmptyString('similar_events');

        $validator
            ->scalar('similar_events_describe')
            ->allowEmptyString('similar_events_describe');

        $validator
            ->integer('similar_events_episodes')
            ->allowEmptyString('similar_events_episodes');

        $validator
            ->integer('affected_vaccinated')
            ->allowEmptyString('affected_vaccinated');

        $validator
            ->integer('affected_not_vaccinated')
            ->allowEmptyString('affected_not_vaccinated');

        $validator
            ->scalar('affected_unknown')
            ->maxLength('affected_unknown', 255)
            ->allowEmptyString('affected_unknown');

        $validator
            ->scalar('community_comments')
            ->allowEmptyString('community_comments');

        $validator
            ->scalar('relevant_findings')
            ->allowEmptyString('relevant_findings');

        $validator
            ->dateTime('action_date')
            ->notEmptyDateTime('action_date');

        $validator
            ->integer('submitted')
            ->notEmptyString('submitted');

        $validator
            ->scalar('resubmit')
            ->maxLength('resubmit', 15)
            ->allowEmptyString('resubmit');

        $validator
            ->date('submitted_date')
            ->allowEmptyDate('submitted_date');

        $validator
            ->scalar('report_type')
            ->maxLength('report_type', 255)
            ->allowEmptyString('report_type');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->allowEmptyString('status');

        $validator
            ->allowEmptyString('active');

        $validator
            ->allowEmptyString('emails');

        $validator
            ->boolean('signature')
            ->allowEmptyString('signature');

        $validator
            ->allowEmptyString('deleted');

        $validator
            ->allowEmptyString('copied');

        $validator
            ->allowEmptyString('archived');

        $validator
            ->dateTime('archived_date')
            ->allowEmptyDateTime('archived_date');

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
            ->maxLength('reporter_name_diff', 100)
            ->allowEmptyString('reporter_name_diff');

        $validator
            ->scalar('reporter_designation_diff')
            ->maxLength('reporter_designation_diff', 100)
            ->allowEmptyString('reporter_designation_diff');

        $validator
            ->scalar('reporter_email_diff')
            ->maxLength('reporter_email_diff', 100)
            ->allowEmptyString('reporter_email_diff');

        $validator
            ->scalar('reporter_phone_diff')
            ->maxLength('reporter_phone_diff', 100)
            ->allowEmptyString('reporter_phone_diff');

        $validator
            ->scalar('reporter_date_diff')
            ->maxLength('reporter_date_diff', 100)
            ->allowEmptyString('reporter_date_diff');

        $validator
            ->scalar('patient_phone')
            ->maxLength('patient_phone', 255)
            ->allowEmptyString('patient_phone');

        $validator
            ->scalar('patient_street_name')
            ->maxLength('patient_street_name', 255)
            ->allowEmptyString('patient_street_name');

        $validator
            ->scalar('syringes_used_other_specify')
            ->maxLength('syringes_used_other_specify', 255)
            ->allowEmptyString('syringes_used_other_specify');

        $validator
            ->scalar('vaccinator_training')
            ->maxLength('vaccinator_training', 255)
            ->allowEmptyString('vaccinator_training');

        $validator
            ->scalar('description_of_reaction')
            ->maxLength('description_of_reaction', 255)
            ->allowEmptyString('description_of_reaction');

        $validator
            ->scalar('name_of_person_first_treated')
            ->maxLength('name_of_person_first_treated', 255)
            ->allowEmptyString('name_of_person_first_treated');

        $validator
            ->scalar('name_of_the_person_treating')
            ->maxLength('name_of_the_person_treating', 255)
            ->allowEmptyString('name_of_the_person_treating');

        $validator
            ->scalar('other_source_of_info')
            ->maxLength('other_source_of_info', 255)
            ->allowEmptyString('other_source_of_info');

        $validator
            ->scalar('patient_house_number')
            ->maxLength('patient_house_number', 255)
            ->allowEmptyString('patient_house_number');

        $validator
            ->scalar('time_of_first_symptom')
            ->maxLength('time_of_first_symptom', 255)
            ->allowEmptyString('time_of_first_symptom');

        $validator
            ->scalar('vaccine_name')
            ->maxLength('vaccine_name', 255)
            ->allowEmptyString('vaccine_name');

        $validator
            ->scalar('date_first_reported')
            ->maxLength('date_first_reported', 255)
            ->allowEmptyString('date_first_reported');

        $validator
            ->scalar('date_form_filled')
            ->maxLength('date_form_filled', 255)
            ->allowEmptyString('date_form_filled');

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
        $rules->add($rules->existsIn('saefi_id', 'Saefis'), ['errorField' => 'saefi_id']);
        $rules->add($rules->existsIn('designation_id', 'Designations'), ['errorField' => 'designation_id']);

        return $rules;
    }
}
