<h1 class="view-name"><?php echo $this->action ?></h1>
<?php foreach ($actions as $action): ?>
    <div class="action">
    	<?php echo $this->Html->link($action['Action']['title'], array('controller' => 'actions', 'action' => 'edit', $action['Action']['id'])); ?>
    </div>
<?php endforeach; ?>
<?php unset($action); ?>