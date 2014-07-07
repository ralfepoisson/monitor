<?php

class Event extends AppModel {
	public $useTable = 'events';
	public $primaryKey = 'uid';
	public $hasMany = array(
		'EventData' => array(
			'className' => 'EventData',
			'foreignKey' => 'event_id'
		)
	);
}
