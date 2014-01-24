<?php
App::uses('AppController', 'Controller');
/**
 * EstadoCuenta Controller

 * @property EstadoCuentum $EstadoCuentum
 */
class EstadoCuentaController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EstadoCuentum->recursive = 0;
		$this->set('estadoCuenta', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param int id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EstadoCuentum->exists($id)) {
			throw new NotFoundException(__('Invalid estado cuentum'));
		}
		$options = array('conditions' => array('EstadoCuentum.' . $this->EstadoCuentum->primaryKey => $id));
		$this->set('estadoCuentum', $this->EstadoCuentum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EstadoCuentum->create();
			if ($this->EstadoCuentum->save($this->request->data)) {
				$this->Session->setFlash(__('The estado cuentum has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estado cuentum could not be saved. Please, try again.'));
			}
		}
		$pacientes = $this->EstadoCuentum->Paciente->find('list');
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
		if (!$this->EstadoCuentum->exists($id)) {
			throw new NotFoundException(__('Invalid estado cuentum'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EstadoCuentum->save($this->request->data)) {
				$this->Session->setFlash(__('The estado cuentum has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estado cuentum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EstadoCuentum.' . $this->EstadoCuentum->primaryKey => $id));
			$this->request->data = $this->EstadoCuentum->find('first', $options);
		}
		$pacientes = $this->EstadoCuentum->Paciente->find('list');
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
		$this->EstadoCuentum->id = $id;
		if (!$this->EstadoCuentum->exists()) {
			throw new NotFoundException(__('Invalid estado cuentum'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EstadoCuentum->delete()) {
			$this->Session->setFlash(__('The estado cuentum has been deleted.'));
		} else {
			$this->Session->setFlash(__('The estado cuentum could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
