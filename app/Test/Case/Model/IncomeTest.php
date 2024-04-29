<?php
App::uses('Income', 'Model');

/**
 * Income Test Case
 */
class IncomeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.income',
		'app.visitor',
		'app.complex',
		'app.company',
		'app.round',
		'app.route',
		'app.shift',
		'app.apartment',
		'app.parking',
		'app.deposit',
		'app.incident',
		'app.apartament',
		'app.mailbox',
		'app.zone',
		'app.incomes',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Income = ClassRegistry::init('Income');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Income);

		parent::tearDown();
	}

}
