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








Kirki::add_section( 'test', array(
    'title'          => __( 'Test' ),
    'description'    => __( 'Add custom CSS here' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


Kirki::add_config( 'rock', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'option',
    'option_name'   => 'rock',
) );

Kirki::add_field( 'rock', array(
    'settings' => 'new-class',
    'label'    => __( 'My custom control', 'rock' ),
    'section'  => 'test',
    'type'     => 'text',
    'priority' => 10,
    'default'  => 'ryan',
) );


Kirki::add_field( 'rock', array(
    'settings' => 'new-checkbox',
    'label'    => __( 'My checkbox', 'rock' ),
    'section'  => 'test',
    'type'     => 'checkbox',
    'priority' => 13,
    'default'  => '1',
) );



Kirki::add_field( '', array(
    'type'        => 'custom',
    'settings'    => 'custom_demo',
    'label'       => __( 'This is the label', 'kirki' ),
    'description' => __( 'This is the control description', 'kirki' ),
    'section'     => 'test',
    'priority'    => 12,
) );

