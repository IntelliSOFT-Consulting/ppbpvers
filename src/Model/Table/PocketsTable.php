<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pockets Model
 *
 * @method \App\Model\Entity\Pocket newEmptyEntity()
 * @method \App\Model\Entity\Pocket newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pocket[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pocket get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pocket findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pocket patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pocket[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pocket|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pocket saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pocket[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pocket[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pocket[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pocket[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PocketsTable extends Table
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

        $this->setTable('pockets');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('content')
            ->maxLength('content', 16777215)
            ->requirePresence('content', 'create')
            ->notEmptyString('content');

        $validator
            ->boolean('required')
            ->allowEmptyString('required');

        $validator
            ->integer('item_number')
            ->allowEmptyString('item_number');

        $validator
            ->scalar('type')
            ->maxLength('type', 10)
            ->allowEmptyString('type');

        $validator
            ->boolean('deleted')
            ->allowEmptyString('deleted');

        $validator
            ->dateTime('deleted_date')
            ->allowEmptyDateTime('deleted_date');

        return $validator;
    }
}
