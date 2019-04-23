<?php

$logo = get_field('logo');

?>

<div class="wrapper-portfolio col-md-6 col-lg-4">
	<article class="portfolio mb-4">

	<?php
	?>
	<header>

	<?php if(has_post_thumbnail()) : ?>
	<a href="<?php the_permalink(); ?>">
	<?php the_post_thumbnail('portfolio-thumnbnail',
	['class' => 'img-fluid']); ?></a>
	<?php endif; ?>

	</header>

	<h1><?php the_title(); ?></h1>

	<main>

	<?php the_excerpt(); ?>

	</main>

	<footer>
	<?php
	if($client = get_post_meta(get_the_ID(), 'client', true)) {
		printf(__('div class="client">Client: %s</div>', 'portfolio'),
		$client);
	}
	?>
	</footer>

	</article>

</div>
