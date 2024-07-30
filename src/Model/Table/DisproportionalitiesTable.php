<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Disproportionalities Model
 *
 * @method \App\Model\Entity\Disproportionality newEmptyEntity()
 * @method \App\Model\Entity\Disproportionality newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Disproportionality[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Disproportionality get($primaryKey, $options = [])
 * @method \App\Model\Entity\Disproportionality findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Disproportionality patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Disproportionality[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Disproportionality|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Disproportionality saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Disproportionality[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Disproportionality[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Disproportionality[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Disproportionality[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DisproportionalitiesTable extends Table
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

        $this->setTable('disproportionalities');
        $this->setDisplayField('id');
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
            ->scalar('drug_name')
            ->maxLength('drug_name', 255)
            ->allowEmptyString('drug_name');

        $validator
            ->scalar('reaction_name')
            ->maxLength('reaction_name', 255)
            ->allowEmptyString('reaction_name');

        $validator
            ->scalar('model')
            ->maxLength('model', 255)
            ->allowEmptyString('model');

        return $validator;
    }
}
