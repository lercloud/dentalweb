<?php
App::uses('AppModel', 'Model');
/**
 * Doctor Model
 *
 * @property Tratamiento $Tratamiento
 */
class Doctor extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Tratamiento' => array(
			'className' => 'Tratamiento',
			'foreignKey' => 'doctor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


public $hasMany = array(
		'Abono' => array(
			'className' => 'Abono',
			'foreignKey' => 'doctor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Appointment' => array(
			'className' => 'Appointment',
			'foreignKey' => 'doctor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
