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
		),
		'Tratamiento' => array(
			'className' => 'Tratamiento',
			'foreignKey' => 'paciente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasAndBelongsToMany = array(

		'Patologia' => array(
			'className' => 'Patologia',
			'joinTable' => 'antecedentes_patologicos',
			'foreignKey' => 'paciente_id',
			'associationForeignKey' => 'patologia_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);



}
