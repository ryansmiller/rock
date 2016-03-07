<?php
/**
 * Template part for primary navigation.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rock
 */

?>


<nav id="nav-primary" class="collapse navbar-collapse navbar-align-<?php echo get_theme_mod( 'nav_primary_align' ); ?>" role="navigation" itemscope="" itemtype="https://schema.org/SiteNavigationElement">

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