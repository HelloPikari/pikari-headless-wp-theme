<?php

/**
 * Remove all extra image sizes
 *
 * @return void
 */
if ( ! function_exists( 'pikari_remove_extra_image_sizes' ) ) :
  function pikari_remove_extra_image_sizes() {
    array_map( 'remove_image_size', get_intermediate_image_sizes() );
  }
endif;

/**
 * Edit what image sizes are available in the image size dropdown
 *
 * @param [type] $size_names
 * @return void
 */
if ( ! function_exists( 'pikari_filter_image_size_names_choose' ) ) :
  function pikari_filter_image_size_names_choose($size_names) {
    return array_filter( $size_names, function( $size_name ){
      return 'full' === $size_name;
    }, ARRAY_FILTER_USE_KEY );
  }
endif;