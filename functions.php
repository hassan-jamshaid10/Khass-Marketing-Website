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
            array(), // Remove jQuery dependency to avoid conflicts
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

function hassan_register_blog_pattern() {
    register_block_pattern(
      'hassan/custom-blog-posts',
      array(
        'title' => __('Custom Blog Posts Grid', 'hassan'),
        'description' => _x('Displays a styled grid of recent blog posts using custom layout.', 'Block pattern description', 'hassan'),
        'categories' => array('featured'),
        'content' => '
  <!-- wp:group {"className":"container"} -->
  <div class="container">
    <h2 class="section-heading">All Posts</h2>
  
    <!-- wp:query {"queryId":1,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date"}} -->
    <div class="posts-grid wp-block-query">
      <!-- wp:post-template -->
        <!-- wp:group {"className":"post-card","layout":{"type":"constrained"}} -->
        <div class="post-card" data-aos="fade-up">
          <!-- wp:post-featured-image {"sizeSlug":"medium_large"} /-->
          <!-- wp:group {"className":"post-info"} -->
          <div class="post-info">
            <!-- wp:post-terms {"term":"category"} /-->
            <!-- wp:post-title {"level":3, "isLink":true} /-->
            <!-- wp:post-excerpt {"moreText":"...","excerptLength":25} /-->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
  
    <!-- wp:query-pagination -->
    <div class="pagination">
      <!-- wp:query-pagination-previous {"label":"< Prev"} /-->
      <!-- wp:query-pagination-next {"label":"Next >"} /-->
    </div>
    <!-- /wp:query-pagination -->
  </div>
  <!-- /wp:group -->
  '
      )
    );
  }
  add_action('init', 'hassan_register_blog_pattern');
  
  // Removed testimonial slider assets as they don't exist and could cause errors

// Disable Contact Form 7 default styles (keep JS for AJAX/validation)
add_filter( 'wpcf7_load_css', '__return_false' );
function mytheme_assets() {
  // Your contact page CSS
  wp_enqueue_style( 'contact-css', get_stylesheet_directory_uri() . '/assets/css/style.css', [], null );

  // OPTIONAL: Font Awesome (for your <i> icons)
  // wp_enqueue_style( 'fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', [], '6.5.0' );

  // OPTIONAL: AOS (since you used data-aos)
  // wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.4/dist/aos.css', [], '2.3.4' );
  // wp_enqueue_script( 'aos', 'https://unpkg.com/aos@2.3.4/dist/aos.js', [], '2.3.4', true );
  // add_action('wp_footer', function(){ echo "<script>AOS.init();</script>"; });
}
add_action( 'wp_enqueue_scripts', 'mytheme_assets' );




function mytheme_enqueue_contact_styles() {
  // Only load on the contact page (optional, recommended)
  if ( is_page( 'contact' ) ) {
      wp_enqueue_style(
          'contact-css',
          get_stylesheet_directory_uri() . '/assets/css/contact.css',
          array(), // dependencies
          filemtime( get_stylesheet_directory() . '/assets/css/contact.css' ) // cache-busting
      );
  }
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_contact_styles' );

  

