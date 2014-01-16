<?php 
	foreach ($packages as $package): 
		$subheading = $package['PackageLocation']['Location']. " Tour Packages";?>
		<div id="subhead">
			<?php echo $subheading; 
?>
		</div>	
<div>
	<p>		
		<?php echo $package['PackageLocation']['Text'] ?>
	</p>
</div>
<?php 
	endforeach;
    unset($package); 
?>
<div>
<?php			
			foreach ($tours as $tour):	?>						
				<div class="data">
					<div class="name">
						<?php echo $tour['Tour']['Name']; ?>
					</div>
					<div class="tourdata">
						<div>
							<li>
								<?php Print $tour['Tour']['Days'] ?>
							</li>
							<li>
								days/
							</li>
							<li>
								<?php Print $tour['Tour']['Nights'] ?>
							</li>
							<li>
								nights
							</li>
						</div>
						<div>
							<li>
								Date:
							</li>
							<li>
								<?php Print $tour['Tour']['Date'] ?>
							</li>
						</div>
						<div class="place tourlink">
							<?php 
									echo $this->Html->link(
									'View Details',
									array('controller' => 'PackageLocations', 'action' => 'Tour','?' => array('id'=>$tour['Tour']['Id'],'Name'=>$tour['Tour']['Name']))
								); ?>					
							<li>
								Places:
							</li>
							<li>
								<?php foreach ( $tour['TourPlace'] as $tour_place ):
									echo $tour_place['Place_Id'];
									endforeach;
									unset($tour_place);		
								?>
							</li>
						</div>			
					</div>
				</div>
			<?php endforeach;
    unset($tour);
?>
</div>