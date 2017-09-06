<?php
if ( ! function_exists ( 'simple_bootstrap_setup') ) :

    function simple_bootstrap_setup() {
        // let WordPress handle the Titles tags
        add_theme_support( 'title-tag' );
    }
endif;
add_action('after_setup_theme', 'simple_bootstrap_setup');


/*------ Register Menus --------- */

function register_simplebootstrap_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu'),
            'footer' => __('Footer Menu')
        )

    );

}
add_action('init', 'register_simplebootstrap_menus');


/* -------- Enabling Support for Post Thumbnails ----------*/
add_theme_support( 'post-thumbnails' );

/*------ Add Stylesheets --------- */

function simple_bootstrap_depend_scripts() {
  // Adding Dashicons in WordPress Front-end
  wp_enqueue_style( 'dashicons' );
  // this loads jquery (for bootstrap, among other things)
  wp_enqueue_script('jquery', get_stylesheet_uri(), 'dashicons' );
  wp_enqueue_script( 'jquery' , get_template_directory_uri() . '/assets/js/jquery-2.1.0.min.js', false, '2.1.0' );
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-1.9.1.min.js', false, '1.9.1' );
  // load boostrap
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '3.0.0' );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', '3.0.0' );
  // load custom js
  wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '1.9.1');
  //wp_enqueue_script( 'animate-shadow', get_template_directory_uri() . '/assets/js/jquery.animate-shadow-min.js', false, '1.0.0' );
  // enqueue main Stylesheets
  //wp_register_style('simple_bootstrap_styles', get_stylesheet_uri(), array( 'bootstrap' ), '3.0.0' );
	//wp_enqueue_style( 'simple_bootstrap_styles' );

}
add_action('wp_enqueue_scripts', 'simple_bootstrap_depend_scripts', 1);

function simple_bootstrap_scripts() {
  // enqueue main Stylesheets
  wp_register_style('simple_bootstrap_styles', get_stylesheet_uri(), array( 'bootstrap' ), '3.0.0' );
  wp_enqueue_style( 'simple_bootstrap_styles' );
}
add_action('wp_enqueue_scripts', 'simple_bootstrap_scripts', 99);




// Register Custom Navigation Walker
require_once('WP_Bootstrap_Navwalker.php');




/* ------ register widget areas ---------*/

function simple_bootstrap_widget_init() {
  register_sidebar( array(
    'name' => __('Main Sidebar', 'simple_bootstrap'),
    'id' => 'main-sidebar',
    'description' => __('Widgets added here will appear in all pages using the template Two Column Template', 'simple_bootstrap'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<h2 class="widget-title">',
    'after-title' => '</h2>'
  ));
}

add_action ('widgets_init', 'simple_bootstrap_widget_init');

/* Adding a custom post type for slider  */

function create_posttype() {
  register_post_type ( 'slides',
    array(
      'labels' => array(
          'name' => __('Slides'),
          'singular_name' => __('Slide')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'slides'),
      'supports' => array('title', 'thumbnail')
    )
  );
}
add_action( 'init', 'create_posttype' );

// Add custom logo support to 'Appearance'

add_theme_support( 'custom-logo' );

function simple_bootstrap_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'simple_bootstrap_custom_logo_setup' );
