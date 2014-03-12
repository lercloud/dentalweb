<?php
App::uses('AppModel', 'Model');
/**
 * AppointmentTypes Model
 *
 * @property Appointments $Appointments
 */
class AppointmentType extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Appointments' => array(
			'className' => 'Appointments',
			'foreignKey' => 'appointment_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
