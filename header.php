<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="/wordpress/wp-content/themes/twentyfifteen/css/base.css">
    <link rel="stylesheet" href="/wordpress/wp-content/themes/twentyfifteen/css/grids.css">



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="layout" class="pure-g">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div class="sidebar pure-u-1 pure-u-md-1-4">
		<header id="masthead" class="site-header" role="banner">

		
				<?php
					twentyfifteen_the_custom_logo();

					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?><a href="mailto:keerthi@ui-design-coder.com" class="contact-me"> Contact me via email</a></p>
						
					<?php endif;
				?>
				<!-- <button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button> -->
			
		</header><!-- .site-header -->
      <input type="checkbox" id="toggle-menu" aria-hidden="true" />
        <label for="toggle-menu" class="hamburger">
        	
      <div class="line line-1"></div>
      <div class="line line-2"></div>
      <div class="line line-3"></div>
   </label>
		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div class="content pure-u-1 pure-u-md-3-4">
