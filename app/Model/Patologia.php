<?php
App::uses('AppModel', 'Model');
/**
 * Band Model
 *
 * @property User $User
 */
class Patologia extends AppModel {


	public $useTable = 'patologias';
	
/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Paciente' => array(
			'className' => 'Paciente',
			'joinTable' => 'antecedentes_patologicos',
			'foreignKey' => 'patologia_id',
			'associationForeignKey' => 'paciente_id',
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
