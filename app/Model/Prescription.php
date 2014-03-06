<?php
App::uses('AppModel', 'Model');
/**
 * Prescription Model
 *
 * @property Medicament $Medicament
 */
class Prescription extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Medicament' => array(
			'className' => 'Medicament',
			'joinTable' => 'medicaments_prescriptions',
			'foreignKey' => 'prescription_id',
			'associationForeignKey' => 'medicament_id',
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

	public $belongsTo = array('Paciente');

}
