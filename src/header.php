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

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<div id="page" class="site">
	

	<style type="text/css">

	
/*
	#masthead {
		box-sizing: border-box;

	}


	.site-title {
		width: 300px;
		position: relative;
		left: 50%; 
	    -webkit-transform: translate(-50%,0);
	    -moz-transform: translate(-50%,0);
	    -ms-transform: translate(-50%,0);
	    -o-transform: translate(-50%,0);
	     transform: translate(-50%,0);
		text-align: center;
		z-index: 1001;
		box-sizing: border-box;
		display: block;
		vertical-align: middle;
		line-height: 1em;
		font-size: 20px;
	}


	.navbar-nav {
		float: none !important;
		text-align: center;
		vertical-align: middle;
		margin: -50px;
		margin-left: 30px;
		margin-right: 30px;
	}

	.navbar-nav>li {
		display: inline-block;
		float: none !important;
	}

	.navbar-nav>li:nth-child(3) {
		margin-right: 180px;
	}

	.navbar-nav>li:nth-child(4) {
		margin-left: 180px;
	}

	.site-nav-wrapper {
		margin: 20px 30px;
	}
	*/

	.navbar-one-row-align-left
	.navbar-one-row-align-left-right
	.navbar-one-row-align-right
	.navbar-one-row-align-center
	.navbar-one-row-align-center-left-right
	.navbar-two-row-align-left
	.navbar-two-row-align-center

	.navbar-static
	.navbar-fixed

	.navbar-background-white
	.navbar-background-black
	.navbar-background-color

	.navbar-background-transparent

	.navbar-background-opacity


	</style>

	<header id="masthead" class="navbar navbar-<?php echo Kirki::get_option( 'rock', 'header_layout' ); ?> navbar-<?php echo Kirki::get_option( 'rock', 'header_position' ); ?> navbar-<?php echo Kirki::get_option( 'rock', 'header_color' ); ?>" role="banner" itemscope itemtype="https://schema.org/WPHeader">

		<div class="<?php echo Kirki::get_option( 'rock', 'header_container' ); ?>">
		
			<h1 class="site-title" itemscope itemtype="https://schema.org/Organization"><a title="<?php bloginfo( 'name' ); ?> home page" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span itemprop="name"><?php bloginfo( 'name' ); ?></span></a></h1>

			<nav id="nav-primary" class="navbar" role="navigation" itemscope="" itemtype="https://schema.org/SiteNavigationElement">

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

			</nav>

		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
