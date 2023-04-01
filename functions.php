<?php
    add_action( 'after_setup_theme', 'generic_setup' );
    function generic_setup() {
        load_theme_textdomain( 'generic', get_template_directory() . '/languages' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'html5', array( 'search-form', 'navigation-widgets' ) );
        add_theme_support( 'woocommerce' );
        global $content_width;
        if ( !isset( $content_width ) ) { $content_width = 1920; }
        register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'generic' ) ) );
    }

    wp_enqueue_script( 'jquery' );

    // -------- Bootstrap CDN
    wp_register_style( 'Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' );
    wp_enqueue_style('Bootstrap');

    // -------- Fontawesome CDN
    wp_register_style( 'Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' );
    wp_enqueue_style('Font_Awesome');

    function baseline_files() {
        wp_enqueue_style('baseline_main_styles', get_stylesheet_uri());
        wp_enqueue_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
    }
    add_action('wp_enqueue_scripts', 'baseline_files');

    // -------- Slick slider css
    wp_register_style( 'Slick_slider_css', get_stylesheet_directory_uri() . '/vendors/slick.css');
    wp_enqueue_style('Slick_slider_css');

    // -------- Slick slider JS
    function slick_slider_load() {
        wp_enqueue_script( 'slick_slider_script', get_stylesheet_directory_uri() . '/js/vendors/slick.min.js');
    }

    add_action('wp_enqueue_scripts','slick_slider_load');

    // -------- Custom JS
    function custom_js_load() {
        wp_enqueue_script( 'custom-js-script', get_stylesheet_directory_uri() . '/js/custom.js');
    }

    add_action('wp_enqueue_scripts','custom_js_load');

    // -------- Adding Theme Functions
    function my_theme_setup(){
        add_theme_support('post-thumbnails');
        add_theme_support( 'menus' );

    }

    add_action('after_setup_theme', 'my_theme_setup');


    // -------- Adding Excerpt max length
    function custom_excerpt_length( $length ) {
	    return 10;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>