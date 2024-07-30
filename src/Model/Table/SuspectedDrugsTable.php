<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SuspectedDrugs Model
 *
 * @property \App\Model\Table\SaesTable&\Cake\ORM\Association\BelongsTo $Saes
 * @property \App\Model\Table\RoutesTable&\Cake\ORM\Association\BelongsTo $Routes
 *
 * @method \App\Model\Entity\SuspectedDrug newEmptyEntity()
 * @method \App\Model\Entity\SuspectedDrug newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SuspectedDrug[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SuspectedDrug get($primaryKey, $options = [])
 * @method \App\Model\Entity\SuspectedDrug findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SuspectedDrug patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SuspectedDrug[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SuspectedDrug|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SuspectedDrug saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SuspectedDrug[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SuspectedDrug[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SuspectedDrug[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SuspectedDrug[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SuspectedDrugsTable extends Table
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

        $this->setTable('suspected_drugs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Saes', [
            'foreignKey' => 'sae_id',
        ]);
        $this->belongsTo('Routes', [
            'foreignKey' => 'route_id',
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
            ->integer('sae_id')
            ->allowEmptyString('sae_id');

        $validator
            ->scalar('generic_name')
            ->maxLength('generic_name', 100)
            ->allowEmptyString('generic_name');

        $validator
            ->scalar('dose')
            ->maxLength('dose', 100)
            ->allowEmptyString('dose');

        $validator
            ->integer('route_id')
            ->allowEmptyString('route_id');

        $validator
            ->scalar('indication')
            ->maxLength('indication', 255)
            ->allowEmptyString('indication');

        $validator
            ->date('date_from')
            ->allowEmptyDate('date_from');

        $validator
            ->date('date_to')
            ->allowEmptyDate('date_to');

        $validator
            ->scalar('therapy_duration')
            ->maxLength('therapy_duration', 255)
            ->allowEmptyString('therapy_duration');

        $validator
            ->scalar('reaction_abate')
            ->maxLength('reaction_abate', 100)
            ->allowEmptyString('reaction_abate');

        $validator
            ->scalar('reaction_reappear')
            ->maxLength('reaction_reappear', 255)
            ->allowEmptyString('reaction_reappear');

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
        $rules->add($rules->existsIn('route_id', 'Routes'), ['errorField' => 'route_id']);

        return $rules;
    }
}
