<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ListOfDevices Model
 *
 * @property \App\Model\Table\DevicesTable&\Cake\ORM\Association\BelongsTo $Devices
 *
 * @method \App\Model\Entity\ListOfDevice newEmptyEntity()
 * @method \App\Model\Entity\ListOfDevice newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ListOfDevice[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ListOfDevice get($primaryKey, $options = [])
 * @method \App\Model\Entity\ListOfDevice findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ListOfDevice patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ListOfDevice[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ListOfDevice|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ListOfDevice saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ListOfDevice[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ListOfDevice[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ListOfDevice[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ListOfDevice[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ListOfDevicesTable extends Table
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

        $this->setTable('list_of_devices');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Devices', [
            'foreignKey' => 'device_id',
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
            ->integer('device_id')
            ->allowEmptyString('device_id');

        $validator
            ->scalar('brand_name')
            ->maxLength('brand_name', 255)
            ->allowEmptyString('brand_name');

        $validator
            ->scalar('serial_no')
            ->maxLength('serial_no', 255)
            ->allowEmptyString('serial_no');

        $validator
            ->scalar('common_name')
            ->maxLength('common_name', 255)
            ->allowEmptyString('common_name');

        $validator
            ->scalar('manufacturer')
            ->maxLength('manufacturer', 255)
            ->allowEmptyString('manufacturer');

        $validator
            ->scalar('manufacture_date')
            ->maxLength('manufacture_date', 255)
            ->allowEmptyString('manufacture_date');

        $validator
            ->scalar('expiry_date')
            ->maxLength('expiry_date', 255)
            ->allowEmptyString('expiry_date');

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
        $rules->add($rules->existsIn('device_id', 'Devices'), ['errorField' => 'device_id']);

        return $rules;
    }
}
