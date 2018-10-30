<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ADIArquitectos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header<?php if (is_front_page () ) { ?> container-fluid<?php } else  { ?> container<?php } ?>">
		<nav id="menu" class="navbar navbar-expand-lg" role="navigation">
			<div class="site-branding navbar-brand">
				<img class="logo" alt="ADI">
			</div><!-- .site-branding -->

			<button id="headerMenuToggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<i class="menu-icon" aria-hidden="true"></i>
				<i class="menu-icon-expand" aria-hidden="true"></i>			
			</button>

			<?php
			wp_nav_menu( array(
				'menu_id'        => 'primary',
				'theme_location' => 'primary',
				'container'		 => 'div',
				'container_id'	 => 'navbarNavDropdown',
				'container_class'=> 'collapse navbar-collapse',
				'menu_id'		 => 'main-menu',
				'menu_class' 	 => 'navbar-nav',
				'depth'			 => 2,
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				'walker'          => new WP_Bootstrap_Navwalker(),
			) );
			?>
			
		</nav><!-- #menu -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

