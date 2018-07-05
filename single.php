<?php get_header(); ?>
	<section>
		<div class="container-fluid">
			<?php the_post(); ?>
			<h1><?php the_title();?></h1>
			<p>	<?php the_content(); ?> </p>
			<?php if ( has_post_thumbnail()):the_post_thumbnail(); ?>
			<?php endif; ?>	
		</div>
	</section>

<?php get_footer(); ?>