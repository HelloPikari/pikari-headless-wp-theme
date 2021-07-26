<?php
/**
 * Unregister Default Widgets
 */
if ( ! function_exists( 'pikari_unregister_default_widgets' ) ) :
  function pikari_unregister_default_widgets() {
    unregister_widget( 'WP_Widget_Calendar' );
    unregister_widget( 'WP_Widget_Links' );
    unregister_widget( 'WP_Widget_Meta' );
    unregister_widget( 'WP_Widget_Search' );
    unregister_widget( 'WP_Widget_Recent_Comments' );
    unregister_widget( 'WP_Widget_RSS' );
    unregister_widget( 'WP_Widget_Tag_Cloud' );
    unregister_widget( 'Twenty_Eleven_Ephemera_Widget' );
  }
endif;
