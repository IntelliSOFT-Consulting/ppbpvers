<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Attachments Model
 *
 * @method \App\Model\Entity\Attachment newEmptyEntity()
 * @method \App\Model\Entity\Attachment newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Attachment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Attachment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Attachment findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Attachment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Attachment[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Attachment|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Attachment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Attachment[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Attachment[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Attachment[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Attachment[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AttachmentsTable extends Table
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

        $this->setTable('attachments');
        $this->setDisplayField('basename');
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
            ->scalar('model')
            ->maxLength('model', 255)
            ->allowEmptyString('model');

        $validator
            ->scalar('file')
            ->maxLength('file', 255)
            ->allowEmptyFile('file');

        $validator
            ->integer('foreign_key')
            ->requirePresence('foreign_key', 'create')
            ->notEmptyString('foreign_key');

        $validator
            ->scalar('dirname')
            ->maxLength('dirname', 255)
            ->allowEmptyString('dirname');

        $validator
            ->scalar('basename')
            ->maxLength('basename', 255)
            ->requirePresence('basename', 'create')
            ->notEmptyString('basename');

        $validator
            ->scalar('checksum')
            ->maxLength('checksum', 255)
            ->requirePresence('checksum', 'create')
            ->notEmptyString('checksum');

        $validator
            ->scalar('alternative')
            ->maxLength('alternative', 50)
            ->allowEmptyString('alternative');

        $validator
            ->scalar('group')
            ->maxLength('group', 255)
            ->allowEmptyString('group');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('year')
            ->maxLength('year', 50)
            ->allowEmptyString('year');

        $validator
            ->date('file_date')
            ->allowEmptyDate('file_date');

        $validator
            ->scalar('pocket_name')
            ->maxLength('pocket_name', 255)
            ->allowEmptyString('pocket_name');

        $validator
            ->scalar('version_no')
            ->maxLength('version_no', 255)
            ->allowEmptyString('version_no');

        return $validator;
    }
}
