<?php
App::uses('Round', 'Model');

/**
 * Round Test Case
 */
class RoundTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.round',
		'app.company',
		'app.complex',
		'app.apartment',
		'app.parking',
		'app.type',
		'app.incident',
		'app.apartament',
		'app.deposit',
		'app.mailbox',
		'app.article',
		'app.user',
		'app.zone',
		'app.incomes',
		'app.route',
		'app.income',
		'app.visitor',
		'app.shift'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Round = ClassRegistry::init('Round');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Round);

		parent::tearDown();
	}

}
