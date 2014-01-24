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
}
