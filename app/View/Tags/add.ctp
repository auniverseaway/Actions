<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Tag</h1>
<?php
echo $this->Form->create('Tag');
echo $this->Form->input('name');
echo $this->Form->end('Save Tag');
?>