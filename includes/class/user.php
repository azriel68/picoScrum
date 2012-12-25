<?php

/*
 * Project
 */
class TUser extends TObjetStd {
	function __construct() {
		parent::set_table('user');
		parent::add_champs('login,password','type=chaine;');
		
		parent::start();
		parent::_init_vars();
		
		
	}
	
}