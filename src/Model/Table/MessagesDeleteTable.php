<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MessagesDelete Model
 *
 * @method \App\Model\Entity\MessagesDelete newEmptyEntity()
 * @method \App\Model\Entity\MessagesDelete newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MessagesDelete[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MessagesDelete get($primaryKey, $options = [])
 * @method \App\Model\Entity\MessagesDelete findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MessagesDelete patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MessagesDelete[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MessagesDelete|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MessagesDelete saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MessagesDelete[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MessagesDelete[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MessagesDelete[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MessagesDelete[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MessagesDeleteTable extends Table
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

        $this->setTable('messages_delete');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->maxLength('name', 50)
            ->allowEmptyString('name');

        $validator
            ->scalar('subject')
            ->maxLength('subject', 255)
            ->allowEmptyString('subject');

        $validator
            ->scalar('content')
            ->allowEmptyString('content');

        $validator
            ->scalar('type')
            ->maxLength('type', 30)
            ->allowEmptyString('type');

        $validator
            ->scalar('style')
            ->maxLength('style', 250)
            ->allowEmptyString('style');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        return $validator;
    }
}
