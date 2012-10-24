<h1 class="view-name">Tags</h1>
<?php foreach ($tags as $tag): ?>
    <div class="action">
    	<?php echo $this->Html->link($tag['Tag']['name'], 
            array('controller' => 'tags', 'action' => 'edit', $tag['Tag']['id'])); ?>
    </div>
<?php endforeach; ?>
<?php unset($tag); ?>
<div id="buttons">
    <?php echo $this->Html->link('Add Action', array('controller' => 'actions', 'action' => 'add'), array('class' => 'button')); ?>
    <?php echo $this->Html->link('Add Project', array('controller' => 'projects', 'project' => 'add'), array('class' => 'button')); ?>
</div>