<!-- View Event Type: List Event Type Fields -->

<h1><?php $item["EventType"]["name"]; ?></h1>

<?php echo $this->Html->link("Add", array("controller" => "EventType", "action" => "add_field", $item["EventType"]["uid"])); ?>

<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
	</tr>
	<?php foreach($item["EventTypeField"] as $field): ?>
	<tr>
		<td><?php echo $field["uid"]; ?></td>
		<td><?php echo $this->Html->link($field["name"], array("controller" => "EventType", "action" => "view_field", $field["uid"])); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
