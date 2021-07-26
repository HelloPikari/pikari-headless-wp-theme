<?php
/**
 * Register Widget Areas
 */
if ( ! function_exists( 'pikari_register_sidebar_areas' ) ) :
  function pikari_register_sidebar_areas() {

    // Arguments used in all register_sidebar() calls.
    $shared_args = [
      'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
      'after_title'   => '</h2>',
      'before_widget' => '<aside class="widget %2$s"><div class="widget-content">',
      'after_widget'  => '</div></aside>',
    ];

    // Blog Sidebar
    register_sidebar(
      array_merge(
        $shared_args,
        [
          'name'          => __( 'Blog Sidebar', 'pikari' ),
          'id'            => 'pikari-sidebar-blog',
          'description'   => __( 'Widgets for Blog Sidebar.', 'pikari' ),
        ]
      )
    );

    // Parent Handbook Sidebar
    register_sidebar(
      array_merge(
        $shared_args,
        [
          'name'          => __( 'Parent Handbook Sidebar', 'pikari' ),
          'id'            => 'pikari-sidebar-parent-handbook',
          'description'   => __( 'Widgets for Parent Handbook Sidebar.', 'pikari' ),
        ]
      )
    );

    // Footer
    register_sidebars(
      3, array(
        'name'          => esc_html__( 'Footer Sidebar %d', 'pikari' ),
        'id'            => 'pikari-sidebar-footer',
        'before_widget' => '<div class="widget %1$s %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="title-block title-widget">',
        'after_title'   => '</h5>',
      )
    );
  }
endif;