<?php
  // error_reporting(E_ERROR | E_WARNING | E_PARSE);

  function assets_path ($path) {
    echo get_bloginfo('template_directory') . '/assets/' . $path;
  }

  add_action( 'wp_head', 'register_js_css', 0);
  function register_js_css () {
    if (!is_admin()) {
      $dist = get_bloginfo('template_url') . '/dist';

      // Register the JavaScript and CSS files
      //                  HANDLE    SOURCE                       DEP   VERSION  IN FOOTER?
      wp_register_script('Scripts', $dist. '/website.bundle.js', null, '1.0.0', true);
      wp_register_style('Styles', $dist. '/main.css', null, '1.0.0', 'all');


      //load the scripts
      wp_enqueue_script('Scripts');
      wp_enqueue_style('Styles');
    }
  }

  if ( function_exists ('register_sidebar')) {
    register_sidebar(array(
      'name' => 'Main Sidebar',
      'id' => 'main-sidebar',
    ));
  }

  add_action( 'init', 'navigation_menus');
  function navigation_menus () {
    register_nav_menus(
      array( 'main-menu' => __( 'Main Menu' ) )
    );
  }

  add_theme_support( 'post-thumbnails');
  remove_action('wp_head', 'wp_generator');
