<?php
/**
 * Template part for social media menu.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rock
 */

?>


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