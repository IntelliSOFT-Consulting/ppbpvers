<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HelpInfos Model
 *
 * @method \App\Model\Entity\HelpInfo newEmptyEntity()
 * @method \App\Model\Entity\HelpInfo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\HelpInfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HelpInfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\HelpInfo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\HelpInfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HelpInfo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\HelpInfo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HelpInfo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HelpInfo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\HelpInfo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\HelpInfo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\HelpInfo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HelpInfosTable extends Table
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

        $this->setTable('help_infos');
        $this->setDisplayField('title');
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
            ->scalar('field_name')
            ->maxLength('field_name', 25)
            ->allowEmptyString('field_name');

        $validator
            ->scalar('field_label')
            ->maxLength('field_label', 255)
            ->allowEmptyString('field_label');

        $validator
            ->scalar('place_holder')
            ->maxLength('place_holder', 140)
            ->allowEmptyString('place_holder');

        $validator
            ->scalar('help_type')
            ->maxLength('help_type', 50)
            ->allowEmptyString('help_type');

        $validator
            ->scalar('title')
            ->maxLength('title', 250)
            ->allowEmptyString('title');

        $validator
            ->scalar('content')
            ->allowEmptyString('content');

        $validator
            ->scalar('help_text')
            ->maxLength('help_text', 100)
            ->allowEmptyString('help_text');

        $validator
            ->scalar('type')
            ->maxLength('type', 100)
            ->allowEmptyString('type');

        return $validator;
    }
}
