<?php
App::uses('AppController', 'Controller');

class MantenimientoController extends AppController {

public $uses = array('Paciente', 'AntecedentesPatologico');

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
		//$bakupQuery .= ' INNER JOIN antecedentespatologicos AS Antecedente_Patologico ON Paciente.idPaciente = Antecedente_Patologico.paciente_idPaciente';

		$datos =  $this->Paciente->query($bakupQuery);

		//$pacienteTmp = $datos[0];


		/*
		foreach($datos as $pacienteTmp){


		$paciente= null;

		$nombres = explode(" ", $pacienteTmp['Paciente']['nombrePaciente']);

		$paciente["Paciente"]["nombre"] = $nombres[0];
		$paciente["Paciente"]["apellido_paterno"] = $nombres[1];
		$paciente["Paciente"]["apellido_materno"] = $nombres[2];
		$paciente["Paciente"]["fechaAlta"] =  $pacienteTmp['Paciente']['fechaAlta'];


		$this->Paciente->save($paciente);

		}
		*/


		$paciente= null;


		//Area Paciente
		$nombres = explode(" ", $pacienteTmp['Paciente']['nombrePaciente']);

		$paciente["Paciente"]["nombre"] = $nombres[0];
		$paciente["Paciente"]["apellido_paterno"] = $nombres[1];
		$paciente["Paciente"]["apellido_materno"] = $nombres[2];

		$paciente["Paciente"]["fechaAlta"] =  $pacienteTmp['Paciente']['fechaAlta'];
		$paciente["Paciente"]["edad"] = $pacienteTmp['Paciente']['edad'];
		$paciente["Paciente"]["sexo"] = $pacienteTmp['Paciente']['sexo'];
		$paciente["Paciente"]["ocupacion"] = $pacienteTmp['Paciente']['ocupacion'];
		$paciente["Paciente"]["direccion"] = $pacienteTmp['Paciente']['direccion'];
		$paciente["Paciente"]["telefono"] = $pacienteTmp['Paciente']['telefono'];
		$paciente["Paciente"]["celular"] = $pacienteTmp['Paciente']['celular'];
		$paciente["Paciente"]["nextel"] = $pacienteTmp['Paciente']['nextel'];
		$paciente["Paciente"]["email"] = $pacienteTmp['Paciente']['email'];
		$paciente["Paciente"]["fechaNacimiento"] = $pacienteTmp['Paciente']['fechaNacimiento'];

		//Area Patologia

		if($pacienteTmp["Antecedente_Patologico"]["maloclusion"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  1;

		if($pacienteTmp["Antecedente_Patologico"]["anemia"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  2;

		if($pacienteTmp["Antecedente_Patologico"]["diabetes"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  3;

		if($pacienteTmp["Antecedente_Patologico"]["tuberculosis"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  4;

		if($pacienteTmp["Antecedente_Patologico"]["hepatitis"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  5;

		if($pacienteTmp["Antecedente_Patologico"]["epilepsia"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  6;

		if($pacienteTmp["Antecedente_Patologico"]["efisema"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  7;

		if($pacienteTmp["Antecedente_Patologico"]["respiratorios"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  8;

		if($pacienteTmp["Antecedente_Patologico"]["coagulacion"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  9;

		if($pacienteTmp["Antecedente_Patologico"]["aLtaPresion"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  10;

		if($pacienteTmp["Antecedente_Patologico"]["bajaPresion"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  11;

		if($pacienteTmp["Antecedente_Patologico"]["marcapasos"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  12;

		if($pacienteTmp["Antecedente_Patologico"]["infarto"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  13;

		if($pacienteTmp["Antecedente_Patologico"]["anginaPecho"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  14;

		if($pacienteTmp["Antecedente_Patologico"]["artritis"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  15;

		if($pacienteTmp["Antecedente_Patologico"]["fiebreReumatica"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  16;

		if($pacienteTmp["Antecedente_Patologico"]["implantes"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  17;

		if($pacienteTmp["Antecedente_Patologico"]["herpes"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  18;

		if($pacienteTmp["Antecedente_Patologico"]["leucemia"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  19;

		if($pacienteTmp["Antecedente_Patologico"]["lesionesBoca"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  20;

		if($pacienteTmp["Antecedente_Patologico"]["asma"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  21;

		if($pacienteTmp["Antecedente_Patologico"]["cancer"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  22;

		if($pacienteTmp["Antecedente_Patologico"]["radiacion"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  23;

		if($pacienteTmp["Antecedente_Patologico"]["VIH"]=="Si")
		$paciente["Patologia"]["Patologia"][] =  24;


		$this->Paciente->save($paciente);




		$this->set('pacientes', $datos);

	}


}
