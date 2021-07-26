<?php
/* -------------------------------------------------------------------------- *\
    Require the widget files below
\* -------------------------------------------------------------------------- */
$pikari_widgets = array(
  'register-sidebars',                // Setup the sidebars
  'unregister-default-widgets'        // Add custom widgets
);

wp_file_loader( $pikari_widgets, 'widgets' );


// Unset the global variable.
unset( $pikari_widgets );

?>