<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TmpDrugs Model
 *
 * @method \App\Model\Entity\TmpDrug newEmptyEntity()
 * @method \App\Model\Entity\TmpDrug newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TmpDrug[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TmpDrug get($primaryKey, $options = [])
 * @method \App\Model\Entity\TmpDrug findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TmpDrug patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TmpDrug[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TmpDrug|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TmpDrug saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TmpDrug[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TmpDrug[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TmpDrug[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TmpDrug[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TmpDrugsTable extends Table
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

        $this->setTable('tmp_drugs');
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
            ->integer('ectd_product_id')
            ->allowEmptyString('ectd_product_id');

        $validator
            ->scalar('product_trade_name')
            ->maxLength('product_trade_name', 132)
            ->allowEmptyString('product_trade_name');

        $validator
            ->scalar('product_registration_no')
            ->maxLength('product_registration_no', 49)
            ->allowEmptyString('product_registration_no');

        $validator
            ->scalar('local_foreign')
            ->maxLength('local_foreign', 7)
            ->allowEmptyString('local_foreign');

        $validator
            ->scalar('inn_of_api')
            ->maxLength('inn_of_api', 286)
            ->allowEmptyString('inn_of_api');

        $validator
            ->scalar('api_strength_per_dosage')
            ->maxLength('api_strength_per_dosage', 271)
            ->allowEmptyString('api_strength_per_dosage');

        $validator
            ->integer('AL')
            ->allowEmptyString('AL');

        return $validator;
    }
}
