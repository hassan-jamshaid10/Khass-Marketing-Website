<?php
/**
 * Template Name: Blog Page
 */
get_header();
?>

<!-- BLOG PAGE START -->
<section class="blog-featured-post">
  <div class="container">
    <div class="featured-wrapper">
      <div class="featured-text">
        <span class="featured-label">FEATURED POST</span>
        <h2>Your success is our success. We align stratgies with your business goals.</h2>
        <p class="featured-meta">
          By&nbsp;<span class="featured-author">Zenah Malik</span>&nbsp;| May 23, 2022
        </p>

        <p class="featured-description">
          At Khaas Marketing, we are on a mission to empower brands by delivering bespoke digital marketing solutions that drive real results.
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

<!-- ✅ SERVICES SECTION -->
<section class="services-section">
  <div class="container">
    <div class="services-heading-wrapper" data-aos="fade-right">
      <h2 class="services-heading">
        All-in-<span class="highlight-purple">One Marketing</span><br/> Support,
        From <span class="highlight-cyan">Idea to Impact</span>
      </h2>
      <a href="#" class="services-link" data-aos="fade-left">Everything we do</a>
    </div>

    <div class="services-grid">
      <!-- Row 1 -->
      <div class="service-item" data-aos="fade-up" data-aos-delay="100">
        <div class="service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/code.svg" alt="Software">
        </div>
        <h3>Custom Software Development</h3>
        <p>We don’t force your business to fit the software—<br>we build the software to fit your business.</p>
      </div>

      <div class="service-item" data-aos="fade-up" data-aos-delay="200">
        <div class="service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/done.svg" alt="SEO">
        </div>
        <h3>SEO & Conversion Optimization</h3>
        <p>Power your brand’s growth with expert SEO strategies that drive traffic and deliver measurable results.</p>
      </div>

      <div class="service-item" data-aos="fade-up" data-aos-delay="300">
        <div class="service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ai.jpg" alt="AI">
        </div>
        <h3>AI and Data Science</h3>
        <p>Unlock the true potential of your data. AI, machine learning, and advanced engineering to fuel success.</p>
      </div>

      <!-- Row 2 -->
      <div class="service-item" data-aos="fade-up" data-aos-delay="400">
        <div class="service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/social.jpg" alt="Social Media">
        </div>
        <h3>Social Media Marketing</h3>
        <p>Execute high-impact social strategies that perform seamlessly across all platforms.</p>
      </div>

      <div class="service-item" data-aos="fade-up" data-aos-delay="500">
        <h3>UX/UI Design</h3>
        <p>Good design isn’t just pretty—it works. We craft sleek interfaces that feel right at home.</p>
      </div>

      <div class="service-item" data-aos="fade-up" data-aos-delay="600">
        <div class="service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testing.jpg" alt="Testing">
        </div>
        <h3>QA & Testing</h3>
        <p>From manual to automated testing, your product is rock-solid before launch.</p>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>