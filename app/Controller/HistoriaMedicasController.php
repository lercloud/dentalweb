<?php
App::uses('AppController', 'Controller');
/**
 * HistoriaMedicas Controller

 * @property HistoriaMedica $HistoriaMedica
 */
class HistoriaMedicasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->HistoriaMedica->recursive = 0;
		$this->set('historiaMedicas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param int id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HistoriaMedica->exists($id)) {
			throw new NotFoundException(__('Invalid historia medica'));
		}
		$options = array('conditions' => array('HistoriaMedica.' . $this->HistoriaMedica->primaryKey => $id));
		$this->set('historiaMedica', $this->HistoriaMedica->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HistoriaMedica->create();
			if ($this->HistoriaMedica->save($this->request->data)) {
				$this->Session->setFlash(__('The historia medica has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The historia medica could not be saved. Please, try again.'));
			}
		}
		$pacientes = $this->HistoriaMedica->Paciente->find('list');
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
		if (!$this->HistoriaMedica->exists($id)) {
			throw new NotFoundException(__('Invalid historia medica'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HistoriaMedica->save($this->request->data)) {
				$this->Session->setFlash(__('The historia medica has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The historia medica could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HistoriaMedica.' . $this->HistoriaMedica->primaryKey => $id));
			$this->request->data = $this->HistoriaMedica->find('first', $options);
		}
		$pacientes = $this->HistoriaMedica->Paciente->find('list');
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
		$this->HistoriaMedica->id = $id;
		if (!$this->HistoriaMedica->exists()) {
			throw new NotFoundException(__('Invalid historia medica'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HistoriaMedica->delete()) {
			$this->Session->setFlash(__('The historia medica has been deleted.'));
		} else {
			$this->Session->setFlash(__('The historia medica could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
