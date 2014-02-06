<?php
App::uses('AppModel', 'Model');
/**
 * Abono Model
 *
 * @property Tratamiento $Tratamiento
 */
class Abono extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tratamiento' => array(
			'className' => 'Tratamiento',
			'foreignKey' => 'tratamiento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)/*,
		'Sucursal' => array(
			'className' => 'Sucursal',
			'foreignKey' => 'sucursal_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)*/,
		'Doctor' => array(
			'className' => 'Doctor',
			'foreignKey' => 'doctor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
