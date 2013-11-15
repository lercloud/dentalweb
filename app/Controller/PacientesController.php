<?php
App::uses('AppController', 'Controller');
/**
 * Pacientes Controller
 
 * @property Paciente $Paciente
 */
class PacientesController extends AppController {



/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Paciente->recursive = 0;
		$this->set('pacientes', $this->paginate());
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
		$options = array('conditions' => array('Paciente.' . $this->Paciente->primaryKey => $id));
		$this->set('paciente', $this->Paciente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function agregar() {
		if ($this->request->is('post')) {
			$this->Paciente->create();
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
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Paciente->save($this->request->data)) {
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
}
