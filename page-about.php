<?php
get_header();
// get_template_part('template-parts/site-about.php');
?>
<section class="hero-section">
  <div class="hero-content">
    <h1 class="gradient-text">
      Our Story
    </h1>
    <p>
    We are a passionate team of experts
    dedicated to creating your digital value.
    </p>
 <p>We create magical digital ideas, products and experiences.</p>
  </div>

  <div class="about-vector">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-graphic-transparent.svg" alt="about Vector" />
</div>


</section>


<section class="who-we-are" data-aos="fade-up" data-aos-duration="1200">
  <div class="container">
    <div class="who-we-are-content">
      <div class="text-box">
        <hr class="accent-line">
        <h2>Who We Are</h2>
        <p>We are an enthusiastic team sharing creativity and efficiency, passion and expertise.</p>
      </div>
      <div class="image-box">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image.jpg" alt="Who We Are Image">
      </div>
    </div>
  </div>
</section>




<?php get_footer(); ?>
