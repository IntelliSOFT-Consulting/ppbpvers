<?php
/**
 * Ce2bListOfDrug Fixture
 */
class Ce2bListOfDrugFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'ce2b_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'ce2b_followup_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'dose_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'route_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'frequency_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'frequency_id_other' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'drug_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'brand_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'batch_no' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'manufacturer' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dose' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'start_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'stop_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'indication' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'suspected_drug' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'ce2b_id' => 1,
			'ce2b_followup_id' => 1,
			'dose_id' => 1,
			'route_id' => 1,
			'frequency_id' => 1,
			'frequency_id_other' => 'Lorem ipsum dolor sit amet',
			'drug_name' => 'Lorem ipsum dolor sit amet',
			'brand_name' => 'Lorem ipsum dolor sit amet',
			'batch_no' => 'Lorem ipsum dolor sit amet',
			'manufacturer' => 'Lorem ipsum dolor sit amet',
			'dose' => 'Lorem ipsum dolor sit amet',
			'start_date' => '2024-06-07',
			'stop_date' => '2024-06-07',
			'indication' => 'Lorem ipsum dolor sit amet',
			'suspected_drug' => 'Lorem ipsum dolor sit amet',
			'created' => '2024-06-07 10:25:54',
			'modified' => '2024-06-07 10:25:54'
		),
	);

}
