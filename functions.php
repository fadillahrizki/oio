<?php

function themeslug_enqueue_style()
{
    wp_enqueue_style('bootstrap-css', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css", false);
    wp_enqueue_style('datepicker-css', "https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css", false);
    wp_enqueue_style('animate', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css", false);
    wp_enqueue_style('owl-carousel-css', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", false);
    wp_enqueue_style('owl-default-theme', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css", false);
    wp_enqueue_style('font', "https://fonts.googleapis.com/css2?family=Open+Sans&display=swap", false);
    wp_enqueue_style('ion-slider', "https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css", false);
    wp_enqueue_style('style-css', get_stylesheet_uri(), false);
}

function themeslug_enqueue_script()
{
    wp_enqueue_script('jquery-js', "https://code.jquery.com/jquery-3.5.1.min.js", false);
    wp_enqueue_script('moment-js', "https://cdn.jsdelivr.net/momentjs/latest/moment.min.js", false);
    wp_enqueue_script('bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js", false);
    wp_enqueue_script('owl-carousel-js', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", false);
    wp_enqueue_script('ionicons', "https://unpkg.com/ionicons@5.2.3/dist/ionicons.js", false);
    wp_enqueue_script('datepicker-js', "https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js", false);
    wp_enqueue_script('ion-slider-js', "https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js", false);
    wp_enqueue_script('app-js', get_template_directory_uri() . '/app.js', false);
}

add_action('wp_enqueue_scripts', 'themeslug_enqueue_style');
add_action('wp_enqueue_scripts', 'themeslug_enqueue_script');

add_theme_support('post-thumbnails');
