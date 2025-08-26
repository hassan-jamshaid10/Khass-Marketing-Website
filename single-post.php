<?php get_header(); ?>

<div class="single-blog-container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <!-- Featured Image -->
    <div class="blog-featured-image">
      <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail('large');
      } ?>
    </div>

    <!-- Blog Content -->
    <div class="blog-content">
      <h1 class="blog-title"><?php the_title(); ?></h1>
      
      <div class="blog-meta">
        <p>Written by <?php the_author(); ?> | <a> <?php echo get_the_date(); ?> </a></p>
      </div>
      <div class="blog-divider"></div>
      
      <div class="blog-description">
        <?php the_content(); ?>
      </div>
    </div>

  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
