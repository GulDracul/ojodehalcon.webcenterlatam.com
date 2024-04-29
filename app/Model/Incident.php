<?php
App::uses('AppModel', 'Model');
/**
 * Incident Model
 *
 * @property Parking $Parking
 * @property Apartment $Apartment
 * @property Complex $Complex
 * @property Deposit $Deposit
 * @property Mailbox $Mailbox
 * @property Zone $Zone
 * @property Incomes $Incomes
 * @property User $User
 * @property Event $Event
 * @property Route $Route
 */
class Incident extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Parking' => array(
			'className' => 'Parking',
			'foreignKey' => 'parking_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Apartment' => array(
			'className' => 'Apartment',
			'foreignKey' => 'apartment_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Complex' => array(
			'className' => 'Complex',
			'foreignKey' => 'complex_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Deposit' => array(
			'className' => 'Deposit',
			'foreignKey' => 'deposit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Mailbox' => array(
			'className' => 'Mailbox',
			'foreignKey' => 'mailbox_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Zone' => array(
			'className' => 'Zone',
			'foreignKey' => 'zone_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Incomes' => array(
			'className' => 'Incomes',
			'foreignKey' => 'incomes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Route' => array(
			'className' => 'Route',
			'foreignKey' => 'incident_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
