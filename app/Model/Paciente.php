<?php
App::uses('AppModel', 'Model');
/**
 * Paciente Model
 *
 * @property Anexo $Anexo
 * @property AntecedentesPatologico $AntecedentesPatologico
 * @property EstadoCuentum $EstadoCuentum
 * @property HistoriaMedica $HistoriaMedica
 */
class Paciente extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Anexo' => array(
			'className' => 'Anexo',
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
		'AntecedentesPatologico' => array(
			'className' => 'AntecedentesPatologico',
			'foreignKey' => 'paciente_id',
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
		'EstadoCuentum' => array(
			'className' => 'EstadoCuentum',
			'foreignKey' => 'paciente_id',
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
		'HistoriaMedica' => array(
			'className' => 'HistoriaMedica',
			'foreignKey' => 'paciente_id',
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
