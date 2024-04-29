<?php
/**
 * Mailbox Fixture
 */
class MailboxFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'input' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'ouput' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'signature' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'comment' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'article_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'apartment_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'name' => 1,
			'input' => '2024-01-19 02:43:45',
			'ouput' => '2024-01-19 02:43:45',
			'signature' => 'Lorem ipsum dolor sit amet',
			'comment' => 'Lorem ipsum dolor sit amet',
			'created' => '2024-01-19 02:43:45',
			'modified' => '2024-01-19 02:43:45',
			'article_id' => 1,
			'apartment_id' => 1,
			'user_id' => 1
		),
	);

}
