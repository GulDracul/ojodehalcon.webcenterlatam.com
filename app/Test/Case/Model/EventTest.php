<?php
App::uses('Event', 'Model');

/**
 * Event Test Case
 */
class EventTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.event',
		'app.incident',
		'app.parking',
		'app.type',
		'app.apartment',
		'app.complex',
		'app.company',
		'app.round',
		'app.user',
		'app.role',
		'app.income',
		'app.visitor',
		'app.mailbox',
		'app.article',
		'app.route',
		'app.zone',
		'app.hour',
		'app.frequency',
		'app.shift',
		'app.schedule',
		'app.deposit',
		'app.incomes'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Event = ClassRegistry::init('Event');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Event);

		parent::tearDown();
	}

}
