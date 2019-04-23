<?php
/**
 * The template for displaying the front-page
 *
 * @package understrap
 */

 if( ! defined( 'ABSPATH') ) {
	 exit; //Exit if accessed directly
 }

 get_header();

 $container = get_theme_mod(
	 'portfolio_container_type'
 );

 ?>

<?php get_template_part( 'global-templates/hero'); ?>

<?php get_template_part( 'global-templates/hero-canvas'); ?>

<?php get_template_part( 'global-templates/usps'); ?>

<?php get_template_part( 'global-templates/portfolio-items'); ?>

<?php get_template_part( 'global-templates/portfolio-skills'); ?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr(
		$container ); ?>" id="content" tabindex="-1">
		<div class="row">

			<main class="site-main" id="main">

				<?php while ( have_posts()) : the_post(); ?>

				<?php get_template_part( 'loop-templates/content', 'frontpage'); ?>


				<?php endwhile; ?>






			</main>

		</div>

	</div>
</div>

<?php get_footer(); ?>

