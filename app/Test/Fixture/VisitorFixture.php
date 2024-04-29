<?php
/**
 * Visitor Fixture
 */
class VisitorFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'dni' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'phone' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'photo' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'dni' => 1,
			'phone' => 1,
			'photo' => 1,
			'created' => '2024-01-19 02:04:40',
			'modified' => '2024-01-19 02:04:40'
		),
	);

}
