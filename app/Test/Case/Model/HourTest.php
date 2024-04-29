<?php
App::uses('Hour', 'Model');

/**
 * Hour Test Case
 */
class HourTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hour',
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
		'app.route',
		'app.frequency',
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
		$this->Hour = ClassRegistry::init('Hour');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hour);

		parent::tearDown();
	}

}
