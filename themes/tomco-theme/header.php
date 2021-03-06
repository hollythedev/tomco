<?php
/**
 * The header for our theme.
 *
 * @package tomco_theme_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<?php include_once("analyticstracking.php") ?>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div><!-- .site-branding -->




				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="nav-menu-mini">
						<div class="nav-hamburger">
    				    <span class="hamburger-container">
          					<span class="hamburger-bar menu-bar-top"></span>
          					<span class="hamburger-bar menu-bar-middle"></span>
         					 <span class="hamburger-bar menu-bar-bottom"></span>
        				</span>
     				 </div>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div>
				
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class= "home-nav-link">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/graphics/logo.jpg" alt= "Company logo"> 
					</a>
					<!--<div class="header-search">
							<?php get_search_form(); ?>  |
							<div class= "header-contact">
								<p class="header-phone"> <i class="fa fa-phone" aria-hidden="true"></i> +852 2755 0971 	</p> 
								</div>
					</div>-->

		</nav>

		

				</div>
					<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
					</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
