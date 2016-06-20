<?php
/*
* Template Name: Faces of Seattle 
* Description: A Page Template to be used with EGHL's Seattle email marketing campaign
* URL: https://www.evergreenhomeloans.com/about-us/publications/
*/


get_header();?>


<div id="top_wrapper">
	<div id="top_wrapper_left">
		<img src="/wp-content/uploads/2016/03/seattle-met-mag-cover_2016.png">
	</div>

	<div id="top_wrapper_right">
		<p>Since the beginning of Evergreen in 1987, our commitment to our customers
		and associates helped us become the Face of Home Loans. Our success
		in the industry and our passion for what we do is highlighted by a 2-page
		spread ad in the recent issue of <i>Seattle Met</i> magazine.</p>
	</div>
</div>

<?php

do_action( 'genesis_before_content_sidebar_wrap' );
	?>

	<div id="content">

		<div id="content-sidebar-wrap">
		
			<div id="content" class="hfeed">
				<?php
					do_action( 'genesis_before_loop' );
					do_action( 'genesis_loop' );
					do_action( 'genesis_after_loop' );
				?>

				<img src="/wp-content/uploads/2016/03/faces_of_seattle_2016.png">
				<div id="textbox">
					<h3>THE FACE OF</h3>
					<h1>HOME LOANS</h1>
					<p class="burton"><strong>DON BURTON, PRESIDENT, EVERGREEN HOME LOANS, STANDS IN FRONT OF TREES PLANTED NEARLY 20 YEARS AGO BY THE EVERGREEN SEATTLE OFFICE.</strong></p>

					<p>It’s not surprising that Evergreen Home Loans recently celebrated its best year since its inception in 1987. That’s because President Don Burton is focused on making Evergreen the best place to work in the mortgage industry. Don makes a point of scheduling branch visits to understand how the company can improve both employee and customer satisfaction. Passionate about making a difference, Don inspires his employees to be the best they can be in their communities by allowing employees time off to support local causes.</p>

					<p>This focus on continual improvement makes Evergreen a great place to find home financing solutions. Burton believes in giving customers the best experience possible. It’s one of the reasons the company is experiencing rapid loan servicing growth. He wants customers to have a local all-in-one solution for affordable home financing that includes the origination, funding, and servicing of home loans.</p>

					<p>Burton knows that outstanding customer service happens when employees feel great about where they work. Evergreen is consistently rated one of Washington’s best places to work and Burton is proud that women represent 65% of the company’s management team. He also believes in making time for fun. That includes a home office engineered for play time complete with a pin ball machine and an Xbox One.</p>

					<p>So it’s no wonder customers feel good about choosing Evergreen. When employees are happy, customers are happy too.</p>

					<p>EVERGREEN HOME LOANS | 15405 SE 37TH ST, SUITE 200 | BELLEVUE, WA 98006<br />
					877-242-2014 | EVERGREENHOMELOANS.COM</p>

				</div><!-- end #textbox -->

			</div><!-- end #content -->
				
		</div><!-- end #content-sidebar-wrap -->

	</div><!-- end #content -->
	
	<div id="bottom_wrapper">
		<div id="bottom_wrapper_left">
			<h3>Explore our Difference:</h3>
 
			<p>We’re committed to making this the best place to work and the best place to make
			breakthroughs in the way people receive their home financing. Our commitment
			is to our family of associates and to our loyal customers.<br/>&nbsp;</p>
			<p>Please contact us directly to learn more about joining the team and help us change 
				the world one relationship at a time.</p>
		</div>

		<div id="bottom_wrapper_right">
			 
			<p>Contact us directly: (425) 974-8522<br /> or use the form below.<p>
		<?php echo do_shortcode('[gravityform id="5" name="false" description="false"]'); ?>
		</div>
	<?php get_footer();?>	
	</div>

	<?php
	do_action( 'genesis_after_content_sidebar_wrap' );

	
?>