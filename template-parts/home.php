<?php
get_header();
// get_template_part('template-parts/site-about.php');
?>
<section class="hero-section">
  <div class="hero-content">
    <h1 class="gradient-text">
      Empowering Brands Through<br/>
      Strategy-Driven Digital Solutions
    </h1>
    <p>
      We blend creativity with strategy to craft high-performance websites<br/>
      that convert visitors into loyal customers.
    </p>
    <a href="/contact" class="hero-button">Start a project request<span class="vector-arrow">›</span></a>
  </div>

  <div class="hero-vector">
  <picture>
    <!-- Mobile first -->
    <source media="(max-width: 768px)" 
            srcset="<?php echo get_template_directory_uri(); ?>/assets/images/v1.svg">
    <!-- Default / Desktop -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-graphic-transparent.svg" 
         alt="Hero Vector" />
  </picture>
</div>

</section>





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



<section class="stats-section" data-aos="fade-up">
  <h2 class="stats-title">Unlock Revenue Growth for Your Business</h2>

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
        Our comprehensive services cover everything from brand building to sales optimization. We provide a seamless and
        integrated experience for all your digital marketing needs.
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

<section class="ideas-impact">
  <div class="container">
    <h2 data-aos="fade-up">We Turn Ideas Into Impact</h2>

    <!-- Desktop Layout -->
    <div class="ideas-grid desktop-view">
      <div class="idea-item" data-aos="fade-right">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sprint.png" alt="Idea Image 1">
      </div>
      <div class="idea-item2" data-aos="fade-left">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dv.svg" alt="Idea Image 2">
      </div>
    </div>

    <!-- Mobile Layout -->
    <div class="mobile-view">
      <div class="idea-step" data-aos="fade-up" data-aos-delay="100">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/strategy.svg" alt="Strategy Icon">
        <div>
          <h3>Strategy</h3>
          <p>Develop long-term AI strategies to maximize the potential of custom software solutions for your business growth.</p>
        </div>
      </div>

      <div class="idea-step" data-aos="fade-up" data-aos-delay="200">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/design.svg" alt="Design Icon">
        <div>
          <h3>Design</h3>
          <p>Craft intuitive designs with cutting-edge tools to create AI software development services tailored to your vision.</p>
        </div>
      </div>

      <div class="idea-step" data-aos="fade-up" data-aos-delay="300">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dev.svg" alt="Development Icon">
        <div>
          <h3>Development & Testing</h3>
          <p>Build robust, scalable solutions and ensure excellence through rigorous testing of your AI-driven applications.</p>
        </div>
      </div>

      <div class="idea-step" data-aos="fade-up" data-aos-delay="400">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/launch.svg" alt="Launch Icon">
        <div>
          <h3>Launch</h3>
          <p>Deploy innovative AI software with precision for seamless integration and immediate business impact.</p>
        </div>
      </div>

      <div class="idea-step" data-aos="fade-up" data-aos-delay="500">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/support.svg" alt="Support Icon">
        <div>
          <h3>Support</h3>
          <p>Provide ongoing support for AI software development services to keep your systems optimized and future-ready.</p>
        </div>
      </div>
    </div>
  </div>
</section>



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

  <!-- =============== CTA SECTION =============== -->
 <!-- =============== CTA SECTION =============== -->
<section class="cta-section">
  <!-- glowing ellipse background -->
  <div class="cta-bg-svg">
    <svg width="1300" height="1090" viewBox="0 0 1300 1090" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g filter="url(#filter0_f_275_127)">
        <ellipse cx="650" cy="545" rx="450" ry="345" fill="url(#paint0_linear_275_127)" fill-opacity="0.5"/>
      </g>
      <defs>
        <filter id="filter0_f_275_127" x="0" y="0" width="1300" height="1090" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
          <feGaussianBlur stdDeviation="100" result="effect1_foregroundBlur_275_127"/>
        </filter>
        <linearGradient id="paint0_linear_275_127" x1="387.313" y1="241.194" x2="547.519" y2="914.388" gradientUnits="userSpaceOnUse">
          <stop stop-color="#7219A3"/>
          <stop offset="1" stop-color="#7219A3"/>
        </linearGradient>
      </defs>
    </svg>
  </div>

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

    <div class="cta-content" data-aos="fade" data-aos-delay="450" data-aos-duration="600">
      <h2>Interested in<br>working together?</h2>
      <a class="cta-link" href="#">Start a project request <span class="arr">›</span></a>
    </div>
  </div>
</section>




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

    <div class="hww-inner">
  <header class="hww-header">
    <h2>How We Work<span class="dot">.</span></h2>
    <p class="hww-sub">Clear, Fast, Effective.</p>
  </header>

  <div class="hww-grid">
    <!-- LEFT: Image -->
    <figure class="hww-figure">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone_in_hands.jpg" alt="How we work">
    </figure>

    <!-- RIGHT: Card -->
    <div class="hww-card">
      <ol class="hww-steps">
        <li class="hww-step">
          <span class="badge">1</span>
          <div class="step-text">
          <h3>Step 1</h3>
            <h4>Let’s Talk</h4>
            <p>Hop on a quick discovery call. We’ll learn about your goals, timeline, budget, and the kind of talent you need – so we can build the right plan for you.</p>
          </div>
        </li>

        <li class="hww-step">
          <span class="badge">2</span>
          <div class="step-text">
          <h3>Step 2</h3>
            <h4>Build the Right Fit.</h4>
            <p>In just a few days, we’ll shape your solution, lock in the engagement model, and handpick a team that’s ready to hit the ground running.</p>
          </div>
        </li>

        <li class="hww-step">
          <span class="badge">3</span>
          <div class="step-text">
            <h3>Step 3</h3>
            <h4>Launch &amp; Grow.</h4>
            <p>We get to work fast – tracking milestones, sharing updates, and adjusting along the way to make sure everything stays on track.</p>
          </div>
        </li>
      </ol>

      <a href="#" class="hww-cta">Schedule Call</a>
    </div>
  </div>
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
