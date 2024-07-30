<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AttachmentsOld Model
 *
 * @property \App\Model\Table\SadrsTable&\Cake\ORM\Association\BelongsTo $Sadrs
 * @property \App\Model\Table\SadrFollowupsTable&\Cake\ORM\Association\BelongsTo $SadrFollowups
 * @property \App\Model\Table\PqmpsTable&\Cake\ORM\Association\BelongsTo $Pqmps
 * @property \App\Model\Table\AefisTable&\Cake\ORM\Association\BelongsTo $Aefis
 * @property \App\Model\Table\DevicesTable&\Cake\ORM\Association\BelongsTo $Devices
 * @property \App\Model\Table\TransfusionsTable&\Cake\ORM\Association\BelongsTo $Transfusions
 * @property \App\Model\Table\MedicationsTable&\Cake\ORM\Association\BelongsTo $Medications
 *
 * @method \App\Model\Entity\AttachmentsOld newEmptyEntity()
 * @method \App\Model\Entity\AttachmentsOld newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\AttachmentsOld[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AttachmentsOld get($primaryKey, $options = [])
 * @method \App\Model\Entity\AttachmentsOld findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\AttachmentsOld patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AttachmentsOld[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AttachmentsOld|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AttachmentsOld saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AttachmentsOld[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AttachmentsOld[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\AttachmentsOld[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AttachmentsOld[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AttachmentsOldTable extends Table
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

        $this->setTable('attachments_old');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sadrs', [
            'foreignKey' => 'sadr_id',
        ]);
        $this->belongsTo('SadrFollowups', [
            'foreignKey' => 'sadr_followup_id',
        ]);
        $this->belongsTo('Pqmps', [
            'foreignKey' => 'pqmp_id',
        ]);
        $this->belongsTo('Aefis', [
            'foreignKey' => 'aefi_id',
        ]);
        $this->belongsTo('Devices', [
            'foreignKey' => 'device_id',
        ]);
        $this->belongsTo('Transfusions', [
            'foreignKey' => 'transfusion_id',
        ]);
        $this->belongsTo('Medications', [
            'foreignKey' => 'medication_id',
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
            ->integer('sadr_id')
            ->allowEmptyString('sadr_id');

        $validator
            ->integer('sadr_followup_id')
            ->allowEmptyString('sadr_followup_id');

        $validator
            ->integer('pqmp_id')
            ->allowEmptyString('pqmp_id');

        $validator
            ->integer('aefi_id')
            ->allowEmptyString('aefi_id');

        $validator
            ->integer('device_id')
            ->allowEmptyString('device_id');

        $validator
            ->integer('transfusion_id')
            ->allowEmptyString('transfusion_id');

        $validator
            ->integer('medication_id')
            ->allowEmptyString('medication_id');

        $validator
            ->scalar('filename')
            ->maxLength('filename', 255)
            ->allowEmptyFile('filename');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('mimetype')
            ->maxLength('mimetype', 255)
            ->allowEmptyString('mimetype');

        $validator
            ->nonNegativeInteger('filesize')
            ->allowEmptyFile('filesize');

        $validator
            ->scalar('dir')
            ->maxLength('dir', 255)
            ->allowEmptyString('dir');

        $validator
            ->scalar('file')
            ->maxLength('file', 255)
            ->allowEmptyFile('file');

        $validator
            ->scalar('basename')
            ->maxLength('basename', 255)
            ->allowEmptyString('basename');

        $validator
            ->scalar('dirname')
            ->maxLength('dirname', 255)
            ->allowEmptyString('dirname');

        $validator
            ->scalar('checksum')
            ->maxLength('checksum', 255)
            ->allowEmptyString('checksum');

        $validator
            ->scalar('model')
            ->maxLength('model', 100)
            ->allowEmptyString('model');

        $validator
            ->integer('foreign_key')
            ->allowEmptyString('foreign_key');

        $validator
            ->scalar('alternative')
            ->maxLength('alternative', 50)
            ->allowEmptyString('alternative');

        $validator
            ->scalar('group')
            ->maxLength('group', 255)
            ->allowEmptyString('group');

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
        $rules->add($rules->existsIn('sadr_id', 'Sadrs'), ['errorField' => 'sadr_id']);
        $rules->add($rules->existsIn('sadr_followup_id', 'SadrFollowups'), ['errorField' => 'sadr_followup_id']);
        $rules->add($rules->existsIn('pqmp_id', 'Pqmps'), ['errorField' => 'pqmp_id']);
        $rules->add($rules->existsIn('aefi_id', 'Aefis'), ['errorField' => 'aefi_id']);
        $rules->add($rules->existsIn('device_id', 'Devices'), ['errorField' => 'device_id']);
        $rules->add($rules->existsIn('transfusion_id', 'Transfusions'), ['errorField' => 'transfusion_id']);
        $rules->add($rules->existsIn('medication_id', 'Medications'), ['errorField' => 'medication_id']);

        return $rules;
    }
}
