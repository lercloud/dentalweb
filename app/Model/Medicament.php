<?php
App::uses('AppModel', 'Model');
/**
 * Medicament Model
 *
 * @property Prescription $Prescription
 */
class Medicament extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Prescription' => array(
			'className' => 'Prescription',
			'joinTable' => 'medicaments_prescriptions',
			'foreignKey' => 'medicament_id',
			'associationForeignKey' => 'prescription_id',
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
