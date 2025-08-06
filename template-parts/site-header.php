<header class="site-header sticky">
  <div class="container">
    <div class="logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Khaas Marketing Logo">
      </a>
    </div>

    <nav class="main-nav">
  <?php
    wp_nav_menu(array(
      'theme_location' => 'primary',
      'container' => false,
      'menu_class' => 'nav-links',
      'fallback_cb' => false,
    ));
  ?>
</nav>


    <div class="cta-button">
      <a href="#contact" class="btn-primary">Let’s Build Together <span>&rarr;</span></a>
    </div>
  </div>
</header>


