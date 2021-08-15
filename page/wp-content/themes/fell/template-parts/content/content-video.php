<?php
/**
 * Template for displaying video content
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

  <section class="entry-content">
    <?php
    $fell_video_content = apply_filters( 'the_content', get_the_content() );
    $fell_video         = null;

    // Only get video from the content if a playlist isn't present.
    if ( false === strpos( $fell_video_content, 'wp-playlist-script' ) ) {
      $fell_video = get_media_embedded_in_content( $fell_video_content, array( 'video', 'object', 'embed', 'iframe' ) );
    }

    if ( ! empty( $fell_video ) ) {
      foreach ( $fell_video as $fell_video_html ) {
        echo $fell_video_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      }
    }
    ?>
  </section><!-- .entry-content -->

</article>
