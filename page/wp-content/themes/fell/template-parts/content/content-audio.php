<?php
/**
 * Template for displaying audio content
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
    $fell_audio_content = apply_filters( 'the_content', get_the_content() );
    $fell_audio         = null;

    // Only get video from the content if a playlist isn't present.
    if ( false === strpos( $fell_audio_content, 'wp-playlist-script' ) ) {
      $fell_audio = get_media_embedded_in_content( $fell_audio_content, array( 'audio' ) );
    }

    if ( ! empty( $fell_audio ) ) {
      foreach ( $fell_audio as $fell_audio_html ) {
        echo $fell_audio_html;  // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      }
    } else {
      the_content();
    }
    ?>
  </section><!-- .entry-content -->

</article>
