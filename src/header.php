<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rock
 */

?><!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="id=edge" />
		<title></title>
		<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage"  data-spy="scroll" data-target="#masthead">
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<div class="builder-outer-container">

<div id="page" class="site">

<div class="builder-inner-container">



	<header id="masthead" class="navbar navbar-<?php echo Kirki::get_option( 'rock', 'header_layout' ); ?> navbar-<?php echo Kirki::get_option( 'rock', 'header_position' ); ?> " role="banner" itemscope itemtype="https://schema.org/WPHeader" style="padding:<?php echo Kirki::get_option( 'rock', 'header-padding' ); ?>px 0 <?php echo Kirki::get_option( 'rock', 'header-padding' ); ?>px 0 !important;" >


		<?php $nav_primary_location = get_theme_mod( 'nav_primary_location' ); ?>
		<?php $nav_social_location = get_theme_mod( 'nav_social_location' ); ?>

		<?php if (( $nav_primary_location == 'top' ) || ( $nav_social_location == 'top' )) { ?>

		<div class="header-top <?php if ( $nav_primary_location == 'top' ) { ?>navbar-primary-position-top navbar-primary-align-<?php echo get_theme_mod( 'nav_primary_align' ); } elseif ( $nav_social_location == 'top' ) { ?>navbar-social-position-top navbar-primary-align-<?php echo get_theme_mod( 'nav_social_align' ); } else { ?>navbar-none<?php } ?>">

			<div class="<?php echo Kirki::get_option( 'rock', 'header_container' ); ?>">

				<?php if ( $nav_primary_location == 'top' ) { ?>
				
					<?php get_template_part( 'template-parts/nav-primary' ); ?>	

				<?php } ?>

				<?php if ( $nav_social_location == 'top' ) { ?>
				
					
				<?php } ?>

			</div>

		</div>

		<?php } ?>

		

		<div class="header-middle logo-position-middle logo-align-<?php echo get_theme_mod('logo_align'); ?> <?php if ( $nav_primary_location == 'middle' ) { ?>navbar-primary-position-middle navbar-primary-align-<?php echo get_theme_mod( 'nav_primary_align' ); } else { ?>navbar-none<?php } ?>">



			<div class="<?php echo Kirki::get_option( 'rock', 'header_container' ); ?> ">

			

					<h1 class="site-title navbar-brand" itemscope itemtype="https://schema.org/Organization"><a title="<?php bloginfo( 'name' ); ?> home page" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span itemprop="name"><img src="<?php echo Kirki::get_option( 'rock', 'logo_image' ); ?>" height="<?php echo get_theme_mod('logo-height'); ?>"</span></a></h1>

			

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-primary" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				
		
			

					<?php if ( $nav_primary_location == 'middle' ) { ?>
					
						<?php get_template_part( 'template-parts/nav-primary' ); ?>	

					<?php } ?>

					<?php if ( $nav_social_location == 'middle' ) { ?>
				
						<?php get_template_part( 'template-parts/menu-social-media' ); ?>	

					<?php } ?>

				</div>

				<?php // $wpseo_social = get_option('wpseo_social'); ?>

				

			</div>

		</div>

		<div class="header-bottom">

			<div class="<?php echo Kirki::get_option( 'rock', 'header_container' ); ?>">
		
				<?php if ( $nav_primary_location == 'bottom' ) { ?>
				
					<?php get_template_part( 'template-parts/nav-primary' ); ?>	

				<?php } ?>

				<?php if ( $nav_social_location == 'bottom' ) { ?>
				
					<?php get_template_part( 'template-parts/menu-social-media' ); ?>	

				<?php } ?>

			</div>

		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
