<?php
App::uses('AppModel', 'Model');
/**
 * Tratamiento Model
 *
 * @property Doctor $Doctor
 * @property Abono $Abono
 */
class Tratamiento extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Doctor' => array(
			'className' => 'Doctor',
			'foreignKey' => 'doctor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Paciente' => array(
			'className' => 'Paciente',
			'foreignKey' => 'paciente_id',
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
		'Abono' => array(
			'className' => 'Abono',
			'foreignKey' => 'tratamiento_id',
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
