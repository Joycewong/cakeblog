<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Welcome To Baker Cake House');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'https://www.facebook.com/pages/Cake-House/384683458311498'); ?></h1>
		</div>
		<div id="content">
			<div class="user">
			<?php 
			if (AuthComponent::user()):
			  // The user is logged in, show the logout link
			  echo $current_user['username'];
			  echo '&nbsp;';
			  echo $this->Html->link('Log out', array('controller' => 'users', 'action' => 'logout'));
			else:
			  // The user is not logged in, show login link
			  if ( $this->name !== 'Users' && $this->action !== 'login' ) {
				  echo $this->Html->link('Log in', array('controller' => 'users', 'action' => 'login'));
			  }
			  
			endif;
			
			echo $this->Session->flash(); 
			
			?>
            </div>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('Logo3.jpeg', array('alt' => $cakeDescription, 'border' => '0')),
					'https://www.facebook.com/pages/Cake-House/384683458311498/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
			
			<div id="messages">

		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
