<?php get_header(); ?>

<section>
	<div class="container-fluid">
		<h4>Главная страницы темы создана</h4>
	</div>
	<div class="container-fluid">
		<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/gnome_1.png" alt="gnome"/></a>
		<p class="text-both">
		Содержание моей темы. Небольшой текст описывающий тему.
		</p>
	</div>
</section>

<section>
	<div class="container-fluid">
				<?php if ( have_posts() ): ?>
					<?php while ( have_posts() ): the_post(); ?>
						<h1>	<?php the_title(); ?> </h1>
						<p>	<?php the_content(); ?> </p>
					<?php endwhile; ?>
				<?php endif; ?>
	</div>

<?php get_footer(); ?>