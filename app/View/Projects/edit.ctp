<h1>Edit Project</h1>
<?php
	echo $this->Form->create('Project', array('action' => 'edit'));
    echo $this->Form->input('name');
    echo $this->Form->input('description', array('rows' => '3'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Project');
?>
<?php foreach ($actions as $action): ?>
    <div class="action"><?php echo $this->Html->link($action['Action']['title'], 
        array('controller' => 'actions', 'action' => 'edit', $action['Action']['id'])); ?>
	</div>
<?php endforeach; ?>