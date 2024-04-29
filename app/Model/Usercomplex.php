<?php
App::uses('AppModel', 'Model');
/**
 * Usercomplex Model
 *
 * @property User $User
 * @property Complex $Complex
 * @property Role $Role
 */
class Usercomplex extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
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
		'Role' => array(
			'className' => 'Role',
			'foreignKey' => 'role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
