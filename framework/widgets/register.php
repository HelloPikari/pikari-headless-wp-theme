<?php
/**
 * Register Widget Areas
 */
if ( ! function_exists( 'register_pikari_widget_areas' ) ) :
function register_pikari_widget_areas() {

  // Main Sidebar
  register_sidebar( array(
    'name'          => __( 'Blog Sidebar', 'pikari' ),
    'id'            => 'sidebar-blog',
    'description'   => __( 'Widgets for Blog Sidebar.', 'pikari' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<div class="widget-title"><h5 class="sep">',
    'after_title'   => '</h5>' . do_shortcode("[media_library id=3526 class='widget-6']") .'</div>'
  ) );

  // Mega Menu
  register_sidebars(
    3, array(
      'name'          => esc_html__( 'Mega Menu %d', 'pikari' ),
      'id'            => 'sidebar-megamenu',
      'before_widget' => '<div class="widget %1$s %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="title-block title-widget">',
      'after_title'   => '</h5>',
    )
  );

  // Footer
  register_sidebars(
    3, array(
      'name'          => esc_html__( 'Footer Sidebar %d', 'pikari' ),
      'id'            => 'sidebar-footer',
      'before_widget' => '<div class="widget %1$s %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="title-block title-widget">',
      'after_title'   => '</h5>',
    )
  );
}
endif;


/**
 * Unregister Widget Areas
 */
if ( ! function_exists( 'unregister_default_widgets' ) ) :
function unregister_default_widgets() {
  //unregister_widget( 'WP_Widget_Pages' );
  unregister_widget( 'WP_Widget_Calendar' );
  //unregister_widget( 'WP_Widget_Archives' );
  unregister_widget( 'WP_Widget_Links' );
  unregister_widget( 'WP_Widget_Meta' );
  unregister_widget( 'WP_Widget_Search' );
  //unregister_widget( 'WP_Widget_Text' );
  //unregister_widget( 'WP_Widget_Categories' );
  //unregister_widget( 'WP_Widget_Recent_Posts' );
  unregister_widget( 'WP_Widget_Recent_Comments' );
  unregister_widget( 'WP_Widget_RSS' );
  unregister_widget( 'WP_Widget_Tag_Cloud' );
  //unregister_widget( 'WP_Nav_Menu_Widget' );
  unregister_widget( 'Twenty_Eleven_Ephemera_Widget' );
}
endif;
