<?php

/* vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2: */

class AclAro extends AclAppModel {
  public $useTable = 'aros';
  public $actsAs = array('Tree');

  public function getStringPath($id) {
		$pieces = $this->getPath($id);
		$path = array();
		foreach ($pieces as $p) {
			if (!empty($p['AclAro']['alias'])) {
				$path[] = $p['AclAro']['alias'];
			} else {
				$path[] = $p['AclAro']['model'] . ' - ' . $p['AclAro']['foreign_key'];
			}
		}
		$path = implode(' > ', $path);
		return $path;
	}	

}

?>
