<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Drugs Model
 *
 * @method \App\Model\Entity\Drug newEmptyEntity()
 * @method \App\Model\Entity\Drug newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Drug[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Drug get($primaryKey, $options = [])
 * @method \App\Model\Entity\Drug findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Drug patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Drug[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Drug|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Drug saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Drug[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Drug[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Drug[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Drug[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DrugsTable extends Table
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

        $this->setTable('drugs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Search.Search');

        $this->searchManager()
            ->value('retention_status')
            ->value('donation')
            ->value('manufacturer')
            ->value('brand_name')
            ->value('batch_number')
            ->value('registration_status')
            ->value('inn_name');
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
            ->scalar('brand_name')
            ->maxLength('brand_name', 255)
            ->allowEmptyString('brand_name');

        $validator
            ->scalar('inn_name')
            ->maxLength('inn_name', 255)
            ->allowEmptyString('inn_name');

        $validator
            ->scalar('manufacturer')
            ->maxLength('manufacturer', 255)
            ->allowEmptyString('manufacturer');

        $validator
            ->scalar('local_trade_rep')
            ->maxLength('local_trade_rep', 255)
            ->allowEmptyString('local_trade_rep');

        $validator
            ->scalar('batch_number')
            ->maxLength('batch_number', 255)
            ->allowEmptyString('batch_number');

        $validator
            ->scalar('registration_status')
            ->maxLength('registration_status', 255)
            ->allowEmptyString('registration_status');

        $validator
            ->scalar('retention_status')
            ->maxLength('retention_status', 255)
            ->allowEmptyString('retention_status');

        $validator
            ->scalar('donation')
            ->maxLength('donation', 255)
            ->allowEmptyString('donation');

        return $validator;
    }
}
