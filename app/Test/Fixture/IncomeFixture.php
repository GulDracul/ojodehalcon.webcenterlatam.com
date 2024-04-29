<?php
/**
 * Income Fixture
 */
class IncomeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'comment' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'visitor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'complex_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'apartment_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'parking_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'comment' => 'Lorem ipsum dolor sit amet',
			'created' => '2024-01-19 01:59:09',
			'modified' => '2024-01-19 01:59:09',
			'visitor_id' => 1,
			'complex_id' => 1,
			'apartment_id' => 1,
			'parking_id' => 1,
			'user_id' => 1
		),
	);

}
