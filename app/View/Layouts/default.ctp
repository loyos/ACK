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

$cakeDescription = "Ack Web Design";
?>
<!DOCTYPE html>	
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('style');
		echo $this->Html->css('css_player/jplayer.pink.flag');
		echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js');
		echo $this->Html->script('jquery.jplayer.min');
		echo $this->Html->script('extras/jquery-1.8.2-ajax-deprecated.min');
		echo $this->Html->script('extras/jquery.jplayer.playlist.combo.min');
		echo $this->Html->script('extras/jquery.jplayer.combo.min');
		echo $this->Html->script('add-on/jplayer.playlist.min');
		echo $this->Html->script('add-on/jquery.jplayer.inspector');
		echo $this->Html->script('http://code.jquery.com/ui/1.10.2/jquery-ui.js');
		// echo $this->fetch('meta');
		// echo $this->fetch('css');
		// echo $this->fetch('script');
	?>
<link href='http://fonts.googleapis.com/css?family=Contrail+One' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="container">
		<div class = "logo_text">
		</div>
		<div class= "subtitle">
		</div>
		<div id="header">
			<div class= "menu">
				<ul>
					<li name = "home"><?php echo $this->Html->link('HOME', '#') ?> </li>
					<li name = "works" style= "background: none;"><?php echo $this->Html->link('PORTAFOLIO', '#') ?> </li>
					<li class= "logo"></li>
					<li name = "studio"> <?php echo $this->Html->link('ESTUDIO', '#') ?> </li>
					<li name = "contact" style= "background: none;"> <?php echo $this->Html->link('CONTACTO', '#') ?> </li>
				</ul>
			</div>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<div class = "social_network">
				<ul>
					<li> <?php echo $this->Html->image('soc_icon1.png'); ?> </li>
					<li><?php echo $this->Html->image('soc_icon2.png');?> </li>
					<li> <?php echo $this->Html->image('soc_icon3.png');?> </li>
					<li> <?php echo $this->Html->image('soc_icon4.png');?> </li>
				</ul>
			</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
