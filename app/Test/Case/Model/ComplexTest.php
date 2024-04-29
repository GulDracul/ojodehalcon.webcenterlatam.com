<?php
App::uses('Complex', 'Model');

/**
 * Complex Test Case
 */
class ComplexTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.complex',
		'app.company',
		'app.round',
		'app.route',
		'app.shift',
		'app.apartment',
		'app.parking',
		'app.deposit',
		'app.income',
		'app.incident',
		'app.zone'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Complex = ClassRegistry::init('Complex');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Complex);

		parent::tearDown();
	}

}
