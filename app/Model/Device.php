<?php
App::uses('AppModel', 'Model');
/**
 * Device Model
 *
 * @property User $User
 * @property County $County
 * @property Designation $Designation
 */
class Device extends AppModel {
	public $actsAs = array('Search.Searchable');

	
	public $filterArgs = array(
        'reference_no' => array('type' => 'like', 'encode' => true),
        'brand_name' => array('type' => 'query', 'method' => 'findByBrandName', 'encode' => true),
        'range' => array('type' => 'expression', 'method' => 'makeRangeCondition', 'field' => 'Device.created BETWEEN ? AND ?'),
        'start_date' => array('type' => 'query', 'method' => 'dummy'),
        'end_date' => array('type' => 'query', 'method' => 'dummy'),
        'name_of_institution' => array('type' => 'like', 'encode' => true),
        'report_title' => array('type' => 'like', 'encode' => true),
        'county_id' => array('type' => 'value'),
        'problem_noted' => array('type' => 'value'),
        'serious' => array('type' => 'value'),
        'serious_yes' => array('type' => 'value'),
        'outcome' => array('type' => 'value'),
        'operator' => array('type' => 'value'),
        'device_usage' => array('type' => 'value'),
        'common_name' => array('type' => 'like', 'encode' => true),
        'manufacturer_name' => array('type' => 'like', 'encode' => true),
        'patient_name' => array('type' => 'like', 'encode' => true),
        'report_type' => array('type' => 'value'),
        'reporter' => array('type' => 'query', 'method' => 'reporterFilter', 'encode' => true),
        'designation_id' => array('type' => 'value'),
        'gender' => array('type' => 'value'),
        'submit' => array('type' => 'query', 'method' => 'orConditions', 'encode' => true),
    );

    public function dummy($data = array()) {
    	return array( '1' => '1');
    }

    public function findByBrandName($data = array()) {
            $cond = array(
            	'OR' => array(
                    $this->alias . '.brand_name LIKE' => '%' . $data['brand_name'] . '%',
                    $this->alias . '.common_name LIKE' => '%' . $data['brand_name'] . '%',
                    $this->alias.'.id' => $this->ListOfDevice->find('list', array(
                	'conditions' => array(
                    	'OR' => array(
                        'ListOfDevice.brand_name LIKE' => '%' . $data['brand_name'] . '%',
                        'ListOfDevice.common_name LIKE' => '%' . $data['brand_name'] . '%', )),
                	'fields' => array('device_id', 'device_id')
                    ))
                )            	
            );
            return $cond;
    }

    public function reporterFilter($data = array()) {
            $filter = $data['reporter'];
            $cond = array(
                'OR' => array(
                    $this->alias . '.reporter_name LIKE' => '%' . $filter . '%',
                    $this->alias . '.reporter_email LIKE' => '%' . $filter . '%',
                ));
            return $cond;
    }

  	public function orConditions($data = array()) {
            $filter = $data['submit'];
            if ($filter == '0') {
              $cond = array(
                    $this->alias . '.submitted' => array('1', '2', '3'),
                    // $this->alias . '.active' => '1'
                );
            } else {
              $cond = array(
                    $this->alias . '.submitted' => array('0', '1', '2', '3', '4', '5', '6'),
                    // $this->alias . '.active' => '1'
                );
            }
            return $cond;
        }

	public function makeRangeCondition($data = array()) {
		if(!empty($data['start_date'])) $start_date = date('Y-m-d', strtotime($data['start_date']));
		else $start_date = date('Y-m-d', strtotime('2012-05-01'));

		if(!empty($data['end_date'])) $end_date = date('Y-m-d', strtotime($data['end_date']));
		else $end_date = date('Y-m-d');

		return array($start_date, $end_date);
	}

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'County' => array(
			'className' => 'County',
			'foreignKey' => 'county_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Designation' => array(
			'className' => 'Designation',
			'foreignKey' => 'designation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
        'DeviceFollowup' => array(
            'className' => 'Device',
            'foreignKey' => 'device_id',
            'dependent' => true,
            'conditions' => array('DeviceFollowup.report_type' => 'Followup'),
        ),
		'Attachment' => array(
            'className' => 'Attachment',
            'foreignKey' => 'foreign_key',
            'dependent' => true,
            'conditions' => array('Attachment.model' => 'Device', 'Attachment.group' => 'attachment'),
      	),
		'ListOfDevice' => array(
			'className' => 'ListOfDevice',
			'foreignKey' => 'device_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
}