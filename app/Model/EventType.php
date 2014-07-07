<?php

class EventType extends AppModel {
	public $useTable = 'event_types';
	public $primaryKey = 'uid';
	public $displayField = 'name';
	public $hasMany = array(
		'EventTypeField' => array(
			'className' => 'EventTypeField',
			'foreignKey' => 'event_type_id'
		)
	);
}
