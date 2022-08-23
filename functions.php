<?php
/**
 * harmonyTheme functions and definitions
 *
 * @package harmonyTheme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$harmonyTheme_includes = array(

  '/enqueue.php',                         // Enqueue scripts and styles.
  '/setup.php',                         // Enqueue scripts and styles.
  '/custom-post-type-product.php',     // Enqueue scripts and styles.

);
foreach ( $harmonyTheme_includes as $file ) {
  $filepath = locate_template( 'inc' . $file );
  if ( ! $filepath ) {
    trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
  }
  require_once $filepath;
}