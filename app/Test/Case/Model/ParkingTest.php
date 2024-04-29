<?php
App::uses('Parking', 'Model');

/**
 * Parking Test Case
 */
class ParkingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.parking',
		'app.type',
		'app.apartment',
		'app.complex',
		'app.company',
		'app.round',
		'app.route',
		'app.shift',
		'app.incident',
		'app.apartament',
		'app.deposit',
		'app.mailbox',
		'app.article',
		'app.user',
		'app.zone',
		'app.incomes',
		'app.income',
		'app.visitor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Parking = ClassRegistry::init('Parking');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Parking);

		parent::tearDown();
	}

}
