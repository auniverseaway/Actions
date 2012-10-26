<?php foreach ($actions as $action): ?>
    <div class="action"><?php echo $this->Html->link($action['title'], 
        array('controller' => 'actions', 'action' => 'edit', $action['id'])); ?>
	</div>
<?php endforeach; ?>
<?php debug($actions); ?>
