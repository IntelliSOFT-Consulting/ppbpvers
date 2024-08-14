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
      
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'file' => [
                'fields' => [
                    'dir' => 'dirname', 
                    'checksum' => 'checksum',     
                    'basename' => 'basename',      
                ],
                'nameCallback' => function ($table, $entity, $data, $field, $settings) {
                    // Generate basename and checksum
                    $basename = strtolower($data->getClientFilename());
                    $checksum = md5_file($data->getStream()->getMetadata('uri'));

                    // Set checksum and basename on the entity
                    $entity->set('basename', $basename);
                    $entity->set('checksum', $checksum);

                    return $basename;
                }, 
                'deleteCallback' => function ($path, $entity, $field, $settings) {
                    // When deleting the entity, both the original and the thumbnail will be removed
                    // when keepFilesOnDelete is set to false
                    return [
                        $path . $entity->{$field},
                        $path . 'thumbnail-' . $entity->{$field},
                    ];
                },
                'keepFilesOnDelete' => false,
            ]
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
            ->scalar('model')
            ->maxLength('model', 255)
            ->allowEmptyString('model');

        $validator
            // ->scalar('file')
            // ->maxLength('file', 255)
            ->allowEmptyFile('file')
            ->add('file', [
                'fileSize' => [
                    'rule' => ['fileSize', '<=', '5MB'],
                    'message' => 'File size must be less than 5MB.',
                ],
                'extension' => [
                    'rule' => ['extension', ['pdf', 'jpg', 'jpeg', 'png']],
                    'message' => 'Please upload a valid file (pdf, jpg, jpeg, png).',
                ],
            ]);

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
            ->allowEmptyFile('basename');

        $validator
            ->scalar('checksum')
            ->maxLength('checksum', 255)
            ->requirePresence('checksum', 'create')
            ->allowEmptyFile('checksum');

        $validator
            ->scalar('alternative')
            ->maxLength('alternative', 50)
            ->allowEmptyString('alternative');

        // $validator
        //     ->scalar('group')
        //     ->maxLength('group', 255)
        //     ->allowEmptyString('group');

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
