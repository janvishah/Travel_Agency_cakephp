<?php $subheading="Destination Packages";	?>
<div id="subhead">
	<?php echo $subheading; ?>
</div>
<div class="homepackage">
	<?php $i= 0;
	 foreach ($packages as $package): 
		$i++;
		
			if($i > 4)
			{
				$i=1;
			}
		if($i == 1)
		{?>
		<li>
			<div class="homepackagediv">
				<?php $img = $package['PackageLocation']['Image'];?>
				<img src="<?php echo $this->webroot; ?>img/Image/<?php echo $img?>" class="packageimg">
			</div>
			
			<div class="packagename">
				<?php $nm = $package['PackageLocation']['Location'];
				 echo $nm; ?>
			</div>
			
			<div class="packagetext">
				We offers a large verity of <?php print $nm ;?> tours
			</div>
			
			<div class="packagelink">
				<?php $id=$package['PackageLocation']['Id'];
							echo $this->Html->link(
							'Click here for a list of tours ',
							array('controller' => 'PackageLocations', 'action' => 'Tour','?' => array('id'=>$id))
						); ?>
			</div>
		</li>
		<?php } ?>
		
		<?php if($i == 2)
		{?>
		<li>
			<div class="homepackagediv">
				<?php $img = $package['PackageLocation']['Image'];?>
				<img src="<?php echo $this->webroot; ?>img/Image/<?php echo $img?>" class="packageimg">
			</div>
			
			<div class="packagename leh-ladakh">
				<?php $nm = $package['PackageLocation']['Location'];
				 echo $nm; ?>
			</div>
			
			<div class="packagetext leh-ladakhtext">
				We offers a large verity of <?php print $nm ;?> tours
			</div>
			
			<div class="packagelink leh-ladakh">
				<?php $id=$package['PackageLocation']['Id']; 
							echo $this->Html->link(
							'Click here for a list of tours ',
							array('controller' => 'PackageLocations', 'action' => 'Tour','?' => array('id'=>$id))
						); ?>						
			</div>
		</li>
		<?php }
		if($i == 3)
		{?>
		<li>
			<div class="homepackagediv">
				<?php $img = $package['PackageLocation']['Image'];?>
				<img src="<?php echo $this->webroot; ?>img/Image/<?php echo $img?>" class="packageimg">
			</div>
			
			<div class="packagename kerala">
				<?php $nm = $package['PackageLocation']['Location'];
				 echo $nm; ?>
			</div>
			
			<div class="packagetext keralatext">
				We offers a large verity of <?php print $nm ;?> tours
			</div>
			
			<div class="packagelink kerala">
				<?php $id=$package['PackageLocation']['Id']; 
							echo $this->Html->link(
							'Click here for a list of tours ',
							array('controller' => 'PackageLocations', 'action' => 'Tour','?' => array('id'=>$id))
						); ?>
			</div>
		</li>
		<?php }
		if($i == 4)
		{?>
		<li>
			<div class="homepackagediv">
				<?php $img = $package['PackageLocation']['Image'];?>
				<img src="<?php echo $this->webroot; ?>img/Image/<?php echo $img?>" class="packageimg">
			</div>
			
			<div class="packagename Goa">
				<?php $nm = $package['PackageLocation']['Location'];
				 echo $nm; ?>
			</div>
			
			<div class="packagetext Goatext">
				We offers a large verity of <?php print $nm ;?> tours
			</div>
			
			<div class="packagelink Goa">
				<?php $id=$package['PackageLocation']['Id']; 
							echo $this->Html->link(
							'Click here for a list of tours ',
							array('controller' => 'PackageLocations', 'action' => 'tour','?' => array('id'=>$id))
						); ?>
			</div>
		</li>
		<?php }
	 endforeach;
     unset($package); ?>
</div>