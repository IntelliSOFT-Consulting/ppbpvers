<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QueuedTasks Model
 *
 * @method \App\Model\Entity\QueuedTask newEmptyEntity()
 * @method \App\Model\Entity\QueuedTask newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\QueuedTask[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\QueuedTask get($primaryKey, $options = [])
 * @method \App\Model\Entity\QueuedTask findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\QueuedTask patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\QueuedTask[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\QueuedTask|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QueuedTask saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QueuedTask[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\QueuedTask[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\QueuedTask[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\QueuedTask[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class QueuedTasksTable extends Table
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

        $this->setTable('queued_tasks');
        $this->setDisplayField('jobtype');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('jobtype')
            ->maxLength('jobtype', 45)
            ->requirePresence('jobtype', 'create')
            ->notEmptyString('jobtype');

        $validator
            ->scalar('data')
            ->allowEmptyString('data');

        $validator
            ->scalar('group')
            ->maxLength('group', 255)
            ->allowEmptyString('group');

        $validator
            ->scalar('reference')
            ->maxLength('reference', 255)
            ->allowEmptyString('reference');

        $validator
            ->dateTime('notbefore')
            ->allowEmptyDateTime('notbefore');

        $validator
            ->dateTime('fetched')
            ->allowEmptyDateTime('fetched');

        $validator
            ->numeric('progress')
            ->allowEmptyString('progress');

        $validator
            ->dateTime('completed')
            ->allowEmptyDateTime('completed');

        $validator
            ->integer('failed')
            ->notEmptyString('failed');

        $validator
            ->scalar('failure_message')
            ->allowEmptyString('failure_message');

        $validator
            ->scalar('workerkey')
            ->maxLength('workerkey', 45)
            ->allowEmptyString('workerkey');

        $validator
            ->integer('priority')
            ->notEmptyString('priority');

        return $validator;
    }
}
