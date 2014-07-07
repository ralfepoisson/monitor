<h1>Add Field</h1>

<?php
echo $this->Form->create("EventTypeField");
echo $this->Form->hidden("event_type_id", array("value" => $event_type_id));
echo $this->Form->input("name");
echo $this->Form->input("data_family");
echo $this->Form->end("Save Field");
?>