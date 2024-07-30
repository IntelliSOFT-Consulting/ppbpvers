<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CronTasks Model
 *
 * @method \App\Model\Entity\CronTask newEmptyEntity()
 * @method \App\Model\Entity\CronTask newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CronTask[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CronTask get($primaryKey, $options = [])
 * @method \App\Model\Entity\CronTask findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CronTask patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CronTask[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CronTask|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CronTask saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CronTask[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CronTask[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CronTask[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CronTask[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CronTasksTable extends Table
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

        $this->setTable('cron_tasks');
        $this->setDisplayField('title');
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
            ->scalar('title')
            ->maxLength('title', 40)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('data')
            ->allowEmptyString('data');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->dateTime('notbefore')
            ->allowEmptyDateTime('notbefore');

        $validator
            ->dateTime('fetched')
            ->allowEmptyDateTime('fetched');

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
            ->integer('interval')
            ->notEmptyString('interval');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        return $validator;
    }
}
