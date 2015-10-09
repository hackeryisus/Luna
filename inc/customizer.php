<?php
/**
 * luna Theme Customizer
 *
 * @package Luna
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function luna_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section( 'luna_front_options', array(
		'priority' 			=> 130,
		'capability' 		=> 'edit_theme_options',
		'theme_supports'	=> '',
		'title' 			=> __( 'Theme Options', 'luna' ),
		'description' 		=> __( 'Front Page Portfolio section settings', 'luna' ),
	) );

	$wp_customize->add_setting( 'luna_front_portfolio', array(
		'default'           => '1',
		'sanitize_callback' => 'luna_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'luna_front_portfolio', array(
		'label'             => __( 'Show Portfolio Section', 'luna' ),
		'section'           => 'luna_front_options',
		'type'              => 'checkbox',
	) );

	$wp_customize->add_setting( 'luna_front_portfoliotitle', array(
		'default'           => 'Recent Projects',
		'sanitize_callback' => 'luna_sanitize_text',
	) );

	$wp_customize->add_control( 'luna_front_portfoliotitle', array(
		'label'             => __( 'Portfolio Section Title', 'luna' ),
		'section'          	=> 'luna_front_options',
		'type'              => 'text',
	) );

	$wp_customize->add_setting( 'luna_front_portfolio_number', array(
		'default'           => '3',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 'luna_front_portfolio_number', array(
		'label'             => __( 'Number of Projects to display', 'luna' ),
		'section'          	=> 'luna_front_options',
		'type'              => 'select',
			'choices' 		=> array(
				'3'	=> '3',
				'6'	=> '6',
				'9' => '9',
			),
	) );
}
add_action( 'customize_register', 'luna_customize_register' );

/**
 * Sanitize the checkbox.
 *
 * @param boolean $input.
 * @return boolean (true|false).
 */
function luna_sanitize_checkbox( $input ) {
	if ( 1 == $input ) {
		return true;
	} else {
		return false;
	}
}

/**
 * Sanitize text
 */
function luna_sanitize_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function luna_customize_preview_js() {
	wp_enqueue_script( 'luna_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'luna_customize_preview_js' );
