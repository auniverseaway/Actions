<!-- File: /app/View/Actions/view.ctp -->

<h1><?php echo h($action['Action']['title']); ?></h1>

<p><?php echo h($action['Action']['body']); ?></p>

<p><?php echo h($action['Project']['name']); ?></p>

<p><?php echo h($action['Action']['status'] ? 'Yes' : 'No'); ?></p>

<p><small>Created: <?php echo $action['Action']['created']; ?></small></p>