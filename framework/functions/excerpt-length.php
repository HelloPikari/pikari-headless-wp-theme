<?php
if ( ! function_exists( 'pikari_excerpt_length' ) ) :
  /**
   * Excerpt Length
   *
   * @param string $length of the excerpt.
   */
  function pikari_excerpt_length( $length ) {
    return 80;
  }
endif;




if ( ! function_exists( 'pikari_latest_post_excerpt_length' ) ) :
  /**
   * Excerpt Length
   *
   * @param string $length of the excerpt.
   */
  function pikari_latest_post_excerpt_length( $length ) {
    return 60;
  }
endif;

?>