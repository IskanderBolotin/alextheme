<?php get_header(); ?>
	<div>
		<main>

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'content', 'page' );

		endwhile;
		?>

		</main>
	</div>

<?php get_footer(); ?>