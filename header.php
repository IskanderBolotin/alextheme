<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	
<?php wp_head(); ?>

</head>
<body>
<header>
				<?php
					wp_nav_menu(array(
						'theme_location' => 'primary',
						'container' => 'nav',
						'container_class' => 'navbar navbar-expand-lg navbar-dark bg-dark',
						'container_id'  => 'bs-example-navbar-collapse-1',
						'menu_class' => 'nav navbar-nav',
						'menu_id' => '',
						'depth' => 1,
						'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
						'walker' =>  new wp_bootstrap_navwalker()
					));
				?>
</header>