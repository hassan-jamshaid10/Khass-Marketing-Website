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


<!-- ✅ SERVICES SECTION -->
<section class="services-section">
  <div class="container">
    <div class="services-heading-wrapper" data-aos="fade-right">
      <h2 class="services-heading">
        All-in-<span class="highlight-purple">One Marketing</span><br /> Support,
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


<div class="stats-cta-wrap">
  <div class="diagonal-vector" aria-hidden="true">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector2.png" alt="v1">
  </div>

  <!-- =============== STATS SECTION =============== -->
  <section class="stats-section" data-aos="fade-up">
    <h2 class="stats-title">
      Unlock Revenue Growth for Your<br>Business
    </h2>

    <div class="stats-row">
      <!-- Left Column: 2x2 Grid -->
      <div class="stats-column small-stats">
        <div class="stat-box" data-aos="fade-up" data-aos-delay="100">
          <h3>130<sup>+</sup></h3>
          <p>Happy Clients</p>
        </div>
        <div class="stat-box" data-aos="fade-up" data-aos-delay="200">
          <h3>15<sup>+</sup></h3>
          <p>Experience</p>
        </div>
        <div class="stat-box" data-aos="fade-up" data-aos-delay="300">
          <h3>90<sup>+</sup></h3>
          <p>Successful Projects</p>
        </div>
        <div class="stat-box" data-aos="fade-up" data-aos-delay="400">
          <h3>100<sup>%</sup></h3>
          <p>Passion</p>
        </div>
      </div>

      <!-- Right Column: Large Box -->
      <div class="stat-box large-box" data-aos="fade-left" data-aos-delay="500">
        <h4>Customized Strategies</h4>
        <p>
          We craft bespoke marketing strategies aligned precisely with your brand’s vision and goals — ensuring every
          campaign connects, converts, and delivers lasting impact.
        </p>
      </div>
    </div>

    <!-- Second Row: 2 Large Boxes -->
    <div class="stats-row bottom-row">
      <div class="stat-box large-box" data-aos="fade-up" data-aos-delay="600">
        <h4>Holistic Approach</h4>
        <p>
          Our comprehensive services cover everything from brand building to sales optimization. We provide a seamless
          and integrated experience for all your digital marketing needs.
        </p>
      </div>
      <div class="stat-box large-box" data-aos="fade-up" data-aos-delay="700">
        <h4>Expert Team</h4>
        <p>
          Our team consists of experienced professionals dedicated to driving your brand’s success. We bring industry
          expertise and a passion for innovation to every project.
        </p>
      </div>
    </div>
  </section>

  <!-- =============== CTA SECTION =============== -->
  <section class="cta-section">
    <!-- fade up like your stats boxes -->
    <div class="cta-card" data-aos="fade-up" data-aos-delay="150" data-aos-duration="800">
      <!-- decorative neon lines -->
      <svg class="cta-lines" viewBox="0 0 1440 560" preserveAspectRatio="none" aria-hidden="true">
        <defs>
          <!-- cyan ambient glow -->
          <filter id="glowCyan" x="-30%" y="-30%" width="160%" height="160%">
            <feGaussianBlur stdDeviation="18" result="blur" />
            <feMerge>
              <feMergeNode in="blur" />
              <feMergeNode in="SourceGraphic" />
            </feMerge>
          </filter>
          <!-- subtle purple edge glow -->
          <filter id="glowPurple" x="-30%" y="-30%" width="160%" height="160%">
            <feGaussianBlur stdDeviation="1.5" result="blur2" />
            <feMerge>
              <feMergeNode in="blur2" />
              <feMergeNode in="SourceGraphic" />
            </feMerge>
          </filter>
        </defs>

        <!-- TOP curve (soft arc like Figma) -->
        <path d="M -80 300 C 300 220, 900 180, 1520 160" fill="none" stroke="#0aa9c0" stroke-width="36" opacity="0.25"
          filter="url(#glowCyan)" />
        <path d="M -80 300 C 300 220, 900 180, 1520 160" fill="none" stroke="#6F1FB7" stroke-width="6"
          filter="url(#glowPurple)" />

        <!-- BOTTOM curve -->
        <path d="M -120 500 C 400 420, 1100 400, 1600 440" fill="none" stroke="#0aa9c0" stroke-width="36" opacity="0.25"
          filter="url(#glowCyan)" />
        <path d="M -120 500 C 400 420, 1100 400, 1600 440" fill="none" stroke="#6F1FB7" stroke-width="6"
          filter="url(#glowPurple)" />
      </svg>


      <!-- slight stagger for the text/link -->
      <div class="cta-content" data-aos="fade" data-aos-delay="450" data-aos-duration="600">
        <h2>Interested in<br>working together?</h2>
        <a class="cta-link" href="#">Start a project request <span class="arr">›</span></a>
      </div>
    </div>
  </section>


  <!-- =============== FAQ + TESTIMONIALS (inside same wrap so vector continues) =============== -->
  <section class="faq-testimonials">
    <div class="faq-top-accent"></div>

    <div class="faq-inner">
      <h2 class="faq-title">Frequently Asked Questions</h2>

      <ul class="faq-list">
        <li class="faq-item"><button class="faq-q" type="button">What differentiates Khaas Marketing from other
            agencies?</button></li>
        <li class="faq-item"><button class="faq-q" type="button">Are your designs and campaigns built with scalability
            in mind?</button></li>
        <li class="faq-item"><button class="faq-q" type="button">Which industries do you serve with custom
            software?</button></li>
        <li class="faq-item"><button class="faq-q" type="button">What is your onboarding process for new
            clients?</button></li>
        <li class="faq-item"><button class="faq-q" type="button">What is the timeline for custom software
            development?</button></li>
      </ul>
    </div>

    <div class="testi-wrap">
      <h3 class="testi-heading">
        Look what people say<br>about our <span>Services</span>
      </h3>

      <div class="testi-stack">
        <div class="card card-shadow-4"></div>
        <div class="card card-shadow-3"></div>
        <div class="card card-shadow-2"></div>
        <div class="card card-shadow-1"></div>

        <div class="card card-main">
          <div class="card-body">
            <p>
              Partnering with Khaas Marketing was a game-changer. Their cutting-edge design and seamless
              functionality elevated our website experience—resulting in increased traffic, higher conversions,
              and exceptional user feedback. Their team’s strategic insights and top-tier collaboration made all the
              difference.
            </p>
          </div>
          <div class="card-footer">
            <div class="name">Alaska Kaur</div>
            <div class="role">Owner</div>
          </div>
        </div>
      </div>

      <div class="dots">
        <span></span><span></span><span></span><span></span>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>
