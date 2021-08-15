<?php
/**
 * Widget areas
 *
 * @package Fell
 * @since   Fell 1.0
 */

/**
 * The widgets_init action
 */
function fell_widgets_init() {

  register_sidebar(
    array(
      'name'          => __( 'Above content (left column)', 'fell' ),
      'id'            => 'above-content-one',
      'description'   => __( 'Widget area above the content, left column', 'fell' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Above content (center column)', 'fell' ),
      'id'            => 'above-content-two',
      'description'   => __( 'Widget area above the content, center column', 'fell' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Above content (right column)', 'fell' ),
      'id'            => 'above-content-three',
      'description'   => __( 'Widget area above the content, right column', 'fell' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Left sidebar', 'fell' ),
      'id'            => 'left-sidebar',
      'description'   => __( 'Widget area on the left side of the content', 'fell' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Right sidebar', 'fell' ),
      'id'            => 'right-sidebar',
      'description'   => __( 'Widget area on the right side of the content', 'fell' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Below content (left column)', 'fell' ),
      'id'            => 'below-content-one',
      'description'   => __( 'Widget area below the content, left column', 'fell' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Below content (center column)', 'fell' ),
      'id'            => 'below-content-two',
      'description'   => __( 'Widget area below the content, center column', 'fell' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Below content (right column)', 'fell' ),
      'id'            => 'below-content-three',
      'description'   => __( 'Widget area below the content, right column', 'fell' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Footer (left column)', 'fell' ),
      'id'            => 'footer-one',
      'description'   => __( 'Widget area in the footer, left column', 'fell' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Footer (center column)', 'fell' ),
      'id'            => 'footer-two',
      'description'   => __( 'Widget area in the footer, center column', 'fell' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Footer (right column)', 'fell' ),
      'id'            => 'footer-three',
      'description'   => __( 'Widget area in the footer, right column', 'fell' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

}
add_action( 'widgets_init', 'fell_widgets_init' );
