<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sketch
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sketch' ); ?></a>
    <!-- Begin whole header -->
    <header id="masthead" class="flex100 flex-box site-header" role="banner">
        <!-- Begin left box -->
        <div class="flex-box left-flex-box site-branding">
			<?php if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>
			<h1 class="flex-box flex100 site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="flex-box flex100 site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
        <!-- End left box -->
        <!-- Begin right box -->
		<nav id="site-navigation" class="main-navigation right-flex-box" role="navigation">
			<button class="menu-toggle"><?php _e( 'Menu', 'sketch' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
        <!-- End right box -->
	</header><!-- #masthead -->
    <!-- End whole header -->

	<div id="content" class="site-content">
		<?php if ( get_header_image() ) : ?>
			<?php if ( is_page_template( 'portfolio-page.php' ) && ! sketch_has_featured_posts( 1 ) || ! is_page_template( 'portfolio-page.php' ) ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="custom-header" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
				</a>
			<?php endif; ?>
		<?php endif;  // End header image check. ?>
