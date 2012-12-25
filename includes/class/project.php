<?php
/*
 * Project
 */
class TProject extends TObjetStd {
	function __construct() {
		parent::set_table('project');
		
		parent::add_champs('id_owner','type=entier;');
		parent::add_champs('nom','type=chaine;');
		
		parent::start();
		parent::_init_vars();
		
		
	}
	
}

/*
 * Task of project
 */
class TTask extends  TObjetStd {
	function __construct() {
		parent::set_table('task');
		
		parent::add_champs('id_project,points,id_owner,id_requester','type=entier;');
		parent::add_champs('nom, type','type=chaine;');
		
		parent::start();
		parent::_init_vars();
		
		$this->TType=array(
			'CHORE'=>'Tâche'
			,'BUG'=>'Bogue'
			,'FEATURE'=>'Développement'
			,'RELEASE'=>'Livraison'
		);
	}
}