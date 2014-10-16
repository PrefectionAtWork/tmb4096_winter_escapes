<?php include 'elements/header.php'; ?>	
<?php //var_dump($elements); ?>

	<div id="header">
		<img src="<?php echo base_url(), 'assets/'.$assets_prefix.'img/tmb4096_winter_escapes_timast.jpg'; ?>" alt="<?php echo $headline . ' - ' . $subheadline; ?>">
	</div> <!-- #header -->
	
	<div id="nav" class="clearfix">
	<?php 
		$i = 1; 
		foreach ( $elements as $key => $val ) {
	?>
		<ul class="sf-menu" id="sf-nav-<?php echo str_replace(" ", "-", strtolower($key)); ?>">
			<li><?php echo $key; ?>
			  <div class="sf-mega">
				  <ul>
					<?php
						foreach ( $val as $key2 => $val2 ) {
							if ( empty($val2['islinelisting']) ) {
					?>
								<li rel="region<?php echo $i; ?>"><?php echo replacer(ucwords($key2)); ?></li>
					<?php		$i++; 
							}
						} 
					?>
				  </ul>
			  </div>
			</li>
		</ul>
	<?php 
		}
		unset($i);
	?>
	</div>
	
	<div id="index-copy">
		<div class="collapse">
			<div class="arrow-down"></div>
		</div>
		<div class="uncollapse">
			<p>Don’t let this year’s cold weather get you down—plan now to make your escape! The islands of the Caribbean are ready to provide a phenomenal refuge, and Mexico’s many resorts are waiting to welcome you this January and February as you make a break for the sun and sand. Our rates are dropping lower and faster than the temperature will be, with discounts on top of already reduced rates, making now the time to book.</p>
			<h3>Booking Window: 10/17/14 – 11/6/14 &bull; Travel Window: 12/18/14 – 2/28/15</h3>
		</div>
	</div> <!-- #index-copy -->

	<div id="regions">
		
		<div id="regions-container"> 
		
		<?php $i = 1; ?>
		<?php
			foreach ( $elements as $key => $val ) { 
		?>
					
				<?php
				foreach ( $val as $key2 => $val2 ) {
					$departure_code = strtolower($val2[0]['departurecode']);
				?>	
				
				<div id="region<?php echo $i; ?>" class="region-content">
					<h3 class="region-title"><?php echo $key2; ?></h3>	
					
					<?php
					foreach ( $val2 as $key3 => $val3 ) {
						if ( empty($val3['islinelisting']) ) {
					?>
					
						<div class="offer">
							<div>
								<?php 
									$imgName = preg_replace('/([a-zA-Z]{3})([a-zA-Z]{3})/', '$1_$2', $val3['code']);
								?>
								<div class="offer-top">
									<?php if ( empty($val3['landonly']) ) { ?>
										<span class="title-info">
											<?php 
												if ( !empty($val3['airline']) ) {
													$aOrAn = strtolower($val3['airline'][0]);  
													$aOrAn = ( strpos('aeiou', $aOrAn) !== FALSE ) ? 'an ' : 'a ';
												} else {
													$aOrAn = 'a ';
												}
											?>
											<p>
												<?php echo $val3['numberofnights']; ?> 
												<span id="<?php echo 'region'.$i.'-'.$departure_code.'-'.$val3['code'].'-tooltip'; ?>" class="tooltip-action">
													<?php echo replacer($val3['packageinclusionslabel']); ?>
												</span> Nights from <?php echo ucfirst($val3['from'])." (".strtoupper($val3['departurecode']).")"; ?> on <?php echo $aOrAn . $val3['airline']; ?> Dedicated Vacation Flight
											</p>
											<div class="starting-at">
												STARTING AT 
												<span class="price">
													$<?php echo delimiter_splice(',',3, $val3['price']); ?>
												</span>
											</div>
										</span>
									<?php } ?>
									<span class="destination-info">
										<h4>
											<?php 
													echo replacer($val3['region']); 
											?>
										</h4>
										<h4 class="destination">
											<?php 
												if ( !empty($val3['subdestination']) ) { 
													echo replacer($val3['subdestination']) . ", ";
												}
												echo replacer($val3['destination']); 
											?>
										</h4>
									</span>
								</div> <!-- .offer-top -->
								
								<div class="offer-bottom">
									<?php 
										$imageClass = ( empty($val3['landonly']) ) ? "" : " push-image-up";
									?>
									<div class="image<?php echo $imageClass; ?>">
										<div class="image-container">
											<a href="http://www.travimp.com/hotel.php?msg=<?php echo strtolower($val3['code']);?>">
												<div class="overlay">
													<img src="<?php echo base_url(), 'assets/'.$assets_prefix.'img/link.png'; ?>">
												</div>
											</a>
											<img src="<?php echo base_url(), 'assets/'.$assets_prefix.'img/properties/'.$imgName.".jpg"; ?>">
										</div>
									</div>
								
									<span class="hotel">
										<a href="http://www.travimp.com/hotel.php?msg=<?php echo strtolower($val3['code']);?>">
											<h3 class="content-top-left"><?php echo replacer($val3['hotelname']); ?></h3>
										</a>
										<?php if ( !empty($val3['hoteldetail']) ) { ?>
											<p><?php echo replacer($val3['hoteldetail']); ?></p>
										<?php } ?>
										
										<?php if ( empty($val3['landonly']) ) { ?>
										
											<?php if ( $val3['bookingwindow'] != '' ) { ?>
												<p><?php echo "Booking Window: " . replacer($val3['bookingwindow']); ?></p>
											<?php } ?>
											
											<?php if ( !empty($val3['departuredates']) ) { ?>
												<p>Advertised rate is valid in "<?php echo strtoupper($val3['classofservice']); ?>" class<br>for departure on 
													<?php 
														$dept_dates = explode ( ",", $val3['departuredates'] );
														$j = 1;
														foreach ( $dept_dates as $date ) {
															echo replacer( trim($date) );
															//echo date( 'n/j/y', strtotime(trim($date)) );
															if ( count($dept_dates) == 2 && $j < count($dept_dates)) {
																echo " and ";
															} else if ( count($dept_dates) > 1 ) {
																if ( $j == (count($dept_dates)-1) ) { 
																	echo ", and ";
																} else if ( $j < count($dept_dates) ) {
																	echo ", ";
																}
															}
															$j++;
														} unset ($j);
													?>		
												</p>
											<?php } ?>
											
										<?php } ?>
									</span>
								</div>	<!-- .offer-bottom -->
							</div>
							
								<?php if ( !empty($val3['terms']) ) { ?>
								<div class="toggle toggle-more">Learn More</div>
																			
									<div class="collapsible">
										<p><?php echo $val3['terms']; ?></p>
									</div> <!-- .collapsible -->
								<?php } ?>
							<script>
								$(document).ready(function() {
									$('#<?php echo 'region'.$i.'-'.$departure_code.'-'.$val3['code'].'-tooltip'; ?>').tooltipster({
										content: $('<?php echo create_ul_custom($val3['packageinclusionscontent']); ?>'),
										animation: 'fade',
										position: 'bottom-left',
										speed: 400
									});
								});
							</script>	
							<div style="clear:both;"></div>
						</div><!-- .offer -->
						<?php 
							}
						} 
						?>
					</div>
				<?php
				$i++;
				}
				?>
			<?php
			}
			?>
		</div> <!-- .regions_container -->

	</div> <!-- #regions -->	

		<?php 
			$i = 1; 
			foreach ( $elements as $key => $val ) {
		?>
			<?php 
				foreach ( $val as $key2 => $val2 ) {
					if ( check_multi_dimensional($val2, 'islinelisting') ) {
			?>
					<div id="region<?php echo $i; ?>-line-listings" class="line-listings">
						<h4>More Great Deals Are Available From the Following:</h4>
						<?php
							foreach ( $val2 as $key3 => $val3 ) {
								if ( !empty($val3['islinelisting']) ) {
						?>
								<div class="listing" >
									<span class="hotel-name">
											<?php echo replacer($val3['hotelname']); ?>
									</span>
									<span class="location">
										<?php 
											if ( !empty($val3['subdestination']) ) { 
												echo replacer($val3['subdestination']) . ", ";
											}
											echo replacer($val3['destination']); 
											echo " - " . replacer($val3['region']); 
										?>
									</span>
								</div>
						<?php 
								}
							}
						?>
					</div>
			<?php
					}
				$i++;
				}
			?>		
		<?php 
			}
		?>
	
	<!-- Back to top function -->
	<div id="back">
		<p id="back-top">
			<a href="#top"><span></span></a>
		</p>
	</div>
		

<?php include 'elements/footer.php'; ?>