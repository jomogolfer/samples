<?php
/*
 * Template Name: consultant
 * Description: Used for Consultants Page
 * URL: https://www.evergreenhomeloans.com/puyallup-two/?consultant=meet-dorman-team
*/
	get_header();
	wp_enqueue_script("myUi","https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.8/jquery-ui.min.js");
	do_action( 'genesis_before_content_sidebar_wrap' );
	?>
	<div id="content-sidebar-wrap">
		<?php do_action( 'genesis_before_content' ); ?>
		<div id="content" class="hfeed">
			<?php
				do_action( 'genesis_before_loop' );
				//do_action( 'genesis_loop' );
				?>
			<div <?php post_class(); ?>>
				<?php do_action( 'genesis_before_post_title' ); ?>
				<?php
					$pID = get_the_ID();
					if ( $pID == 1367 ) {
						//Check for custom team page title
						$teamLogo	= simple_fields_get_post_value($pID, array(1,27), true);
						echo '<h1><img class="team-logo-title" src="'.$teamLogo['url'].'" alt="'.get_the_title().'"/></h1>';
					} else {
						do_action( 'genesis_post_title' ); 						
					} 

				?>
				<?php do_action( 'genesis_after_post_title' ); ?>				
				<div class="entry-content">
						<?php //Get Custom Field Values
							$teamPage						= simple_fields_get_post_value($pID, array(1,23), true);
							$teamPhoto					= simple_fields_get_post_value($pID, array(1,22), true);
							$teamMembers				= simple_fields_values('team_member');
							$officerImg   			= simple_fields_get_post_value($pID, array(1,6), true);
							$officerTitle 			= simple_fields_get_post_value($pID, array(1,10), true);
							$officerNMLS  			= simple_fields_get_post_value($pID, array(1,1), true);
							$officerPhone 			= simple_fields_get_post_value($pID, array(1,2), true);
							$officerCell  			= simple_fields_get_post_value($pID, array(1,3), true);
							$officerFax   			= simple_fields_get_post_value($pID, array(1,4), true);
							$officerToll  			= simple_fields_get_post_value($pID, array(1,13), true);
							$officerEmail 			= simple_fields_get_post_value($pID, array(1,5), true);
							$officerEmailAlt		= simple_fields_get_post_value($pID, array(1,20), true);
							$officerAffil				= simple_fields_get_post_value($pID, array(1,19), true);
							$officerEspanol			= simple_fields_get_post_value($pID, array(1,18), true);
							$officerAddr				= NULL;
							$officerCont  			= simple_fields_get_post_value($pID, array(1,11), true);
							$officerCont  			= apply_filters('the_content', $officerCont);
							$officerTestTitle  	= simple_fields_values('testimonial_title');
							$officerTestimonial = simple_fields_values('testimonial');
												
						?>
					<?php if(!$teamPage) : ?>	
					<div class="officer-intro">			
					<h3><?php if($officerImg['url']) { echo '<img class="loimg" src="'.$officerImg['url'].'" />'; } echo $officerTitle;//Loan Officer?></h3>
					<p>
						<?php if($officerNMLS) : ?>
						NMLS: <?php echo $officerNMLS; ?>
						<?php endif; ?>

						<?php if($officerPhone) : ?>
						<br />Office Phone: <?php echo $officerPhone; ?>
						<?php endif; ?>

						<?php if($officerCell) : ?>
						<br />Cell Phone: <?php echo $officerCell; ?>
						<?php endif; ?>

						<?php if($officerFax) : ?>
						<br />Fax: <?php echo $officerFax; ?>
						<?php endif; ?>

						<?php if($officerToll) : ?>
						<br />Toll Free: <?php echo $officerToll; ?>
						<?php endif; ?>

						<?php if($officerEmail) : ?>
						<br />Email: <a href="mailto:<?php echo $officerEmail; ?>"><?php echo $officerEmail; ?></a>
						<?php endif; ?>

						<?php if($officerEmailAlt) : ?>
						<br />Alternate Email: <a href="mailto:<?php echo $officerEmailAlt; ?>"><?php echo $officerEmailAlt; ?></a>
						<?php endif; ?>

						<?php if($officerAddr) : ?>
						<div class="address">Address: <?php echo $officerAddr; ?></div>
						<?php endif; ?>

					</p>
				</div>
					<?php echo $officerCont; //do_action( 'genesis_post_content' ); ?>
					<?php //handle testimonials 
						if(count($officerTestTitle)!=0){
							echo '<h2 class="testimonialHeader">Testimonials</h2>';
							echo '<div id="accordion">';
							$i = 0;
							//loop over array, inserting into jquery ui accordion
							foreach($officerTestTitle as &$value){
								echo '<h3>'.$value.'</h3>';
								echo '<div>'.apply_filters('the_content',$officerTestimonial[$i]).'</div>';
								$i++;
							}
							echo '</div>';
							//Call the accordion
							echo '<script>jQuery(function(){jQuery("#accordion").accordion();});</script>';
						} 
					
					?>
				<?php else : ?>
				<?php //handle team display
					if($pID == 1367):
						echo '<div class="team-message">';
						echo $officerCont; //Show Content prior to List of Team 
						echo '<div class="spacer"> </div>';
						echo '</div>';
				?>
				<div class="fade-out">
				<div id="expand-intro" class="expand-team-intro">
					<span>Read More</span> <img src="/wp-content/themes/evergreen-home-loans/images/read-more-arrow.png" alt="Read More" />
				</div>
				<h3 class="callout"></h3>
				<p class="callout"><a class="apply-button" href="https://www.evergreenhomeloans.com/puyallup-two/dorman-team-all-about-you/" target="_blank">Tell Us All About You</a></p>
				</div>
				<?php

					endif;

						if(count($teamMembers)!=0){
							$i = 0;
							echo '<ul class="team">';
							foreach ($teamMembers as &$member) {
								$mid = $member["id"];
								if($i == 0){
									//first URL will serve as link default for Team members 
									//that nothing has been selected for
									$link  		= get_permalink($mid);
									$brokerID = simple_fields_get_post_value($mid, array(1,14),true);
								}
								$mPhoto	 = simple_fields_get_post_value($mid, array(1,22), true);
								$mName	 = $member["title"];
								$officerNMLS = simple_fields_get_post_value($mid, array(1,1), true);
								$mTitle  = simple_fields_get_post_value($mid, array(1,10), true);
								$exclude = simple_fields_get_post_value($mid, array(1,24), true);
								$tmLink	 = simple_fields_get_post_value($mid, array(1,26), true);

								//Determine where the Team Member's listing links to
								if (!empty($exclude)) {
									//This verifies "Link to this team member" has been "checked"
									//We then link to this LO
									$mlink = get_permalink($mid);
									$bID = simple_fields_get_post_value($mid, array(1,14),true);
								} elseif (!empty($tmLink)) {
									//Check to see "Link to Team Member" has been used
									if ( $pID == 1367 ) { // DORMAN TEAM ADJUSTMENT
										$mlink = null;
									} else {
										$mlink = get_permalink($tmLink);
									}
									$bID = simple_fields_get_post_value($tmLink, array(1,14),true);
								} else {
									//Else Link to the team lead by default (position one in our list)
									$mlink = $link;
									$bID = $brokerID;
								}
								if(!empty($mlink)){ 
									$linkClass = "";
								} else {
									$linkClass = "hide-learn-link";
								}
								
								if ( $pID == 1367 ) { //Dorman conditional
								//var_dump($member);
									echo '<li><div class="wrap-consultant">';
									echo '<div class="hover">';
										echo '<a href="http://'.$bID.'.mortgage-application.net/CookieMaker.aspx?url='.get_bloginfo( 'url' ).'/apply-now?brokerId='.$bID.'" class="direct apply '.$linkClass.'">Apply Now</a>';
										echo '<a href="'.$mlink.'" class="direct learn">About Me</a>';
									echo '</div>';
									echo '<img src="'.$mPhoto['url'].'" />';
									echo '<span class="mName">'.$mName.'</span>';
									echo '<span class="title">'.$mTitle.'</span>';
										if (!empty($officerNMLS)) {
											echo '<span class="nmls">'."NMLS: ".$officerNMLS.'</span>';
										}
									echo '</div></li>';
								} else {
									echo '<li><a href="'.$mlink.'">';
									echo '<img src="'.$mPhoto['url'].'" />';
									echo '<span class="mName">'.$mName.'</span>';
									echo '<span class="title">'.$mTitle.'</span>';
									echo '</a></li>';
								} //end Dorman conditional 
								$i++;
							}
							echo '</ul>';
						}
				?>
				<?php 
					if(!$pID == 1367){
						echo $officerCont; //do_action( 'genesis_post_content' ); 
					}
				?>
				<?php endif; ?>
				</div><!-- end .entry-content -->				
				<?php //do_action( 'genesis_after_post_content' ); ?>
			</div><!-- end .postclass -->
		<?php edit_post_link('(Edit)'); ?>		
			
			<?php	
				do_action( 'genesis_after_loop' );
			?>
		</div><!-- end #content -->
		<?php $loopID = get_the_ID(); ?>
		<?php do_action( 'genesis_after_content' ); ?>
	</div><!-- end #content-sidebar-wrap -->
	<script>
    jQuery( document ).ready(function() {
    		if (detectIE()) {
	        jQuery('img.loimg').bicubicImgInterpolation({
	        		crossOrigin: 'anonymous' //otherwise browser security error is triggered
	        });
      	}
    });
</script>
	<?php
	do_action( 'genesis_after_content_sidebar_wrap' );

	get_footer();
