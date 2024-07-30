<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Doses Model
 *
 * @property \App\Model\Table\Ce2bListOfDrugsTable&\Cake\ORM\Association\HasMany $Ce2bListOfDrugs
 * @property \App\Model\Table\SadrListOfDrugsTable&\Cake\ORM\Association\HasMany $SadrListOfDrugs
 * @property \App\Model\Table\SadrListOfMedicinesTable&\Cake\ORM\Association\HasMany $SadrListOfMedicines
 *
 * @method \App\Model\Entity\Dose newEmptyEntity()
 * @method \App\Model\Entity\Dose newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Dose[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dose get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dose findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Dose patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dose[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dose|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dose saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dose[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dose[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dose[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dose[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DosesTable extends Table
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

        $this->setTable('doses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Ce2bListOfDrugs', [
            'foreignKey' => 'dose_id',
        ]);
        $this->hasMany('SadrListOfDrugs', [
            'foreignKey' => 'dose_id',
        ]);
        $this->hasMany('SadrListOfMedicines', [
            'foreignKey' => 'dose_id',
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
            ->scalar('value')
            ->maxLength('value', 100)
            ->allowEmptyString('value');

        $validator
            ->scalar('icsr_code')
            ->maxLength('icsr_code', 100)
            ->allowEmptyString('icsr_code');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->allowEmptyString('name');

        return $validator;
    }
}
