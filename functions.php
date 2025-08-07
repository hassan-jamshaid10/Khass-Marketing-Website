<?php
// functions.php — Khaas Theme

// Theme setup
function khaas_theme_setup() {
    // Register navigation menu for header
    register_nav_menus(array(
        'primary' => __('Primary Header Menu', 'khaas'),
    ));

    // Add theme support for title tag and post thumbnails
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'khaas_theme_setup');

// Enqueue styles and scripts
function khaas_enqueue_assets() {
    // Google Fonts: Outfit
    wp_enqueue_style(
        'khaas-google-fonts',
        'https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Required root WordPress style.css (with theme info header)
    wp_enqueue_style('khaas-style', get_stylesheet_uri());

    // ✅ Custom stylesheet from /assets/css/style.css
    $custom_css_path = get_template_directory() . '/assets/css/style.css';
    if (file_exists($custom_css_path)) {
        wp_enqueue_style(
            'khaas-custom',
            get_template_directory_uri() . '/assets/css/style.css',
            array('khaas-style'), // Make sure it loads after main style.css
            filemtime($custom_css_path) // Cache-busting
        );
    }

    // ✅ Optional JavaScript
    $custom_js_path = get_template_directory() . '/assets/js/main.js';
    if (file_exists($custom_js_path)) {
        wp_enqueue_script(
            'khaas-main-js',
            get_template_directory_uri() . '/assets/js/main.js',
            array('jquery'),
            filemtime($custom_js_path),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'khaas_enqueue_assets');

function enqueue_aos_scripts() {
    wp_enqueue_style('aos-css', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css');
    wp_enqueue_script('aos-js', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', [], null, true);

    // Initialize AOS in the footer
    add_action('wp_footer', function () {
        echo "<script>AOS.init({ once: true, duration: 800, offset: 100 });</script>";
    });
}
add_action('wp_enqueue_scripts', 'enqueue_aos_scripts');

