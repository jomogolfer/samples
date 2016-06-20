<?php
/*
* Template Name: President's Club
* Description: A Page Template to be used with EGHL's President's Club.
* UTL: https://www.evergreenhomeloans.com/presidents-club/
*/


get_header();?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>

// Swap out marker images
$(document).ready(function(){
	// Swap out LO images

	$(".lo_image").hover(function() {

		var $image = $(this).parents().siblings(".president-image").children();
		var $imagesrc = $(this).data("image-src");

		if(!($imagesrc == $image.attr("src"))) { //don't crossfade on already chosen item
			$image.animate({opacity:0},125,function(){
				//$image.attr("src", $(this).data("image-src"));
				$image.attr("src", $imagesrc);
				$image.animate({opacity:1},125);
			});
		}
		//$image.attr("src", $(this).data("image-src"));

	}, function() {

		var $image = $(this).parents().siblings(".president-image").children();
		$image.data("old-src", $image.attr("src"));
		$image.attr("src", $(this).data("old-src"));

	});

	$(".marker .close").on('click',function(){
		$(".marker .president-wrapper").fadeOut("medium");
		$(".marker-image").attr("src", "/wp-content/uploads/2016/05/marker.png");
	});

	$(".marker-image").on('click',function(){

		// Ensure this is a "closed" marker
		if(!( $(this).attr("src") == "/wp-content/uploads/2016/05/marker-orange.png" ) ) {

			//Close all markers
			$(".marker .president-wrapper").fadeOut("medium");
			$(this).nextAll(".marker .president-wrapper").fadeToggle("medium");    
			

			//change this marker's image color
			if($(this).attr("src") == "/wp-content/uploads/2016/05/marker.png"){
				//We are opening a new LO window
				$(".marker-image").attr("src", "/wp-content/uploads/2016/05/marker.png");
				$(this).attr("src", "/wp-content/uploads/2016/05/marker-orange.png");

			} else {

				$(".marker-image").attr("src", "/wp-content/uploads/2016/05/marker.png");

			}

		} // End check for "closed" marker

	});

	//use Escape Key to close any open "marker"
	$(document).keyup(function(e) {
	     if (e.keyCode == 27) { // escape key maps to keycode `27`

	        $(".marker .president-wrapper").fadeOut("medium");
	        $(".marker-image").attr("src", "/wp-content/uploads/2016/05/marker.png");

	    }
	});

});
</script>

<div id="top_wrapper">
	<div id="top_wrapper_left">
		<img src="/wp-content/uploads/2016/05/PresidentsClub-logo.jpg">
	</div><!--top_wrapper_left-->

	<div id="top_wrapper_right">
		<p class="about">ABOUT THE</p>
		<h2>PRESIDENT'S CLUB</h2>
		<p>The Evergreen President's Club annually recognizes top performing loan officers who demonstrate extrodinary levels of service and dedication to their homebuyer clients. Each and every President's Club member proudly serves their local area focusing on helping homebuyers obtain a loan that is affordable and right for their situation.  The passion and commitment exhibited by President Club members allows the vision of Evergreen to shine through and help change the world one relationship at a time.</p>
	</div><!--top_wrapper_right-->
</div><!--top_wrapper-->

<?php

do_action( 'genesis_before_content_sidebar_wrap' );
	?>

		<div id="content-sidebar-wrap">
		
			<div id="content" class="hfeed">
				<?php
					do_action( 'genesis_before_loop' );
					do_action( 'genesis_loop' );
					do_action( 'genesis_after_loop' );
				?>

				<!--Bellevue, WA-->
				<div class="marker marker1">
					<img class="toggle marker-image" src="/wp-content/uploads/2016/05/marker.png">
						<div class="marker president-wrapper">
						<div class="marker president-member-bellevue">
							<div class="marker president-image">
								<img class="main_image" src="/wp-content/uploads/2016/05/anne-g-litwak.jpg">
							</div>

							<div class="close">x</div>

							<div class="left-column">
							<p class="marker city-name">Bellevue, WA</p>
							<p><a href="/bellevue/?consultant=anne-g-litwak" class="lo_image" data-image-src="/wp-content/uploads/2016/05/anne-g-litwak.jpg">Anne-G Litwak</a></p>
							<p><a href="/bellevue/?consultant=frank-savereux" class="lo_image" data-image-src="/wp-content/uploads/2016/05/frank-savereux.jpg">Frank Savereux</a></p>
							<p><a href="/bellevue/?consultant=cheryl-leidle" class="lo_image" data-image-src="/wp-content/uploads/2016/05/cheryl-leidle.jpg">Cheryl Leidle</a></p>
							<p><a href="/bellevue/?consultant=mark-williams" class="lo_image" data-image-src="/wp-content/uploads/2016/05/mark-williams.jpg">Mark Williams</a></p>
							<p><a href="/bellevue/?consultant=don-zender" class="lo_image" data-image-src="/wp-content/uploads/2016/05/don-zender.jpg">Zender Team</a></p>
							
							<p class="marker city-name">Enumclaw, WA</p>
							<p><a href="/enumclaw/?consultant=tara-rose" class="lo_image" data-image-src="/wp-content/uploads/2016/05/tara-rose.jpg">Tara Rose</a></p>

							<p class="marker city-name">Gig Harbor, WA</p>
							<p><a href="/gigharbor/?consultant=scott-huntington" class="lo_image" data-image-src="/wp-content/uploads/2016/05/scott-huntington.jpg">Scott Huntington</a></p>

							<p class="marker city-name">Marysville, WA</p>
							<p><a href="/marysville/?consultant=kevin-everett" class="lo_image" data-image-src="/wp-content/uploads/2016/05/kevin-everett.jpg">Kevin Everett</a></p>
							
							<p class="marker city-name">Northgate, WA</p>
							<p><a href="/northgate/?consultant=david-sharp" class="lo_image" data-image-src="/wp-content/uploads/2016/05/david-sharp.jpg">David Sharp</a></p>
							<p><a href="/northgate/?consultant=john-deasy" class="lo_image" data-image-src="/wp-content/uploads/2016/05/john-deasy.jpg">John Deasy</a></p>
							<p><a href="/northgate/?consultant=susan-langendorfer" class="lo_image" data-image-src="/wp-content/uploads/2016/05/susan-langendorfer.jpg">Susan Langendorfer</a></p>
							</div>

							<div class="middle-column">
							<p class="marker city-name">Proctor, WA</p>
							<p><a href="/proctor/?consultant=damian-floreno" class="lo_image" data-image-src="/wp-content/uploads/2016/05/damian-floreno.jpg">Damian Floreno</a></p>

							<p class="marker city-name">Seattle, WA</p>
							<p><a href="/seattle/?consultant=kathryn-seymour" class="lo_image" data-image-src="/wp-content/uploads/2016/05/kathryn-seymour.jpg">Kathryn Seymour</a></p>
							<p><a href="/seattle/?consultant=ginny-lee" class="lo_image" data-image-src="/wp-content/uploads/2016/05/ginny-lee.jpg">Ginny Lee</a></p>
							<p><a href="/seattle/?consultant=team-evergreen" class="lo_image" data-image-src="/wp-content/uploads/2016/05/team-evergreen.jpg">Team Evergreen</a></p>

							<p class="marker city-name">Sequim, WA</p>
							<p><a href="/sequim/?consultant=michele-adkisson" class="lo_image" data-image-src="/wp-content/uploads/2016/05/michele-adkisson.jpg">Michele Adkisson</a></p>

							<p class="marker city-name">Silverdale, WA</p>
							<p><a href="/silverdale/?consultant=amber-page-2-2" class="lo_image" data-image-src="/wp-content/uploads/2016/05/amber-page.jpg">Amber Page</a></p>
							<p><a href="/silverdale/?consultant=val-hawryluk" class="lo_image" data-image-src="/wp-content/uploads/2016/05/val-hawryluk.jpg">Val Hawryluk</a></p>

							<p class="marker city-name">Tacoma, WA</p>
							<p><a href="/tacoma/?consultant=julie-swenson" class="lo_image" data-image-src="/wp-content/uploads/2016/05/julie-swenson.jpg">Julie Swenson</a></p>
							<p><a href="/tacoma/?consultant=corey-hjalseth" class="lo_image" data-image-src="/wp-content/uploads/2016/05/corey-hjalseth.jpg">Corey Hjalseth</a></p>
							</div>
							<br style="clear:both;"/>


						</div>
					</div>
				</div>

				<!--Vancouver-->
				<div class="marker marker21">
						<img class="toggle-21 marker-image" src="/wp-content/uploads/2016/05/marker.png">
						<div class="marker president-wrapper">
						<div class="marker president-member">
							<div class="marker president-image"><img src="/wp-content/uploads/2016/05/leslie-girard.jpg"></div>
							<div class="close">x</div>
							<p class="marker city-name">Vancouver, WA</p>
							<p><a href="/vancouver/?consultant=leslie-girard" class="lo_image" data-image-src="/wp-content/uploads/2016/05/leslie-girard.jpg">Leslie Girard</a></p>
							<p><a href="/vancouver/?consultant=niki-cantrell" class="lo_image" data-image-src="/wp-content/uploads/2016/05/niki-cantrell.png">Niki Cantrell</a></p>
							
						</div>
					</div>
				</div>

				<!--Wenatchee-->
				<div class="marker marker22">
						<img class="toggle-22 marker-image" src="/wp-content/uploads/2016/05/marker.png">
						<div class="marker president-wrapper">
						<div class="marker president-member">
							<div class="marker president-image"><img src="/wp-content/uploads/2016/05/april-brown.jpg"></div>
							<div class="close">x</div>
							<p class="marker city-name">Wenatchee, WA</p>
							<p><a href="/wenatchee/?consultant=april-brown" class="lo_image" data-image-src="/wp-content/uploads/2016/05/april-brown.jpg">April Brown</a></p>
							
						</div>
					</div>
				</div>

				<!--Southwest Vegas, NV-->
				<div class="marker marker8">
					<img class="toggle-8 marker-image" src="/wp-content/uploads/2016/05/marker.png">
						<div class="marker president-wrapper">
						<div class="marker president-member">
							<div class="marker president-image"><img class="main_image" src="/wp-content/uploads/2016/05/michael-rodriguez.jpg"></div>
							<div class="close">x</div>
							<p class="marker city-name">Southwest Vegas, NV</p>
							<p><a href="/southwestvegas/?consultant=michael-rodriguez" class="lo_image" data-image-src="/wp-content/uploads/2016/05/michael-rodriguez.jpg">Michael Rodrigquez</a></p>
							<p><a href="/southwestvegas/?consultant=lynn-day" class="lo_image" data-image-src="/wp-content/uploads/2016/05/lynn-day.jpg">Lynn Day</a></p>
							<p><a href="/southwestvegas/?consultant=scott-gillespie" class="lo_image" data-image-src="/wp-content/uploads/2016/05/scott-gillespie.jpg">Scott Gillespie</a></p>
							<p><a href="/southwestvegas/?consultant=tony-alder" class="lo_image" data-image-src="/wp-content/uploads/2016/05/tony-alder.jpg">Tony Alder</a></p>
							<p><a href="/southwestvegas/?consultant=lisa-czajka" class="lo_image" data-image-src="/wp-content/uploads/2016/05/lisa-czajka.jpg">Lisa Czajka</a></p>
							<p><a href="/southwestvegas/?consultant=scott-reynolds" class="lo_image" data-image-src="/wp-content/uploads/2016/05/scott-reynolds.jpg">Scott Reynolds</a></p>
							<p><a href="/southwestvegas/?consultant=melissa-foster" class="lo_image" data-image-src="/wp-content/uploads/2016/05/melissa-foster.jpg">Melissa Foster</a></p>
						</div>
					</div>
				</div>

				<!--Moses Lake, WA-->
				<div class="marker marker15">
					<img class="toggle-15 marker-image" src="/wp-content/uploads/2016/05/marker.png">
						<div class="marker president-wrapper">
						<div class="marker president-member">
							<div class="marker president-image"><img class="main_image" src="/wp-content/uploads/2016/05/clark-schweigert.jpg"></div>
							<div class="close">x</div>
							<p class="marker city-name">Moses Lake, WA</p>
							<p><a href="/moseslake/?consultant=clark-schweigert-2" class="lo_image" data-image-src="/wp-content/uploads/2016/05/clark-schweigert.jpg">Clark Schweigert</a></p>
						</div>
					</div>
				</div>

				<!--Omak, WA-->
				<div class="marker marker17">
					<img class="toggle-17 marker-image" src="/wp-content/uploads/2016/05/marker.png">
						<div class="marker president-wrapper">
						<div class="marker president-member">
							<div class="marker president-image"><img class="main_image" src="/wp-content/uploads/2016/05/mike-thornton.jpg"></div>
							<div class="close">x</div>
							<p class="marker city-name">Omak, WA</p>
							<p><a href="/omak/?consultant=mike-thornton" class="lo_image" data-image-src="/wp-content/uploads/2016/05/mike-thornton.jpg">Mike Thornton</a></p>
						</div>
					</div>
				</div>

				<!--Prineville, WA-->
				<div class="marker marker18">
					<img class="toggle-18 marker-image" src="/wp-content/uploads/2016/05/marker.png">
						<div class="marker president-wrapper">
						<div class="marker president-member">
							<div class="marker president-image"><img class="main_image" src="/wp-content/uploads/2016/05/wendy-pangle.jpg"></div>
							<div class="close">x</div>
							<p class="marker city-name">Prineville, WA</p>
							<p><a href="/prineville/?consultant=wendy-pangle" class="lo_image" data-image-src="/wp-content/uploads/2016/05/wendy-pangle.jpg">Wendy Pangle</a></p>
						</div>
					</div>
				</div>

				<!--Bend, Oregon-->
				<div class="marker marker2">
					<img class="toggle-2 marker-image" src="/wp-content/uploads/2016/05/marker.png">
						<div class="marker president-wrapper">
						<div class="marker president-member">
							<div class="marker president-image"><img class="main_image" src="/wp-content/uploads/2016/05/kevin-pangle.jpg"></div>
							<div class="close">x</div>
							<p class="marker city-name">Bend, OR</p>
							<p><a href="/bend/?consultant=kevin-pangle" class="lo_image" data-image-src="/wp-content/uploads/2016/05/kevin-pangle.jpg">Kevin Pangle</a></p>
							<p><a href="/bend/?consultant=mark-long" class="lo_image" data-image-src="/wp-content/uploads/2016/05/mark-long.jpg">Mark Long</a></p>
						</div>
					</div>
				</div>

				<!--Medford, Oregon-->
				<div class="marker marker14">
					<img class="toggle-14 marker-image" src="/wp-content/uploads/2016/05/marker.png">
						<div class="marker president-wrapper">
						<div class="marker president-member">
							<div class="marker president-image"><img class="main_image" src="/wp-content/uploads/2016/05/michael-newmann.jpg"></div>
							<div class="close">x</div>
							<p class="marker city-name">Medford, OR</p>
							<p><a href="/medford/?consultant=michael-newmann" class="lo_image" data-image-src="/wp-content/uploads/2016/05/michael-newmann.jpg">Michael Newmann</a></p>
						</div>
					</div>
				</div>

				<!--Boise, Idaho-->
				<div class="marker marker3">
						<img class="toggle-3 marker-image" src="/wp-content/uploads/2016/05/marker.png">
						<div class="marker president-wrapper">
						<div class="marker president-member">
							<div class="marker president-image"><img class="main_image" src="/wp-content/uploads/2016/05/corey-newell.jpg"></div>
							<div class="close">x</div>
							<p class="marker city-name">Boise, ID</p>
							<p><a href="/boise/?consultant=corey-newell" class="lo_image" data-image-src="/wp-content/uploads/2016/05/corey-newell.jpg">Corey Newell</a></p>
							<p><a href="/boise/?consultant=sam-newell" class="lo_image" data-image-src="/wp-content/uploads/2016/05/sam-newell.jpg">Sam Newell</a></p>
						</div>
					</div>
				</div>

				

				<div class="marker marker5">
						<img class="toggle-5 marker-image" src="/wp-content/uploads/2016/05/marker.png">
						<div class="marker president-wrapper">
						<div class="marker president-member">
							<div class="marker president-image"><img src="/wp-content/uploads/2016/05/ed-bevacqua.jpg"></div>
							<div class="close">x</div>
							<p class="marker city-name">Yuba City, CA</p>
							<p><a href="/yuba-city/?consultant=ed-bevacqua" class="lo_image" data-image-src="/wp-content/uploads/2016/05/ed-bevacqua.jpg">Ed Bevacqua</a></p>
							<p><a href="/yuba-city/?consultant=lori-heikens" class="lo_image" data-image-src="/wp-content/uploads/2016/05/lori-heikens.jpg">Lori Heikens</a></p>
						
						</div>
					</div>
				</div>

				<div class="marker marker6">
						<img class="toggle-6 marker-image" src="/wp-content/uploads/2016/05/marker.png">
						<div class="marker president-wrapper">
						<div class="marker president-member">
							<div class="marker president-image"><img src="/wp-content/uploads/2016/05/michelle-coolidge-tondu.jpg"></div>
							<div class="close">x</div>
							<p class="marker city-name">Torrance, CA</p>
							<p><a href="/torrance/?consultant=michelle-coolidge-tondu" class="lo_image" data-image-src="/wp-content/uploads/2016/05/michelle-coolidge-tondu.jpg">Michelle Collidge Tondu</a></p>
							
						</div>
					</div>
				</div>



				<div id="first_textbox">
					<p>The President's Club award is reserved for our top performers, 
						representing approximately the top 20% of originators at Evergreen 
						Home Loans.  Associates like these inspire us to make Evergreen the 
						best place to work and a great place for our customers to find home 
						loan solutions.</p>
				</div><!--first_textbox-->

				<div id="second_textbox">
					<p>This prestigious group excels at navigating each of their clients 
						through the complexities of the loan process and making the goal of 
						homeownership more attainable.<br /><br /></p>
					<p class="name">- David Floan, Executive VP, Loan Production</p>
				</div><!-- end #second_textbox -->

				<div id="instructions">
					<p><i>Note:</i> Markers indicate President Club members in that state. 
						Clicking on a pin will display member names that link to their website.</p>
				</div>

			</div><!-- end #content -->
				
		</div><!-- end #content-sidebar-wrap -->

	
	
	<div id="bottom_wrapper">
		
	<?php get_footer();?>	
	</div>

	<?php
	do_action( 'genesis_after_content_sidebar_wrap' );

	
?>