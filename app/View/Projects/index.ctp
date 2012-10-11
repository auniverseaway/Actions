<?php foreach ($projects as $project): ?>
    <div class="action">
    	<?php echo $this->Html->link($project['Project']['name'], 
            array('controller' => 'projects', 'action' => 'edit', $project['Project']['id'])); ?>
    </div>
    <?php endforeach; ?>
    <?php unset($project); ?>
    <div id="buttons">
    <?php echo $this->Html->link('Add Action', array('controller' => 'actions', 'action' => 'add'), array('class' => 'button')); ?>
    <?php echo $this->Html->link('Add Project', array('controller' => 'projects', 'project' => 'add'), array('class' => 'button')); ?>
    </div>