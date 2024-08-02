<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FacilityCodes Model
 *
 * @method \App\Model\Entity\FacilityCode newEmptyEntity()
 * @method \App\Model\Entity\FacilityCode newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\FacilityCode[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FacilityCode get($primaryKey, $options = [])
 * @method \App\Model\Entity\FacilityCode findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\FacilityCode patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FacilityCode[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\FacilityCode|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FacilityCode saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FacilityCode[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FacilityCode[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\FacilityCode[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FacilityCode[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FacilityCodesTable extends Table
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

        $this->setTable('facility_codes');
        $this->setDisplayField('facility_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }


       // Custom finder method
       public function findByTerm(Query $query, array $options): Query
       {
           $term = $options['term'] ?? '';
           $type = $options['type'] ?? '';
   
           if ($type === 'N') {
               // Example: searching by numeric term
               return $query->where(['facility_code LIKE' => "%$term%"]);
           } else {
               // Example: searching by alphanumeric term
               return $query->where(['facility_name LIKE' => "%$term%"]);
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
            ->scalar('facility_code')
            ->maxLength('facility_code', 17)
            ->allowEmptyString('facility_code');

        $validator
            ->scalar('facility_name')
            ->maxLength('facility_name', 250)
            ->allowEmptyString('facility_name');

        $validator
            ->scalar('province')
            ->maxLength('province', 50)
            ->allowEmptyString('province');

        $validator
            ->scalar('county')
            ->maxLength('county', 50)
            ->allowEmptyString('county');

        $validator
            ->scalar('sub_county')
            ->maxLength('sub_county', 255)
            ->allowEmptyString('sub_county');

        $validator
            ->scalar('district')
            ->maxLength('district', 50)
            ->allowEmptyString('district');

        $validator
            ->scalar('division')
            ->maxLength('division', 50)
            ->allowEmptyString('division');

        $validator
            ->scalar('ward')
            ->maxLength('ward', 255)
            ->allowEmptyString('ward');

        $validator
            ->scalar('type')
            ->maxLength('type', 100)
            ->allowEmptyString('type');

        $validator
            ->scalar('owner')
            ->maxLength('owner', 100)
            ->allowEmptyString('owner');

        $validator
            ->scalar('location')
            ->maxLength('location', 50)
            ->allowEmptyString('location');

        $validator
            ->scalar('sub_location')
            ->maxLength('sub_location', 250)
            ->allowEmptyString('sub_location');

        $validator
            ->scalar('description_of_location')
            ->maxLength('description_of_location', 255)
            ->allowEmptyString('description_of_location');

        $validator
            ->scalar('constituency')
            ->maxLength('constituency', 250)
            ->allowEmptyString('constituency');

        $validator
            ->scalar('nearest_town')
            ->maxLength('nearest_town', 250)
            ->allowEmptyString('nearest_town');

        $validator
            ->scalar('beds')
            ->maxLength('beds', 50)
            ->allowEmptyString('beds');

        $validator
            ->scalar('cots')
            ->maxLength('cots', 50)
            ->allowEmptyString('cots');

        $validator
            ->scalar('keph_level')
            ->maxLength('keph_level', 255)
            ->allowEmptyString('keph_level');

        $validator
            ->scalar('official_landline')
            ->maxLength('official_landline', 20)
            ->allowEmptyString('official_landline');

        $validator
            ->scalar('official_fax')
            ->maxLength('official_fax', 20)
            ->allowEmptyString('official_fax');

        $validator
            ->scalar('official_mobile')
            ->maxLength('official_mobile', 20)
            ->allowEmptyString('official_mobile');

        $validator
            ->scalar('official_email')
            ->maxLength('official_email', 50)
            ->allowEmptyString('official_email');

        $validator
            ->scalar('official_address')
            ->maxLength('official_address', 50)
            ->allowEmptyString('official_address');

        $validator
            ->scalar('official_alternate_number')
            ->maxLength('official_alternate_number', 20)
            ->allowEmptyString('official_alternate_number');

        $validator
            ->scalar('town')
            ->maxLength('town', 100)
            ->allowEmptyString('town');

        $validator
            ->scalar('post_code')
            ->maxLength('post_code', 20)
            ->allowEmptyString('post_code');

        $validator
            ->scalar('in_charge')
            ->maxLength('in_charge', 100)
            ->allowEmptyString('in_charge');

        $validator
            ->scalar('job_title_of_in_charge')
            ->maxLength('job_title_of_in_charge', 150)
            ->allowEmptyString('job_title_of_in_charge');

        $validator
            ->scalar('open_24hrs')
            ->maxLength('open_24hrs', 50)
            ->allowEmptyString('open_24hrs');

        $validator
            ->scalar('open_weekends')
            ->maxLength('open_weekends', 50)
            ->allowEmptyString('open_weekends');

        $validator
            ->scalar('operational_status')
            ->maxLength('operational_status', 50)
            ->allowEmptyString('operational_status');

        $validator
            ->scalar('anc')
            ->maxLength('anc', 10)
            ->allowEmptyString('anc');

        $validator
            ->scalar('art')
            ->maxLength('art', 10)
            ->allowEmptyString('art');

        $validator
            ->scalar('beoc')
            ->maxLength('beoc', 10)
            ->allowEmptyString('beoc');

        $validator
            ->scalar('blood')
            ->maxLength('blood', 10)
            ->allowEmptyString('blood');

        $validator
            ->scalar('caes_sec')
            ->maxLength('caes_sec', 10)
            ->allowEmptyString('caes_sec');

        $validator
            ->scalar('ceoc')
            ->maxLength('ceoc', 10)
            ->allowEmptyString('ceoc');

        $validator
            ->scalar('c_imci')
            ->maxLength('c_imci', 10)
            ->allowEmptyString('c_imci');

        $validator
            ->scalar('epi')
            ->maxLength('epi', 10)
            ->allowEmptyString('epi');

        $validator
            ->scalar('fp')
            ->maxLength('fp', 10)
            ->allowEmptyString('fp');

        $validator
            ->scalar('growm')
            ->maxLength('growm', 10)
            ->allowEmptyString('growm');

        $validator
            ->scalar('hbc')
            ->maxLength('hbc', 10)
            ->allowEmptyString('hbc');

        $validator
            ->scalar('hct')
            ->maxLength('hct', 10)
            ->allowEmptyString('hct');

        $validator
            ->scalar('ipd')
            ->maxLength('ipd', 10)
            ->allowEmptyString('ipd');

        $validator
            ->scalar('opd')
            ->maxLength('opd', 10)
            ->allowEmptyString('opd');

        $validator
            ->scalar('outreach')
            ->maxLength('outreach', 10)
            ->allowEmptyString('outreach');

        $validator
            ->scalar('pmtct')
            ->maxLength('pmtct', 10)
            ->allowEmptyString('pmtct');

        $validator
            ->scalar('rad_xray')
            ->maxLength('rad_xray', 10)
            ->allowEmptyString('rad_xray');

        $validator
            ->scalar('rhtc_rhdc')
            ->maxLength('rhtc_rhdc', 10)
            ->allowEmptyString('rhtc_rhdc');

        $validator
            ->scalar('tb_diag')
            ->maxLength('tb_diag', 10)
            ->allowEmptyString('tb_diag');

        $validator
            ->scalar('tb_labs')
            ->maxLength('tb_labs', 10)
            ->allowEmptyString('tb_labs');

        $validator
            ->scalar('tb_treat')
            ->maxLength('tb_treat', 10)
            ->allowEmptyString('tb_treat');

        $validator
            ->scalar('Youth')
            ->maxLength('Youth', 10)
            ->allowEmptyString('Youth');

        return $validator;
    }
}
