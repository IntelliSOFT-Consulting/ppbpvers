<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AutoDrugs Model
 *
 * @method \App\Model\Entity\AutoDrug newEmptyEntity()
 * @method \App\Model\Entity\AutoDrug newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\AutoDrug[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AutoDrug get($primaryKey, $options = [])
 * @method \App\Model\Entity\AutoDrug findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\AutoDrug patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AutoDrug[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AutoDrug|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AutoDrug saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AutoDrug[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AutoDrug[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\AutoDrug[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AutoDrug[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AutoDrugsTable extends Table
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

        $this->setTable('auto_drugs');
        $this->setDisplayField('drugName');
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
            ->scalar('drugName')
            ->maxLength('drugName', 255)
            ->requirePresence('drugName', 'create')
            ->notEmptyString('drugName');

        $validator
            ->scalar('drugCode')
            ->maxLength('drugCode', 255)
            ->requirePresence('drugCode', 'create')
            ->notEmptyString('drugCode');

        $validator
            ->boolean('isGeneric')
            ->allowEmptyString('isGeneric');

        $validator
            ->boolean('isPreferred')
            ->allowEmptyString('isPreferred');

        $validator
            ->scalar('countryOfSales')
            ->maxLength('countryOfSales', 4294967295)
            ->allowEmptyString('countryOfSales');

        $validator
            ->scalar('activeIngredients')
            ->maxLength('activeIngredients', 4294967295)
            ->allowEmptyString('activeIngredients');

        $validator
            ->scalar('atcs')
            ->maxLength('atcs', 4294967295)
            ->allowEmptyString('atcs');

        return $validator;
    }
}
