<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PadrListOfMedicines Model
 *
 * @property \App\Model\Table\PadrsTable&\Cake\ORM\Association\BelongsTo $Padrs
 *
 * @method \App\Model\Entity\PadrListOfMedicine newEmptyEntity()
 * @method \App\Model\Entity\PadrListOfMedicine newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\PadrListOfMedicine[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PadrListOfMedicine get($primaryKey, $options = [])
 * @method \App\Model\Entity\PadrListOfMedicine findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\PadrListOfMedicine patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PadrListOfMedicine[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PadrListOfMedicine|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PadrListOfMedicine saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PadrListOfMedicine[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PadrListOfMedicine[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\PadrListOfMedicine[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\PadrListOfMedicine[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PadrListOfMedicinesTable extends Table
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

        $this->setTable('padr_list_of_medicines');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Padrs', [
            'foreignKey' => 'padr_id',
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
            ->integer('padr_id')
            ->allowEmptyString('padr_id');

        $validator
            ->scalar('product_name')
            ->maxLength('product_name', 255)
            ->allowEmptyString('product_name');

        $validator
            ->scalar('medicine_source')
            ->maxLength('medicine_source', 255)
            ->allowEmptyString('medicine_source');

        $validator
            ->scalar('manufacturer')
            ->maxLength('manufacturer', 255)
            ->allowEmptyString('manufacturer');

        $validator
            ->scalar('expiry_date')
            ->maxLength('expiry_date', 255)
            ->allowEmptyString('expiry_date');

        $validator
            ->date('start_date')
            ->allowEmptyDate('start_date');

        $validator
            ->scalar('end_date')
            ->maxLength('end_date', 255)
            ->allowEmptyString('end_date');

        $validator
            ->dateTime('modifed')
            ->allowEmptyDateTime('modifed');

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
        $rules->add($rules->existsIn('padr_id', 'Padrs'), ['errorField' => 'padr_id']);

        return $rules;
    }
}
