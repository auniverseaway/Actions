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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
	<!-- <div style="background-color: rgb(51,153,51); height: 110%; width: 100%; top: 0px; left: 0px; position: absolute; color: rgb(255, 255, 255); ">
        <div style="width:320px;height:320px;margin-top:0px">
                <img src="http://izumit.com/actions/images/Actions-Icon.png" height="100%" width="100%"/>
        </div>
    </div> -->
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
			
		</div>
	</div>
</body>
</html>
