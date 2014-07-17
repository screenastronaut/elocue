<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Elocue
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet'>
<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<div class="wrap"><!-- sticky footer -->

		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'elocue' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<section class="container">
				<div class="row">
					<div class="site-branding col-md-3">
						<h1 class="site-title logo-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</div>

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle"><?php _e( 'Primary Menu', 'elocue' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
			</section>
		</header><!-- #masthead -->

		<div id="content" class="site-content">
