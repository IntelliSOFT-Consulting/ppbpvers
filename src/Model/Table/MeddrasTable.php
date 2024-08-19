<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Meddras Model
 *
 * @method \App\Model\Entity\Meddra newEmptyEntity()
 * @method \App\Model\Entity\Meddra newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Meddra[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Meddra get($primaryKey, $options = [])
 * @method \App\Model\Entity\Meddra findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Meddra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Meddra[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Meddra|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Meddra saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Meddra[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Meddra[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Meddra[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Meddra[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MeddrasTable extends Table
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
                $this->setTable('meddras');
        $this->setDisplayField('llt_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }
    public function findByTerm(Query $query, array $options): Query
    {
        $term = $options['term'] ?? '';
        $type = $options['type'] ?? '';

        if ($type === 'N') {
            // Example: searching by numeric term
            return $query->where(['pt_code LIKE' => "%$term%"]);
        } else {
            // Example: searching by alphanumeric term
            return $query->where(['llt_name LIKE' => "%$term%"]);
        }
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
            ->integer('id')
            ->allowEmptyString('id');

        $validator
            ->scalar('llt_name')
            ->maxLength('llt_name', 100)
            ->allowEmptyString('llt_name');

        $validator
            ->integer('pt_code')
            ->allowEmptyString('pt_code');

        $validator
            ->scalar('llt_whoart_code')
            ->maxLength('llt_whoart_code', 10)
            ->allowEmptyString('llt_whoart_code');

        $validator
            ->scalar('llt_harts_code')
            ->maxLength('llt_harts_code', 10)
            ->allowEmptyString('llt_harts_code');

        $validator
            ->scalar('llt_costart_sym')
            ->maxLength('llt_costart_sym', 10)
            ->allowEmptyString('llt_costart_sym');

        $validator
            ->scalar('llt_icd9_code')
            ->maxLength('llt_icd9_code', 10)
            ->allowEmptyString('llt_icd9_code');

        $validator
            ->scalar('llt_icd9cm_code')
            ->maxLength('llt_icd9cm_code', 10)
            ->allowEmptyString('llt_icd9cm_code');

        $validator
            ->scalar('llt_icd10_code')
            ->maxLength('llt_icd10_code', 10)
            ->allowEmptyString('llt_icd10_code');

        $validator
            ->scalar('llt_currency')
            ->maxLength('llt_currency', 1)
            ->allowEmptyString('llt_currency');

        $validator
            ->scalar('llt_jart_code')
            ->maxLength('llt_jart_code', 10)
            ->allowEmptyString('llt_jart_code');

        $validator
            ->scalar('COL_12')
            ->maxLength('COL_12', 10)
            ->allowEmptyString('COL_12');

        return $validator;
    }
}
