<?php
/**
 * Entry meta footer
 *
 * @package Fell
 * @since   Fell 2.0
 */

/**
 * Entry meta header
 */
function fell_entry_meta_footer() {

  echo '<div class="entry-meta entry-meta-footer">';

  /* Categories */
  if ( has_category() ) : ?>
    <div class="entry-meta__categories">
      <i class="fif fif-folder"></i>
      <?php the_category( ', ' ); ?>
    </div><!-- .entry-meta__categories -->
    <?php
  endif;

  /* Tags */
  if ( has_tag() ) :
    ?>
  <div class="entry-meta__tags">
    <i class="fif fif-tag"></i>
    <?php the_tags( '', ', ' ); ?>
  </div><!-- .entry-meta__tags -->
    <?php
  endif;

  echo '</div><!-- .entry-meta-footer -->';

}
