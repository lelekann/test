<?php

//jQuery
function change_jquery_version () {
  wp_deregister_script('jquery');

  wp_register_script('jquery', 'https://code.jquery.com/jquery-1.12.4.min.js', [], '1.12.4');
  wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'change_jquery_version');

//Styles and Fonts
function al_styles(){
  wp_register_style('style', get_template_directory_uri() . '/assets/css/main.min.css');
  wp_enqueue_style( 'style');
  wp_register_style('owl_1', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
  wp_enqueue_style( 'owl_1');
  wp_register_style('owl_2', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
  wp_enqueue_style( 'owl_2');
  wp_register_style('al_barlow','https://fonts.googleapis.com/css?family=Barlow:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
  wp_enqueue_style('al_barlow');
  wp_register_style('al_sans','https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
  wp_enqueue_style('al_sans');
  wp_register_style('fontawesome','https://use.fontawesome.com/releases/v5.8.1/css/all.css');
  wp_enqueue_style('fontawesome');
}
add_action('wp_enqueue_scripts', 'al_styles');

//Scripts
function al_scripts(){
  wp_enqueue_script('owl', get_template_directory_uri() .'/assets/js/app.js', array(), null, true);
  wp_enqueue_script( 'script-one', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'al_scripts');

//Menu
add_theme_support('menus');
function al_menu() {
  register_nav_menu('primary', __('Primary Menu','final'));
}
add_action('after_setup_theme', 'al_menu');