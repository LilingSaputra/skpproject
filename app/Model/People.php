<?php

class People extends AppModel
{
	public $name = 'Peoples';
	public $primaryKey = 'id';
	
	public $belongsTo = array(
		'Division' => array(
	 		'className' => 'Divisions',
	 		'foreignKey' => 'division_id'
	 		));
	public $validate = array(
		'username' => array(
			'rule' => 'notEmpty'
		),
		'fullname' => array(
			'rule' => 'notEmpty'
		),
		'division_id' => array(
			'rule' => 'notEmpty'
		),
		'job_position' => array(
			'rule' => 'notEmpty'
		),
		'email' => array(
			'rule' => 'notEmpty'
		),
		'phone' => array(
			'rule' => 'notEmpty'
		),
		'address' => array(
			'rule' => 'notEmpty'
		),
	);
}

?>