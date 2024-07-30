<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aros Model
 *
 * @property \App\Model\Table\ArosTable&\Cake\ORM\Association\BelongsTo $ParentAros
 * @property \App\Model\Table\ArosTable&\Cake\ORM\Association\HasMany $ChildAros
 * @property \App\Model\Table\AcosTable&\Cake\ORM\Association\BelongsToMany $Acos
 *
 * @method \App\Model\Entity\Aro newEmptyEntity()
 * @method \App\Model\Entity\Aro newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Aro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aro findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Aro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aro[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aro|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aro saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aro[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aro[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aro[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aro[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TreeBehavior
 */
class ArosTable extends Table
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

        $this->setTable('aros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Tree');

        $this->belongsTo('ParentAros', [
            'className' => 'Aros',
            'foreignKey' => 'parent_id',
        ]);
        $this->hasMany('ChildAros', [
            'className' => 'Aros',
            'foreignKey' => 'parent_id',
        ]);
        $this->belongsToMany('Acos', [
            'foreignKey' => 'aro_id',
            'targetForeignKey' => 'aco_id',
            'joinTable' => 'aros_acos',
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
            ->integer('parent_id')
            ->allowEmptyString('parent_id');

        $validator
            ->scalar('model')
            ->maxLength('model', 255)
            ->allowEmptyString('model');

        $validator
            ->integer('foreign_key')
            ->allowEmptyString('foreign_key');

        $validator
            ->scalar('alias')
            ->maxLength('alias', 255)
            ->allowEmptyString('alias');

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
        $rules->add($rules->existsIn('parent_id', 'ParentAros'), ['errorField' => 'parent_id']);

        return $rules;
    }
}
