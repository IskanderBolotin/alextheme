<?php
/*
Template Name: Мой шаблон страницы
Template Post Type: post, page, product
*/
?>
<?php get_header(); ?>
	<?php 	$args = array( 'posts_per_page' => 10 ); ?>
	<?php	$query = new WP_Query( $args ); ?>
	<div class="card-columns">
			<?php	while ( $query->have_posts() ): $query->the_post(); ?>

				<div class="card">
				  <?php if ( has_post_thumbnail()):?>
					<div class="card-img-top"> <?php the_post_thumbnail();?></div>
				  <?php endif; ?>
				  <div class="card-block">
					<h4 class="card-title"><?php the_title(); ?></h4>
					<p class="card-text"><?php the_content(); ?></p>
					<a href="<?php the_permalink();?>" class="btn btn-primary">Читать далее</a>
				  </div>
				</div>
			<?php endwhile; ?>
	</div>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>