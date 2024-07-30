<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pints Model
 *
 * @property \App\Model\Table\TransfusionsTable&\Cake\ORM\Association\BelongsTo $Transfusions
 *
 * @method \App\Model\Entity\Pint newEmptyEntity()
 * @method \App\Model\Entity\Pint newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pint findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pint[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pint|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pint saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pint[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pint[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pint[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pint[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PintsTable extends Table
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

        $this->setTable('pints');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Transfusions', [
            'foreignKey' => 'transfusion_id',
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
            ->integer('transfusion_id')
            ->allowEmptyString('transfusion_id');

        $validator
            ->scalar('component_type')
            ->maxLength('component_type', 255)
            ->allowEmptyString('component_type');

        $validator
            ->scalar('pint_no')
            ->maxLength('pint_no', 55)
            ->allowEmptyString('pint_no');

        $validator
            ->date('expiry_date')
            ->allowEmptyDate('expiry_date');

        $validator
            ->scalar('volume_transfused')
            ->maxLength('volume_transfused', 55)
            ->allowEmptyString('volume_transfused');

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
        $rules->add($rules->existsIn('transfusion_id', 'Transfusions'), ['errorField' => 'transfusion_id']);

        return $rules;
    }
}
