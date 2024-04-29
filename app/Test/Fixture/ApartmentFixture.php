<?php
/**
 * Apartment Fixture
 */
class ApartmentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'interior' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'apt' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'name1' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'ph1' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'mail1' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'name2' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'ph2' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'mail2' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'pets' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'child' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'adult' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'complex_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'parking_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'deposit_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'interior' => 'Lorem ipsum dolor sit amet',
			'apt' => 1,
			'name1' => 'Lorem ipsum dolor sit amet',
			'ph1' => 1,
			'mail1' => 'Lorem ipsum dolor sit amet',
			'name2' => 'Lorem ipsum dolor sit amet',
			'ph2' => 1,
			'mail2' => 'Lorem ipsum dolor sit amet',
			'pets' => 1,
			'child' => 1,
			'adult' => 1,
			'created' => '2024-01-21 18:36:29',
			'modified' => '2024-01-21 18:36:29',
			'complex_id' => 1,
			'parking_id' => 1,
			'deposit_id' => 1
		),
	);

}
