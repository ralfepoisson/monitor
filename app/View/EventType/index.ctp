<!-- Event Type View -->

<h1>Event Types</h1>

<?php echo $this->Html->link("Add", array("controller" => "eventType", "action" => "add")); ?>

<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
	</tr>
	<?php foreach ($event_types as $item): ?>
	<tr>
		<td><?php echo $item['EventType']['uid']; ?></td>
		<td><?php echo $this->Html->link($item['EventType']['name'], array('controller' => 'eventType', 'action' => 'view', $item['EventType']['uid'])); ?></td>
	</tr>
	<?php endforeach; ?>