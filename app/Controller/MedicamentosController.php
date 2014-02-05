<?php
App::uses('AppController', 'Controller');
/**
 * Pacientes Controller
 * @property Paciente $Paciente
 */
class MedicamentosController extends AppController {

public $uses = array("Paciente", "Patologia", "Tratamiento", "Receta", "Medicamento");

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Medicamento->recursive = 0;
		//;
		$this->set('medicamentos', $this->Medicamento->find('all'),$this->paginate());
	}

/**
 * buscarajax method
 *
 * @return void
 */
	public function buscarajax() {
		$this->layout = 'ajax';
		$this->Medicamento->recursive = 0;
		
		$conditions = array("OR" => array(
      	"Paciente.nombre LIKE" => $this->request->data["datasearch"]."%",
        "Paciente.apellido_paterno LIKE" => $this->request->data["datasearch"]."%",
        "Paciente.apellido_materno LIKE" => $this->request->data["datasearch"]."%")
    );

		$this->set('pacientes',$this->paginate($conditions));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param int id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Medicamento->exists($id)) {
			throw new NotFoundException(__('Invalid paciente'));
		}
		$options = array('conditions' => array('Medicamento.' . $this->Medicamento->primaryKey => $id), "fields"=>'Medicamento.*');
		$medicamento = $this->Medicamento->find('first', $options);
		

		$this->set("medicamento",$medicamento);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		

		if ($this->request->is('post')) {
			$this->Medicamento->create();
			if ($this->Medicamento->save($this->request->data)) {
				$this->Session->setFlash(__('Se ha guardado medicamento'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Error al agregar medicamento'));
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
		if (!$this->Medicamento->exists($id)) {
			throw new NotFoundException(__('Invalid paciente'));
		}

		

		$this->Medicamento->create();
		$this->Medicamento->id = $id;
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Medicamento->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The paciente has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paciente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Medicamento.' . $this->Medicamento->primaryKey => $id));
			$this->request->data = $this->Medicamento->find('first', $options);
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
		$this->Medicamento->id = $id;
		if (!$this->Medicamento->exists()) {
			throw new NotFoundException(__('Invalid paciente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Medicamento->delete()) {
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
