<?php
App::uses('Shift', 'Model');

/**
 * Shift Test Case
 */
class ShiftTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shift',
		'app.schedule',
		'app.complex',
		'app.company',
		'app.round',
		'app.user',
		'app.route',
		'app.zone',
		'app.incident',
		'app.parking',
		'app.type',
		'app.apartment',
		'app.deposit',
		'app.income',
		'app.visitor',
		'app.apartament',
		'app.mailbox',
		'app.article',
		'app.incomes'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Shift = ClassRegistry::init('Shift');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Shift);

		parent::tearDown();
	}

}
