<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Messages Model
 *
 * @method \App\Model\Entity\Message newEmptyEntity()
 * @method \App\Model\Entity\Message newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Message[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Message get($primaryKey, $options = [])
 * @method \App\Model\Entity\Message findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Message patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Message[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Message|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Message saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Message[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Message[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Message[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Message[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MessagesTable extends Table
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

        $this->setTable('messages');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        // $this->addBehavior('Search.Search');
    }

    public function search(Query $query, array $filters): Query
    {
        if (!empty($filters['name'])) {
            $query->where(['Messages.name LIKE' => '%' . $filters['name'] . '%']);
        }

        // if (!empty($filters['email'])) {
        //     $query->where(['Messages.email LIKE' => '%' . $filters['email'] . '%']);
        // }

        // if (isset($filters['status'])) {
        //     $query->where(['Messages.status' => $filters['status']]);
        // }

        return $query;
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
            ->scalar('sms')
            ->maxLength('sms', 355)
            ->allowEmptyString('sms');

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
