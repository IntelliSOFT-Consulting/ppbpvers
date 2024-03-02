<?php
App::uses('Comment', 'Model');

/**
 * Comment Test Case
 */
class CommentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comment',
		'app.user',
		'app.group',
		'app.designation',
		'app.pqmp',
		'app.county',
		'app.sadr',
		'app.sub_county',
		'app.aefi',
		'app.aefi_description',
		'app.attachment',
		'app.aefi_list_of_vaccine',
		'app.vaccine',
		'app.reminder',
		'app.padr',
		'app.padr_list_of_medicine',
		'app.sadr_list_of_drug',
		'app.sadr_followup',
		'app.dose',
		'app.route',
		'app.frequency',
		'app.sadr_description',
		'app.sadr_list_of_medicine',
		'app.country',
		'app.notification',
		'app.feedback',
		'app.saefi',
		'app.review',
		'app.device',
		'app.list_of_device',
		'app.medication',
		'app.medication_product',
		'app.transfusion',
		'app.pint',
		'app.sae',
		'app.concomittant_drug',
		'app.suspected_drug',
		'app.ce2b',
		'app.facility_code',
		'app.model'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Comment = ClassRegistry::init('Comment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Comment);

		parent::tearDown();
	}

}
