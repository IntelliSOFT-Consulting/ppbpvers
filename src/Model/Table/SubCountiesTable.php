<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SubCounties Model
 *
 * @property \App\Model\Table\CountiesTable&\Cake\ORM\Association\BelongsTo $Counties
 * @property \App\Model\Table\AefisTable&\Cake\ORM\Association\HasMany $Aefis
 * @property \App\Model\Table\AggregatesTable&\Cake\ORM\Association\HasMany $Aggregates
 * @property \App\Model\Table\Ce2bsTable&\Cake\ORM\Association\HasMany $Ce2bs
 * @property \App\Model\Table\PadrsTable&\Cake\ORM\Association\HasMany $Padrs
 * @property \App\Model\Table\PqmpsTable&\Cake\ORM\Association\HasMany $Pqmps
 * @property \App\Model\Table\SadrsTable&\Cake\ORM\Association\HasMany $Sadrs
 *
 * @method \App\Model\Entity\SubCounty newEmptyEntity()
 * @method \App\Model\Entity\SubCounty newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SubCounty[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SubCounty get($primaryKey, $options = [])
 * @method \App\Model\Entity\SubCounty findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SubCounty patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SubCounty[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SubCounty|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubCounty saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SubCounty[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SubCounty[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SubCounty[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SubCounty[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SubCountiesTable extends Table
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

        $this->setTable('sub_counties');
        $this->setDisplayField('sub_county_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Counties', [
            'foreignKey' => 'county_id',
        ]);
        $this->hasMany('Aefis', [
            'foreignKey' => 'sub_county_id',
        ]);
        $this->hasMany('Aggregates', [
            'foreignKey' => 'sub_county_id',
        ]);
        $this->hasMany('Ce2bs', [
            'foreignKey' => 'sub_county_id',
        ]);
        $this->hasMany('Padrs', [
            'foreignKey' => 'sub_county_id',
        ]);
        $this->hasMany('Pqmps', [
            'foreignKey' => 'sub_county_id',
        ]);
        $this->hasMany('Sadrs', [
            'foreignKey' => 'sub_county_id',
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
            ->integer('county_id')
            ->allowEmptyString('county_id');

        $validator
            ->scalar('sub_county_name')
            ->maxLength('sub_county_name', 50)
            ->allowEmptyString('sub_county_name');

        $validator
            ->scalar('county_name')
            ->maxLength('county_name', 50)
            ->allowEmptyString('county_name');

        $validator
            ->scalar('Province')
            ->maxLength('Province', 50)
            ->allowEmptyString('Province');

        $validator
            ->scalar('Pop_2009')
            ->maxLength('Pop_2009', 50)
            ->allowEmptyString('Pop_2009');

        $validator
            ->scalar('RegVoters')
            ->maxLength('RegVoters', 50)
            ->allowEmptyString('RegVoters');

        $validator
            ->scalar('AreaSqKms')
            ->maxLength('AreaSqKms', 50)
            ->allowEmptyString('AreaSqKms');

        $validator
            ->scalar('CAWards')
            ->maxLength('CAWards', 50)
            ->allowEmptyString('CAWards');

        $validator
            ->scalar('MainEthnicGroup')
            ->maxLength('MainEthnicGroup', 50)
            ->allowEmptyString('MainEthnicGroup');

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
        $rules->add($rules->existsIn('county_id', 'Counties'), ['errorField' => 'county_id']);

        return $rules;
    }

    public function findByCountyId(Query $query, array $options): Query
    {
        $term = $options['term'] ?? '';
        // Example: searching by numeric term
        return $query->where(['county_id LIKE' => "%$term%"]);
    }
}
