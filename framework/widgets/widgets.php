<?php
/* -------------------------------------------------------------------------- *\
    Require the widget files below
\* -------------------------------------------------------------------------- */
$pikari_widgets = array(
  'register',                       //Setup the widget areas
  'share-buttons',                  // Social Share buttons

);

wp_file_loader( $pikari_widgets, 'widgets' );


// Unset the global variable.
unset( $pikari_widgets );

?>