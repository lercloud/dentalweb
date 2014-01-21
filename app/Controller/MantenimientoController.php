<?php
App::uses('AppController', 'Controller');

class MantenimientoController extends AppController {

public $uses = array('Paciente', 'AntecedentesPatologico', 'Anexos','HistoriaMedica');

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

		$bakupQuery2 = '';
		$bakupQuery2 .= 'SELECT *FROM anexoss as Anexos';
		$bakupQuery2 .= ' INNER JOIN historiamedica AS HistoriaM ON Anexos.paciente_idPaciente = HistoriaM.paciente_idPaciente';
		//$bakupQuery .= ' INNER JOIN antecedentespatologicos AS Antecedente_Patologico ON Paciente.idPaciente = Antecedente_Patologico.paciente_idPaciente';

		$datos =  $this->Paciente->query($bakupQuery);
		$pacienteTmp = $datos[0];

		$datos2 = $this->Anexos->query($bakupQuery2);
		$anexoTmp = $datos2[0];


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
		$anexo=null;

		//Area anexos
		$anexo["Paciente"]["Anexos"]["tutorResponsable"] = $anexoTmp["anexoss"]["menorEdad"];
		$anexo["Paciente"]["Anexos"]["recomendado"] = $anexoTmp["anexoss"]["recomendado"];
		$anexo["Paciente"]["Anexos"]["tratamientoPasado"] = $anexoTmp["anexoss"]["tratamientoPasado"];
		$anexo["Paciente"]["Anexos"]["fechaTratamiento"] = $anexoTmp["anexoss"]["cuandoTratamiento"];
		$anexo["Paciente"]["Anexos"]["motivoVisita"] = $anexoTmp["anexoss"]["motivoVisita"];

		//Area Historia Medica
		$anexo["Paciente"]["Hisotia_Medicas"]["padecimiento"] = $anexoTmp["historiamedica"]["padecimiento"];
		$anexo["Paciente"]["Hisotia_Medicas"]["tratamientoMedico"] = $anexoTmp["historiamedica"]["tratamientoMedico"];


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
		$paciente["Paciente"]["Patologia"][] =  1;

		if($pacienteTmp["Antecedente_Patologico"]["anemia"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  2;

		if($pacienteTmp["Antecedente_Patologico"]["diabetes"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  3;

		if($pacienteTmp["Antecedente_Patologico"]["tuberculosis"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  4;

		if($pacienteTmp["Antecedente_Patologico"]["hepatitis"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  5;

		if($pacienteTmp["Antecedente_Patologico"]["epilepsia"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  6;

		if($pacienteTmp["Antecedente_Patologico"]["efisema"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  7;

		if($pacienteTmp["Antecedente_Patologico"]["respiratorios"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  8;

		if($pacienteTmp["Antecedente_Patologico"]["coagulacion"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  9;

		if($pacienteTmp["Antecedente_Patologico"]["aLtaPresion"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  10;

		if($pacienteTmp["Antecedente_Patologico"]["bajaPresion"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  11;

		if($pacienteTmp["Antecedente_Patologico"]["marcapasos"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  12;

		if($pacienteTmp["Antecedente_Patologico"]["infarto"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  13;

		if($pacienteTmp["Antecedente_Patologico"]["anginaPecho"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  14;

		if($pacienteTmp["Antecedente_Patologico"]["artritis"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  15;

		if($pacienteTmp["Antecedente_Patologico"]["fiebreReumatica"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  16;

		if($pacienteTmp["Antecedente_Patologico"]["implantes"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  17;

		if($pacienteTmp["Antecedente_Patologico"]["herpes"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  18;

		if($pacienteTmp["Antecedente_Patologico"]["leucemia"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  19;

		if($pacienteTmp["Antecedente_Patologico"]["lesionesBoca"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  20;

		if($pacienteTmp["Antecedente_Patologico"]["asma"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  21;

		if($pacienteTmp["Antecedente_Patologico"]["cancer"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  22;

		if($pacienteTmp["Antecedente_Patologico"]["radiacion"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  23;

		if($pacienteTmp["Antecedente_Patologico"]["VIH"]=="Si")
		$paciente["Paciente"]["Patologia"][] =  24;


		$this->Paciente->save($paciente);
		$this->set('pacientes', $datos);

		$this->Anexos->save($anexo);
		$this->set('anexos',$datos2);

	}


}
