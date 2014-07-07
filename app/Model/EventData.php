<?php

class Event extends AppModel {
	public $useTable = 'event_data';
	public $primaryKey = 'uid';
	public $hasOne = array(
		'EventTypeField' => array(
			'className' => 'EventTypeField',
			'foreignKey' => 'field_id'
		)
	);
}
