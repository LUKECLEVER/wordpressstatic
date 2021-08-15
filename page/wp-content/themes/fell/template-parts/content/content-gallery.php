<?php
/**
 * Template for displaying content
 *
 * @package Fell
 * @since   Fell 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
    <?php fell_entry_meta_header(); ?>
    <?php edit_post_link(); ?>
  </header>

  <?php the_post_thumbnail(); ?>

  <section class="entry-content">
    <?php
    $fell_gallery = get_post_gallery();

    if ( $fell_gallery ) {
      echo $fell_gallery; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    } else {
      the_content();
    }
    ?>
  </section><!-- .entry-content -->

</article>
