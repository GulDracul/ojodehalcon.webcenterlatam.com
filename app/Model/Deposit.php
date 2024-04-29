<?php
App::uses('AppModel', 'Model');
/**
 * Deposit Model
 *
 * @property Apartment $Apartment
 * @property Incident $Incident
 */
class Deposit extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Apartment' => array(
			'className' => 'Apartment',
			'foreignKey' => 'deposit_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Incident' => array(
			'className' => 'Incident',
			'foreignKey' => 'deposit_id',
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
