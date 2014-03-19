<?php
App::uses('AppModel', 'Model');
/**
 * Orderpayment Model
 *
 * @property Laborder $Laborder
 */
class Orderpayment extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Laborder' => array(
			'className' => 'Laborder',
			'foreignKey' => 'laborder_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
