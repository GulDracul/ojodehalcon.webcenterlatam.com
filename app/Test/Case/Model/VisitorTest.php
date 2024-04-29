<?php
App::uses('Visitor', 'Model');

/**
 * Visitor Test Case
 */
class VisitorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.visitor',
		'app.income',
		'app.complex',
		'app.company',
		'app.round',
		'app.user',
		'app.role',
		'app.incident',
		'app.parking',
		'app.type',
		'app.apartment',
		'app.deposit',
		'app.apartament',
		'app.mailbox',
		'app.article',
		'app.zone',
		'app.incomes',
		'app.route',
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
		$this->Visitor = ClassRegistry::init('Visitor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Visitor);

		parent::tearDown();
	}

}
