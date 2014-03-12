<?php
App::uses('AppController', 'Controller');
/**
 * Prescriptions Controller
 * Generated by Petit Four the online baking tool for CakePHP: http://patisserie.keensoftware.com
 * @property Prescription $Prescription
 */
class PrescriptionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Prescription->recursive = 0;
		$this->set('prescriptions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param int id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Prescription->exists($id)) {
			throw new NotFoundException(__('Invalid prescription'));
		}
		$options = array('conditions' => array('Prescription.' . $this->Prescription->primaryKey => $id));
		$this->set('prescription', $this->Prescription->find('first', $options));
	}


	public function toprint($id = null) {
		if (!$this->Prescription->exists($id)) {
			throw new NotFoundException(__('Invalid prescription'));
		}
		$options = array('conditions' => array('Prescription.' . $this->Prescription->primaryKey => $id));
		$this->set('prescription', $this->Prescription->find('first', $options));
	}



/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Prescription->create();
			if ($this->Prescription->save($this->request->data)) {
				$this->Session->setFlash(__('The prescription has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prescription could not be saved. Please, try again.'));
			}
		}
		$medicaments = $this->Prescription->Medicament->find('list');
		$this->set(compact('medicaments'));

			
		$pacientes = $this->Prescription->Paciente->find('list', array("fields"=>array("Paciente.id", "Paciente.fullName")));
		$this->set(compact('pacientes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param int id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Prescription->exists($id)) {
			throw new NotFoundException(__('Invalid prescription'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Prescription->save($this->request->data)) {
				$this->Session->setFlash(__('The prescription has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The prescription could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Prescription.' . $this->Prescription->primaryKey => $id));
			$this->request->data = $this->Prescription->find('first', $options);
		}
		$medicaments = $this->Prescription->Medicament->find('list');
		$this->set(compact('medicaments'));

		$pacientes = $this->Prescription->Paciente->find('list', array("fields"=>array("Paciente.id", "Paciente.fullName")));
		$this->set(compact('pacientes'));
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
		$this->Prescription->id = $id;
		if (!$this->Prescription->exists()) {
			throw new NotFoundException(__('Invalid prescription'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Prescription->delete()) {
			$this->Session->setFlash(__('The prescription has been deleted.'));
		} else {
			$this->Session->setFlash(__('The prescription could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
