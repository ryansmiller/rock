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

<div id="page" class="site">

	<header id="masthead" class="navbar navbar-<?php echo Kirki::get_option( 'rock', 'header_layout' ); ?> navbar-<?php echo Kirki::get_option( 'rock', 'header_position' ); ?> navbar-<?php echo Kirki::get_option( 'rock', 'header_link_color'); ?> " role="banner" itemscope itemtype="https://schema.org/WPHeader" style="background-color: rgba(<?php echo Kirki::get_option('rock','header_color'); ?>,<?php echo Kirki::get_option('rock','header_opacity'); ?>) !important; padding:<?php echo Kirki::get_option( 'rock', 'header-padding' ); ?>px 0 <?php echo Kirki::get_option( 'rock', 'header-padding' ); ?>px 0 !important;" >

		<div class="<?php echo Kirki::get_option( 'rock', 'header_container' ); ?>">
		
			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-primary" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

				<h1 class="site-title navbar-brand" itemscope itemtype="https://schema.org/Organization"><a title="<?php bloginfo( 'name' ); ?> home page" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span itemprop="name"><img src="<?php echo Kirki::get_option( 'rock', 'logo_image' ); ?>" height="<?php echo Kirki::get_option( 'rock', 'logo-height' ); ?>"</span></a></h1>

			</div>

			<style type="text/css">

			.navbar-nav>li>a {
				line-height: <?php echo Kirki::get_option( 'rock', 'logo-height' ); ?>px;
			}


			</style>

			<nav id="nav-primary" class="collapse navbar-collapse" role="navigation" itemscope="" itemtype="https://schema.org/SiteNavigationElement">

				<?php wp_nav_menu( 
					array( 
						'theme_location' 	=> 'primary', 
						'menu_id' 			=> 'primary-menu', 
						'menu_class' 		=> 'nav navbar-nav', 
						'container' 		=> 'ul',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	            		'walker'            => new wp_bootstrap_navwalker() 
					) 
				); ?>

				<?php wp_nav_menu( 
					array( 
						'theme_location' 	=> 'secondary', 
						'menu_id' 			=> 'secondary-menu', 
						'menu_class' 		=> 'nav navbar-nav', 
						'container' 		=> 'ul',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	            		'walker'            => new wp_bootstrap_navwalker() 
					) 
				); ?>

				<?php $wpseo_social = get_option('wpseo_social'); ?>

				<ul id="social-menu" class="nav navbar-nav">
					<?php if ( Kirki::get_option( 'rock', 'facebook_menu' ) == 1 ) { ?>
						<li><a href="<?php echo $wpseo_social['facebook_site']; ?>"><i class="fa fa-facebook"></i></a></li>
					
					<?php } if ( Kirki::get_option( 'rock', 'twitter_menu' ) == 1 ) { ?>
						<li><a href="https://twitter.com/<?php echo $wpseo_social['twitter_site']; ?>"><i class="fa fa-twitter"></i></a></li>
					
					<?php } if ( Kirki::get_option( 'rock', 'instagram_menu' ) == 1 ) { ?>
						<li><a href="<?php echo $wpseo_social['instagram_site']; ?>"><i class="fa fa-instagram"></i></a></li>
					
					<?php } if ( Kirki::get_option( 'rock', 'snapchat_menu' ) == 1 ) { ?>
						<li><a href="http://www.snapchat.com/add/<?php echo Kirki::get_option( 'rock', 'snapchat_username'); ?>"><i class="fa fa-snapchat fa-2x"></i></a></li>

					<?php } if ( Kirki::get_option( 'rock', 'linkedin_menu' ) == 1 ) { ?>
						<li><a href="<?php echo $wpseo_social['linkedin_site']; ?>"><i class="fa fa-linkedin"></i></a></li>
					
					<?php } if ( Kirki::get_option( 'rock', 'pinterest_menu' ) == 1 ) { ?>
						<li><a href="<?php echo $wpseo_social['pinterest_site']; ?>"><i class="fa fa-pinterest"></i></a></li>

					<?php } if ( Kirki::get_option( 'rock', 'google_plus_menu' ) == 1 ) { ?>
						<li><a href="<?php echo $wpseo_social['google_plus_site']; ?>"><i class="fa fa-google-plus"></i></a></li>

					<?php } if ( Kirki::get_option( 'rock', 'youtube_menu' ) == 1 ) { ?>
						<li><a href="<?php echo $wpseo_social['youtube_url']; ?>"><i class="fa fa-youtube-play"></i></a></li>
					
					<?php } if ( Kirki::get_option( 'rock', 'vimeo_menu' ) == 1 ) { ?>
						<li><a href="http://www.snapchat.com/add/<?php echo Kirki::get_option( 'rock', 'vimeo_url'); ?>"><i class="fa fa-vimeo"></i></a></li>
					
					<?php } ?>
				</ul>

			</nav>

		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
