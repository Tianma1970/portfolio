<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

//Get the three latest USPS

$usps = new wp_query([
	'post_type' => 'port_usp',
	'posts_per_page' => 3,

]);

//Did we get any Usps?

if($usps->have_posts()) {

//Great success

?>



	<div class="wrapper" id="wrapper-usps">

		<div class="container">

			<div class="row">

				<!--Loop over the USPS-->

					<?php
						while($usps->have_posts()) {

							$usps->the_post();
							get_template_part('loop-templates/content', 'usp'); ?>


						<?php
						}

						//Don't forget to reset Postdata
						wp_reset_postdata();
					?>


					<!--foreach USPS include a template-part-->



			</div>
		</div>

	</div>

	<?php
}


