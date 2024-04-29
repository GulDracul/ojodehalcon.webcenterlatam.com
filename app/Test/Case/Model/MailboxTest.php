<?php
App::uses('Mailbox', 'Model');

/**
 * Mailbox Test Case
 */
class MailboxTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mailbox',
		'app.article',
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
		$this->Mailbox = ClassRegistry::init('Mailbox');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mailbox);

		parent::tearDown();
	}

}
