<?php


function shalimar_script(){


    wp_enqueue_style( 'google-font', 'http://fonts.googleapis.com/css?family=Oswald:400,700,300', array(), '3.0.3' );
    wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/css/bootstrap.css' ), array(), '3.0.3' );
    wp_enqueue_style( 'font-awesome', get_theme_file_uri( '/css/font-awesome.css' ), array(), '4.0.3' );
    wp_enqueue_style( 'main_css', get_theme_file_uri( '/css/main.css' ), array( ), '1.0' );
    wp_enqueue_style( 'bxslider', get_theme_file_uri( '/css/jquery.bxslider.css' ), array( ), '1.0' );
    wp_enqueue_style( 'layerslider', get_theme_file_uri( '/css/layerslider.css' ), array(), '1.0' );
    // Theme stylesheet
    wp_enqueue_style('main-css', get_stylesheet_uri());



     wp_enqueue_script('jquery');
     //wp_enqueue_script( 's-jquery', get_theme_file_uri( '/js/s-jquery.js' ), array( 's-jquery' ), '1.0', true );
     wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/js/bootstrap.js', array( 'jquery' ), '1.0', true );
     wp_enqueue_script( 'bxslider', get_template_directory_uri(). '/js/jquery.bxslider.js', array( 'jquery' ), '1.0', true );
     wp_enqueue_script( 'label_better', get_template_directory_uri(). '/js/jquery.label_better.js' , array( 'jquery' ), '1.0', true );
     wp_enqueue_script( 'mixitup', get_template_directory_uri(). '/js/jquery.mixitup.js', array( 'jquery' ), '1.0', true );
     wp_enqueue_script( 'easypiechart', get_template_directory_uri(). '/js/jquery.easypiechart.js', array( 'jquery' ), '1.0', true );
     wp_enqueue_script( 'inview', get_template_directory_uri(). '/js/jquery.inview.js', array( 'jquery' ), '1.0', true );
     wp_enqueue_script( 'countUp', get_template_directory_uri(). '/js/countUp.js', array( 'jquery' ), '1.0', true );
     wp_enqueue_script( 'greensock', get_template_directory_uri(). '/js/greensock.js', array( 'jquery' ), '1.0', true );
     wp_enqueue_script( 'layerslider_transitions', get_template_directory_uri(). '/js/layerslider.transitions.js', array( 'jquery' ), '1.0', true );
     wp_enqueue_script( 'layerslider_kreaturamedia', get_template_directory_uri(). '/js/layerslider.kreaturamedia.jquery.js', array( 'jquery' ), '1.0', true );

     wp_enqueue_script( 'grid', get_theme_file_uri( '/js/grid.js' ), array( 'jquery' ), '1.0', true );
     wp_enqueue_script( 'main', get_template_directory_uri(). '/js/main.js' , array( 'jquery' ), '1.0', true );

     wp_enqueue_script( 'modernizr', get_theme_file_uri( '/js/modernizr.custom.js' ), array( 'jquery' ), '1.0', false );


}

add_action( 'wp_enqueue_scripts', 'shalimar_script' );