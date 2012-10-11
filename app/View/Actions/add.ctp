<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Action</h1>
<?php
echo $this->Form->create('Action');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('status');
echo $this->Form->end('Save Action');
?>