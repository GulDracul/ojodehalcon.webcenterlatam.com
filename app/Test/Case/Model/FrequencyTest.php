<?php
App::uses('Frequency', 'Model');

/**
 * Frequency Test Case
 */
class FrequencyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.frequency',
		'app.hour',
		'app.route',
		'app.zone',
		'app.complex',
		'app.company',
		'app.round',
		'app.user',
		'app.role',
		'app.incident',
		'app.parking',
		'app.type',
		'app.apartment',
		'app.deposit',
		'app.income',
		'app.visitor',
		'app.mailbox',
		'app.article',
		'app.incomes',
		'app.shift',
		'app.schedule'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Frequency = ClassRegistry::init('Frequency');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Frequency);

		parent::tearDown();
	}

}
