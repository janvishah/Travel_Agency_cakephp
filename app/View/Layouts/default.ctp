<?php
/**
 *
 * PHP 5
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


?>
<?php $cakeDescription = "Information Travels"; ?>
<!DOCTYPE html>
<html>
	<head>		
	</head>
	<body>
		<title>		
			<?php Print 'InformationTravels'; ?>
		</title>
		<?php		
			echo $this->Html->css('home');		
		?>
		<div id="container">
			<section>
				<img src="<?php echo $this->webroot; ?>img/logo.jpg" id="logoimage">
				<header>
					<h1>Information Travel</h1>
					<h2>Luxury Holiday Made Affordable</h2>
				</header>
			</section>
			<nav>					
				<li ><?php echo $this->Html->link(
					'Home ',
					array('controller' => 'PackageLocations', 'action' => 'index')
					); ?></li>
				<li><?php echo $this->Html->link(
					'Indian Tourism ',
					array('controller' => 'PackageLocations', 'action' => 'index')
					); ?></li>
				<li><?php echo $this->Html->link(
					'Destination ',
					array('controller' => 'PackageLocations', 'action' => 'Destination')
					); ?>
				</li>
				<li><a href="ContactUs.php" >ContactUs</a></li>				
			</nav>

			<div id="slidediv">
				<script type="text/javascript">
					var image1=new Image()
					image1.src="<?php echo $this->webroot; ?>img/home/pr1.jpg"
					var image2=new Image()
					image2.src="<?php echo $this->webroot; ?>img/home/pr2.jpg"
					var image3=new Image()
					image3.src="<?php echo $this->webroot; ?>img/home/pr3.jpg"
					var image4=new Image()
					image4.src="<?php echo $this->webroot; ?>img/home/pr4.jpg"
					var image5=new Image()
					image5.src="<?php echo $this->webroot; ?>img/home/pr5.jpg"
					var image6=new Image()
					image6.src="<?php echo $this->webroot; ?>img/home/pr6.jpg"
					var image7=new Image()
					image7.src="<?php echo $this->webroot; ?>img/home/pr7.jpg"
					var image8=new Image()
					image8.src="<?php echo $this->webroot; ?>img/home/pr8.jpg"
					var image9=new Image()
					image9.src="<?php echo $this->webroot; ?>img/home/pr9.jpg"
					var image10=new Image()
					image10.src="<?php echo $this->webroot; ?>img/home/pr10.jpg"
					var image11=new Image()
					image11.src="<?php echo $this->webroot; ?>img/home/pr11.jpg"
				</script>
				<img src="<?php echo $this->webroot; ?>img/home/pr1.jpg" name="slide" class="imgslide"/><br>
				<script>		
					var step=1
					function slideit()
					{
						if (!document.images)
						return
						document.images.slide.src=eval("image"+step+".src")
						if (step<11)
							step++
						else
							step=1
						setTimeout("slideit()",3000)
					}
					slideit();
				</script>
			</div>
			<div id="content">

				<?php echo $this->Session->flash(); ?>

				<?php echo $this->fetch('content'); ?>
			</div>
			<div id="footer">
				
			</div>
			<?php echo $this->element('sql_dump'); ?>
		</div>
	</body>
</html>