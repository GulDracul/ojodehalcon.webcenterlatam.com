<?php
App::uses('Deposit', 'Model');

/**
 * Deposit Test Case
 */
class DepositTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.deposit',
		'app.apartment',
		'app.complex',
		'app.company',
		'app.round',
		'app.route',
		'app.shift',
		'app.incident',
		'app.income',
		'app.zone',
		'app.parking'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Deposit = ClassRegistry::init('Deposit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Deposit);

		parent::tearDown();
	}

}
