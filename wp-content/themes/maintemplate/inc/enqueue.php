<?php


function files_enqueue() {
 // ______ Cascading Style Sheets ______

 wp_enqueue_style('components',  get_template_directory_uri().'/css/components.css', array(), '1.0');
 wp_enqueue_style('icons',  get_template_directory_uri().'/css/icons.css', array(), '1.0');
 wp_enqueue_style('responsee',  get_template_directory_uri().'/css/responsee.css', array(), '1.0');
 wp_enqueue_style('owl-carousel',  get_template_directory_uri().'/owl-carousel/owl.carousel.css', array(), '1.0');
 wp_enqueue_style('owl-theme',  get_template_directory_uri().'/owl-carousel/owl.theme.css', array(), '1.0');
 wp_enqueue_style('template-style',  get_template_directory_uri().'/css/template-style.css', array(), '1.0');
 wp_enqueue_style('latin',  'https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext', array(), '1.0');
 wp_enqueue_style('open-sans',  'https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext', array(), '1.0');
 wp_enqueue_style('camera',  get_template_directory_uri().'/css/camera.css', array(), '1.0');
 wp_enqueue_style('cubeportfolio',  get_template_directory_uri().'/css/cubeportfolio.min.css', array(), '1.0');
 wp_enqueue_style('components',  get_template_directory_uri().'/css/cubeportfolio.style.css', array(), '1.0');
 wp_enqueue_style('animate',  get_template_directory_uri().'/css/animate.css', array(), '1.0');

 //Main CSS Files style.css
 wp_enqueue_style('style-css', get_stylesheet_uri());

// ______ JavaScript files ______
 // jQuery from wordpress
 wp_enqueue_script('jquery');
 wp_enqueue_script( 'jquery-ui', get_template_directory_uri().'/js/jquery-ui.min.js', array('jquery'), '1.0', true );
 wp_enqueue_script( 'jquery.mobile', get_template_directory_uri().'/js/jquery.mobile.customized.min.js', array('jquery'), '1.0', true );
 wp_enqueue_script( 'jquery.easing', get_template_directory_uri().'/js/jquery.easing.1.3.js', array('jquery'), '1.0', true );
 wp_enqueue_script( 'camera', get_template_directory_uri().'/js/camera.min.js', array('jquery'), '1.0', true );
 wp_enqueue_script( 'responsee', get_template_directory_uri().'/js/responsee.js', array('jquery'), '1.0', true );
 wp_enqueue_script( 'owl-carousel', get_template_directory_uri().'/owl-carousel/owl.carousel.js', array('jquery'), '1.0', true );
 wp_enqueue_script( 'template', get_template_directory_uri().'/js/template-scripts.js', array('jquery'), '1.0', true );
 wp_enqueue_script( 'cubeportfolio', get_template_directory_uri().'/js/jquery.cubeportfolio.min.js', array('jquery'), '1.0', true );
 wp_enqueue_script( 'wow', get_template_directory_uri().'/js/wow.min.js', array('jquery'), '1.0', true );
 wp_enqueue_script( 'custom-js', get_template_directory_uri().'/js/custom.js', array('jquery'), '1.0', true );




}
add_action( 'wp_enqueue_scripts', 'files_enqueue' );
