<?php
/**
 * Hour Fixture
 */
class HourFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'zone_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'frequency_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'start' => array('type' => 'time', 'null' => false, 'default' => null),
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
			'zone_id' => 1,
			'frequency_id' => 1,
			'start' => '23:27:18'
		),
	);

}
