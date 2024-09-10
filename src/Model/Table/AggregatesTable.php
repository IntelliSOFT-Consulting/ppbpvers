<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aggregates Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\AggregatesTable&\Cake\ORM\Association\BelongsTo $Aggregates
 * @property \App\Model\Table\CountiesTable&\Cake\ORM\Association\BelongsTo $Counties
 * @property \App\Model\Table\SubCountiesTable&\Cake\ORM\Association\BelongsTo $SubCounties
 * @property \App\Model\Table\DesignationsTable&\Cake\ORM\Association\BelongsTo $Designations
 * @property \App\Model\Table\AggregateListOfSignalsTable&\Cake\ORM\Association\HasMany $AggregateListOfSignals
 * @property \App\Model\Table\AggregatesTable&\Cake\ORM\Association\HasMany $Aggregates
 *
 * @method \App\Model\Entity\Aggregate newEmptyEntity()
 * @method \App\Model\Entity\Aggregate newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Aggregate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aggregate get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aggregate findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Aggregate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aggregate[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aggregate|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aggregate saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aggregate[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aggregate[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aggregate[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aggregate[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AggregatesTable extends Table
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

        $this->setTable('aggregates');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Search.Search');
        $this->searchManager()
            ->value('retention_status');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Aggregates', [
            'foreignKey' => 'aggregate_id',
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
        $this->hasMany('AggregateListOfSignals', [
            'foreignKey' => 'aggregate_id',
        ]);
        $this->hasMany('Aggregates', [
            'foreignKey' => 'aggregate_id',
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
            ->integer('aggregate_id')
            ->allowEmptyString('aggregate_id');

        $validator
            ->integer('county_id')
            ->allowEmptyString('county_id');

        $validator
            ->scalar('summary_available')
            ->maxLength('summary_available', 11)
            ->allowEmptyString('summary_available');

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
            ->scalar('brand_name')
            ->maxLength('brand_name', 255)
            ->allowEmptyString('brand_name');

        $validator
            ->scalar('inn_name')
            ->maxLength('inn_name', 255)
            ->allowEmptyString('inn_name');

        $validator
            ->scalar('mah')
            ->maxLength('mah', 255)
            ->allowEmptyString('mah');

        $validator
            ->scalar('local_technical')
            ->maxLength('local_technical', 255)
            ->allowEmptyString('local_technical');

        $validator
            ->scalar('therapeutic_group')
            ->maxLength('therapeutic_group', 255)
            ->allowEmptyString('therapeutic_group');

        $validator
            ->scalar('authorised_indications')
            ->maxLength('authorised_indications', 255)
            ->allowEmptyString('authorised_indications');

        $validator
            ->scalar('form_strength')
            ->maxLength('form_strength', 255)
            ->allowEmptyString('form_strength');

        $validator
            ->integer('interval_code')
            ->allowEmptyString('interval_code');

        $validator
            ->scalar('submission_frequency')
            ->maxLength('submission_frequency', 255)
            ->allowEmptyString('submission_frequency');

        $validator
            ->dateTime('reminder_date')
            ->allowEmptyDateTime('reminder_date');

        $validator
            ->scalar('introduction')
            ->maxLength('introduction', 4294967295)
            ->allowEmptyString('introduction');

        $validator
            ->scalar('worldwide_marketing')
            ->maxLength('worldwide_marketing', 4294967295)
            ->allowEmptyString('worldwide_marketing');

        $validator
            ->scalar('action_taken')
            ->maxLength('action_taken', 4294967295)
            ->allowEmptyString('action_taken');

        $validator
            ->scalar('reference_changes')
            ->maxLength('reference_changes', 4294967295)
            ->allowEmptyString('reference_changes');

        $validator
            ->scalar('estimated_exposure')
            ->maxLength('estimated_exposure', 4294967295)
            ->allowEmptyString('estimated_exposure');

        $validator
            ->scalar('clinical_findings')
            ->maxLength('clinical_findings', 4294967295)
            ->allowEmptyString('clinical_findings');

        $validator
            ->scalar('efficacy')
            ->maxLength('efficacy', 4294967295)
            ->allowEmptyString('efficacy');

        $validator
            ->scalar('late_breaking')
            ->maxLength('late_breaking', 4294967295)
            ->allowEmptyString('late_breaking');

        $validator
            ->scalar('safety_concerns')
            ->maxLength('safety_concerns', 4294967295)
            ->allowEmptyString('safety_concerns');

        $validator
            ->scalar('risks_evaluation')
            ->maxLength('risks_evaluation', 4294967295)
            ->allowEmptyString('risks_evaluation');

        $validator
            ->scalar('risks_characterisation')
            ->maxLength('risks_characterisation', 4294967295)
            ->allowEmptyString('risks_characterisation');

        $validator
            ->scalar('benefit_evaluation')
            ->maxLength('benefit_evaluation', 4294967295)
            ->allowEmptyString('benefit_evaluation');

        $validator
            ->scalar('risk_balance')
            ->maxLength('risk_balance', 4294967295)
            ->allowEmptyString('risk_balance');

        $validator
            ->scalar('recommendation')
            ->maxLength('recommendation', 4294967295)
            ->allowEmptyString('recommendation');

        $validator
            ->scalar('conclusion')
            ->maxLength('conclusion', 4294967295)
            ->allowEmptyString('conclusion');

        $validator
            ->scalar('report_type')
            ->maxLength('report_type', 255)
            ->allowEmptyString('report_type');

        $validator
            ->boolean('manager_initiated')
            ->allowEmptyString('manager_initiated');

        $validator
            ->scalar('manager_submitted')
            ->maxLength('manager_submitted', 255)
            ->allowEmptyString('manager_submitted');

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
        $rules->add($rules->existsIn('aggregate_id', 'Aggregates'), ['errorField' => 'aggregate_id']);
        $rules->add($rules->existsIn('county_id', 'Counties'), ['errorField' => 'county_id']);
        $rules->add($rules->existsIn('sub_county_id', 'SubCounties'), ['errorField' => 'sub_county_id']);
        $rules->add($rules->existsIn('designation_id', 'Designations'), ['errorField' => 'designation_id']);

        return $rules;
    }
}
