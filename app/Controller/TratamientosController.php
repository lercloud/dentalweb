<?php
App::uses('AppController', 'Controller');
/**
 * Tratamientos Controller
 * Generated by Petit Four the online baking tool for CakePHP: http://patisserie.keensoftware.com
 * @property Tratamiento $Tratamiento
 */
class TratamientosController extends AppController {

public $uses = array("Paciente", "Patologia", "Tratamiento", "Abono", "Usuario");

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tratamiento->recursive = 1;
		$this->Paciente->recursive = 2;

		$this->set('pacientes', $this->Paciente->find('all'),$this->paginate());
	}



	public function cortedia(){

			$this->Abono->recursive = 2;
		$abonos = $this->Abono->find("all",array("conditions"=>array("Abono.fechaTransaccion"=>date("Y-m-d"), "Abono.branch_id"=>$this->Session->read("Auth.User.branch_id")))); //, "Usuario.id"=>$this->Session->read("sucursal")    //   , "Abono.sucursal_id"=>$this->Session->read("sucursal")
		//$abonos = $this->Abono->find("all",array("conditions"=>array("Abono.fechaTransaccion"=>date("Y-m-d"))));
		$this->set("abonos",$abonos);
	}

/**
 * buscarajax method
 *
 * @return void
 */
	public function buscarajax() {
		$this->layout = 'ajax';
		$this->Paciente->recursive = 2;
		
		$conditions = array("OR" => array(
      	"Paciente.nombre LIKE" => $this->request->data["datasearch"]."%",
        "Paciente.apellido_paterno LIKE" => $this->request->data["datasearch"]."%",
        "Paciente.apellido_materno LIKE" => $this->request->data["datasearch"]."%")
    );

		$this->set('pacientes',$this->paginate($conditions));
	}


/**
 * pacientesadeudo method
 *
 * @return void
 */
	public function pacientesadeudo() {
		$this->Tratamiento->recursive = 0;

		$this->set('tratamientos', $this->paginate('Paciente', array( 'Tratamiento.liquidado'=>0)));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param int id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tratamiento->exists($id)) {
			throw new NotFoundException(__('Invalid tratamiento'));
		}
		$options = array('conditions' => array('Tratamiento.' . $this->Tratamiento->primaryKey => $id));
		$this->Tratamiento->recursive = 2;
		$this->set('tratamiento', $this->Tratamiento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($pacienteid = null) {

		if (!$this->Paciente->exists($pacienteid)) {
			throw new NotFoundException(__('Paciente no reconocido'));
		}


		if ($this->request->is('post')) {

		

			$this->Tratamiento->create();
			$this->request->data['Paciente']['id'] = $pacienteid;

			if ($this->Tratamiento->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The tratamiento has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tratamiento could not be saved. Please, try again.'));
			}

		}

		$this->Paciente->recursive = 0;
		$this->set("paciente",$this->Paciente->find('first', array('conditions'=>array("Paciente.id"=>$pacienteid))));

		//Busqueda y set de doctores
		$doctors = $this->Tratamiento->Doctor->find('list', array("fields"=>array("id","nombre")));
		$this->set(compact('doctors'));
		//$this->set("variable", 5);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param int id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tratamiento->exists($id)) {
			throw new NotFoundException(__('Invalid tratamiento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tratamiento->save($this->request->data)) {
				$this->Session->setFlash(__('The tratamiento has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tratamiento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tratamiento.' . $this->Tratamiento->primaryKey => $id));
			$this->request->data = $this->Tratamiento->find('first', $options);
		}
		$doctors = $this->Tratamiento->Doctor->find('list');
		$this->set(compact('doctors'));
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
		$this->Tratamiento->id = $id;
		if (!$this->Tratamiento->exists()) {
			throw new NotFoundException(__('Invalid tratamiento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tratamiento->delete()) {
			$this->Session->setFlash(__('The tratamiento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tratamiento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
