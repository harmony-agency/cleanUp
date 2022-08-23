<?php

  if ( ! function_exists( 'cleanUpTheme_setup' ) ) {
 
    function cleanUpTheme_setup(){
      add_theme_support('menus');
    add_theme_support( 'post-thumbnails' );
      if( function_exists('acf_add_options_page') ) {
        acf_add_options_page();   
       }
        // register_nav_menus( array(
        //     'primary_menu' => ( 'Primary Menu', 'text_domain' ),
        //     'footer_menu'  => ( 'Footer Menu', 'text_domain' ),
        // ) );
    }
    add_action( 'after_setup_theme', 'cleanUpTheme_setup', 0 );
}


