<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.typekit.net/gao1ylu.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="site-wrapper">
		<header class="wrap">
			<!--
				<nav>
					<?php wp_nav_menu(array(
						'menu_class' => 'primary-nav',
						'menu_id' => 'nav',
						'theme_location' => 'header-menu',
					)); ?>
				</nav>

				<div class="search">
					<form action="/" method="get" role="search">
						<label for="search" id="dialog-title"></label>
						<input type="search" name="s" id="search" value="<?php the_search_query(); ?>" />
						<input type="submit" class="search-submit" value="Search">
					</form>
				</div>
			-->
		</header>
		<main class="wrap">