<?php
App::uses('Incident', 'Model');

/**
 * Incident Test Case
 */
class IncidentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->Incident = ClassRegistry::init('Incident');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Incident);

		parent::tearDown();
	}

}
