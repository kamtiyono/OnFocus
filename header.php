<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package OnFocus
 * @since OnFocus 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/ico.at.png" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<script src="//use.edgefonts.net/rosario:n4,i4,n7,i7;league-gothic:n4.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
			
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php //bloginfo( 'name' ); ?>
				<img src="http://abouttiyo.web.id/wp-content/uploads/2014/01/AT2014.png" alt="<?php echo get_bloginfo('description');?>" >

			</a></h1>
			
		<nav id="site-navigation" class="navigation-main" role="navigation">
			<h2 class="menu-toggle"><?php _e( 'Menu', 'OnFocus' ); ?></h2>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'OnFocus' ); ?>"><?php _e( 'Skip to content', 'OnFocus' ); ?></a></div>

			<?php //wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
			</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="main" class="site-main">
