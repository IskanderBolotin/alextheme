<?php get_header(); ?>
<section>
	<div class="container-fluid">
		<h1 class="text-center">Главная страницы темы создана</h1>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
			</div>
			
			<div class="col-md-4">
				<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/gnome_1.png" alt="gnome"/></a>
				<p class="text-both">
				Содержание моей темы. Небольшой текст описывающий тему.
				</p>
			</div>
			
			<div class="col-md-4">
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid">
				<?php if ( have_posts() ): ?>
					<?php while ( have_posts() ): the_post(); ?>
						<h1><a href="<?php the_permalink();?>"> <?php the_title(); ?></a> </h1>
						<p>	<?php the_content(); ?> </p>
						<?php if ( has_post_thumbnail()):the_post_thumbnail(); ?>
						<?php endif; ?>	
					<?php endwhile; ?>
				<?php endif; ?>
							
	</div>
</section>
<?php get_footer(); ?>