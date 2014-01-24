<?php
App::uses('AppController', 'Controller');
/**
 * AntecedentesPatologicos Controller

 * @property AntecedentesPatologico $AntecedentesPatologico
 */
class AntecedentesPatologicosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AntecedentesPatologico->recursive = 0;
		$this->set('antecedentesPatologicos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param int id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AntecedentesPatologico->exists($id)) {
			throw new NotFoundException(__('Invalid antecedentes patologico'));
		}
		$options = array('conditions' => array('AntecedentesPatologico.' . $this->AntecedentesPatologico->primaryKey => $id));
		$this->set('antecedentesPatologico', $this->AntecedentesPatologico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AntecedentesPatologico->create();
			if ($this->AntecedentesPatologico->save($this->request->data)) {
				$this->Session->setFlash(__('The antecedentes patologico has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The antecedentes patologico could not be saved. Please, try again.'));
			}
		}
		$pacientes = $this->AntecedentesPatologico->Paciente->find('list');
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
		if (!$this->AntecedentesPatologico->exists($id)) {
			throw new NotFoundException(__('Invalid antecedentes patologico'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AntecedentesPatologico->save($this->request->data)) {
				$this->Session->setFlash(__('The antecedentes patologico has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The antecedentes patologico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AntecedentesPatologico.' . $this->AntecedentesPatologico->primaryKey => $id));
			$this->request->data = $this->AntecedentesPatologico->find('first', $options);
		}
		$pacientes = $this->AntecedentesPatologico->Paciente->find('list');
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
		$this->AntecedentesPatologico->id = $id;
		if (!$this->AntecedentesPatologico->exists()) {
			throw new NotFoundException(__('Invalid antecedentes patologico'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AntecedentesPatologico->delete()) {
			$this->Session->setFlash(__('The antecedentes patologico has been deleted.'));
		} else {
			$this->Session->setFlash(__('The antecedentes patologico could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
