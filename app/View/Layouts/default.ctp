<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Actions');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-touch-fullscreen" content="yes" />
	<link rel="apple-touch-icon" href="/img/apple-touch-icon-144x144-precomposed.png"/>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('/fonts/fonts');
		echo $this->Html->css('styles');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1 id="tags"><?php echo $this->Html->link('Tags', '/Tags'); ?></h1>
			<h1 id="projects"><?php echo $this->Html->link('Projects', '/Projects'); ?></h1>
			<h1 id="actions"><?php echo $this->Html->link('Actions', '/'); ?></h1>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link('Add Action', array('controller' => 'actions', 'action' => 'add'), array('class' => 'button')); ?>
			<?php echo $this->Html->link('Add Project', array('controller' => 'projects', 'action' => 'add'), array('class' => 'button')); ?>
			<?php echo $this->Html->link('Add Tag', array('controller' => 'tags', 'action' => 'add'), array('class' => 'button')); ?>
		</div>
	</div>
<?php
		echo $this->Html->script('http://code.jquery.com/jquery.min.js');
		echo $this->Html->script('actions.core');
?>
</body>
</html>
