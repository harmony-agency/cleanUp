<?php

/**
   * Load theme's JavaScript and CSS sources.
   */
  function cleanup_scripts() {
    // Get the theme data.
    $the_theme     = wp_get_theme();
    $theme_version = $the_theme->get( 'Version' );

    //swipper_css
    $swipper_css_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/css/swiper.min.css' );
    wp_enqueue_style( 'swiper-styles', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), $swipper_css_version );

   // harmony.css
   $harmony_css_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/css/harmony.css' );
   wp_enqueue_style( 'harmony-styles', get_template_directory_uri() . '/assets/css/harmony.css', array(), $harmony_css_version );

   // main.css
    $main_css_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/css/main.css' );
    wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/assets/css/main.css', array(), $main_css_version );

    // responsive.css
    $responsive_css_version = $theme_version . '.' . filemtime( get_template_directory() . '/assets/css/responsive.css' );
    wp_enqueue_style( 'responsive-styles', get_template_directory_uri() . '/assets/css/responsive.css', array(), $responsive_css_version );

   

    wp_enqueue_script( 'jquery' );


    //swipper_js
    $swipper_js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/swiper.min.js' );
    wp_enqueue_script( 'swiper-scripts', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), $swipper_js_version, true );



    //harmony.js
    $cleanup_version = $harmony_version . '.' . filemtime( get_template_directory() . '/assets/js/harmony.js' );
    wp_enqueue_script( 'harmony-script', get_template_directory_uri() . '/assets/js/harmony.js', array(), $cleanup_version, true );

   //bootstrap.js
    $cleanup_version = $bootstrap_version . '.' . filemtime( get_template_directory() . '/assets/js/bootstrap.min.js' );
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), $cleanup_version, true );

  }

    add_action( 'wp_enqueue_scripts', 'cleanup_scripts' );