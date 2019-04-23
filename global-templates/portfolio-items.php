<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

 if ( ! defined( 'ABSPATH' ) ) {
	 exit; //Exit if accessed directly.
 }

 //Get the three latest portfolio items

 $portfolio_items = new wp_query([
	 'post_type' => 'port_portfolio',
	 'posts_per_page' => -1,
 ]);
 //Did we gat any portfolio-items?

 if($portfolio_items->have_posts()) {

	//Great success

	?>

	<div class="wrapper"id="wrapper-portfolio-items">

	<div class="container">
		<h1><?php _e('Portfolio', 'portfolio'); ?></h1>

		<div class="row">

		<!--Loop over the porfolio-items -->

		<?php
			while($portfolio_items->have_posts()) {
				$portfolio_items->the_post();
				get_template_part('loop-templates/content-port_portfolio'); ?>
			<?php
			}

			//Don't forget to reset Postdata
			wp_reset_postdata();
		?>

		<!--foreach portfolio include a template part-->

		</div>
	</div>

	</div>
	<?php
 }




