<?php
App::uses('AppController', 'Controller');
/**
 * Anexos Controller

 * @property Anexo $Anexo
 */
class AnexosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Anexo->recursive = 0;
		$this->set('anexos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param int id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Anexo->exists($id)) {
			throw new NotFoundException(__('Invalid anexo'));
		}
		$options = array('conditions' => array('Anexo.' . $this->Anexo->primaryKey => $id));
		$this->set('anexo', $this->Anexo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Anexo->create();
			if ($this->Anexo->save($this->request->data)) {
				$this->Session->setFlash(__('The anexo has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The anexo could not be saved. Please, try again.'));
			}
		}
		$pacientes = $this->Anexo->Paciente->find('list');
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
		if (!$this->Anexo->exists($id)) {
			throw new NotFoundException(__('Invalid anexo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Anexo->save($this->request->data)) {
				$this->Session->setFlash(__('The anexo has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The anexo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Anexo.' . $this->Anexo->primaryKey => $id));
			$this->request->data = $this->Anexo->find('first', $options);
		}
		$pacientes = $this->Anexo->Paciente->find('list');
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
		$this->Anexo->id = $id;
		if (!$this->Anexo->exists()) {
			throw new NotFoundException(__('Invalid anexo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Anexo->delete()) {
			$this->Session->setFlash(__('The anexo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The anexo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
