			<div class="homepackage">
				
				<li>
					<div class="homepackagediv">
						<img src="<?php echo $this->webroot; ?>img/Image/Kashmir.jpg" class="packageimg">
					</div>
					<div class="packagename">
						Kashmir Tour Packages
					</div>
					<div class="packagetext">
						We offers a large verity of Kashmir tours
					</div>
					<div class="packagelink">
						<?php 
							$id= 2;
							echo $this->Html->link(
							'Click here for a list of tours ',
							array('controller' => 'PackageLocations', 'action' => 'Tour',$id)
						); ?>
					</div>
				</li>
				
				<li>
					<div class="homepackagediv">
						<img src="<?php echo $this->webroot; ?>img/Image/LehLadakh.jpg" class="packageimg">
					</div>
					<div class="packagename leh-ladakh">
						Leh-Ladakh Tour Packages
					</div>
					<div class="packagetext leh-ladakhtext">
						We offers a large verity of Leh-Ladakh tours
					</div>
					<div class="packagelink leh-ladakh">
						<?php 
							$id= 3;
							echo $this->Html->link(
							'Click here for a list of tours ',
							array('controller' => 'PackageLocations', 'action' => 'Tour',$id)
						); ?>
					</div>
				</li>
				
				<li>
					<div class="homepackagediv">
						<img src="<?php echo $this->webroot; ?>img/Image/Kerala.jpg" class="packageimg">
					</div>
					<div class="packagename kerala">
						Kerala Tour Packages
					</div>
					<div class="packagetext keralatext">
						We offers a large verity of Kerala tours
					</div>
					<div class="packagelink kerala">
						<?php 
							$id= 1;
							echo $this->Html->link(
							'Click here for a list of tours ',
							array('controller' => 'PackageLocations', 'action' => 'Tour',$id)
						); ?>
					</div>
				</li>
				
				<li>					
					<div class="homepackagediv">
						<img src="<?php echo $this->webroot; ?>img/Image/Goa.jpg" class="packageimg">
					</div>
					<div class="packagename Goa">
						Goa Tour Packages
					</div>
					<div class="packagetext Goatext">
						We offers a large verity of Goa tours
					</div>
					<div class="packagelink Goa">
						<?php 
							$id= 4;
							echo $this->Html->link(
							'Click here for a list of tours ',
							array('controller' => 'PackageLocations', 'action' => 'Tour',$id)
						); ?>
					</div>
				</li>
			</div>	

			<div class="morepackage">
				<?php echo $this->Html->link(
					'Click here to see a more packages ',
					array('controller' => 'PackageLocations', 'action' => 'view')
				); ?>
			</div>