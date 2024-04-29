<?php
App::uses('AppModel', 'Model');
/**
 * Frequency Model
 *
 * @property Frequencyuser $Frequencyuser
 * @property Frequencyuser $Frequencyuser
 * @property Hour $Hour
 * @property Route $Route
 */
class Frequency extends AppModel {

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


/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		
		'Hour' => array(
			'className' => 'Hour',
			'foreignKey' => 'frequency_id',
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
		'Route' => array(
			'className' => 'Route',
			'foreignKey' => 'frequency_id',
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
