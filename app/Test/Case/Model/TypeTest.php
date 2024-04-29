<?php
App::uses('Type', 'Model');

/**
 * Type Test Case
 */
class TypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.type',
		'app.parking',
		'app.apartment',
		'app.complex',
		'app.company',
		'app.round',
		'app.user',
		'app.route',
		'app.zone',
		'app.incident',
		'app.apartament',
		'app.deposit',
		'app.mailbox',
		'app.article',
		'app.incomes',
		'app.shift',
		'app.schedule',
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
		$this->Type = ClassRegistry::init('Type');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Type);

		parent::tearDown();
	}

}
