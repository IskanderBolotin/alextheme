<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>My Theme</title>
	
<?php wp_head(); ?>

</head>
<body>
<header>
		<nav role="navigation" class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Alexsite</a>
				<?php
					wp_nav_menu(array(
						'theme_location' => 'primary',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'menu_class' => 'nav navbar-nav',
						'menu_id' => '',
						'depth' => 1
					));
				?>
		</nav>
</header>