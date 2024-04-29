<?php
/**
 * Incident Fixture
 */
class IncidentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'incident' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'parking_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'apartment_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'complex_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'deposit_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'mailbox_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'zone_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'incomes_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'incident' => 'Lorem ipsum dolor sit amet',
			'created' => '2024-01-23 23:14:25',
			'modified' => '2024-01-23 23:14:25',
			'parking_id' => 1,
			'apartment_id' => 1,
			'complex_id' => 1,
			'deposit_id' => 1,
			'mailbox_id' => 1,
			'zone_id' => 1,
			'incomes_id' => 1,
			'user_id' => 1,
			'event_id' => 1
		),
	);

}
