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

$siteTitle = __d('cake_dev', 'Inspirame');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $siteTitle ?> | 
		<?php echo $title_for_layout; ?>
	</title>
	<?php
	echo $this->Html->meta('icon');

	echo $this->Html->css("bootstrap");
	echo $this->Html->css("lightbox");

	echo $this->fetch('meta');
	echo $this->fetch('css');
	?>
</head>
<body>
	<div id="container" class="container">
		<div id="header" class="page-header">
			<h1><?php echo $this->Html->link("Repositório", "/"); ?> <small>Olimpíada do Conhecimento - World Skills 2013</small></h1>

		</div>
		<div class="navbar">
			<nav class="navbar-inner">
				<ul class="nav">
					<li><?php echo $this->Html->link('Home', '/') ?></li>
					<li><?php echo $this->Html->link('Categorias', array('controller' => 'categories')) ?></li>
					<li><?php echo $this->element('login') ?></li>
				</ul>
			</nav>
		</div>
		<?php echo $this->Session->flash(); ?>
		<div id="content">
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>


	<?php 
	echo $this->Html->script("jquery");
	echo $this->Html->script("jquery-ui");
	echo $this->Html->script("bootstrap");
	echo $this->Html->script("lightbox");
	echo $this->Html->script("jquery.smooth-scroll.min");
	echo $this->fetch('script');
	?>

	<?php if (Configure::read('debug') >= 1) {
		echo $this->element('sql_dump');
	} ?>
</body>
</html>
