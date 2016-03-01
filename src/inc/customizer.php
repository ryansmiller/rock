<?php
/**
 * Rock Theme Customizer.
 *
 * @package Rock
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function rock_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )
        -> transport    = 'postMessage';
	
    $wp_customize->get_setting( 'blogdescription' )
        -> transport    = 'postMessage';
	
    $wp_customize->get_setting( 'header_textcolor' )
        -> transport    = 'postMessage';
    
    $wp_customize->get_section( 'title_tagline' )
        -> title        = 'Logo &amp; Title';
    
    $wp_customize->get_section( 'title_tagline' )
        -> priority     = 10;
    
    $wp_customize->remove_control( 'blogname' );
    $wp_customize->remove_control( 'blogdescription' );
    $wp_customize->remove_control( 'display_header_text' );
}
add_action( 'customize_register', 'rock_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function rock_customize_preview_js() {
	wp_enqueue_script( 'rock_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'rock_customize_preview_js' );





Kirki::add_config( 'rock', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'option',
    'option_name'   => 'rock',
) );


Kirki::add_config( 'wpseo_social', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'option',
    'option_name'   => 'wpseo_social',
) );







/**
 * Panels and Sections: Header
*/

Kirki::add_panel( 'header', array(
    'priority'    => 30,
    'title'       => __( 'Header', 'textdomain' ),
    'description' => __( 'Settings for site header.', 'textdomain' ),
) );

Kirki::add_section( 'header_layout', array(
    'title'          => __( 'Header Layout' ),
    'description'    => __( 'The layout structure of your site header.' ),
    'panel'          => 'header', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'header_colors', array(
    'title'          => __( 'Header Colors' ),
    'description'    => __( 'The colors of your site header.' ),
    'panel'          => 'header', // Not typically needed.
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_section( 'header_spacing', array(
    'title'          => __( 'Header Spacing' ),
    'description'    => __( 'The spacing of your site header.' ),
    'panel'          => 'header', // Not typically needed.
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

/**
 * Panels and Sections: Social Media
*/



Kirki::add_section( 'social_media', array(
    'title'          => __( 'Social Media' ),
    'description'    => __( 'Links to social media accounts.' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );




/**
 * Fields: Title &amp; Logo
*/


Kirki::add_field( 'rock', array(
    'type'        => 'text',
    'settings'    => 'blogname',
    'label'       => __( 'Site Title', 'rock' ),
    'description' => __( 'The Site Title is used wherever the title of the site appears.', 'rock' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'priority'    => 10,
) );


Kirki::add_field( 'rock', array(
    'type'        => 'text',
    'settings'    => 'blogdescription',
    'label'       => __( 'Tagline', 'rock' ),
    'description' => __( 'The Tagline is used on some templates where applicable.', 'rock' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'priority'    => 20,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'image',
    'settings'    => 'logo_image',
    'label'       => __( 'Logo Image', 'rock' ),
    'description' => __( 'Upload a logo image to be used in the place of your site title.', 'rock' ),
    'section'     => 'title_tagline',
    'default'     => '',
    'priority'    => 30,
) );

/**
 * Fields: Header
*/



Kirki::add_field( 'rock', array(
    'type'        => 'radio',
    'settings'    => 'header_container',
    'label'       => __( 'Header Container', 'rock' ),
    'description' => __( 'Responsive fixed width or full-width container.', 'rock' ),
    'section'     => 'header_layout',
    'default'     => 'container',
    'priority'    => 10,
    'choices'     => array(
        'container'   		=> __( 'Responsive Fixed Container', 'rock' ),
        'container-fluid' 	=> __( 'Full-width Container', 'rock' ),
        
    ),
) );



Kirki::add_field( 'rock', array(
    'type'        => 'radio',
    'settings'    => 'header_layout',
    'label'       => __( 'Header Layout', 'rock' ),
    'description' => __( 'Basic layouts for site header.', 'rock' ),
    'section'     => 'header_layout',
    'default'     => 'one-row-align-left',
    'priority'    => 12,
    'choices'     => array(
        'one-row-align-left'   		=> __( 'One Row / Align Left', 'rock' ),
        'one-row-align-left-right' 	=> __( 'One Row / Align Left and Right', 'rock' ),
        'one-row-align-right'  		=> __( 'One Row / Align Right', 'rock' ),
        'one-row-align-center'		=> __( 'One Row / Align Center', 'rock' ),
        'one-row-align-center-left-right'	=> __( 'One Row / Align Center, Left, and Right', 'rock' ),
        'two-row-align-left'		=> __( 'Two Row / Align Left', 'rock' ),
        'two-row-align-left-right'  => __( 'Two Row / Align Left and Right', 'rock' ),
        'two-row-align-center'		=> __( 'Two Row / Align Center', 'rock' ),
    ),
) );

Kirki::add_field( 'rock', array(
    'type'        => 'radio',
    'settings'    => 'header_position',
    'label'       => __( 'Header Position', 'rock' ),
    'description' => __( 'Either static or fixed positioning.', 'rock' ),
    'section'     => 'header_layout',
    'default'     => 'static-top',
    'priority'    => 20,
    'choices'     => array(
        'static-top'   	=> __( 'Static', 'rock' ),
        'fixed-top' 		=> __( 'Fixed', 'rock' ),
        'absolute-top'  => __( 'Absolute', 'rock' ),
    ),
) );



Kirki::add_field( 'rock', array(
    'type'        => 'radio',
    'settings'    => 'header_color',
    'label'       => __( 'Header Color', 'rock' ),
    'description' => __( 'Default, dark, or custom colors.', 'rock' ),
    'section'     => 'header_colors',
    'default'     => '255,255,255',
    'priority'    => 10,
    'choices'     => array(
        '255,255,255'     => __( 'White', 'rock' ),
        '0,0,0' 		  => __( 'Black', 'rock' ),
        'transparent'       => __( 'Transparent', 'rock'),
    ),
) );

Kirki::add_field( 'rock', array(
    'type'        => 'radio',
    'settings'    => 'header_link_color',
    'label'       => __( 'Header Link Color', 'rock' ),
    'description' => __( 'White or Black.', 'rock' ),
    'section'     => 'header_colors',
    'default'     => 'link-white',
    'priority'    => 20,
    'choices'     => array(
        'link-white'     => __( 'White', 'rock' ),
        'link-black'     => __( 'Black', 'rock' ),
    ),
) );

Kirki::add_field( 'rock', array(
    'type'        => 'slider',
    'settings'    => 'header_opacity',
    'label'       => __( 'Header Opacity', 'rock' ),
    'description' => __( 'The level of transparency for the background color. 100 is fully opaque. 0 is fully transparent.', 'rock' ),
    'section'     => 'header_colors',
    'default'     => 1,
    'priority'    => 30,
    'choices'     => array(
        'min'    => 0,
        'max'    => 1,
        'step'   => 0.05,
    ),
    'required'  => array(
      array(
        'setting'  => 'header_color',
        'operator' => '!=',
        'value'    => 'transparent',
      ),
    ),
) );


Kirki::add_field( 'rock', array(
    'type'        => 'slider',
    'settings'    => 'header-padding',
    'label'       => __( 'Header Padding', 'rock' ),
    'section'     => 'header_spacing',
    'default'     => 0,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 0,
        'max'  => 100,
        'step' => 5,
    ),
) );

Kirki::add_field( 'rock', array(
    'type'        => 'slider',
    'settings'    => 'logo-height',
    'label'       => __( 'Logo Height', 'rock' ),
    'section'     => 'header_spacing',
    'default'     => 30,
    'priority'    => 20,
    'choices'     => array(
        'min'  => 20,
        'max'  => 100,
        'step' => 1,
    ),
) );


/**
 * Fields: Social Media
*/




Kirki::add_field( 'wpseo_social', array(
    'type'        => 'text',
    'settings'    => 'facebook_site',
    'label'       => __( 'Facebook URL', 'rock' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 20,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'facebook_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 21,
) );

Kirki::add_field( 'wpseo_social', array(
    'type'        => 'text',
    'settings'    => 'twitter_site',
    'label'       => __( 'Twitter Username', 'rock' ),
    'description' => __( 'The username (without @) for Twitter.', 'wpseo_social' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 30,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'twitter_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 31,
) );

Kirki::add_field( 'wpseo_social', array(
    'type'        => 'text',
    'settings'    => 'instagram_url',
    'label'       => __( 'Instagram URL', 'rock' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 40,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'instagram_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 41,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'text',
    'settings'    => 'snapchat_username',
    'label'       => __( 'Snapchat Username', 'rock' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 50,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'snapchat_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 51,
) );

Kirki::add_field( 'wpseo_social', array(
    'type'        => 'text',
    'settings'    => 'linkedin_url',
    'label'       => __( 'LinkedIn URL', 'rock' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 60,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'linkedin_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 61,
) );

Kirki::add_field( 'wpseo_social', array(
    'type'        => 'text',
    'settings'    => 'pinterest_url',
    'label'       => __( 'Pinterest URL', 'rock' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 70,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'pinterest_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 71,
) );

Kirki::add_field( 'wpseo_social', array(
    'type'        => 'text',
    'settings'    => 'google_plus_url',
    'label'       => __( 'Google+ URL', 'rock' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 80,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'google_plus_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 81,
) );

Kirki::add_field( 'wpseo_social', array(
    'type'        => 'text',
    'settings'    => 'youtube_url',
    'label'       => __( 'YouTube URL', 'rock' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 90,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'youtube_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 91,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'text',
    'settings'    => 'vimeo_url',
    'label'       => __( 'Vimeo URL', 'rock' ),
    'section'     => 'social_media',
    'default'     => '',
    'priority'    => 100,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'vimeo_menu',
    'label'       => __( 'Show in Social Menu', 'rock' ),
    'section'     => 'social_media',
    'default'     => '0',
    'priority'    => 101,
) );

/*
Kirki::add_field( 'rock', array(
    'type'        => 'custom',
    'settings'    => 'socia_media_menu',
    'label'       => __( 'Social Media Menu', 'rock' ),
    'description' => __( 'Display social links on site social media menu.', 'rock' ),
    'section'     => 'social_media',
    'priority'    => 100,
) );

Kirki::add_field( 'rock', array(
    'type'        => 'checkbox',
    'settings'    => 'facebook_menu',
    'label'       => __( 'Facebook', 'rock' ),
    'section'     => 'social_media',
    'default'     => '1',
    'priority'    => 110,
) );
*/

