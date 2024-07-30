<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ce2bReaction Model
 *
 * @property \App\Model\Table\Ce2bsTable&\Cake\ORM\Association\BelongsTo $Ce2bs
 *
 * @method \App\Model\Entity\Ce2bReaction newEmptyEntity()
 * @method \App\Model\Entity\Ce2bReaction newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ce2bReaction[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ce2bReaction get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ce2bReaction findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ce2bReaction patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ce2bReaction[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ce2bReaction|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ce2bReaction saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ce2bReaction[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ce2bReaction[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ce2bReaction[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ce2bReaction[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class Ce2bReactionTable extends Table
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

        $this->setTable('ce2b_reaction');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Ce2bs', [
            'foreignKey' => 'ce2b_id',
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
            ->integer('ce2b_id')
            ->allowEmptyString('ce2b_id');

        $validator
            ->scalar('reaction_name')
            ->allowEmptyString('reaction_name');

        $validator
            ->scalar('meddra_code')
            ->allowEmptyString('meddra_code');

        $validator
            ->scalar('start_date')
            ->allowEmptyString('start_date');

        $validator
            ->scalar('source_country')
            ->allowEmptyString('source_country');

        $validator
            ->scalar('criteria_death_null')
            ->maxLength('criteria_death_null', 255)
            ->allowEmptyString('criteria_death_null');

        $validator
            ->scalar('criteria_death_value')
            ->maxLength('criteria_death_value', 255)
            ->allowEmptyString('criteria_death_value');

        $validator
            ->scalar('life_hreatening_null')
            ->maxLength('life_hreatening_null', 255)
            ->allowEmptyString('life_hreatening_null');

        $validator
            ->scalar('life_hreatening_value')
            ->maxLength('life_hreatening_value', 255)
            ->allowEmptyString('life_hreatening_value');

        $validator
            ->scalar('prolonged_hospitalisation_null')
            ->maxLength('prolonged_hospitalisation_null', 255)
            ->allowEmptyString('prolonged_hospitalisation_null');

        $validator
            ->scalar('prolonged_hospitalisation_value')
            ->maxLength('prolonged_hospitalisation_value', 255)
            ->allowEmptyString('prolonged_hospitalisation_value');

        $validator
            ->scalar('incapacitating_null')
            ->maxLength('incapacitating_null', 255)
            ->allowEmptyString('incapacitating_null');

        $validator
            ->scalar('incapacitating_value')
            ->maxLength('incapacitating_value', 255)
            ->allowEmptyString('incapacitating_value');

        $validator
            ->scalar('birth_defect_null')
            ->maxLength('birth_defect_null', 255)
            ->allowEmptyString('birth_defect_null');

        $validator
            ->scalar('birth_defect_value')
            ->maxLength('birth_defect_value', 255)
            ->allowEmptyString('birth_defect_value');

        $validator
            ->scalar('other_medical_null')
            ->maxLength('other_medical_null', 255)
            ->allowEmptyString('other_medical_null');

        $validator
            ->scalar('other_medical_value')
            ->maxLength('other_medical_value', 255)
            ->allowEmptyString('other_medical_value');

        $validator
            ->scalar('reaction_outcome_null')
            ->maxLength('reaction_outcome_null', 255)
            ->allowEmptyString('reaction_outcome_null');

        $validator
            ->scalar('reaction_outcome_value')
            ->maxLength('reaction_outcome_value', 255)
            ->allowEmptyString('reaction_outcome_value');

        $validator
            ->scalar('medical_confirmation_null')
            ->maxLength('medical_confirmation_null', 255)
            ->allowEmptyString('medical_confirmation_null');

        $validator
            ->scalar('medical_confirmation_value')
            ->maxLength('medical_confirmation_value', 255)
            ->allowEmptyString('medical_confirmation_value');

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
        $rules->add($rules->existsIn('ce2b_id', 'Ce2bs'), ['errorField' => 'ce2b_id']);

        return $rules;
    }
}
