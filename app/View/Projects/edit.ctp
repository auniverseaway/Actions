<h1>Edit Project</h1>
<?php
	echo $this->Form->create('Project', array('action' => 'edit'));
    echo $this->Form->input('name');
    echo $this->Form->input('description', array('rows' => '3'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Project');
?>
<?php echo $this->element('actions-list', compact($actions)) ?>
