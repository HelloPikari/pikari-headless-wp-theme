<?php
/**
 * All core theme actions registrations.
 *
 */

 /* -------------------------------------------------------------------------- *\
    Setup Theme
\* -------------------------------------------------------------------------- */


/* -------------------------------------------------------------------------- *\
    After Setup Theme
\* -------------------------------------------------------------------------- */
add_action( 'after_setup_theme', 'pikari_theme_support');



/* -------------------------------------------------------------------------- *\
    After Switch Theme
\* -------------------------------------------------------------------------- */
//add_action( 'after_switch_theme', 'pikari_default_image_sizes' );


/* -------------------------------------------------------------------------- *\
    Init
\* -------------------------------------------------------------------------- */
add_action('init', 'pikari_register_menus');


/* -------------------------------------------------------------------------- *\
    Widgets Init
\* -------------------------------------------------------------------------- */
//Register Widget Areas
//add_action( 'widgets_init', 'pikari_register_sidebar_areas' );

//Remove some defaults widgets
//add_action( 'widgets_init', 'pikari_unregister_default_widgets' );

/* -------------------------------------------------------------------------- *\
    ACF Init
\* -------------------------------------------------------------------------- */
add_action( 'acf/init', 'pikari_register_acf_options_pages' );
add_action( 'acf/init', 'pikari_register_acf_fields' );


/* -------------------------------------------------------------------------- *\
    Modify Main Query
\* -------------------------------------------------------------------------- */
//add_action( 'pre_get_posts', 'alter_query_with_conditional_tags' );


/* -------------------------------------------------------------------------- *\
    WP Head
\* -------------------------------------------------------------------------- */
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'rel_canonical');
//REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

//add_action( 'wp_head', 'pikari_add_favicon' ); //Add Favicon




/* -------------------------------------------------------------------------- */
/* -------------------------- THEME SPECIFIC -------------------------------- */
/* -------------------------------------------------------------------------- */

/**
 * Body
 *
 */
add_action( 'pikari_admin_init', 'add_admin_menu_separator' );


/**
 * Body
 *
 * Available hooks: pikari_body_start, pikari_body_end
 */
//add_action( 'pikari_body_start', 'pikari_skip_to_content' );
//add_action( 'pikari_body_start', 'pikari_navbar_primary' );


 /**
 * Main Site Container
 *
 * Available hooks: pikari_site_start, pikari_site_end
 */
//add_action( 'pikari_site_start', 'pikari_get_page_header', 15 );
//add_action( 'pikari_site_start', 'pikari_open_page_layout_container', 16 );

//add_action( 'pikari_site_end', 'pikari_close_page_layout_container', 16 );


/**
 * Main Site Footer
 */
//add_action( 'pikari_site_footer', 'pikari_newsletter_subscribe', 10 );
//add_action( 'pikari_site_footer', 'pikari_footer_widgets', 11 );



/**
 * Pages
*/
//add_action( 'pikari_page_before', $function_to_add );
//add_action( 'pikari_page_start', $function_to_add );
//add_action( 'pikari_page_end', $function_to_add );
//add_action( 'pikari_page_after', $function_to_add );

/**
 * Archives
 */
//add_action( 'pikari_archive_loop_end', 'pikari_posts_load_more', 10);


/**
 * Posts
 */
//add_action( 'save_post', 'pikari_update_post_reading_time', 10, 3 );
//add_action( 'pikari_site_end', 'pikari_after_post_copy', 17 );
//add_action( 'pikari_site_end', 'pikari_after_post_list', 18 );



// add_filter( 'wpforms_frontend_form_data', function($form) {
//     $test = $form;

//     // Only run on my form with ID = 7785
// 	if( 4393 != $form['id'] )
//         return $fields;

//     foreach ($data['fields'] as $key => $field) {
//         if ($field['type'] == 'text') {
//             $data['fields'][$key]['label'] = "Fuck ya";
//         }
//     }
//     return $data;
// }, 10, 3 );