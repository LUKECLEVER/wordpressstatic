<?php
/**
 * Template for displaying post header, content and footer
 *
 * @package Fell
 * @since   Fell 2.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <?php if ( is_sticky() && is_home() ) : ?>
      <i class="fif fif-pin"></i>
    <?php endif; ?>

    <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
    <?php fell_entry_meta_header(); ?>
    <?php edit_post_link(); ?>
  </header>

  <?php the_post_thumbnail(); ?>

  <section class="entry-content">
    <?php
    if ( 'excerpt' === get_theme_mod( 'content_view', 'excerpt' ) ) {
      the_excerpt();
    } else {
      the_content();
    }
    ?>
  </section><!-- .entry-content -->

</article>
