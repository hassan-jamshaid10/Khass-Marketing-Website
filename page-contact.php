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
      <form>
        <div class="form-row">
          <input type="text" placeholder="First Name" name="first_name" required>
          <input type="text" placeholder="Last Name" name="last_name" required>
        </div>
        
        <div class="form-row">
          <input type="email" placeholder="Email" name="email" required>
          <input type="tel" placeholder="Phone Number +91" name="phone">
        </div>
        
        <div class="form-row services">
          <label><input type="radio" name="service" value="brand"> Brand Startup</label>
          <label><input type="radio" name="service" value="smm"> Social Media Marketing</label>
          <label><input type="radio" name="service" value="uiux"> UI/UX</label>
          <label><input type="radio" name="service" value="web"> Web Development</label>
        </div>
        
        <textarea name="message" placeholder="Write your message..."></textarea>
        
        <button type="submit" class="send-btn">Send Message</button>
      </form>
    </div>
    
  </div>
</section>

<?php get_footer(); ?>