<?php
/* -------------------------------------------------------------------------- *\
    Advanced Custom Fields Option Pages
\* -------------------------------------------------------------------------- */
if ( ! function_exists( 'pikari_register_acf_options_pages' ) ) :
  function pikari_register_acf_options_pages() {

    // check function exists
    if ( ! function_exists( 'acf_add_options_page' ) ) {
        return;
    }

    $theme_options_page = acf_add_options_page(
      array(
        'page_title' => 'Theme Settings',
        'menu_slug' => 'theme-settings',
        'menu_title' => 'Theme Settings',
        'capability' => 'edit_posts',
        'show_in_graphql' => true,
        'position' => 8,
        'parent_slug' => 'options-general.php',
        'icon_url' => '',
        'redirect' => true,
        'post_id' => 'options',
        'autoload' => false,
        'update_button' => 'Update',
        'updated_message' => 'Options Updated',
      )
    );

  };

endif;