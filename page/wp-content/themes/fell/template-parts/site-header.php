<?php
/**
 * Template part for displaying the site's main header
 *
 * @package Fell
 * @since   Fell 2.0
 */

?>

<header class="site-header">

  <div class="site-identity">

    <?php if ( is_front_page() && ! is_paged() ) : ?>
      <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1><!-- .site-title -->
    <?php elseif ( is_front_page() || is_home() ) : ?>
      <h1 class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
      </h1><!-- .site-title -->
    <?php else : ?>
      <p class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
      </p><!-- .site-title -->
    <?php endif; ?>

    <?php
    if ( function_exists( 'the_custom_logo' ) ) {
      the_custom_logo();
    }
    ?>

    <p class="site-tagline"><?php bloginfo( 'description' ); ?></p><!-- .site-tagline -->

  </div><!-- .site-identity -->

</header>
