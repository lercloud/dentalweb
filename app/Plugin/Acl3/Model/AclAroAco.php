<?php

/* vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2: */

class AclAroAco extends AclAppModel {
  public $useTable = 'aros_acos';

	public $belongsTo = array(
		'AclAro' => array(
			'className' => 'Acl.AclAro',
			'foreignKey' => 'aro_id',
		),
		'AclAco' => array(
			'className' => 'Acl.AclAco',
			'foreignKey' => 'aco_id',
		),
	);
/**
 * Get all allowed AROS for an aco
 *
 * @param string $acoId
 * @access public
 * @return array
 */
	public function getAllowedAro($acoId) {
		$acoNode = $this->AclAco->find(
			'first',
			array(
				'conditions' => array(
					'AclAco.id' =>  $acoId
				)
			)
		);

		$nodes = array();
		$nodes[] = $acoNode;

		$top = false;
		while ($top == false) {
			$currentNode = $nodes[0];
			$parentNode = $this->AclAco->find(
				'first',
				array(
					'conditions' => array(
						'AclAco.id' => $currentNode['AclAco']['parent_id']
					),
					'contain' => false
				)
			);
			array_unshift($nodes, $parentNode);
			if (empty($parentNode['AclAco']['parent_id'])) {
				$top = true;
			}
		}
		$allowed = array();
		foreach ($nodes as &$node) {
			$conditions = array(
				'AclAroAco.aco_id' => $node['AclAco']['id']
			);
			$contain = array('AclAro');
			$permissions = $this->find('all', compact('conditions','contain'));
			foreach ($permissions as &$perms) {
				if ($this->_checkPermKeys($perms['AclAroAco'])) {
					$allowed[] = array(
						'AclAro' => $perms['AclAro'],
						'AclAroAco' => $perms['AclAroAco'],
					);
				}
			}
		}
		return $allowed;
	}

/**
 * Get a list of ACO's that are granted to the aro
 *
 * @param int $aroId The id of the ARO you want.
 */
	public function getAllowedAco($aroId) {
		$aroNode = $this->AclAro->find(
			'first',
			array(
				'conditions' => array(
					'AclAro.id' => $aroId
				)
			)
		);
		$nodes = array();
		$nodes[] = $aroNode;

		$top = false;
		while ($top == false) {
			$currentNode = $nodes[0];
			$parentNode = $this->AclAro->find(
				'first',
				array(
					'conditions' => array(
						'AclAro.id' => $currentNode['AclAro']['parent_id']
					),
					'contain' => false
				)	
			);
			array_unshift($nodes, $parentNode);
			if (empty($parentNode['AclAro']['parent_id'])) {
				$top = true;
			}
		}
		$allowed = array();
		foreach ($nodes as &$node) {
			$conditions = array(
				'AclAroAco.aro_id' => $node['AclAro']['id']
			);
			$contain = array('AclAco');
			$permissions = $this->find('all', compact('conditions','contain'));
			foreach ($permissions as &$perms) {
				if ($this->_checkPermKeys($perms['AclAroAco'])) {
					$allowed[] = array(
						'AclAco' => $perms['AclAco'],
						'AclAroAco' => $perms['AclAroAco'],
					);
				}
			}
		}
		return $allowed;
	}

/**
 * checkPermKeys
 *
 * Check the permissions keys
 *
 * @param string $permissionSet
 * @param string $keys
 * @access public
 * @return void
 */
	protected function _checkPermKeys($permissionSet, $keys = 'all') {
		if (is_string($keys)) {
			$keys = (array) $keys;
		}
		if ($keys == array('all')) {
			$keys = array('create', 'update', 'delete', 'read');
		}
		$allowed = true;
		foreach ($keys as $key) {
			$keyName = '_' . $key;
			if (isset($permissionSet[$keyName]) && $permissionSet[$keyName] == 1) {
				$currentAllowed = true;
			} else {
				$currentAllowed = false;
			}
			$allowed = $currentAllowed && $allowed;
		}
		return $allowed;
	}
}

?>
