<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AggregateListOfSignals Model
 *
 * @property \App\Model\Table\AggregatesTable&\Cake\ORM\Association\BelongsTo $Aggregates
 *
 * @method \App\Model\Entity\AggregateListOfSignal newEmptyEntity()
 * @method \App\Model\Entity\AggregateListOfSignal newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\AggregateListOfSignal[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AggregateListOfSignal get($primaryKey, $options = [])
 * @method \App\Model\Entity\AggregateListOfSignal findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\AggregateListOfSignal patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AggregateListOfSignal[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AggregateListOfSignal|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AggregateListOfSignal saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AggregateListOfSignal[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AggregateListOfSignal[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\AggregateListOfSignal[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AggregateListOfSignal[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AggregateListOfSignalsTable extends Table
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

        $this->setTable('aggregate_list_of_signals');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Aggregates', [
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
            ->integer('aggregate_id')
            ->allowEmptyString('aggregate_id');

        $validator
            ->integer('aggregate_followup_id')
            ->allowEmptyString('aggregate_followup_id');

        $validator
            ->scalar('signal_term')
            ->maxLength('signal_term', 16777215)
            ->allowEmptyString('signal_term');

        $validator
            ->scalar('source_trigger')
            ->maxLength('source_trigger', 16777215)
            ->allowEmptyString('source_trigger');

        $validator
            ->scalar('status')
            ->maxLength('status', 16777215)
            ->allowEmptyString('status');

        $validator
            ->scalar('outcome')
            ->maxLength('outcome', 16777215)
            ->allowEmptyString('outcome');

        $validator
            ->date('date_detected')
            ->allowEmptyDate('date_detected');

        $validator
            ->date('date_closed')
            ->allowEmptyDate('date_closed');

        $validator
            ->scalar('reason_summary')
            ->maxLength('reason_summary', 16777215)
            ->allowEmptyString('reason_summary');

        $validator
            ->scalar('evaluation_method')
            ->maxLength('evaluation_method', 16777215)
            ->allowEmptyString('evaluation_method');

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
        $rules->add($rules->existsIn('aggregate_id', 'Aggregates'), ['errorField' => 'aggregate_id']);

        return $rules;
    }
}
