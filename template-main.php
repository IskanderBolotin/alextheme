<?php
/*
Template Name: Мой шаблон страницы
Template Post Type: post, page, product
*/
?>
<?php get_header(); ?>
		<?php the_post(); ?>
			<div class="row">
				<div class ="col-md-4">
				</div>
				<div class ="col-md-4">
					<div class="card">
						<?php if ( has_post_thumbnail()):?>
							<div class="card-img-top"> <?php the_post_thumbnail();?></div>
						<?php endif; ?>
						<div class="card-block">
							<h4 class="card-title"><?php the_title(); ?> </h4>
							<p class="card-text"><?php the_content(); ?> </p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
			</div>
<?php get_footer(); ?>