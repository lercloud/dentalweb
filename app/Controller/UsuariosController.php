<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 
 * @property Usuarios $Paciente
 */
class UsuariosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Usuario->recursive = 0;
		$this->set('usuarios', $this->paginate());
	}


public function logout() {

		$this->Session->delete("logueado");
		$this->redirect(array("controller"=>"usuarios", "action"=>"login"));
	}


	public function login() {


		if($this->Session->read("logueado") == "ok")
		{
				$this->Session->setFlash("Ya estabas logueado");
				$this->redirect('/', array('controller' => 'pages', 'action' => 'display', 'home'));

		}

		
		if ($this->request->is('post')) {
			
			if($this->Usuario->find('first', array("conditions"=>array("user"=>$this->request->data['Usuario']['user'], "password"=>$this->request->data['Usuario']['password']))))
			{	$this->Session->setFlash("Has hecho login");
				$this->Session->write("logueado", "ok");
				$this->redirect(array("controller"=>"pacientes", "action"=>"index"));

			}
			else
				$this->Session->setFlash("Login Incorrecto");
		}


	}



/**
 * view method
 *
 * @throws NotFoundException
 * @param int id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid paciente'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
		$this->set('paciente', $this->Usuario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function agregar() {
		if ($this->request->is('post')) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
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
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid paciente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('The paciente has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paciente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Paciente.' . $this->Usuario->primaryKey => $id));
			$this->request->data = $this->Usuario->find('first', $options);
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
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid paciente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Usuario->delete()) {
			$this->Session->setFlash(__('The paciente has been deleted.'));
		} else {
			$this->Session->setFlash(__('The paciente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
