<?php
App::uses('AppController', 'Controller');
/**
 * AppointmentTypes Controller
 * Generated by Petit Four the online baking tool for CakePHP: http://patisserie.keensoftware.com
 * @property AppointmentTypes $AppointmentTypes
 */
class AppointmentTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AppointmentType->recursive = 0;
		$this->set('appointmentTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param int id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AppointmentType->exists($id)) {
			throw new NotFoundException(__('Invalid appointment type'));
		}
		$options = array('conditions' => array('AppointmentType.' . $this->AppointmentType->primaryKey => $id));
		$this->set('appointmentType', $this->AppointmentType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AppointmentType->create();
			if ($this->AppointmentType->save($this->request->data)) {
				$this->Session->setFlash(__('The appointment type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The appointment type could not be saved. Please, try again.'));
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
		if (!$this->AppointmentType->exists($id)) {
			throw new NotFoundException(__('Invalid appointment type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AppointmentType->save($this->request->data)) {
				$this->Session->setFlash(__('The appointment type has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The appointment type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AppointmentType.' . $this->AppointmentType->primaryKey => $id));
			$this->request->data = $this->AppointmentType->find('first', $options);
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
		$this->AppointmentType->id = $id;
		if (!$this->AppointmentType->exists()) {
			throw new NotFoundException(__('Invalid appointment type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AppointmentType->delete()) {
			$this->Session->setFlash(__('The appointment type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The appointment type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
