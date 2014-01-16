<?php
	function data($Id1,$Name,$Days,$Nights,$dates)
	{ ?>
		<div class="data">
			<div class="name">
				<?php Print $Name; ?>
			</div>
			<div class="tourdata">
				<div>
					<li>
						<?php Print $Days ?>
					</li>
					<li>
						days/
					</li>
					<li>
						<?php Print $Nights ?>
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
						<?php Print $dates ?>
					</li>
				</div>
				<div class="place tourlink">
					<?php 
							echo $this->Html->link(
							'View Details',
							array('controller' => 'PackageLocations', 'action' => 'Tour','?' => array('id'=>$id,'Name'=>$Name))
						); ?>					
					<li>
						Places:
					</li>
					<li>
						<?php $result2=mysql_query("SELECT Place_Id FROM tour_places where Tour_Id=$Id1");
						while($row2=mysql_fetch_array($result2))
						{
							$pla= $row2['Place_Id']; 				
										
							$result3=mysql_query("SELECT Place FROM places where Id=$pla");
				
							while($row3=mysql_fetch_array($result3))
							{
								Print $row3['Place']; 
								Print "-";
							}
						}	?>		
					</li>
				</div>			
			</div>
		</div>
	<?php }
?>