<?php
/*
Template Name: Мой шаблон страницы
Template Post Type: post, page, product
*/
?>
<?php get_header(); ?>
	<?php 	$args = array( 'posts_per_page' => 10 ); ?>
	<?php	$query = new WP_Query( $args ); ?>
	<?php	while ( $query->have_posts() ): $query->the_post(); ?>
	<p>
	<div class="row">
			<div class ="col-md-4">
			</div>
			
				<div class ="col-md-4">
					<div class="card">
						<?php if ( has_post_thumbnail()):?>
							<div class="card-img-top"> <?php the_post_thumbnail();?></div>
						<?php endif; ?>
							<div class="card-block text-xs-center">
							<h4 class="card-title"><?php the_title(); ?> </h4>
							<p class="card-text"><?php the_content(); ?> </p>
							<a href="<?php the_permalink();?>" class="btn btn-primary">Читать далее</a>
							</div>
					</div>
				</div>
	</div>
	</p>
	<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>