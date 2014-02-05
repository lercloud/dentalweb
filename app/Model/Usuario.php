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
class Usuario extends AppModel {

public $hasMany = array(
		'Abono' => array(
			'className' => 'Abono',
			'foreignKey' => 'sucursal_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


}
