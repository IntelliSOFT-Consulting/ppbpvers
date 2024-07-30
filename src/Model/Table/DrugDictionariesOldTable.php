<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DrugDictionariesOld Model
 *
 * @method \App\Model\Entity\DrugDictionariesOld newEmptyEntity()
 * @method \App\Model\Entity\DrugDictionariesOld newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\DrugDictionariesOld[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DrugDictionariesOld get($primaryKey, $options = [])
 * @method \App\Model\Entity\DrugDictionariesOld findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\DrugDictionariesOld patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DrugDictionariesOld[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DrugDictionariesOld|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DrugDictionariesOld saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DrugDictionariesOld[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DrugDictionariesOld[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\DrugDictionariesOld[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\DrugDictionariesOld[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DrugDictionariesOldTable extends Table
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

        $this->setTable('drug_dictionaries_old');
        $this->setDisplayField('id');
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
            ->scalar('MedId')
            ->maxLength('MedId', 35)
            ->allowEmptyString('MedId');

        $validator
            ->scalar('drug_record_number')
            ->maxLength('drug_record_number', 6)
            ->allowEmptyString('drug_record_number');

        $validator
            ->scalar('sequence_no_1')
            ->maxLength('sequence_no_1', 2)
            ->allowEmptyString('sequence_no_1');

        $validator
            ->scalar('sequence_no_2')
            ->maxLength('sequence_no_2', 3)
            ->allowEmptyString('sequence_no_2');

        $validator
            ->scalar('sequence_no_3')
            ->maxLength('sequence_no_3', 10)
            ->allowEmptyString('sequence_no_3');

        $validator
            ->scalar('sequence_no_4')
            ->maxLength('sequence_no_4', 10)
            ->allowEmptyString('sequence_no_4');

        $validator
            ->scalar('generic')
            ->maxLength('generic', 1)
            ->allowEmptyString('generic');

        $validator
            ->scalar('drug_name')
            ->maxLength('drug_name', 455)
            ->allowEmptyString('drug_name');

        $validator
            ->scalar('health_program')
            ->maxLength('health_program', 255)
            ->allowEmptyString('health_program');

        $validator
            ->scalar('name_specifier')
            ->maxLength('name_specifier', 30)
            ->allowEmptyString('name_specifier');

        $validator
            ->scalar('market_authorization_number')
            ->maxLength('market_authorization_number', 30)
            ->allowEmptyString('market_authorization_number');

        $validator
            ->scalar('market_authorization_date')
            ->maxLength('market_authorization_date', 8)
            ->allowEmptyString('market_authorization_date');

        $validator
            ->scalar('market_authorization_withdrawal_date')
            ->maxLength('market_authorization_withdrawal_date', 8)
            ->allowEmptyString('market_authorization_withdrawal_date');

        $validator
            ->scalar('country')
            ->maxLength('country', 10)
            ->allowEmptyString('country');

        $validator
            ->scalar('company')
            ->maxLength('company', 10)
            ->allowEmptyString('company');

        $validator
            ->scalar('marketing_authorization_holder')
            ->maxLength('marketing_authorization_holder', 10)
            ->allowEmptyString('marketing_authorization_holder');

        $validator
            ->scalar('source_code')
            ->maxLength('source_code', 10)
            ->allowEmptyString('source_code');

        $validator
            ->scalar('source_country')
            ->maxLength('source_country', 10)
            ->allowEmptyString('source_country');

        $validator
            ->scalar('source_year')
            ->maxLength('source_year', 3)
            ->allowEmptyString('source_year');

        $validator
            ->scalar('product_type')
            ->maxLength('product_type', 10)
            ->allowEmptyString('product_type');

        $validator
            ->scalar('product_group')
            ->maxLength('product_group', 10)
            ->allowEmptyString('product_group');

        $validator
            ->scalar('create_date')
            ->maxLength('create_date', 8)
            ->allowEmptyString('create_date');

        $validator
            ->scalar('date_changed')
            ->maxLength('date_changed', 8)
            ->allowEmptyString('date_changed');

        return $validator;
    }
}
