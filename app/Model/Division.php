<?php

class Division extends AppModel
{
	public $useTable = 'Divisions';
	public $primaryKey = 'id';
	
	public $validate = array(
		'name' => array(
			'rule' => 'notEmpty'
		)
	);
}

?>
