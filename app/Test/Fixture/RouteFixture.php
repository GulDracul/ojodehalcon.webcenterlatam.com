<?php
/**
 * Route Fixture
 */
class RouteFixture extends CakeTestFixture {

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
		'zone_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'incident_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'complex_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'company_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'frequency_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'created' => '2024-01-23 23:10:10',
			'modified' => '2024-01-23 23:10:10',
			'zone_id' => 1,
			'user_id' => 1,
			'incident_id' => 1,
			'complex_id' => 1,
			'company_id' => 1,
			'frequency_id' => 1
		),
	);

}
