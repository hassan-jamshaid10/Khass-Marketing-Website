<?php
/**
 * Template Name: Blog Page
 */
get_header();
?>

<!-- BLOG PAGE START -->
<!-- <section class="blog-featured-post">
  <div class="container">
    <div class="featured-wrapper">
      <div class="featured-text">
        <span class="featured-label">FEATURED POST</span>
        <h2>Your success is our success. We align stratgies with your business goals.</h2>
        <p class="featured-meta">
          By&nbsp;<span class="featured-author">Zenah Malik</span>&nbsp;| May 23, 2022
        </p>

        <p class="featured-description">
          At Khaas Marketing, we are on a mission to empower brands by delivering bespoke digital marketing solutions
          that drive real results.
        </p>
        <a href="#" class="btn-read-more">Read More ></a>
      </div>
      <div class="featured-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_purple_character.png"
          alt="Featured Post Image" />
      </div>
    </div>
  </div>
</section> -->
<section class="blog-featured-post">
  <div class="container">
    <div class="featured-wrapper">
      <?php
      // Query latest post from "featured" category
      $featured = new WP_Query(array(
        'category_name'  => 'featured', // slug of your category
        'posts_per_page' => 1
      ));

      if ($featured->have_posts()) :
        while ($featured->have_posts()) : $featured->the_post(); ?>
          <div class="featured-text">
            <span class="featured-label">FEATURED POST</span>

            <h2><?php the_title(); ?></h2>

            <p class="featured-meta">
              By&nbsp;<span class="featured-author"><?php the_author(); ?></span>&nbsp;| 
              <?php echo get_the_date(); ?>
            </p>

            <p class="featured-description">
              <?php echo wp_trim_words(get_the_excerpt(), 25); ?>
            </p>

            <a href="<?php the_permalink(); ?>" class="btn-read-more">Read More ></a>
          </div>

          <div class="featured-image">
            <?php 
            if (has_post_thumbnail()) {
              the_post_thumbnail('large', array('alt' => get_the_title()));
            } else { ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_purple_character.png" alt="Default Image" />
            <?php } ?>
          </div>
        <?php endwhile;
        wp_reset_postdata();
      endif; ?>
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
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $allposts = new WP_Query(array(
        'posts_per_page'   => 5, // only 5 per page
        'paged'            => $paged,
        'category__not_in' => array(get_cat_ID('featured')),
        'order'            => 'ASC', // oldest first
      ));

      if ($allposts->have_posts()) :
        while ($allposts->have_posts()) : $allposts->the_post(); ?>
          
          <div class="post-card">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-post.jpg" alt="Default Post Image" />
            <?php endif; ?>

            <div class="post-info">
              <span class="post-category">
                <?php
                $categories = get_the_category();
                if (!empty($categories)) {
                  echo esc_html($categories[0]->name);
                }
                ?>
              </span>
              <h3><?php the_title(); ?></h3>
              <p><?php echo get_the_excerpt(); ?></p>
            </div>
          </div>

        <?php endwhile; ?>
      <?php endif; wp_reset_postdata(); ?>
    </div>

    <!-- Pagination -->
    <div class="pagination">
      <?php
      $big = 999999999; // need an unlikely integer
      echo paginate_links(array(
        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'    => '?paged=%#%',
        'current'   => max(1, get_query_var('paged')),
        'total'     => $allposts->max_num_pages,
        'prev_text' => '&lt; Prev',
        'next_text' => 'Next &gt;',
      ));
      ?>
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
        From <span class="highlight-cyan">Idea <span style="color: #000;">to</span>
        Impact</span>
      </h2>
      <a href="https://icreativez.info/contact" class="services-link" data-aos="fade-left">Everything we do</a>
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
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ai.svg" alt="AI">
        </div>
        <h3>AI and Data Science</h3>
        <p>Unlock the true potential of your data. AI, machine learning, and advanced engineering to fuel success.</p>
      </div>

      <!-- Row 2 -->
      <div class="service-item" data-aos="fade-up" data-aos-delay="400">
        <div class="service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/code.svg" alt="Social Media">
        </div>
        <h3>Social Media Marketing</h3>
        <p>Execute high-impact social strategies that perform seamlessly across all platforms.</p>
      </div>

      <div class="service-item" data-aos="fade-up" data-aos-delay="500">
        <div class="service-icon">
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/uiux.svg" alt="UI/UX"> -->
        </div>
        <h3>UX/UI Design</h3>
        <p>Good design isn’t just pretty—it works. We craft sleek interfaces that feel right at home.</p>
      </div>

      <div class="service-item" data-aos="fade-up" data-aos-delay="600">
        <div class="service-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/qa.svg" alt="Testing">
        </div>
        <h3>QA & Testing</h3>
        <p>From manual to automated testing, your product is rock-solid before launch.</p>
      </div>
    </div>
  </div>
</section>



<!-- cta -->

<div class="stats-cta-wrap">
<div class="diagonal-vector" aria-hidden="true">
  <picture>
    <!-- Mobile first -->
    <source media="(max-width: 768px)" 
            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/v2.svg">
    <!-- Default / Desktop -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vector2.png" 
         alt="Diagonal Vector" />
  </picture>
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
  <!-- decorative gradient line -->
  <svg class="cta-lines" viewBox="0 0 1296 495" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path 
      d="M499.5 511.888C838.44 324.063 1100.17 231.733 1357.44 228.337M890.085 -17.1082C690.015 156.232 29.2423 128.993 -61.4377 330.886" 
      stroke="url(#paint0_linear_630_20)" 
      stroke-width="6.72453" 
      stroke-linecap="round" 
    />
    <defs>
      <linearGradient id="paint0_linear_630_20" x1="626.154" y1="-176.513" x2="412.881" y2="1599.47" gradientUnits="userSpaceOnUse">
        <stop stop-color="#111010"/>
        <stop offset="0.37" stop-color="#7219A3"/>
        <stop offset="0.71" stop-color="#EAFDFF"/>
        <stop offset="1" stop-color="#EAFDFF" stop-opacity="0"/>
      </linearGradient>
    </defs>
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
        <li class="faq-item">
          <div class="faq-question">
            <span class="faq-number">01</span>
            <span class="faq-text">What differentiates Khaas Marketing from other agencies?</span>
            <button class="faq-toggle" type="button" aria-label="Toggle answer">
              <span class="faq-icon">+</span>
            </button>
          </div>
          <div class="faq-answer">
            <p>Khaas Marketing stands out through our unique combination of cutting-edge design expertise, data-driven strategies, and personalized client relationships. We don't just create campaigns—we build scalable solutions that grow with your business, backed by transparent communication and measurable results that exceed industry standards.</p>
          </div>
        </li>
        
        <li class="faq-item">
          <div class="faq-question">
            <span class="faq-number">02</span>
            <span class="faq-text">Are your designs and campaigns built with scalability in mind?</span>
            <button class="faq-toggle" type="button" aria-label="Toggle answer">
              <span class="faq-icon">+</span>
            </button>
          </div>
          <div class="faq-answer">
            <p>Absolutely! Every design and campaign we create is built with scalability as a core principle. We use modular design systems, flexible frameworks, and future-proof technologies that allow your marketing assets to grow and adapt as your business expands, ensuring long-term value and consistency.</p>
          </div>
        </li>
        
        <li class="faq-item">
          <div class="faq-question">
            <span class="faq-number">03</span>
            <span class="faq-text">Which industries do you serve with custom software?</span>
            <button class="faq-toggle" type="button" aria-label="Toggle answer">
              <span class="faq-icon">+</span>
            </button>
          </div>
          <div class="faq-answer">
            <p>We serve a diverse range of industries including e-commerce, healthcare, fintech, education, real estate, and professional services. Our custom software solutions are tailored to meet the specific regulatory, security, and user experience requirements of each industry, ensuring compliance and optimal performance.</p>
          </div>
        </li>
        
        <li class="faq-item">
          <div class="faq-question">
            <span class="faq-number">04</span>
            <span class="faq-text">What is your onboarding process for new clients?</span>
            <button class="faq-toggle" type="button" aria-label="Toggle answer">
              <span class="faq-icon">+</span>
            </button>
          </div>
          <div class="faq-answer">
            <p>Our onboarding process is designed to be smooth and comprehensive. It starts with a discovery call to understand your goals, followed by a detailed project brief, team assignment, and kickoff meeting. We establish clear communication channels, set milestones, and provide regular updates to ensure you're always in the loop.</p>
          </div>
        </li>
        
        <li class="faq-item">
          <div class="faq-question">
            <span class="faq-number">05</span>
            <span class="faq-text">What is the timeline for custom software development?</span>
            <button class="faq-toggle" type="button" aria-label="Toggle answer">
              <span class="faq-icon">+</span>
            </button>
          </div>
          <div class="faq-answer">
            <p>Timelines vary based on project complexity, but typically range from 8-16 weeks for standard applications to 6-12 months for enterprise solutions. We use agile methodologies to deliver working prototypes early and often, allowing for iterative improvements and faster time-to-market.</p>
          </div>
        </li>
      </ul>
    </div>
    
 

<div class="testimonial-section">
  <h2>Look what people say<br>about our Services</h2>

  <div class="card-stack">
    <div class="card active">
      <p>
        Partnering with Khaos Marketing was a game-changer. Their cutting edge design and seamless functionality elevated our website experience resulting in increased traffic, higher conversions, and exceptional user feedback. Their team's strategic insights and top-tier collaboration made all the difference.
      </p>
      <div class="author">
        <div class="name">Alaska Kaur</div>
        <div class="role">Owner</div>
      </div>
    </div>

    <div class="card">
      <p>
        Absolutely fantastic service! The team was proactive, communicative, and creative in ways that took our business to the next level.
      </p>
      <div class="author">
        <div class="name">John Doe</div>
        <div class="role">CEO</div>
      </div>
    </div>

    <div class="card">
      <p>
        They truly understand our needs and deliver beyond expectations every time. A pleasure to work with!
      </p>
      <div class="author">
        <div class="name">Jane Smith</div>
        <div class="role">Marketing Director</div>
      </div>
    </div>
  </div>
</div>

  </section>



<?php get_footer(); ?>