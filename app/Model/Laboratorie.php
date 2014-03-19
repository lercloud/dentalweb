<?php
App::uses('AppModel', 'Model');
/**
 * Laboratorie Model
 *
 * @property Laborder $Laborder
 */
class Laboratorie extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Laborder' => array(
			'className' => 'Laborder',
			'foreignKey' => 'laboratorie_id',
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
