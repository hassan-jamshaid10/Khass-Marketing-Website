<?php
get_header();
?>


<section class="contact-section" data-aos="fade-up">
  <div class="contact-container">
    
    <!-- Left Side Contact Info -->
    <div class="contact-info">
      <h2>Contact Information</h2>
      
      <p class="contact-email">
        <i class="fas fa-envelope"></i> 
        <a href="mailto:Qirat@chaosmarketing.com">Qirat@chaosmarketing.com</a>
      </p>
      
      <p class="contact-address">
        <i class="fas fa-map-marker-alt"></i> 
        717 K Street, STE 207 Sacramento, CA 95814, United States
      </p>
      
      <div class="social-icons">
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
    
    <!-- Right Side Form -->
    
    <div class="contact-form">
      <?php echo do_shortcode('[contact-form-7 id="ffe35b8" title="contact"]'); ?>
    </div>

  
    
  </div>
</section>

<?php get_footer(); ?>