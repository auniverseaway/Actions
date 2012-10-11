<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Project</h1>
<?php
echo $this->Form->create('Project');
echo $this->Form->input('name');
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->end('Save Project');
?>