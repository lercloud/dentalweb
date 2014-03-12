<?php
App::uses('AppModel', 'Model');
/**
 * Branch Model
 *
 * @property User $User
 */
class Branch extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'branch_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
		'Abono' => array(
			'className' => 'Abono'
		),
		'Appointment' => array(
			'className' => 'Appointment'
		));

}
