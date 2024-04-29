<?php
App::uses('Apartment', 'Model');

/**
 * Apartment Test Case
 */
class ApartmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.apartment',
		'app.complex',
		'app.company',
		'app.round',
		'app.user',
		'app.role',
		'app.incident',
		'app.parking',
		'app.type',
		'app.income',
		'app.visitor',
		'app.deposit',
		'app.mailbox',
		'app.article',
		'app.zone',
		'app.route',
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
		$this->Apartment = ClassRegistry::init('Apartment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Apartment);

		parent::tearDown();
	}

}
