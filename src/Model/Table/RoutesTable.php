<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Routes Model
 *
 * @property \App\Model\Table\Ce2bListOfDrugsTable&\Cake\ORM\Association\HasMany $Ce2bListOfDrugs
 * @property \App\Model\Table\ConcomittantDrugsTable&\Cake\ORM\Association\HasMany $ConcomittantDrugs
 * @property \App\Model\Table\SadrListOfDrugsTable&\Cake\ORM\Association\HasMany $SadrListOfDrugs
 * @property \App\Model\Table\SadrListOfMedicinesTable&\Cake\ORM\Association\HasMany $SadrListOfMedicines
 * @property \App\Model\Table\SuspectedDrugsTable&\Cake\ORM\Association\HasMany $SuspectedDrugs
 *
 * @method \App\Model\Entity\Route newEmptyEntity()
 * @method \App\Model\Entity\Route newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Route[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Route get($primaryKey, $options = [])
 * @method \App\Model\Entity\Route findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Route patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Route[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Route|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Route saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Route[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Route[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Route[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Route[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RoutesTable extends Table
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

        $this->setTable('routes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Ce2bListOfDrugs', [
            'foreignKey' => 'route_id',
        ]);
        $this->hasMany('ConcomittantDrugs', [
            'foreignKey' => 'route_id',
        ]);
        $this->hasMany('SadrListOfDrugs', [
            'foreignKey' => 'route_id',
        ]);
        $this->hasMany('SadrListOfMedicines', [
            'foreignKey' => 'route_id',
        ]);
        $this->hasMany('SuspectedDrugs', [
            'foreignKey' => 'route_id',
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
            ->scalar('name')
            ->maxLength('name', 100)
            ->allowEmptyString('name');

        $validator
            ->scalar('icsr_code')
            ->maxLength('icsr_code', 100)
            ->allowEmptyString('icsr_code');

        return $validator;
    }
}
