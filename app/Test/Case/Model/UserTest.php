<?php
App::uses('User', 'Model');

/**
 * User Test Case
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.role',
		'app.incident',
		'app.parking',
		'app.type',
		'app.apartment',
		'app.complex',
		'app.company',
		'app.round',
		'app.route',
		'app.zone',
		'app.shift',
		'app.schedule',
		'app.income',
		'app.visitor',
		'app.deposit',
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
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
