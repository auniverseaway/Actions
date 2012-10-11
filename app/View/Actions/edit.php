<h1>Edit Action</h1>
<?php
    echo $this->Form->create('Action', array('action' => 'edit'));
    echo $this->Form->input('title');
    echo $this->Form->input('body', array('rows' => '3'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Action');
    echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $action['Action']['id']),
                array('confirm' => 'Are you sure?'));
    ?>

    <?php 
            ?>