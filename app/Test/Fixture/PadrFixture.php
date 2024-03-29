<?php
/**
 * Padr Fixture
 */
class PadrFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'sadr_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'county_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sub_county_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'designation_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'reference_no' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 55, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'vigiflow_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'report_title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'report_type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'report_sadr' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'report_therapeutic' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'medicinal_product' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'blood_products' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'herbal_product' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'cosmeceuticals' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'product_other' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'product_specify' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name_of_institution' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'institution_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'contact' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'patient_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ip_no' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date_of_birth' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'age_group' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'patient_address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ward' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'gender' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'known_allergy' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'known_allergy_specify' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pregnant' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pregnancy_status' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'weight' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'height' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'diagnosis' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'medical_history' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date_of_onset_of_reaction' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description_of_reaction' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reaction_resolve' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 55, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reaction_reappear' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 55, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lab_investigation' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'severity' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'serious' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'serious_reason' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'action_taken' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'outcome' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'causality' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'any_other_comment' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reporter_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reporter_email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reporter_phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'submitted' => array('type' => 'tinyinteger', 'null' => true, 'default' => '0', 'length' => 2, 'unsigned' => false),
		'emails' => array('type' => 'tinyinteger', 'null' => true, 'default' => '0', 'length' => 2, 'unsigned' => false),
		'active' => array('type' => 'boolean', 'null' => true, 'default' => '1'),
		'device' => array('type' => 'tinyinteger', 'null' => true, 'default' => '0', 'length' => 2, 'unsigned' => false),
		'deleted' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'deleted_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'notified' => array('type' => 'tinyinteger', 'null' => true, 'default' => '0', 'length' => 2, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'reporter_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'reporter_name_diff' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reporter_designation_diff' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'reporter_email_diff' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reporter_phone_diff' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reporter_date_diff' => array('type' => 'date', 'null' => true, 'default' => null),
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
			'sadr_id' => 1,
			'user_id' => 1,
			'county_id' => 1,
			'sub_county_id' => 1,
			'designation_id' => 1,
			'reference_no' => 'Lorem ipsum dolor sit amet',
			'vigiflow_id' => 'Lorem ipsum dolor sit amet',
			'report_title' => 'Lorem ipsum dolor sit amet',
			'report_type' => 'Lorem ipsum dolor ',
			'report_sadr' => 1,
			'report_therapeutic' => 1,
			'medicinal_product' => 1,
			'blood_products' => 1,
			'herbal_product' => 1,
			'cosmeceuticals' => 1,
			'product_other' => 1,
			'product_specify' => 'Lorem ipsum dolor sit amet',
			'name_of_institution' => 'Lorem ipsum dolor sit amet',
			'institution_code' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'contact' => 'Lorem ipsum dolor sit amet',
			'patient_name' => 'Lorem ipsum dolor sit amet',
			'ip_no' => 'Lorem ipsum dolor sit amet',
			'date_of_birth' => 'Lorem ipsum dolor ',
			'age_group' => 'Lorem ipsum dolor sit amet',
			'patient_address' => 'Lorem ipsum dolor sit amet',
			'ward' => 'Lorem ipsum dolor sit amet',
			'gender' => 'Lorem',
			'known_allergy' => 'L',
			'known_allergy_specify' => 'Lorem ipsum dolor sit amet',
			'pregnant' => 'Lorem ip',
			'pregnancy_status' => 'Lorem ipsum dolor ',
			'weight' => 'Lorem ip',
			'height' => 'Lorem ip',
			'diagnosis' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'medical_history' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'date_of_onset_of_reaction' => 'Lorem ipsum dolor ',
			'description_of_reaction' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'reaction_resolve' => 'Lorem ipsum dolor sit amet',
			'reaction_reappear' => 'Lorem ipsum dolor sit amet',
			'lab_investigation' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'severity' => 'Lorem ipsum dolor sit amet',
			'serious' => 'Lorem ipsum dolor sit amet',
			'serious_reason' => 'Lorem ipsum dolor sit amet',
			'action_taken' => 'Lorem ipsum dolor sit amet',
			'outcome' => 'Lorem ipsum dolor sit amet',
			'causality' => 'Lorem ipsum dolor sit amet',
			'any_other_comment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'reporter_name' => 'Lorem ipsum dolor sit amet',
			'reporter_email' => 'Lorem ipsum dolor sit amet',
			'reporter_phone' => 'Lorem ipsum dolor sit amet',
			'submitted' => 1,
			'emails' => 1,
			'active' => 1,
			'device' => 1,
			'deleted' => 1,
			'deleted_date' => '2020-06-14 11:32:51',
			'notified' => 1,
			'created' => '2020-06-14 11:32:51',
			'modified' => '2020-06-14 11:32:51',
			'reporter_date' => '2020-06-14',
			'reporter_name_diff' => 'Lorem ipsum dolor sit amet',
			'reporter_designation_diff' => 1,
			'reporter_email_diff' => 'Lorem ipsum dolor sit amet',
			'reporter_phone_diff' => 'Lorem ipsum dolor sit amet',
			'reporter_date_diff' => '2020-06-14'
		),
	);

}
