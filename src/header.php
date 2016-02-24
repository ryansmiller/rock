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
<div id="page" class="site">
	

	<style type="text/css">

	#masthead {
		box-sizing: border-box;

	}

	.site-branding {
		padding: 30px 0;
		width: 100%;
	}

	#siteTitleWrapper {
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

	nav li{
display: inline-block;
padding: 40px 30px 40px 0;
}

nav li:nth-child(3) {
padding-right: 80px;
}

nav li:nth-child(4) {
padding-left: 80px;
}

	</style>

	<header id="masthead" class="navbar navbar-static-top" role="banner">
		<div class="site-branding">

		
			<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

			<div id="siteTitleWrapper" class="title-logo-wrapper" data-content-field="site-title">
            
            
            
          
			<h1 class="site-title" itemscope itemtype="http://schema.org/Organization"><a title="<?php bloginfo( 'name' ); ?> home page" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			</div>


			<nav id="site-navigation" class="global-nav deluxe" role="navigation" itemscope="" itemtype="http://schema.org/SiteNavigationElement">

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

		

		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
