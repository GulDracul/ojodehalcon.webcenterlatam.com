<?php
App::uses('AppModel', 'Model');
/**
 * Income Model
 *
 * @property Visitor $Visitor
 * @property Complex $Complex
 * @property Apartment $Apartment
 * @property Parking $Parking
 * @property User $User
 */
class Income extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Visitor' => array(
			'className' => 'Visitor',
			'foreignKey' => 'visitor_id',
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
		'Apartment' => array(
			'className' => 'Apartment',
			'foreignKey' => 'apartment_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Parking' => array(
			'className' => 'Parking',
			'foreignKey' => 'parking_id',
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
		)
	);
}
