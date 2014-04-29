<?php
App::uses('AppController', 'Controller');
/**
 * Pacientes Controller
 * @property Paciente $Paciente
 */
class PacientesController extends AppController {

public $uses = array("Paciente", "Patologia", "Tratamiento");

/**
 * index method
 *
 * @return void
 */
	public function index() {

		$this->Paciente->recursive = 1;

		$results = $this->Paciente->find('all');

		//set last odontogram

		foreach ($results as $key => $result) {
			
			if(count($results[$key]["Odontogram"])>0)
			{
				$count = count($results[$key]["Odontogram"]);
				$results[$key]["lastOdontogram"] = $results[$key]["Odontogram"][$count-1]["id"];
			}


		}

		$this->set('pacientes', $this->paginate());
	}

	/**
 * edadCalcular method
 *
 * @return void
 */
	/*public function edadCalcular($dob) {
		$this->set
		$tdate=date("Y-m-d");
		$age = 0;
        while( $tdate > $dob = strtotime('+1 year', $dob)){
                ++$age;
        }
        return $age;
	}
*/

/**
 * buscarajax method
 *
 * @return void
 */
	public function buscarajax() {
		$this->layout = 'ajax';
		$this->Paciente->recursive = 1;
		
		$conditions = array("OR" => array(
      	"Paciente.nombre LIKE" => "%".$this->request->data["datasearch"]."%",
        "Paciente.apellido_paterno LIKE" => $this->request->data["datasearch"]."%",
        "Paciente.apellido_materno LIKE" => $this->request->data["datasearch"]."%")
    );


		$results = $this->Paciente->find("all", array("conditions"=>$conditions));

		foreach ($results as $key => $result) {
			
			if(count($results[$key]["Odontogram"])>0)
			{
				$count = count($results[$key]["Odontogram"]);
				$results[$key]["lastOdontogram"] = $results[$key]["Odontogram"][$count-1]["id"];
			}


		}

		

		//$this->set('pacientes',$this->paginate($conditions));
		$this->set("pacientes",  $results,$this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param int id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Paciente->exists($id)) {
			throw new NotFoundException(__('Invalid paciente'));
		}
		$options = array('conditions' => array('Paciente.' . $this->Paciente->primaryKey => $id), "fields"=>'Paciente.*');
		$paciente = $this->Paciente->find('first', $options);
		$tratamientos["Tratamiento"] = $paciente["Tratamiento"];
		unset($paciente["Tratamiento"]);
		$this->set('paciente', $paciente);

		$this->set('tratamientos', $this->paginate("Tratamiento", array("Tratamiento.paciente_id"=>$id)));
	}

/**
 * add method
 *
 * @return void
 */
	public function agregar() {

		$patologias = $this->Paciente->Patologia->find('list', array("fields"=>array("id", "descripcion")));
			$this->set(compact('patologias'));

		if ($this->request->is('post')) {
			$this->Paciente->create();

			$this->request->data["Paciente"]["nombre"] = strtoupper($this->request->data["Paciente"]["nombre"]);
			$this->request->data["Paciente"]["apellido_paterno"] = strtoupper($this->request->data["Paciente"]["apellido_paterno"]);
			$this->request->data["Paciente"]["apellido_materno"] = strtoupper($this->request->data["Paciente"]["apellido_materno"]);

			if ($this->Paciente->save($this->request->data)) {
				$this->Session->setFlash(__('The paciente has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paciente could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param int id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Paciente->exists($id)) {
			throw new NotFoundException(__('Invalid paciente'));
		}

		$patologias = $this->Paciente->Patologia->find('list', array("fields"=>array("id", "descripcion")));
			$this->set(compact('patologias'));

		$this->Paciente->create();
		$this->Paciente->id = $id;
		if ($this->request->is('post') || $this->request->is('put')) {

			$this->request->data["Paciente"]["nombre"] = strtoupper($this->request->data["Paciente"]["nombre"]);
			$this->request->data["Paciente"]["apellido_paterno"] = strtoupper($this->request->data["Paciente"]["apellido_paterno"]);
			$this->request->data["Paciente"]["apellido_materno"] = strtoupper($this->request->data["Paciente"]["apellido_materno"]);
			
			if ($this->Paciente->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The paciente has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paciente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Paciente.' . $this->Paciente->primaryKey => $id));
			$this->request->data = $this->Paciente->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param int id
 * @return void
 */
	public function delete($id = null) {
		$this->Paciente->id = $id;
		if (!$this->Paciente->exists()) {
			throw new NotFoundException(__('Invalid paciente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Paciente->delete()) {
			$this->Session->setFlash(__('The paciente has been deleted.'));
		} else {
			$this->Session->setFlash(__('The paciente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function addpatologia(){

		$this->layout = "ajax";

		if ($this->request->is('post') || $this->request->is('put')) {

			$this->Patologia->create();
			$p["Patologia"]['descripcion'] = $this->request->data["descripcion"];

			if($this->Patologia->save($p)){
				$this->set('response', $this->Patologia->id);
			}
			else{
				$this->set('response', 'error');
			}

		}


	}
}
