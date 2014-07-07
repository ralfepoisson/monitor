<?php

class EventTypeController extends AppController {
	public $helpers = array("Html", "Form", "Session");
	public $components = array("Session");
	
	public function index() {
		$this->set("event_types", $this->EventType->find("all"));
	}
	
	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}
		
		$item = $this->EventType->findByuid($id);
		if (!$item) {
			throw new NotFoundException(__('Invalid post'));
		}
		
		$this->set('item', $item);
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->EventType->create();
			$this->EventType->set(array(
				"creation_date" => date("Y-m-d H:i:s"),
				"active" => 1
			));
			if($this->EventType->save($this->request->data)) {
				$this->Session->setFlash(__('The event type has been saved.'));
				return $this->redirect(array("action" => "index"));
			}
			$this->Session->setFlash(__('Unable to save the event type.'));
		}
	}
	
	public function add_field($id=null) {
		if ($this->request->is('post')) {
			$this->loadModel('EventTypeField');
			$this->EventTypeField->create();
			$this->EventTypeField->set(array(
				"creation_date" => date("Y-m-d H:i:s"),
				"active" => 1
			));
			if($this->EventTypeField->save($this->request->data)) {
				$this->Session->setFlash(__('The field has been saved.'));
				return $this->redirect(array("controller" => "EventType", "action" => "view", $this->request->data["EventTypeField"]["event_type_id"]));
			}
			$this->Session->setFlash(__('Unable to save the event type.'));
		}
		$this->set("event_type_id", $id);
	}
	
}
