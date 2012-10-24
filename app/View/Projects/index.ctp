<h1 class="view-name">All Projects</h1>
<?php foreach ($projects as $project): ?>
    <div class="action">
    	<?php echo $this->Html->link($project['Project']['name'], 
            array('controller' => 'projects', 'action' => 'edit', $project['Project']['id'])); ?>
    </div>
    <?php endforeach; ?>
    <?php unset($project); ?>