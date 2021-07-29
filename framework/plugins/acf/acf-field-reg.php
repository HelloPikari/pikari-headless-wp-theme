<?php

/* -------------------------------------------------------------------------- *\
    Advanced Custom Fields – Field Registration
\* -------------------------------------------------------------------------- */
if ( ! function_exists( 'pikari_register_acf_fields' ) ) :
  function pikari_register_acf_fields() {

    // check function exists
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    $menu_fields_group = acf_add_local_field_group(
      array(
        'key' => 'group_5bcf8c434f08b',
        'title' => 'Nav Menu Item',
        'fields' => array(
          array(
            'key' => 'field_5bcf8c52659f0',
            'label' => 'Text after label',
            'name' => 'text_after_label',
            'type' => 'text',
            'instructions' => 'This text can be styled separately',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'show_in_graphql' => 1,
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_5bcf8c52659f1',
            'label' => 'Link to page anchor',
            'name' => 'link_anchor',
            'type' => 'text',
            'instructions' => 'Link directly to an anchor on the page',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'show_in_graphql' => 1,
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_5bcf8c52659f2',
            'label' => 'Icon',
            'name' => 'icon',
            'type' => 'text',
            'instructions' => 'Add a heroicon',
            'required' => 0,
            'conditional_logic' => 0,
            'show_in_graphql' => 1,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_5bcf8c52659f2',
            'label' => 'Icon',
            'name' => 'icon',
            'type' => 'text',
            'instructions' => 'Add a heroicon',
            'required' => 0,
            'conditional_logic' => 0,
            'show_in_graphql' => 1,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_5bcf8c52659f3',
            'label' => 'Has Mega Menu?',
            'name' => 'has_mega_menu',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'show_in_graphql' => 1,
            'message' => '',
            'default_value' => 0,
            'ui' => 1,
            'ui_on_text' => '',
            'ui_off_text' => '',
          ),
          array(
            'key' => 'field_5bcf8c52659f4',
            'label' => 'Mega Menu',
            'name' => 'mega_menu',
            'type' => 'post_object',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_5bcf8c52659f3',
                  'operator' => '==',
                  'value' => '1',
                ),
              ),
            ),
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'show_in_graphql' => 1,
            'post_type' => array(
              0 => 'megamenu',
            ),
            'taxonomy' => '',
            'allow_null' => 0,
            'multiple' => 0,
            'return_format' => 'object',
            'ui' => 1,
          ),
        ),
        'location' => array(
          array(
            array(
              'param' => 'nav_menu_item',
              'operator' => '==',
              'value' => 'all',
            ),
          ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'seamless',
        'label_placement' => 'top',
        'instruction_placement' => 'field',
        'hide_on_screen' => '',
        'show_in_graphql' => 1,
        'graphql_field_name' => 'menuAcf',
        'active' => 1,
        'description' => '',
      )
    );

  }
endif;