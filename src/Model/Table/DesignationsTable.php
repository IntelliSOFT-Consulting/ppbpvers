<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Designations Model
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
 * @property \App\Model\Table\SaefisTable&\Cake\ORM\Association\HasMany $Saefis
 * @property \App\Model\Table\TransfusionsTable&\Cake\ORM\Association\HasMany $Transfusions
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Designation newEmptyEntity()
 * @method \App\Model\Entity\Designation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Designation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Designation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Designation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Designation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Designation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Designation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Designation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Designation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Designation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Designation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Designation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DesignationsTable extends Table
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

        $this->setTable('designations');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Aefis', [
            'foreignKey' => 'designation_id',
        ]);
        $this->hasMany('Aggregates', [
            'foreignKey' => 'designation_id',
        ]);
        $this->hasMany('Ce2bs', [
            'foreignKey' => 'designation_id',
        ]);
        $this->hasMany('Devices', [
            'foreignKey' => 'designation_id',
        ]);
        $this->hasMany('Medications', [
            'foreignKey' => 'designation_id',
        ]);
        $this->hasMany('Padrs', [
            'foreignKey' => 'designation_id',
        ]);
        $this->hasMany('Pqmps', [
            'foreignKey' => 'designation_id',
        ]);
        $this->hasMany('SadrFollowups', [
            'foreignKey' => 'designation_id',
        ]);
        $this->hasMany('Sadrs', [
            'foreignKey' => 'designation_id',
        ]);
        $this->hasMany('Saefis', [
            'foreignKey' => 'designation_id',
        ]);
        $this->hasMany('Transfusions', [
            'foreignKey' => 'designation_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'designation_id',
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
            ->scalar('name')
            ->maxLength('name', 50)
            ->allowEmptyString('name');

        $validator
            ->integer('category')
            ->allowEmptyString('category');

        return $validator;
    }
}
