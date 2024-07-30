<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Saes Model
 *
 * @property \App\Model\Table\SaesTable&\Cake\ORM\Association\BelongsTo $Saes
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CountriesTable&\Cake\ORM\Association\BelongsTo $Countries
 * @property \App\Model\Table\ConcomittantDrugsTable&\Cake\ORM\Association\HasMany $ConcomittantDrugs
 * @property \App\Model\Table\SaesTable&\Cake\ORM\Association\HasMany $Saes
 * @property \App\Model\Table\SuspectedDrugsTable&\Cake\ORM\Association\HasMany $SuspectedDrugs
 *
 * @method \App\Model\Entity\Sae newEmptyEntity()
 * @method \App\Model\Entity\Sae newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Sae[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sae get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sae findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Sae patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sae[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sae|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sae saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sae[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sae[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sae[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sae[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SaesTable extends Table
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

        $this->setTable('saes');
        $this->setDisplayField('email_address');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Saes', [
            'foreignKey' => 'sae_id',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
        ]);
        $this->hasMany('ConcomittantDrugs', [
            'foreignKey' => 'sae_id',
        ]);
        $this->hasMany('Saes', [
            'foreignKey' => 'sae_id',
        ]);
        $this->hasMany('SuspectedDrugs', [
            'foreignKey' => 'sae_id',
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
            ->integer('application_id')
            ->allowEmptyString('application_id');

        $validator
            ->integer('sae_id')
            ->allowEmptyString('sae_id');

        $validator
            ->scalar('reference_no')
            ->maxLength('reference_no', 255)
            ->allowEmptyString('reference_no');

        $validator
            ->scalar('form_type')
            ->maxLength('form_type', 255)
            ->allowEmptyString('form_type');

        $validator
            ->integer('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->scalar('patient_initials')
            ->maxLength('patient_initials', 255)
            ->allowEmptyString('patient_initials');

        $validator
            ->integer('country_id')
            ->allowEmptyString('country_id');

        $validator
            ->date('date_of_birth')
            ->allowEmptyDate('date_of_birth');

        $validator
            ->integer('age_years')
            ->allowEmptyString('age_years');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 25)
            ->allowEmptyString('gender');

        $validator
            ->scalar('causality')
            ->maxLength('causality', 250)
            ->allowEmptyString('causality');

        $validator
            ->date('enrollment_date')
            ->allowEmptyDate('enrollment_date');

        $validator
            ->date('administration_date')
            ->allowEmptyDate('administration_date');

        $validator
            ->date('latest_date')
            ->allowEmptyDate('latest_date');

        $validator
            ->date('reaction_onset')
            ->allowEmptyDate('reaction_onset');

        $validator
            ->date('reaction_end_date')
            ->allowEmptyDate('reaction_end_date');

        $validator
            ->boolean('patient_died')
            ->allowEmptyString('patient_died');

        $validator
            ->boolean('prolonged_hospitalization')
            ->allowEmptyString('prolonged_hospitalization');

        $validator
            ->boolean('incapacity')
            ->allowEmptyString('incapacity');

        $validator
            ->boolean('life_threatening')
            ->allowEmptyString('life_threatening');

        $validator
            ->boolean('reaction_other')
            ->allowEmptyString('reaction_other');

        $validator
            ->scalar('reaction_description')
            ->allowEmptyString('reaction_description');

        $validator
            ->scalar('relevant_history')
            ->allowEmptyString('relevant_history');

        $validator
            ->scalar('manufacturer_name')
            ->maxLength('manufacturer_name', 255)
            ->allowEmptyString('manufacturer_name');

        $validator
            ->scalar('mfr_no')
            ->maxLength('mfr_no', 255)
            ->allowEmptyString('mfr_no');

        $validator
            ->date('manufacturer_date')
            ->allowEmptyDate('manufacturer_date');

        $validator
            ->boolean('source_study')
            ->allowEmptyString('source_study');

        $validator
            ->boolean('source_literature')
            ->allowEmptyString('source_literature');

        $validator
            ->boolean('source_health_professional')
            ->allowEmptyString('source_health_professional');

        $validator
            ->date('report_date')
            ->allowEmptyDate('report_date');

        $validator
            ->dateTime('submitted_date')
            ->allowEmptyDateTime('submitted_date');

        $validator
            ->scalar('report_type')
            ->maxLength('report_type', 30)
            ->allowEmptyString('report_type');

        $validator
            ->allowEmptyString('approved');

        $validator
            ->integer('approved_by')
            ->allowEmptyString('approved_by');

        $validator
            ->scalar('email_address')
            ->maxLength('email_address', 255)
            ->requirePresence('email_address', 'create')
            ->notEmptyString('email_address');

        $validator
            ->scalar('reporter_name')
            ->maxLength('reporter_name', 255)
            ->allowEmptyString('reporter_name');

        $validator
            ->scalar('reporter_phone')
            ->maxLength('reporter_phone', 255)
            ->allowEmptyString('reporter_phone');

        $validator
            ->scalar('reporter_email')
            ->maxLength('reporter_email', 255)
            ->allowEmptyString('reporter_email');

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
            ->boolean('deleted')
            ->notEmptyString('deleted');

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
        $rules->add($rules->existsIn('sae_id', 'Saes'), ['errorField' => 'sae_id']);
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn('country_id', 'Countries'), ['errorField' => 'country_id']);

        return $rules;
    }
}
