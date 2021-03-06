<?php

/* vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2: */

class AclPermissionsController extends AclAppController {
  public $name = 'AclPermissions';

  public $uses = array('Acl.AclAroAco', 'Acl.AclAro', 'Acl.AclAco');

  public $helpers = array('Html');

  public $components = array('RequestHandler');

  public function exists() {
		$conditions = array(
			'aro_id' => $this->request->data['AclAroAco']['aro_id'],
			'aco_id' => $this->request->data['AclAroAco']['aco_id']
		);
		if ($this->AclAroAco->find('count',array('conditions'=>$conditions)) > 0) {
			return true;
		} else {
			return false;
		}
	}

  public function create() {
		if ($this->exists($this->request->data)) {
			$this->failure();
		}
		$this->AclAroAco->set($this->request->data);
		$this->AclAroAco->set(array(
			'_create' => 1,
			'_read' => 1,
			'_update' => 1,
			'_delete' => 1
		));
		if (!$this->AclAroAco->save()) {
			$this->failure();
		}
		exit;
	}

  public function aros($id = null) {
		Configure::write('debug', 0);
		if (!$id) {
			$this->failure();
		}
		$this->layout = '';

		$nodes = $this->AclAroAco->find(
			'all',
			array(
				'conditions' => array(
					'AclAroAco.aro_id' => $id
				),
				'contain' => false
			)
		);

		$aro = $this->AclAro->getStringPath($id);
		$this->set('aro', $aro);

		$reordered = array();
		foreach ($nodes as &$n) {
			$reordered[$this->AclAco->getStringPath($n['AclAroAco']['aco_id'])] = $n;
		}
		ksort($reordered);
		$this->set('nodes', $reordered);
	}

  public function acos($id = null) {
		Configure::write('debug', 0);
		if (!$id) {
			$this->failure();
		}
		$this->layout = '';
		$nodes = $this->AclAroAco->getAllowedAro($id);

		$aco = $this->AclAco->getStringPath($id);
		$this->set('aco', $aco);

		$reordered = array();
		foreach ($nodes as &$n) {
			$reordered[$this->AclAro->getStringPath($n['AclAro']['id'])] = $n;
		}
		ksort($reordered);
		$this->set('nodes', $reordered);
	}

  public function revoke($id) {
		if ($this->AclAroAco->delete($id)) {
      $this->success();
    } else {
      $this->failure();
    }
		exit;
	}

  public function crud() {
		if (isset($this->request->data)) {
			foreach($this->request->data['AclAroAco'] as &$item){
				if($item == 0){
					$item = -1;
				}
			}
			if ($this->AclAroAco->save($this->request->data)) {
				$this->success();
        return;
			}
		}
		$this->failure();
	}
}

?>
