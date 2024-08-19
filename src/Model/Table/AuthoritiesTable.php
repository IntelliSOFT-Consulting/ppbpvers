<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Authorities Model 
 *
 * @method \App\Model\Entity\Authority newEmptyEntity()
 * @method \App\Model\Entity\Authority newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Authority[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Authority get($primaryKey, $options = [])
 * @method \App\Model\Entity\Authority findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Authority patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Authority[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Authority|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Authority saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Authority[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Authority[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Authority[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Authority[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AuthoritiesTable extends Table
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

        $this->setTable('authorities');
        $this->setDisplayField('mah_name');
        $this->setPrimaryKey('id');
    }
    public function findByTerm(Query $query, array $options): Query
    {
        $term = $options['term'] ?? '';
        $type = $options['type'] ?? '';

        if ($type === 'N') {
            // Example: searching by numeric term
            return $query->where(['mah_company_email LIKE' => "%$term%"]);
        } else {
            // Example: searching by alphanumeric term
            return $query->where(['mah_company_email LIKE' => "%$term%"]);
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
            ->scalar('mah_name')
            ->maxLength('mah_name', 137)
            ->allowEmptyString('mah_name');

        $validator
            ->scalar('mah_company_name')
            ->maxLength('mah_company_name', 153)
            ->allowEmptyString('mah_company_name');

        $validator
            ->scalar('mah_company_address')
            ->maxLength('mah_company_address', 261)
            ->allowEmptyString('mah_company_address');

        $validator
            ->scalar('mah_company_telephone')
            ->maxLength('mah_company_telephone', 168)
            ->allowEmptyString('mah_company_telephone');

        $validator
            ->scalar('mah_company_email')
            ->maxLength('mah_company_email', 109)
            ->allowEmptyString('mah_company_email');

        $validator
            ->integer('product')
            ->allowEmptyString('product');

        $validator
            ->scalar('master_mah')
            ->maxLength('master_mah', 4)
            ->allowEmptyString('master_mah');

        return $validator;
    }
}
