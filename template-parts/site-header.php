<header class="site-header sticky">
  <div class="header-container">
    
    <div class="logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Khaas Marketing Logo">
      </a>
    </div>

    <nav class="main-nav" id="main-nav">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'nav-links',
          'fallback_cb' => false,
        ));
      ?>
    </nav>

    <div class="right-controls">
      <div class="cta-button mobile-hide">
      <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="btn-primary">
    Let’s Build Together <span>&rarr;</span>
</a>

      </div>

      <div class="menu-toggle" id="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    
  </div>
</header>
