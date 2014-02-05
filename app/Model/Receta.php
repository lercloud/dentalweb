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
class Receta extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	

	public $hasAndBelongsToMany = array(

		'Medicamento' => array(
			'className' => 'Medicamento',
			'joinTable' => 'medicamento_receta',
			'foreignKey' => 'receta_id',
			'associationForeignKey' => 'medicamento_id',
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


	public $belongsTo = array(
		'Paciente' => array(
			'className' => 'Paciente',
			'foreignKey' => 'paciente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tratamiento' => array(
			'className' => 'Tratamiento',
			'foreignKey' => 'tratamiento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);



}
