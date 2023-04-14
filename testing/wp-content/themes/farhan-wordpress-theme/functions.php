<?php

function add_css()

{

   wp_register_style('first', get_template_directory_uri() . '/css/bootstrap.min.css', false,'1.1','all');
   wp_register_style('first', get_template_directory_uri() . '/css/style.css', false,'1.1','all');
   wp_register_style('first', get_template_directory_uri() . '/css/responsive.css', false,'1.1','all');
   wp_register_style('first', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.min.css', false,'1.1','all');

   wp_enqueue_style( 'first');

}


add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('js-script', get_template_directory_uri() . '/js/popper.min.js', array ( 'jquery' ), 1.1, true);
   
   wp_register_script('change', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array ( 'jquery' ), 1.1, true);
  
   wp_register_script('popup', get_template_directory_uri() . 'js/jquery-3.0.0.min.js', array ( 'jquery' ), 1.1, true);
  
   wp_register_script('carousel', get_template_directory_uri() . 'js/plugin.js', array ( 'jquery' ), 1.1, true);
   
   wp_register_script('bootstrap', get_template_directory_uri() . 'js/jquery.mCustomScrollbar.concat.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');
}
add_action('wp_enqueue_scripts', 'add_script');

