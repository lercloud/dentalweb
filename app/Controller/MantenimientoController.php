<?php
App::uses('AppController', 'Controller');

class MantenimientoController extends AppController {

public $uses = array('Paciente', 'AntecedentesPatologico', 'Anexos','HistoriaMedica', 'Configuration');


function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('sendBirthdayMessage');
}

public function sendBirthdayMessage() {

App::uses('CakeEmail', 'Network/Email');

			//$Email = new CakeEmail();
			//$Email->from(array('robot@dentalarcoiris.com' => 'Dental Arcoiris'));
			//$Email->to('numcomx@gmail.com');
			//$Email->subject('Feliz Cumpleaños');
			//$Email->send('Te desceamos que pases un feliz cumpleaños de parte de Dental Arcoiris');



	$pacientes = $this->Paciente->find("all", array("conditions"=>array("Paciente.fechaNacimiento"=>date("Y-m-d") )));

	foreach ($pacientes as $paciente) {
		if(filter_var($paciente["Paciente"]["email"], FILTER_VALIDATE_EMAIL)){
			//Email is correct

			$Email = new CakeEmail();
			$Email->from(array('robot@dentalarcoiris.com' => 'Dental Arcoiris'));
			$Email->to($pacinte["Paciente"]["email"]);
			$Email->subject('Feliz Cumpleaños');
			$Email->send('Te desceamos que pases un feliz cumpleaños de parte de Dental Arcoiris');




		}
	}


}



/**
 * index method
 *
 * @return void
 */
	public function index() {
		//$this->Paciente->recursive = 0;
		//$this->set('pacientes', $this->paginate());
	}

    public function configuration(){


    	//we get the main configuration
    		$configuration = $this->Configuration->findById(1);

    		//we set main configuration if not exists
    		if(!$configuration){
    			$this->Configuration->create();
    			$this->Configuration->save(array("Configuration"=>array("id"=>1, "changeType"=>12.5)));

    			$configuration = $this->Configuration->findById(1);
    		}

    		$this->set("configuration", $configuration);
    		$this->request->data = $configuration;
    		
    }

    public function updateChageType(){



    	if(isset($this->request->data["Configuration"]["changeType"]) && $this->request->data["Configuration"]["changeType"]>0){

    		//we get the main configuration
    		$configuration = $this->Configuration->findById(1);

    		//we set main configuration if not exists
    		if(!$configuration){
    			$this->Configuration->create();
    			$this->Configuration->save(array("Configuration"=>array("id"=>1, "changeType"=>12.5)));

    			$configuration = $this->Configuration->findById(1);
    		}

    		//we save new configuration
    		$this->Configuration->id = 1;
    		if($this->Configuration->save(array("Configuration"=>array("id"=>1, "changeType"=>$this->request->data["Configuration"]["changeType"])))){

    			$this->Session->setFlash(__('Change Saved'));
    			return $this->redirect(array('action' => 'configuration'));

    		}else{
    			$this->Session->setFlash(__('Unable to update change type.'));
    			return $this->redirect(array('action' => 'configuration'));
    		}


    	}else{
    		throw new Exception("Error Processing Request", 1);
    		
    	}

    }


	public function migracion(){


		//$this->Paciente-setSchema("test");

		$bakupQuery = '';
		$bakupQuery .= 'SELECT * FROM paciente as Paciente';
		//$bakupQuery .= ' INNER JOIN antecedentespatologicos AS Antecedente_Patologico ON Paciente.idPaciente = Antecedente_Patologico.paciente_idPaciente';
		//$bakupQuery .= ' INNER JOIN anexoss AS Anexos ON Paciente.idPaciente = Anexos.paciente_idPaciente';

		$datos =  $this->Paciente->query($bakupQuery);
		//$datos3 =  $this->Anexos->query($bakupQuery);
		//$pacienteTmp = $datos;
		//$pacienteTmp2 = $datos3[0];


		//$bakupQuery2 = '';
		////$bakupQuery2 .= 'SELECT * FROM historiamedica as HistoriaM WHERE HistoriaM.paciente_idPaciente = '.$pacienteTmp["Paciente"]["idPaciente"];
		//$bakupQuery2 .= ' INNER JOIN historiamedica AS HistoriaM ON Anexos.paciente_idPaciente = HistoriaM.paciente_idPaciente';
		//$bakupQuery .= ' INNER JOIN antecedentespatologicos AS Antecedente_Patologico ON Paciente.idPaciente = Antecedente_Patologico.paciente_idPaciente';

		

		//$datos2 = $this->Paciente->query($bakupQuery2);
		//$historiaTmp = $datos2[0];

foreach($datos as $pacienteTmp){
		//	if (isset($nombres[0])) {
				# code...
		//	}

		$this->Paciente->create();
		$paciente= null;

		//Area Paciente
		$nombres = explode(" ", $pacienteTmp['Paciente']['nombrePaciente']);

		
		if (isset($nombres[0]))
		$paciente["Paciente"]["nombre"] = $nombres[0];

		if (isset($nombres[1]))
		$paciente["Paciente"]["apellido_paterno"] = $nombres[1];

		if (isset($nombres[2]))
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
		//$paciente["Paciente"]["fechaNacimiento"] = $pacienteTmp['Paciente'][''];

	

		$this->Paciente->save($paciente);
		//$this->Paciente->id = ultimoIdGenerado;
		//$this->set('pacientes', $datos);
		}
		
		
		
		$this->set('pacientes', $datos);

 }

 }
		/*$paciente= null;
		$anexo=null;
		$patologico=null;

		//Area anexos
		$Paciente["Anexos"]["tutorResponsable"] = $pacienteTmp['Anexos']['menorEdad'];
		$Paciente["Anexos"]["recomendado"] = $pacienteTmp['Anexos']['recomendado'];
		$Paciente["Anexos"]["tratamientoPasado"] = $pacienteTmp['Anexos']['tratamientoPasado'];
		$Paciente["Anexos"]["fechaTratamiento"] = $pacienteTmp['Anexos']['cuandoTratamiento'];
		$Paciente["Anexos"]["motivoVisita"] =$pacienteTmp['Anexos']['motivoVisita'];
		//$id=$paciente["Paciente"]["id"];
		//$anexo["Anexos"]["paciente_id"] =$id;

		//Area Historia Medica
		//$anexo["HistoriaMedica"]["padecimiento"] = $historiaTmp["HistoriaM"]["padecimiento"];
		//$anexo["HistoriaMedica"]["tratamientoMedico"] = $historiaTmp["HistoriaM"]["tratamientoMedico"];


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
		$paciente["Paciente"]["fechaNacimiento"] = $pacienteTmp['Paciente'][''];

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

		if($pacienteTmp["Antecedente_Patologico"]["altaPresion"]=="Si")
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
		$paciente["Paciente"]["Patologia"][] =  24;*/


		//$this->Paciente->save($paciente);
		//$this->set('pacientes', $datos);
		//$this->Anexos->save($paciente);
		//$this->set('anexos', $datos);
		//$this->AntecedentesPatologico->save($paciente);
		//$this->set('antecedentes_patologicos', $datos);

		/*$this->Anexos->save($paciente);
		$this->set('anexos', $datos3);


		$this->Anexos->save($anexo);
		$this->set('anexos',$datos2);*/
	


