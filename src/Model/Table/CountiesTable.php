<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Counties Model
 *
 * @property \App\Model\Table\AefisTable&\Cake\ORM\Association\HasMany $Aefis
 * @property \App\Model\Table\AggregatesTable&\Cake\ORM\Association\HasMany $Aggregates
 * @property \App\Model\Table\Ce2bsTable&\Cake\ORM\Association\HasMany $Ce2bs
 * @property \App\Model\Table\DevicesTable&\Cake\ORM\Association\HasMany $Devices
 * @property \App\Model\Table\MedicationsTable&\Cake\ORM\Association\HasMany $Medications
 * @property \App\Model\Table\PadrsTable&\Cake\ORM\Association\HasMany $Padrs
 * @property \App\Model\Table\PqmpsTable&\Cake\ORM\Association\HasMany $Pqmps
 * @property \App\Model\Table\SadrFollowupsTable&\Cake\ORM\Association\HasMany $SadrFollowups
 * @property \App\Model\Table\SadrsTable&\Cake\ORM\Association\HasMany $Sadrs
 * @property \App\Model\Table\SubCountiesTable&\Cake\ORM\Association\HasMany $SubCounties
 * @property \App\Model\Table\TransfusionsTable&\Cake\ORM\Association\HasMany $Transfusions
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\County newEmptyEntity()
 * @method \App\Model\Entity\County newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\County[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\County get($primaryKey, $options = [])
 * @method \App\Model\Entity\County findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\County patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\County[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\County|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\County saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\County[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\County[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\County[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\County[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CountiesTable extends Table
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

        $this->setTable('counties');      
        $this->setDisplayField('county_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Aefis', [
            'foreignKey' => 'county_id',
        ]);
        $this->hasMany('Aggregates', [
            'foreignKey' => 'county_id',
        ]);
        $this->hasMany('Ce2bs', [
            'foreignKey' => 'county_id',
        ]);
        $this->hasMany('Devices', [
            'foreignKey' => 'county_id',
        ]);
        $this->hasMany('Medications', [
            'foreignKey' => 'county_id',
        ]);
        $this->hasMany('Padrs', [
            'foreignKey' => 'county_id',
        ]);
        $this->hasMany('Pqmps', [
            'foreignKey' => 'county_id',
        ]);
        $this->hasMany('SadrFollowups', [
            'foreignKey' => 'county_id',
        ]);
        $this->hasMany('Sadrs', [
            'foreignKey' => 'county_id',
        ]);
        $this->hasMany('SubCounties', [
            'foreignKey' => 'county_id',
        ]);
        $this->hasMany('Transfusions', [
            'foreignKey' => 'county_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'county_id',
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
            ->scalar('county_name')
            ->maxLength('county_name', 50)
            ->notEmptyString('county_name','please provide name');

        $validator
            ->scalar('org_unit')
            ->maxLength('org_unit', 255)
            ->allowEmptyString('org_unit');

        return $validator;
    }
}
