<?php
App::uses('AppController', 'Controller');

class MantenimientoController extends AppController {

public $uses = array('Paciente');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		//$this->Paciente->recursive = 0;
		//$this->set('pacientes', $this->paginate());
	}


	public function migracion(){


		$bakupQuery = '';
		$bakupQuery .= 'SELECT * FROM paciente as Paciente';
		$bakupQuery .= ' INNER JOIN antecedentespatologicos AS Antecedente_Patologico ON Paciente.idPaciente = Antecedente_Patologico.paciente_idPaciente';

		$datos =  $this->Paciente->query($bakupQuery);

		$this->set('pacientes', $datos);

	}


}
