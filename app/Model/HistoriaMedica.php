<?php
App::uses('AppModel', 'Model');
/**
 * HistoriaMedica Model
 *
 * @property Paciente $Paciente
 */
class HistoriaMedica extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Paciente' => array(
			'className' => 'Paciente',
			'foreignKey' => 'paciente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
