<?php
/**
 * Template Name: Blog Page
 */
get_header();
?>
<?php get_template_part('hero'); ?>


<!-- BLOG PAGE START -->
<section class="blog-featured-post">
  <div class="container">
    <div class="featured-wrapper">
      <div class="featured-text">
        <span class="featured-label">FEATURED POST</span>
        <h2>Step-by-step guide to choosing great font pairs</h2>
        <p class="featured-meta">By Zarah Malik | May 23, 2022</p>
        <p class="featured-description">
          This step-by-step guide will walk you through the art of font pairing—from understanding typography basics to mastering contrast, hierarchy, and harmony.
        </p>
        <a href="#" class="btn-read-more">Read More ></a>
      </div>
      <div class="featured-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_purple_character.png" alt="Featured Post Image" />
      </div>
    </div>
  </div>
</section>

<section class="blog-all-posts">
  <!-- Blue vector background -->
  <div class="vector-background">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector1.png" alt="vector" />
  </div>

  <div class="container">
    <h2 class="section-heading">All posts</h2>
    
    <div class="posts-grid">
      <!-- Post card -->
      <div class="post-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_post1.jpg" alt="Post 1" />
        <div class="post-info">
          <span class="post-category">STARTUP</span>
          <h3>Design tips for designers that cover everything you need</h3>
          <p>Whether you're a beginner or a seasoned creative, this all-in-one guide is packed with essential design tips...</p>
        </div>
      </div>

      <div class="post-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_post2.jpg" alt="Post 2" />
        <div class="post-info">
          <span class="post-category">BUSINESS</span>
          <h3>How to build rapport with your web design clients</h3>
          <p>Discover communication strategies, trust-building techniques, and practical tips to create smooth design experiences...</p>
        </div>
      </div>

      <div class="post-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_post3.jpg" alt="Post 3" />
        <div class="post-info">
          <span class="post-category">STARTUP</span>
          <h3>Logo design trends to avoid in 2022</h3>
          <p>in this article, we break down the outdated, overused, and ineffictive logo trends that can weaken your brand in 2022. Learn what to avoid and why timeless.</p>
        </div>
      </div>

      <div class="post-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_post4.jpg" alt="Post 4" />
        <div class="post-info">
          <span class="post-category">TECHNOLOGY</span>
          <h3>8 Figma design systems you can download for free today</h3>
          <p>Level up your esign workflow with these 8 free Figma design systems - handpicked for UI/UX designers who value speed, consistency, and quality. From clean UI kits to fully responsive components</p>
        </div>
      </div>

      <div class="post-card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_post5.jpg" alt="Post 5" />
        <div class="post-info">
          <span class="post-category">ECONOMY</span>
          <h3>Font sizes in UI design: The complete guide to follow</h3>
          <p>This complete guide walks you through best practices for font sizing in UI design, includeing hierarchy, responsiveness, accessibility, and platform-specific tips.</p>
        </div>
      </div>

    </div>

    <div class="pagination">
      <a href="#" class="prev">&lt; Prev</a>
      <a href="#" class="next">Next &gt;</a>
    </div>
  </div>
</section>
<!-- BLOG PAGE END -->
<?php get_footer(); ?>
