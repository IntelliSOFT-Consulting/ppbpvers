<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MedicationProducts Model
 *
 * @property \App\Model\Table\MedicationsTable&\Cake\ORM\Association\BelongsTo $Medications
 *
 * @method \App\Model\Entity\MedicationProduct newEmptyEntity()
 * @method \App\Model\Entity\MedicationProduct newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MedicationProduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MedicationProduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\MedicationProduct findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MedicationProduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MedicationProduct[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MedicationProduct|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MedicationProduct saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MedicationProduct[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MedicationProduct[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MedicationProduct[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MedicationProduct[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MedicationProductsTable extends Table
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

        $this->setTable('medication_products');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

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
            ->integer('medication_id')
            ->allowEmptyString('medication_id');

        $validator
            ->scalar('generic_name_i')
            ->maxLength('generic_name_i', 255)
            ->allowEmptyString('generic_name_i');

        $validator
            ->scalar('product_name_i')
            ->maxLength('product_name_i', 255)
            ->allowEmptyString('product_name_i');

        $validator
            ->scalar('dosage_form_i')
            ->maxLength('dosage_form_i', 255)
            ->allowEmptyString('dosage_form_i');

        $validator
            ->scalar('dosage_i')
            ->maxLength('dosage_i', 255)
            ->allowEmptyString('dosage_i');

        $validator
            ->scalar('manufacturer_i')
            ->maxLength('manufacturer_i', 255)
            ->allowEmptyString('manufacturer_i');

        $validator
            ->scalar('strength_i')
            ->maxLength('strength_i', 255)
            ->allowEmptyString('strength_i');

        $validator
            ->scalar('container_i')
            ->maxLength('container_i', 255)
            ->allowEmptyString('container_i');

        $validator
            ->scalar('generic_name_ii')
            ->maxLength('generic_name_ii', 255)
            ->allowEmptyString('generic_name_ii');

        $validator
            ->scalar('product_name_ii')
            ->maxLength('product_name_ii', 255)
            ->allowEmptyString('product_name_ii');

        $validator
            ->scalar('dosage_form_ii')
            ->maxLength('dosage_form_ii', 255)
            ->allowEmptyString('dosage_form_ii');

        $validator
            ->scalar('dosage_ii')
            ->maxLength('dosage_ii', 255)
            ->allowEmptyString('dosage_ii');

        $validator
            ->scalar('manufacturer_ii')
            ->maxLength('manufacturer_ii', 255)
            ->allowEmptyString('manufacturer_ii');

        $validator
            ->scalar('strength_ii')
            ->maxLength('strength_ii', 255)
            ->allowEmptyString('strength_ii');

        $validator
            ->scalar('container_ii')
            ->maxLength('container_ii', 255)
            ->allowEmptyString('container_ii');

        $validator
            ->dateTime('modifed')
            ->allowEmptyDateTime('modifed');

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
        $rules->add($rules->existsIn('medication_id', 'Medications'), ['errorField' => 'medication_id']);

        return $rules;
    }
}
