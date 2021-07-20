<?php
/* -------------------------------------------------------------------------- *\
    Require the widget files below
\* -------------------------------------------------------------------------- */
$d6_widgets = array(
  'register',                       //Setup the widget areas
  'share-buttons',                  // Social Share buttons

);

wp_file_loader( $d6_widgets, 'widgets' );


// Unset the global variable.
unset( $d6_widgets );

?>