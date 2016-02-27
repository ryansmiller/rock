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


Kirki::add_section( 'header_layout', array(
    'title'          => __( 'Header Layout' ),
    'description'    => __( 'The layout structure of your site header.' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

/**
 * Fields: Header
*/


Kirki::add_field( 'rock', array(
    'type'        => 'radio',
    'settings'    => 'header_layout',
    'label'       => __( 'Header Layout', 'rock' ),
    'description' => __( 'Basic layouts for site header.', 'rock' ),
    'section'     => 'header_layout',
    'default'     => 'one-row-align-left',
    'priority'    => 10,
    'choices'     => array(
        'one-row-align-left'   		=> __( 'One Row / Align Left', 'rock' ),
        'one-row-align-left-right' 	=> __( 'One Row / Align Left and Right', 'rock' ),
        'one-row-align-right'  		=> __( 'One Row / Align Right', 'rock' ),
        'one-row-align-center'		=> __( 'One Row / Align Center', 'rock' ),
        'one-row-align-center-left-right'	=> __( 'One Row / Align Center, Left, and Right', 'rock' ),
        'two-row-align-left'		=> __( 'Two Row / Align Left', 'rock' ),
        'two-row-align-center'		=> __( 'Two Row / Align Center', 'rock' ),
    ),
) );

Kirki::add_field( 'rock', array(
    'type'        => 'radio',
    'settings'    => 'header_position',
    'label'       => __( 'Header Position', 'rock' ),
    'description' => __( 'Either static or fixed positioning.', 'rock' ),
    'section'     => 'header_layout',
    'default'     => 'static',
    'priority'    => 20,
    'choices'     => array(
        'static-top'   	=> __( 'Static', 'rock' ),
        'fixed-top' 		=> __( 'Fixed', 'rock' ),
    ),
) );









Kirki::add_field( 'rock', array(
    'settings' => 'new-class',
    'label'    => __( 'My custom control', 'rock' ),
    'section'  => 'test',
    'type'     => 'text',
    'priority' => 10,
    'default'  => 'ryan',
) );

Kirki::add_field( '', array(
    'type'        => 'custom',
    'settings'    => 'custom_demo',
    'label'       => __( 'This is the label', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    'default'	  => __( '<img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" />', 'kirki' ),
    'section'     => 'test',
    'priority'    => 12,
) );

Kirki::add_field( 'rock', array(
    'settings' => 'new-checkbox',
    'label'    => __( 'My checkbox', 'rock' ),
    'section'  => 'test',
    'type'     => 'checkbox',
    'priority' => 13,
    'default'  => '1',
) );





