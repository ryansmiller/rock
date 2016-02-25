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

<body <?php body_class(); ?>>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<div id="page" class="site">
	

	<style type="text/css">

	#masthead {
		box-sizing: border-box;

	}


	.site-title {
		width: 255px;
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
	}



	</style>

	<header id="masthead" class="navbar navbar-static-top" role="banner" itemscope itemtype="https://schema.org/WPHeader">

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

		</nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
