<?php
/**
 * Theme customizer file
 *
 * @package Fell
 * @since   Fell 1.0
 */

/**
 * Customize register
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function fell_customize_register( $wp_customize ) {

  /* Background color 2 */
  $wp_customize->add_setting(
    'color_bg_alt',
    array(
      'default'           => '#202020',
      'sanitize_callback' => 'sanitize_hex_color',
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      'color_bg_alt',
      array(
        'label'   => __( 'Background Color 2', 'fell' ),
        'section' => 'colors',
      )
    )
  );

  /* Text color */
  $wp_customize->add_setting(
    'color_text',
    array(
      'default'           => '#666666',
      'sanitize_callback' => 'sanitize_hex_color',
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      'color_text',
      array(
        'label'   => __( 'Text Color', 'fell' ),
        'section' => 'colors',
      )
    )
  );

  /* Text color 2 */
  $wp_customize->add_setting(
    'color_text_alt',
    array(
      'default'           => '#FFFFFF',
      'sanitize_callback' => 'sanitize_hex_color',
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      'color_text_alt',
      array(
        'label'   => __( 'Text Color 2', 'fell' ),
        'section' => 'colors',
      )
    )
  );

  /* Link color */
  $wp_customize->add_setting(
    'color_anchor',
    array(
      'default'           => '#1E73BE',
      'sanitize_callback' => 'sanitize_hex_color',
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      'color_anchor',
      array(
        'label'   => __( 'Links', 'fell' ),
        'section' => 'colors',
      )
    )
  );

  /* Theme options */
  $wp_customize->add_section(
    'theme_options',
    array(
      'title'    => __( 'Theme Options', 'fell' ),
      'priority' => 80,
    )
  );

  /* Content layout */
  $wp_customize->add_setting(
    'content_layout',
    array(
      'capability'        => 'edit_theme_options',
      'sanitize_callback' => 'fell_sanitize_select',
      'default'           => 'one-column',
    )
  );

  $wp_customize->add_control(
    'content_layout',
    array(
      'type'    => 'select',
      'section' => 'theme_options',
      'label'   => __( 'Content layout', 'fell' ),
      'choices' => array(
        'one-column'  => __( 'One column', 'fell' ),
        'two-columns' => __( 'Two columns', 'fell' ),
        'criss-cross' => __( 'Criss cross', 'fell' ),
      ),
    )
  );

  /* Content view */
  $wp_customize->add_setting(
    'content_view',
    array(
      'capability'        => 'edit_theme_options',
      'sanitize_callback' => 'fell_sanitize_select',
      'default'           => 'excerpt',
    )
  );

  $wp_customize->add_control(
    'content_view',
    array(
      'type'    => 'select',
      'section' => 'theme_options',
      'label'   => __( 'Content view', 'fell' ),
      'choices' => array(
        'excerpt' => __( 'Excerpt', 'fell' ),
        'full'    => __( 'Full', 'fell' ),
      ),
    )
  );

  /* Author bio */
  $wp_customize->add_setting(
    'display_author_bio',
    array(
      'default'           => true,
      'sanitize_callback' => 'fell_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'display_author_bio',
    array(
      'label'   => __( 'Display author bio under posts', 'fell' ),
      'section' => 'theme_options',
      'type'    => 'checkbox',
    )
  );

  /* Fixed header menu */
  $wp_customize->add_setting(
    'fixed_header_menu',
    array(
      'default'           => false,
      'sanitize_callback' => 'fell_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'fixed_header_menu',
    array(
      'label'   => __( 'Fixed header menu', 'fell' ),
      'section' => 'theme_options',
      'type'    => 'checkbox',
    )
  );

  /* Footer */
  $wp_customize->add_section(
    'footer',
    array(
      'title'    => __( 'Footer', 'fell' ),
      'priority' => 110,
    )
  );

  /* Footer: copyright text */
  $wp_customize->add_setting(
    'footer_text',
    array(
      'default'           => get_bloginfo( 'name' ),
      'sanitize_callback' => 'sanitize_text_field',
    )
  );

  $wp_customize->add_control(
    'footer_text',
    array(
      'label'   => __( 'Footer text', 'fell' ),
      'section' => 'footer',
      'type'    => 'text',
    )
  );

  /* Footer: copyright icon */
  $wp_customize->add_setting(
    'footer_copyright',
    array(
      'default'           => true,
      'sanitize_callback' => 'fell_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'footer_copyright',
    array(
      'label'   => __( 'Display Copyright icon', 'fell' ),
      'section' => 'footer',
      'type'    => 'checkbox',
    )
  );

  /* Footer: copyright year */
  $wp_customize->add_setting(
    'footer_year',
    array(
      'default'           => true,
      'sanitize_callback' => 'fell_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'footer_year',
    array(
      'label'   => __( 'Display current year', 'fell' ),
      'section' => 'footer',
      'type'    => 'checkbox',
    )
  );

  /* Footer: Advertise WordPress */
  $wp_customize->add_setting(
    'footer_wordpress',
    array(
      'default'           => true,
      'sanitize_callback' => 'fell_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'footer_wordpress',
    array(
      'label'   => __( 'Advertise WordPress', 'fell' ),
      'section' => 'footer',
      'type'    => 'checkbox',
    )
  );

  /* Footer: Advertise theme */
  $wp_customize->add_setting(
    'footer_theme',
    array(
      'default'           => true,
      'sanitize_callback' => 'fell_sanitize_checkbox',
    )
  );

  $wp_customize->add_control(
    'footer_theme',
    array(
      'label'   => __( 'Advertise theme', 'fell' ),
      'section' => 'footer',
      'type'    => 'checkbox',
    )
  );

}
add_action( 'customize_register', 'fell_customize_register' );

/**
 * Sanitize select elements
 *
 * @param boolean $input   Checkbox status.
 * @param array   $setting Options.
 */
function fell_sanitize_select( $input, $setting ) {
  /* Ensure input is a slug */
  $input = sanitize_key( $input );

  /* Get list of choices from the control associated with the setting */
  $choices = $setting->manager->get_control( $setting->id )->choices;

  /* If the input is a valid key, return it; otherwise, return the default */
  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

/**
 * Sanitize checkbox elements
 *
 * @param boolean $input Checkbox status.
 */
function fell_sanitize_checkbox( $input ) {
  /* Boolean check */
  return ( true === $input && isset( $input ) ? true : false );
}


