<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SadrListOfDrugs Model
 *
 * @property \App\Model\Table\SadrsTable&\Cake\ORM\Association\BelongsTo $Sadrs
 * @property \App\Model\Table\SadrFollowupsTable&\Cake\ORM\Association\BelongsTo $SadrFollowups
 * @property \App\Model\Table\DosesTable&\Cake\ORM\Association\BelongsTo $Doses
 * @property \App\Model\Table\RoutesTable&\Cake\ORM\Association\BelongsTo $Routes
 * @property \App\Model\Table\FrequenciesTable&\Cake\ORM\Association\BelongsTo $Frequencies
 *
 * @method \App\Model\Entity\SadrListOfDrug newEmptyEntity()
 * @method \App\Model\Entity\SadrListOfDrug newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SadrListOfDrug[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SadrListOfDrug get($primaryKey, $options = [])
 * @method \App\Model\Entity\SadrListOfDrug findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SadrListOfDrug patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SadrListOfDrug[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SadrListOfDrug|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SadrListOfDrug saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SadrListOfDrug[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SadrListOfDrug[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SadrListOfDrug[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SadrListOfDrug[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SadrListOfDrugsTable extends Table
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

        $this->setTable('sadr_list_of_drugs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sadrs', [
            'foreignKey' => 'sadr_id',
        ]);
        $this->belongsTo('SadrFollowups', [
            'foreignKey' => 'sadr_followup_id',
        ]);
        $this->belongsTo('Doses', [
            'foreignKey' => 'dose_id',
        ]);
        $this->belongsTo('Routes', [
            'foreignKey' => 'route_id',
        ]);
        $this->belongsTo('Frequencies', [
            'foreignKey' => 'frequency_id',
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
            ->integer('dose_id')
            ->allowEmptyString('dose_id');

        $validator
            ->integer('route_id')
            ->allowEmptyString('route_id');

        $validator
            ->integer('frequency_id')
            ->allowEmptyString('frequency_id');

        $validator
            ->scalar('frequency_id_other')
            ->maxLength('frequency_id_other', 255)
            ->allowEmptyString('frequency_id_other');

        $validator
            ->scalar('drug_name')
            ->maxLength('drug_name', 255)
            ->allowEmptyString('drug_name');

        $validator
            ->scalar('brand_name')
            ->maxLength('brand_name', 255)
            ->allowEmptyString('brand_name');

        $validator
            ->scalar('batch_no')
            ->maxLength('batch_no', 255)
            ->allowEmptyString('batch_no');

        $validator
            ->scalar('manufacturer')
            ->maxLength('manufacturer', 255)
            ->allowEmptyString('manufacturer');

        $validator
            ->scalar('dose')
            ->maxLength('dose', 100)
            ->allowEmptyString('dose');

        $validator
            ->date('start_date')
            ->allowEmptyDate('start_date');

        $validator
            ->date('stop_date')
            ->allowEmptyDate('stop_date');

        $validator
            ->scalar('indication')
            ->maxLength('indication', 100)
            ->allowEmptyString('indication');

        $validator
            ->scalar('suspected_drug')
            ->maxLength('suspected_drug', 100)
            ->allowEmptyString('suspected_drug');

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
        $rules->add($rules->existsIn('dose_id', 'Doses'), ['errorField' => 'dose_id']);
        $rules->add($rules->existsIn('route_id', 'Routes'), ['errorField' => 'route_id']);
        $rules->add($rules->existsIn('frequency_id', 'Frequencies'), ['errorField' => 'frequency_id']);

        return $rules;
    }
}
