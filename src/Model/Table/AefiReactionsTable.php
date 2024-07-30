<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AefiReactions Model
 *
 * @property \App\Model\Table\AefisTable&\Cake\ORM\Association\BelongsTo $Aefis
 *
 * @method \App\Model\Entity\AefiReaction newEmptyEntity()
 * @method \App\Model\Entity\AefiReaction newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\AefiReaction[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AefiReaction get($primaryKey, $options = [])
 * @method \App\Model\Entity\AefiReaction findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\AefiReaction patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AefiReaction[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AefiReaction|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AefiReaction saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AefiReaction[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AefiReaction[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\AefiReaction[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AefiReaction[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AefiReactionsTable extends Table
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

        $this->setTable('aefi_reactions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Aefis', [
            'foreignKey' => 'aefi_id',
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
            ->integer('aefi_id')
            ->allowEmptyString('aefi_id');

        $validator
            ->scalar('reaction_name')
            ->maxLength('reaction_name', 255)
            ->allowEmptyString('reaction_name');

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
        $rules->add($rules->existsIn('aefi_id', 'Aefis'), ['errorField' => 'aefi_id']);

        return $rules;
    }
}
