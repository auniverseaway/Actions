<h1 class="view-name"><?php echo $this->action ?></h1>
<?php foreach ($actions as $action): ?>
    <div class="action"><?php echo $this->Html->link($action['Action']['title'], 
            array('controller' => 'actions', 'action' => 'edit', $action['Action']['id'])); ?>
    </div>
<?php endforeach; ?>
<?php unset($action); ?>
<div id="buttons">
	<?php echo $this->Html->link('Add Action', array('controller' => 'actions', 'action' => 'add'), array('class' => 'button')); ?>
	<?php echo $this->Html->link('Add Project', array('controller' => 'projects', 'action' => 'add'), array('class' => 'button')); ?>
</div>