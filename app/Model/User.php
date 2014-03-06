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
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {

	public $virtualFields = array(
"fullName" => "CONCAT(User.nombre,' ',User.apellidoPaterno,' ',User.apellidoMaterno)"
);

	public $belongsTo = array('Group',

			'Branch' => array(
			'className' => 'Branch',
			'foreignKey' => 'branch_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		));


	public $hasMany = array(
		'Abono' => array(
			'className' => 'Abono'
		));

    public function beforeSave($options = array()) {
        $this->data['User']['password'] = AuthComponent::password(
          $this->data['User']['password']
        );
        return true;
    }



}
