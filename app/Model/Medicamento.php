<?php
App::uses('AppModel', 'Model');
/**
 * Band Model
 *
 * @property User $User
 */
class Medicamento extends AppModel {


	
/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Receta' => array(
			'className' => 'Receta',
			'joinTable' => 'medicamento_receta',
			'foreignKey' => 'medicamento_id',
			'associationForeignKey' => 'receta_id',
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
