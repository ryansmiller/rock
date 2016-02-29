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
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
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




/**
 * Panels and Sections: Header
*/

Kirki::add_panel( 'header', array(
    'priority'    => 10,
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



